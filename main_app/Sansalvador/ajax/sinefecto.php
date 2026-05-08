<?php
date_default_timezone_set('America/Costa_Rica');
include ("quitar_espacios.php");
include ("funcion_nombres.php");

require_once ("../conexion.php");
$libestadosf = ( empty($_POST['libestadosf']) )   ? NULL : $_POST['libestadosf'];

$margestadosf = ( empty($_POST['margestadosf']) )   ? NULL : $_POST['margestadosf'];
$estadosef = ( empty($_POST['estadoefecto']) )   ? NULL : $_POST['estadoefecto'];



// Realizamos la consulta para saber si coincide con uno de esos criterios
$sql = "select * from margi where TxtMargi1 !='' and LibroO='$libestadosf' and NMargi1='$margestadosf'";
$result = mysqli_query($con, $sql);

 if(mysqli_num_rows($result)>0)
 { 


// Realizamos la consulta para saber si coincide con uno de esos criterios
$sql = "select * from margi where LibroO='$libestadosf' and NMargi1='$margestadosf' and estado ='$estadosef' ";
$result = mysqli_query($con, $sql);

 if(mysqli_num_rows($result)>0)
 { ?>
	 <div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> La marginación seleccionada ya se encuentra en el estado seleccionado </strong>
<?php 
}
 else
 {


	if (empty(titleCase($_POST['margestadosf']))){
		$errors[] = "Datos de vacios.";
	} elseif (!empty(titleCase($_POST['margestadosf']))){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
 
	
	// REGISTER data into database
    $sql = "UPDATE margi SET estado = '" . Espacios($estadosef) . "' WHERE LibroO='$libestadosf' and NMargi1='$margestadosf' ";
	
		
		
		
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "El estado de la Marginación se cambio correctamente";
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
			}}}

else {


?>			
		  <div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> La marginación aún no ha sido creada. </strong>
		 
	<?php
			}


?>				 
		 
		 
		 
	