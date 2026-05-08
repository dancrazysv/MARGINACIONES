<?php
require_once ("../conexion.php");

$respuesta = ( empty($_POST['respuesta1']) )   ? NULL : $_POST['respuesta1'];
$iniciales = ( empty($_POST['edit_ini']) )   ? NULL : $_POST['edit_ini'];


$sqlc = "select password from usuarios where iniciales='$iniciales' AND respuesta='$respuesta'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-check-circle"></i> Respuesta correcta</strong></div>
<?php 
	} else 
	{
	?>
	<div class="alert alert-succes" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-times-circle"></i> Respuesta incorrecta</strong></div>
<?php 
	}
?>
