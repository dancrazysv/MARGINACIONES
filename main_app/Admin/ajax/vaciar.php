<?php
date_default_timezone_set('America/Costa_Rica');
include ("quitar_espacios.php");
include ("funcion_nombres.php");

require_once ("../conexion.php");
$libestadovaciar = ( empty($_POST['libestadovaciar']) )   ? NULL : $_POST['libestadovaciar'];

$margestadovaciar = ( empty($_POST['margestadovaciar']) )   ? NULL : $_POST['margestadovaciar'];
$estadovaciar = ( empty($_POST['estadova']) )   ? NULL : $_POST['estadova'];



// Realizamos la consulta para saber si coincide con uno de esos criterios
$sql = "select * from margi where TxtMargi1 !='' and LibroO='$libestadovaciar' and NMargi1='$margestadovaciar'";
$result = mysqli_query($con, $sql);

 if(mysqli_num_rows($result)>0)
 { 


// Realizamos la consulta para saber si coincide con uno de esos criterios
$sql = "select * from margi where LibroO='$libestadovaciar' and NMargi1='$margestadovaciar' and revestado ='$estadovaciar' ";
$result = mysqli_query($con, $sql);

 if(mysqli_num_rows($result)>0)
 { ?>
	 <div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> La marginación seleccionada no puede ser vaciada ya que ya esta concluida </strong>
<?php 
}
 else
 {


	if (empty(titleCase($_POST['margestadovaciar']))){
		$errors[] = "Datos de vacios.";
	} elseif (!empty(titleCase($_POST['margestadovaciar']))){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
 
	
	// REGISTER data into database
    $sql = "UPDATE margi SET TxtMargi1 = '', AnioP = '', LibroP = '', NPartida = '', InicialesPDF = '', FechaC = '', TipoP = '', HoraC = '', lineapdf = '', registrador = '', nmargpdf = '', cargor = '', estado = '', TipoMargi = '', revestado = '', margfin = '', seguimientogcm = '', seguimientoecm = '', seguimientoccgcm = '', seguimientoccecm = '', fechaevento = '', lugar = '' WHERE LibroO='$libestadovaciar' and NMargi1='$margestadovaciar' ";
	
		
		
		
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "Los datos de la Marginación se vaciaron correctamente";
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
		 
		 
		 
	