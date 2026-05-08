<?php
date_default_timezone_set('America/Costa_Rica');
include ("quitar_espacios.php");
include ("funcion_nombres.php");
$fechaactual = date('Y-m-d');
 $horaactual = date("H:i:s"); 
$activo = "Activo";

require_once ("../conexion.php");
$name=titleCase($_POST['nombreu']);
$user=strtolower($_POST['usuariou']);
$inicialesuser=strtolower($_POST['inicialesu']);


// Realizamos la consulta para saber si coincide con uno de esos criterios
$sql = "select * from usuarios where nombre='$name' or usuario='$user' or iniciales='$inicialesuser'";
$result = mysqli_query($con, $sql);

 if(mysqli_num_rows($result)>0)
 { ?>
	 <div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> Registro no guardado usuario ya existe o las iniciales ya han sido asignadas</strong>
<?php 
}
 else
 {
if ($_POST['passu'] == $_POST['verificaru']){


	if (empty(titleCase($_POST['nombreu']))){
		$errors[] = "Datos de usuario vacio.";
	} elseif (!empty(titleCase($_POST['nombreu']))){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $unombre = mysqli_real_escape_string($con,(strip_tags(titleCase(trim($_POST['nombreu'])),ENT_QUOTES)));
	$uusuario = mysqli_real_escape_string($con,(strip_tags(strtolower(trim($_POST['usuariou'])),ENT_QUOTES)));
	$upass = mysqli_real_escape_string($con,(strip_tags(md5(trim($_POST['passu'])),ENT_QUOTES)));
	$utipo = mysqli_real_escape_string($con,(strip_tags($_POST['tipou'],ENT_QUOTES)));
	$uiniciales = mysqli_real_escape_string($con,(strip_tags(strtoupper(trim($_POST['inicialesu'])),ENT_QUOTES)));
	$pregunta = mysqli_real_escape_string($con,(strip_tags($_POST['preguntas'],ENT_QUOTES)));
	$respuesta = mysqli_real_escape_string($con,(strip_tags($_POST['respuesta'],ENT_QUOTES)));
	$correos = mysqli_real_escape_string($con,(strip_tags($_POST['correo'],ENT_QUOTES)));
	// REGISTER data into database
    $sql = "INSERT INTO usuarios(nombre, usuario, password, tipo, iniciales, fechac, horac, estado, idpregunta, respuesta, correo) VALUE ('".Espacios($unombre)."','".Espacios($uusuario)."','".Espacios($upass)."','$utipo','".Espacios($uiniciales)."','$fechaactual','$horaactual','$activo', '$pregunta', '$respuesta', '$correos')";
	
		
		
		
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "El usuario se agrego correctamente";
    } else {
        $errors[] = "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo.";
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
						<strong><i class="fas fa-times-circle"></i> Usuario no creado Password no coincide</strong>
						
	<?php }}
?>			

