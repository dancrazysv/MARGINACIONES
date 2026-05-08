<?php
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']['tipo'] == "Admin"){
		header('Location: ../../');
	}
	
else{
	
	header("Location: ../Usuario/");
	
}}
 ?>
<?php
include ("lib_fecha_textopdf.php");
$text1 = ( empty($_POST['impmargi1']) )   ? NULL : $_POST['impmargi1'];
$nmarg1 = ( empty($_POST['marg1']) )   ? NULL : $_POST['marg1'];
$anio1 = ( empty($_POST['aniop1']) )   ? NULL : $_POST['aniop1'];
$libro1 = ( empty($_POST['libp1']) )   ? NULL : $_POST['libp1'];
$npart1 = ( empty($_POST['nump1']) )   ? NULL : $_POST['nump1'];
$tipo1 = ( empty($_POST['tipm1']) )   ? NULL : $_POST['tipm1'];
$ini1 = ( empty($_POST['ini1']) )   ? NULL : $_POST['ini1'];
$lineapdf1_1 = ( empty($_POST['linea1']) )   ? NULL : $_POST['linea1'];


$lineapdf1 = "<img src='".$lineapdf1_1."' width=506 height=132>";



$registradorpdf1 = ( empty($_POST['registrador1']) )   ? NULL : $_POST['registrador1'];
$cargorpdf1 = ( empty($_POST['cargoregis1']) )   ? NULL : $_POST['cargoregis1'];


$text2 = ( empty($_POST['impmargi2']) )   ? NULL : $_POST['impmargi2'];
$nmarg2 = ( empty($_POST['marg2']) )   ? NULL : $_POST['marg2'];
$anio2 = ( empty($_POST['aniop2']) )   ? NULL : $_POST['aniop2'];
$libro2 = ( empty($_POST['libp2']) )   ? NULL : $_POST['libp2'];
$npart2 = ( empty($_POST['nump2']) )   ? NULL : $_POST['nump2'];
$tipo2 = ( empty($_POST['tipm2']) )   ? NULL : $_POST['tipm2'];
$ini2 = ( empty($_POST['ini2']) )   ? NULL : $_POST['ini2'];
$lineapdf2_1 = ( empty($_POST['linea2']) )   ? NULL : $_POST['linea2'];
$lineapdf2 = "<img src='".$lineapdf2_1."' width=506 height=132>";

$registradorpdf2 = ( empty($_POST['registrador2']) )   ? NULL : $_POST['registrador2'];
$cargorpdf2 = ( empty($_POST['cargoregis2']) )   ? NULL : $_POST['cargoregis2'];

$text3 = ( empty($_POST['impmargi3']) )   ? NULL : $_POST['impmargi3'];
$nmarg3 = ( empty($_POST['marg3']) )   ? NULL : $_POST['marg3'];
$anio3 = ( empty($_POST['aniop3']) )   ? NULL : $_POST['aniop3'];
$libro3 = ( empty($_POST['libp3']) )   ? NULL : $_POST['libp3'];
$npart3 = ( empty($_POST['nump3']) )   ? NULL : $_POST['nump3'];
$tipo3 = ( empty($_POST['tipm3']) )   ? NULL : $_POST['tipm3'];
$ini3 = ( empty($_POST['ini3']) )   ? NULL : $_POST['ini3'];
$lineapdf3_1 = ( empty($_POST['linea3']) )   ? NULL : $_POST['linea3'];
$lineapdf3 = "<img src='".$lineapdf3_1."' width=506 height=132>";



$registradorpdf3 = ( empty($_POST['registrador3']) )   ? NULL : $_POST['registrador3'];
$cargorpdf3 = ( empty($_POST['cargoregis3']) )   ? NULL : $_POST['cargoregis3'];

$text4 = ( empty($_POST['impmargi4']) )   ? NULL : $_POST['impmargi4'];
$nmarg4 = ( empty($_POST['marg4']) )   ? NULL : $_POST['marg4'];
$anio4 = ( empty($_POST['aniop4']) )   ? NULL : $_POST['aniop4'];
$libro4 = ( empty($_POST['libp4']) )   ? NULL : $_POST['libp4'];
$npart4 = ( empty($_POST['nump4']) )   ? NULL : $_POST['nump4'];
$tipo4 = ( empty($_POST['tipm4']) )   ? NULL : $_POST['tipm4'];
$ini4 = ( empty($_POST['ini4']) )   ? NULL : $_POST['ini4'];
$lineapdf4_1 = ( empty($_POST['linea4']) )   ? NULL : $_POST['linea4'];
$lineapdf4 = "<img src='".$lineapdf4_1."' width=506 height=132>";


$registradorpdf4 = ( empty($_POST['registrador4']) )   ? NULL : $_POST['registrador4'];
$cargorpdf4 = ( empty($_POST['cargoregis4']) )   ? NULL : $_POST['cargoregis4'];

$folionum = ( empty($_POST['libropdf']) )   ? NULL : $_POST['libropdf'];
$foliotext = ( empty($_POST['foliopdf']) )   ? NULL : $_POST['foliopdf'];
$encabezado = ( empty($_POST['encabezadodi']) )   ? NULL : $_POST['encabezadodi'];

$pdfmarg1 = ( empty($_POST['nmarg1']) )   ? NULL : $_POST['nmarg1'];
$pdfmarg2 = ( empty($_POST['nmarg2']) )   ? NULL : $_POST['nmarg2'];
$pdfmarg3 = ( empty($_POST['nmarg3']) )   ? NULL : $_POST['nmarg3'];
$pdfmarg4 = ( empty($_POST['nmarg4']) )   ? NULL : $_POST['nmarg4'];



if ($nmarg1 == "" and $nmarg2 == "" and $nmarg3 == "" and $nmarg4 == ""){
$nombrefolio = "0-0";	
}
if ($nmarg1 != "" and $nmarg2 == "" and $nmarg3 == "" and $nmarg4 == ""){
$nombrefolio = $nmarg1;	
}
if ($nmarg1 != "" and $nmarg2 != "" and $nmarg3 == "" and $nmarg4 == ""){
$nombrefolio = $nmarg1 . "-" . $nmarg2;	
}
if ($nmarg1 != "" and $nmarg2 == "" and $nmarg3 != "" and $nmarg4 == ""){
$nombrefolio = $nmarg1 . "-" . $nmarg3;	
}
if ($nmarg1 != "" and $nmarg2 == "" and $nmarg3 == "" and $nmarg4 != ""){
$nombrefolio = $nmarg1 . "-" . $nmarg4;	
}
if ($nmarg1 == "" and $nmarg2 != "" and $nmarg3 == "" and $nmarg4 == ""){
$nombrefolio = $nmarg2;	
}
if ($nmarg1 == "" and $nmarg2 != "" and $nmarg3 != "" and $nmarg4 == ""){
$nombrefolio = $nmarg2 . "-" . $nmarg3;	
}
if ($nmarg1 == "" and $nmarg2 != "" and $nmarg3 == "" and $nmarg4 != ""){
$nombrefolio = $nmarg2 . "-" . $nmarg4;	
}
if ($nmarg1 == "" and $nmarg2 == "" and $nmarg3 != "" and $nmarg4 == ""){
$nombrefolio = $nmarg3;	
}
if ($nmarg1 == "" and $nmarg2 == "" and $nmarg3 != "" and $nmarg4 != ""){
$nombrefolio = $nmarg3 . "-" . $nmarg4;
}
if ($nmarg1 == "" and $nmarg2 == "" and $nmarg3 == "" and $nmarg4 != ""){
$nombrefolio = $nmarg4;	
}
if ($nmarg1 != "" and $nmarg2 != "" and $nmarg3 != "" and $nmarg4 == ""){
$nombrefolio = $nmarg1 . "-" . $nmarg3;	
}
if ($nmarg1 != "" and $nmarg2 != "" and $nmarg3 == "" and $nmarg4 != ""){
$nombrefolio = $nmarg1 . "-" . $nmarg4;	
}
if ($nmarg1 != "" and $nmarg2 != "" and $nmarg3 != "" and $nmarg4 != ""){
$nombrefolio = $nmarg1 . "-" . $nmarg4;	
}
if ($nmarg1 == "" and $nmarg2 != "" and $nmarg3 != "" and $nmarg4 != ""){
$nombrefolio = $nmarg2 . "-" . $nmarg4;	
}
if ($nmarg1 != "" and $nmarg2 == "" and $nmarg3 != "" and $nmarg4 != ""){
$nombrefolio = $nmarg1 . "-" . $nmarg4;	
}


$foliotext1 = numtoletrasPDF($foliotext);
// Include autoloader 



  if ($foliotext%2==0){
  if ($encabezado == 'encabezadopdfsi' and $pdfmarg1 == 'nmarg1' and $pdfmarg2 == 'nmarg2' and $pdfmarg3 == 'nmarg3' and $pdfmarg4 == 'nmarg4' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
       @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2><img src=sep_log.png></td><td rowspan=2><img src=sep_log.png></td><td rowspan=2><img src=sep_log.png></td><td width=280 rowspan=2><img src=logo_pb.png with=350px height=53px></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top>LIBRO DE MARGINACIONES:&nbsp;<b><font size=+1>'.$folionum.'</font></b></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td></tr>
<tr><td align=left valign=top>FOLIO:&nbsp;'.$foliotext1.'</td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=left>
<tbody>
<tr>

	
<td width=20 align=right valign=top><b>'.$nmarg1.'</b> <br/>'.$tipo1.'<br/>'.$anio1.'<br/>'.$libro1.'<br/> '.$npart1.'<br/>'.$ini1.'<br/></td>
<td width=10><img src=sep_marg.png></td>
<td width=350 valign=top align=justify>'.$text1.'<center> '.$lineapdf1.'</center></td>	
	
	</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

<td width=20 align=right valign=top><b>'.$nmarg2.'</b> <br/>'.$tipo2.'<br/>'.$anio2.'<br/>'.$libro2.'<br/> '.$npart2.'<br/>'.$ini2.'<br/></td>
<td><img src=sep_marg.png></td>	
	<td width=350 valign=top align=justify>'.$text2.'<center> '.$lineapdf2.'</center></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


	<td width=20 align=right valign=top><b>'.$nmarg3.'</b> <br/>'.$tipo3.'<br/>'.$anio3.'<br/>'.$libro3.'<br/> '.$npart3.'<br/>'.$ini3.'<br/></td>
<td><img src=sep_marg.png></td>	
	
	<td width=350 valign=top align=justify>'.$text3.'<center> '.$lineapdf3.'</center></td>
	</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

	
	<td width=20 align=right valign=top><b>'.$nmarg4.'</b> <br/>'.$tipo4.'<br/>'.$anio4.'<br/>'.$libro4.'<br/> '.$npart4.'<br/>'.$ini4.'<br/></td>
<td><img src=sep_marg.png></td>
	
	<td width=350 valign=top align=justify>'.$text4.'<center> '.$lineapdf4.'</center></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}
	  
	  
	  
	  
	  
	
if ($encabezado == 'encabezadopdfsi' and $pdfmarg1 == 'nmarg1' and $pdfmarg2 == '' and $pdfmarg3 == '' and $pdfmarg4 == '' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
 @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2><img src=sep_log.png></td><td rowspan=2><img src=sep_log.png></td><td rowspan=2><img src=sep_log.png></td><td width=280 rowspan=2><img src=logo_pb.png with=350px height=53px></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top>LIBRO DE MARGINACIONES:&nbsp;<b><font size=+1>'.$folionum.'</font></b></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td></tr>
<tr><td align=left valign=top>FOLIO:&nbsp;'.$foliotext1.'</td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=left>
<tbody>
<tr>

	
<td width=20 align=right valign=top><b>'.$nmarg1.'</b> <br/>'.$tipo1.'<br/>'.$anio1.'<br/>'.$libro1.'<br/> '.$npart1.'<br/>'.$ini1.'<br/></td>
<td width=10><img src=sep_marg.png></td>
<td width=350 valign=top align=justify>'.$text1.'<center> '.$lineapdf1.'</center></td>	
	
	</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
<td><img src=sep_marg.png></td>	
	<td width=350 valign=top align=justify><p>&nbsp;&nbsp;&nbsp;&nbsp;</p> <p>&nbsp;&nbsp;&nbsp;&nbsp;</p><p align=center><br/><br/></p></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


	<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
<td><img src=sep_marg.png></td>	
	
	<td width=350 valign=top align=justify><p>&nbsp;&nbsp;&nbsp;&nbsp;</p> <p>&nbsp;&nbsp;&nbsp;&nbsp;</p><p align=center><br/><br/></p></td>
	</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

	
	<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
<td><img src=sep_marg.png></td>
	
	<td width=350 valign=top align=justify><p>&nbsp;&nbsp;&nbsp;&nbsp;</p> <p>&nbsp;&nbsp;&nbsp;&nbsp;</p><p align=center><br/><br/></p></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}	
	if ($encabezado == 'encabezadopdfsi' and $pdfmarg1 == '' and $pdfmarg2 == '' and $pdfmarg3 == '' and $pdfmarg4 == 'nmarg4' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
        @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2><img src=sep_log.png></td><td rowspan=2><img src=sep_log.png></td><td rowspan=2><img src=sep_log.png></td><td width=280 rowspan=2><img src=logo_pb.png with=350px height=53px></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top>LIBRO DE MARGINACIONES:&nbsp;<b><font size=+1>'.$folionum.'</font></b></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td></tr>
<tr><td align=left valign=top>FOLIO:&nbsp;'.$foliotext1.'</td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=left>
<tbody>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td width=10><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>



</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg4.'</b> <br/>'.$tipo4.'<br/>'.$anio4.'<br/>'.$libro4.'<br/> '.$npart4.'<br/>'.$ini4.'<br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text4.'<center> '.$lineapdf4.'</center></td>

</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == 'encabezadopdfsi' and $pdfmarg1 == '' and $pdfmarg2 == '' and $pdfmarg3 == '' and $pdfmarg4 == '' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
        @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2><img src=sep_log.png></td><td rowspan=2><img src=sep_log.png></td><td rowspan=2><img src=sep_log.png></td><td width=280 rowspan=2><img src=logo_pb.png with=350px height=53px></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top>LIBRO DE MARGINACIONES:&nbsp;<b><font size=+1>'.$folionum.'</font></b></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td></tr>
<tr><td align=left valign=top>FOLIO:&nbsp;'.$foliotext1.'</td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=left>
<tbody>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td width=10><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>



</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

	<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify><p>&nbsp;&nbsp;&nbsp;&nbsp;</p> <p>&nbsp;&nbsp;&nbsp;&nbsp;</p><p align=center><br/><br/></p></td>

</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == 'encabezadopdfsi' and $pdfmarg1 == '' and $pdfmarg2 == '' and $pdfmarg3 == 'nmarg3' and $pdfmarg4 == '' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
         @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2><img src=sep_log.png></td><td rowspan=2><img src=sep_log.png></td><td rowspan=2><img src=sep_log.png></td><td width=280 rowspan=2><img src=logo_pb.png with=350px height=53px></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top>LIBRO DE MARGINACIONES:&nbsp;<b><font size=+1>'.$folionum.'</font></b></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td></tr>
<tr><td align=left valign=top>FOLIO:&nbsp;'.$foliotext1.'</td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=left>
<tbody>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td width=10><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>



</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

<td width=20 align=right valign=top><b>'.$nmarg3.'</b> <br/>'.$tipo3.'<br/>'.$anio3.'<br/>'.$libro3.'<br/> '.$npart3.'<br/>'.$ini3.'<br/></td><td><img src=sep_marg.png></td>	<td width=350 valign=top align=justify>'.$text3.'<center> '.$lineapdf3.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == 'encabezadopdfsi' and $pdfmarg1 == '' and $pdfmarg2 == 'nmarg2' and $pdfmarg3 == '' and $pdfmarg4 == '' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
    @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2><img src=sep_log.png></td><td rowspan=2><img src=sep_log.png></td><td rowspan=2><img src=sep_log.png></td><td width=280 rowspan=2><img src=logo_pb.png with=350px height=53px></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top>LIBRO DE MARGINACIONES:&nbsp;<b><font size=+1>'.$folionum.'</font></b></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td></tr>
<tr><td align=left valign=top>FOLIO:&nbsp;'.$foliotext1.'</td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=left>
<tbody>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td width=10><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>



</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

<td width=20 align=right valign=top><b>'.$nmarg2.'</b> <br/>'.$tipo2.'<br/>'.$anio2.'<br/>'.$libro2.'<br/> '.$npart2.'<br/>'.$ini2.'<br/></td><td><img src=sep_marg.png></td>	<td width=350 valign=top align=justify>'.$text2.'<center> '.$lineapdf2.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == 'encabezadopdfsi' and $pdfmarg1 == 'nmarg1' and $pdfmarg2 == 'nmarg2' and $pdfmarg3 == '' and $pdfmarg4 == '' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
        @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2><img src=sep_log.png></td><td rowspan=2><img src=sep_log.png></td><td rowspan=2><img src=sep_log.png></td><td width=280 rowspan=2><img src=logo_pb.png with=350px height=53px></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top>LIBRO DE MARGINACIONES:&nbsp;<b><font size=+1>'.$folionum.'</font></b></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td></tr>
<tr><td align=left valign=top>FOLIO:&nbsp;'.$foliotext1.'</td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=left>
<tbody>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg1.'</b> <br/>'.$tipo1.'<br/>'.$anio1.'<br/>'.$libro1.'<br/> '.$npart1.'<br/>'.$ini1.'<br/></td><td width=10><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text1.'<center> '.$lineapdf1.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg2.'</b> <br/>'.$tipo2.'<br/>'.$anio2.'<br/>'.$libro2.'<br/> '.$npart2.'<br/>'.$ini2.'<br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text2.'<center> '.$lineapdf2.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == 'encabezadopdfsi' and $pdfmarg1 == 'nmarg1' and $pdfmarg2 == 'nmarg2' and $pdfmarg3 == 'nmarg3' and $pdfmarg4 == '' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
       @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2><img src=sep_log.png></td><td rowspan=2><img src=sep_log.png></td><td rowspan=2><img src=sep_log.png></td><td width=280 rowspan=2><img src=logo_pb.png with=350px height=53px></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top>LIBRO DE MARGINACIONES:&nbsp;<b><font size=+1>'.$folionum.'</font></b></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td></tr>
<tr><td align=left valign=top>FOLIO:&nbsp;'.$foliotext1.'</td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=left>
<tbody>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg1.'</b> <br/>'.$tipo1.'<br/>'.$anio1.'<br/>'.$libro1.'<br/> '.$npart1.'<br/>'.$ini1.'<br/></td><td width=10><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text1.'<center> '.$lineapdf1.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg2.'</b> <br/>'.$tipo2.'<br/>'.$anio2.'<br/>'.$libro2.'<br/> '.$npart2.'<br/>'.$ini2.'<br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text2.'<center> '.$lineapdf2.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg3.'</b> <br/>'.$tipo3.'<br/>'.$anio3.'<br/>'.$libro3.'<br/> '.$npart3.'<br/>'.$ini3.'<br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text3.'<center> '.$lineapdf3.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == 'encabezadopdfsi' and $pdfmarg1 == 'nmarg1' and $pdfmarg2 == '' and $pdfmarg3 == 'nmarg3' and $pdfmarg4 == 'nmarg4' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
        @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2><img src=sep_log.png></td><td rowspan=2><img src=sep_log.png></td><td rowspan=2><img src=sep_log.png></td><td width=280 rowspan=2><img src=logo_pb.png with=350px height=53px></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top>LIBRO DE MARGINACIONES:&nbsp;<b><font size=+1>'.$folionum.'</font></b></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td></tr>
<tr><td align=left valign=top>FOLIO:&nbsp;'.$foliotext1.'</td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=left>
<tbody>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg1.'</b> <br/>'.$tipo1.'<br/>'.$anio1.'<br/>'.$libro1.'<br/> '.$npart1.'<br/>'.$ini1.'<br/></td><td width=10><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text1.'<center> '.$lineapdf1.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg3.'</b> <br/>'.$tipo3.'<br/>'.$anio3.'<br/>'.$libro3.'<br/> '.$npart3.'<br/>'.$ini3.'<br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text3.'<center> '.$lineapdf3.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg4.'</b> <br/>'.$tipo4.'<br/>'.$anio4.'<br/>'.$libro4.'<br/> '.$npart4.'<br/>'.$ini4.'<br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text4.'<center> '.$lineapdf4.'</center></td>

</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == 'encabezadopdfsi' and $pdfmarg1 == 'nmarg1' and $pdfmarg2 == '' and $pdfmarg3 == 'nmarg3' and $pdfmarg4 == '' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
       @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font">
<tr><td rowspan=2><img src=sep_log.png></td><td rowspan=2><img src=sep_log.png></td><td rowspan=2><img src=sep_log.png></td><td width=280 rowspan=2><img src=logo_pb.png with=350px height=53px></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top>LIBRO DE MARGINACIONES:&nbsp;<b><font size=+1>'.$folionum.'</font></b></td></tr>
<tr><td align=left valign=top>FOLIO:&nbsp;'.$foliotext1.'</td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>

<table width=475 border=0 class="joti-font" align=left>
<tbody>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg1.'</b> <br/>'.$tipo1.'<br/>'.$anio1.'<br/>'.$libro1.'<br/> '.$npart1.'<br/>'.$ini1.'<br/></td><td width=10><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text1.'<center> '.$lineapdf1.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg3.'</b> <br/>'.$tipo3.'<br/>'.$anio3.'<br/>'.$libro3.'<br/> '.$npart3.'<br/>'.$ini3.'<br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text3.'<center> '.$lineapdf3.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

	<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify><p>&nbsp;&nbsp;&nbsp;&nbsp;</p> <p>&nbsp;&nbsp;&nbsp;&nbsp;</p><p align=center><br/><br/></p></td>

</tr>
</tbody>
</table>

				</body>
</html>';
	}
	if ($encabezado == 'encabezadopdfsi' and $pdfmarg1 == 'nmarg1' and $pdfmarg2 == '' and $pdfmarg3 == '' and $pdfmarg4 == 'nmarg4' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
       @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2><img src=sep_log.png></td><td rowspan=2><img src=sep_log.png></td><td rowspan=2><img src=sep_log.png></td><td width=280 rowspan=2><img src=logo_pb.png with=350px height=53px></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top>LIBRO DE MARGINACIONES:&nbsp;<b><font size=+1>'.$folionum.'</font></b></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td></tr>
<tr><td align=left valign=top>FOLIO:&nbsp;'.$foliotext1.'</td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=left>
<tbody>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg1.'</b> <br/>'.$tipo1.'<br/>'.$anio1.'<br/>'.$libro1.'<br/> '.$npart1.'<br/>'.$ini1.'<br/></td><td width=10><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text1.'<center> '.$lineapdf1.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>



<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

<td width=20 align=right valign=top><b>'.$nmarg4.'</b> <br/>'.$tipo4.'<br/>'.$anio4.'<br/>'.$libro4.'<br/> '.$npart4.'<br/>'.$ini4.'<br/></td><td><img src=sep_marg.png></td>	
<td width=350 valign=top align=justify>'.$text4.'<center> '.$lineapdf4.'</center></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == 'encabezadopdfsi' and $pdfmarg1 == '' and $pdfmarg2 == 'nmarg2' and $pdfmarg3 == 'nmarg3' and $pdfmarg4 == 'nmarg4' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
  @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2><img src=sep_log.png></td><td rowspan=2><img src=sep_log.png></td><td rowspan=2><img src=sep_log.png></td><td width=280 rowspan=2><img src=logo_pb.png with=350px height=53px></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top>LIBRO DE MARGINACIONES:&nbsp;<b><font size=+1>'.$folionum.'</font></b></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td></tr>
<tr><td align=left valign=top>FOLIO:&nbsp;'.$foliotext1.'</td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=left>
<tbody>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td width=10><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>



</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg2.'</b> <br/>'.$tipo2.'<br/>'.$anio2.'<br/>'.$libro2.'<br/> '.$npart2.'<br/>'.$ini2.'<br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text2.'<center> '.$lineapdf2.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg3.'</b> <br/>'.$tipo3.'<br/>'.$anio3.'<br/>'.$libro3.'<br/> '.$npart3.'<br/>'.$ini3.'<br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text3.'<center> '.$lineapdf3.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

<td width=20 align=right valign=top><b>'.$nmarg4.'</b> <br/>'.$tipo4.'<br/>'.$anio4.'<br/>'.$libro4.'<br/> '.$npart4.'<br/>'.$ini4.'<br/></td><td><img src=sep_marg.png></td>	<td width=350 valign=top align=justify>'.$text4.'<center> '.$lineapdf4.'</center></td>

</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == 'encabezadopdfsi' and $pdfmarg1 == '' and $pdfmarg2 == 'nmarg2' and $pdfmarg3 == 'nmarg3' and $pdfmarg4 == '' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
         @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2><img src=sep_log.png></td><td rowspan=2><img src=sep_log.png></td><td rowspan=2><img src=sep_log.png></td><td width=280 rowspan=2><img src=logo_pb.png with=350px height=53px></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top>LIBRO DE MARGINACIONES:&nbsp;<b><font size=+1>'.$folionum.'</font></b></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td></tr>
<tr><td align=left valign=top>FOLIO:&nbsp;'.$foliotext1.'</td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=left>
<tbody>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td width=10><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>



</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg2.'</b> <br/>'.$tipo2.'<br/>'.$anio2.'<br/>'.$libro2.'<br/> '.$npart2.'<br/>'.$ini2.'<br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text2.'<center> '.$lineapdf2.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

<td width=20 align=right valign=top><b>'.$nmarg3.'</b> <br/>'.$tipo3.'<br/>'.$anio3.'<br/>'.$libro3.'<br/> '.$npart3.'<br/>'.$ini3.'<br/></td><td><img src=sep_marg.png></td>	<td width=350 valign=top align=justify>'.$text3.'<center> '.$lineapdf3.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == 'encabezadopdfsi' and $pdfmarg1 == '' and $pdfmarg2 == 'nmarg2' and $pdfmarg3 == '' and $pdfmarg4 == 'nmarg4' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
      @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2><img src=sep_log.png></td><td rowspan=2><img src=sep_log.png></td><td rowspan=2><img src=sep_log.png></td><td width=280 rowspan=2><img src=logo_pb.png with=350px height=53px></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top>LIBRO DE MARGINACIONES:&nbsp;<b><font size=+1>'.$folionum.'</font></b></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td></tr>
<tr><td align=left valign=top>FOLIO:&nbsp;'.$foliotext1.'</td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=left>
<tbody>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td width=10><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>



</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

<td width=20 align=right valign=top><b>'.$nmarg2.'</b> <br/>'.$tipo2.'<br/>'.$anio2.'<br/>'.$libro2.'<br/> '.$npart2.'<br/>'.$ini2.'<br/></td><td><img src=sep_marg.png></td>	<td width=350 valign=top align=justify>'.$text2.'<center> '.$lineapdf2.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

<td width=20 align=right valign=top><b>'.$nmarg4.'</b> <br/>'.$tipo4.'<br/>'.$anio4.'<br/>'.$libro4.'<br/> '.$npart4.'<br/>'.$ini4.'<br/></td><td><img src=sep_marg.png></td>	<td width=350 valign=top align=justify>'.$text4.'<center> '.$lineapdf4.'</center></td>

</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == 'encabezadopdfsi' and $pdfmarg1 == '' and $pdfmarg2 == '' and $pdfmarg3 == 'nmarg3' and $pdfmarg4 == 'nmarg4' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
       @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2><img src=sep_log.png></td><td rowspan=2><img src=sep_log.png></td><td rowspan=2><img src=sep_log.png></td><td width=280 rowspan=2><img src=logo_pb.png with=350px height=53px></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top>LIBRO DE MARGINACIONES:&nbsp;<b><font size=+1>'.$folionum.'</font></b></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td></tr>
<tr><td align=left valign=top>FOLIO:&nbsp;'.$foliotext1.'</td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=left>
<tbody>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td width=10><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>



</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td>td width=350 valign=top align=justify></td>


</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg3.'</b> <br/>'.$tipo3.'<br/>'.$anio3.'<br/>'.$libro3.'<br/> '.$npart3.'<br/>'.$ini3.'<br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text3.'<center> '.$lineapdf3.'</center></td>

</tr>
<tr>

<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg4.'</b> <br/>'.$tipo4.'<br/>'.$anio4.'<br/>'.$libro4.'<br/> '.$npart4.'<br/>'.$ini4.'<br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text4.'<center> '.$lineapdf4.'</center></td>

</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == 'encabezadopdfsi' and $pdfmarg1 == 'nmarg1' and $pdfmarg2 == 'nmarg2' and $pdfmarg3 == '' and $pdfmarg4 == 'nmarg4' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
         @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2><img src=sep_log.png></td><td rowspan=2><img src=sep_log.png></td><td rowspan=2><img src=sep_log.png></td><td width=280 rowspan=2><img src=logo_pb.png with=350px height=53px></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top>LIBRO DE MARGINACIONES:&nbsp;<b><font size=+1>'.$folionum.'</font></b></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td></tr>
<tr><td align=left valign=top>FOLIO:&nbsp;'.$foliotext1.'</td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=left>
<tbody>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg1.'</b> <br/>'.$tipo1.'<br/>'.$anio1.'<br/>'.$libro1.'<br/> '.$npart1.'<br/>'.$ini1.'<br/></td><td width=10><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text1.'<center> '.$lineapdf1.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

<td width=20 align=right valign=top><b>'.$nmarg2.'</b> <br/>'.$tipo2.'<br/>'.$anio2.'<br/>'.$libro2.'<br/> '.$npart2.'<br/>'.$ini2.'<br/></td><td><img src=sep_marg.png></td>	<td width=350 valign=top align=justify>'.$text2.'<center> '.$lineapdf2.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

<td width=20 align=right valign=top><b>'.$nmarg4.'</b> <br/>'.$tipo4.'<br/>'.$anio4.'<br/>'.$libro4.'<br/> '.$npart4.'<br/>'.$ini4.'<br/></td><td><img src=sep_marg.png></td>	<td width=350 valign=top align=justify>'.$text4.'<center> '.$lineapdf4.'</center></td>

</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == '' and $pdfmarg1 == 'nmarg1' and $pdfmarg2 == 'nmarg2' and $pdfmarg3 == 'nmarg3' and $pdfmarg4 == 'nmarg4' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
       @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font">
<tr><td width=200 rowspan=2><img src=logo_pb_b.png></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top></td></tr>
<tr><td align=left valign=top></td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=left>
<tbody>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg1.'</b> <br/>'.$tipo1.'<br/>'.$anio1.'<br/>'.$libro1.'<br/> '.$npart1.'<br/>'.$ini1.'<br/></td><td width=10><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text1.'<center> '.$lineapdf1.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

<td width=20 align=right valign=top><b>'.$nmarg2.'</b> <br/>'.$tipo2.'<br/>'.$anio2.'<br/>'.$libro2.'<br/> '.$npart2.'<br/>'.$ini2.'<br/></td><td><img src=sep_marg.png></td>	<td width=350 valign=top align=justify>'.$text2.'<center> '.$lineapdf2.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg3.'</b> <br/>'.$tipo3.'<br/>'.$anio3.'<br/>'.$libro3.'<br/> '.$npart3.'<br/>'.$ini3.'<br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text3.'<center> '.$lineapdf3.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg4.'</b> <br/>'.$tipo4.'<br/>'.$anio4.'<br/>'.$libro4.'<br/> '.$npart4.'<br/>'.$ini4.'<br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text4.'<center> '.$lineapdf4.'</center></td>

</tr>
</tbody>
</table>
				</body>
</html>';
	}
	
if ($encabezado == '' and $pdfmarg1 == 'nmarg1' and $pdfmarg2 == '' and $pdfmarg3 == '' and $pdfmarg4 == '' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
      @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font">
<tr><td width=200 rowspan=2><img src=logo_pb_b.png></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top></td></tr>
<tr><td align=left valign=top></td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=left>
<tbody>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg1.'</b> <br/>'.$tipo1.'<br/>'.$anio1.'<br/>'.$libro1.'<br/> '.$npart1.'<br/>'.$ini1.'<br/></td><td width=10><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text1.'<center> '.$lineapdf1.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
</tbody>
</table>
				</body>
</html>';
	}	
	if ($encabezado == '' and $pdfmarg1 == '' and $pdfmarg2 == '' and $pdfmarg3 == '' and $pdfmarg4 == 'nmarg4' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
 @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font">
<tr><td width=200 rowspan=2><img src=logo_pb_b.png></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top></td></tr>
<tr><td align=left valign=top></td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=left>
<tbody>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td width=10><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>



</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg4.'</b> <br/>'.$tipo4.'<br/>'.$anio4.'<br/>'.$libro4.'<br/> '.$npart4.'<br/>'.$ini4.'<br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text4.'<center> '.$lineapdf4.'</center></td>

</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == '' and $pdfmarg1 == '' and $pdfmarg2 == '' and $pdfmarg3 == '' and $pdfmarg4 == '' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
         @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font">
<tr><td width=200 rowspan=2><img src=logo_pb_b.png></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top></td></tr>
<tr><td align=left valign=top></td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=left>
<tbody>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td width=10><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>



</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == '' and $pdfmarg1 == '' and $pdfmarg2 == '' and $pdfmarg3 == 'nmarg3' and $pdfmarg4 == '' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
         @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font">
<tr><td width=200 rowspan=2><img src=logo_pb_b.png></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top></td></tr>
<tr><td align=left valign=top></td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=left>
<tbody>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td width=10><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>



</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg3.'</b> <br/>'.$tipo3.'<br/>'.$anio3.'<br/>'.$libro3.'<br/> '.$npart3.'<br/>'.$ini3.'<br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text3.'<center> '.$lineapdf3.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == '' and $pdfmarg1 == '' and $pdfmarg2 == 'nmarg2' and $pdfmarg3 == '' and $pdfmarg4 == '' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
     @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font">
<tr><td width=200 rowspan=2><img src=logo_pb_b.png></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top></td></tr>
<tr><td align=left valign=top></td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=left>
<tbody>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td width=10><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>



</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg2.'</b> <br/>'.$tipo2.'<br/>'.$anio2.'<br/>'.$libro2.'<br/> '.$npart2.'<br/>'.$ini2.'<br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text2.'<center> '.$lineapdf2.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == '' and $pdfmarg1 == 'nmarg1' and $pdfmarg2 == 'nmarg2' and $pdfmarg3 == '' and $pdfmarg4 == '' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
        @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font">
<tr><td width=200 rowspan=2><img src=logo_pb_b.png></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top></td></tr>
<tr><td align=left valign=top></td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=left>
<tbody>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg1.'</b> <br/>'.$tipo1.'<br/>'.$anio1.'<br/>'.$libro1.'<br/> '.$npart1.'<br/>'.$ini1.'<br/></td><td width=10><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text1.'<center> '.$lineapdf1.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>

<td>&nbsp;</td>
</tr>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg2.'</b> <br/>'.$tipo2.'<br/>'.$anio2.'<br/>'.$libro2.'<br/> '.$npart2.'<br/>'.$ini2.'<br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text2.'<center> '.$lineapdf2.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == '' and $pdfmarg1 == 'nmarg1' and $pdfmarg2 == 'nmarg2' and $pdfmarg3 == 'nmarg3' and $pdfmarg4 == '' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
      @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font">
<tr><td width=200 rowspan=2><img src=logo_pb_b.png></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top></td></tr>
<tr><td align=left valign=top></td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=left>
<tbody>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg1.'</b> <br/>'.$tipo1.'<br/>'.$anio1.'<br/>'.$libro1.'<br/> '.$npart1.'<br/>'.$ini1.'<br/></td><td width=10><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text1.'<center> '.$lineapdf1.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

<td width=20 align=right valign=top><b>'.$nmarg2.'</b> <br/>'.$tipo2.'<br/>'.$anio2.'<br/>'.$libro2.'<br/> '.$npart2.'<br/>'.$ini2.'<br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text2.'<center> '.$lineapdf2.'</center></td>	

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg3.'</b> <br/>'.$tipo3.'<br/>'.$anio3.'<br/>'.$libro3.'<br/> '.$npart3.'<br/>'.$ini3.'<br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text3.'<center> '.$lineapdf3.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == '' and $pdfmarg1 == 'nmarg1' and $pdfmarg2 == '' and $pdfmarg3 == 'nmarg3' and $pdfmarg4 == 'nmarg4' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
  @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font">
<tr><td width=200 rowspan=2><img src=logo_pb_b.png></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top></td></tr>
<tr><td align=left valign=top></td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=left>
<tbody>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg1.'</b> <br/>'.$tipo1.'<br/>'.$anio1.'<br/>'.$libro1.'<br/> '.$npart1.'<br/>'.$ini1.'<br/></td><td width=10><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text1.'<center> '.$lineapdf1.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg3.'</b> <br/>'.$tipo3.'<br/>'.$anio3.'<br/>'.$libro3.'<br/> '.$npart3.'<br/>'.$ini3.'<br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text3.'<center> '.$lineapdf3.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg4.'</b> <br/>'.$tipo4.'<br/>'.$anio4.'<br/>'.$libro4.'<br/> '.$npart4.'<br/>'.$ini4.'<br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text4.'<center> '.$lineapdf4.'</center></td>

</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == '' and $pdfmarg1 == 'nmarg1' and $pdfmarg2 == '' and $pdfmarg3 == 'nmarg3' and $pdfmarg4 == '' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
        @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font">
<tr><td width=200 rowspan=2><img src=logo_pb_b.png></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top></td></tr>
<tr><td align=left valign=top></td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=left>
<tbody>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg1.'</b> <br/>'.$tipo1.'<br/>'.$anio1.'<br/>'.$libro1.'<br/> '.$npart1.'<br/>'.$ini1.'<br/></td><td width=10><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text1.'<center> '.$lineapdf1.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

<td width=20 align=right valign=top><b>'.$nmarg3.'</b> <br/>'.$tipo3.'<br/>'.$anio3.'<br/>'.$libro3.'<br/> '.$npart3.'<br/>'.$ini3.'<br/></td><td><img src=sep_marg.png></td>	<td width=350 valign=top align=justify>'.$text3.'<center> '.$lineapdf3.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == '' and $pdfmarg1 == 'nmarg1' and $pdfmarg2 == '' and $pdfmarg3 == '' and $pdfmarg4 == 'nmarg4' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
    @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font">
<tr><td width=200 rowspan=2><img src=logo_pb_b.png></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top></td></tr>
<tr><td align=left valign=top></td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=left>
<tbody>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg1.'</b> <br/>'.$tipo1.'<br/>'.$anio1.'<br/>'.$libro1.'<br/> '.$npart1.'<br/>'.$ini1.'<br/></td><td width=10><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text1.'<center> '.$lineapdf1.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

<td width=20 align=right valign=top><b>'.$nmarg4.'</b> <br/>'.$tipo4.'<br/>'.$anio4.'<br/>'.$libro4.'<br/> '.$npart4.'<br/>'.$ini4.'<br/></td><td><img src=sep_marg.png></td>	<td width=350 valign=top align=justify>'.$text4.'<center> '.$lineapdf4.'</center></td>

</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == '' and $pdfmarg1 == '' and $pdfmarg2 == 'nmarg2' and $pdfmarg3 == 'nmarg3' and $pdfmarg4 == 'nmarg4' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
     @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font">
<tr><td width=200 rowspan=2><img src=logo_pb_b.png></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top></td></tr>
<tr><td align=left valign=top></td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=left>
<tbody>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td width=10><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>



</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg2.'</b> <br/>'.$tipo2.'<br/>'.$anio2.'<br/>'.$libro2.'<br/> '.$npart2.'<br/>'.$ini2.'<br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text2.'<center> '.$lineapdf2.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg3.'</b> <br/>'.$tipo3.'<br/>'.$anio3.'<br/>'.$libro3.'<br/> '.$npart3.'<br/>'.$ini3.'<br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text3.'<center> '.$lineapdf3.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg4.'</b> <br/>'.$tipo4.'<br/>'.$anio4.'<br/>'.$libro4.'<br/> '.$npart4.'<br/>'.$ini4.'<br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text4.'<center> '.$lineapdf4.'</center></td>

</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == '' and $pdfmarg1 == '' and $pdfmarg2 == 'nmarg2' and $pdfmarg3 == 'nmarg3' and $pdfmarg4 == '' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
      @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font">
<tr><td width=200 rowspan=2><img src=logo_pb_b.png></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top></td></tr>
<tr><td align=left valign=top></td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=left>
<tbody>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td width=10><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>



</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

<td width=20 align=right valign=top><b>'.$nmarg2.'</b> <br/>'.$tipo2.'<br/>'.$anio2.'<br/>'.$libro2.'<br/> '.$npart2.'<br/>'.$ini2.'<br/></td><td><img src=sep_marg.png></td>	<td width=350 valign=top align=justify>'.$text2.'<center> '.$lineapdf2.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg3.'</b> <br/>'.$tipo3.'<br/>'.$anio3.'<br/>'.$libro3.'<br/> '.$npart3.'<br/>'.$ini3.'<br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text3.'<center> '.$lineapdf3.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == '' and $pdfmarg1 == '' and $pdfmarg2 == 'nmarg2' and $pdfmarg3 == '' and $pdfmarg4 == 'nmarg4' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
         @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font">
<tr><td width=200 rowspan=2><img src=logo_pb_b.png></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top></td></tr>
<tr><td align=left valign=top></td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=left>
<tbody>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td width=10><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>



</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg2.'</b> <br/>'.$tipo2.'<br/>'.$anio2.'<br/>'.$libro2.'<br/> '.$npart2.'<br/>'.$ini2.'<br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text2.'<center> '.$lineapdf2.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg4.'</b> <br/>'.$tipo4.'<br/>'.$anio4.'<br/>'.$libro4.'<br/> '.$npart4.'<br/>'.$ini4.'<br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text4.'<center> '.$lineapdf4.'</center></td>

</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == '' and $pdfmarg1 == '' and $pdfmarg2 == '' and $pdfmarg3 == 'nmarg3' and $pdfmarg4 == 'nmarg4' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
     @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font">
<tr><td width=200 rowspan=2><img src=logo_pb_b.png></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top></td></tr>
<tr><td align=left valign=top></td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=left>
<tbody>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td width=10><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>



</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg3.'</b> <br/>'.$tipo3.'<br/>'.$anio3.'<br/>'.$libro3.'<br/> '.$npart3.'<br/>'.$ini3.'<br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text3.'<center> '.$lineapdf3.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg4.'</b> <br/>'.$tipo4.'<br/>'.$anio4.'<br/>'.$libro4.'<br/> '.$npart4.'<br/>'.$ini4.'<br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text4.'<center> '.$lineapdf4.'</center></td>

</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == '' and $pdfmarg1 == 'nmarg1' and $pdfmarg2 == 'nmarg2' and $pdfmarg3 == '' and $pdfmarg4 == 'nmarg4' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
     @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font">
<tr><td width=200 rowspan=2><img src=logo_pb_b.png></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top></td></tr>
<tr><td align=left valign=top></td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=left>
<tbody>
<tr>

	<td width=20 align=right valign=top><b>'.$nmarg1.'</b> <br/>'.$tipo1.'<br/>'.$anio1.'<br/>'.$libro1.'<br/> '.$npart1.'<br/>'.$ini1.'<br/></td><td width=10><img src=sep_marg.png></td><td width=350 valign=top align=justify>'.$text1.'<center> '.$lineapdf1.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

<td width=20 align=right valign=top><b>'.$nmarg2.'</b> <br/>'.$tipo2.'<br/>'.$anio2.'<br/>'.$libro2.'<br/> '.$npart2.'<br/>'.$ini2.'<br/></td><td><img src=sep_marg.png></td>	<td width=350 valign=top align=justify>'.$text2.'<center> '.$lineapdf2.'</center></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td><td><img src=sep_marg.png></td><td width=350 valign=top align=justify></td>


</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>

<td width=20 align=right valign=top><b>'.$nmarg4.'</b> <br/>'.$tipo4.'<br/>'.$anio4.'<br/>'.$libro4.'<br/> '.$npart4.'<br/>'.$ini4.'<br/></td><td><img src=sep_marg.png></td>	<td width=350 valign=top align=justify>'.$text4.'<center> '.$lineapdf4.'</center></td>

</tr>
</tbody>
</table>
				</body>
</html>';
	}}  else{
 
if ($encabezado == 'encabezadopdfsi' and $pdfmarg1 == 'nmarg1' and $pdfmarg2 == 'nmarg2' and $pdfmarg3 == 'nmarg3' and $pdfmarg4 == 'nmarg4' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
        @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td width=200 rowspan=2><img src=logo_pb.png with=350px height=53px></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top>LIBRO DE MARGINACIONES:&nbsp;<b><font size=+1>'.$folionum.'</font></b></td></tr>
<tr><td align=left valign=top>FOLIO:&nbsp;'.$foliotext1.'</td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=right>
<tbody>
<tr>


<td width=350 valign=top align=justify>'.$text1.'<center> '.$lineapdf1.'</center></td><td width=10><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg1.'</b> <br/>'.$tipo1.'<br/>'.$anio1.'<br/>'.$libro1.'<br/> '.$npart1.'<br/>'.$ini1.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text2.'<center> '.$lineapdf2.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg2.'</b> <br/>'.$tipo2.'<br/>'.$anio2.'<br/>'.$libro2.'<br/> '.$npart2.'<br/>'.$ini2.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text3.'<center> '.$lineapdf3.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg3.'</b> <br/>'.$tipo3.'<br/>'.$anio3.'<br/>'.$libro3.'<br/> '.$npart3.'<br/>'.$ini3.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text4.'<center> '.$lineapdf4.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg4.'</b> <br/>'.$tipo4.'<br/>'.$anio4.'<br/>'.$libro4.'<br/> '.$npart4.'<br/>'.$ini4.'<br/></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}
	
if ($encabezado == 'encabezadopdfsi' and $pdfmarg1 == 'nmarg1' and $pdfmarg2 == '' and $pdfmarg3 == '' and $pdfmarg4 == '' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
        @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td width=200 rowspan=2><img src=logo_pb.png with=350px height=53px></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top>LIBRO DE MARGINACIONES:&nbsp;<b><font size=+1>'.$folionum.'</font></b></td></tr>
<tr><td align=left valign=top>FOLIO:&nbsp;'.$foliotext1.'</td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=right>
<tbody>
<tr>


<td width=350 valign=top align=justify>'.$text1.'<center> '.$lineapdf1.'</center></td><td width=10><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg1.'</b> <br/>'.$tipo1.'<br/>'.$anio1.'<br/>'.$libro1.'<br/> '.$npart1.'<br/>'.$ini1.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}	
	if ($encabezado == 'encabezadopdfsi' and $pdfmarg1 == '' and $pdfmarg2 == '' and $pdfmarg3 == '' and $pdfmarg4 == 'nmarg4' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
        @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td width=200 rowspan=2><img src=logo_pb.png with=350px height=53px></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top>LIBRO DE MARGINACIONES:&nbsp;<b><font size=+1>'.$folionum.'</font></b></td></tr>
<tr><td align=left valign=top>FOLIO:&nbsp;'.$foliotext1.'</td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=right>
<tbody>
<tr>


<td width=350 valign=top align=justify></td><td width=10><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text4.'<center> '.$lineapdf4.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg4.'</b> <br/>'.$tipo4.'<br/>'.$anio4.'<br/>'.$libro4.'<br/> '.$npart4.'<br/>'.$ini4.'<br/></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == 'encabezadopdfsi' and $pdfmarg1 == '' and $pdfmarg2 == '' and $pdfmarg3 == '' and $pdfmarg4 == '' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
         @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td width=200 rowspan=2><img src=logo_pb.png with=350px height=53px></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top>LIBRO DE MARGINACIONES:&nbsp;<b><font size=+1>'.$folionum.'</font></b></td></tr>
<tr><td align=left valign=top>FOLIO:&nbsp;'.$foliotext1.'</td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=right>
<tbody>
<tr>


<td width=350 valign=top align=justify></td><td width=10><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == 'encabezadopdfsi' and $pdfmarg1 == '' and $pdfmarg2 == '' and $pdfmarg3 == 'nmarg3' and $pdfmarg4 == '' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
        @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td width=200 rowspan=2><img src=logo_pb.png with=350px height=53px></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top>LIBRO DE MARGINACIONES:&nbsp;<b><font size=+1>'.$folionum.'</font></b></td></tr>
<tr><td align=left valign=top>FOLIO:&nbsp;'.$foliotext1.'</td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=right>
<tbody>
<tr>


<td width=350 valign=top align=justify></td><td width=10><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text3.'<center> '.$lineapdf3.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg3.'</b> <br/>'.$tipo3.'<br/>'.$anio3.'<br/>'.$libro3.'<br/> '.$npart3.'<br/>'.$ini3.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == 'encabezadopdfsi' and $pdfmarg1 == '' and $pdfmarg2 == 'nmarg2' and $pdfmarg3 == '' and $pdfmarg4 == '' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
        @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td width=200 rowspan=2><img src=logo_pb.png with=350px height=53px></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top>LIBRO DE MARGINACIONES:&nbsp;<b><font size=+1>'.$folionum.'</font></b></td></tr>
<tr><td align=left valign=top>FOLIO:&nbsp;'.$foliotext1.'</td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=right>
<tbody>
<tr>


<td width=350 valign=top align=justify></td><td width=10><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text2.'<center> '.$lineapdf2.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg2.'</b> <br/>'.$tipo2.'<br/>'.$anio2.'<br/>'.$libro2.'<br/> '.$npart2.'<br/>'.$ini2.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == 'encabezadopdfsi' and $pdfmarg1 == 'nmarg1' and $pdfmarg2 == 'nmarg2' and $pdfmarg3 == '' and $pdfmarg4 == '' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
       @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td width=200 rowspan=2><img src=logo_pb.png with=350px height=53px></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top>LIBRO DE MARGINACIONES:&nbsp;<b><font size=+1>'.$folionum.'</font></b></td></tr>
<tr><td align=left valign=top>FOLIO:&nbsp;'.$foliotext1.'</td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>

<table width=475 border=0 class="joti-font" align=right>
<tbody>
<tr>


<td width=350 valign=top align=justify>'.$text1.'<center> '.$lineapdf1.'</center></td><td width=10><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg1.'</b> <br/>'.$tipo1.'<br/>'.$anio1.'<br/>'.$libro1.'<br/> '.$npart1.'<br/>'.$ini1.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text2.'<center> '.$lineapdf2.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg2.'</b> <br/>'.$tipo2.'<br/>'.$anio2.'<br/>'.$libro2.'<br/> '.$npart2.'<br/>'.$ini2.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == 'encabezadopdfsi' and $pdfmarg1 == 'nmarg1' and $pdfmarg2 == 'nmarg2' and $pdfmarg3 == 'nmarg3' and $pdfmarg4 == '' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
   @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td width=200 rowspan=2><img src=logo_pb.png with=350px height=53px></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top>LIBRO DE MARGINACIONES:&nbsp;<b><font size=+1>'.$folionum.'</font></b></td></tr>
<tr><td align=left valign=top>FOLIO:&nbsp;'.$foliotext1.'</td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=right>
<tbody>
<tr>


<td width=350 valign=top align=justify>'.$text1.'<center> '.$lineapdf1.'</center></td><td width=10><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg1.'</b> <br/>'.$tipo1.'<br/>'.$anio1.'<br/>'.$libro1.'<br/> '.$npart1.'<br/>'.$ini1.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text2.'<center> '.$lineapdf2.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg2.'</b> <br/>'.$tipo2.'<br/>'.$anio2.'<br/>'.$libro2.'<br/> '.$npart2.'<br/>'.$ini2.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text3.'<center> '.$lineapdf3.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg3.'</b> <br/>'.$tipo3.'<br/>'.$anio3.'<br/>'.$libro3.'<br/> '.$npart3.'<br/>'.$ini3.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == 'encabezadopdfsi' and $pdfmarg1 == 'nmarg1' and $pdfmarg2 == '' and $pdfmarg3 == 'nmarg3' and $pdfmarg4 == 'nmarg4' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
        @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td width=200 rowspan=2><img src=logo_pb.png with=350px height=53px></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top>LIBRO DE MARGINACIONES:&nbsp;<b><font size=+1>'.$folionum.'</font></b></td></tr>
<tr><td align=left valign=top>FOLIO:&nbsp;'.$foliotext1.'</td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=right>
<tbody>
<tr>


<td width=350 valign=top align=justify>'.$text1.'<center> '.$lineapdf1.'</center></td><td width=10><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg1.'</b> <br/>'.$tipo1.'<br/>'.$anio1.'<br/>'.$libro1.'<br/> '.$npart1.'<br/>'.$ini1.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text3.'<center> '.$lineapdf3.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg3.'</b> <br/>'.$tipo3.'<br/>'.$anio3.'<br/>'.$libro3.'<br/> '.$npart3.'<br/>'.$ini3.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text4.'<center> '.$lineapdf4.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg4.'</b> <br/>'.$tipo4.'<br/>'.$anio4.'<br/>'.$libro4.'<br/> '.$npart4.'<br/>'.$ini4.'<br/></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == 'encabezadopdfsi' and $pdfmarg1 == 'nmarg1' and $pdfmarg2 == '' and $pdfmarg3 == 'nmarg3' and $pdfmarg4 == '' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
         @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td width=200 rowspan=2><img src=logo_pb.png with=350px height=53px></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top>LIBRO DE MARGINACIONES:&nbsp;<b><font size=+1>'.$folionum.'</font></b></td></tr>
<tr><td align=left valign=top>FOLIO:&nbsp;'.$foliotext1.'</td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=right>
<tbody>
<tr>


<td width=350 valign=top align=justify>'.$text1.'<center> '.$lineapdf1.'</center></td><td width=10><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg1.'</b> <br/>'.$tipo1.'<br/>'.$anio1.'<br/>'.$libro1.'<br/> '.$npart1.'<br/>'.$ini1.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text3.'<center> '.$lineapdf3.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg3.'</b> <br/>'.$tipo3.'<br/>'.$anio3.'<br/>'.$libro3.'<br/> '.$npart3.'<br/>'.$ini3.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == 'encabezadopdfsi' and $pdfmarg1 == 'nmarg1' and $pdfmarg2 == '' and $pdfmarg3 == '' and $pdfmarg4 == 'nmarg4' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
        @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td width=200 rowspan=2><img src=logo_pb.png with=350px height=53px></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top>LIBRO DE MARGINACIONES:&nbsp;<b><font size=+1>'.$folionum.'</font></b></td></tr>
<tr><td align=left valign=top>FOLIO:&nbsp;'.$foliotext1.'</td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=right>
<tbody>
<tr>


<td width=350 valign=top align=justify>'.$text1.'<center> '.$lineapdf1.'</center></td><td width=10><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg1.'</b> <br/>'.$tipo1.'<br/>'.$anio1.'<br/>'.$libro1.'<br/> '.$npart1.'<br/>'.$ini1.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text4.'<center> '.$lineapdf4.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg4.'</b> <br/>'.$tipo4.'<br/>'.$anio4.'<br/>'.$libro4.'<br/> '.$npart4.'<br/>'.$ini4.'<br/></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == 'encabezadopdfsi' and $pdfmarg1 == '' and $pdfmarg2 == 'nmarg2' and $pdfmarg3 == 'nmarg3' and $pdfmarg4 == 'nmarg4' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
    @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td width=200 rowspan=2><img src=logo_pb.png with=350px height=53px></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top>LIBRO DE MARGINACIONES:&nbsp;<b><font size=+1>'.$folionum.'</font></b></td></tr>
<tr><td align=left valign=top>FOLIO:&nbsp;'.$foliotext1.'</td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=right>
<tbody>
<tr>


<td width=350 valign=top align=justify></td><td width=10><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text2.'<center> '.$lineapdf2.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg2.'</b> <br/>'.$tipo2.'<br/>'.$anio2.'<br/>'.$libro2.'<br/> '.$npart2.'<br/>'.$ini2.'<br/></td>
</tr>
<tr>

<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text3.'<center> '.$lineapdf3.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg3.'</b> <br/>'.$tipo3.'<br/>'.$anio3.'<br/>'.$libro3.'<br/> '.$npart3.'<br/>'.$ini3.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text4.'<center> '.$lineapdf4.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg4.'</b> <br/>'.$tipo4.'<br/>'.$anio4.'<br/>'.$libro4.'<br/> '.$npart4.'<br/>'.$ini4.'<br/></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == 'encabezadopdfsi' and $pdfmarg1 == '' and $pdfmarg2 == 'nmarg2' and $pdfmarg3 == 'nmarg3' and $pdfmarg4 == '' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
     @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td width=200 rowspan=2><img src=logo_pb.png with=350px height=53px></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top>LIBRO DE MARGINACIONES:&nbsp;<b><font size=+1>'.$folionum.'</font></b></td></tr>
<tr><td align=left valign=top>FOLIO:&nbsp;'.$foliotext1.'</td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=right>
<tbody>
<tr>


<td width=350 valign=top align=justify></td><td width=10><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text2.'<center> '.$lineapdf2.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg2.'</b> <br/>'.$tipo2.'<br/>'.$anio2.'<br/>'.$libro2.'<br/> '.$npart2.'<br/>'.$ini2.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text3.'<center> '.$lineapdf3.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg3.'</b> <br/>'.$tipo3.'<br/>'.$anio3.'<br/>'.$libro3.'<br/> '.$npart3.'<br/>'.$ini3.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == 'encabezadopdfsi' and $pdfmarg1 == '' and $pdfmarg2 == 'nmarg2' and $pdfmarg3 == '' and $pdfmarg4 == 'nmarg4' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
     @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td width=200 rowspan=2><img src=logo_pb.png with=350px height=53px></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top>LIBRO DE MARGINACIONES:&nbsp;<b><font size=+1>'.$folionum.'</font></b></td></tr>
<tr><td align=left valign=top>FOLIO:&nbsp;'.$foliotext1.'</td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=right>
<tbody>
<tr>


<td width=350 valign=top align=justify></td><td width=10><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text2.'<center> '.$lineapdf2.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg2.'</b> <br/>'.$tipo2.'<br/>'.$anio2.'<br/>'.$libro2.'<br/> '.$npart2.'<br/>'.$ini2.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text4.'<center> '.$lineapdf4.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg4.'</b> <br/>'.$tipo4.'<br/>'.$anio4.'<br/>'.$libro4.'<br/> '.$npart4.'<br/>'.$ini4.'<br/></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == 'encabezadopdfsi' and $pdfmarg1 == '' and $pdfmarg2 == '' and $pdfmarg3 == 'nmarg3' and $pdfmarg4 == 'nmarg4' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
        @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td width=200 rowspan=2><img src=logo_pb.png with=350px height=53px></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top>LIBRO DE MARGINACIONES:&nbsp;<b><font size=+1>'.$folionum.'</font></b></td></tr>
<tr><td align=left valign=top>FOLIO:&nbsp;'.$foliotext1.'</td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=right>
<tbody>
<tr>


<td width=350 valign=top align=justify></td><td width=10><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text3.'<center> '.$lineapdf3.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg3.'</b> <br/>'.$tipo3.'<br/>'.$anio3.'<br/>'.$libro3.'<br/> '.$npart3.'<br/>'.$ini3.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text4.'<center> '.$lineapdf4.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg4.'</b> <br/>'.$tipo4.'<br/>'.$anio4.'<br/>'.$libro4.'<br/> '.$npart4.'<br/>'.$ini4.'<br/></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == 'encabezadopdfsi' and $pdfmarg1 == 'nmarg1' and $pdfmarg2 == 'nmarg2' and $pdfmarg3 == '' and $pdfmarg4 == 'nmarg4' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
   @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td width=200 rowspan=2><img src=logo_pb.png with=350px height=53px></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top>LIBRO DE MARGINACIONES:&nbsp;<b><font size=+1>'.$folionum.'</font></b></td></tr>
<tr><td align=left valign=top>FOLIO:&nbsp;'.$foliotext1.'</td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=right>
<tbody>
<tr>


<td width=350 valign=top align=justify>'.$text1.'<center> '.$lineapdf1.'</center></td><td width=10><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg1.'</b> <br/>'.$tipo1.'<br/>'.$anio1.'<br/>'.$libro1.'<br/> '.$npart1.'<br/>'.$ini1.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text2.'<center> '.$lineapdf2.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg2.'</b> <br/>'.$tipo2.'<br/>'.$anio2.'<br/>'.$libro2.'<br/> '.$npart2.'<br/>'.$ini2.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text4.'<center> '.$lineapdf4.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg4.'</b> <br/>'.$tipo4.'<br/>'.$anio4.'<br/>'.$libro4.'<br/> '.$npart4.'<br/>'.$ini4.'<br/></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == '' and $pdfmarg1 == 'nmarg1' and $pdfmarg2 == 'nmarg2' and $pdfmarg3 == 'nmarg3' and $pdfmarg4 == 'nmarg4' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
  @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td width=200 rowspan=2><img src=logo_pb_b.png></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top></td></tr>
<tr><td align=left valign=top></td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=right>
<tbody>
<tr>


<td width=350 valign=top align=justify>'.$text1.'<center> '.$lineapdf1.'</center></td><td width=10><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg1.'</b> <br/>'.$tipo1.'<br/>'.$anio1.'<br/>'.$libro1.'<br/> '.$npart1.'<br/>'.$ini1.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text2.'<center> '.$lineapdf2.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg2.'</b> <br/>'.$tipo2.'<br/>'.$anio2.'<br/>'.$libro2.'<br/> '.$npart2.'<br/>'.$ini2.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text3.'<center> '.$lineapdf3.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg3.'</b> <br/>'.$tipo3.'<br/>'.$anio3.'<br/>'.$libro3.'<br/> '.$npart3.'<br/>'.$ini3.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text4.'<center> '.$lineapdf4.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg4.'</b> <br/>'.$tipo4.'<br/>'.$anio4.'<br/>'.$libro4.'<br/> '.$npart4.'<br/>'.$ini4.'<br/></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}
	
if ($encabezado == '' and $pdfmarg1 == 'nmarg1' and $pdfmarg2 == '' and $pdfmarg3 == '' and $pdfmarg4 == '' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
     @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td width=200 rowspan=2><img src=logo_pb_b.png></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top></td></tr>
<tr><td align=left valign=top></td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=right>
<tbody>
<tr>


<td width=350 valign=top align=justify>'.$text1.'<center> '.$lineapdf1.'</center></td><td width=10><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg1.'</b> <br/>'.$tipo1.'<br/>'.$anio1.'<br/>'.$libro1.'<br/> '.$npart1.'<br/>'.$ini1.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}	
	if ($encabezado == '' and $pdfmarg1 == '' and $pdfmarg2 == '' and $pdfmarg3 == '' and $pdfmarg4 == 'nmarg4' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
    @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td width=200 rowspan=2><img src=logo_pb_b.png></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top></td></tr>
<tr><td align=left valign=top></td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=right>
<tbody>
<tr>


<td width=350 valign=top align=justify></td><td width=10><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text4.'<center> '.$lineapdf4.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg4.'</b> <br/>'.$tipo4.'<br/>'.$anio4.'<br/>'.$libro4.'<br/> '.$npart4.'<br/>'.$ini4.'<br/></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == '' and $pdfmarg1 == '' and $pdfmarg2 == '' and $pdfmarg3 == '' and $pdfmarg4 == '' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
        @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td width=200 rowspan=2><img src=logo_pb_b.png></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top></td></tr>
<tr><td align=left valign=top></td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=right>
<tbody>
<tr>


<td width=350 valign=top align=justify></td><td width=10><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == '' and $pdfmarg1 == '' and $pdfmarg2 == '' and $pdfmarg3 == 'nmarg3' and $pdfmarg4 == '' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
    @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td width=200 rowspan=2><img src=logo_pb_b.png></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top></td></tr>
<tr><td align=left valign=top></td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=right>
<tbody>
<tr>


<td width=350 valign=top align=justify></td><td width=10><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text3.'<center> '.$lineapdf3.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg3.'</b> <br/>'.$tipo3.'<br/>'.$anio3.'<br/>'.$libro3.'<br/> '.$npart3.'<br/>'.$ini3.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == '' and $pdfmarg1 == '' and $pdfmarg2 == 'nmarg2' and $pdfmarg3 == '' and $pdfmarg4 == '' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
    @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td width=200 rowspan=2><img src=logo_pb_b.png></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top></td></tr>
<tr><td align=left valign=top></td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=right>
<tbody>
<tr>


<td width=350 valign=top align=justify></td><td width=10><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text2.'<center> '.$lineapdf2.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg2.'</b> <br/>'.$tipo2.'<br/>'.$anio2.'<br/>'.$libro2.'<br/> '.$npart2.'<br/>'.$ini2.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == '' and $pdfmarg1 == 'nmarg1' and $pdfmarg2 == 'nmarg2' and $pdfmarg3 == '' and $pdfmarg4 == '' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
    @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td width=200 rowspan=2><img src=logo_pb_b.png></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top></td></tr>
<tr><td align=left valign=top></td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=right>
<tbody>
<tr>


<td width=350 valign=top align=justify>'.$text1.'<center> '.$lineapdf1.'</center></td><td width=10><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg1.'</b> <br/>'.$tipo1.'<br/>'.$anio1.'<br/>'.$libro1.'<br/> '.$npart1.'<br/>'.$ini1.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text2.'<center> '.$lineapdf2.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg2.'</b> <br/>'.$tipo2.'<br/>'.$anio2.'<br/>'.$libro2.'<br/> '.$npart2.'<br/>'.$ini2.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == '' and $pdfmarg1 == 'nmarg1' and $pdfmarg2 == 'nmarg2' and $pdfmarg3 == 'nmarg3' and $pdfmarg4 == '' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
     @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td width=200 rowspan=2><img src=logo_pb_b.png></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top></td></tr>
<tr><td align=left valign=top></td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=right>
<tbody>
<tr>


<td width=350 valign=top align=justify>'.$text1.'<center> '.$lineapdf1.'</center></td><td width=10><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg1.'</b> <br/>'.$tipo1.'<br/>'.$anio1.'<br/>'.$libro1.'<br/> '.$npart1.'<br/>'.$ini1.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text2.'<center> '.$lineapdf2.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg2.'</b> <br/>'.$tipo2.'<br/>'.$anio2.'<br/>'.$libro2.'<br/> '.$npart2.'<br/>'.$ini2.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text3.'<center> '.$lineapdf3.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg3.'</b> <br/>'.$tipo3.'<br/>'.$anio3.'<br/>'.$libro3.'<br/> '.$npart3.'<br/>'.$ini3.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == '' and $pdfmarg1 == 'nmarg1' and $pdfmarg2 == '' and $pdfmarg3 == 'nmarg3' and $pdfmarg4 == 'nmarg4' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
      @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td width=200 rowspan=2><img src=logo_pb_b.png></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top></td></tr>
<tr><td align=left valign=top></td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=right>
<tbody>
<tr>


<td width=350 valign=top align=justify>'.$text1.'<center> '.$lineapdf1.'</center></td><td width=10><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg1.'</b> <br/>'.$tipo1.'<br/>'.$anio1.'<br/>'.$libro1.'<br/> '.$npart1.'<br/>'.$ini1.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text3.'<center> '.$lineapdf3.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg3.'</b> <br/>'.$tipo3.'<br/>'.$anio3.'<br/>'.$libro3.'<br/> '.$npart3.'<br/>'.$ini3.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text4.'<center> '.$lineapdf4.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg4.'</b> <br/>'.$tipo4.'<br/>'.$anio4.'<br/>'.$libro4.'<br/> '.$npart4.'<br/>'.$ini4.'<br/></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == '' and $pdfmarg1 == 'nmarg1' and $pdfmarg2 == '' and $pdfmarg3 == 'nmarg3' and $pdfmarg4 == '' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
    @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td width=200 rowspan=2><img src=logo_pb_b.png></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top></td></tr>
<tr><td align=left valign=top></td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=right>
<tbody>
<tr>


<td width=350 valign=top align=justify>'.$text1.'<center> '.$lineapdf1.'</center></td><td width=10><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg1.'</b> <br/>'.$tipo1.'<br/>'.$anio1.'<br/>'.$libro1.'<br/> '.$npart1.'<br/>'.$ini1.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text3.'<center> '.$lineapdf3.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg3.'</b> <br/>'.$tipo3.'<br/>'.$anio3.'<br/>'.$libro3.'<br/> '.$npart3.'<br/>'.$ini3.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == '' and $pdfmarg1 == 'nmarg1' and $pdfmarg2 == '' and $pdfmarg3 == '' and $pdfmarg4 == 'nmarg4' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
     @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td width=200 rowspan=2><img src=logo_pb_b.png></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top></td></tr>
<tr><td align=left valign=top></td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=right>
<tbody>
<tr>


<td width=350 valign=top align=justify>'.$text1.'<center> '.$lineapdf1.'</center></td><td width=10><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg1.'</b> <br/>'.$tipo1.'<br/>'.$anio1.'<br/>'.$libro1.'<br/> '.$npart1.'<br/>'.$ini1.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text4.'<center> '.$lineapdf4.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg4.'</b> <br/>'.$tipo4.'<br/>'.$anio4.'<br/>'.$libro4.'<br/> '.$npart4.'<br/>'.$ini4.'<br/></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == '' and $pdfmarg1 == '' and $pdfmarg2 == 'nmarg2' and $pdfmarg3 == 'nmarg3' and $pdfmarg4 == 'nmarg4' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
     @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td width=200 rowspan=2><img src=logo_pb_b.png></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top></td></tr>
<tr><td align=left valign=top></td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=right>
<tbody>
<tr>


<td width=350 valign=top align=justify></td><td width=10><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text2.'<center> '.$lineapdf2.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg2.'</b> <br/>'.$tipo2.'<br/>'.$anio2.'<br/>'.$libro2.'<br/> '.$npart2.'<br/>'.$ini2.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text3.'<center> '.$lineapdf3.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg3.'</b> <br/>'.$tipo3.'<br/>'.$anio3.'<br/>'.$libro3.'<br/> '.$npart3.'<br/>'.$ini3.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text4.'<center> '.$lineapdf4.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg4.'</b> <br/>'.$tipo4.'<br/>'.$anio4.'<br/>'.$libro4.'<br/> '.$npart4.'<br/>'.$ini4.'<br/></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == '' and $pdfmarg1 == '' and $pdfmarg2 == 'nmarg2' and $pdfmarg3 == 'nmarg3' and $pdfmarg4 == '' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
        @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td width=200 rowspan=2><img src=logo_pb_b.png></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top></td></tr>
<tr><td align=left valign=top></td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=right>
<tbody>
<tr>


<td width=350 valign=top align=justify></td><td width=10><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text2.'<center> '.$lineapdf2.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg2.'</b> <br/>'.$tipo2.'<br/>'.$anio2.'<br/>'.$libro2.'<br/> '.$npart2.'<br/>'.$ini2.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text3.'<center> '.$lineapdf3.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg3.'</b> <br/>'.$tipo3.'<br/>'.$anio3.'<br/>'.$libro3.'<br/> '.$npart3.'<br/>'.$ini3.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == '' and $pdfmarg1 == '' and $pdfmarg2 == 'nmarg2' and $pdfmarg3 == '' and $pdfmarg4 == 'nmarg4' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
      @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td width=200 rowspan=2><img src=logo_pb_b.png></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top></td></tr>
<tr><td align=left valign=top></td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=right>
<tbody>
<tr>


<td width=350 valign=top align=justify></td><td width=10><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text2.'<center> '.$lineapdf2.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg2.'</b> <br/>'.$tipo2.'<br/>'.$anio2.'<br/>'.$libro2.'<br/> '.$npart2.'<br/>'.$ini2.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text4.'<center> '.$lineapdf4.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg4.'</b> <br/>'.$tipo4.'<br/>'.$anio4.'<br/>'.$libro4.'<br/> '.$npart4.'<br/>'.$ini4.'<br/></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == '' and $pdfmarg1 == '' and $pdfmarg2 == '' and $pdfmarg3 == 'nmarg3' and $pdfmarg4 == 'nmarg4' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
    @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td width=200 rowspan=2><img src=logo_pb_b.png></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top></td></tr>
<tr><td align=left valign=top></td></tr><tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=right>
<tbody>
<tr>


<td width=350 valign=top align=justify></td><td width=10><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text3.'<center> '.$lineapdf3.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg3.'</b> <br/>'.$tipo3.'<br/>'.$anio3.'<br/>'.$libro3.'<br/> '.$npart3.'<br/>'.$ini3.'<br/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text4.'<center> '.$lineapdf4.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg4.'</b> <br/>'.$tipo4.'<br/>'.$anio4.'<br/>'.$libro4.'<br/> '.$npart4.'<br/>'.$ini4.'<br/></td>
</tr>
</tbody>
</table>
				</body>
</html>';
	}
	if ($encabezado == '' and $pdfmarg1 == 'nmarg1' and $pdfmarg2 == 'nmarg2' and $pdfmarg3 == '' and $pdfmarg4 == 'nmarg4' ) {
$html = '<!DOCTYPE html>
<html lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Folio de Marginaciones</title>
    <style>        
    @font-face {
font-family: "Tahoma", sans-serif;
src: url("fonts\Tahoma.ttf");
}
.joti-font {
font:normal 11px/10px Tahoma;   letter-spacing: 0.03pt;
}
    </style>
</head>
<body><table width=520 border=0 class="joti-font" >
<tr><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td rowspan=2 width=10><img src=sep_log.png></td><td width=200 rowspan=2><img src=logo_pb_b.png></td><td rowspan=2 width=7></td>
<td width=160 align=left valign=top></td></tr>
<tr><td align=left valign=top></td></tr><tr height="5px">
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>	
</table>
<table width=475 border=0 class="joti-font" align=right>
<tbody>
<tr>


<td width=350 valign=top align=justify>'.$text1.'<center> '.$lineapdf1.'</center></td><td width=10><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg1.'</b> <br/>'.$tipo1.'<br/>'.$anio1.'<br/>'.$libro1.'<br/> '.$npart1.'<br/>'.$ini1.'<br/></td>
</tr>
<tr height="5px">
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text2.'<center> '.$lineapdf2.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg2.'</b> <br/>'.$tipo2.'<br/>'.$anio2.'<br/>'.$libro2.'<br/> '.$npart2.'<br/>'.$ini2.'<br/></td>
</tr>
<tr height="5px">
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b></b> <br/><br/><br/><br/> <br/><br/></td>
</tr>
<tr height="5px">
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>


<td width=350 valign=top align=justify>'.$text4.'<center> '.$lineapdf4.'</center></td><td><img src=sep_marg.png></td><td width=20 align=right valign=top><b>'.$nmarg4.'</b> <br/>'.$tipo4.'<br/>'.$anio4.'<br/>'.$libro4.'<br/> '.$npart4.'<br/>'.$ini4.'<br/></td>
</tr>
</tbody>
</table>

				</body>
</html>';
	}
}

 
require_once 'dompdf/autoload.inc.php';



use Dompdf\Dompdf;

$dompdf = new Dompdf();

$dompdf->loadHtml($html);
$dompdf->setPaper('folio', 'portrait');
$dompdf->render();
$dompdf->stream($nombrefolio,array("Attachment"=>0));
?>


