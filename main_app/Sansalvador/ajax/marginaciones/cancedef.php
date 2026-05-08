<?php
///////// Canc Nacimiento

$tipoparcandef = ( empty($_POST['tipoparcandef']) )   ? NULL : $_POST['tipoparcandef'];
$tipoparviudez = ( empty($_POST['tipoparviudez']) )   ? NULL : $_POST['tipoparviudez'];
$tipoparcanmat = ( empty($_POST['tipoparcanmat']) )   ? NULL : $_POST['tipoparcanmat'];

$vacio="";


if ($tipocd == 'nacdef') {
	
	

	if (empty($_POST['edit_idcan'])){
		$errors[] = "ID está vacío.6";
	} elseif (!empty($_POST['edit_idcan'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniopart1'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numdef1']),'utf-8'),ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librodef1']),'utf-8'),ENT_QUOTES)));

	$id=intval($_POST['edit_idcan']);

	// UPDATE data into database
			$TxtMargi1 = "Cancélese el presente asiento de nacimiento por la defunción de la persona inscrita, según asiento de defunción" . $pardef . ". Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipoparcandef', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$numparpdfcd', cargor = '$carg', estado = '$est', TipoMargi= 'MCNDEF', revestado = 'revisado1', lugar= '$tipousers' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";


		
		
    $sqlc = "select * from margi where TxtMargi1='' AND  Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $numparpdfcd ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> La marginación <?php echo $numparpdfcd ?> (Cancelación de Nacimiento por Muerte Real) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}

}

///////// Viudez

if ($tipocd == 'viudef') {
	
	

	if (empty($_POST['edit_idcan'])){
		$errors[] = "ID está vacío.6";
	} elseif (!empty($_POST['edit_idcan'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniopart2'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numdef2']),'utf-8'),ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librodef2']),'utf-8'),ENT_QUOTES)));

	$id=intval($_POST['edit_idcan']);

	// UPDATE data into database
			$TxtMargi1 = "Cancélese la marginación de matrimonio, en el sentido que la persona inscrita ha adquirido el estado familiar de viudez, por la defunción ". $sexocdfa.", según asiento de defunción" .  $pardef  . ". Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipoparviudez', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$numparpdfcd', cargor = '$carg', estado = '$est', TipoMargi= 'MVIU', revestado = 'revisado1', lugar= '$tipousers' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";


		
		
    $sqlc = "select * from margi where TxtMargi1='' AND  Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $numparpdfcd ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> La marginación <?php echo $numparpdfcd ?> (Marginación de Viudez) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}

}


///////// Cancelacion de Matrimonio por muerte

if ($tipocd == 'matdef') {
	
	

	if (empty($_POST['edit_idcan'])){
		$errors[] = "ID está vacío.6";
	} elseif (!empty($_POST['edit_idcan'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniopart3'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numdef3']),'utf-8'),ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librodef3']),'utf-8'),ENT_QUOTES)));

	$id=intval($_POST['edit_idcan']);
		
	// UPDATE data into database
			$TxtMargi1 = "Cancélese el presente asiento de matrimonio por la defunción " . $sexocdfa . ", según asiento de defunción" . $pardef  . ". Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		
		
				
	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipoparcanmat', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$numparpdfcd', cargor = '$carg', estado = '$est', TipoMargi= 'MCMDEF', revestado = 'revisado1', lugar= '$tipousers' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";


		
		
    $sqlc = "select * from margi where TxtMargi1='' AND  Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $numparpdfcd ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> La marginación <?php echo $numparpdfcd ?> (Cancelación de Matrimonio por Muerte Real) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}

}


///////// Cancelacion de Nacimiento y Viudez

if ($tipocd == 'nacviu') {
	
	

	if (empty($_POST['edit_idcan'])){
		$errors[] = "ID está vacío.6";
	} elseif (!empty($_POST['edit_idcan'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniopart1'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numdef1']),'utf-8'),ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librodef1']),'utf-8'),ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST['aniopart2'],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numdef2']),'utf-8'),ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librodef2']),'utf-8'),ENT_QUOTES)));	

	$id=intval($_POST['edit_idcan']);
$id2=intval($_POST['edit_idcan']+1);
	// UPDATE data into database
			$TxtMargi1 = "Cancélese el presente asiento de nacimiento por la defunción de la persona inscrita, según asiento de defunción" . $pardef . ". Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipoparcandef', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$numparpdfcd', cargor = '$carg', estado = '$est', TipoMargi= 'MCNDEF', revestado = 'revisado1', lugar= '$tipousers' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";

	$TxtMargi2 = "Cancélese la marginación de matrimonio, en el sentido que la persona inscrita ha adquirido el estado familiar de viudez, por la defunción ". $sexocdfa.", según asiento de defunción" .  $pardef  . ". Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi2) . "', AnioP = '$AnioP2', LibroP = '" . Espacios($LibroP2) . "', NPartida = '" . Espacios($NPartida2) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipoparviudez', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$numparpdfcd2', cargor = '$carg', estado = '$est', TipoMargi= 'MVIU', revestado = 'revisado1', lugar= '$tipousers' WHERE id = '$id2' AND Iniciales1 = '$Iniciales'";
		
		
		
		
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id2'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $numparpdfcd ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> La marginación <?php echo $numparpdfcd ?> (Cancelación de Nacimiento por Muerte Real) esta asignada a otro usuario.</strong></div>
<?php 
	} $sqle = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id2'";
$result = mysqli_query($con, $sqle);

 if(mysqli_num_rows($result)>0)
 { 		
		
		
		
		$query2 = mysqli_query($con,$sql2);
		 // if product has been added successfully
    if ($query2) {
        $messages[] = "La Marginación " . $numparpdfcd2 ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> La marginación <?php echo $numparpdfcd2 ?> (Marginación de Viudez) esta asignada a otro usuario. </strong></div>
<?php 
	} 
		
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}


///////// Cancelacion de Nacimiento y Matrimonio

if ($tipocd == 'nacmat') {
	
	

	if (empty($_POST['edit_idcan'])){
		$errors[] = "ID está vacío.6";
	} elseif (!empty($_POST['edit_idcan'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniopart1'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numdef1']),'utf-8'),ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librodef1']),'utf-8'),ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST['aniopart3'],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numdef3']),'utf-8'),ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librodef3']),'utf-8'),ENT_QUOTES)));	

	$id=intval($_POST['edit_idcan']);
$id2=intval($_POST['edit_idcan']+1);
	// UPDATE data into database
			$TxtMargi1 = "Cancélese el presente asiento de nacimiento por la defunción de la persona inscrita, según asiento de defunción" . $pardef . ". Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipoparcandef', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$numparpdfcd', cargor = '$carg', estado = '$est', TipoMargi= 'MCNDEF', revestado = 'revisado1', lugar= '$tipousers' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";

$TxtMargi2 = "Cancélese el presente asiento de matrimonio por la defunción " . $sexocdfa . ", según asiento de defunción" . $pardef  . ". Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi2) . "', AnioP = '$AnioP2', LibroP = '" . Espacios($LibroP2) . "', NPartida = '" . Espacios($NPartida2) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipoparcanmat', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$numparpdfcd2', cargor = '$carg', estado = '$est', TipoMargi= 'MCMDEF', revestado = 'revisado1', lugar= '$tipousers' WHERE id = '$id2' AND Iniciales1 = '$Iniciales'";
		
		
		
		
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id2'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $numparpdfcd ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> La marginación <?php echo $numparpdfcd ?> (Cancelación de Nacimiento por Muerte Real) esta asignada a otro usuario.</strong></div>
<?php 
	} $sqle = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id2'";
$result = mysqli_query($con, $sqle);

 if(mysqli_num_rows($result)>0)
 { 		
		
		
		
		$query2 = mysqli_query($con,$sql2);
		 // if product has been added successfully
    if ($query2) {
        $messages[] = "La Marginación " . $numparpdfcd2 ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> La marginación <?php echo $numparpdfcd2 ?> (Cancelación de Matrimonio por Muerte Real) esta asignada a otro usuario. </strong></div>
<?php 
	} 
		
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}

///////// Viudez y Cancelacion de matrimonio Matrimonio

if ($tipocd == 'viumat') {
	
	

	if (empty($_POST['edit_idcan'])){
		$errors[] = "ID está vacío.6";
	} elseif (!empty($_POST['edit_idcan'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniopart2'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numdef2']),'utf-8'),ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librodef2']),'utf-8'),ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST['aniopart3'],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numdef3']),'utf-8'),ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librodef3']),'utf-8'),ENT_QUOTES)));	

	$id=intval($_POST['edit_idcan']);
$id2=intval($_POST['edit_idcan']+1);
	// UPDATE data into database
			$TxtMargi1 = "Cancélese la marginación de matrimonio, en el sentido que la persona inscrita ha adquirido el estado familiar de viudez, por la defunción ". $sexocdfa.", según asiento de defunción" .  $pardef  . ". Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipoparviudez', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$numparpdfcd', cargor = '$carg', estado = '$est', TipoMargi= 'MVIU', revestado = 'revisado1', lugar= '$tipousers' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";

$TxtMargi2 = "Cancélese el presente asiento de matrimonio por la defunción " . $sexocdfa . ", según asiento de defunción" . $pardef  . ". Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi2) . "', AnioP = '$AnioP2', LibroP = '" . Espacios($LibroP2) . "', NPartida = '" . Espacios($NPartida2) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipoparcanmat', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$numparpdfcd2', cargor = '$carg', estado = '$est', TipoMargi= 'MCMDEF', revestado = 'revisado1', lugar= '$tipousers' WHERE id = '$id2' AND Iniciales1 = '$Iniciales'";
		
		
		
		
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id2'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $numparpdfcd ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> La marginación <?php echo $numparpdfcd ?> (Marginación de Viudez) esta asignada a otro usuario.</strong></div>
<?php 
	} $sqle = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id2'";
$result = mysqli_query($con, $sqle);

 if(mysqli_num_rows($result)>0)
 { 		
		
		
		
		$query2 = mysqli_query($con,$sql2);
		 // if product has been added successfully
    if ($query2) {
        $messages[] = "La Marginación " . $numparpdfcd2 ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> La marginación <?php echo $numparpdfcd2 ?> (Cancelación de Matrimonio por Muerte Real) esta asignada a otro usuario. </strong></div>
<?php 
	} 
		
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}

///////// Cancelacion de Nacimiento, Matrimonio y Viudez

if ($tipocd == 'nacviumat') {
	
	

	if (empty($_POST['edit_idcan'])){
		$errors[] = "ID está vacío.6";
	} elseif (!empty($_POST['edit_idcan'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniopart1'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numdef1']),'utf-8'),ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librodef1']),'utf-8'),ENT_QUOTES)));
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST['aniopart2'],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numdef2']),'utf-8'),ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librodef2']),'utf-8'),ENT_QUOTES)));
		
	$AnioP3 = mysqli_real_escape_string($con,(strip_tags($_POST['aniopart3'],ENT_QUOTES)));
	$NPartida3 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numdef3']),'utf-8'),ENT_QUOTES)));
	$LibroP3 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librodef3']),'utf-8'),ENT_QUOTES)));

	$id=intval($_POST['edit_idcan']);
$id2=intval($_POST['edit_idcan']+1);
		$id3=intval($_POST['edit_idcan']+2);
	// UPDATE data into database
			$TxtMargi1 = "Cancélese el presente asiento de nacimiento por la defunción de la persona inscrita, según asiento de defunción" . $pardef . ". Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipoparcandef', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$numparpdfcd', cargor = '$carg', estado = '$est', TipoMargi= 'MCNDEF', revestado = 'revisado1', lugar= '$tipousers' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";

	$TxtMargi2 = "Cancélese la marginación de matrimonio, en el sentido que la persona inscrita ha adquirido el estado familiar de viudez, por la defunción ". $sexocdfa.", según asiento de defunción" .  $pardef  . ". Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi2) . "', AnioP = '$AnioP2', LibroP = '" . Espacios($LibroP2) . "', NPartida = '" . Espacios($NPartida2) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipoparviudez', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$numparpdfcd2', cargor = '$carg', estado = '$est', TipoMargi= 'MVIU', revestado = 'revisado1', lugar= '$tipousers' WHERE id = '$id2' AND Iniciales1 = '$Iniciales'";
		
$TxtMargi3 = "Cancélese el presente asiento de matrimonio por la defunción " . $sexocdfa . ", según asiento de defunción" . $pardef  . ". Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		
		
		
	$sql3 = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi3) . "', AnioP = '$AnioP3', LibroP = '" . Espacios($LibroP3) . "', NPartida = '" . Espacios($NPartida3) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipoparcanmat', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$numparpdfcd3', cargor = '$carg', estado = '$est', TipoMargi= 'MCMDEF', revestado = 'revisado1', lugar= '$tipousers' WHERE id = '$id3' AND Iniciales1 = '$Iniciales'";	
		
		
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id2'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $numparpdfcd ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> La marginación <?php echo $numparpdfcd ?> (Cancelación de Nacimiento por Muerte Real) esta asignada a otro usuario.</strong></div>
<?php 
	} $sqle = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id2'";
$result = mysqli_query($con, $sqle);

 if(mysqli_num_rows($result)>0)
 { 		
		
		
		
		$query2 = mysqli_query($con,$sql2);
		 // if product has been added successfully
    if ($query2) {
        $messages[] = "La Marginación " . $numparpdfcd2 ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> La marginación <?php echo $numparpdfcd2 ?> (Marginación de Viudez) esta asignada a otro usuario. </strong></div>
<?php 
	}$sqli = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id3'";
$result = mysqli_query($con, $sqli);

 if(mysqli_num_rows($result)>0)
 { 		
		
		
		
		$query3 = mysqli_query($con,$sql3);
		 // if product has been added successfully
    if ($query3) {
        $messages[] = "La Marginación " . $numparpdfcd3 ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> La marginación <?php echo $numparpdfcd3 ?> (Cancelación de Matrimonio por Muerte Real.) esta asignada a otro usuario. </strong></div>
<?php 
	}
		
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	}

?>