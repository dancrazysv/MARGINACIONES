<?php

$tipoprnac = ( empty($_POST['perdinac']) )   ? NULL : $_POST['perdinac'];
$prnacnombre = ( empty($_POST['nombreprnac']) )   ? NULL : $_POST['nombreprnac'];

$chkprnac = ( empty($_POST['perdinac']) )   ? NULL : $_POST['perdinac'];

$tipoparprnac = ( empty($_POST['tipoparprnac']) )   ? NULL : $_POST['tipoparprnac'];


$sexoprnac = ( empty($_POST['sexo1prnac']) )   ? NULL : $_POST['sexo1prnac'];
$nombreconoprnac = ( empty($_POST['conotxtprnac']) )   ? NULL : $_POST['conotxtprnac'];



if ($sexoprnac == "masculino" and $nombreconoprnac !=""){
	$sexoidprnac = " conocido por ". trim(titleCase($nombreconoprnac));

	} else if ($sexoprnac == "masculino" and $nombreconoprnac ==""){
	$sexoidprnac = "";

	}






	
 if ($sexoprnac == "femenino" and $nombreconoprnac !=""){
		$sexoidprnac = " conocida por ". trim(titleCase($nombreconoprnac));
	} else if ($sexoprnac == "femenino" and $nombreconoprnac ==""){
	$sexoidprnac = "";

	}






if ($chkprnac == 'perdida') {


	if (empty($_POST['edit_idprnac'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idprnac'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['anioprnac'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numprnac']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['libroprnac']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idprnac']);
	// UPDATE data into database
$TxtMargi1 = "Marginase la presente Partida de Nacimiento de " . trim(titleCase($prnacnombre)) . $sexoidprnac ." y téngase por renunciada a la Nacionalidad por Nacimiento, según resolución emitida" .  $hora_prnac . "" . $dateprnac . "" . $por_prnac . ", emitida por la Dirección General de Migración y Extranjería del Ministerio de Justicia y Seguridad Pública, de conformidad a los artículos noventa y uno de la Constitución de La República de El Salvador, ciento cincuenta y siete y doscientos setenta y siete de la Ley Especial de Migración y Extranjería.". " Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipoparprnac', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$numpdfprnac', cargor = '$carg', estado = '$est', TipoMargi = 'MPNAC', revestado = 'revisado1', lugar= '$tipousers' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $numpdfprnac ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $numpdfprnac ?> (Pérdida de Nacionalidad) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 

if ($chkprnac == 'recuperacion') {


	if (empty($_POST['edit_idprnac'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idprnac'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
     $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['anioprnac'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numprnac']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['libroprnac']),'utf-8'),ENT_QUOTES)));

	
	
	
	
 
	
	$id=intval($_POST['edit_idprnac']);
	// UPDATE data into database

$TxtMargi1 = "Cancelase la marginación de renuncia de Nacionalidad por Nacimiento de " . trim(titleCase($prnacnombre)) . $sexoidprnac ." y téngase por recuperada su calidad de salvadoreño por Nacimiento, según resolución emitida" .  $hora_prnac . "" . $dateprnac . "" . $por_prnac . ", emitida por la Dirección General de Migración y Extranjería del Ministerio de Justicia y Seguridad Pública, de conformidad a los artículos noventa y uno de la Constitución de La República de El Salvador, doscientos setenta y ocho de la Ley Especial de Migración y Extranjería.". " Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipoparprnac', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$numpdfprnac', cargor = '$carg', estado = '$est', TipoMargi = 'MRNAC', revestado = 'revisado1', lugar= '$tipousers' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $numpdfprnac ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $numpdfprnac ?> (Recuperación de Nacionalidad) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
} 
?>