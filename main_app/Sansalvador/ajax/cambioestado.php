<?php
date_default_timezone_set('America/Costa_Rica');
include ("quitar_espacios.php");
include ("funcion_nombres.php");

require_once ("../conexion.php");
$libestado = ( empty($_POST['libestado']) )   ? NULL : $_POST['libestado'];

$margestado = ( empty($_POST['margestado']) )   ? NULL : $_POST['margestado'];
$eestado = ( empty($_POST['estadom']) )   ? NULL : $_POST['estadom'];
if($eestado == "revisado1") {

$firma = "FIRMACMARGI.jpg";
}elseif($eestado == "revisado2") {

$firma = "FIRMACMARGI.jpg";
}elseif($eestado == "revisado3") {

$firma = "FIRMACCALIDAD.jpg";
}elseif($eestado == "completo") {

$firma = "FIRMATELMACENTRO.jpg";
}





$firmaestado = ( empty($_POST['estadofirma']) )   ? NULL : $_POST['estadofirma'];



// Realizamos la consulta para saber si coincide con uno de esos criterios
$sql = "select * from margi where TxtMargi1 !='' and LibroO='$libestado' and NMargi1='$margestado'";
$result = mysqli_query($con, $sql);

 if(mysqli_num_rows($result)>0)
 { 


// Realizamos la consulta para saber si coincide con uno de esos criterios
$sql = "select * from margi where LibroO='$libestado' and NMargi1='$margestado' and revestado ='$eestado' ";
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


	if (empty(titleCase($_POST['margestado']))){
		$errors[] = "Datos de vacios.";
	} elseif (!empty(titleCase($_POST['margestado']))){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
 
	
	// REGISTER data into database
    $sql = "UPDATE margi SET revestado = '" . Espacios($eestado) . "', lineapdf = '" . Espacios($firma) . "' WHERE LibroO='$libestado' and NMargi1='$margestado' ";
	
		
		
		
		
		
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
		 
		 
		 
	