<?php
date_default_timezone_set('America/Costa_Rica');
include ("quitar_espacios.php");
include ("funcion_nombres.php");
$fechaactual = date('Y-m-d');
$horaactual = date("H:i:s"); 
$tipouser = ( empty($_POST['tipouser']) )   ? NULL : $_POST['tipouser'];
$password = ( empty($_POST['passuedit']) )   ? NULL : $_POST['passuedit'];

$verify01 = ( empty($_POST['verificaruedit']) )   ? NULL : $_POST['verificaruedit'];

if ($tipouser == "tipo1user"){

$verify = md5(Espacios(trim($verify01)));
if ($password == $verify){

if (empty(titleCase($_POST['idusuarioedit']))){
		$errors[] = "Datos de usuario vacio.";
	} elseif (!empty(titleCase($_POST['idusuarioedit']))){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $unombre = mysqli_real_escape_string($con,(strip_tags(titleCase(trim($_POST['ndusuarioedit'])),ENT_QUOTES)));
	$uusuario = mysqli_real_escape_string($con,(strip_tags(strtolower(trim($_POST['usuariouedit'])),ENT_QUOTES)));
	$utipo = mysqli_real_escape_string($con,(strip_tags($_POST['tipouedit'],ENT_QUOTES)));
	$uiniciales = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['inicialesuedit']),'utf-8'),ENT_QUOTES)));
	
	
    $id=intval($_POST['idusuarioedit']);
	
	// REGISTER data into database
    $sql = "UPDATE usuarios SET nombre = '" . Espacios($unombre) . "', usuario = '" . Espacios($uusuario) . "', tipo = '" . Espacios($utipo) . "', iniciales = '" . Espacios($uiniciales) . "', fechae = '" . Espacios($fechaactual) . "', horae = '" . Espacios($horaactual) . "'  WHERE id = '$id'";
	
		
		
  $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "El usuario ha sido modificado.";
    } else {
        $errors[] = "Lo sentimos, la modificación del usuario fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
        
                        
   if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
					<strong><i class="fas fa-times-circle"></i> Error!</strong> 
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
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-check-circle"></i> ¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}}else{ ?>
		<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> Usuario no se pudo editar. Password no coincide.</strong>
			
			<?php }	
	
	
	
	 }




	
	?>
			
		<?php 	
	if ($tipouser == "tipo2user"){

	if (empty($_POST['idusuarioinha'])){
		$errors[] = "No seleccionaste un usuario a Modificar";
	} elseif (!empty($_POST['idusuarioinha'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    
	

$estadouser = ( empty($_POST['estadouser']) )   ? NULL : $_POST['estadouser'];
		
		
		
		
		$id=intval($_POST['idusuarioinha']);
	// UPDATE data into database
					
	$sql = "UPDATE usuarios SET estado = '$estadouser' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "El usuario ha sido modificado.";
    } else {
        $errors[] = "Lo sentimos, la modificación del usuario fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	



	
	
if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
					<strong><i class="fas fa-times-circle"></i> Error!</strong> 
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
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-check-circle"></i> ¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}}		
			
	
			
			?>			
		
			
			
			
			
			
			
			
			
			
			
			
			