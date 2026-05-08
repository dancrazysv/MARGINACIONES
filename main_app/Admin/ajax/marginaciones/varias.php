<?php

$tipopartuto = ( empty($_POST['tipopartuto3']) )   ? NULL : $_POST['tipopartuto3'];
$tipopartuto2 = ( empty($_POST['tipopartuto2']) )   ? NULL : $_POST['tipopartuto2'];



if ($tipovar == 'recono' ) {


	if (empty($_POST['edit_idvar'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idvar'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniovar2'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numvar2']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librovar2']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idvar']);
	// UPDATE data into database
$TxtMargi1 = "La presente partida queda cancelada por la número " . $numvar2 . ", folio " . $folvar2 . ", libro número " . $librovar2 . " de Nacimientos, del año " . $aniovar2. ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopartuto', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdfvar', cargor = '$carg', estado = '$est', TipoMargi = 'MRECO', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Reconocimiento) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 
if ($tipovar == 'subsi' and $tipovareje == 'ejecuvar' and $tipovarsen == 'ejecuvar2') {


	if (empty($_POST['edit_idvar'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idvar'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniovar2'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numvar2']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librovar2']),'utf-8'),ENT_QUOTES)));
	

 
	
	$id=intval($_POST['edit_idvar']);
	// UPDATE data into database
$TxtMargi1 = "La presente partida queda cancelada por la número " . $numvar2 . ", folio " . $folvar2 . ", libro número " . $librovar2 . " de Nacimientos, del año " . $aniovar2 . ", según sentencia pronunciada" .  $hora_var . "" . $datevar . "" . $por_var . "; ejecutoriada" . $hora_vari . "" . $datevari . "" . $por_vari . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopartuto', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdfvar', cargor = '$carg', estado = '$est', TipoMargi = 'MSUB', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		

$sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";

$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Reconocimiento) esta asignada a otro usuario.</strong></div>
<?php 
	}
	

		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 
if ($tipovar == 'subsi' and $tipovareje == 'ejecuvar' and $tipovarsen == '') {


	if (empty($_POST['edit_idvar'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idvar'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniovar2'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numvar2']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librovar2']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idvar']);
	// UPDATE data into database
$TxtMargi1 = "La presente partida queda cancelada por la número " . $numvar2 . ", folio " . $folvar2 . ", libro número " . $librovar2 . " de Nacimientos, del año " . $aniovar2 . ", según sentencia pronunciada" .  $hora_var . "" . $datevar . "" . $por_var . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopartuto', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdfvar', cargor = '$carg', estado = '$est', TipoMargi = 'MSUB', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Reconocimiento) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 

if ($tipovar == 'subsi' and $tipovareje == '' and $tipovarsen == 'ejecuvar2') {


	if (empty($_POST['edit_idvar'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idvar'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniovar2'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numvar2']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librovar2']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idvar']);
	// UPDATE data into database
$TxtMargi1 = "La presente partida queda cancelada por la número " . $numvar2 . ", folio " .  $folvar2 . ", libro número " . $librovar2 . " de Nacimientos, del año " . $aniovar2 . ", ejecutoriada" . $hora_vari . "" . $datevari . "" . $por_vari . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopartuto', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdfvar', cargor = '$carg', estado = '$est', TipoMargi = 'MSUB', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Reconocimiento) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 

if ($tipovar == 'subsi' and $tipovareje == '' and $tipovarsen == '') {

?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong>Debes de seleccionar por lo menos una de las opciones (Resolución/Ejecutoria)</strong></div>
	
	
	<?php
	} 
if ($tipovar == 'adop' and $tipovareje == 'ejecuvar' and $tipovarsen == 'ejecuvar2') {


	if (empty($_POST['edit_idvar'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idvar'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniovar2'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numvar2']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librovar2']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idvar']);
	// UPDATE data into database
$TxtMargi1 = "Cancelase la presente partida. Según sentencia pronunciada" .  $hora_var . "" . $datevar . "" . $por_var . "; ejecutoriada" . $hora_vari . "" . $datevari . "" . $por_vari . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopartuto', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdfvar', cargor = '$carg', estado = '$est', TipoMargi = 'MADO', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Reconocimiento) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 
if ($tipovar == 'adop' and $tipovareje == 'ejecuvar' and $tipovarsen == '') {


	if (empty($_POST['edit_idvar'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idvar'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniovar2'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numvar2']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librovar2']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idvar']);
	// UPDATE data into database
$TxtMargi1 = "Cancelase la presente partida. Según sentencia pronunciada" .  $hora_var . "" . $datevar . "" . $por_var . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopartuto', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdfvar', cargor = '$carg', estado = '$est', TipoMargi = 'MADO', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Reconocimiento) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 
if ($tipovar == 'adop' and $tipovareje == '' and $tipovarsen == 'ejecuvar2') {


	if (empty($_POST['edit_idvar'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idvar'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniovar2'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numvar2']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librovar2']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idvar']);
	// UPDATE data into database
$TxtMargi1 = "Cancelase la presente partida. Según sentencia ejecutoriada" . $hora_vari . "" . $datevari . "" . $por_vari . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopartuto', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdfvar', cargor = '$carg', estado = '$est', TipoMargi = 'MADO', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Reconocimiento) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 

if ($tipovar == 'adop' and $tipovareje == '' and $tipovarsen == '') {
?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong>Debes de seleccionar por lo menos una de las opciones (Resolución/Ejecutoria)</strong></div>
	
	
	<?php
	} 
if ($tipovar == 'legiti' ) {


	if (empty($_POST['edit_idvar'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idvar'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniovar2'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numvar2']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librovar2']),'utf-8'),ENT_QUOTES)));
	
	
	









 $divnombre = trim(strtoupper($antecedelegi)); 
  



$subd = substr($divnombre, 0, 2);


if( $subd == "YB" or $subd ==  "YC" or $subd ==  "YD" or $subd ==  "YF" or $subd ==  "YG" or $subd ==  "YH" or $subd ==  "YJ" or $subd ==  "YK" or $subd ==  "YL" or $subd ==  "YM" or $subd ==  "YN" or $subd ==  "YÑ" or $subd ==  "YP" or $subd ==  "YQ" or $subd ==  "YR" or $subd ==  "YS" or $subd ==  "YT" or $subd ==  "YV" or $subd ==  "YW" or $subd ==  "YX" or $subd ==  "YY" or $subd ==  "YZ" or $subd ==  "IB" or $subd ==  "IC" or $subd ==  "ID" or $subd ==  "IF" or $subd ==  "IG" or $subd ==  "IH" or $subd ==  "IJ" or $subd ==  "IK" or $subd ==  "IL" or $subd ==  "IM" or $subd ==  "IN" or $subd ==  "IÑ" or $subd ==  "IP" or $subd ==  "IQ" or $subd ==  "IR" or $subd ==  "IS" or $subd ==  "IT" or $subd ==  "IV" or $subd ==  "IW" or $subd ==  "IX" or $subd ==  "IY" or $subd ==  "IZ" or $subd ==  "IA" or $subd ==  "IE" or $subd ==  "II" or $subd ==  "IO" or $subd ==  "IU" or $subd ==  "IÁ" or $subd ==  "IÉ" or $subd ==  "IÍ" or $subd ==  "IÓ" or $subd ==  "IÚ" or $subd ==  "ÍB" or $subd ==  "ÍC" or $subd ==  "ÍD" or $subd ==  "ÍF" or $subd ==  "ÍG" or $subd ==  "ÍH" or $subd ==  "ÍJ" or $subd ==  "ÍK" or $subd ==  "ÍL" or $subd ==  "ÍM" or $subd ==  "ÍN" or $subd ==  "ÍÑ" or $subd ==  "ÍP" or $subd ==  "ÍQ" or $subd ==  "ÍR" or $subd ==  "ÍS" or $subd ==  "ÍT" or $subd ==  "ÍV" or $subd ==  "ÍW" or $subd ==  "ÍX" or $subd ==  "ÍY" or $subd ==  "ÍZ" or $subd ==  "ÍA" or $subd ==  "ÍE" or $subd ==  "ÍI" or $subd ==  "ÍO" or $subd ==  "ÍU" or $subd ==  "ÍÁ" or $subd ==  "ÍÉ" or $subd ==  "ÍÍ" or $subd ==  "ÍÓ" or $subd ==  "ÍÚ" or $subd ==  "HI" or $subd ==  "HÍ" or $subd ==  "HY")  {
     $antecedetres = " e ";
}else{

$antecedetres = " y ";

}




	
	$id=intval($_POST['edit_idvar']);
	// UPDATE data into database
$TxtMargi1 =  trim(titleCase($menorvar)) . "" . $sexovar . "" . trim(titleCase($madrevar)) . " ".$antecedetres. " " . trim(titleCase($padrevar)) . ", ha sido" . $legivar . "por matrimonio de sus padres" . $datevars . ", ante " . trim(titleCase($nombrevar)) . ", " . $lugarlegi . "" . trim($lugarvar) . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopartuto', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdfvar', cargor = '$carg', estado = '$est', TipoMargi = 'MLEG', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Reconocimiento) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 
if ($tipovar == 'repo' ) {


	if (empty($_POST['edit_idvar'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idvar'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniovar3'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numvar3']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librovar3']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idvar']);
	// UPDATE data into database
$TxtMargi1 = "La presente partida ha sido repuesta por la número " . $numvar2 . ", folio " . $folvar2 . ", libro número " . $librovar2 . " de Reposiciones, del año " . $aniovar2 . ", según" . $tipoacta . "" . $actavar2 . "," . $fecharepo . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopartuto2', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdfvar', cargor = '$carg', estado = '$est', TipoMargi = 'MREPO', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Reconocimiento) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	}

?>