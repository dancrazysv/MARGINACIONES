<?php

require_once ("../conexion.php");



$librofolio = ( empty($_POST['librofolio']) )   ? NULL : $_POST['librofolio'];
$iniciales = ( empty($_POST['inicialesfolio']) )   ? NULL : $_POST['inicialesfolio'];

$resultado = substr($librofolio, 4);
$libros = substr($librofolio,0,3);

if ($resultado > 500){
	?>
<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> Número de Folio debe de estar entre 1 y 500.</strong>



<?php
	}else{

$sql = "select * from margi where LibroO = '$libros'";

$result = mysqli_query($con, $sql);

 if(mysqli_num_rows($result)>0){	
	 

	
if ($resultado%2==0){
	
	?>
<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> Solo puedes asigar folios impares.</strong>


<?php
	
	
	
	}else{
// Realizamos la consulta para saber si coincide con uno de esos criterios
$sql = "select * from margi where Iniciales1 <> '' AND busquedalf = '$librofolio'";
$result = mysqli_query($con, $sql);

 if(mysqli_num_rows($result)>0)
 { ?>
	 <div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> Folio no asignado una o más marginaciones ya fueron asignadas a otro usuario.</strong>
<?php 
}
 else
 {

$resultado = substr($librofolio, 4);
$libros = substr($librofolio,0,3);
$guion = '-';
$nfolio = $resultado+1;
$nextfolio = $libros.$guion.$nfolio;	 
	 
	 


$librofolio = ( empty($_POST['librofolio']) )   ? NULL : $_POST['librofolio'];
$iniciales = ( empty($_POST['inicialesfolio']) )   ? NULL : $_POST['inicialesfolio'];



	if (empty($_POST['inicialesfolio'])){
		$errors[] = "Campos vacios.";
	} elseif (!empty($_POST['inicialesfolio'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    
		$id=intval($_POST['inicialesfolio']);
	// UPDATE data into database
		
					
	$sql = "UPDATE margi SET Iniciales1 = '$iniciales' WHERE busquedalf = '$librofolio'";
	$sql2 = "UPDATE margi SET Iniciales1 = '$iniciales' WHERE busquedalf = '$nextfolio'";
		
		
    $query = mysqli_query($con,$sql);
	$query = mysqli_query($con,$sql2);
    // if product has been added successfully
    if ($query) {
        $messages[] = "El folio ha sido asignado.";
    } else {
        $errors[] = "Lo sentimos, asignación de folio fallo. Por favor, regrese y vuelva a intentarlo.";
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
			}} }}else  {	 ?>
<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> Libro no existe! Favor digitar el libro en uso.</strong>

	<?php	 
	 
}}
	
	
	 
	 
?>			

