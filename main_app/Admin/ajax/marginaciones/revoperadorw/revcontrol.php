<?php




	if (!empty($_POST['editidrev2'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniorev2'],ENT_QUOTES)));

	$NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numrev2']),'utf-8'),ENT_QUOTES))));
	$LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librorev2']),'utf-8'),ENT_QUOTES)));
	
	
	
	
 
	
	$id=intval($_POST['editidrev2']);
	// UPDATE data into database
		

	$sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($textorevi2) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "',  TipoP = '$tiporevi2', lineapdf = 'FIRMACATAN.jpg', revestado = 'completo' WHERE id = '$id'";
		
		

	
		
    $sqlc = "select * from margi where id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 { 		
	
		
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación se ha editado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la edición de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
		
		}else{ ?>
	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

						<strong><i class="fas fa-bell"></i> La marginación esta asignada a otro usuario.</strong></div>
<?php 
	} 
		
		
						
		
		
	}
	
	



?>