<?php
if ($folioasig > 500){
	?>
<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> Número de Folio debe de estar entre 1 y 500.</strong>

<?php
}elseif ($folioasig2 > 500){
	?>
<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> Número de Folio debe de estar entre 1 y 500.</strong>


<?php
}elseif ($folioasig3 > 500){
	?>
<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> Número de Folio debe de estar entre 1 y 500.</strong>

<?php
}elseif ($folioasig4 > 500){
	?>
<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> Número de Folio debe de estar entre 1 y 500.</strong>


<?php
}elseif ($folioasig5 > 500){
	?>
<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> Número de Folio debe de estar entre 1 y 500.</strong>

<?php


	}else{

$sql = "select * from margi where LibroO = '$libro1'";

$result = mysqli_query($con, $sql);

 if(mysqli_num_rows($result)>0){	
	 

	
if (($folioasig%2)==0){
	
	?>
<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> Solo puedes asigar folios impares.</strong>


<?php
	}elseif (($folioasig2%2)==0){
	
	?>
<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> Solo puedes asigar folios impares.</strong>


<?php
	}elseif (($folioasig3%2)==0){
	
	?>
<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> Solo puedes asigar folios impares.</strong>


<?php
	}elseif (($folioasig4%2)==0){
	
	?>
<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> Solo puedes asigar folios impares.</strong>

<?php
	}elseif (($folioasig5%2)==0){
	
	?>
<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> Solo puedes asigar folios impares.</strong>



	
	<?php
	}else{
// Realizamos la consulta para saber si coincide con uno de esos criterios
$consu = "select * from margi where Iniciales1 <> '' AND busquedalf = '$librofolio'";
$consu2 = "select * from margi where Iniciales1 <> '' AND busquedalf = '$librofolio2'";
$consu3 = "select * from margi where Iniciales1 <> '' AND busquedalf = '$librofolio3'";
$consu4 = "select * from margi where Iniciales1 <> '' AND busquedalf = '$librofolio4'";
$consu5 = "select * from margi where Iniciales1 <> '' AND busquedalf = '$librofolio5'";




$result = mysqli_query($con, $consu);
$result2 = mysqli_query($con, $consu2);
$result3 = mysqli_query($con, $consu3);
$result4 = mysqli_query($con, $consu4);
$result5 = mysqli_query($con, $consu5);






 if(mysqli_num_rows($result)>0)
 { ?><div>
	 <div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> Folios <?php echo $librofolio;?> <?php echo $nextfolio;?> no asignados una o más marginaciones ya fueron asignadas a otro usuario.</strong>
</div></div>
<?php 

}elseif(mysqli_num_rows($result2)>0)
 { ?><div>
	 <div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> Folios <?php echo $librofolio2;?> <?php echo $nextfolio2;?> no asignados una o más marginaciones ya fueron asignadas a otro usuario.</strong>
</div></div>
<?php 

}elseif(mysqli_num_rows($result3)>0)
 { ?><div>
	 <div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> Folios <?php echo $librofolio3;?> <?php echo $nextfolio3;?> no asignados una o más marginaciones ya fueron asignadas a otro usuario.</strong>
</div></div>
<?php 


}elseif(mysqli_num_rows($result4)>0)
 { ?><div>
	 <div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> Folios <?php echo $librofolio4;?> <?php echo $nextfolio4;?> no asignados una o más marginaciones ya fueron asignadas a otro usuario.</strong>
</div></div>
<?php 

}elseif(mysqli_num_rows($result5)>0)
 { ?><div>
	 <div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> Folios <?php echo $librofolio5;?> <?php echo $nextfolio5;?> no asignados una o más marginaciones ya fueron asignadas a otro usuario.</strong>
</div></div>

<?php 





}else
 {

	if (empty($_POST['inicialesfolio'])){
		$errors[] = "Campos vacios.";
	} elseif (!empty($_POST['inicialesfolio'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    
		$id=intval($_POST['inicialesfolio']);
	// UPDATE data into database
		
					
	$sql = "UPDATE margi SET Iniciales1 = '$iniciales' WHERE busquedalf = '$librofolio';";
	$sql .= "UPDATE margi SET Iniciales1 = '$iniciales' WHERE busquedalf = '$nextfolio';";

	$sql .= "UPDATE margi SET Iniciales1 = '$iniciales' WHERE busquedalf = '$librofolio2';";
	$sql .= "UPDATE margi SET Iniciales1 = '$iniciales' WHERE busquedalf = '$nextfolio2';";

	$sql .= "UPDATE margi SET Iniciales1 = '$iniciales' WHERE busquedalf = '$librofolio3';";
	$sql .= "UPDATE margi SET Iniciales1 = '$iniciales' WHERE busquedalf = '$nextfolio3';";

	$sql .= "UPDATE margi SET Iniciales1 = '$iniciales' WHERE busquedalf = '$librofolio4';";
	$sql .= "UPDATE margi SET Iniciales1 = '$iniciales' WHERE busquedalf = '$nextfolio4';";

	$sql .= "UPDATE margi SET Iniciales1 = '$iniciales' WHERE busquedalf = '$librofolio5';";
	$sql .= "UPDATE margi SET Iniciales1 = '$iniciales' WHERE busquedalf = '$nextfolio5';";

	


}}

		
    // if product has been added successfully
    if (mysqli_multi_query($con,$sql)) {
        $messages[] = "El folio ".$librofolio." ".$nextfolio." ".$librofolio2." ".$nextfolio2." ".$librofolio3." ".$nextfolio3." ".$librofolio4." ".$nextfolio4." ".$librofolio5." ".$nextfolio5.", han sido asignados.";
      
    } else {
        $errors[] = "Lo sentimos, asignación de folios ".$librofolio." ".$nextfolio." ".$librofolio2." ".$nextfolio2." ".$librofolio3." ".$nextfolio3." ".$librofolio4." ".$nextfolio4." ".$librofolio5." ".$nextfolio5." fallo. Por favor, regrese y vuelva a intentarlo.";
        
    }
		
	} }else 
	{
		$errors[] = "desconocido.";
	}
	
	
	
	
if (isset($errors)){
			
			?>
						<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
				<strong><i class="fas fa-times-circle"></i> Error!</strong> 
					<?php
						 $error = $errors;
								echo $error;
							
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-check-circle"></i> ¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div></div>
				<?php
			}else  {	 ?>
<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> Libro no existe! Favor digitar el libro en uso.</strong>

	<?php	 
	 
}}
	
	
	 
	 
?>			

