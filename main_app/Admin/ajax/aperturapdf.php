 <?php
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']['tipo'] == "Admin"){
		header('Location: ../../');
	}
	
else{
	
	header("Location: ../Usuario/");
	
}}
	
}
 ?>
<?php
include ("lib_fecha_textopdfM.php");
include ("lib_fecha_textopdfM2.php");
include ("quitar_espacios.php");


$lin = "_________________________________________";
$jefer = "LIC. JUAN JOSÉ ARMANDO AZUCENA CATÁN";
$carg = "JEFE DEL REGISTRO DEL ESTADO FAMILIAR";

$fechaaper = ( empty($_POST['Fechanac1']) ) ? NULL : $_POST['Fechanac1'];

$newDate_aper = date('d/m/Y', strtotime($fechaaper));

$fecha_aperc = fechaATextoM($newDate_aper); 

$fechaaper2 = ( empty($_POST['Fechanac2']) ) ? NULL : $_POST['Fechanac2'];
$newDate_aper2 = date('d/m/Y', strtotime($fechaaper2));

$fecha_aperc2 = fechaATextoM($newDate_aper2); 

$tipoaper = ( empty($_POST['apercier']) )   ? NULL : $_POST['apercier'];

$apertura1 = ( empty($_POST['tipoac1']) )   ? NULL : $_POST['tipoac1'];
$apertura2 = ( empty($_POST['tipoac11']) )   ? NULL : $_POST['tipoac11'];
$apertura3 = ( empty($_POST['tipoac12']) )   ? NULL : $_POST['tipoac12'];
$sinefecto = ( empty($_POST['nsinefecto']) )   ? NULL : $_POST['nsinefecto'];
$inhabilitado = ( empty($_POST['ninhabilitado']) )   ? NULL : $_POST['ninhabilitado'];

if ($sinefecto == '' or $sinefecto == '00' or $sinefecto == '000') { $sinefecto2 = ''; }
else { $sinefecto2 = 'QUEDANDO '. numtoletrasPDFM($sinefecto). ' SIN EFECTO;'; }


if ($inhabilitado == '' or $inhabilitado == '00' or $inhabilitado == '000'){
$inhabilitado2 = '';}
if($inhabilitado==1) {
	$inhabilitado2 = ' Y '. numtoletrasPDFM($inhabilitado). ' INHABILITADO;';
	
}
if($inhabilitado>=2)
{
	$inhabilitado2 = ' Y '. numtoletrasPDFM($inhabilitado). ' INHABILITADOS;';
	
}


	
$total=	500-$sinefecto-$inhabilitado;


if ($total=='0'){$dompdf->loadHtml('<div> <strong>El valor no puede ser 0.</strong></div>');}

if ($total=='1'){
	$totall=' SE HA INSCRITO UNA PARTIDA';
	$totall2 = ' SE HA UTILIZADO UNO';
}else {	
	$totall=' SE HAN INSCRITO ' . numtoletrasPDFM2($total) . ' PARTIDAS';
	$totall2 = ' SE HAN UTILIZADO '.numtoletrasPDFM($total);
}


$numlibro = ( empty($_POST['nlibronac']) )   ? NULL : $_POST['nlibronac'];

$libro = numtoletrasPDFM($numlibro);

$sexomenor1 = ( empty($_POST['sexo1nac']) )   ? NULL : $_POST['sexo1nac'];
$sexomenor2 = ( empty($_POST['sexo1nac']) )   ? NULL : $_POST['sexo1nac'];

if ($sexomenor1=='femenino'){
	$sexo='HIJA DE';
}else{
	$sexo='HIJO DE';
}
if ($sexomenor2=='femenino'){
	$sexo2='HIJA DE';
}else{
	$sexo2='HIJO DE';
}

$menor11 = ( empty($_POST['nmenor1']) )   ? NULL : $_POST['nmenor1'];
$menor21 = ( empty($_POST['nmenor2']) )   ? NULL : $_POST['nmenor2'];

$madre11 = ( empty($_POST['madre1']) )   ? NULL : $_POST['madre1'];
$madre21 = ( empty($_POST['madre2']) )   ? NULL : $_POST['madre2'];

$padre11 = ( empty($_POST['padre1']) )   ? NULL : $_POST['padre1'];
$padre21 = ( empty($_POST['padre2']) )   ? NULL : $_POST['padre2'];


$menor1 = trim(mb_strtoupper(Espacios($menor11),'utf-8'));
$menor2 = trim(mb_strtoupper(Espacios($menor21),'utf-8'));

$madre1 = trim(mb_strtoupper(Espacios($madre11),'utf-8'));
$madre2 = trim(mb_strtoupper(Espacios($madre21),'utf-8'));


if ($padre11 ==''){
$padre1 = '';
	
}else{
$padre1 = ' Y DE ' . trim(mb_strtoupper(Espacios($padre11),'utf-8'));
}

if ($padre21 ==''){
$padre2 = '';
	
}else{
$padre2 = ' Y DE ' . trim(mb_strtoupper(Espacios($padre21),'utf-8'));
}




$persona11 = ( empty($_POST['npdef1']) )   ? NULL : $_POST['npdef1'];
$persona21 = ( empty($_POST['npdef2']) )   ? NULL : $_POST['npdef2'];

$persona1 = trim(mb_strtoupper(Espacios($persona11),'utf-8'));
$persona2 = trim(mb_strtoupper(Espacios($persona21),'utf-8'));

$contrayente11 = ( empty($_POST['npmat1']) )   ? NULL : $_POST['npmat1'];
$contrayente12 = ( empty($_POST['npmat2']) )   ? NULL : $_POST['npmat2'];
$contrayente13 = ( empty($_POST['npmat3']) )   ? NULL : $_POST['npmat3'];
$contrayente14 = ( empty($_POST['npmat4']) )   ? NULL : $_POST['npmat4'];

$contrayente1 = trim(mb_strtoupper(Espacios($contrayente11),'utf-8'));
$contrayente2 = trim(mb_strtoupper(Espacios($contrayente12),'utf-8'));
$contrayente3 = trim(mb_strtoupper(Espacios($contrayente13),'utf-8'));
$contrayente4 = trim(mb_strtoupper(Espacios($contrayente14),'utf-8'));

// Include autoloader 
require_once 'dompdf/autoload.inc.php'; 
 
// Reference the Dompdf namespace 
use Dompdf\Dompdf; 
use Dompdf\Options;
// Instantiate and use the dompdf class 
$options = new Options();
$options->set('defaultFont', 'Helvetica');
$dompdf = new Dompdf($options);

// Load HTML content 




  
  if ($tipoaper == 'nacimiento' and $apertura1 == 'apertura1') {
	if ($numlibro=='' or $numlibro=='00' or $numlibro=='000'){
	
	  
$dompdf->loadHtml('<div> <strong>Debes de digitar el número de libro de la apertura a crear.</strong></div>');  
	  
	 
  }  else {
	  
	  
	  
$dompdf->loadHtml('    <style>        
        @import url("fonts\Archivo-SemiBold");
        .joti-font {font-family: "Archivo", font-size: 12px;font-style: normal; }
    </style><div style="position: absolute; top: 40%; left: 17%;  transform: translate(-10%, -30%);" align=" justify" class="joti-font">
  EL PRESENTE LIBRO NUMERO '.$libro.' CONSTA DE QUINIENTAS PAGINAS UTILES, LEGALIZADAS TODAS CON EL SELLO DE ESTA OFICINA, FIRMADA LA PRIMERA Y RUBRICADA LA ULTIMA POR EL SUSCRITO JEFE DEL REGISTRO DEL ESTADO FAMILIAR Y POR LO TANTO SE AUTORIZA PARA QUE SE ASIENTEN PARTIDAS DE NACIMIENTOS QUE OCURRAN DURANTE EL PRESENTE AÑO A PARTIR DE ESTA FECHA SEGÚN ACUERDO NUMERO VIENTITRES DE FECHA DIEZ DE ENERO DE MIL NOVECIENTOS NOVENTA Y SEIS, EMITIDO POR EL CONCEJO MUNICIPAL Y EN VIRTUD DE LOS ARTICULOS OCHO Y CUARENTA Y NUEVE DE LA LEY TRANSITORIA DEL REGISTRO DEL ESTADO FAMILIAR Y DE LOS REGIMENES PATRIMONIALES DEL MATRIMONIO CONTENIDA EN EL DECRETO LEGISLATIVO, NUMERO CUATROCIENTOS NOVENTA Y SEIS DE FECHA NUEVE DE NOVIEMBRE DE MIL NOVECIENTOS NOVENTA Y CINCO, PUBLICADO EN EL DIARIO OFICIAL NUMERO DOSCIENTOS NOVENTA Y OCHO TOMO TRESCIENTOS VEINTINUEVE DE FECHA OCHO DE DICIEMBRE DE MIL NOVECIENTOS NOVENTA Y CINCO.
<div>
<br>
<br>

<div align="justify">ALCALDIA DE SAN SALVADOR, '.$fecha_aperc.'<div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div align="center">'.$lin.'<br/>'.$jefer.'<br/>'.$carg.'</div>

				');}}
 if ($tipoaper == 'nacimiento' and $apertura1 == 'cierre1') {
	 
	if ($numlibro=='' or $numlibro=='00' or $numlibro=='000'){
	
	  
$dompdf->loadHtml('<div> <strong>Debes de digitar el número de libro del cierre a crear.</strong></div>');  
	  
	 
  }  else { 
	 
$dompdf->loadHtml('    <style>        
        @import url("fonts\Archivo-SemiBold");
        .joti-font {font-family: "Archivo", font-size: 12px;font-style: normal; }
    </style><div style="position: absolute; top: 40%; left: 17%;  transform: translate(-10%, -30%);" align=" justify" class="joti-font" >
EL INFRASCRITO JEFE DEL REGISTRO DEL ESTADO FAMILIAR HACE CONSTAR QUE EL PRESENTE LIBRO NÚMERO '.$libro.' DE NACIMIENTOS CONSTA DE QUINIENTOS FOLIOS, DE LOS CUALES'. $totall2 .'; '.$sinefecto2.''.$inhabilitado2.' POR CONSIGUIENTE'.$totall.'; SIENDO LA PRIMERA QUE CORRESPONDE A: '.$menor1 .', '.$sexo.': '.$madre1.''.$padre1.'; Y LA ULTIMA QUE CORRESPONDE A: '.$menor1 .', '.$sexo2.': '.$madre2.''.$padre2.'.
<div>
<br>
<br>

<div align="justify">ALCALDIA DE SAN SALVADOR, '.$fecha_aperc2.'<div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div align="center">'.$lin.'<br/>'.$jefer.'<br/>'.$carg.'</div>');}}

 if ($tipoaper == 'defuncion' and $apertura2 == 'apertura11') {
	if ($numlibro=='' or $numlibro=='00' or $numlibro=='000'){
	
	  
$dompdf->loadHtml('<div> <strong>Debes de digitar el número de libro de la apertura a crear.</strong></div>');  
	  
	 
  }  else {
	  
	  
	  
$dompdf->loadHtml('<div style="position: absolute; top: 40%; left: 17%;  transform: translate(-10%, -30%);" align=" justify">
  EL PRESENTE LIBRO NUMERO '.$libro.' CONSTA DE QUINIENTAS PAGINAS UTILES, LEGALIZADAS TODAS CON EL SELLO DE ESTA OFICINA, FIRMADA LA PRIMERA Y RUBRICADA LA ULTIMA POR EL SUSCRITO JEFE DEL REGISTRO DEL ESTADO FAMILIAR Y POR LO TANTO SE AUTORIZA PARA QUE SE ASIENTEN PARTIDAS DE DEFUNCIONES QUE OCURRAN DURANTE EL PRESENTE AÑO A PARTIR DE ESTA FECHA SEGÚN ACUERDO NUMERO VIENTITRES DE FECHA DIEZ DE ENERO DE MIL NOVECIENTOS NOVENTA Y SEIS, EMITIDO POR EL CONCEJO MUNICIPAL Y EN VIRTUD DE LOS ARTICULOS OCHO Y CUARENTA Y NUEVE DE LA LEY TRANSITORIA DEL REGISTRO DEL ESTADO FAMILIAR Y DE LOS REGIMENES PATRIMONIALES DEL MATRIMONIO CONTENIDA EN EL DECRETO LEGISLATIVO, NUMERO CUATROCIENTOS NOVENTA Y SEIS DE FECHA NUEVE DE NOVIEMBRE DE MIL NOVECIENTOS NOVENTA Y CINCO, PUBLICADO EN EL DIARIO OFICIAL NUMERO DOSCIENTOS NOVENTA Y OCHO TOMO TRESCIENTOS VEINTINUEVE DE FECHA OCHO DE DICIEMBRE DE MIL NOVECIENTOS NOVENTA Y CINCO.
<div>
<br>
<br>

<div align="justify">ALCALDIA DE SAN SALVADOR, '.$fecha_aperc.'<div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div align="center">'.$lin.'<br/>'.$jefer.'<br/>'.$carg.'</div>

				');}}
 if ($tipoaper == 'defuncion' and $apertura2 == 'cierre11') {
	 
	if ($numlibro=='' or $numlibro=='00' or $numlibro=='000'){
	
	  
$dompdf->loadHtml('<div> <strong>Debes de digitar el número de libro del cierre a crear.</strong></div>');  
	  
	 
  }  else { 
	 
$dompdf->loadHtml('<div style="position: absolute; top: 40%; left: 17%;  transform: translate(-10%, -30%);" align=" justify">
EL INFRASCRITO JEFE DEL REGISTRO DEL ESTADO FAMILIAR HACE CONSTAR QUE EL PRESENTE LIBRO NÚMERO '.$libro.' DE DEFUNCIONES CONSTA DE QUINIENTOS FOLIOS, DE LOS CUALES'. $totall2 .'; '.$sinefecto2.''.$inhabilitado2.' POR CONSIGUIENTE'.$totall.'; SIENDO LA PRIMERA QUE CORRESPONDE A: '.$persona1 .' Y LA ULTIMA QUE CORRESPONDE A: '.$persona2 .'.
<div>
<br>
<br>

<div align="justify">ALCALDIA DE SAN SALVADOR, '.$fecha_aperc2.'<div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div align="center">'.$lin.'<br/>'.$jefer.'<br/>'.$carg.'</div>');}}


if ($tipoaper == 'matrimonio' and $apertura3 == 'apertura12') {
	if ($numlibro=='' or $numlibro=='00' or $numlibro=='000'){
	
	  
$dompdf->loadHtml('<div> <strong>Debes de digitar el número de libro de la apertura a crear.</strong></div>');  
	  
	 
  }  else {
	  
	  
	  
$dompdf->loadHtml('<div style="position: absolute; top: 40%; left: 17%;  transform: translate(-10%, -30%);" align=" justify">
  EL PRESENTE LIBRO NUMERO '.$libro.' CONSTA DE QUINIENTAS PAGINAS UTILES, LEGALIZADAS TODAS CON EL SELLO DE ESTA OFICINA, FIRMADA LA PRIMERA Y RUBRICADA LA ULTIMA POR EL SUSCRITO JEFE DEL REGISTRO DEL ESTADO FAMILIAR Y POR LO TANTO SE AUTORIZA PARA QUE SE ASIENTEN PARTIDAS DE MATRIMONIOS QUE OCURRAN DURANTE EL PRESENTE AÑO A PARTIR DE ESTA FECHA SEGÚN ACUERDO NUMERO VIENTITRES DE FECHA DIEZ DE ENERO DE MIL NOVECIENTOS NOVENTA Y SEIS, EMITIDO POR EL CONCEJO MUNICIPAL Y EN VIRTUD DE LOS ARTICULOS OCHO Y CUARENTA Y NUEVE DE LA LEY TRANSITORIA DEL REGISTRO DEL ESTADO FAMILIAR Y DE LOS REGIMENES PATRIMONIALES DEL MATRIMONIO CONTENIDA EN EL DECRETO LEGISLATIVO, NUMERO CUATROCIENTOS NOVENTA Y SEIS DE FECHA NUEVE DE NOVIEMBRE DE MIL NOVECIENTOS NOVENTA Y CINCO, PUBLICADO EN EL DIARIO OFICIAL NUMERO DOSCIENTOS NOVENTA Y OCHO TOMO TRESCIENTOS VEINTINUEVE DE FECHA OCHO DE DICIEMBRE DE MIL NOVECIENTOS NOVENTA Y CINCO.
<div>
<br>
<br>

<div align="justify">ALCALDIA DE SAN SALVADOR, '.$fecha_aperc.'<div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div align="center">'.$lin.'<br/>'.$jefer.'<br/>'.$carg.'</div>

				');}}
 if ($tipoaper == 'matrimonio' and $apertura3 == 'cierre12') {
	 
	if ($numlibro=='' or $numlibro=='00' or $numlibro=='000'){
	
	  
$dompdf->loadHtml('<div> <strong>Debes de digitar el número de libro del cierre a crear.</strong></div>');  
	  
	 
  }  else { 
	 
$dompdf->loadHtml('<div style="position: absolute; top: 40%; left: 17%;  transform: translate(-10%, -30%);" align=" justify">
EL INFRASCRITO JEFE DEL REGISTRO DEL ESTADO FAMILIAR HACE CONSTAR QUE EL PRESENTE LIBRO NÚMERO '.$libro.' DE MATRIMONIOS CONSTA DE QUINIENTOS FOLIOS, DE LOS CUALES'. $totall2 .'; '.$sinefecto2.''.$inhabilitado2.' POR CONSIGUIENTE'.$totall.'; SIENDO LA PRIMERA QUE CORRESPONDE A: '.$contrayente2 .' Y '.$contrayente1 .'; Y LA ULTIMA QUE CORRESPONDE A: '.$contrayente4 . ' Y '.$contrayente3 .'.
<div>
<br>
<br>

<div align="justify">ALCALDIA DE SAN SALVADOR, '.$fecha_aperc2.'<div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div align="center">'.$lin.'<br/>'.$jefer.'<br/>'.$carg.'</div>');}}


if ($tipoaper == 'divorcio' and $apertura3 == 'apertura12') {
	if ($numlibro=='' or $numlibro=='00' or $numlibro=='000'){
	
	  
$dompdf->loadHtml('<div> <strong>Debes de digitar el número de libro de la apertura a crear.</strong></div>');  
	  
	 
  }  else {
	  
	  
	  
$dompdf->loadHtml('<div style="position: absolute; top: 40%; left: 17%;  transform: translate(-10%, -30%);" align=" justify">
  EL PRESENTE LIBRO NUMERO '.$libro.' CONSTA DE QUINIENTAS PAGINAS UTILES, LEGALIZADAS TODAS CON EL SELLO DE ESTA OFICINA, FIRMADA LA PRIMERA Y RUBRICADA LA ULTIMA POR EL SUSCRITO JEFE DEL REGISTRO DEL ESTADO FAMILIAR Y POR LO TANTO SE AUTORIZA PARA QUE SE ASIENTEN PARTIDAS DE DIVORCIOS QUE OCURRAN DURANTE EL PRESENTE AÑO A PARTIR DE ESTA FECHA SEGÚN ACUERDO NUMERO VIENTITRES DE FECHA DIEZ DE ENERO DE MIL NOVECIENTOS NOVENTA Y SEIS, EMITIDO POR EL CONCEJO MUNICIPAL Y EN VIRTUD DE LOS ARTICULOS OCHO Y CUARENTA Y NUEVE DE LA LEY TRANSITORIA DEL REGISTRO DEL ESTADO FAMILIAR Y DE LOS REGIMENES PATRIMONIALES DEL MATRIMONIO CONTENIDA EN EL DECRETO LEGISLATIVO, NUMERO CUATROCIENTOS NOVENTA Y SEIS DE FECHA NUEVE DE NOVIEMBRE DE MIL NOVECIENTOS NOVENTA Y CINCO, PUBLICADO EN EL DIARIO OFICIAL NUMERO DOSCIENTOS NOVENTA Y OCHO TOMO TRESCIENTOS VEINTINUEVE DE FECHA OCHO DE DICIEMBRE DE MIL NOVECIENTOS NOVENTA Y CINCO.
<div>
<br>
<br>

<div align="justify">ALCALDIA DE SAN SALVADOR, '.$fecha_aperc.'<div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div align="center">'.$lin.'<br/>'.$jefer.'<br/>'.$carg.'</div>

				');}}
 if ($tipoaper == 'divorcio' and $apertura3 == 'cierre12') {
	 
	if ($numlibro=='' or $numlibro=='00' or $numlibro=='000'){
	
	  
$dompdf->loadHtml('<div> <strong>Debes de digitar el número de libro del cierre a crear.</strong></div>');  
	  
	 
  }  else { 
	 
$dompdf->loadHtml('<div style="position: absolute; top: 40%; left: 17%;  transform: translate(-10%, -30%);" align=" justify">
EL INFRASCRITO JEFE DEL REGISTRO DEL ESTADO FAMILIAR HACE CONSTAR QUE EL PRESENTE LIBRO NÚMERO '.$libro.' DE DIVORCIOS CONSTA DE QUINIENTOS FOLIOS, DE LOS CUALES'. $totall2 .'; '.$sinefecto2.''.$inhabilitado2.' POR CONSIGUIENTE'.$totall.'; SIENDO LA PRIMERA QUE CORRESPONDE A: '.$contrayente2 .' Y '.$contrayente1 .'; Y LA ULTIMA QUE CORRESPONDE A: '.$contrayente4 . ' Y '.$contrayente3 .'.
<div>
<br>
<br>

<div align="justify">ALCALDIA DE SAN SALVADOR, '.$fecha_aperc2.'<div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div align="center">'.$lin.'<br/>'.$jefer.'<br/>'.$carg.'</div>');}}
	 
if ($tipoaper == 'regimen' and $apertura3 == 'apertura12') {
	if ($numlibro=='' or $numlibro=='00' or $numlibro=='000'){
	
	  
$dompdf->loadHtml('<div> <strong>Debes de digitar el número de libro de la apertura a crear.</strong></div>');  
	  
	 
  }  else {
	  
	  
	  
$dompdf->loadHtml('<div style="position: absolute; top: 40%; left: 17%;  transform: translate(-10%, -30%);" align=" justify">
  EL PRESENTE LIBRO NUMERO '.$libro.' CONSTA DE QUINIENTAS PAGINAS UTILES, LEGALIZADAS TODAS CON EL SELLO DE ESTA OFICINA, FIRMADA LA PRIMERA Y RUBRICADA LA ULTIMA POR EL SUSCRITO JEFE DEL REGISTRO DEL ESTADO FAMILIAR Y POR LO TANTO SE AUTORIZA PARA QUE SE ASIENTEN PARTIDAS DE REGÍMENES PATRIMONIALES QUE OCURRAN DURANTE EL PRESENTE AÑO A PARTIR DE ESTA FECHA SEGÚN ACUERDO NUMERO VIENTITRES DE FECHA DIEZ DE ENERO DE MIL NOVECIENTOS NOVENTA Y SEIS, EMITIDO POR EL CONCEJO MUNICIPAL Y EN VIRTUD DE LOS ARTICULOS OCHO Y CUARENTA Y NUEVE DE LA LEY TRANSITORIA DEL REGISTRO DEL ESTADO FAMILIAR Y DE LOS REGIMENES PATRIMONIALES DEL MATRIMONIO CONTENIDA EN EL DECRETO LEGISLATIVO, NUMERO CUATROCIENTOS NOVENTA Y SEIS DE FECHA NUEVE DE NOVIEMBRE DE MIL NOVECIENTOS NOVENTA Y CINCO, PUBLICADO EN EL DIARIO OFICIAL NUMERO DOSCIENTOS NOVENTA Y OCHO TOMO TRESCIENTOS VEINTINUEVE DE FECHA OCHO DE DICIEMBRE DE MIL NOVECIENTOS NOVENTA Y CINCO.
<div>
<br>
<br>

<div align="justify">ALCALDIA DE SAN SALVADOR, '.$fecha_aperc.'<div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div align="center">'.$lin.'<br/>'.$jefer.'<br/>'.$carg.'</div>

				');}}
 if ($tipoaper == 'regimen' and $apertura3 == 'cierre12') {
	 
	if ($numlibro=='' or $numlibro=='00' or $numlibro=='000'){
	
	  
$dompdf->loadHtml('<div> <strong>Debes de digitar el número de libro del cierre a crear.</strong></div>');  
	  
	 
  }  else { 
	 
$dompdf->loadHtml('<div style="position: absolute; top: 40%; left: 17%;  transform: translate(-10%, -30%);" align=" justify">
EL INFRASCRITO JEFE DEL REGISTRO DEL ESTADO FAMILIAR HACE CONSTAR QUE EL PRESENTE LIBRO NÚMERO '.$libro.' DE REGÍMENES PATRIMONIALES CONSTA DE QUINIENTOS FOLIOS, DE LOS CUALES'. $totall2 .'; '.$sinefecto2.''.$inhabilitado2.' POR CONSIGUIENTE'.$totall.'; SIENDO LA PRIMERA QUE CORRESPONDE A: '.$contrayente2 .' Y '.$contrayente1 .'; Y LA ULTIMA QUE CORRESPONDE A: '.$contrayente4 . ' Y '.$contrayente3 .'.
<div>
<br>
<br>

<div align="justify">ALCALDIA DE SAN SALVADOR, '.$fecha_aperc2.'<div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div align="center">'.$lin.'<br/>'.$jefer.'<br/>'.$carg.'</div>');}}

if ($tipoaper == 'actas' and $apertura3 == 'apertura12') {
	if ($numlibro=='' or $numlibro=='00' or $numlibro=='000'){
	
	  
$dompdf->loadHtml('<div> <strong>Debes de digitar el número de libro de la apertura a crear.</strong></div>');  
	  
	 
  }  else {
	  
	  
	  
$dompdf->loadHtml('<div style="position: absolute; top: 40%; left: 17%;  transform: translate(-10%, -30%);" align=" justify">
  EL PRESENTE LIBRO NUMERO '.$libro.' CONSTA DE QUINIENTAS PAGINAS UTILES, LEGALIZADAS TODAS CON EL SELLO DE ESTA OFICINA, FIRMADA LA PRIMERA Y RUBRICADA LA ULTIMA POR EL SUSCRITO JEFE DEL REGISTRO DEL ESTADO FAMILIAR Y POR LO TANTO SE AUTORIZA PARA QUE SE ASIENTEN ACTAS MATRIMONIALES QUE OCURRAN DURANTE EL PRESENTE AÑO A PARTIR DE ESTA FECHA SEGÚN ACUERDO NUMERO VIENTITRES DE FECHA DIEZ DE ENERO DE MIL NOVECIENTOS NOVENTA Y SEIS, EMITIDO POR EL CONCEJO MUNICIPAL Y EN VIRTUD DE LOS ARTICULOS OCHO Y CUARENTA Y NUEVE DE LA LEY TRANSITORIA DEL REGISTRO DEL ESTADO FAMILIAR Y DE LOS REGIMENES PATRIMONIALES DEL MATRIMONIO CONTENIDA EN EL DECRETO LEGISLATIVO, NUMERO CUATROCIENTOS NOVENTA Y SEIS DE FECHA NUEVE DE NOVIEMBRE DE MIL NOVECIENTOS NOVENTA Y CINCO, PUBLICADO EN EL DIARIO OFICIAL NUMERO DOSCIENTOS NOVENTA Y OCHO TOMO TRESCIENTOS VEINTINUEVE DE FECHA OCHO DE DICIEMBRE DE MIL NOVECIENTOS NOVENTA Y CINCO.
<div>
<br>
<br>

<div align="justify">ALCALDIA DE SAN SALVADOR, '.$fecha_aperc.'<div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div align="center">'.$lin.'<br/>'.$jefer.'<br/>'.$carg.'</div>

				');}}
 if ($tipoaper == 'matrimonio' and $apertura3 == 'cierre12') {
	 
	if ($numlibro=='' or $numlibro=='00' or $numlibro=='000'){
	
	  
$dompdf->loadHtml('<div> <strong>Debes de digitar el número de libro del cierre a crear.</strong></div>');  
	  
	 
  }  else { 
	 
$dompdf->loadHtml('<div style="position: absolute; top: 40%; left: 17%;  transform: translate(-10%, -30%);" align=" justify">
EL INFRASCRITO JEFE DEL REGISTRO DEL ESTADO FAMILIAR HACE CONSTAR QUE EL PRESENTE LIBRO NÚMERO '.$libro.' DE ACTAS MATRIMONIALES CONSTA DE QUINIENTOS FOLIOS, DE LOS CUALES'. $totall2 .'; '.$sinefecto2.''.$inhabilitado2.' POR CONSIGUIENTE'.$totall.'; SIENDO LA PRIMERA QUE CORRESPONDE A: '.$contrayente2 .' Y '.$contrayente1 .'; Y LA ULTIMA QUE CORRESPONDE A: '.$contrayente4 . ' Y '.$contrayente3 .'.
<div>
<br>
<br>

<div align="justify">ALCALDIA DE SAN SALVADOR, '.$fecha_aperc2.'<div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div align="center">'.$lin.'<br/>'.$jefer.'<br/>'.$carg.'</div>');}}

if ($tipoaper == 'reservado' and $apertura1 == 'apertura1') {
	if ($numlibro=='' or $numlibro=='00' or $numlibro=='000'){
	
	  
$dompdf->loadHtml('<div> <strong>Debes de digitar el número de libro de la apertura a crear.</strong></div>');  
	  
	 
  }  else {
	  
	  
	  
$dompdf->loadHtml('<div style="position: absolute; top: 40%; left: 17%;  transform: translate(-10%, -30%);" align=" justify">
  EL PRESENTE LIBRO NUMERO '.$libro.' CONSTA DE QUINIENTAS PAGINAS UTILES, LEGALIZADAS TODAS CON EL SELLO DE ESTA OFICINA, FIRMADA LA PRIMERA Y RUBRICADA LA ULTIMA POR EL SUSCRITO JEFE DEL REGISTRO DEL ESTADO FAMILIAR Y POR LO TANTO SE AUTORIZA PARA QUE SE ASIENTEN PARTIDAS DE RESERVADOS DE ADOPCIÓN QUE OCURRAN DURANTE EL PRESENTE AÑO A PARTIR DE ESTA FECHA SEGÚN ACUERDO NUMERO VIENTITRES DE FECHA DIEZ DE ENERO DE MIL NOVECIENTOS NOVENTA Y SEIS, EMITIDO POR EL CONCEJO MUNICIPAL Y EN VIRTUD DE LOS ARTICULOS OCHO Y CUARENTA Y NUEVE DE LA LEY TRANSITORIA DEL REGISTRO DEL ESTADO FAMILIAR Y DE LOS REGIMENES PATRIMONIALES DEL MATRIMONIO CONTENIDA EN EL DECRETO LEGISLATIVO, NUMERO CUATROCIENTOS NOVENTA Y SEIS DE FECHA NUEVE DE NOVIEMBRE DE MIL NOVECIENTOS NOVENTA Y CINCO, PUBLICADO EN EL DIARIO OFICIAL NUMERO DOSCIENTOS NOVENTA Y OCHO TOMO TRESCIENTOS VEINTINUEVE DE FECHA OCHO DE DICIEMBRE DE MIL NOVECIENTOS NOVENTA Y CINCO.
<div>
<br>
<br>

<div align="justify">ALCALDIA DE SAN SALVADOR, '.$fecha_aperc.'<div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div align="center">'.$lin.'<br/>'.$jefer.'<br/>'.$carg.'</div>

				');}}
 if ($tipoaper == 'reservado' and $apertura1 == 'cierre1') {
	 
	if ($numlibro=='' or $numlibro=='00' or $numlibro=='000'){
	
	  
$dompdf->loadHtml('<div> <strong>Debes de digitar el número de libro del cierre a crear.</strong></div>');  
	  
	 
  }  else { 
	 
$dompdf->loadHtml('<div style="position: absolute; top: 40%; left: 17%;  transform: translate(-10%, -30%);" align=" justify">
EL INFRASCRITO JEFE DEL REGISTRO DEL ESTADO FAMILIAR HACE CONSTAR QUE EL PRESENTE LIBRO NÚMERO '.$libro.' DE RESERVADOS DE ADOPCIÓN CONSTA DE QUINIENTOS FOLIOS, DE LOS CUALES'. $totall2 .'; '.$sinefecto2.''.$inhabilitado2.' POR CONSIGUIENTE'.$totall.'; SIENDO LA PRIMERA QUE CORRESPONDE A: '.$menor1 .', '.$sexo.': '.$madre1.''.$padre1.'; Y LA ULTIMA QUE CORRESPONDE A: '.$menor1 .', '.$sexo2.': '.$madre2.''.$padre2.'.
<div>
<br>
<br>

<div align="justify">ALCALDIA DE SAN SALVADOR, '.$fecha_aperc2.'<div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div align="center">'.$lin.'<br/>'.$jefer.'<br/>'.$carg.'</div>');}}

 
// (Optional) Setup the paper size and orientation 
$dompdf->set_paper('letter', 'portrait');
 
// Render the HTML as PDF 
$dompdf->render(); 
 
$f;
$l;
if(headers_sent($f,$l))
{
    echo $f,'<br/>',$l,'<br/>';
    die('now detect line');
}
// Output the generated PDF to Browser 
$dompdf->stream('my.pdf',array('Attachment'=>0));
// Load content from html file 

$dompdf->loadHtml($html); 

?>
