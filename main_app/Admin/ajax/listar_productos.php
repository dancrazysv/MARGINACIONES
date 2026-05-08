<?php

// Incluye archivos necesarios. Asegúrate de que 'intercambiador.php'
// defina 'inicialesuserid' y otras variables de sesión si son usadas.
include_once '../../intercambiador.php';
require_once("../conexion.php");
require_once('pagination.php'); // Asegúrate de que este archivo exista y sea correcto.

/**
 * Resalta las palabras clave en un texto dado.
 * @param string $text El texto original.
 * @param string $word La palabra o frase a resaltar.
 * @return string El texto con las palabras resaltadas en HTML.
 */
function highlightWords($text, $word) {
    if (empty($word)) {
        return $text;
    }
    // Escapa caracteres especiales en la palabra para que no interfieran con la expresión regular.
    $escapedWord = preg_quote($word, '#');
    // Reemplaza todas las ocurrencias (insensible a mayúsculas/minúsculas) con la etiqueta de resaltado.
    return preg_replace("#$escapedWord#i", '<span class="highlight" style="color:red;">\0</span>', $text);
}

// Verifica si la conexión a la base de datos es exitosa.
if (mysqli_connect_errno()) {
    echo "Fallo al conectar con la base de datos: " . mysqli_connect_error();
    exit(); // Termina la ejecución si la conexión falla.
}

// Obtiene la acción de la petición AJAX.
$action = $_REQUEST['action'] ?? '';

if ($action === 'ajax') {
    // Saneamiento de la consulta de búsqueda y otras entradas.
    // mysqli_real_escape_string es la primera línea de defensa contra inyecciones SQL para LIKE.
    $query_raw = $_REQUEST['query'] ?? '';
    $query = mysqli_real_escape_string($con, strip_tags($query_raw, ENT_QUOTES));
    $tconsulta = $query; // Se mantiene para compatibilidad con el código original.
    $foo = $tconsulta;  // Se mantiene para compatibilidad con el código original.

    // Lógica para determinar el tipo de impresión (nombre o folio).
    $impresion = (strpos($foo, "-") === false) ? "nombre" : "folio";

    // Variables de paginación.
    $page = intval($_REQUEST['page'] ?? 1);
    $per_page = intval($_REQUEST['per_page'] ?? 4);
    $adjacents = 4; // Definido aquí para que esté disponible para la función paginate().
    $offset = ($page - 1) * $per_page;

    // Construcción de la condición WHERE.
    // NOTA DE SEGURIDAD: Aunque se usa mysqli_real_escape_string, las búsquedas con LIKE '%...%'
    // y CONCAT() siguen siendo ineficientes y no pueden usar índices de forma óptima.
    // Para una seguridad y rendimiento máximos, se recomienda usar FULLTEXT search o
    // columnas generadas indexadas, y pasar los parámetros a mysqli_stmt_bind_param.
$sWhere_condition = "
    margi.busquedalf = '".$query."'
    OR margi.libro_nmargi_concat = '".$query."'
    OR margi.TxtMargi1 REGEXP '(^|[^0-9A-Za-z])".$query."([^0-9A-Za-z]|$)'
";

$sWhere_order = " ORDER BY margi.id";


    // --- Consultas a la base de datos ---
    // 1. Consulta para el conteo total de filas.
    $count_sql = "SELECT COUNT(*) AS numrows FROM margi WHERE " . $sWhere_condition;
    $stmt_count = mysqli_prepare($con, $count_sql);
    mysqli_stmt_execute($stmt_count);
    $count_result = mysqli_stmt_get_result($stmt_count);
    $numrows = mysqli_fetch_array($count_result)['numrows'] ?? 0;
    mysqli_stmt_close($stmt_count); // Cierra el statement del conteo.
    
    $total_pages = ceil($numrows / $per_page);
    
    // 2. Consulta principal para obtener los datos paginados.
    $data_sql = "SELECT * FROM margi WHERE " . $sWhere_condition . $sWhere_order . " LIMIT ?, ?";
    $stmt_data = mysqli_prepare($con, $data_sql);
    // Vincula los parámetros para LIMIT (offset y per_page) para seguridad y eficiencia.
    mysqli_stmt_bind_param($stmt_data, 'ii', $offset, $per_page);
    mysqli_stmt_execute($stmt_data);
    $query_result = mysqli_stmt_get_result($stmt_data);
    mysqli_stmt_close($stmt_data); // Cierra el statement de los datos.
    
    // Obtener el último libro para las variables ocultas (ejecutar una sola vez fuera del bucle).
    $libroultimo_query = mysqli_query($con, "SELECT LibroO FROM margi ORDER BY id DESC LIMIT 1");
    $libroultimo_row = mysqli_fetch_array($libroultimo_query);
    $libroultimo3 = $libroultimo_row['LibroO'] ?? 0;
    $libroultimo4 = $libroultimo3 + 1;
    
    // --- CAMBIO IMPORTANTE PARA OPTIMIZAR LA CONSULTA DEL TIPO DE MARGINACIÓN ---
    // 1. Obtener todos los tipos de marginación en una sola consulta.
    $tipos_marginacion = [];
    $consulta_tipos = "SELECT codigo, grupo FROM tipo_marginacion";
    $resultado_tipos = mysqli_query($con, $consulta_tipos);

    if ($resultado_tipos) {
        while ($fila = mysqli_fetch_assoc($resultado_tipos)) {
            $tipos_marginacion[$fila['codigo']] = $fila['grupo'];
        }
        mysqli_free_result($resultado_tipos);
    }
    // --- FIN DEL CAMBIO ---

    if ($numrows > 0) {
?>

<style>
  .copiable {
    cursor: pointer;
    position: relative;
  }
  .copiable::after {
    content: "¡Copiado!";
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #4CAF50; /* Color verde */
    color: white;
    padding: 8px 12px;
    border-radius: 5px;
    opacity: 0;
    transition: opacity 0.3s;
    pointer-events: none;
    z-index: 10;
  }
  .copiable.copiado::after {
    opacity: 1;
  }
</style>


<form role="form" id="formfield" action="ajax/beforeprint.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm();">
    <input type="hidden" name="action" value="add_form" />
    <div class="table-responsive">
        <table class="table table-striped table-hover" width="100%">
            <thead>
                <tr>
                    <th colspan="2" style="text-align:center">Foliación</th>
                    <th style="text-align:center" width="65%">Marginación</th>
                    <th style="text-align:center">Libro/Folio</th>
                    <th style="text-align:center">Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $finales = 0; // Contador de filas mostradas en la página actual.
                while ($row = mysqli_fetch_array($query_result)) {
                    $finales++; // Incrementa el contador de filas.
                    
                    // --- Reincorporación de TODAS las variables originales del código del usuario ---
                    // Se mantienen los nombres originales para garantizar compatibilidad con el resto del sistema.
                    $product_id = $row['id'];
                    $product_id3 = $row['id'] + 1;
                    $product_id4 = $row['id'] + 2;
                    $product_id5 = $row['id'] + 3;
                    $product_id2 = $row['id'];
                    $product_id17 = $row['id'];
                    $product_idcd = $row['id'];
                    $product_idad = $row['id'];
                    $product_idid = $row['id'];
                    $product_idprnac = $row['id'];
                    $product_idimp = $row['id'];
                    $product_idreg = $row['id'];
                    $product_idaut = $row['id'];
                    $product_idvar = $row['id'];
                    $product_idotr = $row['id'];
                    $product_idrev = $row['id'];
                    
                    $nmarg = $row['NMargi1'];
                    $nmarpdf2 = $row['NMargi1'];
                    $nmarpdfiden = $row['NMargi1'];
                    $nmarpdfprnac = $row['NMargi1'];
                    $nmarpdfadec = $row['NMargi1'];
                    $nmarpdfreg = $row['NMargi1'];
                    $nmarpdfotr = $row['NMargi1'];
                    $nmarg2 = $row['NMargi1'] + 1;
                    $nmarg3 = $row['NMargi1'] + 2;
                    $nmarg4 = $row['NMargi1'] + 3;
                    
                    $control = $row['revestado'];
                    $lpartida = $row['LibroP'];
                    $npartida = $row['NPartida'];
                    $tpartida = $row['TipoP'];
                    $iniciales = $row['Iniciales1'];
                    $txtmargi = !empty($foo) ? highlightWords($row['TxtMargi1'], $foo) : $row['TxtMargi1'];
                    $txtmargirev = !empty($foo) ? highlightWords($row['TxtMargi1'], $foo) : $row['TxtMargi1']; 
                    $anif = $row['AnioP'];
                    $libroa = $row['LibroO'];
                    $folioa = $row['FolioO'];
                    $tipomarginacion = $row['TipoMargi'];
                    $nmarpdf = $row['NMargi1'];
                    $nmarpdf17 = $row['NMargi1'];
                    $nmarpdfcd = $row['NMargi1'];
                    $nmarpdfaut = $row['NMargi1'];
                    $nmarpdfvar = $row['NMargi1'];
                    $estados = $row['estado'];
                    $fecha = $row['FechaC'];
                    $hora = $row['HoraC'];
                    $librof = $row['busquedalf'];
                    $librofdiv = $row['busquedalf'];
                    $revisionestado = $row['revestado'];
                    $fechae = $row['Fechae'];
                    $horaedi = $row['Horae'];
                    $segcontrolc = $row['seguimientogcm'];
                    $segcontrole = $row['seguimientoecm'];
                    $fin = $row['margfin'];
                    $seguimientoediuno = $row['seguimientoccgcm'];
                    $seguimientoedidos = $row['seguimientoccecm'];

                    // Formato de fechas.
                    $newDate = !empty($fecha) ? date("d/m/Y", strtotime($fecha)) : '';
                    $newDateedi = !empty($fechae) ? date("d/m/Y", strtotime($fechae)) : '';
                ?>
                <tr>
                    <td width="5%"># Marg.</td>
                    <td width="7%"><b><?php echo $nmarg; ?></b></td>
                    <td rowspan="6" align="justify">
  <div class="copiable" onclick="copiarTexto(this)">
    <?php echo $txtmargi; ?>
  </div>
</td>
                    <td rowspan="1" width="5%">Libro-Folio:</td>
                    <td rowspan="4" width="18%" align="">
                        <?php
                        // --- Reincorporación de TODAS las variables hidden originales ---
                        echo "<input type='hidden' class='form-control' name='ulibro' id='ulibro' value='$libroultimo3'>";
                        // Se usa sprintf para asegurar el formato '0x' para $libroultimo4
                        echo "<input type='hidden' class='form-control' name='ulibro2' id='ulibro2' value='" . sprintf("%02d", $libroultimo4) . "'>";
                        echo "<input type='hidden' class='form-control' name='lastname' id='lastname' value='$product_id'>";
                        echo "<input type='hidden' class='form-control' name='marginum' id='marginum' value='$nmarg'>";
                        echo "<input type='hidden' class='form-control' name='lastname1' id='lastname1' value='$product_id3'>";
                        echo "<input type='hidden' class='form-control' name='marginum2' id='marginum2' value='$nmarg2'>";
                        echo "<input type='hidden' class='form-control' name='lastname2' id='lastname2' value='$product_id4'>";
                        echo "<input type='hidden' class='form-control' name='marginum3' id='marginum3' value='$nmarg3'>";
                        echo "<input type='hidden' class='form-control' name='lastname3' id='lastname3' value='$product_id5'>";
                        echo "<input type='hidden' class='form-control' name='marginum4' id='marginum4' value='$nmarg4'>";
                        echo "<input type='hidden' name='tipoimpresion' id='tipoimpresion' value='$impresion'>";
                        echo "<input type='hidden' class='form-control' name='marg1control' id='marg1control' value='$control'>";
                        
                        // Lógica de visualización de botones y select (manteniendo la estructura original).
                        if (empty($iniciales)) {
                            echo "La marginación no ha sido asignada";
                        } else if ($iniciales == $inicialesuserid) {
                            if (empty($txtmargi) && empty($revisionestado)) {
                                // ADVERTENCIA: Generar JavaScript dinámicamente en un bucle es una mala práctica
                                // de rendimiento y mantenimiento. Se recomienda mover esta lógica a un archivo JS
                                // externo y usar delegación de eventos y atributos data- para manejar los clics.
                                echo "<script>";
                                echo "function btnseleccion" . $product_id . "(sel) {";
                                echo "const id = '$product_id';";
                                echo "document.querySelectorAll('a[id^=\"btn\"][id$=\"' + id + '\"]').forEach(link => {";
                                echo "  link.style.display = 'none';"; // Oculta todos los botones de esta fila.
                                echo "});";
                                echo "if (sel.value !== '0') {";
                                echo "  const btnId = 'btn' + sel.value + id;";
                                echo "  const btn = document.getElementById(btnId);";
                                echo "  if (btn) { btn.style.display = ''; }"; // Muestra el botón seleccionado.
                                echo "}";
                                echo '}';
                                echo "</script>";
                                
                                // Select y enlaces de acción.
                                echo " <select id=\"mySelect\" class=\"form-control btn-sm\" onchange=\"btnseleccion" . $product_id . "(this);\">
                                    <option value=\"0\">Seleccione una opción</option>
                                    <option value=\"matrimonio\">Matrimonio</option>
                                    <option value=\"divorcio\">Divorcio</option>
                                    <option value=\"art17\">Articulo 15, 17 y Recti. Notario</option>
                                    <option value=\"candef\">Cancelaciones por Def.</option>
                                    <option value=\"iden\">Identidades</option>
                                    <option value=\"adec\">Adecuaciones</option>
                                    <option value=\"reg\">Unión no Matr. y Régimen</option>
                                    <option value=\"aut\">Tuto./Rep. Legal/Aut. Paren.&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                    <option value=\"var\">Varias</option>
                                    <option value=\"prnac\">Pérdida o Recuperación Nac.</option>
                                    <option value=\"otr\">Otro</option>
                                </select>";
                                echo "<br/>";
                                // Reincorporar todos los enlaces <a> con sus atributos originales.
                                echo "<a href=\"#\" data-target=\"#editProductModal\" onclick=\"myFunction()\" id=\"btnmatrimonio$product_id\" class=\"fa\" data-toggle=\"modal\" style=\"display: none\" data-librof=\"$librof\" data-libro=\"$lpartida\" data-npartida=\"$npartida\" data-iniciales1=\"$iniciales\" data-nmar=\"$nmarpdf\" data-price=\"$iniciales\" data-id=\"$product_id\"><i class=\"fas fa-ring\" style=\"color: darkgoldenrod; font-size: 12px\"></i>Marginación Matrimonio</a>";
                                echo "<a href=\"#\" data-target=\"#divorcios\" onclick=\"myFunction2()\" id=\"btndivorcio$product_id\" class=\"fa\" data-toggle=\"modal\" style=\"display: none\" data-librofdiv=\"$librofdiv\" data-nmar2=\"$nmarpdf2\" data-libro=\"$lpartida\" data-npartida=\"$npartida\" data-iniciales1=\"$iniciales\" data-price=\"$iniciales\" data-id2=\"$product_id2\"><i class=\"fas fa-heart-broken\" style=\"color: indianred; font-size: 12px\"></i>Marginación Divorcio</a>";
                                echo "<a href=\"#\" name=\"btn1715\" data-target=\"#art17\" onclick=\"myFunction4()\" id=\"btnart17$product_id17\" class=\"fa\" data-toggle=\"modal\" style=\"display: none\" data-nmar17=\"$nmarpdf17\" data-id17=\"$product_id17\"><i class=\"fas fa-balance-scale\" style=\"color: cadetblue; font-size: 12px\"></i>Artículo 15, 17 y Recti. Notario</a>";
                                echo "<a href=\"#\" data-target=\"#cancedef\" onclick=\"myFunction5()\" id=\"btncandef$product_idcd\" class=\"fa\" data-toggle=\"modal\" style=\"display: none\" data-nmarcd=\"$nmarpdfcd\" data-idcd=\"$product_idcd\"><i class=\"fas fa-cross\" style=\"color: black; font-size: 12px\"></i>Cance. por Defunción</a>";
                                echo "<a href=\"#\" data-target=\"#identidades\" onclick=\"myFunction6()\" id=\"btniden$product_idid\" class=\"fa\" data-toggle=\"modal\" style=\"display: none\" data-niden=\"$nmarpdfiden\" data-ididen=\"$product_idid\"><i class=\"fas fa-people-arrows\" style=\"color: SlateBlue; font-size: 12px\"></i>Identidades</a>";
                                echo "<a href=\"#\" data-target=\"#adecuaciones\" onclick=\"myFunction7()\" id=\"btnadec$product_idad\" class=\"fa\" data-toggle=\"modal\" style=\"display: none\" data-nadec=\"$nmarpdfadec\" data-idadec=\"$product_idad\"><i class=\"fas fa-people-carry\" style=\"color: #008080; font-size: 12px\"></i>Adecuaciones</a>";
                                echo "<a href=\"#\" data-target=\"#regimenes\" onclick=\"myFunction8()\" id=\"btnreg$product_idreg\" class=\"fa\" data-toggle=\"modal\" style=\"display: none\" data-nreg=\"$nmarpdfreg\" data-idreg=\"$product_idreg\"><i class=\"fas fa-handshake\" style=\"color: #DC143C; font-size: 12px\"></i>Uni. no Matr. y Régimen</a>";
                                echo "<a href=\"#\" data-target=\"#tutorias\" onclick=\"myFunction9()\" id=\"btnaut$product_idaut\" class=\"fa\" data-toggle=\"modal\" style=\"display: none\" data-naut=\"$nmarpdfaut\" data-idaut=\"$product_idaut\"><i class=\"fas fa-handshake\" style=\"color: #00BFFF; font-size: 12px\"></i>Tuto./A. Par./R. Legal</a>";
                                echo "<a href=\"#\" data-target=\"#varias\" onclick=\"myFunction10()\" id=\"btnvar$product_idvar\" class=\"fa\" data-toggle=\"modal\" style=\"display: none\" data-nvar=\"$nmarpdfvar\" data-idvar=\"$product_idvar\"><i class=\"fas fa-tasks\" style=\"color: #C71585; font-size: 12px\"></i>Varias</a>";
                                echo "<a href=\"#\" data-target=\"#perdidanac\" onclick=\"myFunction14()\" id=\"btnprnac$product_idprnac\" class=\"fa\" data-toggle=\"modal\" style=\"display: none\" data-nprnac=\"$nmarpdfprnac\" data-idprnac=\"$product_idprnac\"><i class=\"fas fa-address-card\" style=\"color: #A20021; font-size: 12px\"></i>Pérdida o Recuperación Nacionalidad</a>";
                                echo "<a href=\"#\" data-target=\"#otras\" onclick=\"myFunction11()\" id=\"btnotr$product_idotr\" class=\"fa\" data-toggle=\"modal\" style=\"display: none\" data-notr=\"$nmarpdfotr\" data-idotr=\"$product_idotr\"><i class=\"fas fa-boxes\" style=\"color: #20B2AA; font-size: 12px\"></i>Otras</a>";
                            } else if (!empty($txtmargi) && $revisionestado == "revisado1") {
                                echo "<a href=\"#\" data-target=\"#revision\" onclick=\"myFunction12()\" id=\"btnrev$product_idrev\" class=\"fa\" data-toggle=\"modal\" data-idrevision=\"$product_idrev\" data-idvar=\"$nmarpdf2\" data-textrevision=\"$txtmargirev\" data-npartidarevi=\"$npartida\" data-nlibrev=\"$lpartida\" data-anior=\"$anif\" data-tipoparrev=\"$tpartida\"><i class=\"far fa-calendar-check\" style=\"color: #16c79a; font-size: 12px\"></i>Validar Marginación</a>";
                            } else if (!empty($txtmargi) && $revisionestado == "revisado2") {
                                echo "Marginación en revisión en el área de marginaciones";
                            } else if (!empty($txtmargi) && $revisionestado == "revisado3") {
                                echo "La marginación se encuentra en revisión del área de Control de Calidad";
                            } else if (!empty($txtmargi) && $revisionestado == "completo") {
                                echo "Marginación Completa para poder editar la marginación debes de solicitarlo al Administrador";
                            }
                        } else {
                            echo "Marginación asignada a otro usuario";
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Tipo</td>
                    <td><?php echo $tpartida; ?></td>
                    <td><b><?php echo $libroa . '-' . $folioa; ?></b></td>
                </tr>
                <tr>
                    <td>Año</td>
                    <td><?php echo $anif; ?></td>
                    <td>Estado:</td>
                </tr>
                <tr>
                    <td>Libro</td>
                    <td><?php echo $lpartida; ?></td>
                    <td><b><?php echo $estados; ?></b></td>
                </tr>
                <tr>
                    <td>Partida</td>
                    <td><?php echo $npartida; ?></td>
                    <td>Creación:</td>
                    <td><span class="copiable" onclick="copiarTexto(this)">
    <?php echo $newDate; ?></span>&nbsp;||&nbsp;<?php echo $hora; ?></div>
    </td>
                </tr>
                <tr>
                    <td>Iniciales</td>
                    <td><?php echo $iniciales; ?></td>
                    <td>Edición:</td>
                    <td><?php echo $newDateedi; ?>&nbsp;||&nbsp;<?php echo $horaedi; ?></td>
                </tr>
                <tr>
                    <td>Tipo Marg.</td>
                    <td style="color: #B81414;"><b><?php 
                        // --- CAMBIO IMPORTANTE: AHORA SE ACCEDE AL ARRAY EN MEMORIA EN LUGAR DE HACER UNA CONSULTA ---
                        $grupo = $tipos_marginacion[$tipomarginacion] ?? "No encontrado"; 
                        echo $grupo; 
                        // --- FIN DEL CAMBIO ---
                    ?></b></td>
                    <td>Expediente:</td>
                    <td>Área Actual:</td>
                    <td>
                        <?php
                        // Definición de variables locales para el área actual.
                        $areamarg = "Depto. de Marginaciones";
                        $areacmarg = "Área de Marginaciones Control Calidad";
                        $areaccalidad = "Área de Control de Calidad";
                        $completo = "Marginación Completada";

                        if ($revisionestado == 'revisado1') { echo $areamarg; }
                        else if ($revisionestado == 'revisado2') { echo $areacmarg; }
                        else if ($revisionestado == 'revisado3') { echo $areaccalidad; }
                        else if ($revisionestado == 'completo') { echo $completo; }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="color:#797979;">Seguimiento:</td>
                   
                    <td width="50%" style="color:#797979;">Validación Control de Calidad:</td>
                    <td colspan="2" style="color:#797979;">Validación Edición C. Calidad:</td>
                </tr>
                
             
                <tr>
                    <td colspan="2"></td>
                    <td style="color:#797979;">
                        <?php echo getValidationStatus($seguimientoediuno, $fechae, $fin, $control); ?>
                    </td>
                    <td colspan="2" style="color:#797979;">
                        <?php echo getValidationStatusEdicion($seguimientoedidos, $fechae, $fin); ?>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</form>

<div class="clearfix"></div>

<div class='outer_div'>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <tbody>
                <tr>
                    <td colspan='6'>
                        <?php
                        $inicios = $offset + 1;
                        // Calcula el final de los registros mostrados en la página actual.
                        $finales_display = $offset + $finales;
                        if ($finales_display > $numrows) {
                           $finales_display = $numrows; // No mostrar más allá del total de registros.
                        }
                        echo "Mostrando $inicios al $finales_display de $numrows registros";
                        echo paginate($page, $total_pages, $adjacents);
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php
    } else {
        echo "<p>No se encontraron resultados.</p>";
    }
}

/**
 * Determina el estado de validación para el seguimiento general.
 * @param string $seguimiento Valor del campo de seguimiento.
 * @param string $fecha_edicion Fecha de edición.
 * @param string $fin Estado de finalización.
 * @param string $control Estado de control.
 * @return string El mensaje de estado.
 */
function getValidationStatus($seguimiento, $fecha_edicion, $fin, $control) {
    if (empty($seguimiento) && empty($fecha_edicion) && empty($fin) && $control != 'completo') {
        return "Marginación en Proceso de Revisión";
    }
    if (!empty($seguimiento)) {
        return $seguimiento;
    }
    return "<font style='color:#900C3F;'>MARGINACIÓN NO VALIDADA</font>";
}

/**
 * Determina el estado de validación para la edición.
 * @param string $seguimiento Valor del campo de seguimiento de edición.
 * @param string $fecha_edicion Fecha de edición.
 * @param string $fin Estado de finalización.
 * @return string El mensaje de estado.
 */
function getValidationStatusEdicion($seguimiento, $fecha_edicion, $fin) {
    if (empty($seguimiento) && empty($fecha_edicion) && empty($fin)) {
        return "No requiere validación";
    }
    if (!empty($seguimiento)) {
        return $seguimiento;
    }
    return "<font style='color:#900C3F;'>MARGINACIÓN NO VALIDADA</font>";
}
?>
<script>
function copyDate(event, date, time) {
  event.preventDefault();
  const textToCopy = date ;
  navigator.clipboard.writeText(textToCopy)
    .then(() => {
      elemento.classList.add('copiado');

      // Eliminar la clase después de un segundo
      setTimeout(() => {
        elemento.classList.remove('copiado');
      }, 1000);
    })
    .catch(err => {
      console.error('Error al copiar el texto: ', err);
      alert('Error al copiar la fecha.');
    });
}
</script>

<script>
function copiarTexto(elemento) {
  // Obtener el texto dentro del elemento
  const textoACopiar = elemento.innerText || elemento.textContent;
  
  // Usar la API del portapapeles para copiar el texto
  navigator.clipboard.writeText(textoACopiar)
    .then(() => {
      // Agregar la clase 'copiado' para mostrar la retroalimentación visual
      elemento.classList.add('copiado');

      // Eliminar la clase después de un segundo
      setTimeout(() => {
        elemento.classList.remove('copiado');
      }, 1000);

    })
    .catch(err => {
      console.error('Error al copiar el texto: ', err);
      // Opcional: manejar el error con una alerta o mensaje
      alert('Error al copiar el texto.');
    });
}
</script>