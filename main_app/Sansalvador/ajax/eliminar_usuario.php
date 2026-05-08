<?php
	



$nombre = ( empty($_POST['ndusuariodelete']) )   ? NULL : $_POST['ndusuariodelete'];
$usuario = ( empty($_POST['usuarioudelete']) )   ? NULL : $_POST['usuarioudelete'];
$id = ( empty($_POST['idusuariodelete']) )   ? NULL : $_POST['idusuariodelete'];
$tipo = ( empty($_POST['tipoudelete']) )   ? NULL : $_POST['tipoudelete'];
$password = ( empty($_POST['passudelete']) )   ? NULL : $_POST['passudelete'];
$iniciales = ( empty($_POST['inicialesudelete']) )   ? NULL : $_POST['inicialesudelete'];



if (empty($_POST['idusuariodelete'])){
		$errors[] = "Id vacío.";
	} elseif (!empty($_POST['idusuariodelete'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $id=intval($_POST['idusuariodelete']);
	

	// DELETE FROM  database
    $sql = "DELETE FROM usuarios WHERE id='$id'";
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "El usuario ha sido eliminado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la eliminación falló. Por favor, regrese y vuelva a intentarlo.";
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
			}
?>			