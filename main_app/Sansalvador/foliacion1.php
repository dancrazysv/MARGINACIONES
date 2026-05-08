<?php
// Incluir el archivo de conexión (asume que existe conexion.php en la ruta correcta)
// Nota: En la página externa, este include debe ir ANTES de cualquier salida HTML si hay errores.
require_once("conexion.php");

// --- 1. Carga DINÁMICA de Mapeos ---
$map_tipo_partida = [];
$sql_tipo_partida = "SELECT iniciales_partida, nombre_partida FROM tipo_partida";
$result_tipo_partida = mysqli_query($con, $sql_tipo_partida);
if ($result_tipo_partida) {
    while ($row = mysqli_fetch_assoc($result_tipo_partida)) {
        $map_tipo_partida[$row['iniciales_partida']] = $row['nombre_partida'];
    }
} else { $error_carga_partida = "<strong>❌ ERROR CRÍTICO DE CARGA (TIPO PARTIDA):</strong> " . mysqli_error($con); }

$map_tipo_marginacion = [];
$sql_tipo_margi = "SELECT codigo, tipo FROM tipo_marginacion"; 
$result_tipo_margi = mysqli_query($con, $sql_tipo_margi);
if ($result_tipo_margi) {
    while ($row = mysqli_fetch_assoc($result_tipo_margi)) {
        $map_tipo_marginacion[$row['codigo']] = $row['tipo'];
    }
} else { $error_carga_margi = "<strong>❌ ERROR CRÍTICO DE CARGA (TIPO MARGINACIÓN):</strong> " . mysqli_error($con); }

$opciones_lugar = [
    'Sansalvador' => 'San Salvador', 
    'Mejicanos' => 'Mejicanos', 
    'Ciudaddelgado' => 'Ciudad Delgado', 
    'Cuscatancingo' => 'Cuscatancingo', 
    'Ayutuxtepeque' => 'Ayutuxtepeque'
];

// --- 2. Variables Iniciales y Recolección de Filtros ---
$total_resultados = 0;
$resultados_pagina = [];
$total_paginas = 0;
$pagina_actual = 1;

$filtros = [
    'TipoMargi' => $_GET['TipoMargi'] ?? '',
    'AnioP'     => $_GET['AnioP'] ?? '',
    'LibroP'    => $_GET['LibroP'] ?? '',
    'NPartida'  => $_GET['NPartida'] ?? '',
    'lugar'     => $_GET['lugar'] ?? '',
];


// --- 3. Lógica de Ejecución de la Consulta (Solo si se presionó 'Buscar') ---
if (isset($_GET['buscar'])) {
    
    $resultados_por_pagina = 5;
    $pagina_actual = (int)($_GET['p'] ?? 1);
    $offset = ($pagina_actual - 1) * $resultados_por_pagina;

    // 3.1. Construcción de la Cláusula WHERE - Mapeo de TipoMargi a TipoP
    $where_clauses = [];
    
    // 1. Procesar Tipo de Partida (Formulario: TipoMargi -> Columna: TipoP)
    $valor_tipo_partida = $filtros['TipoMargi'];
    if (!empty($valor_tipo_partida)) {
        $valor_escapado = mysqli_real_escape_string($con, $valor_tipo_partida);
        $where_clauses[] = "`TipoP` = '$valor_escapado'"; 
    }

    // 2. Procesar los demás filtros
    foreach ($filtros as $campo => $valor) {
        if ($campo === 'TipoMargi' || empty($valor)) {
            continue;
        }
        
        $valor_escapado = mysqli_real_escape_string($con, $valor);
        $where_clauses[] = "`$campo` = '$valor_escapado'"; 
    }

    $where_sql = '';
    if (!empty($where_clauses)) {
        $where_sql = 'WHERE ' . implode(' AND ', $where_clauses);
    }

    // 3.2. Consulta para Contar el total de resultados
    $sql_count = "SELECT COUNT(*) AS total FROM margi $where_sql";
    $result_count = mysqli_query($con, $sql_count);
    
    if (!$result_count) {
        $error_sql_count = "<strong>❌ ERROR AL CONTAR RESULTADOS:</strong> " . mysqli_error($con) . "<br>SQL ejecutada: <code>" . htmlspecialchars($sql_count) . "</code>";
        $total_resultados = 0;
    } else {
        $row_count = mysqli_fetch_assoc($result_count);
        $total_resultados = $row_count['total'];
    }

    // 3.3. Consulta principal con LIMIT para paginación
    if ($total_resultados > 0) {
        $sql_data = "SELECT * FROM margi $where_sql LIMIT $offset, $resultados_por_pagina";
        $result_data = mysqli_query($con, $sql_data);
        
        if (!$result_data) {
             $error_sql_data = "<strong>❌ ERROR AL OBTENER DATOS:</strong> " . mysqli_error($con) . "<br>SQL ejecutada: <code>" . htmlspecialchars($sql_data) . "</code>";
        } else {
            while ($row = mysqli_fetch_assoc($result_data)) {
                $resultados_pagina[] = $row;
            }
        }
    }
    
    $total_paginas = ceil($total_resultados / $resultados_por_pagina);
}
// Cierre de la conexión
if (isset($con) && is_object($con)) {
    mysqli_close($con);
}
?>

<div class="modal fade" id="consultaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Consulta de Foliaciones</h4>
      </div>
      <div class="modal-body">
        
        <?php if (isset($error_carga_partida) || isset($error_carga_margi)): ?>
            <div class="alert alert-danger" role="alert"><?php echo $error_carga_partida ?? ''; ?> <?php echo $error_carga_margi ?? ''; ?></div>
        <?php endif; ?>

        <div class="well">
            <form method="GET" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="form-inline">
                
                <input type="hidden" name="buscar" value="true">
                <input type="hidden" name="open_modal" value="true"> 

                <div class="form-group form-group-inline">
                    <span style="color: #555; font-weight: normal; display: block; margin-bottom: 5px;">
                        Tipo de Partida:
                    </span>
                    <input list="tipos" name="TipoMargi" id="tipo_partida" class="form-control" placeholder="Escriba o seleccione" value="<?php echo htmlspecialchars($filtros['TipoMargi']); ?>">
                    <datalist id="tipos">
                        <?php foreach ($map_tipo_partida as $inicial => $nombre): ?>
                            <option value="<?php echo $inicial; ?>"><?php echo $nombre; ?></option>
                        <?php endforeach; ?>
                    </datalist>
                </div>

                <?php foreach (['AnioP' => 'Año', 'LibroP' => 'Libro', 'NPartida' => 'Num. Partida'] as $campo => $label): ?>
                    <div class="form-group form-group-inline">
                        <span style="color: #555; font-weight: normal; display: block; margin-bottom: 5px;">
                            <?php echo $label; ?>:
                        </span>
                        <input type="<?php echo ($campo === 'AnioP' || $campo === 'NPartida') ? 'text' : 'text'; ?>" 
                               name="<?php echo $campo; ?>" 
                               id="<?php echo strtolower($campo); ?>" 
                               class="form-control" 
                               style="width: 130px;"
                               value="<?php echo htmlspecialchars($filtros[$campo]); ?>">
                    </div>
                <?php endforeach; ?>

                <div class="form-group form-group-inline">
                    <span style="color: #555; font-weight: normal; display: block; margin-bottom: 5px;">
                        Lugar:
                    </span>
                    <select name="lugar" id="lugar" class="form-control">
                        <option value="">-- Todos --</option>
                        <?php foreach ($opciones_lugar as $value => $label): ?>
                            <option value="<?php echo $value; ?>" <?php echo ($filtros['lugar'] === $value) ? 'selected' : ''; ?>>
                                <?php echo $label; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group form-group-inline" style="margin-left: 15px;">
                    <button type="submit" name="buscar" value="true" class="btn btn-primary">Buscar</button> 
                    
                    <button 
                        type="button" 
                        onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?open_modal=true'" 
                        class="btn btn-default"
                    >
                        Limpiar Formulario
                    </button>
                </div>
            </form>


        </div>
<div>
            Nota: para el año 2024, se recuerda que poseemos varios libros con la misma foliación, uno como Alcaldía de San Salvador (hasta 30/04/2024) y otro como Distrito de San Salvador del 01/05/2025 en adelante.       </div>
        <hr>

        <?php if (isset($_GET['buscar'])): ?>
            <h4 class="mb-3">Resultados de Búsqueda <span class="label label-success"><?php echo $total_resultados; ?> Encontrados</span></h4>
            
            <?php if (isset($error_sql_count) || isset($error_sql_data)): ?>
                <div class="alert alert-danger" role="alert"><?php echo $error_sql_count ?? ''; ?> <?php echo $error_sql_data ?? ''; ?></div>
            <?php endif; ?>

            <?php if ($total_resultados > 0 && !empty($resultados_pagina)): ?>

                <?php foreach ($resultados_pagina as $r): ?>
                    <?php
                    // Lógica de Mapeo y Transformación de Datos
                    $tipo_partida_nombre = $map_tipo_partida[$r['TipoP']] ?? $r['TipoP'];
                    $tipo_margi_nombre = $map_tipo_marginacion[$r['TipoMargi']] ?? $r['TipoMargi'];
                    
                    $area_actual_nombre = 'Pendiente';
                    switch ($r['revestado']) {
                        case 'completo': $area_actual_nombre = 'Archivo'; break;
                        case 'revisado3': $area_actual_nombre = 'Control de Calidad'; break;
                        case 'revisado1':
                        case 'revisado2': $area_actual_nombre = 'Depto. de Modificaciones'; break;
                        default: $area_actual_nombre = $r['revestado'];
                    }
                    $lugar_nombre = empty($r['lugar']) ? 'San Salvador' : ($opciones_lugar[$r['lugar']] ?? $r['lugar']);
                    ?>

                    <div class="panel panel-default resultado-panel">
                        <div class="panel-body">
                            <div class="row resultado-row">
                                
                                <div class="col-md-3 col-foliacion">
                                    <div class="seccion-titulo">Foliación</div>
                                    <div class="datos-grid">
                                        <div># Marg.:</div> <div><strong><?php echo htmlspecialchars($r['NMargi1']); ?></strong></div>
                                        <div>Tipo:</div> <div><?php echo htmlspecialchars($tipo_partida_nombre); ?></div>
                                        <div>Año:</div> <div><?php echo htmlspecialchars($r['AnioP']); ?></div>
                                        <div>Libro:</div> <div><?php echo htmlspecialchars($r['LibroP']); ?></div>
                                        <div>Partida:</div> <div><?php echo htmlspecialchars($r['NPartida']); ?></div>
                                        <div>Iniciales:</div> <div><?php echo htmlspecialchars($r['Iniciales1']); ?></div>
                                        <div style="grid-column: 1 / span 2; margin-top: 5px; border-top: 1px dashed #ccc;"></div>
                                        <div>Tipo Marg.:</div> <div><strong><?php echo htmlspecialchars($tipo_margi_nombre); ?></strong></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-marginacion">
                                    <div class="seccion-titulo">Marginación</div>
                                    <p class="small text-justify"><?php echo nl2br(htmlspecialchars($r['TxtMargi1'])); ?></p>
                                </div>
                                
                                <div class="col-md-3 col-libro-folio">
                                    <div class="seccion-titulo">Libro/Folio</div>
                                    <div class="datos-grid">
                                        <div>Libro-Folio:</div> <div><strong><?php echo htmlspecialchars($r['busquedalf']); ?></strong></div>
                                        <div>Estado:</div> <div><?php echo htmlspecialchars($r['estado']); ?></div>
                                        <div>Creación:</div> <div><?php echo htmlspecialchars($r['FechaC']); ?></div>
                                        <div>Edición:</div> <div><?php echo htmlspecialchars($r['Fechae']); ?></div>
                                        <div style="grid-column: 1 / span 2; margin-top: 5px; border-top: 1px dashed #ccc;"></div>
                                        <div>Área Actual:</div> <div><?php echo htmlspecialchars($area_actual_nombre); ?></div>
                                        <div>Lugar:</div> <div><?php echo htmlspecialchars($lugar_nombre); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <?php if ($total_paginas > 1): ?>
                    <nav aria-label="Navegación de resultados" class="text-center">
                        <ul class="pagination">
                            <?php for ($i = 1; $i <= $total_paginas; $i++): 
                                $params = http_build_query(array_merge($filtros, ['p' => $i, 'buscar' => 'true', 'open_modal' => 'true']));
                                $clase = ($i === $pagina_actual) ? 'active' : '';
                            ?>
                                <li class="<?php echo $clase; ?>">
                                    <a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?<?php echo $params; ?>"><?php echo $i; ?></a>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </nav>
                <?php endif; ?>
                
            <?php else: ?>
                <div class="alert alert-warning" role="alert">
                    No se encontraron resultados que coincidan con los criterios de búsqueda.
                </div>
            <?php endif; ?>

        <?php endif; // Fin de la sección de resultados ?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<script>
    $(document).ready(function(){
        // Revisa la URL por el parámetro 'open_modal=true' (o 'buscar=true')
        if (window.location.search.indexOf('open_modal=true') !== -1 || window.location.search.indexOf('buscar=true') !== -1) {
            
            // 1. Mostrar el modal
            $('#consultaModal').modal('show'); 
            
            // 2. Limpiar la URL del historial para evitar reapertura en F5
            var cleanUrl = window.location.pathname;
            history.replaceState(null, null, cleanUrl);
        }
    });
</script>