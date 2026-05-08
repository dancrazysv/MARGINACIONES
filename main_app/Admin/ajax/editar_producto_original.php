<?php
date_default_timezone_set('America/Costa_Rica');
 include ("lib_fecha_texto.php");
include ("lib_fecha_texto2.php");
include ("fecha_l.php");
// Hora actual
 $hora = date("H:i:s");  
$dia = date('d');
$dia_actual = numtoletras($dia);

$anio = date('Y');
$anio_actual = numtoletras2($anio);
	
$fechaActual2 = date('d/m/Y');
$fechaActual = date('Y/m/d');
$mes_actual = dater($fechaActual);

// Hora de Divorcio - Decreto Exterior
$hora_ext = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
$hora_ext2 = date('G', strtotime($hora_ext));
$hora_ext3 = numtoletras2($hora_ext2);
$min_ext2 =  strtotime($hora_ext);
$min_ext3 =  date("i", $min_ext2);
$min_ext4 = numtoletras($min_ext3);

// Fecha de Divorcio - Decreto Exterior
$dateext = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
$newDate_ext = date('Y/m/d', strtotime($dateext));
$mes_B_ext = dater($newDate_ext);

$extDate2 = date('Y', strtotime($dateext));
$anio_B_ext = numtoletras2($extDate2);
	
$extDate3 = date('d', strtotime($dateext));
$dia_B_ext = numtoletras($extDate3);
$fecha_ext = $dia_B_ext . " " . $mes_B_ext . " " . $anio_B_ext; 

// Por - Decreto Exterior
$por_ext = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];



// Hora de Divorcio - CSJ
$hora_csj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
$hora_csj2 = date('G', strtotime($hora_csj));
$hora_csj3 = numtoletras2($hora_csj2);
$min_csj2 =  strtotime($hora_csj);
$min_csj3 =  date("i", $min_csj2);
$min_csj4 = numtoletras($min_csj3);

// Fecha de Divorcio - CSJ
$datecsj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
$newDate_csj = date('Y/m/d', strtotime($datecsj));
$mes_B_csj = dater($newDate_csj);

$csjDate2 = date('Y', strtotime($datecsj));
$anio_B_csj = numtoletras2($csjDate2);
	
$csjDate3 = date('d', strtotime($datecsj));
$dia_B_csj = numtoletras($csjDate3);
$fecha_csj = $dia_B_csj . " " . $mes_B_csj . " " . $anio_B_csj; 

// Por - Decreto CSJ
$por_csjt = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];


// Hora de Divorcio - Resolucion Juzgado
$hora_rjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
$hora_rjuz2 = date('G', strtotime($hora_rjuz));
$hora_rjuz3 = numtoletras2($hora_rjuz2);
$min_rjuz2 =  strtotime($hora_rjuz);
$min_rjuz3 =  date("i", $min_rjuz2);
$min_rjuz4 = numtoletras($min_rjuz3);

// Fecha de Divorcio - RJuzgado
$daterjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
$newDate_rjuz = date('Y/m/d', strtotime($daterjuz));
$mes_B_rjuz = dater($newDate_rjuz);

$rjuzDate2 = date('Y', strtotime($daterjuz));
$anio_B_rjuz = numtoletras2($rjuzDate2);
	
$rjuzDate3 = date('d', strtotime($daterjuz));
$dia_B_rjuz = numtoletras($rjuzDate3);
$fecha_rjuz = $dia_B_rjuz . " " . $mes_B_rjuz . " " . $anio_B_rjuz; 

// Por - RJuzgado
$por_rjuzt = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];



// Hora de Divorcio - Sentencia Juzgado
$hora_sjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
$hora_sjuz2 = date('G', strtotime($hora_sjuz));
$hora_sjuz3 = numtoletras2($hora_sjuz2);
$min_sjuz2 =  strtotime($hora_sjuz);
$min_sjuz3 =  date("i", $min_sjuz2);
$min_sjuz4 = numtoletras($min_sjuz3);

// Fecha de Divorcio - SJuzgado
$datesjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
$newDate_sjuz = date('Y/m/d', strtotime($datesjuz));
$mes_B_sjuz = dater($newDate_sjuz);

$sjuzDate2 = date('Y', strtotime($datesjuz));
$anio_B_sjuz = numtoletras2($sjuzDate2);
	
$sjuzDate3 = date('d', strtotime($datesjuz));
$dia_B_sjuz = numtoletras($sjuzDate3);
$fecha_sjuz = $dia_B_sjuz . " " . $mes_B_sjuz . " " . $anio_B_sjuz; 

// Por - SJuzgado
$por_sjuzt = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

// Hora de Divorcio - Ejecutoria Juzgado
$hora_ejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
$hora_ejuz2 = date('G', strtotime($hora_ejuz));
$hora_ejuz3 = numtoletras2($hora_ejuz2);
$min_ejuz2 =  strtotime($hora_ejuz);
$min_ejuz3 =  date("i", $min_ejuz2);
$min_ejuz4 = numtoletras($min_ejuz3);

// Fecha de Divorcio - EJuzgado
$dateejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
$newDate_ejuz = date('Y/m/d', strtotime($dateejuz));
$mes_B_ejuz = dater($newDate_ejuz);

$ejuzDate2 = date('Y', strtotime($dateejuz));
$anio_B_ejuz = numtoletras2($ejuzDate2);
	
$ejuzDate3 = date('d', strtotime($dateejuz));
$dia_B_ejuz = numtoletras($ejuzDate3);
$fecha_ejuz = $dia_B_ejuz . " " . $mes_B_ejuz . " " . $anio_B_ejuz; 

// Por - EJuzgado
$por_ejuzt = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];





// fecha de Matrimonio
$originalDate = ( empty($_POST['FechaB']) )   ? NULL : $_POST['FechaB'];
$newDate = date('Y/m/d', strtotime($originalDate));
$mes_B = dater($newDate);

$newDate2 = date('Y', strtotime($originalDate));
$anio_B = numtoletras2($newDate2);
	
$newDate3 = date('d', strtotime($originalDate));
$dia_B = numtoletras($newDate3);

$value_el = ( empty($_POST['gender']) )   ? NULL : $_POST['gender'];
$value_el2 = ( empty($_POST['gender2']) )   ? NULL : $_POST['gender2'];
$optioncaso = ( empty($_POST['optionsbo']) )   ? NULL : $_POST['optionsbo'];
$uregimen = ( empty($_POST['RegimenB']) )   ? NULL : $_POST['RegimenB'];
$uapellidos = ( empty($_POST['usoA']) )   ? NULL : $_POST['usoA'];
$regimenv = ( empty($_POST['OptionRA']) )   ? NULL : $_POST['OptionRA'];
$apellidosv = ( empty($_POST['OptionAA']) )   ? NULL : $_POST['OptionAA'];
$tipopart = ( empty($_POST['tipopar']) )   ? NULL : $_POST['tipopar'];
$nacimientop = "NAC";
$matrimoniop = "MAT";

$rexterior = ( empty($_POST['valuediv']) )   ? NULL : $_POST['valuediv'];
$rcsj = ( empty($_POST['valuedivn']) )   ? NULL : $_POST['valuedivn'];
$rjuzgado = ( empty($_POST['valuedivnj']) )   ? NULL : $_POST['valuedivnj'];
$sjuzgado = ( empty($_POST['valuedivnjs']) )   ? NULL : $_POST['valuedivnjs'];
$ejuzgado = ( empty($_POST['valuedivnjse']) )   ? NULL : $_POST['valuedivnjse'];

$caso2 = ( empty($_POST['edit_notro']) )   ? NULL : $_POST['edit_notro'];

if ($optioncaso == "."){
	$optioncaso = "";
	$casootro = $caso2 . " en ";
	}
	else{
		$casootro = "";
	}


if ($value_el == 'male' and $regimenv == 'Rvalue' and $apellidosv == 'Avalue' ) {


	if (empty($_POST['edit_id'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_id'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
				
 
	
	$id=intval($_POST['edit_id']);
	// UPDATE data into database
$TxtMargi1 = $_POST['edit_el'] . " contrajo matrimonio con " . $_POST['Nella'] . ", el día " .  $dia_B . " " . $mes_B . " " . $anio_B . ", ante " . $_POST['Nnotario'] . ", " . $optioncaso . "" . $casootro . "" . $_POST['LugarB'] . "; los contrayentes optan por el Régimen Patrimonial " . $uregimen . ", la contrayente usará los apellidos ". $uapellidos .". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	} if ($value_el == 'female' and $regimenv == 'Rvalue' and $apellidosv == 'Avalue') {


	if (empty($_POST['edit_id'])){
		$errors[] = "ID está vacío.2";
	} elseif (!empty($_POST['edit_id'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		$id = $_POST['unico'];
				
 
	
	$id=intval($_POST['edit_id']);
	// UPDATE data into database
			$TxtMargi1 = $_POST['Nella'] . " contrajo matrimonio con " . $_POST['edit_el'] . ", el día " .  $dia_B . " " . $mes_B . " " . $anio_B . ", ante " . $_POST['Nnotario'] . ", " . $optioncaso . "" . $casootro . "" . $_POST['LugarB'] . "; los contrayentes optan por el Régimen Patrimonial " . $uregimen . ", la contrayente usará los apellidos ". $uapellidos .". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
		
		
} if ($value_el == 'other' and $regimenv == 'Rvalue' and $apellidosv == 'Avalue' ) {


	if (empty($_POST['edit_id'])){
		$errors[] = "ID está vacío.3";
	} elseif (!empty($_POST['edit_id'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
		$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2"],ENT_QUOTES)));
	
 
	
	$id=intval($_POST['edit_id']);
	$id2 = $_POST['edit_id']+1;
	// UPDATE data into database
			$TxtMargi1 = $_POST['edit_el'] . " contrajo matrimonio con " . $_POST['Nella'] . ", el día " .  $dia_B . " " . $mes_B . " " . $anio_B . ", ante " . $_POST['Nnotario'] . ", " . $optioncaso . "" . $casootro . "" . $_POST['LugarB'] . "; los contrayentes optan por el Régimen Patrimonial " . $uregimen . ", la contrayente usará los apellidos ". $uapellidos .". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora' WHERE id = '$id'";
		
		$TxtMargi2 = $_POST['Nella'] . " contrajo matrimonio con " . $_POST['edit_el'] . ", el día " .  $dia_B . " " . $mes_B . " " . $anio_B . ", ante " . $_POST['Nnotario'] . ", " . $optioncaso . "" . $casootro . "" . $_POST['LugarB'] . "; los contrayentes optan por el Régimen Patrimonial " . $uregimen . ", la contrayente usará los apellidos ". $uapellidos .". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);	
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}

}

if ($value_el == 'male' and $regimenv == 'Rvalue' and $apellidosv == '' ) {


	if (empty($_POST['edit_id'])){
		$errors[] = "ID está vacío.4";
	} elseif (!empty($_POST['edit_id'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		$id = $_POST['unico'];
				
 
	
	$id=intval($_POST['edit_id']);
	// UPDATE data into database
			$TxtMargi1 = $_POST['edit_el'] . " contrajo matrimonio con " . $_POST['Nella'] . ", el día " .  $dia_B . " " . $mes_B . " " . $anio_B . ", ante " . $_POST['Nnotario'] . ", " . $optioncaso . "" . $casootro . "" . $_POST['LugarB'] . "; los contrayentes optan por el Régimen Patrimonial " . $uregimen . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	} if ($value_el == 'female' and $regimenv == 'Rvalue' and $apellidosv == '' ) {


	if (empty($_POST['edit_id'])){
		$errors[] = "ID está vacío.5";
	} elseif (!empty($_POST['edit_id'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		$id = $_POST['unico'];
				
 
	
	$id=intval($_POST['edit_id']);
	// UPDATE data into database
			$TxtMargi1 = $_POST['Nella'] . " contrajo matrimonio con " . $_POST['edit_el'] . ", el día " .  $dia_B . " " . $mes_B . " " . $anio_B . ", ante " . $_POST['Nnotario'] . ", " . $optioncaso . "" . $casootro . "" . $_POST['LugarB'] . "; los contrayentes optan por el Régimen Patrimonial " . $uregimen . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
		
		
} if ($value_el == 'other' and $regimenv == 'Rvalue' and $apellidosv == '' ) {


	if (empty($_POST['edit_id'])){
		$errors[] = "ID está vacío.6";
	} elseif (!empty($_POST['edit_id'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
 $AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2"],ENT_QUOTES)));
	
	
	$id=intval($_POST['edit_id']);
	$id2 = $_POST['edit_id']+1;
	// UPDATE data into database
			$TxtMargi1 = $_POST['edit_el'] . " contrajo matrimonio con " . $_POST['Nella'] . ", el día " .  $dia_B . " " . $mes_B . " " . $anio_B . ", ante " . $_POST['Nnotario'] . ", " . $optioncaso . "" . $casootro . "" . $_POST['LugarB'] . "; los contrayentes optan por el Régimen Patrimonial " . $uregimen . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora' WHERE id = '$id'";
		
		$TxtMargi2 = $_POST['Nella'] . " contrajo matrimonio con " . $_POST['edit_el'] . ", el día " .  $dia_B . " " . $mes_B . " " . $anio_B . ", ante " . $_POST['Nnotario'] . ", " . $optioncaso . "" . $casootro . "" . $_POST['LugarB'] . "; los contrayentes optan por el Régimen Patrimonial " . $uregimen . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);	
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}

}	

if ($value_el == 'male' and $regimenv == '' and $apellidosv == 'Avalue' ) {


	if (empty($_POST['edit_id'])){
		$errors[] = "ID está vacío.7";
	} elseif (!empty($_POST['edit_id'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		$id = $_POST['unico'];
				
 
	
	$id=intval($_POST['edit_id']);
	// UPDATE data into database
			$TxtMargi1 = $_POST['edit_el'] . " contrajo matrimonio con " . $_POST['Nella'] . ", el día " .  $dia_B . " " . $mes_B . " " . $anio_B . ", ante " . $_POST['Nnotario'] . ", " . $optioncaso . "" . $casootro . "" . $_POST['LugarB'] . "; la contrayente usará los apellidos ". $uapellidos .". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	} if ($value_el == 'female' and $regimenv == '' and $apellidosv == 'Avalue' ) {


	if (empty($_POST['edit_id'])){
		$errors[] = "ID está vacío.8";
	} elseif (!empty($_POST['edit_id'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		$id = $_POST['unico'];
				
 
	
	$id=intval($_POST['edit_id']);
	// UPDATE data into database
			$TxtMargi1 = $_POST['Nella'] . " contrajo matrimonio con " . $_POST['edit_el'] . ", el día " .  $dia_B . " " . $mes_B . " " . $anio_B . ", ante " . $_POST['Nnotario'] . ", " . $optioncaso . "" . $casootro . "" . $_POST['LugarB'] . "; la contrayente usará los apellidos ". $uapellidos .". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
		
		
} if ($value_el == 'other' and $regimenv == '' and $apellidosv == 'Avalue' ) {


	if (empty($_POST['edit_id'])){
		$errors[] = "ID está vacío.9";
	} elseif (!empty($_POST['edit_id'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2"],ENT_QUOTES)));
	
 
	
	$id=intval($_POST['edit_id']);
	$id2 = $_POST['edit_id']+1;
	// UPDATE data into database
			$TxtMargi1 = $_POST['edit_el'] . " contrajo matrimonio con " . $_POST['Nella'] . ", el día " .  $dia_B . " " . $mes_B . " " . $anio_B . ", ante " . $_POST['Nnotario'] . ", " . $optioncaso . "" . $casootro . "" . $_POST['LugarB'] . "; la contrayente usará los apellidos ". $uapellidos .". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora' WHERE id = '$id'";
		
		$TxtMargi2 = $_POST['Nella'] . " contrajo matrimonio con " . $_POST['edit_el'] . ", el día " .  $dia_B . " " . $mes_B . " " . $anio_B . ", ante " . $_POST['Nnotario'] . ", " . $optioncaso . "" . $casootro . "" . $_POST['LugarB'] . "; la contrayente usará los apellidos ". $uapellidos .". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);	
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}

}

if ($value_el == 'male' and $regimenv == '' and $apellidosv == '' ) {


	if (empty($_POST['edit_id'])){
		$errors[] = "ID está vacío.10";
	} elseif (!empty($_POST['edit_id'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		$id = $_POST['unico'];
				
 
	
	$id=intval($_POST['edit_id']);
	// UPDATE data into database
			$TxtMargi1 = $_POST['edit_el'] . " contrajo matrimonio con " . $_POST['Nella'] . ", el día " .  $dia_B . " " . $mes_B . " " . $anio_B . ", ante " . $_POST['Nnotario'] . ", " . $optioncaso . "" . $casootro . "" . $_POST['LugarB'] . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	} if ($value_el == 'female' and $regimenv == '' and $apellidosv == '' ) {


	if (empty($_POST['edit_id'])){
		$errors[] = "ID está vacío.11";
	} elseif (!empty($_POST['edit_id'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		$id = $_POST['unico'];
				
 
	
	$id=intval($_POST['edit_id']);
	// UPDATE data into database
			$TxtMargi1 = $_POST['Nella'] . " contrajo matrimonio con " . $_POST['edit_el'] . ", el día " .  $dia_B . " " . $mes_B . " " . $anio_B . ", ante " . $_POST['Nnotario'] . ", " . $optioncaso . "" . $casootro . "" . $_POST['LugarB'] . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
		
		
} if ($value_el == 'other' and $regimenv == '' and $apellidosv == '') {


	if (empty($_POST['edit_id'])){
		$errors[] = "ID está vacío.12";
	} elseif (!empty($_POST['edit_id'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2"],ENT_QUOTES)));
	
 
	
	$id=intval($_POST['edit_id']);
	$id2 = $_POST['edit_id']+1;
	// UPDATE data into database
			$TxtMargi1 = $_POST['edit_el'] . " contrajo matrimonio con " . $_POST['Nella'] . ", el día " .  $dia_B . " " . $mes_B . " " . $anio_B . ", ante " . $_POST['Nnotario'] . ", " . $optioncaso . "" . $casootro . "" . $_POST['LugarB'] . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora' WHERE id = '$id'";
		
		$TxtMargi2 = $_POST['Nella'] . " contrajo matrimonio con " . $_POST['edit_el'] . ", el día " .  $dia_B . " " . $mes_B . " " . $anio_B . ", ante " . $_POST['Nnotario'] . ", " . $optioncaso . "" . $casootro . "" . $_POST['LugarB'] . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);	
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}

	
	
}

/////////////////////////////////////
////////////////////////////////////
// Divorcio Exterior

	
	if ($value_el2 == 'n_el' and $rexterior == 'resoluexterior' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
		
		
		
		
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
	if ($value_el2 == 'n_ella' and $rexterior == 'resoluexterior' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
		
		
		
		
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
	if ($value_el2 == 'matrim' and $rexterior == 'resoluexterior' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
		
		
		
		
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
		
	if ($value_el2 == 'el_ella' and $rexterior == 'resoluexterior' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2d"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2d"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2d"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
		
		
		
	
	
 
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		 $TxtMargi2 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	if ($value_el2 == 'el_matri' and $rexterior == 'resoluexterior' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
		
		
		
	
	
 
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		 $TxtMargi2 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	


		if ($value_el2 == 'ella_matri' and $rexterior == 'resoluexterior' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
		
		
		
	
	
 
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		 $TxtMargi2 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}




if ($value_el2 == 'el_ella_matri' and $rexterior == 'resoluexterior' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2d"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2d"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2d"],ENT_QUOTES)));
		
	$AnioP3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));	
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
		
			
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	$id3 = $_POST['edit_id2']+2;
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		 $TxtMargi2 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id2'";
		
		 $TxtMargi3 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql3 = "UPDATE margi SET TxtMargi1 = '$TxtMargi3', AnioP = '$AnioP3', LibroP = '$LibroP3', NPartida = '$NPartida3', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id3'";
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
	$query = mysqli_query($con,$sql3);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}


/////////////////////////////////////
////////////////////////////////////
// Divorcio CSJ


	if ($value_el2 == 'n_el' and $rexterior == '' and $rcsj == 'resolucioncsj' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
		
		
		
		
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
	if ($value_el2 == 'n_ella' and $rexterior == '' and $rcsj == 'resolucioncsj' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		

	
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
	if ($value_el2 == 'matrim' and $rexterior == '' and $rcsj == 'resolucioncsj' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
		$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
		
		
		
		
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial. Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
		
	if ($value_el2 == 'el_ella' and $rexterior == '' and $rcsj == 'resolucioncsj' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2d"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2d"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2d"],ENT_QUOTES)));
	
		$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
		

	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		 $TxtMargi2 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	if ($value_el2 == 'el_matri' and $rexterior == '' and $rcsj == 'resolucioncsj' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));
	
		$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
			
		
	
 
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		 $TxtMargi2 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial. Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	


		if ($value_el2 == 'ella_matri' and $rexterior == '' and $rcsj == 'resolucioncsj' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));
	
		$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
		
		
		
		
	
	
 
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		 $TxtMargi2 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial. Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}




if ($value_el2 == 'el_ella_matri' and $rexterior == '' and $rcsj == 'resolucioncsj' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2d"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2d"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2d"],ENT_QUOTES)));
		
		$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
		
		
			
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	$id3 = $_POST['edit_id2']+2;
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		 $TxtMargi2 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id2'";
		
		 $TxtMargi3 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial. Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql3 = "UPDATE margi SET TxtMargi1 = '$TxtMargi3', AnioP = '$AnioP3', LibroP = '$LibroP3', NPartida = '$NPartida3', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id3'";
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
	$query = mysqli_query($con,$sql3);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}


/////////////////////////////////////
////////////////////////////////////
// Divorcio Resolución Juzgado

if ($value_el2 == 'n_el' and $rexterior == '' and $rcsj == '' and $rjuzgado == 'resolucionjuz' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
		
		
		
		
		
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
	if ($value_el2 == 'n_ella' and $rexterior == '' and $rcsj == '' and $rjuzgado == 'resolucionjuz' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
		
		

	
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
	if ($value_el2 == 'matrim' and $rexterior == '' and $rcsj == '' and $rjuzgado == 'resolucionjuz' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
		$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
		
		
	
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial. Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
		
	if ($value_el2 == 'el_ella' and $rexterior == '' and $rcsj == '' and $rjuzgado == 'resolucionjuz' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2d"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2d"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2d"],ENT_QUOTES)));
	
		$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
		
		
		
		

	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		 $TxtMargi2 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	if ($value_el2 == 'el_matri' and $rexterior == '' and $rcsj == '' and $rjuzgado == 'resolucionjuz' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));
	
		$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
		
		
			
		
	
 
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		 $TxtMargi2 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial. Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	


		if ($value_el2 == 'ella_matri' and $rexterior == '' and $rcsj == '' and $rjuzgado == 'resolucionjuz' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));
	
		$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
		
		
	
 
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		 $TxtMargi2 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial. Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}




if ($value_el2 == 'el_ella_matri' and $rexterior == '' and $rcsj == '' and $rjuzgado == 'resolucionjuz' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2d"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2d"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2d"],ENT_QUOTES)));
		
		$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
		
		
		
		
			
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	$id3 = $_POST['edit_id2']+2;
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		 $TxtMargi2 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id2'";
		
		 $TxtMargi3 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial. Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql3 = "UPDATE margi SET TxtMargi1 = '$TxtMargi3', AnioP = '$AnioP3', LibroP = '$LibroP3', NPartida = '$NPartida3', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id3'";
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
	$query = mysqli_query($con,$sql3);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}




/////////////////////////////////////
////////////////////////////////////
// Divorcio Sentencia Juzgado

if ($value_el2 == 'n_el' and $rexterior == '' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == 'sentenciajuz' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}
		
		
		
		
		
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
	if ($value_el2 == 'n_ella' and $rexterior == '' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == 'sentenciajuz' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}
		
		

	
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
	if ($value_el2 == 'matrim' and $rexterior == '' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == 'sentenciajuz' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}
		
	
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
		
	if ($value_el2 == 'el_ella' and $rexterior == '' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == 'sentenciajuz' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2d"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2d"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2d"],ENT_QUOTES)));
	
	$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}
		
		
		

	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		 $TxtMargi2 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	if ($value_el2 == 'el_matri' and $rexterior == '' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == 'sentenciajuz' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));
	
	$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}
	
 
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		 $TxtMargi2 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	


		if ($value_el2 == 'ella_matri' and $rexterior == '' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == 'sentenciajuz' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));
	
		$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}
 
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		 $TxtMargi2 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}




if ($value_el2 == 'el_ella_matri' and $rexterior == '' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == 'sentenciajuz' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2d"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2d"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2d"],ENT_QUOTES)));
		
		$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}
		
		
			
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	$id3 = $_POST['edit_id2']+2;
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		 $TxtMargi2 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id2'";
		
		 $TxtMargi3 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql3 = "UPDATE margi SET TxtMargi1 = '$TxtMargi3', AnioP = '$AnioP3', LibroP = '$LibroP3', NPartida = '$NPartida3', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id3'";
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
	$query = mysqli_query($con,$sql3);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}


/////////////////////////////////////
////////////////////////////////////
// Divorcio Ejecutoria Juzgado

if ($value_el2 == 'n_el' and $rexterior == '' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == 'ejecutoriajuz') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}
		
		
		
		
		
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
	if ($value_el2 == 'n_ella' and $rexterior == '' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == 'ejecutoriajuz') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}
		

	
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
	if ($value_el2 == 'matrim' and $rexterior == '' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == 'ejecutoriajuz') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}
		
	
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
		
	if ($value_el2 == 'el_ella' and $rexterior == '' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == 'ejecutoriajuz') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2d"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2d"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2d"],ENT_QUOTES)));
	
$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}
		

	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		 $TxtMargi2 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	if ($value_el2 == 'el_matri' and $rexterior == '' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == 'ejecutoriajuz') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));
	
	$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}
		
 
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		 $TxtMargi2 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	


		if ($value_el2 == 'ella_matri' and $rexterior == '' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == 'ejecutoriajuz') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));
	
	$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}
		
 
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		 $TxtMargi2 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, ejecutoriadaa" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}




if ($value_el2 == 'el_ella_matri' and $rexterior == '' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == 'ejecutoriajuz') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2d"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2d"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2d"],ENT_QUOTES)));
		
	$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}
		
		
		
			
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	$id3 = $_POST['edit_id2']+2;
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		 $TxtMargi2 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id2'";
		
		 $TxtMargi3 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql3 = "UPDATE margi SET TxtMargi1 = '$TxtMargi3', AnioP = '$AnioP3', LibroP = '$LibroP3', NPartida = '$NPartida3', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id3'";
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
	$query = mysqli_query($con,$sql3);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}



/////////////////////////////////////
////////////////////////////////////
// Divorcio Exterior -- CSJ

	
	if ($value_el2 == 'n_el' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
	$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}	
		
		
		
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
	if ($value_el2 == 'n_ella' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
		$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}		
		
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
	if ($value_el2 == 'matrim' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
	$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}	
		
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
		
	if ($value_el2 == 'el_ella' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2d"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2d"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2d"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
	$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}	
	
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
	$TxtMargi2 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	if ($value_el2 == 'el_matri' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
	$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}	
		
	
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		  $TxtMargi2 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	


		if ($value_el2 == 'ella_matri' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
	
		$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
		
		
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		  $TxtMargi2 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}




if ($value_el2 == 'el_ella_matri' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2d"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2d"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2d"],ENT_QUOTES)));
		
	$AnioP3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));	
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
	$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
			
		
			
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	$id3 = $_POST['edit_id2']+2;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		$TxtMargi2 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id2'";
		
		 $TxtMargi3 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql3 = "UPDATE margi SET TxtMargi1 = '$TxtMargi3', AnioP = '$AnioP3', LibroP = '$LibroP3', NPartida = '$NPartida3', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id3'";
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
	$query = mysqli_query($con,$sql3);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}


/////////////////////////////////////
////////////////////////////////////
// Divorcio Exterior -- Rjuzgado

	
	if ($value_el2 == 'n_el' and $rexterior == 'resoluexterior' and $rcsj == '' and $rjuzgado == 'resolucionjuz' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
		
		
		
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
	if ($value_el2 == 'n_ella' and $rexterior == 'resoluexterior' and $rcsj == '' and $rjuzgado == 'resolucionjuz' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
		$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
		
		
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
	if ($value_el2 == 'matrim' and $rexterior == 'resoluexterior' and $rcsj == '' and $rjuzgado == 'resolucionjuz' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
			
		
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
		
	if ($value_el2 == 'el_ella' and $rexterior == 'resoluexterior' and $rcsj == '' and $rjuzgado == 'resolucionjuz' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2d"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2d"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2d"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
		
	
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
	$TxtMargi2 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	if ($value_el2 == 'el_matri' and $rexterior == 'resoluexterior' and $rcsj == '' and $rjuzgado == 'resolucionjuz' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
		
	
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		  $TxtMargi2 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	


		if ($value_el2 == 'ella_matri' and $rexterior == 'resoluexterior' and $rcsj == '' and $rjuzgado == 'resolucionjuz' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
	
		$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
		
		
		
		
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		  $TxtMargi2 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}




if ($value_el2 == 'el_ella_matri' and $rexterior == 'resoluexterior' and $rcsj == '' and $rjuzgado == 'resolucionjuz' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2d"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2d"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2d"],ENT_QUOTES)));
		
	$AnioP3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));	
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
		
		
			
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	$id3 = $_POST['edit_id2']+2;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		$TxtMargi2 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id2'";
		
		 $TxtMargi3 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql3 = "UPDATE margi SET TxtMargi1 = '$TxtMargi3', AnioP = '$AnioP3', LibroP = '$LibroP3', NPartida = '$NPartida3', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id3'";
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
	$query = mysqli_query($con,$sql3);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}



/////////////////////////////////////
////////////////////////////////////
// Divorcio Exterior -- Sjuzgado

	
	if ($value_el2 == 'n_el' and $rexterior == 'resoluexterior' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == 'sentenciajuz' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
	$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}
		
		
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
	if ($value_el2 == 'n_ella' and $rexterior == 'resoluexterior' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == 'sentenciajuz' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
	$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}
		
		
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
	if ($value_el2 == 'matrim' and $rexterior == 'resoluexterior' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == 'sentenciajuz' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}
		
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
		
	if ($value_el2 == 'el_ella' and $rexterior == 'resoluexterior' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == 'sentenciajuz' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2d"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2d"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2d"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}
		
	
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
	$TxtMargi2 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	if ($value_el2 == 'el_matri' and $rexterior == 'resoluexterior' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == 'sentenciajuz' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}
	
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		  $TxtMargi2 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	


		if ($value_el2 == 'ella_matri' and $rexterior == 'resoluexterior' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == 'sentenciajuz' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
	
	$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}
		
		
		
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		  $TxtMargi2 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}




if ($value_el2 == 'el_ella_matri' and $rexterior == 'resoluexterior' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == 'sentenciajuz' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2d"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2d"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2d"],ENT_QUOTES)));
		
	$AnioP3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));	
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
	$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}
		
		
			
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	$id3 = $_POST['edit_id2']+2;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		$TxtMargi2 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id2'";
		
		 $TxtMargi3 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql3 = "UPDATE margi SET TxtMargi1 = '$TxtMargi3', AnioP = '$AnioP3', LibroP = '$LibroP3', NPartida = '$NPartida3', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id3'";
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
	$query = mysqli_query($con,$sql3);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}


/////////////////////////////////////
////////////////////////////////////
// Divorcio Exterior -- Ejuzgado

	
	if ($value_el2 == 'n_el' and $rexterior == 'resoluexterior' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == 'ejecutoriajuz') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
	$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}
		
		
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
	if ($value_el2 == 'n_ella' and $rexterior == 'resoluexterior' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == 'ejecutoriajuz') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}
		
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
	if ($value_el2 == 'matrim' and $rexterior == 'resoluexterior' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == 'ejecutoriajuz') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}
		
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
		
	if ($value_el2 == 'el_ella' and $rexterior == 'resoluexterior' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == 'ejecutoriajuz') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2d"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2d"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2d"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}
		
	
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
	$TxtMargi2 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	if ($value_el2 == 'el_matri' and $rexterior == 'resoluexterior' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == 'ejecutoriajuz') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}
	
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		  $TxtMargi2 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	


		if ($value_el2 == 'ella_matri' and $rexterior == 'resoluexterior' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == 'ejecutoriajuz') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
	
	$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}
		
		
		
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		  $TxtMargi2 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}




if ($value_el2 == 'el_ella_matri' and $rexterior == 'resoluexterior' and $rcsj == '' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == 'ejecutoriajuz') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2d"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2d"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2d"],ENT_QUOTES)));
		
	$AnioP3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));	
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
	$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}
		
			
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	$id3 = $_POST['edit_id2']+2;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		$TxtMargi2 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id2'";
		
		 $TxtMargi3 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql3 = "UPDATE margi SET TxtMargi1 = '$TxtMargi3', AnioP = '$AnioP3', LibroP = '$LibroP3', NPartida = '$NPartida3', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id3'";
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
	$query = mysqli_query($con,$sql3);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}


/////////////////////////////////////
////////////////////////////////////
// Divorcio Exterior -- CSJ -- RJuzgado

	
	if ($value_el2 == 'n_el' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == 'resolucionjuz' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
	$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}	
		
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz .". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
	if ($value_el2 == 'n_ella' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == 'resolucionjuz' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}	
		
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz .". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
	if ($value_el2 == 'matrim' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == 'resolucionjuz' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
		
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
		
	if ($value_el2 == 'el_ella' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == 'resolucionjuz' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2d"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2d"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2d"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
		
	
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz .". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
$TxtMargi2 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz .". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	if ($value_el2 == 'el_matri' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == 'resolucionjuz' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
	
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz .". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		  $TxtMargi2 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	


		if ($value_el2 == 'ella_matri' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == 'resolucionjuz' and $sjuzgado == '' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
	
	$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
		
		
		
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz .". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		$TxtMargi2 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}




if ($value_el2 == 'el_ella_matri' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == 'resolucionjuz' and $sjuzgado == '' and $ejuzgado == '') {

	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2d"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2d"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2d"],ENT_QUOTES)));
		
	$AnioP3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));	
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
	$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
		
			
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	$id3 = $_POST['edit_id2']+2;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz .". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
	$TxtMargi2 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz .". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id2'";
		
		 $TxtMargi3 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql3 = "UPDATE margi SET TxtMargi1 = '$TxtMargi3', AnioP = '$AnioP3', LibroP = '$LibroP3', NPartida = '$NPartida3', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id3'";
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
	$query = mysqli_query($con,$sql3);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}

/////////////////////////////////////
////////////////////////////////////
// Divorcio Exterior -- CSJ -- SJuzgado

	
	if ($value_el2 == 'n_el' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == '' and $sjuzgado == 'sentenciajuz' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
	$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
	if ($value_el2 == 'n_ella' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == '' and $sjuzgado == 'sentenciajuz' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}	
		
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
	if ($value_el2 == 'matrim' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == '' and $sjuzgado == 'sentenciajuz' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}
		
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
		
	if ($value_el2 == 'el_ella' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == '' and $sjuzgado == 'sentenciajuz' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2d"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2d"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2d"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}
			
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
$TxtMargi2 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	if ($value_el2 == 'el_matri' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == '' and $sjuzgado == 'sentenciajuz' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}
	
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		  $TxtMargi2 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	


		if ($value_el2 == 'ella_matri' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == '' and $sjuzgado == 'sentenciajuz' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
	
	$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}
		
		
		
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		$TxtMargi2 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}




if ($value_el2 == 'el_ella_matri' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == '' and $sjuzgado == 'sentenciajuz' and $ejuzgado == '') {

	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2d"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2d"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2d"],ENT_QUOTES)));
		
	$AnioP3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));	
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
	$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}
		
			
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	$id3 = $_POST['edit_id2']+2;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
	$TxtMargi2 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id2'";
		
		 $TxtMargi3 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql3 = "UPDATE margi SET TxtMargi1 = '$TxtMargi3', AnioP = '$AnioP3', LibroP = '$LibroP3', NPartida = '$NPartida3', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id3'";
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
	$query = mysqli_query($con,$sql3);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}


/////////////////////////////////////
////////////////////////////////////
// Divorcio Exterior -- CSJ -- EJuzgado

	
	if ($value_el2 == 'n_el' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == 'ejecutoriajuz') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
	$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}
	
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
	if ($value_el2 == 'n_ella' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == 'ejecutoriajuz') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}
		
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
	if ($value_el2 == 'matrim' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == 'ejecutoriajuz') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}
	
		
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
		
	if ($value_el2 == 'el_ella' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == 'ejecutoriajuz') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2d"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2d"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2d"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}
	
		
	
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
$TxtMargi2 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	if ($value_el2 == 'el_matri' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == 'ejecutoriajuz') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}
	
	
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		  $TxtMargi2 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	


		if ($value_el2 == 'ella_matri' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == 'ejecutoriajuz') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
	
	$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}
	
		
		
		
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		$TxtMargi2 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}




if ($value_el2 == 'el_ella_matri' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == '' and $sjuzgado == '' and $ejuzgado == 'ejecutoriajuz') {

	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2d"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2d"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2d"],ENT_QUOTES)));
		
	$AnioP3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));	
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
	$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}
	
		
			
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	$id3 = $_POST['edit_id2']+2;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
	$TxtMargi2 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id2'";
		
		 $TxtMargi3 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql3 = "UPDATE margi SET TxtMargi1 = '$TxtMargi3', AnioP = '$AnioP3', LibroP = '$LibroP3', NPartida = '$NPartida3', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id3'";
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
	$query = mysqli_query($con,$sql3);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}


/////////////////////////////////////
////////////////////////////////////
// Divorcio Exterior -- CSJ -- RJuzgado -- SJuzgado

	
	if ($value_el2 == 'n_el' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == 'resolucionjuz' and $sjuzgado == 'sentenciajuz' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
	$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}	
	
$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
	if ($value_el2 == 'n_ella' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == 'resolucionjuz' and $sjuzgado == 'sentenciajuz' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}	
	
$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
	if ($value_el2 == 'matrim' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == 'resolucionjuz' and $sjuzgado == 'sentenciajuz' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
		
	$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}

	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
		
	if ($value_el2 == 'el_ella' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == 'resolucionjuz' and $sjuzgado == 'sentenciajuz' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2d"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2d"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2d"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
		
	$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
$TxtMargi2 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	if ($value_el2 == 'el_matri' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == 'resolucionjuz' and $sjuzgado == 'sentenciajuz' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
	
	$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}

	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		  $TxtMargi2 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	


		if ($value_el2 == 'ella_matri' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == 'resolucionjuz' and $sjuzgado == 'sentenciajuz' and $ejuzgado == '') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
	
	$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
		
	$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}	
		
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		$TxtMargi2 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}




if ($value_el2 == 'el_ella_matri' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == 'resolucionjuz' and $sjuzgado == 'sentenciajuz' and $ejuzgado == '') {

	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2d"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2d"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2d"],ENT_QUOTES)));
		
	$AnioP3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));	
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
		
	$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}	
		


	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	$id3 = $_POST['edit_id2']+2;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
	$TxtMargi2 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id2'";
		
		 $TxtMargi3 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql3 = "UPDATE margi SET TxtMargi1 = '$TxtMargi3', AnioP = '$AnioP3', LibroP = '$LibroP3', NPartida = '$NPartida3', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id3'";
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
	$query = mysqli_query($con,$sql3);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}


/////////////////////////////////////
////////////////////////////////////
// Divorcio Exterior -- CSJ -- RJuzgado -- EJuzgado

	
	if ($value_el2 == 'n_el' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == 'resolucionjuz' and $sjuzgado == '' and $ejuzgado == 'ejecutoriajuz') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
	$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}	
	
$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
	if ($value_el2 == 'n_ella' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == 'resolucionjuz' and $sjuzgado == '' and $ejuzgado == 'ejecutoriajuz') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}	
	
$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}
	
	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
	if ($value_el2 == 'matrim' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == 'resolucionjuz' and $sjuzgado == '' and $ejuzgado == 'ejecutoriajuz') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
		
	$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}

	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
		
	if ($value_el2 == 'el_ella' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == 'resolucionjuz' and $sjuzgado == '' and $ejuzgado == 'ejecutoriajuz') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2d"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2d"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2d"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
		
	$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
$TxtMargi2 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	if ($value_el2 == 'el_matri' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == 'resolucionjuz' and $sjuzgado == '' and $ejuzgado == 'ejecutoriajuz') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
	
	$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}

	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		  $TxtMargi2 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	


		if ($value_el2 == 'ella_matri' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == 'resolucionjuz' and $sjuzgado == '' and $ejuzgado == 'ejecutoriajuz') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
	
	$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
		
	$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}
		
	
	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		$TxtMargi2 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}




if ($value_el2 == 'el_ella_matri' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == 'resolucionjuz' and $sjuzgado == '' and $ejuzgado == 'ejecutoriajuz') {

	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2d"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2d"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2d"],ENT_QUOTES)));
		
	$AnioP3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));	
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
		
	$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}	
		


	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	$id3 = $_POST['edit_id2']+2;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
	$TxtMargi2 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id2'";
		
		 $TxtMargi3 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql3 = "UPDATE margi SET TxtMargi1 = '$TxtMargi3', AnioP = '$AnioP3', LibroP = '$LibroP3', NPartida = '$NPartida3', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id3'";
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
	$query = mysqli_query($con,$sql3);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}


/////////////////////////////////////
////////////////////////////////////
// Divorcio Exterior -- CSJ -- RJuzgado -- SJuzgado -- EJuzgado

	
	if ($value_el2 == 'n_el' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == 'resolucionjuz' and $sjuzgado == 'sentenciajuz' and $ejuzgado == 'ejecutoriajuz') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
	$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}	
	
$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}
	
$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}


	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
	if ($value_el2 == 'n_ella' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == 'resolucionjuz' and $sjuzgado == 'sentenciajuz' and $ejuzgado == 'ejecutoriajuz') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}	
	
$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}
	
$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}


	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
	if ($value_el2 == 'matrim' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == 'resolucionjuz' and $sjuzgado == 'sentenciajuz' and $ejuzgado == 'ejecutoriajuz') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
		
	$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}

$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}

	$id=intval($_POST['edit_id2']);
	// UPDATE data into database
 $TxtMargi1 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	
		
	if ($value_el2 == 'el_ella' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == 'resolucionjuz' and $sjuzgado == 'sentenciajuz' and $ejuzgado == 'ejecutoriajuz') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2d"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2d"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2d"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
		
	$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}
	
$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}

	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
$TxtMargi2 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	
	
	if ($value_el2 == 'el_matri' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == 'resolucionjuz' and $sjuzgado == 'sentenciajuz' and $ejuzgado == 'ejecutoriajuz') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
	
	$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}

$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}

	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		  $TxtMargi2 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}
	


		if ($value_el2 == 'ella_matri' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == 'resolucionjuz' and $sjuzgado == 'sentenciajuz' and $ejuzgado == 'ejecutoriajuz') {


	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
	
	$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
		
	$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}	
		
$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}	


	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
		$TxtMargi2 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id2'";
		
		
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}




if ($value_el2 == 'el_ella_matri' and $rexterior == 'resoluexterior' and $rcsj == 'resolucioncsj' and $rjuzgado == 'resolucionjuz' and $sjuzgado == 'sentenciajuz' and $ejuzgado == 'ejecutoriajuz') {

	if (empty($_POST['edit_id2'])){
		$errors[] = "ID está vacío.13" .$_POST['edit_id2'] ;
	} elseif (!empty($_POST['edit_id2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ini"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro"],ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2d"],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2d"],ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2d"],ENT_QUOTES)));
		
	$AnioP3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_anioe2dm"],ENT_QUOTES)));
	$NPartida3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartida2dm"],ENT_QUOTES)));
	$LibroP3 = mysqli_real_escape_string($con,(strip_tags($_POST["edit_libro2dm"],ENT_QUOTES)));	
	
	$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	
 if ($f_exterior == ""){
	$f_exterior = "";

	}
	
	else {
		$f_exterior = " el día " . $fecha_ext;
	}
		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}
		
$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	
 if ($f_csj == ""){
	$f_csj = "";

	}
	
	else {
		$f_csj = " del día " . $fecha_csj;
	}
		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}
		
	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}	
 if ($f_rjuz == ""){
	$f_rjuz = "";

	}
	
	else {
		$f_rjuz = " del día " . $fecha_rjuz;
	}
		
	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
		
	$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}	
 if ($f_sjuz == ""){
	$f_sjuz = "";

	}
	
	else {
		$f_sjuz = " del día " . $fecha_sjuz;
	}
		
	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}	
		
$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
 if ($f_ejuz == ""){
	$f_ejuz = "";

	}
	
	else {
		$f_ejuz = " del día " . $fecha_ejuz;
	}
		
	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}

	$id=intval($_POST['edit_id2']);
	$id2 = $_POST['edit_id2']+1;
	$id3 = $_POST['edit_id2']+2;
	// UPDATE data into database
$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id'";
		
	$TxtMargi2 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['Nella'] . " y " . $_POST['edit_el'] . ", decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '$TxtMargi2', AnioP = '$AnioP2', LibroP = '$LibroP2', NPartida = '$NPartida2', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$nacimientop', HoraC = '$hora' WHERE id = '$id2'";
		
		 $TxtMargi3 = "Cancélese la presente partida por haberse disuelto el vínculo matrimonial, decretado" . $hexterior . " " .  $f_exterior . "" . $por_exterior . ". Resolución" . $hcsj . " " .  $f_csj . "" . $por_csj . ". Resolución" . $hrjuz . " " .  $f_rjuz . "" . $por_rjuz . ", según sentencia definitiva pronunciada" . $hsjuz . " " .  $f_sjuz . "" . $por_sjuz . ", ejecutoriada" . $hejuz . " " .  $f_ejuz . "" . $por_ejuz . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
	$sql3 = "UPDATE margi SET TxtMargi1 = '$TxtMargi3', AnioP = '$AnioP3', LibroP = '$LibroP3', NPartida = '$NPartida3', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora' WHERE id = '$id3'";
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
	$query = mysqli_query($con,$sql3);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}





	
if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}
	
?>			