<?php
$tipoparidenac = ( empty($_POST['tipoparidenac']) )   ? NULL : $_POST['tipoparidenac'];
$tipoparidedef = ( empty($_POST['tipoparidedef']) )   ? NULL : $_POST['tipoparidedef'];




if ($tipoide == 'idenac' ) {


	if (empty($_POST['edit_ididen'])){
		$errors[] = "ID está vacío.1iiiiiiiiiiiiiiiiiii";
	} elseif (!empty($_POST['edit_ididen'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniopart1ide'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numdef1ide']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librodef1ide']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_ididen']);
	// UPDATE data into database
$TxtMargi1 = trim(titleCase($niden)) . "" . $sexoid . " " . trim(titleCase($conide)) . "; según Escritura Pública de Identidad" . $dateid . ", ante " . trim($nombreiden) . ", " . trim($cargoid) . " en " . trim($lugarid) . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipoparidenac', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdfiden', cargor = '$carg', estado = '$est', TipoMargi= 'MIDEN', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdfiden ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdfiden ?> (Identidad Nac.) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 

if ($tipoide == 'idedef' ) {


	if (empty($_POST['edit_ididen'])){
		$errors[] = "ID está vacío.1oooooooooooooooo";
	} elseif (!empty($_POST['edit_ididen'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniopart2ide'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numdef2ide']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librodef2ide']),'utf-8'),ENT_QUOTES)));
	
	
 
	
	$id=intval($_POST['edit_ididen']);
	// UPDATE data into database
$TxtMargi1 = trim(titleCase($niden2)) . "" . $sexoid2 . " " . trim(titleCase($conide2)) . "; según Escritura Pública de Identidad" . $dateid . ", ante " . trim($nombreiden) . ", " . trim($cargoid) . " en " . trim($lugarid) . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipoparidedef', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdfiden', cargor = '$carg', estado = '$est', TipoMargi= 'MIDEF', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdfiden ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdfiden ?> (Identidad Def.) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 


if ($tipoide == 'idenacdef' ) {


	if (empty($_POST['edit_ididen'])){
		$errors[] = "ID está vacío.1pppppppppppppp";
	} elseif (!empty($_POST['edit_ididen'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniopart1ide'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numdef1ide']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librodef1ide']),'utf-8'),ENT_QUOTES)));
   $AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST['aniopart2ide'],ENT_QUOTES)));
	
	$NPartida2 = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numdef2ide']),'utf-8'),ENT_QUOTES))));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librodef2ide']),'utf-8'),ENT_QUOTES)));
	
	
	
	$id=intval($_POST['edit_ididen']);
	$id2=intval($_POST['edit_ididen']+1);
	// UPDATE data into database
$TxtMargi1 = trim(titleCase($niden)) . "" . $sexoid . " " .  trim(titleCase($conide)) . "; según Escritura Pública de Identidad" . $dateid . ", ante " . trim($nombreiden) . ", " . trim($cargoid) . " en " . trim($lugarid) . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipoparidenac', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdfiden', cargor = '$carg', estado = '$est', TipoMargi= 'MIDEN', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
	

$TxtMargi2 = trim(titleCase($niden)) . "" . $sexoid2 . " " .  trim(titleCase($conide)) . "; según Escritura Pública de Identidad" . $dateid . ", ante " . trim($nombreiden) . ", " . trim($cargoid) . " en " . trim($lugarid) . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

$sql2 = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi2) . "', AnioP = '$AnioP2', LibroP = '" . Espacios($LibroP2) . "', NPartida = '" . Espacios($NPartida2) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipoparidedef', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdfiden2', cargor = '$carg', estado = '$est', TipoMargi= 'MIDEF', revestado = 'revisado1' WHERE id = '$id2' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdfiden ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdfiden ?> (Identidad Nac.) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
	$sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id2'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
		
		
		
		$query2 = mysqli_query($con,$sql2);
		 // if product has been added successfully
    if ($query2) {
        $messages[] = "La Marginación " . $margpdfiden2 ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdfiden2  ?> (Identidad Def.) esta asignada a otro usuario. </strong></div>
<?php 
	}	
		
		
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}

}





?>