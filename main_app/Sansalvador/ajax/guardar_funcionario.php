<?php
date_default_timezone_set('America/Costa_Rica');
include ("quitar_espacios.php");
include ("funcion_nombres.php");

require_once ("../conexion.php");
$name=titleCase($_POST['NFnotario']);
$cargoj=strtolower($_POST['optionsboF']);



// Realizamos la consulta para saber si coincide con uno de esos criterios
$sql = "select * from notarios where nombre='$name' and cargojuridico='$cargoj'";
$result = mysqli_query($con, $sql);

 if(mysqli_num_rows($result)>0)
 { ?>
	 <div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> Registro no guardado funcionario y cargo ya existen </strong>
<?php 
}
 else
 {


	if (empty(titleCase($_POST['NFnotario']))){
		$errors[] = "Datos de usuario vacio.";
	} elseif (!empty(titleCase($_POST['NFnotario']))){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $fnombre = mysqli_real_escape_string($con,(strip_tags(titleCase(trim($_POST['NFnotario'])),ENT_QUOTES)));
		$fcargo = mysqli_real_escape_string($con,(strip_tags(titleCase(trim($_POST['optionsboF'])),ENT_QUOTES)));
	
	// REGISTER data into database
    $sql = "INSERT INTO notarios(nombre, cargojuridico) VALUE ('".Espacios($fnombre)."','".Espacios($fcargo)."')";
	
		
		
		
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "El funcionario se agrego correctamente";
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
			}}
?>			
		 
		 
		 
		 
		 
		 
	