<?php
date_default_timezone_set('America/Costa_Rica');
include ("quitar_espacios.php");
include ("funcion_nombres.php");

require_once ("../conexion.php");
$namepartida = ( empty($_POST['tipoagre']) )   ? NULL : $_POST['tipoagre'];
$inipartida = ( empty($_POST['tipoini']) )   ? NULL : $_POST['tipoini'];
$tipounico = ( empty($_POST['grupouni']) )   ? NULL : $_POST['grupouni'];


if ($tipounico = "1"){
$unico = "Nacimiento";
}elseif ($tipounico = "2"){
$unico = "Defunción";
}elseif ($tipounico = "3"){
$unico = "Matrimonio";
}elseif ($tipounico = "4"){
$unico = "Divorcio";
}elseif ($tipounico = "5"){
$unico = "Régimen Patrimonial";
}elseif ($tipounico = "6"){
$unico = "Unión no Matrimonial";
}elseif ($tipounico = "7"){
$unico = "Acta de Matrimonio";
}









// Realizamos la consulta para saber si coincide con uno de esos criterios
$sql = "select * from tipo_partida where nombre_partida='$namepartida' or iniciales_partida='$inipartida'";
$result = mysqli_query($con, $sql);

 if(mysqli_num_rows($result)>0)
 { ?>
	 <div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> Registro no guardado Tipo de Partida o Iniciales ya existen </strong>
<?php 
}
 else
 {


	if (empty(titleCase($_POST['tipoagre']))){
		$errors[] = "Datos vacio.";
	} elseif (!empty(titleCase($_POST['tipoagre']))){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
   
		
	
	// REGISTER data into database
    $sql = "INSERT INTO tipo_partida (nombre_partida, iniciales_partida, grupo_partida, tipo_unico) VALUE ('".Espacios($namepartida)."', '".Espacios($inipartida)."', '".Espacios($tipounico)."', '".Espacios($unico)."')";
	
		
		
		
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "El tipo de Partida se agrego correctamente.";
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
		 
		 
		 
		 
		 
		 
	