<?php

$tipopartuto = ( empty($_POST['tipopartuto']) )   ? NULL : $_POST['tipopartuto'];



if ($tipotu == 'tutoria' and $tipotuto == 'ampliar' and  $sentenciatu == '' and $ejecutoriatu == '') {


	if (empty($_POST['edit_idaut'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idaut'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniotu'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numtuto']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librotu']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idaut']);
	// UPDATE data into database
$TxtMargi1 = "Ampliase el cargo que ejerce de " . trim(titleCase($cargotu)) . " a " . trim(titleCase($nombretu)) . ", respecto de " . trim(titleCase($respectotu)) . ", " . $tutorpara . " según oficio número " . $oficiotuto2 . "" . $fechartuto . ", por " . $portuto . " de " . $lugartuto . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopartuto', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdftu', cargor = '$carg', estado = '$est', TipoMargi = 'MTUTO', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdftu ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdftu ?> (Tutoría) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 













if ($tipotu == 'tutoria' and $tipotuto == 'inicio' and  $sentenciatu == 'ejecututo1' and $ejecutoriatu == 'ejecututo2') {


	if (empty($_POST['edit_idaut'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idaut'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniotu'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numtuto']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librotu']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idaut']);
	// UPDATE data into database
$TxtMargi1 = "Disciérnase el cargo de " . trim(titleCase($cargotu)) . " a " . trim(titleCase($nombretu)) . ", respecto de " . trim(titleCase($respectotu)) . ", según sentencia pronunciada" . $hora_tuto . "" . $datetuto . "" . $por_tuto . "; ejecutoriada" . $hora_tutos . "" . $datetutos . "" . $por_tutos . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopartuto', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdftu', cargor = '$carg', estado = '$est', TipoMargi = 'MTUTO', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdftu ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdftu ?> (Tutoría) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 
if ($tipotu == 'tutoria' and $tipotuto == 'final' and  $sentenciatu == 'ejecututo1' and $ejecutoriatu == 'ejecututo2') {


	if (empty($_POST['edit_idaut'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idaut'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniotu'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numtuto']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librotu']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idaut']);
	// UPDATE data into database
$TxtMargi1 = "Decretase la finalización  del cargo de " . trim(titleCase($cargotu)) . " a " . trim(titleCase($nombretu)) . ", respecto de " . trim(titleCase($respectotu)) . ", según sentencia pronunciada" .  $hora_tuto . "" . $datetuto . "" . $por_tuto . "; ejecutoriada" . $hora_tutos . "" . $datetutos . "" . $por_tutos . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopartuto', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdftu', cargor = '$carg', estado = '$est', TipoMargi = 'MTUTO', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdftu ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdftu ?> (Tutoría) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 
if ($tipotu == 'tutoria' and $tipotuto == 'inicio' and  $sentenciatu == 'ejecututo1' and $ejecutoriatu == '') {


	if (empty($_POST['edit_idaut'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idaut'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniotu'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numtuto']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librotu']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idaut']);
	// UPDATE data into database
$TxtMargi1 = "Disciérnase el cargo de " . trim(titleCase($cargotu)) . " a " . trim(titleCase($nombretu)) . ", respecto de " . trim(titleCase($respectotu)) . ", según sentencia pronunciada" .  $hora_tuto . "" . $datetuto . "" . $por_tuto . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopartuto', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdftu', cargor = '$carg', estado = '$est', TipoMargi = 'MTUTO', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdftu ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdftu ?> (Tutoría) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 
if ($tipotu == 'tutoria' and $tipotuto == 'final' and  $sentenciatu == 'ejecututo1' and $ejecutoriatu == '') {


	if (empty($_POST['edit_idaut'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idaut'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniotu'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numtuto']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librotu']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idaut']);
	// UPDATE data into database
$TxtMargi1 = "Decretase la finalización  del cargo de " . trim(titleCase($cargotu)) . " a " . trim(titleCase($nombretu)) . ", respecto de " . trim(titleCase($respectotu)) . ", según sentencia pronunciada" .  $hora_tuto . "" . $datetuto . "" . $por_tuto . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopartuto', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdftu', cargor = '$carg', estado = '$est', TipoMargi = 'MTUTO', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdftu ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdftu ?> (Tutoría) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 
if ($tipotu == 'tutoria' and $tipotuto == 'inicio' and  $sentenciatu == '' and $ejecutoriatu == 'ejecututo2') {


	if (empty($_POST['edit_idaut'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idaut'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniotu'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numtuto']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librotu']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idaut']);
	// UPDATE data into database
$TxtMargi1 = "Disciérnase el cargo de " . trim(titleCase($cargotu)) . " a " . trim(titleCase($nombretu)) . ", respecto de " . trim(titleCase($respectotu)) . ", ejecutoriada" . $hora_tutos . "" . $datetutos . "" . $por_tutos . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopartuto', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdftu', cargor = '$carg', estado = '$est', TipoMargi = 'MTUTO', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdftu ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdftu ?> (Tutoría) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 
if ($tipotu == 'tutoria' and $tipotuto == 'final' and  $sentenciatu == '' and $ejecutoriatu == 'ejecututo2') {


	if (empty($_POST['edit_idaut'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idaut'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniotu'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numtuto']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librotu']),'utf-8'),ENT_QUOTES)));
	
	
	
	$id=intval($_POST['edit_idaut']);
	// UPDATE data into database
$TxtMargi1 = "Decretase la finalización  del cargo de " . trim(titleCase($cargotu)) . " a " . trim(titleCase($nombretu)) . ", respecto de " . trim(titleCase($respectotu)) . ", ejecutoriada" . $hora_tutos . "" . $datetutos . "" . $por_tutos . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopartuto', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdftu', cargor = '$carg', estado = '$est', TipoMargi = 'MTUTO', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdftu ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdftu ?> (Tutoría) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	}
if ($tipotu == 'tutoria' and $tipotuto == 'final' and  $sentenciatu == '' and $ejecutoriatu == '') {
	?>

<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong>Debes de seleccionar por lo menos una de las opciones (Resolución/Ejecutoria)</strong></div>



<?php
}
if ($tipotu == 'tutoria' and $tipotuto == 'inicio' and  $sentenciatu == '' and $ejecutoriatu == '') {
	?>

<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong>Debes de seleccionar por lo menos una de las opciones (Resolución/Ejecutoria)</strong></div>
<?php
	}
if ($tipotu == 'autoridad' and $autoridadtu == 'perdida' and  $sentenciatu == 'ejecututo1' and $ejecutoriatu == 'ejecututo2') {


	if (empty($_POST['edit_idaut'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idaut'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniotu'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numtuto']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librotu']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idaut']);
	// UPDATE data into database
$TxtMargi1 = "Decretase la Pérdida de Autoridad Parental de " . trim(titleCase($padrestu)) . ", respecto de su " . $hijostu . " ". trim(titleCase($hijoauto)) . ", " . $porautodos . ", según sentencia pronunciada" .  $hora_tuto . "" . $datetuto . "" . $por_tuto . "; ejecutoriada" . $hora_tutos . "" . $datetutos . "" . $por_tutos . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopartuto', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdftu', cargor = '$carg', estado = '$est', TipoMargi = 'MAUTO', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdftu ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdftu ?> (Autoridad Parental) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 
if ($tipotu == 'autoridad' and $autoridadtu == 'restablece' and  $sentenciatu == 'ejecututo1' and $ejecutoriatu == 'ejecututo2') {


	if (empty($_POST['edit_idaut'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idaut'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniotu'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numtuto']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librotu']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idaut']);
	// UPDATE data into database
$TxtMargi1 = "Restablézcase la Autoridad Parental a " . trim(titleCase($padrestu)) . ", respecto de su " . $hijostu . " ". trim(titleCase($hijoauto)) . ", " . $porautodos . ", según sentencia pronunciada" .  $hora_tuto . "" . $datetuto . "" . $por_tuto . "; ejecutoriada" . $hora_tutos . "" . $datetutos . "" . $por_tutos . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopartuto', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdftu', cargor = '$carg', estado = '$est', TipoMargi = 'MAUTO', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdftu ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdftu ?> (Autoridad Parental) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 
if ($tipotu == 'autoridad' and $autoridadtu == 'perdida' and  $sentenciatu == 'ejecututo1' and $ejecutoriatu == '') {


	if (empty($_POST['edit_idaut'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idaut'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniotu'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numtuto']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librotu']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idaut']);
	// UPDATE data into database
$TxtMargi1 = "Decretase la Pérdida de Autoridad Parental de " . trim(titleCase($padrestu)) . ", respecto de su " . $hijostu . " ". trim(titleCase($hijoauto)) . ", " . $porautodos . ", según sentencia pronunciada" .  $hora_tuto . "" . $datetuto . "" . $por_tuto . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopartuto', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdftu', cargor = '$carg', estado = '$est', TipoMargi = 'MAUTO', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdftu ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdftu ?> (Autoridad Parental) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 
if ($tipotu == 'autoridad' and $autoridadtu == 'restablece' and  $sentenciatu == 'ejecututo1' and $ejecutoriatu == '') {


	if (empty($_POST['edit_idaut'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idaut'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniotu'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numtuto']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librotu']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idaut']);
	// UPDATE data into database
$TxtMargi1 = "Restablézcase la Autoridad Parental a " . trim(titleCase($padrestu)) . ", respecto de su " . $hijostu . " ". trim(titleCase($hijoauto)) . ", " . $porautodos . ", según sentencia pronunciada" .  $hora_tuto . "" . $datetuto . "" . $por_tuto . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopartuto', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdftu', cargor = '$carg', estado = '$est', TipoMargi = 'MAUTO', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdftu ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdftu ?> (Autoridad Parental) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 
if ($tipotu == 'autoridad' and $autoridadtu == 'perdida' and  $sentenciatu == '' and $ejecutoriatu == 'ejecututo2') {


	if (empty($_POST['edit_idaut'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idaut'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniotu'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numtuto']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librotu']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idaut']);
	// UPDATE data into database
$TxtMargi1 = "Decretase la Pérdida de Autoridad Parental de " . trim(titleCase($padrestu)) . ", respecto de su " . $hijostu . " ". trim(titleCase($hijoauto)) . ", " . $porautodos . ", ejecutoriada" . $hora_tutos . "" . $datetutos . "" . $por_tutos . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopartuto', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdftu', cargor = '$carg', estado = '$est', TipoMargi = 'MAUTO', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdftu ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdftu ?> (Autoridad Parental) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 
if ($tipotu == 'autoridad' and $autoridadtu == 'restablece' and  $sentenciatu == '' and $ejecutoriatu == 'ejecututo2') {


	if (empty($_POST['edit_idaut'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idaut'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniotu'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numtuto']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librotu']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idaut']);
	// UPDATE data into database
$TxtMargi1 = "Restablézcase la Autoridad Parental a " . trim(titleCase($padrestu)) . ", respecto de su " . $hijostu . " ". trim(titleCase($hijoauto)) . ", " . $porautodos . ", ejecutoriada" . $hora_tutos . "" . $datetutos . "" . $por_tutos . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopartuto', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdftu', cargor = '$carg', estado = '$est', TipoMargi = 'MAUTO', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdftu ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdftu ?> (Autoridad Parental) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 
if ($tipotu == 'autoridad' and $autoridadtu == 'perdida' and  $sentenciatu == '' and $ejecutoriatu == '') {

?>
<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong>Debes de seleccionar por lo menos una de las opciones (Resolución/Ejecutoria)</strong></div>
<?php
}
if ($tipotu == 'autoridad' and $autoridadtu == 'restablece' and  $sentenciatu == '' and $ejecutoriatu == '') {

?>
<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong>Debes de seleccionar por lo menos una de las opciones (Resolución/Ejecutoria)</strong></div>
<?php
}

if ($tipotu == 'todas' and $repretu == 'decretase' and  $sentenciatu == 'ejecututo1' and $ejecutoriatu == 'ejecututo2') {


	if (empty($_POST['edit_idaut'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idaut'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniotu'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numtuto']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librotu']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idaut']);
	// UPDATE data into database
$TxtMargi1 = "Decretase que la Guarda, Cuidado Personal y Representación Legal" . $menorr . "" . trim(titleCase($nhijotu)) . ", lo ejercerá " . $tipopadretu . "" . trim(titleCase($npadretu)) . ", según sentencia pronunciada" .  $hora_tuto . "" . $datetuto . "" . $por_tuto . "; ejecutoriada" . $hora_tutos . "" . $datetutos . "" . $por_tutos . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopartuto', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdftu', cargor = '$carg', estado = '$est', TipoMargi = 'MREPRE', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdftu ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdftu ?> (Guarda Cuidado Personal y Representación Legal) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 
if ($tipotu == 'todas' and $repretu == 'confierase' and  $sentenciatu == 'ejecututo1' and $ejecutoriatu == 'ejecututo2') {


	if (empty($_POST['edit_idaut'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idaut'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniotu'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numtuto']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librotu']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idaut']);
	// UPDATE data into database
$TxtMargi1 = "Confiérase que la Guarda, Cuidado Personal y Representación Legal" . $menorr . "" . trim(titleCase($nhijotu)) . ", lo ejercerá " . $tipopadretu . "" . trim(titleCase($npadretu)) . ", según sentencia pronunciada" .  $hora_tuto . "" . $datetuto . "" . $por_tuto . "; ejecutoriada" . $hora_tutos . "" . $datetutos . "" . $por_tutos . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopartuto', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdftu', cargor = '$carg', estado = '$est', TipoMargi = 'MREPRE', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdftu ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdftu ?> (Guarda Cuidado Personal y Representación Legal) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 

if ($tipotu == 'todas' and $repretu == 'decretase' and  $sentenciatu == 'ejecututo1' and $ejecutoriatu == '') {


	if (empty($_POST['edit_idaut'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idaut'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniotu'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numtuto']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librotu']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idaut']);
	// UPDATE data into database
$TxtMargi1 = "Decretase que la Guarda, Cuidado Personal y Representación Legal" . $menorr . "" . trim(titleCase($nhijotu)) . ", lo ejercerá " . $tipopadretu . "" . trim(titleCase($npadretu)) . ", según sentencia pronunciada" .  $hora_tuto . "" . $datetuto . "" . $por_tuto . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopartuto', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdftu', cargor = '$carg', estado = '$est', TipoMargi = 'MREPRE', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdftu ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdftu ?> (Guarda Cuidado Personal y Representación Legal) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 
if ($tipotu == 'todas' and $repretu == 'confierase' and  $sentenciatu == 'ejecututo1' and $ejecutoriatu == '') {


	if (empty($_POST['edit_idaut'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idaut'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniotu'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numtuto']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librotu']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idaut']);
	// UPDATE data into database
$TxtMargi1 = "Confiérase que la Guarda, Cuidado Personal y Representación Legal" . $menorr . "" . trim(titleCase($nhijotu)) . ", lo ejercerá " . $tipopadretu . "" . trim(titleCase($npadretu)) . ", según sentencia pronunciada" .  $hora_tuto . "" . $datetuto . "" . $por_tuto . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopartuto', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdftu', cargor = '$carg', estado = '$est', TipoMargi = 'MREPRE', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdftu ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdftu ?> (Guarda Cuidado Personal y Representación Legal) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 
if ($tipotu == 'todas' and $repretu == 'decretase' and  $sentenciatu == '' and $ejecutoriatu == 'ejecututo2') {


	if (empty($_POST['edit_idaut'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idaut'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniotu'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numtuto']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librotu']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idaut']);
	// UPDATE data into database
$TxtMargi1 = "Decretase que la Guarda, Cuidado Personal y Representación Legal" . $menorr . "" . trim(titleCase($nhijotu)) . ", lo ejercerá " . $tipopadretu . "" . trim(titleCase($npadretu)) . ", ejecutoriada" . $hora_tutos . "" . $datetutos . "" . $por_tutos . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopartuto', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdftu', cargor = '$carg', estado = '$est', TipoMargi = 'MREPRE', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdftu ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdftu ?> (Guarda Cuidado Personal y Representación Legal) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 
if ($tipotu == 'todas' and $repretu == 'confierase' and  $sentenciatu == '' and $ejecutoriatu == 'ejecututo2') {


	if (empty($_POST['edit_idaut'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idaut'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniotu'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numtuto']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librotu']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idaut']);
	// UPDATE data into database
$TxtMargi1 = "Confiérase que la Guarda, Cuidado Personal y Representación Legal" . $menorr . "" . trim(titleCase($nhijotu)) . ", lo ejercerá " . $tipopadretu . "" . trim(titleCase($npadretu)) . ", ejecutoriada" . $hora_tutos . "" . $datetutos . "" . $por_tutos . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopartuto', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdftu', cargor = '$carg', estado = '$est', TipoMargi = 'MREPRE', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdftu ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdftu ?> (Guarda Cuidado Personal y Representación Legal) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 

if ($tipotu == 'todas' and $repretu == 'decretase' and  $sentenciatu == '' and $ejecutoriatu == '') {
?>
<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong>Debes de seleccionar por lo menos una de las opciones (Resolución/Ejecutoria)</strong></div>
<?php
}
if ($tipotu == 'autoridad' and $repretu == 'restablece' and  $sentenciatu == '' and $ejecutoriatu == '') {

?>
<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong>Debes de seleccionar por lo menos una de las opciones (Resolución/Ejecutoria)</strong></div>
<?php
}


?>