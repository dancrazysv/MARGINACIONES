<?php

$tipoparadenac = ( empty($_POST['tipoparadenac']) )   ? NULL : $_POST['tipoparadenac'];


if ($tipoad == 'adec' ) {


	if (empty($_POST['edit_idadec'])){
		$errors[] = "ID está vacío.1wqwqwqwqwq";
	} elseif (!empty($_POST['edit_idadec'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniopartad1'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numdefad1']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librodefad1']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idadec']);
	// UPDATE data into database
$TxtMargi1 = "Adecuase la presente partida de nacimiento de " . trim(titleCase($nadec))  . " en el sentido que" . $tipopadres . "" . $sexoad . "adecua su nombre al de: " . trim(titleCase($padres_adec)) . ", por consiguiente" . $sexoad2 . "usará los apellidos " . trim(titleCase($apelliadec)) . ", según Escritura Pública de Adecuación del Nombre" . $datead . ", ante ". trim(titleCase($nfuncioadec)) . ", ". trim($cargoadec) . " en ". trim($lugaradec) .". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipoparadenac', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdfadec', cargor = '$carg', estado = '$est', TipoMargi = 'MADEC', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
	$sqlc = "select * from margi where TxtMargi1='' AND  Iniciales1='$Iniciales' AND id='$id'";

$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdfadec ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdfadec ?> (Adecuación Nac.) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 


if ($tipoad == 'adecextesc' ) {


	if (empty($_POST['edit_idadec'])){
		$errors[] = "ID está vacío.1qqqqqqqqqqqqq";
	} elseif (!empty($_POST['edit_idadec'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniopartad1'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numdefad1']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librodefad1']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idadec']);
	// UPDATE data into database
$TxtMargi1 = "Adecuase la presente partida de nacimiento de " . trim(titleCase($nadec))  . " en el sentido que" . $tipopadres . "" . $sexoad . "adecua su nombre al de: " . trim(titleCase($padres_adec)) . ", por consiguiente" . $sexoad2 . "usará los apellidos " . trim(titleCase($apelliadec)) . ", sobre la base del Artículo veinticinco de la Ley del Nombre de la Persona Natural, según Escritura Pública de Adecuación del Nombre" . $datead . ", ante ". trim(titleCase($nfuncioadec)) . ", ". trim($cargoadec) . " en ". trim($lugaradec) .". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipoparadenac', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdfadec', cargor = '$carg', estado = '$est', TipoMargi = 'MADEC', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND  Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdfadec ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdfadec ?> (Adecuación Nac. por Exten. Partida) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 


//////////////// adecuacion matrimonio


if ($tipoad == 'adecmatri' ) {


	if (empty($_POST['edit_idadec'])){
		$errors[] = "ID está vacío.1qqqqqqqqqqqqq";
	} elseif (!empty($_POST['edit_idadec'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniopartad1mat'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numdefad1mat']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librodefad1mat']),'utf-8'),ENT_QUOTES)));
	$apeademat = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['apeadecmatri']),'utf-8'),ENT_QUOTES)));
	$tipoparademat = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['tipoparadenacmat']),'utf-8'),ENT_QUOTES)));
	
	
 
	
	$id=intval($_POST['edit_idadec']);
	// UPDATE data into database
$TxtMargi1 = "Adecuase la presente partida de Matrimonio en el sentido que la contrayente usará los apellidos de casada " . trim(titleCase($apeademat)) . ", según Escritura Pública de Adecuación del Nombre " . $datead . ", ante ". trim(titleCase($nfuncioadec)) . ", ". trim($cargoadec) . " en ". trim($lugaradec) .". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipoparademat', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdfadec', cargor = '$carg', estado = '$est', TipoMargi = 'MADECMAT', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND  Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdfadec ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdfadec ?> (Adecuación Matrimonio) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 





////////////////////////// adecuacion partida
if ($tipoad == 'adecextpart' ) {


	if (empty($_POST['edit_idadec'])){
		$errors[] = "ID está vacío.1wwwwwwwwwww";
	} elseif (!empty($_POST['edit_idadec'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniopartad1'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numdefad1']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librodefad1']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idadec']);
	// UPDATE data into database
$TxtMargi1 = "Adecuase la presente partida de nacimiento de " . trim(titleCase($nadec))  . " en el sentido que" . $tipopadres . "" . $sexoad . "adecua su nombre al de: " . trim(titleCase($padres_adec)) . ", por consiguiente" . $sexoad2 . "usará los apellidos " . trim(titleCase($apelliadec)) . ", sobre la base del  Artículo veinticinco de la Ley del Nombre de la Persona Natural, según  partida de nacimiento" . $pardefad . ". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipoparadenac', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdfadec', cargor = '$carg', estado = '$est', TipoMargi = 'MADEC', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND  Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdfadec ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdfadec ?> (Adecuación Nac. por Exten. Escritura) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 




///////// adecuacion padres matri


if ($tipoad == 'adecmatripadres' ) {


	if (empty($_POST['edit_idadec'])){
		$errors[] = "ID está vacío.1wqwqwqwqwq";
	} elseif (!empty($_POST['edit_idadec'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
 $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniopartad1mat'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numdefad1mat']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librodefad1mat']),'utf-8'),ENT_QUOTES)));

	$tipoparademat = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['tipoparadenacmat']),'utf-8'),ENT_QUOTES)));
	
	
	
 
	
	$id=intval($_POST['edit_idadec']);
	// UPDATE data into database


if ($sexoad2mat == "male"){

$TxtMargi1 = "Adecuase la presente partida de matrimonio, en el sentido que " .$tipopadres."del contrayente adecua su nombre al de ".trim(titleCase($padres_adec)).", por consiguiente el nombre del contrayente a ".trim(titleCase($nadec))  . ", y la contrayente usará los apellidos de casada " .  trim(titleCase($apelliadec)) . ", según Escritura Pública de Adecuación del Nombre" . $datead . ", ante ". trim(titleCase($nfuncioadec)) . ", ". trim($cargoadec) . " en ". trim($lugaradec) .". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";



	}
	
	else {
		
$TxtMargi1 = "Adecuase la presente partida de matrimonio, en el sentido que " .$tipopadres."de la contrayente adecua su nombre al de ".trim(titleCase($padres_adec)).", por consiguiente el nombre de la contrayente a ".trim(titleCase($nadec))  . ", usará los apellidos de casada " .  trim(titleCase($apelliadec)) . ", según Escritura Pública de Adecuación del Nombre" . $datead . ", ante ". trim(titleCase($nfuncioadec)) . ", ". trim($cargoadec) . " en ". trim($lugaradec) .". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";

	}






	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipoparademat', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdfadec', cargor = '$carg', estado = '$est', TipoMargi = 'MADECMAT', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
	$sqlc = "select * from margi where TxtMargi1='' AND  Iniciales1='$Iniciales' AND id='$id'";

$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdfadec ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdfadec ?> (Adecuación Nac.) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 























?>