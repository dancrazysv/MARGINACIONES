<?php
date_default_timezone_set('America/Costa_Rica');
include ("quitar_espacios.php");
include ("funcion_nombres.php");

require_once ("../conexion.php");
$name=titleCase($_POST['editarlugar']);

$idlugare=$_POST['IDELUGAR'];


// Realizamos la consulta para saber si coincide con uno de esos criterios
$sql = "select * from municipios where municipio='$name' and id !='$idlugare' ";
$result = mysqli_query($con, $sql);

 if(mysqli_num_rows($result)>0)
 { ?>
	 <div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> Registro no guardado lugar ya existe </strong>
<?php 
}
 else
 {


	if (empty(titleCase($_POST['IDELUGAR']))){
		$errors[] = "Datos de usuario vacio.";
	} elseif (!empty(titleCase($_POST['IDELUGAR']))){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $lnombre = mysqli_real_escape_string($con,(strip_tags(titleCase(trim($_POST['editarlugar'])),ENT_QUOTES)));
		
		$idlugares = mysqli_real_escape_string($con,(strip_tags(titleCase(trim($_POST['IDELUGAR'])),ENT_QUOTES)));
	
	// REGISTER data into database
    $sql = "UPDATE municipios SET municipio = '" . Espacios($lnombre) . "' WHERE id = '$idlugares' ";
	
		
		
		
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "El lugar se edito correctamente";
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
		 
		 
		 
		 
		 
		 
	