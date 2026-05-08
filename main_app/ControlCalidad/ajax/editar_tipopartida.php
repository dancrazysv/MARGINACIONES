<?php
date_default_timezone_set('America/Costa_Rica');
include ("quitar_espacios.php");
include ("funcion_nombres.php");

require_once ("../conexion.php");

$namepartidaedi = ( empty($_POST['tipoagreedi']) )   ? NULL : $_POST['tipoagreedi'];
$inipartidaedi = ( empty($_POST['tipoiniedi']) )   ? NULL : $_POST['tipoiniedi'];
$tipounicoedi = ( empty($_POST['grupouniedi']) )   ? NULL : $_POST['grupouniedi'];
$idtipo = ( empty($_POST['idtipopartida']) )   ? NULL : $_POST['idtipopartida'];


if ($tipounicoedi = 1){
$unicoedi = "Nacimiento";
}elseif ($tipounicoedi = 2){
$unicoedi = "Defunción";
}elseif ($tipounicoedi = 3){
$unicoedi = "Matrimonio";
}elseif ($tipounicoedi = 4){
$unicoedi = "Divorcio";
}elseif ($tipounicoedi = 5){
$unicoedi = "Régimen Patrimonial";
}elseif ($tipounicoedi = 6){
$unicoedi = "Unión no Matrimonial";
}elseif ($tipounicoedi = 7){
$unicoedi = "Acta de Matrimonio";
}





// Realizamos la consulta para saber si coincide con uno de esos criterios
$sql = "select * from tipo_partida where nombre_partida='$namepartidaedi' or iniciales_partida='$inipartidaedi' and id !='$idtipo' ";
$result = mysqli_query($con, $sql);

 if(mysqli_num_rows($result)>0)
 { ?>
	 <div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> Registro no guardado Tipo de Partida ya existe. </strong>
<?php 
}
 else
 {


	if (empty(titleCase($_POST['idtipopartida']))){
		$errors[] = "Datos de usuario vacio.";
	} elseif (!empty(titleCase($_POST['idtipopartida']))){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code

	
	// REGISTER data into database
    $sql = "UPDATE tipo_partida SET nombre_partida = '" . Espacios($namepartidaedi) . "', iniciales_partida = '" . Espacios($inipartidaedi) . "', grupo_partida = '" . Espacios($tipounicoedi) . "', tipo_unico = '" . $unicoedi . "'  WHERE id = '$idtipo' ";
	
		
		
		
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "El Tipo de Partida se edito correctamente " . $unicoedi;
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
		 
		 
		 
		 
		 
		 
	