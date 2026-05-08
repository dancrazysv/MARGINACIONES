<?php
include_once '../../intercambiador.php';
require_once("../conexion.php");

$action = $_REQUEST['action'] ?? '';
if($action == 'ajax'){
    $query = mysqli_real_escape_string($con, strip_tags($_REQUEST['query'] ?? '', ENT_QUOTES));
    $impresion = (strpos($query, "-") === false) ? "nombre" : "folio";
    
    // Construcción WHERE
    if ($impresion === 'folio') {
        $sWhere = "(margi.busquedalf = '$query' OR margi.libro_nmargi_concat = '$query')";
    } else {
        $sWhere = "margi.TxtMargi1 LIKE '%$query%'";
    }
    $sWhere .= " ORDER BY margi.id";
    
    // Paginación
    $page = max(1, intval($_REQUEST['page'] ?? 1));
    $per_page = intval($_REQUEST['per_page'] ?? 4);
    $adjacents = 4;
    $offset = ($page - 1) * $per_page;
    
    $total_result = mysqli_query($con, "SELECT COUNT(*) AS numrows FROM margi WHERE $sWhere");
    $numrows = mysqli_fetch_array($total_result)['numrows'] ?? 0;
    $total_pages = ceil($numrows / $per_page);
    
    $query_result = mysqli_query($con, "SELECT * FROM margi WHERE $sWhere LIMIT $offset, $per_page");
    
    // Último libro
    $libro_row = mysqli_fetch_array(mysqli_query($con, "SELECT LibroO FROM margi ORDER BY id DESC LIMIT 1"));
    $libroultimo3 = $libro_row['LibroO'] ?? 0;
    $libroultimo4 = $libroultimo3 + 1;
    
    // Tipos de marginación (una sola consulta)
    $tipos = [];
    $res = mysqli_query($con, "SELECT codigo, grupo FROM tipo_marginacion");
    while($f = mysqli_fetch_assoc($res)) $tipos[$f['codigo']] = $f['grupo'];
    
    if($numrows > 0){
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
    background-color: #4CAF50;
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

<script>
function btnseleccion(sel, pid) {
    // Oculta todos los botones de esta fila
    document.querySelectorAll('a[id^="btn"][id$="' + pid + '"]').forEach(function(link) {
        link.style.display = 'none';
    });
    // Muestra solo el botón seleccionado
    if (sel.value !== '0') {
        var btnId = 'btn' + sel.value + pid;
        var btn = document.getElementById(btnId);
        if (btn) btn.style.display = '';
    }
}

function copiarTexto(elemento) {
    var textoACopiar = elemento.innerText || elemento.textContent;
    navigator.clipboard.writeText(textoACopiar).then(function() {
        elemento.classList.add('copiado');
        setTimeout(function() {
            elemento.classList.remove('copiado');
        }, 1000);
    }).catch(function(err) {
        console.error('Error al copiar el texto: ', err);
        alert('Error al copiar el texto.');
    });
}

// Función para limpiar formularios antes de abrir un modal
function limpiarFormularioModal(modalId) {
    // Limpiar todos los campos de texto
    $(modalId + ' input[type="text"], ' + modalId + ' textarea, ' + modalId + ' input[type="date"]').each(function() {
        if($(this).attr('id') !== 'mySelect' && $(this).attr('id') !== 'mySelect2') {
            $(this).val('');
        }
    });
  
    // Limpiar checkboxes
    $(modalId + ' input[type="checkbox"]').prop('checked', false);
    // Limpiar radios
    $(modalId + ' input[type="radio"]').prop('checked', false);
}

// Funciones que llaman a los modales con limpieza previa
function myFunction() {
    limpiarFormularioModal('#editProductModal');
}

function myFunction2() {
    limpiarFormularioModal('#divorcios');
}

function myFunction4() {
    limpiarFormularioModal('#art17');
}

function myFunction5() {
    limpiarFormularioModal('#cancedef');
}

function myFunction6() {
    limpiarFormularioModal('#identidades');
}

function myFunction7() {
    limpiarFormularioModal('#adecuaciones');
}

function myFunction8() {
    limpiarFormularioModal('#regimenes');
}

function myFunction9() {
    limpiarFormularioModal('#tutorias');
}

function myFunction10() {
    limpiarFormularioModal('#varias');
}

function myFunction11() {
    limpiarFormularioModal('#otras');
}

function myFunction12() {
    limpiarFormularioModal('#revision');
}

function myFunction14() {
    limpiarFormularioModal('#perdidanac');
}

function validateForm() { return true; }

// También limpiar cuando el modal se cierre
$(document).ready(function() {
    $('.modal').on('hidden.bs.modal', function() {
        limpiarFormularioModal('#' + $(this).attr('id'));
    });
});
</script>

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
$finales = 0;
while($row = mysqli_fetch_array($query_result)){
    $finales++;
    $pid = $row['id'];
    $nmarg = $row['NMargi1'];
    $nmarg2 = $row['NMargi1'] + 1;
    $nmarg3 = $row['NMargi1'] + 2;
    $nmarg4 = $row['NMargi1'] + 3;
    $control = $row['revestado'];
    $lpartida = $row['LibroP'];
    $npartida = $row['NPartida'];
    $tpartida = $row['TipoP'];
    $iniciales = $row['Iniciales1'];
    $txtmargi = $row['TxtMargi1'];
    $txtmargirev = $row['TxtMargi1'];
    $anif = $row['AnioP'];
    $libroa = $row['LibroO'];
    $folioa = $row['FolioO'];
    $tipomarginacion = $row['TipoMargi'];
    $estados = $row['estado'];
    $fecha = $row['FechaC'];
    $hora = $row['HoraC'];
    $librof = $row['busquedalf'];
    $librofdiv = $row['busquedalf'];
    $revisionestado = $row['revestado'];
    $fechae = $row['Fechae'];
    $horaedi = $row['Horae'];
    $fin = $row['margfin'];
    $seguimientoediuno = $row['seguimientoccgcm'];
    $seguimientoedidos = $row['seguimientoccecm'];
    
    $newDate = $fecha ? date("d/m/Y", strtotime($fecha)) : '';
    $newDateedi = $fechae ? date("d/m/Y", strtotime($fechae)) : '';
?>
<tr>
    <td width="5%"># Marg.</td>
    <td width="7%"><?php echo $nmarg; ?></td>
    <td rowspan="6" align="justify"><div class="copiable" onclick="copiarTexto(this)"><?php echo $txtmargi; ?></div></td>
    <td rowspan="1" width="5%">Libro-Folio:</td>
    <td rowspan="4" width="18%" align="">
<?php
    echo "<input type='hidden' class='form-control' name='ulibro' id='ulibro' value='$libroultimo3'>";
    echo "<input type='hidden' class='form-control' name='ulibro2' id='ulibro2' value='" . sprintf("%02d", $libroultimo4) . "'>";
    echo "<input type='hidden' class='form-control' name='lastname' id='lastname' value='$pid'>";
    echo "<input type='hidden' class='form-control' name='marginum' id='marginum' value='$nmarg'>";
    echo "<input type='hidden' class='form-control' name='lastname1' id='lastname1' value='" . ($pid + 1) . "'>";
    echo "<input type='hidden' class='form-control' name='marginum2' id='marginum2' value='$nmarg2'>";
    echo "<input type='hidden' class='form-control' name='lastname2' id='lastname2' value='" . ($pid + 2) . "'>";
    echo "<input type='hidden' class='form-control' name='marginum3' id='marginum3' value='$nmarg3'>";
    echo "<input type='hidden' class='form-control' name='lastname3' id='lastname3' value='" . ($pid + 3) . "'>";
    echo "<input type='hidden' class='form-control' name='marginum4' id='marginum4' value='$nmarg4'>";
    echo "<input type='hidden' name='tipoimpresion' id='tipoimpresion' value='$impresion'>";
    echo "<input type='hidden' class='form-control' name='marg1control' id='marg1control' value='$control'>";
    
    if($iniciales == ""){
        echo "La marginación no ha sido asignada";
    } elseif($inicialesuserid == $iniciales){
        if($txtmargi == "" && $revisionestado == ""){
?>
        <select id="mySelect" class="form-control btn-sm" onchange="btnseleccion(this, '<?php echo $pid; ?>')">
            <option value="0">Seleccione una opción</option>
            <option value="matrimonio">Matrimonio</option>
            <option value="divorcio">Divorcio</option>
            <option value="art17">Articulo 15, 17 y Recti. Notario</option>
            <option value="candef">Cancelaciones por Def.</option>
            <option value="iden">Identidades</option>
            <option value="adec">Adecuaciones</option>
            <option value="reg">Unión no Matr. y Régimen</option>
            <option value="aut">Tuto./Rep. Legal/Aut. Paren.&nbsp;&nbsp;&nbsp;&nbsp;</option>
            <option value="var">Varias</option>
            <option value="prnac">Pérdida o Recuperación Nac.</option>
            <option value="otr">Otro</option>
        </select><br/>
        <a href="#" data-target="#editProductModal" onclick="myFunction()" id="btnmatrimonio<?php echo $pid; ?>" class="fa" data-toggle="modal" style="display: none" data-librof="<?php echo $librof; ?>" data-libro="<?php echo $lpartida; ?>" data-npartida="<?php echo $npartida; ?>" data-iniciales1="<?php echo $iniciales; ?>" data-nmar="<?php echo $nmarg; ?>" data-price="<?php echo $iniciales; ?>" data-id="<?php echo $pid; ?>"><i class="fas fa-ring" style="color: darkgoldenrod; font-size: 12px"></i>Marginación Matrimonio</a>
        <a href="#" data-target="#divorcios" onclick="myFunction2()" id="btndivorcio<?php echo $pid; ?>" class="fa" data-toggle="modal" style="display: none" data-librofdiv="<?php echo $librofdiv; ?>" data-nmar2="<?php echo $nmarg; ?>" data-libro="<?php echo $lpartida; ?>" data-npartida="<?php echo $npartida; ?>" data-iniciales1="<?php echo $iniciales; ?>" data-price="<?php echo $iniciales; ?>" data-id2="<?php echo $pid; ?>"><i class="fas fa-heart-broken" style="color: indianred; font-size: 12px"></i>Marginación Divorcio</a>
        <a href="#" name="btn1715" data-target="#art17" onclick="myFunction4()" id="btnart17<?php echo $pid; ?>" class="fa" data-toggle="modal" style="display: none" data-nmar17="<?php echo $nmarg; ?>" data-id17="<?php echo $pid; ?>"><i class="fas fa-balance-scale" style="color: cadetblue; font-size: 12px"></i>Artículo 15, 17 y Recti. Notario</a>
        <a href="#" data-target="#cancedef" onclick="myFunction5()" id="btncandef<?php echo $pid; ?>" class="fa" data-toggle="modal" style="display: none" data-nmarcd="<?php echo $nmarg; ?>" data-idcd="<?php echo $pid; ?>"><i class="fas fa-cross" style="color: black; font-size: 12px"></i>Cance. por Defunción</a>
        <a href="#" data-target="#identidades" onclick="myFunction6()" id="btniden<?php echo $pid; ?>" class="fa" data-toggle="modal" style="display: none" data-niden="<?php echo $nmarg; ?>" data-ididen="<?php echo $pid; ?>"><i class="fas fa-people-arrows" style="color: SlateBlue; font-size: 12px"></i>Identidades</a>
        <a href="#" data-target="#adecuaciones" onclick="myFunction7()" id="btnadec<?php echo $pid; ?>" class="fa" data-toggle="modal" style="display: none" data-nadec="<?php echo $nmarg; ?>" data-idadec="<?php echo $pid; ?>"><i class="fas fa-people-carry" style="color: #008080; font-size: 12px"></i>Adecuaciones</a>
        <a href="#" data-target="#regimenes" onclick="myFunction8()" id="btnreg<?php echo $pid; ?>" class="fa" data-toggle="modal" style="display: none" data-nreg="<?php echo $nmarg; ?>" data-idreg="<?php echo $pid; ?>"><i class="fas fa-handshake" style="color: #DC143C; font-size: 12px"></i>Uni. no Matr. y Régimen</a>
        <a href="#" data-target="#tutorias" onclick="myFunction9()" id="btnaut<?php echo $pid; ?>" class="fa" data-toggle="modal" style="display: none" data-naut="<?php echo $nmarg; ?>" data-idaut="<?php echo $pid; ?>"><i class="fas fa-handshake" style="color: #00BFFF; font-size: 12px"></i>Tuto./A. Par./R. Legal</a>
        <a href="#" data-target="#varias" onclick="myFunction10()" id="btnvar<?php echo $pid; ?>" class="fa" data-toggle="modal" style="display: none" data-nvar="<?php echo $nmarg; ?>" data-idvar="<?php echo $pid; ?>"><i class="fas fa-tasks" style="color: #C71585; font-size: 12px"></i>Varias</a>
        <a href="#" data-target="#perdidanac" onclick="myFunction14()" id="btnprnac<?php echo $pid; ?>" class="fa" data-toggle="modal" style="display: none" data-nprnac="<?php echo $nmarg; ?>" data-idprnac="<?php echo $pid; ?>"><i class="fas fa-address-card" style="color: #A20021; font-size: 12px"></i>Pérdida o Recuperación Nacionalidad</a>
        <a href="#" data-target="#otras" onclick="myFunction11()" id="btnotr<?php echo $pid; ?>" class="fa" data-toggle="modal" style="display: none" data-notr="<?php echo $nmarg; ?>" data-idotr="<?php echo $pid; ?>"><i class="fas fa-boxes" style="color: #20B2AA; font-size: 12px"></i>Otras</a>
<?php
        } elseif(!empty($txtmargi) && $revisionestado == "revisado1"){
            echo "<a href=\"#\" data-target=\"#revision\" onclick=\"myFunction12()\" id=\"btnrev" . $pid . "\" class=\"fa\" data-toggle=\"modal\" data-idrevision='" . $pid . "' data-idvar=\"" . $nmarg . "\" data-textrevision=\"" . $txtmargirev . "\" data-npartidarevi=\"" . $npartida . "\" data-nlibrev=\"" . $lpartida . "\" data-anior=\"" . $anif . "\" data-tipoparrev=\"" . $tpartida . "\"><i class=\"far fa-calendar-check\" style=\"color: #16c79a; font-size: 12px\"></i>Validar Marginación</a>";
        } elseif(!empty($txtmargi) && $revisionestado == "revisado2"){
            echo "La marginación se encuentra en revisión del área de Marginaciones";
        } elseif(!empty($txtmargi) && $revisionestado == "revisado3"){
            echo "La marginación se encuentra en revisión del área de Control de Calidad";
        } elseif(!empty($txtmargi) && $revisionestado == "completo"){
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
    <td><span class="copiable" onclick="copiarTexto(this)"><?php echo $newDate; ?></span>&nbsp;||&nbsp;<?php echo $hora; ?></td>
</tr>
<tr>
    <td>Iniciales</td>
    <td><?php echo $iniciales; ?></td>
    <td>Edición:</td>
    <td><?php echo $newDateedi; ?>&nbsp;||&nbsp;<?php echo $horaedi; ?></td>
</tr>
<tr>
    <td>Tipo Marg.</td>
    <td style="color: #B81414;"><b><?php echo $tipos[$tipomarginacion] ?? "No encontrado"; ?></b></td>
    <td>Expediente:</td>
    <td>Área Actual:</td>
    <td><?php
        $areamarg = "Área de Marginaciones";
        $areacmarg = "Área de Marginaciones Control Calidad";
        $areaccalidad = "Área de Control Calidad";
        $completo = "Marginación Completada";
        if($revisionestado == 'revisado1') echo $areamarg;
        elseif($revisionestado == 'revisado2') echo $areacmarg;
        elseif($revisionestado == 'revisado3') echo $areaccalidad;
        elseif($revisionestado == 'completo') echo $completo;
    ?></td>
</tr>
<tr>
    <td colspan="2" style="color:#797979;">Seguimiento:</td>
    <td width="50%" style="color:#797979;">Validación Control de Calidad:</td>
    <td colspan="2" style="color:#797979;">Validación Edición C. Calidad:</td>
</tr>
<tr>
    <td colspan="2"></td>
    <td style="color:#797979;">
<?php
    if(empty($seguimientoediuno) && empty($fechae) && empty($fin) && $control != 'completo'){
        echo "Marginación en Proceso de Revisión";
    } elseif(!empty($seguimientoediuno)){
        echo $seguimientoediuno;
    } else {
        echo "<font style='color:#900C3F;'>MARGINACIÓN NO VALIDADA</font>";
    }
?>
    </td>
    <td colspan="2" style="color:#797979;">
<?php
    if(empty($seguimientoedidos) && empty($fechae) && empty($fin)){
        echo "No requiere validación";
    } elseif(!empty($seguimientoedidos)){
        echo $seguimientoedidos;
    } elseif(!empty($fechae)){
        echo "<font style='color:#900C3F;'>MARGINACIÓN NO VALIDADA</font>";
    } else {
        echo "No requiere validación";
    }
?>
    </td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</form>
<div class="clearfix"></div>
<div class="outer_div">
<div class="table-responsive">
<table class="table table-striped table-hover">
<tbody>
<tr>
    <td colspan='6'>
<?php
    $inicios = $offset + 1;
    $finales_mostrar = $offset + $finales;
    if($finales_mostrar > $numrows) $finales_mostrar = $numrows;
    echo "Mostrando $inicios al $finales_mostrar de $numrows registros";
    include 'pagination.php';
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
?>