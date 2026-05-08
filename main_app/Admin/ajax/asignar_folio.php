<?php

require_once ("../conexion.php");



$libro1 = ( empty($_POST['librofolio']) )   ? NULL : $_POST['librofolio'];
$iniciales = ( empty($_POST['inicialesfolio']) )   ? NULL : $_POST['inicialesfolio'];
$folioasig = ( empty($_POST['folioasig1']) )   ? NULL : $_POST['folioasig1'];
$folioasig2 = ( empty($_POST['folioasig2']) )   ? NULL : $_POST['folioasig2'];
$folioasig3 = ( empty($_POST['folioasig3']) )   ? NULL : $_POST['folioasig3'];
$folioasig4 = ( empty($_POST['folioasig4']) )   ? NULL : $_POST['folioasig4'];
$folioasig5 = ( empty($_POST['folioasig5']) )   ? NULL : $_POST['folioasig5'];
$folioasig6 = ( empty($_POST['folioasig6']) )   ? NULL : $_POST['folioasig6'];




$guion = '-';
$librofolio = $libro1.$guion.$folioasig;
$nfolio = $folioasig+1;
$nextfolio = $libro1.$guion.$nfolio;

$librofolio2 = $libro1.$guion.$folioasig2;
$nfolio2 = $folioasig2+1;
$nextfolio2 = $libro1.$guion.$nfolio2;

$librofolio3 = $libro1.$guion.$folioasig3;
$nfolio3 = $folioasig3+1;
$nextfolio3 = $libro1.$guion.$nfolio3;

$librofolio4 = $libro1.$guion.$folioasig4;
$nfolio4 = $folioasig4+1;
$nextfolio4 = $libro1.$guion.$nfolio4;

$librofolio5 = $libro1.$guion.$folioasig5;
$nfolio5 = $folioasig5+1;
$nextfolio5 = $libro1.$guion.$nfolio5;

$librofolio6 = $libro1.$guion.$folioasig6;
$nfolio6 = $folioasig6+1;
$nextfolio6 = $libro1.$guion.$nfolio6;



if ($libro1 == "" OR $iniciales == ""){

	?>


<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> No ingreso número de libro para asignar folios</strong>

<?php

}else{


if ($folioasig != '' and $folioasig2 == '' and $folioasig3 == '' and $folioasig4 == '' and $folioasig5 == '' and $folioasig6 == ''){



//////////////asignacion folio 1
include ("folios/asignacion1.php");

}elseif ($folioasig != '' and $folioasig2 != '' and $folioasig3 == '' and $folioasig4 == '' and $folioasig5 == '' and $folioasig6 == ''){



//////////////asignacion folio 1
include ("folios/asignacion2.php");

}elseif ($folioasig != '' and $folioasig2 != '' and $folioasig3 != '' and $folioasig4 == '' and $folioasig5 == '' and $folioasig6 == ''){



//////////////asignacion folio 1
include ("folios/asignacion3.php");

}elseif ($folioasig != '' and $folioasig2 != '' and $folioasig3 != '' and $folioasig4 != '' and $folioasig5 == '' and $folioasig6 == ''){



//////////////asignacion folio 1
include ("folios/asignacion4.php");

}elseif ($folioasig != '' and $folioasig2 != '' and $folioasig3 != '' and $folioasig4 != '' and $folioasig5 != '' and $folioasig6 == ''){



//////////////asignacion folio 1
include ("folios/asignacion5.php");

}elseif ($folioasig != '' and $folioasig2 != '' and $folioasig3 != '' and $folioasig4 != '' and $folioasig5 != '' and $folioasig6 != ''){



//////////////asignacion folio 1
include ("folios/asignacion6.php");

}
else{




	?>


<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
						<strong><i class="fas fa-bell"></i> No puedes dejar casillas en blanco intercaladas, debes de rellenar casillas en correlativo</strong>

<?php





}}

?>