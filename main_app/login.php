<?php


if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
require'conexion.php';
sleep(2);
session_start();
	$mysqli->set_charset('utf8');
	$usuario = $mysqli->real_escape_string($_POST['usuariolg']);
	$pass = $mysqli->real_escape_string(md5($_POST['passlg']));
	
	if($nueva_consulta = $mysqli->prepare("Select nombre,tipo,iniciales,idpregunta,correo From usuarios Where usuario = ? AND password = ? AND estado='Activo'" )){
		$nueva_consulta->bind_param('ss', $usuario, $pass);
		$nueva_consulta->execute();
		$resultado = $nueva_consulta->get_result();
		if($resultado->num_rows == 1){
			$datos = $resultado->fetch_assoc();
			$_SESSION['usuario'] = $datos;
			echo json_encode(array('error'=>false,'tipo'=>$datos['tipo']));
			
$inicialesuser = $_SESSION['usuario']['iniciales'];
$pregunta = $_SESSION['usuario']['idpregunta'];
$correo = $_SESSION['usuario']['correo'];
$inicialesuserid = $_SESSION['usuario']['iniciales'];
$nombreusers = $_SESSION['usuario']['nombre'];
$tipousers = $_SESSION['usuario']['tipo'];
$_SESSION['usuario']['time'] = time();



			
		} else {
			echo json_encode(array('error'=>true));

			  session_unset();
        session_destroy();
		}
		$nueva_consulta->close();
		
	}
	
}



$mysqli->close();
 ?>
