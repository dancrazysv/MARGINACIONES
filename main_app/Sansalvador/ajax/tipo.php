<?php

//consultar nombre de un departamento
function gettipo($con, $nik){
	$selectl = $con->prepare("SELECT `tipo` FROM tipo_marginacion WHERE codigo=?");	
	$selectl->bind_param('i', $nik);	
	$selectl->execute();
	$result = $selectl->get_result();
	$row = $result->fetch_assoc();
	$selectl->close();
if(isset($row['tipo'])){
   return $row['tipo'];
}
}

?>