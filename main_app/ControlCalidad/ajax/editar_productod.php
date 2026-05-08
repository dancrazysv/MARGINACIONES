<?php




$uapellidos = ( empty($_POST['usoA']) )   ? NULL : $_POST['usoA'];
$regimenv = ( empty($_POST['OptionRA']) )   ? NULL : $_POST['OptionRA'];
$apellidosv = ( empty($_POST['OptionAA']) )   ? NULL : $_POST['OptionAA'];





	if (empty($_POST['edit_id'])){
		$errors[] = "ID está vacío.";
	} elseif (!empty($_POST['edit_id'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_aniod"],ENT_QUOTES)));
	$Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST["edit_inid"],ENT_QUOTES)));
	$NPartida = mysqli_real_escape_string($con,(strip_tags($_POST["edit_npartidad"],ENT_QUOTES)));
	$LibroP = mysqli_real_escape_string($con,(strip_tags($_POST["edit_librod"],ENT_QUOTES)));
		
				
 
	
	$id=intval($_POST['edit_id']);
	// UPDATE data into database
			$TxtMargi1 = "Cancelase la marginación de matrimonio de los contrayentes " . $_POST['edit_el'] . " y " . $_POST['Nella'] . ", según sentencia definitiva pronunciada a las horas  minutos del día " .  $dia_B . " " . $mes_B . " " . $anio_B . ", ante " . $_POST['Nnotario'] . ", " . $optioncaso . "" . $casootro . "" . $_POST['LugarB'] . "; los contrayentes optan por el Régimen Patrimonial " . $uregimen . ", la contrayente usará los apellidos ". $uapellidos .". Alcaldía de San Salvador, " . $dia_actual . " " . $mes_actual . " " . $anio_actual.".";
		
		
		
	$sql = "UPDATE margi SET TxtMargi1 = '$TxtMargi1', AnioP = '$AnioP', LibroP = '$LibroP', NPartida = '$NPartida', Iniciales1 = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora' WHERE id = '$id'";
		
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha creado con exito";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
	
	



	
	
if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
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
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}
	
?>			