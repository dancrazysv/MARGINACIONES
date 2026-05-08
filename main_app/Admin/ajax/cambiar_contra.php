<?php
date_default_timezone_set('America/Costa_Rica');
include ("quitar_espacios.php");
require_once ("../conexion.php");

$iniciales = ( empty($_POST['edit_ini']) )   ? NULL : $_POST['edit_ini'];
$password1 = ( empty($_POST['newcontra']) )   ? NULL : $_POST['newcontra'];
$anterior = ( empty($_POST['passanterior']) )   ? NULL : $_POST['passanterior'];
$verify01 = ( empty($_POST['verificarcambiar']) )   ? NULL : $_POST['verificarcambiar'];

$anterior2 = md5(Espacios(trim($anterior)));
$password = md5(Espacios(trim($password1)));
$verify = md5(Espacios(trim($verify01)));

$sqlc = "select * from usuarios where password='".$anterior2."' AND iniciales='".$iniciales."'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		


if ($password == $verify){

	if (empty($_POST['edit_ini'])){
		$errors[] = "ID está vacío.";
	} elseif (!empty($_POST['edit_ini'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    

	// UPDATE data into database
					
	$sql = "UPDATE usuarios SET password = '".$password."' WHERE iniciales = '".$iniciales."' AND password='".md5(Espacios(trim($anterior)))."'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La contraseña ha sido actualizada.";
    } else {
        $errors[] = "Lo sentimos, la modificación de la contraseña fallo. Por favor, regrese y vuelva a intentarlo.";
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
						<strong><i class="fas fa-times-circle"></i> Nueva Contraseña no coincide.</strong>
						
	<?php }  
		}else{ ?>
		<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-times-circle"></i> La contraseña anterior no coincide.</strong>
						
	<?php }  
				
	
			?>			
