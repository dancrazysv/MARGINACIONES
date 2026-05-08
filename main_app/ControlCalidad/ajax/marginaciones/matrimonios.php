<?php




//////////////////////////////////Matrimonio conocido social

$txtconoel = ( empty($_POST['conotxt']) ) ? NULL : $_POST['conotxt'];
$txtconoella = ( empty($_POST['conotxt2']) ) ? NULL : $_POST['conotxt2'];

if ($txtconoel == ""){
	$conocidoel = "";
	$conocido = "";
		}
	
	else {
		$conocidoel = " conocido por " . trim(titleCase($txtconoel)) . "";
		$conocido = " conocido por " . trim(titleCase($txtconoel)) . ",";
	}

if ($txtconoella == ""){
	$conocidoella = "";
	$conocida = "";
		}
	
	else {
		$conocidoella = " conocida por " . trim(titleCase($txtconoella)) . "";
		$conocida = " conocida por " . trim(titleCase($txtconoella)) . ",";
	}




$apellidosel = ( empty($_POST['apellidoel']) ) ? NULL : $_POST['apellidoel'];

if ($apellidosel == ""){
	$apellido2 = "";
		}
	
	else {
		$apellidoconl = "nombre " . $apellidosel;
		$apellidosconl = trim(titleCase($apellidoconl));
		
		$result1 = substr($apellidosconl,6);
			
		$apellido2 = " " . trim($result1);
		
	}

$apellidosella = ( empty($_POST['apellidoella']) ) ? NULL : $_POST['apellidoella'];
if ($apellidosella == ""){
	$apellidoella2 = "";
		}
	
	else {
		$apellidoconl2 = "nombre " . $apellidosella;
		$apellidosconl2 = trim(titleCase($apellidoconl2));
		
		$result2 = substr($apellidosconl2,6);
		
		
		$apellidoella2 = " " . trim($result2);
		
	}



$ape1 = ( empty($_POST['apellidoel1']) ) ? NULL : $_POST['apellidoel1'];

$conv1 = titleCase("nombre " . $ape1);
$convape = trim(titleCase($conv1));
$conv2 = substr($conv1,6);
$conv3 = trim($conv2);


$ape2 = ( empty($_POST['apellidoella1']) ) ? NULL : $_POST['apellidoella1'];

$conv4 = titleCase("nombre " . $ape2);
$convape2 = trim(titleCase($conv4));
$conv5 = substr($conv4,6);
$conv6 = trim($conv5);





if ($value_el == 'male' and $regimenv == 'Rvalue' and $apellidosv == 'Avalue' ) {


    if (empty($_POST['edit_id'])){
        
    } elseif (!empty($_POST['edit_id'])){
    require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
    // escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe3'],ENT_QUOTES)));
    $Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
    $NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida3']),'utf-8'),ENT_QUOTES))));
    $LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro3']),'utf-8'),ENT_QUOTES)));
    
    
    
    
 
    
    $id=intval($_POST['edit_id']);
    // UPDATE data into database
$TxtMargi1 = trim(titleCase($_POST['edit_el2'])) . " " .  "" . $conv2 . "" . $apellido2 . "" . $conocido . " contrajo matrimonio con " . trim(titleCase($_POST['Nellamat'])) . " " .  "" . $conv6 . "" . $apellidoella2 . "" .$conocidoella . ", el día " . $dia_B . "" . $mes_B . "" . $anio_B . $opcionnotario . $casootro . "" . trim($_POST['LugarB'],'utf-8') . "; los contrayentes optan por el Régimen Patrimonial " . trim(titleCase($uregimen)) . "; la contrayente usará los apellidos ". trim($uapellidos) .". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        

    $sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
        
        

    
        
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
    <div class="alert alert-danger" role="alert" >
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Matrimonio El) esta asignada a otro usuario.</strong></div>
<?php 
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
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe2'],ENT_QUOTES)));
    $Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
    $NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida2']),'utf-8'),ENT_QUOTES)));
    $LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro2']),'utf-8'),ENT_QUOTES)));
        
                
 
    
    $id=intval($_POST['edit_id']);
    // UPDATE data into database
            $TxtMargi1 = trim(titleCase($_POST['Nellamat'])) . " " .  "" . $conv6 . "" . $apellidoella2 . "" . $conocida . " contrajo matrimonio con " . trim(titleCase($_POST['edit_el2'])) . " " .  "" . $conv2 . "" . $apellido2 . "". $conocidoel . ", el día " .  $dia_B . "" . $mes_B . "" . $anio_B . $opcionnotario . $casootro . "" . trim($_POST['LugarB'],'utf-8') . "; los contrayentes optan por el Régimen Patrimonial " . trim(titleCase($uregimen)) . "; la contrayente usará los apellidos ". trim($uapellidos) .". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        
        
        
    $sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart2', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
        
        
   $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
    
        
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " .$margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Matrimonio Ella) esta asignada a otro usuario.</strong></div>
<?php 
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
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe3'],ENT_QUOTES)));
    $Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
    $NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida3']),'utf-8'),ENT_QUOTES)));
    $LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro3']),'utf-8'),ENT_QUOTES)));
        
        $AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe2'],ENT_QUOTES)));
    $NPartida2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida2']),'utf-8'),ENT_QUOTES)));
    $LibroP2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro2']),'utf-8'),ENT_QUOTES)));
    
 
    
    $id=intval($_POST['edit_id']);
    $id2 = $_POST['edit_id']+1;
    // UPDATE data into database
            $TxtMargi1 = trim(titleCase($_POST['edit_el2'])) . " " .  "" . $conv2 . "" . $apellido2 . "" . $conocido . " contrajo matrimonio con " . trim(titleCase($_POST['Nellamat'])) . " " .  "" . $conv6 . "" . $apellidoella2 . "". $conocidoella . ", el día " .  $dia_B . "" . $mes_B . "" . $anio_B . $opcionnotario . $casootro . "" . trim($_POST['LugarB'],'utf-8') . "; los contrayentes optan por el Régimen Patrimonial " . trim(titleCase($uregimen)) . "; la contrayente usará los apellidos ". trim($uapellidos) .". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        
        
        
    $sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
        
        $TxtMargi2 = trim(titleCase($_POST['Nellamat'])) . " " .  "" . $conv6 . "" . $apellidoella2 . "". $conocida ." contrajo matrimonio con " .  trim(titleCase($_POST['edit_el2'])) . " " .  "" . $conv2 . "" . $apellido2 . "". $conocidoel . ", el día " .  $dia_B . "" . $mes_B . "" . $anio_B . $opcionnotario . $casootro . "" . trim($_POST['LugarB'],'utf-8') . "; los contrayentes optan por el Régimen Patrimonial " . trim(titleCase($uregimen)) . "; la contrayente usará los apellidos ". trim($uapellidos) .". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        
        
        
    $sql2 = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi2) . "', AnioP = '$AnioP2', LibroP = '" . Espacios($LibroP2) . "', NPartida = '" . Espacios($NPartida2) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart2', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf2', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1' WHERE id = '$id2' AND Iniciales1 = '$Iniciales'";
        
        
        
        
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
    
        
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " .$margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Matrimonio El) esta asignada a otro usuario.</strong></div>
<?php 
    } 
            
 $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id2'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
        
        
        
        $query2 = mysqli_query($con,$sql2);
         // if product has been added successfully
    if ($query2) {
        $messages[] = "La Marginación " . $margpdf2 ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf2  ?> (Matrimonio Ella) esta asignada a otro usuario. </strong></div>
<?php 
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
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe3'],ENT_QUOTES)));
    $Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
    $NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida3']),'utf-8'),ENT_QUOTES)));
    $LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro3']),'utf-8'),ENT_QUOTES)));
        
                
 
    
    $id=intval($_POST['edit_id']);
    // UPDATE data into database
            $TxtMargi1 = trim(titleCase($_POST['edit_el2'])) . " " .  "" . $conv2 . "" . $apellido2 . "". $conocido . " contrajo matrimonio con " . trim(titleCase($_POST['Nellamat'])) . " " .  "" . $conv6 . "" . $apellidoella2 . "". $conocidoella . ", el día " .  $dia_B . "" . $mes_B . "" . $anio_B . $opcionnotario . $casootro . "" . trim($_POST['LugarB'],'utf-8') . "; los contrayentes optan por el Régimen Patrimonial " . trim(titleCase($uregimen)) . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        
        
        
    $sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
        
        
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
    
        
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " .$margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Matrimonio El) esta asignada a otro usuario.</strong></div>
<?php 
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
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe2'],ENT_QUOTES)));
    $Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
    $NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida2']),'utf-8'),ENT_QUOTES)));
    $LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro2']),'utf-8'),ENT_QUOTES)));
        
                
 
    
    $id=intval($_POST['edit_id']);
    // UPDATE data into database
            $TxtMargi1 = trim(titleCase($_POST['Nellamat'])) . " " .  "" . $conv6 . "" . $apellidoella2 . "". $conocida . " contrajo matrimonio con " . trim(titleCase($_POST['edit_el2'])) . " " .  "" . $conv2 . "" . $apellido2 . "". $conocidoel . ", el día " .  $dia_B . "" . $mes_B . "" . $anio_B . $opcionnotario . $casootro . "" . trim($_POST['LugarB'],'utf-8') . "; los contrayentes optan por el Régimen Patrimonial " . trim(titleCase($uregimen)) . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        
        
        
    $sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart2', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
        
        
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
    
        
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " .$margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Matrimonio Ella) esta asignada a otro usuario.</strong></div>
<?php 
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
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe3'],ENT_QUOTES)));
    $Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
    $NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida3']),'utf-8'),ENT_QUOTES)));
    $LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro3']),'utf-8'),ENT_QUOTES)));
    
 $AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe2'],ENT_QUOTES)));
    $NPartida2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida2']),'utf-8'),ENT_QUOTES)));
    $LibroP2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro2']),'utf-8'),ENT_QUOTES)));
    
    
    $id=intval($_POST['edit_id']);
    $id2 = $_POST['edit_id']+1;
    // UPDATE data into database
            $TxtMargi1 = trim(titleCase($_POST['edit_el2'])) . " " .  "" . $conv2 . "" . $apellido2 . "". $conocido . " contrajo matrimonio con " .  trim(titleCase($_POST['Nellamat'])) . " " .  "" . $conv6 . "" . $apellidoella2 . "". $conocidoella . ", el día " .  $dia_B . "" . $mes_B . "" . $anio_B . $opcionnotario . $casootro . "" . trim($_POST['LugarB'],'utf-8') . "; los contrayentes optan por el Régimen Patrimonial " . trim(titleCase($uregimen)) . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        
        
        
    $sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
        
        $TxtMargi2 = trim(titleCase($_POST['Nellamat'])) . " " .  "" . $conv6 . "" . $apellidoella2 . "". $conocida . " contrajo matrimonio con " . trim(titleCase($_POST['edit_el2'])) . " " .  "" . $conv2 . "" . $apellido2 . "". $conocidoel . ", el día " .  $dia_B . "" . $mes_B . "" . $anio_B . $opcionnotario . $casootro . "" . trim($_POST['LugarB'],'utf-8') . "; los contrayentes optan por el Régimen Patrimonial " . trim(titleCase($uregimen)) . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        
        
        
    $sql2 = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi2) . "', AnioP = '$AnioP2', LibroP = '" . Espacios($LibroP2) . "', NPartida = '" . Espacios($NPartida2) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart2', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf2', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1' WHERE id = '$id2' AND Iniciales1 = '$Iniciales'";
        
        
        
        
        
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
    
        
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " .$margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Matrimonio El) esta asignada a otro usuario.</strong></div>
<?php 
    } 
        
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id2'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
        
        
        
        $query2 = mysqli_query($con,$sql2);
         // if product has been added successfully
    if ($query2) {
        $messages[] = "La Marginación " . $margpdf2 ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf2  ?> (Matrimonio Ella) esta asignada a otro usuario. </strong></div>
<?php 
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
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe3'],ENT_QUOTES)));
    $Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
    $NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida3']),'utf-8'),ENT_QUOTES)));
    $LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro3']),'utf-8'),ENT_QUOTES)));
        
                
 
    
    $id=intval($_POST['edit_id']);
    // UPDATE data into database
           $TxtMargi1 = trim(titleCase($_POST['edit_el2'])) . " " .  "" . $conv2 . "" . $apellido2 . "". $conocido . " contrajo matrimonio con " .  trim(titleCase($_POST['Nellamat'])) . " " .  "" . $conv6 . "" . $apellidoella2 . "". $conocidoella . ", el día " .  $dia_B . "" . $mes_B . "" . $anio_B . $opcionnotario . $casootro . "" . trim($_POST['LugarB'],'utf-8') . "; la contrayente usará los apellidos ". trim($uapellidos) .". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        
        
        
    $sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
        
        
     $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
    
        
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " .$margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Matrimonio El) esta asignada a otro usuario.</strong></div>
<?php 
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
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe2'],ENT_QUOTES)));
    $Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
    $NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida2']),'utf-8'),ENT_QUOTES)));
    $LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro2']),'utf-8'),ENT_QUOTES)));
        
                
 
    
    $id=intval($_POST['edit_id']);
    // UPDATE data into database
            $TxtMargi1 = trim(titleCase($_POST['Nellamat'])) . " " .  "" . $conv6 . "" . $apellidoella2 . "". $conocida . " contrajo matrimonio con " .  trim(titleCase($_POST['edit_el2'])) . " " .  "" . $conv2 . "" . $apellido2 . "". $conocidoel . ", el día " .  $dia_B . "" . $mes_B . "" . $anio_B . $opcionnotario . $casootro . "" . trim($_POST['LugarB'],'utf-8') . "; la contrayente usará los apellidos ". trim($uapellidos) .". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        
        
        
    $sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart2', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
        
        
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
    
        
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " .$margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Matrimonio Ella) esta asignada a otro usuario.</strong></div>
<?php 
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
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe3'],ENT_QUOTES)));
    $Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
    $NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida3']),'utf-8'),ENT_QUOTES)));
    $LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro3']),'utf-8'),ENT_QUOTES)));
    $AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe2'],ENT_QUOTES)));
    $NPartida2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida2']),'utf-8'),ENT_QUOTES)));
    $LibroP2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro2']),'utf-8'),ENT_QUOTES)));
    
 
    
    $id=intval($_POST['edit_id']);
    $id2 = $_POST['edit_id']+1;
    // UPDATE data into database
           $TxtMargi1 = trim(titleCase($_POST['edit_el2'])) . " " .  "" . $conv2 . "" . $apellido2 . "". $conocido . " contrajo matrimonio con " .  trim(titleCase($_POST['Nellamat'])) . " " .  "" . $conv6 . "" . $apellidoella2 . "". $conocidoella . ", el día " .  $dia_B . "" . $mes_B . "" . $anio_B . $opcionnotario . $casootro . "" . trim($_POST['LugarB'],'utf-8') . "; la contrayente usará los apellidos ". trim($uapellidos) .". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        
        
        
    $sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
        
       $TxtMargi2 = trim(titleCase($_POST['Nellamat'])) . " " .  "" . $conv6 . "" . $apellidoella2 . "". $conocida . " contrajo matrimonio con " .  trim(titleCase($_POST['edit_el2'])) . " " .  "" . $conv2 . "" . $apellido2 . "". $conocidoel . ", el día " .  $dia_B . "" . $mes_B . "" . $anio_B . $opcionnotario . $casootro . "" . trim($_POST['LugarB'],'utf-8') . "; la contrayente usará los apellidos ". trim($uapellidos) .". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        
        
        
    $sql2 = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi2) . "', AnioP = '$AnioP2', LibroP = '" . Espacios($LibroP2) . "', NPartida = '" . Espacios($NPartida2) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart2', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf2', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1' WHERE id = '$id2' AND Iniciales1 = '$Iniciales'";
        
        
        
     $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
    
        
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " .$margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Matrimonio El) esta asignada a otro usuario.</strong></div>
<?php 
    } 
    
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id2'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
        
        
        
        $query2 = mysqli_query($con,$sql2);
         // if product has been added successfully
    if ($query2) {
        $messages[] = "La Marginación " . $margpdf2 ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf2  ?> (Matrimonio Ella) esta asignada a otro usuario. </strong></div>
<?php 
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
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe3'],ENT_QUOTES)));
    $Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
    $NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida3']),'utf-8'),ENT_QUOTES)));
    $LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro3']),'utf-8'),ENT_QUOTES)));
        
                
 
    
    $id=intval($_POST['edit_id']);
    // UPDATE data into database
            $TxtMargi1 = trim(titleCase($_POST['edit_el2'])) . " " .  "" . $conv2 . "" . $apellido2 . "". $conocido . " contrajo matrimonio con " . trim(titleCase($_POST['Nellamat'])) . " " .  "" . $conv6 . "" . $apellidoella2 . "". $conocidoella . ", el día " .  $dia_B . "" . $mes_B . "" . $anio_B . $opcionnotario . $casootro . "" . trim($_POST['LugarB'],'utf-8') . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        
        
        
    $sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
        
        
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
    
        
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " .$margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Matrimonio El) esta asignada a otro usuario.</strong></div>
<?php 
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
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe2'],ENT_QUOTES)));
    $Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
    $NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida2']),'utf-8'),ENT_QUOTES)));
    $LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro2']),'utf-8'),ENT_QUOTES)));

                
 
    
    $id=intval($_POST['edit_id']);
    // UPDATE data into database
            $TxtMargi1 = trim(titleCase($_POST['Nellamat'])) . " " .  "" . $conv6 . "" . $apellidoella2 . "". $conocida ." contrajo matrimonio con " .  trim(titleCase($_POST['edit_el2'])) . " " .  "" . $conv2 . "" . $apellido2 . "". $conocidoel . ", el día " .  $dia_B . "" . $mes_B . "" . $anio_B . $opcionnotario . $casootro . "" . trim($_POST['LugarB'],'utf-8') . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        
        
        
    $sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart2', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
        
        
     $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
    
        
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " .$margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Matrimonio Ella) esta asignada a otro usuario.</strong></div>
<?php 
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
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe3'],ENT_QUOTES)));
    $Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
    $NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida3']),'utf-8'),ENT_QUOTES)));
    $LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro3']),'utf-8'),ENT_QUOTES)));
    $AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe2'],ENT_QUOTES)));
    $NPartida2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida2']),'utf-8'),ENT_QUOTES)));
    $LibroP2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro2']),'utf-8'),ENT_QUOTES)));
    
 
    
    $id=intval($_POST['edit_id']);
    $id2 = $_POST['edit_id']+1;
    // UPDATE data into database
            $TxtMargi1 = trim(titleCase($_POST['edit_el2'])) . " " .  "" . $conv2 . "" . $apellido2 . "". $conocido . " contrajo matrimonio con " .  trim(titleCase($_POST['Nellamat'])) . " " .  "" . $conv6 . "" . $apellidoella2 . "". $conocidoella . ", el día " .  $dia_B . "" . $mes_B . "" . $anio_B . $opcionnotario . $casootro . "" . trim($_POST['LugarB'],'utf-8') . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        
        
        
    $sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
        
        $TxtMargi2 = trim(titleCase($_POST['Nellamat'])) . " " .  "" . $conv6 . "" . $apellidoella2 . "". $conocida . " contrajo matrimonio con " .  trim(titleCase($_POST['edit_el2'])) . " " .  "" . $conv2 . "" . $apellido2 . "". $conocidoel . ", el día " .  $dia_B . "" . $mes_B . "" . $anio_B . $opcionnotario . $casootro . "" . trim($_POST['LugarB'],'utf-8') . ". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        
        
        
    $sql2 = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi2) . "', AnioP = '$AnioP2', LibroP = '" . Espacios($LibroP2) . "', NPartida = '" . Espacios($NPartida2) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart2', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf2', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1' WHERE id = '$id2' AND Iniciales1 = '$Iniciales'";
        
        
        
 $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
    
        
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " .$margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Matrimonio El) esta asignada a otro usuario.</strong></div>
<?php 
    } 
    
        $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id2'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
        
        
        
        $query2 = mysqli_query($con,$sql2);
         // if product has been added successfully
    if ($query2) {
        $messages[] = "La Marginación " . $margpdf2 ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf2  ?> (Matrimonio Ella) esta asignada a otro usuario. </strong></div>
<?php 
    }
        
        
    } else 
    {
        $errors[] = "desconocido.";
    }

    
    
}
?>
    
	