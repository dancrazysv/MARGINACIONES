<?php
///////// Art 15 1 -- Masculino

if ($art151 == '15_1' and $sexo151 == 'male' and $sexo152 == '') {
	
	

	if (empty($_POST['edit_id17'])){
		$errors[] = "ID está vacío.6";
	} elseif (!empty($_POST['edit_id17'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anio1517'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida1517']),'utf-8'),ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro1517']),'utf-8'),ENT_QUOTES)));
	$Tipof17 = mysqli_real_escape_string($con,(strip_tags($_POST['tipopart17'],ENT_QUOTES)));	

	$id=intval($_POST['edit_id17']);

	// UPDATE data into database
			$TxtMargi1 = "Rectificase la presente partida de nacimiento, en el sentido que el nombre correcto del inscrito es: ". trim(titleCase($nombre151)) . ". Según Resolución emitida por la LICENCIADA KARLA MARIELA OLIVARES MARTÍNEZ, Registrador del Estado Familiar" .  $f_art151 . ", sobre la base del Artículo diecisiete de la Ley Transitoria del Registro del Estado Familiar y de los Regímenes Patrimoniales del Matrimonio y Artículo quince de la Ley del Nombre de la Persona Natural. Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$Tipof17', TipoMargi = 'MA15', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf17', cargor = '$carg', estado = '$est', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";


		
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdf17 ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf17 ?> (Art 15 - El) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}

}


///////// Art 15 1 -- Femenino

if ($art151 == '15_1' and $sexo151 == 'female' and $sexo152 == '') {
	
	

	if (empty($_POST['edit_id17'])){
		$errors[] = "ID está vacío.6";
	} elseif (!empty($_POST['edit_id17'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anio1517'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida1517']),'utf-8'),ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro1517']),'utf-8'),ENT_QUOTES)));
	$Tipof17 = mysqli_real_escape_string($con,(strip_tags($_POST['tipopart17'],ENT_QUOTES)));

		
		

	$id=intval($_POST['edit_id17']);

	// UPDATE data into database
			$TxtMargi1 = "Rectificase la presente partida de nacimiento, en el sentido que el nombre correcto de la inscrita es: ". trim(titleCase($nombre151)) . ". Según Resolución emitida por la LICENCIADA KARLA MARIELA OLIVARES MARTÍNEZ, Registrador del Estado Familiar" .  $f_art151 . ", sobre la base del Artículo diecisiete de la Ley Transitoria del Registro del Estado Familiar y de los Regímenes Patrimoniales del Matrimonio y Artículo quince de la Ley del Nombre de la Persona Natural. Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$Tipof17', TipoMargi = 'MA15', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf17', cargor = '$carg', estado = '$est', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";


		
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdf17 ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf17 ?> (Art 15 - Ella) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}

}

///////// Art 15 2 -- Masculino -- Masculino

if ($art151 == '15_2' and $sexo151 == 'male' and $sexo152 == 'male') {
	
	

	if (empty($_POST['edit_id17'])){
		$errors[] = "ID está vacío.6";
	} elseif (!empty($_POST['edit_id17'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anio1517'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida1517']),'utf-8'),ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro1517']),'utf-8'),ENT_QUOTES)));
	$Tipof17 = mysqli_real_escape_string($con,(strip_tags($_POST['tipopart17'],ENT_QUOTES)));
	$Tipof172 = mysqli_real_escape_string($con,(strip_tags($_POST['tipopart172'],ENT_QUOTES)));	
		
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anio15172'],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida15172']),'utf-8'),ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro15172']),'utf-8'),ENT_QUOTES)));
	

	$id=intval($_POST['edit_id17']);
$id2=$_POST['edit_id17']+1;
	// UPDATE data into database
			$TxtMargi1 = "Rectificase la presente partida de nacimiento, en el sentido que el nombre correcto del inscrito es: ". trim(titleCase($nombre151)) . ". Según Resolución emitida por la LICENCIADA KARLA MARIELA OLIVARES MARTÍNEZ, Registrador del Estado Familiar" .  $f_art151 . ", sobre la base del Artículo diecisiete de la Ley Transitoria del Registro del Estado Familiar y de los Regímenes Patrimoniales del Matrimonio y Artículo quince de la Ley del Nombre de la Persona Natural. Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$Tipof172', TipoMargi = 'MA15', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf17', cargor = '$carg', estado = '$est', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";

		$TxtMargi2 = "Rectificase la presente partida de nacimiento, en el sentido que el nombre correcto del inscrito es: ". trim(trim(titleCase($nombre152))) . ". Según Resolución emitida por la LICENCIADA KARLA MARIELA OLIVARES MARTÍNEZ, Registrador del Estado Familiar" .  $f_art152 . ", sobre la base del Artículo diecisiete de la Ley Transitoria del Registro del Estado Familiar y de los Regímenes Patrimoniales del Matrimonio y Artículo quince de la Ley del Nombre de la Persona Natural. Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi2) . "', AnioP = '$AnioP2', LibroP = '" . Espacios($LibroP2) . "', NPartida = '" . Espacios($NPartida2) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$Tipof17', TipoMargi = 'MA15', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf172', cargor = '$carg', estado = '$est', revestado = 'revisado1' WHERE id = '$id2' AND Iniciales1 = '$Iniciales'";
		

	  
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
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> Art. 15 esta asignada a otro usuario.</strong></div>
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
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf2  ?> Art. 15 esta asignada a otro usuario. </strong></div>
<?php 
    } 
        
        
    } else 
    {
        $errors[] = "desconocido.";
    }

}




///////// Art 15 2 -- femenino -- femenino

if ($art151 == '15_2' and $sexo151 == 'female' and $sexo152 == 'female') {
	
	

	if (empty($_POST['edit_id17'])){
		$errors[] = "ID está vacío.6";
	} elseif (!empty($_POST['edit_id17'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anio1517'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida1517']),'utf-8'),ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro1517']),'utf-8'),ENT_QUOTES)));
	$Tipof17 = mysqli_real_escape_string($con,(strip_tags($_POST['tipopart17'],ENT_QUOTES)));
	$Tipof172 = mysqli_real_escape_string($con,(strip_tags($_POST['tipopart172'],ENT_QUOTES)));	
		
		
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anio15172'],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida15172']),'utf-8'),ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro15172']),'utf-8'),ENT_QUOTES)));
	

	$id=intval($_POST['edit_id17']);
$id2=$_POST['edit_id17']+1;
	// UPDATE data into database
			$TxtMargi1 = "Rectificase la presente partida de nacimiento, en el sentido que el nombre correcto de la inscrita es: ". trim(titleCase($nombre151)) . ". Según Resolución emitida por la LICENCIADA KARLA MARIELA OLIVARES MARTÍNEZ, Registrador del Estado Familiar" .  $f_art151 . ", sobre la base del Artículo diecisiete de la Ley Transitoria del Registro del Estado Familiar y de los Regímenes Patrimoniales del Matrimonio y Artículo quince de la Ley del Nombre de la Persona Natural. Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$Tipof172', TipoMargi = 'MA15', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf17', cargor = '$carg', estado = '$est', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";



		$TxtMargi2 = "Rectificase la presente partida de nacimiento, en el sentido que el nombre correcto de la inscrita es: ". trim(titleCase($nombre152)) . ". Según Resolución emitida por la LICENCIADA KARLA MARIELA OLIVARES MARTÍNEZ, Registrador del Estado Familiar" .  $f_art152 . ", sobre la base del Artículo diecisiete de la Ley Transitoria del Registro del Estado Familiar y de los Regímenes Patrimoniales del Matrimonio y Artículo quince de la Ley del Nombre de la Persona Natural. Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi2) . "', AnioP = '$AnioP2', LibroP = '" . Espacios($LibroP2) . "', NPartida = '" . Espacios($NPartida2) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$Tipof17', TipoMargi = 'MA15', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf172', cargor = '$carg', estado = '$est', revestado = 'revisado1' WHERE id = '$id2' AND Iniciales1 = '$Iniciales'";
		

 
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
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> Art. 15 esta asignada a otro usuario.</strong></div>
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
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf2  ?> Art. 15 esta asignada a otro usuario. </strong></div>
<?php 
    } 
        
        
    } else 
    {
        $errors[] = "desconocido.";
    }

}






		
	

///////// Art 15 2 -- Masculino -- femenino

if ($art151 == '15_2' and $sexo151 == 'male' and $sexo152 == 'female') {
	
	

	if (empty($_POST['edit_id17'])){
		$errors[] = "ID está vacío.6";
	} elseif (!empty($_POST['edit_id17'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anio1517'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida1517']),'utf-8'),ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro1517']),'utf-8'),ENT_QUOTES)));
		
	$Tipof17 = mysqli_real_escape_string($con,(strip_tags($_POST['tipopart172'],ENT_QUOTES)));
	$Tipof172 = mysqli_real_escape_string($con,(strip_tags($_POST['tipopart173'],ENT_QUOTES)));	
		
		
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anio15172'],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida15172']),'utf-8'),ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro15172']),'utf-8'),ENT_QUOTES)));
	

	$id=intval($_POST['edit_id17']);
$id2=$_POST['edit_id17']+1;
	// UPDATE data into database
			$TxtMargi1 = "Rectificase la presente partida de nacimiento, en el sentido que el nombre correcto del inscrito es: ". trim(titleCase($nombre151)) . ". Según Resolución emitida por la LICENCIADA KARLA MARIELA OLIVARES MARTÍNEZ, Registrador del Estado Familiar" .  $f_art151 . ", sobre la base del Artículo diecisiete de la Ley Transitoria del Registro del Estado Familiar y de los Regímenes Patrimoniales del Matrimonio y Artículo quince de la Ley del Nombre de la Persona Natural. Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$Tipof17', TipoMargi = 'MA15', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf17', cargor = '$carg', estado = '$est', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";

		$TxtMargi2 = "Rectificase la presente partida de nacimiento, en el sentido que el nombre correcto de la inscrita es: ". trim(titleCase($nombre152)) . ". Según Resolución emitida por la LICENCIADA KARLA MARIELA OLIVARES MARTÍNEZ, Registrador del Estado Familiar" .  $f_art152 . ", sobre la base del Artículo diecisiete de la Ley Transitoria del Registro del Estado Familiar y de los Regímenes Patrimoniales del Matrimonio y Artículo quince de la Ley del Nombre de la Persona Natural. Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi2) . "', AnioP = '$AnioP2', LibroP = '" . Espacios($LibroP2) . "', NPartida = '" . Espacios($NPartida2) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$Tipof172', TipoMargi = 'MA15', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf172', cargor = '$carg', estado = '$est', revestado = 'revisado1' WHERE id = '$id2' AND Iniciales1 = '$Iniciales'";
		

		 
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
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> Art. 15 esta asignada a otro usuario.</strong></div>
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
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf2  ?> Art. 15 esta asignada a otro usuario. </strong></div>
<?php 
    } 
        
        
    } else 
    {
        $errors[] = "desconocido.";
    }

}




///////// Art 15 2 -- femenino -- Masculino

if ($art151 == '15_2' and $sexo151 == 'female' and $sexo152 == 'male') {
	
	

	if (empty($_POST['edit_id17'])){
		$errors[] = "ID está vacío.6";
	} elseif (!empty($_POST['edit_id17'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anio1517'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida1517']),'utf-8'),ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro1517']),'utf-8'),ENT_QUOTES)));
		
	$Tipof17 = mysqli_real_escape_string($con,(strip_tags($_POST['tipopart17'],ENT_QUOTES)));
	$Tipof172 = mysqli_real_escape_string($con,(strip_tags($_POST['tipopart172'],ENT_QUOTES)));	
		
		
		
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anio15172'],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida15172']),'utf-8'),ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro15172']),'utf-8'),ENT_QUOTES)));
	

	$id=intval($_POST['edit_id17']);
$id2=$_POST['edit_id17']+1;
	// UPDATE data into database
			$TxtMargi1 = "Rectificase la presente partida de nacimiento, en el sentido que el nombre correcto de la inscrita es: ". trim(titleCase($nombre151)) . ". Según Resolución emitida por la LICENCIADA KARLA MARIELA OLIVARES MARTÍNEZ, Registrador del Estado Familiar" .  $f_art151 . ", sobre la base del Artículo diecisiete de la Ley Transitoria del Registro del Estado Familiar y de los Regímenes Patrimoniales del Matrimonio y Artículo quince de la Ley del Nombre de la Persona Natural. Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$Tipof17', TipoMargi = 'MA15', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf17', cargor = '$carg', estado = '$est', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";

		$TxtMargi2 = "Rectificase la presente partida de nacimiento, en el sentido que el nombre correcto del inscrito es: ". trim(titleCase($nombre152)) . ". Según Resolución emitida por la LICENCIADA KARLA MARIELA OLIVARES MARTÍNEZ, Registrador del Estado Familiar" . $f_art152 . ", sobre la base del Artículo diecisiete de la Ley Transitoria del Registro del Estado Familiar y de los Regímenes Patrimoniales del Matrimonio y Artículo quince de la Ley del Nombre de la Persona Natural. Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi2) . "', AnioP = '$AnioP2', LibroP = '" . Espacios($LibroP2) . "', NPartida = '" . Espacios($NPartida2) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$Tipof172', TipoMargi = 'MA15', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf172', cargor = '$carg', estado = '$est', revestado = 'revisado1' WHERE id = '$id2' AND Iniciales1 = '$Iniciales'";
		

		
	  
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
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> Art. 15 esta asignada a otro usuario.</strong></div>
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
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf2  ?> Art. 15 esta asignada a otro usuario. </strong></div>
<?php 
    } 
        
        
    } else 
    {
        $errors[] = "desconocido.";
    }

}




///////// Art 17 -- 1

if ($art151 == '17_1') {
	
	

	if (empty($_POST['edit_id17'])){
		$errors[] = "ID está vacío.6";
	} elseif (!empty($_POST['edit_id17'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anio15173'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida15173']),'utf-8'),ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro15173']),'utf-8'),ENT_QUOTES)));
	$Tipof17 = mysqli_real_escape_string($con,(strip_tags($_POST['tipopart173'],ENT_QUOTES)));
		
	$id=intval($_POST['edit_id17']);

	// UPDATE data into database
			$TxtMargi1 = "Rectificase la presente partida" . $tipo17 . "" . $nombre171 . ", en el sentido que " . trim($sentido1) .  ". Según Resolución emitida por la LICENCIADA KARLA MARIELA OLIVARES MARTÍNEZ, Registrador del Estado Familiar". $f_art171 .", sobre la base del Artículo diecisiete de la Ley Transitoria del Registro del Estado Familiar y de los Regímenes Patrimoniales del Matrimonio. Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$Tipof17', TipoMargi = 'MA17', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf17', cargor = '$carg', estado = '$est', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";


		
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdf17 ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf17 ?> (Art 17 ) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}

}

///////// Art 17 -- 2

if ($art151 == '17_2') {
	
	

	if (empty($_POST['edit_id17'])){
		$errors[] = "ID está vacío.6";
	} elseif (!empty($_POST['edit_id17'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anio15173'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida15173']),'utf-8'),ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro15173']),'utf-8'),ENT_QUOTES)));
	$Tipof17 = mysqli_real_escape_string($con,(strip_tags($_POST['tipopart173'],ENT_QUOTES)));
	$Tipof172 = mysqli_real_escape_string($con,(strip_tags($_POST['tipopart174'],ENT_QUOTES)));
	$AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anio15174'],ENT_QUOTES)));
	$NPartida2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida15174']),'utf-8'),ENT_QUOTES)));
	$LibroP2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro15174']),'utf-8'),ENT_QUOTES)));	
		
		
		
	$id=intval($_POST['edit_id17']);
	$id2=intval($_POST['edit_id17']+1);
	// UPDATE data into database
			$TxtMargi1 = "Rectificase la presente partida" . $tipo17 . "" . $nombre171 . ", en el sentido que " . trim($sentido1) .  ". Según Resolución emitida por la LICENCIADA KARLA MARIELA OLIVARES MARTÍNEZ, Registrador del Estado Familiar". $f_art171 .", sobre la base del Artículo diecisiete de la Ley Transitoria del Registro del Estado Familiar y de los Regímenes Patrimoniales del Matrimonio. Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$Tipof17', TipoMargi = 'MA17', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf17', cargor = '$carg', estado = '$est', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";

$TxtMargi2 = "Rectificase la presente partida" . $tipo172 . "" . $nombre172 . ", en el sentido que " . trim($sentido2) .  ". Según Resolución emitida por la LICENCIADA KARLA MARIELA OLIVARES MARTÍNEZ, Registrador del Estado Familiar". $f_art172 .", sobre la base del Artículo diecisiete de la Ley Transitoria del Registro del Estado Familiar y de los Regímenes Patrimoniales del Matrimonio. Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		
		
		
	$sql2 = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi2) . "', AnioP = '$AnioP2', LibroP = '" . Espacios($LibroP2) . "', NPartida = '" . Espacios($NPartida2) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$Tipof172', TipoMargi = 'MA17', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf172', cargor = '$carg', estado = '$est', revestado = 'revisado1' WHERE id = '$id2' AND Iniciales1 = '$Iniciales'";
		
		
		
		
	 
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
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> Art. 15 esta asignada a otro usuario.</strong></div>
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
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf2  ?> Art. 15 esta asignada a otro usuario. </strong></div>
<?php 
    } 
        
        
    } else 
    {
        $errors[] = "desconocido.";
    }

}


//////// rectificacion escritura





if ($art151 == '17_3') {
	
	

	if (empty($_POST['edit_id17'])){
		$errors[] = "ID está vacío.6";
	} elseif (!empty($_POST['edit_id17'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anio15173'],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida15173']),'utf-8'),ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro15173']),'utf-8'),ENT_QUOTES)));
	$Tipof17 = mysqli_real_escape_string($con,(strip_tags($_POST['tipopart173'],ENT_QUOTES)));
		









	$id=intval($_POST['edit_id17']);

	// UPDATE data into database
			$TxtMargi1 = "Rectificase la presente partida" . $tipo17 . "" . $nombre171 . ", en el sentido que " . trim($sentido1) .  ". Según Escritura Pública de Rectificación". $f_art171 .", ante " .trim(titleCase($nombrerecti)).", ".$cargorecti." en ".$lugarrecti.". Alcaldía de San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$Tipof17', TipoMargi = 'MARN', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf17', cargor = '$carg', estado = '$est', revestado = 'revisado1' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";


		
		
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdf17 ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf17 ?> (Art 17 ) esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
		
		
	} else 
	{
		$errors[] = "desconocido.";
	}

}




















?>