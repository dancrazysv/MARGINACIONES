<?php

require_once ("../conexion.php");

$librofolio = ( empty($_POST['librofoliom']) )   ? NULL : $_POST['librofoliom'];
$iniciales = ( empty($_POST['inicialesfoliom']) )   ? NULL : $_POST['inicialesfoliom'];
$nmargi = ( empty($_POST['nmargm']) )   ? NULL : $_POST['nmargm'];

$resultado = substr($librofolio, 4);


if ($resultado > 500){
	?>
<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> Número de folio debe de estar entre 1 y 500.</strong>

<?php
	} else {
	

if($nmargi > 2000){
	?>
<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> Número de Marginación debe de ser entre 1 y 2000.</strong>


<?php

} else {



$resultado = substr($librofolio, 4);
$libros = substr($librofolio,0,3);



$sql = "select * from margi where LibroO = '$libros'";

$result = mysqli_query($con, $sql);

 if(mysqli_num_rows($result)>0){	
	 
	 
	 

$librofolio = ( empty($_POST['librofoliom']) )   ? NULL : $_POST['librofoliom'];
$iniciales = ( empty($_POST['inicialesfoliom']) )   ? NULL : $_POST['inicialesfoliom'];



	if (empty($_POST['inicialesfoliom'])){
		$errors[] = "Campos vacios.";
	} elseif (!empty($_POST['inicialesfoliom'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    
		$id=intval($_POST['inicialesfoliom']);
			
	// UPDATE data into database
		
	$sql = "select * from margi where TxtMargi1 <> '' AND busquedalf = '$librofolio' AND NMargi1 = '$nmargi'";
$result = mysqli_query($con, $sql);

 if(mysqli_num_rows($result)>0)
 { ?>
	 <div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> Folio no asignado, La marginación ya se ha creado.</strong>
<?php 
}
 else
 {	
		
		
					
	$sql = "UPDATE margi SET Iniciales1 = '$iniciales' WHERE busquedalf = '$librofolio' AND NMargi1 = '$nmargi'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación ha sido reasignada.";
    } else {
        $errors[] = "Lo sentimos, asignación de marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
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
			}} else  {	 ?>
<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> Libro no existe! Favor digitar el libro en uso.</strong>

	<?php	 
	 
}}}
	 
	 
?>			

