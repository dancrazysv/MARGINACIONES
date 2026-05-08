<?php

require_once ("../conexion.php");
$fin = "fin";
 $Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
  $idfin = ( empty($_POST['editidrev']) ) ? NULL : $_POST['editidrev'];

 $sqlfin1 = "select * from margi where Iniciales1='$Iniciales' AND id='$idfin' AND margfin=''";
$resultadofin1 = mysqli_query($con, $sqlfin1);

 if(mysqli_num_rows($resultadofin1)>0)
 { 
$fechaedicion = "";
$horaedicion = "";

include ("revoperador/opt1.php");




}



$sqlfin2 = "select * from margi where Iniciales1='$Iniciales' AND id='$idfin' AND margfin='$fin'";
$resultadofin2 = mysqli_query($con, $sqlfin2);

 if(mysqli_num_rows($resultadofin2)>0)
 { 
$fechaedicion = date('Y-m-d');
$horaedicion = date("H:i:s"); 

include ("revoperador/opt1.php");

}


?>
