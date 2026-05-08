<?php


$unioncono = ( empty($_POST['unioncono']) )   ? NULL : $_POST['unioncono'];
$unioncono2 = ( empty($_POST['unioncono2']) )   ? NULL : $_POST['unioncono2'];

$unionconocido = ( empty($_POST['edit_elreg2']) )   ? NULL : $_POST['edit_elreg2'];
$unionconocido2 = ( empty($_POST['edit_elreg3']) )   ? NULL : $_POST['edit_elreg3'];


if ($unioncono === "unioncono" and $unionconocido != "") {

	$unioncono = " conocido por " . trim(titleCase($unionconocido));
	
 } else {
	$unioncono = "";
	
	 } 

	
if ($unioncono2 === "unioncono2" and $unionconocido2 != "") {

	$unioncono2 = " conocida por " . trim(titleCase($unionconocido2));
	
 } else {
	$unioncono2 = "";
	
	 } 






 $divnombre = trim(strtoupper($nregella)); 
  



$subd = substr($divnombre, 0, 2);


if( $subd == "YB" or $subd ==  "YC" or $subd ==  "YD" or $subd ==  "YF" or $subd ==  "YG" or $subd ==  "YH" or $subd ==  "YJ" or $subd ==  "YK" or $subd ==  "YL" or $subd ==  "YM" or $subd ==  "YN" or $subd ==  "YÑ" or $subd ==  "YP" or $subd ==  "YQ" or $subd ==  "YR" or $subd ==  "YS" or $subd ==  "YT" or $subd ==  "YV" or $subd ==  "YW" or $subd ==  "YX" or $subd ==  "YY" or $subd ==  "YZ" or $subd ==  "IB" or $subd ==  "IC" or $subd ==  "ID" or $subd ==  "IF" or $subd ==  "IG" or $subd ==  "IH" or $subd ==  "IJ" or $subd ==  "IK" or $subd ==  "IL" or $subd ==  "IM" or $subd ==  "IN" or $subd ==  "IÑ" or $subd ==  "IP" or $subd ==  "IQ" or $subd ==  "IR" or $subd ==  "IS" or $subd ==  "IT" or $subd ==  "IV" or $subd ==  "IW" or $subd ==  "IX" or $subd ==  "IY" or $subd ==  "IZ" or $subd ==  "IA" or $subd ==  "IE" or $subd ==  "II" or $subd ==  "IO" or $subd ==  "IU" or $subd ==  "IÁ" or $subd ==  "IÉ" or $subd ==  "IÍ" or $subd ==  "IÓ" or $subd ==  "IÚ" or $subd ==  "ÍB" or $subd ==  "ÍC" or $subd ==  "ÍD" or $subd ==  "ÍF" or $subd ==  "ÍG" or $subd ==  "ÍH" or $subd ==  "ÍJ" or $subd ==  "ÍK" or $subd ==  "ÍL" or $subd ==  "ÍM" or $subd ==  "ÍN" or $subd ==  "ÍÑ" or $subd ==  "ÍP" or $subd ==  "ÍQ" or $subd ==  "ÍR" or $subd ==  "ÍS" or $subd ==  "ÍT" or $subd ==  "ÍV" or $subd ==  "ÍW" or $subd ==  "ÍX" or $subd ==  "ÍY" or $subd ==  "ÍZ" or $subd ==  "ÍA" or $subd ==  "ÍE" or $subd ==  "ÍI" or $subd ==  "ÍO" or $subd ==  "ÍU" or $subd ==  "ÍÁ" or $subd ==  "ÍÉ" or $subd ==  "ÍÍ" or $subd ==  "ÍÓ" or $subd ==  "ÍÚ" or $subd ==  "HI" or $subd ==  "HÍ" or $subd ==  "HY")  {
   $antecederegdos = " e ";
}else{

$antecederegdos = " y ";

}







$tipoparreg = ( empty($_POST['tipoparreg']) )   ? NULL : $_POST['tipoparreg'];



if ($tiporeg == 'uni' and $tipoju == 'ejecutoriajuzreg1' and $tipoju2 == 'ejecutoriajuzreg2') {


	if (empty($_POST['edit_idreg'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idreg'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioreg1'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartidareg1']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libroreg1']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idreg']);
	// UPDATE data into database
$TxtMargi1 = "Declárase la Unión no Matrimonial de " . trim(titleCase($nregel)) . $unioncono . $antecederegdos . trim(titleCase($nregella)) . $unioncono2 . ", según sentencia pronunciada" .  $hora_reg . "" . $datereg . "" . $por_reg . ", ejecutoriada" . $hora_regu . "" . $dateregu . "" . $por_regu . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipoparreg', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$regpdf', cargor = '$carg', estado = '$est', TipoMargi = 'MUMAT', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $regpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $regpdf ?> (Unión no Matrimonial) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 

if ($tiporeg == 'uni' and $tipoju == 'ejecutoriajuzreg1' and $tipoju2 == '') {


	if (empty($_POST['edit_idreg'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idreg'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioreg1'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartidareg1']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libroreg1']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idreg']);
	// UPDATE data into database
$TxtMargi1 = "Declárase la Unión no Matrimonial de " . trim(titleCase($nregel)) . $unioncono . $antecederegdos . trim(titleCase($nregella)) . $unioncono2 . ", según sentencia pronunciada" .  $hora_reg . "" . $datereg . "" . $por_reg . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipoparreg', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$regpdf', cargor = '$carg', estado = '$est', TipoMargi = 'MUMAT', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $regpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $regpdf ?> (Unión no Matrimonial) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
} 
if ($tiporeg == 'uni' and $tipoju == '' and $tipoju2 == 'ejecutoriajuzreg2') {


	if (empty($_POST['edit_idreg'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idreg'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioreg1'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartidareg1']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libroreg1']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idreg']);
	// UPDATE data into database
$TxtMargi1 = "Declárase la Unión no Matrimonial de " . trim(titleCase($nregel)) . $unioncono . $antecederegdos . trim(titleCase($nregella)) . $unioncono2 . ", ejecutoriada" . $hora_regu . "" . $dateregu . "" . $por_regu . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipoparreg', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$regpdf', cargor = '$carg', estado = '$est', TipoMargi = 'MUMAT', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $regpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $regpdf ?> (Unión no Matrimonial) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	} 
if ($tiporeg == 'uni' and $tipoju == '' and $tipoju2 == '') {

?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong>Debes de seleccionar por lo menos una de las opciones (Resolución/Ejecutoria)</strong></div>
<?php 
	} 

if ($tiporeg == 'creg') {


	if (empty($_POST['edit_idreg'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idreg'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioreg1'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartidareg1']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libroreg1']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idreg']);
	// UPDATE data into database
$TxtMargi1 = "Constituyese el Régimen Patrimonial de " . trim($nuevoreg) . ", en el presente asiento, de conformidad a Escritura Pública otorgada ante " . trim(titleCase($nfunreg)) . ", " . trim($cargoreg) . ", en " .  trim($lugarreg) . "" . $dateregc . ", Régimen Patrimonial que optan en esta fecha los contrayentes " . trim(titleCase($nregel)) . $unioncono . $antecederegdos .  trim(titleCase($nregella)) . $unioncono2 . ", según Artículo ochenta y cuatro del Código de Familia. Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$regpdf', cargor = '$carg', estado = '$est', TipoMargi = 'MCREG', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $regpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $regpdf ?> (Constitución de Régimen) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
}

if ($tiporeg == 'sreg') {


	if (empty($_POST['edit_idreg'])){
		$errors[] = "ID está vacío.1";
	} elseif (!empty($_POST['edit_idreg'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioreg1'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartidareg1']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libroreg1']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['edit_idreg']);
	// UPDATE data into database
$TxtMargi1 = "Sustituyese el Régimen Patrimonial en el presente asiento por el cual habían optado los contrayentes " . trim(titleCase($nregel)) . $unioncono . $antecederegdos . trim(titleCase($nregella)) . $unioncono2 . "" . $daterego . ", por el Régimen patrimonial de: " . trim($nuevoreg) . ", de conformidad a Escritura Pública de Capitulaciones Matrimoniales referente a Sustitución del Régimen Patrimonial, otorgada por " . trim(titleCase($nfunreg)) . ", " . trim($cargoreg) . ", en " .  trim($lugarreg) . "" . $dateregc . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$matrimoniop', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$regpdf', cargor = '$carg', estado = '$est', TipoMargi = 'MSREG', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
		
		

	
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $regpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación <?php echo $regpdf ?> (Sustitución de Régimen) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}
}
?>