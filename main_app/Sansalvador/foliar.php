<?php
// Incluir el archivo de conexión
require_once("conexion.php");

// --- 1. Definición de Mapeos de Datos ---
// Simulación de datos de tablas relacionadas (tipo_partida, tipo_marginacion)
$map_tipo_partida = [
    'NAC' => 'Nacimiento', 
    'DEF' => 'Defunción', 
    'MAT' => 'Matrimonio'
    // Añade el resto de iniciales y nombres de partida aquí
];
$map_tipo_marginacion = [
    'ESTADO FAMILIAR' => 'Estado Familiar', 
    'DEFUNCION' => 'Defunción',
    // Añade el resto de códigos y tipos de marginación aquí
];

// Opciones de Lugar para el SELECT
$opciones_lugar = [
    'Sansalvador' => 'San Salvador', 
    'Mejicanos' => 'Mejicanos', 
    'Ciudaddelgado' => 'Ciudad Delgado', 
    'Cuscatancingo' => 'Cuscatancingo', 
    'Ayutuxtepeque' => 'Ayutuxtepeque'
];

// Variables iniciales
$total_resultados = 0;
$resultados_pagina = [];
$filtros = [
    'TipoMargi' => $_GET['TipoMargi'] ?? '',
    'AnioP'     => $_GET['AnioP'] ?? '',
    'LibroP'    => $_GET['LibroP'] ?? '',
    'NPartida'  => $_GET['NPartida'] ?? '',
    'lugar'     => $_GET['lugar'] ?? '',
];


// --- 2. Lógica de Ejecución de la Consulta (Solo si se presionó 'Buscar') ---
if (isset($_GET['buscar'])) {
    
    // Variables para la paginación
    $resultados_por_pagina = 5;
    $pagina_actual = (int)($_GET['p'] ?? 1);
    $offset = ($pagina_actual - 1) * $resultados_por_pagina;

    // 2.1. Construcción de la Consulta SQL (Filtros)
    $where_clauses = [];
    foreach ($filtros as $campo => $valor) {
        if (!empty($valor)) {
            $valor_escapado = mysqli_real_escape_string($con, $valor);
            $where_clauses[] = "`$campo` = '$valor_escapado'";
        }
    }
    $where_sql = '';
    if (!empty($where_clauses)) {
        $where_sql = 'WHERE ' . implode(' AND ', $where_clauses);
    }

    // 2.2. Consulta para contar el total de resultados
    $sql_count = "SELECT COUNT(*) AS total FROM margi $where_sql";
    $result_count = mysqli_query($con, $sql_count);
    $row_count = mysqli_fetch_assoc($result_count);
    $total_resultados = $row_count['total'];

    // 2.3. Consulta principal con LIMIT para paginación
    $sql_data = "SELECT * FROM margi $where_sql LIMIT $offset, $resultados_por_pagina";
    $result_data = mysqli_query($con, $sql_data);

    // Guardar resultados
    if ($result_data) {
        while ($row = mysqli_fetch_assoc($result_data)) {
            $resultados_pagina[] = $row;
        }
    }
}

// Calcular total de páginas (necesario incluso si no hay búsqueda para evitar errores)
$total_paginas = ($total_resultados > 0) ? ceil($total_resultados / $resultados_por_pagina) : 0;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consulta de Marginaciones</title>
    <style>
        /* Estilos CSS (similares a la versión anterior) */
        body { font-family: Arial, sans-serif; margin: 20px; }
        .consulta-form { display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 20px; align-items: flex-end; border: 1px solid #ccc; padding: 15px; border-radius: 5px;}
        .form-group { display: flex; flex-direction: column; min-width: 120px; }
        .resultado-tabla { width: 100%; border-collapse: collapse; margin-bottom: 20px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .resultado-tabla td { border: 1px solid #ddd; padding: 12px; text-align: left; vertical-align: top; }
        .resultado-tabla tr { display: flex; }
        .resultado-tabla td:nth-child(1) { width: 25%; } /* Foliación */
        .resultado-tabla td:nth-child(2) { width: 50%; } /* Marginación */
        .resultado-tabla td:nth-child(3) { width: 25%; } /* Libro/Folio */
        .seccion-titulo { font-weight: bold; background-color: #f0f0f0; padding: 5px; margin-top: -12px; margin-left: -12px; margin-right: -12px; margin-bottom: 8px; border-bottom: 1px solid #ccc;}
        .datos-grid { display: grid; grid-template-columns: 100px 1fr; gap: 3px; }
        .paginacion { text-align: center; padding: 10px; }
        .paginacion a { margin: 0 5px; padding: 5px 10px; border: 1px solid #ccc; text-decoration: none; }
        .paginacion a.active { background-color: #007bff; color: white; }
    </style>
</head>
<body>

    <h1>Consulta de Marginaciones</h1>
    <form method="GET" class="consulta-form">
        
        <div class="form-group">
            <label for="tipo_partida">Tipo de Partida:</label>
            <input list="tipos" name="TipoMargi" id="tipo_partida" placeholder="Escriba o seleccione" value="<?php echo htmlspecialchars($filtros['TipoMargi']); ?>">
            <datalist id="tipos">
                <?php foreach ($map_tipo_partida as $inicial => $nombre): ?>
                    <option value="<?php echo $inicial; ?>"><?php echo $nombre; ?></option>
                <?php endforeach; ?>
            </datalist>
        </div>

        <?php foreach (['AnioP' => 'Año', 'LibroP' => 'Libro', 'NPartida' => 'Num. Partida'] as $campo => $label): ?>
            <div class="form-group">
                <label for="<?php echo strtolower($campo); ?>"><?php echo $label; ?>:</label>
                <input type="<?php echo ($campo === 'AnioP' || $campo === 'NPartida') ? 'number' : 'text'; ?>" 
                       name="<?php echo $campo; ?>" 
                       id="<?php echo strtolower($campo); ?>" 
                       size="5" 
                       value="<?php echo htmlspecialchars($filtros[$campo]); ?>">
            </div>
        <?php endforeach; ?>

        <div class="form-group">
            <label for="lugar">Lugar:</label>
            <select name="lugar" id="lugar">
                <option value="">-- Todos --</option>
                <?php foreach ($opciones_lugar as $value => $label): ?>
                    <option value="<?php echo $value; ?>" <?php echo ($filtros['lugar'] === $value) ? 'selected' : ''; ?>>
                        <?php echo $label; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group" style="align-self: flex-end;">
            <button type="submit" name="buscar">Buscar</button> 
        </div>
        
        <div class="form-group" style="align-self: flex-end;">
            <button type="button" onclick="window.location.href='consulta.php'">Limpiar Formulario</button>
        </div>
    </form>

    <hr>
    
    <?php if (isset($_GET['buscar'])): ?>
        <h2>Resultados de Búsqueda (<?php echo $total_resultados; ?> Encontrados)</h2>

        <?php if ($total_resultados > 0): ?>

            <?php foreach ($resultados_pagina as $r): ?>
                <?php
                // --- Lógica de Mapeo y Transformación de Datos (Igual a la versión anterior) ---
                $tipo_partida_nombre = $map_tipo_partida[$r['TipoP']] ?? $r['TipoP'];
                $tipo_margi_nombre = $map_tipo_marginacion[$r['TipoMargi']] ?? $r['TipoMargi'];
                
                $area_actual_nombre = 'Desconocido';
                switch ($r['revestado']) {
                    case 'completo':
                        $area_actual_nombre = 'Archivo';
                        break;
                    case 'revisado3':
                        $area_actual_nombre = 'Control de Calidad';
                        break;
                    case 'revisado1':
                    case 'revisado2':
                        $area_actual_nombre = 'Depto. de Modificaciones';
                        break;
                    default:
                        $area_actual_nombre = $r['revestado'];
                }

                $lugar_nombre = '';
                if (empty($r['lugar'])) {
                    $lugar_nombre = 'San Salvador (Default)';
                } else {
                    $lugar_nombre = $opciones_lugar[$r['lugar']] ?? $r['lugar'];
                }
                ?>

                <table class="resultado-tabla">
                    <tr>
                        <td>
                            <div class="seccion-titulo">Foliación</div>
                            <div class="datos-grid">
                                <div># Marg.:</div> <div><strong><?php echo htmlspecialchars($r['NMargi1']); ?></strong></div>
                                <div>Tipo:</div> <div><?php echo htmlspecialchars($tipo_partida_nombre); ?></div>
                                <div>Año:</div> <div><?php echo htmlspecialchars($r['AnioP']); ?></div>
                                <div>Libro:</div> <div><?php echo htmlspecialchars($r['LibroP']); ?></div>
                                <div>Partida:</div> <div><?php echo htmlspecialchars($r['NPartida']); ?></div>
                                <div>Iniciales:</div> <div><?php echo htmlspecialchars($r['Iniciales1']); ?></div>
                                <div style="grid-column: 1 / 3; border-top: 1px dashed #ccc; margin-top: 5px;"></div>
                                <div>Tipo Marg.:</div> <div><strong><?php echo htmlspecialchars($tipo_margi_nombre); ?></strong></div>
                            </div>
                        </td>
                        
                        <td>
                            <div class="seccion-titulo">Marginación</div>
                            <?php echo nl2br(htmlspecialchars($r['TxtMargi1'])); ?>
                        </td>
                        
                        <td>
                            <div class="seccion-titulo">Libro/Folio</div>
                            <div class="datos-grid">
                                <div>Libro-Folio:</div> <div><strong><?php echo htmlspecialchars($r['busquedalf']); ?></strong></div>
                                <div>Estado:</div> <div><?php echo htmlspecialchars($r['estado']); ?></div>
                                <div>Creación:</div> <div><?php echo htmlspecialchars($r['FechaC']); ?></div>
                                <div>Edición:</div> <div><?php echo htmlspecialchars($r['Fechae']); ?></div>
                                <div style="grid-column: 1 / 3; border-top: 1px dashed #ccc; margin-top: 5px;"></div>
                                <div>Área Actual:</div> <div><?php echo htmlspecialchars($area_actual_nombre); ?></div>
                                <div>Lugar:</div> <div><?php echo htmlspecialchars($lugar_nombre); ?></div>
                            </div>
                        </td>
                    </tr>
                </table>
            <?php endforeach; ?>

            <?php if ($total_paginas > 1): ?>
                <div class="paginacion">
                    <?php 
                    for ($i = 1; $i <= $total_paginas; $i++) {
                        // Se mantiene el filtro 'buscar' en los parámetros de paginación
                        $params = http_build_query(array_merge($filtros, ['p' => $i, 'buscar' => '']));
                        $clase = ($i === $pagina_actual) ? 'active' : '';
                        echo "<a href='consulta.php?$params' class='$clase'>$i</a> ";
                    }
                    ?>
                </div>
            <?php endif; ?>
            
        <?php else: ?>
            <p>No se encontraron resultados que coincidan con los criterios de búsqueda.</p>
        <?php endif; ?>

    <?php endif; // Fin de la sección de resultados ?>

</body>
</html>