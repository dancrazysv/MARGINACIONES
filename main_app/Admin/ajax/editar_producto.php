<?php
date_default_timezone_set('America/Costa_Rica');
include ("lib_fecha_texto.php");
include ("lib_fecha_texto2.php");
include ("lib_fecha_texto3.php");
include ("lib_fecha_texto4.php");
include ("fecha_l.php");
include ("quitar_espacios.php");
include ("funcion_nombres.php");
include ("lib_fecha_textopdfM.php");
include ("lib_fecha_texto_anio.php");
// Hora actual

$librofolioa = 	( empty($_POST['librofolioa']) )   ? NULL : $_POST['librofolioa'];
$librofoliodiv = 	( empty($_POST['librofolioadiv']) )   ? NULL : $_POST['librofolioadiv'];
$librofoliocd = 	( empty($_POST['librofolioacandef']) )   ? NULL : $_POST['librofolioacandef'];

$resultado = substr($librofoliodiv, 4);
$libros = substr($librofoliodiv,0,4);
$folio2 = $resultado+1;

$resultado2 = substr($librofolioa, 4);
$libros2 = substr($librofolioa,0,4);
$folio3 = $resultado2+1;

$resultadocd = substr($librofoliocd, 4);
$libroscd = substr($librofoliocd,0,4);
$foliocd2 = $resultadocd+1;
$librofoliocd2 = $libroscd.$foliocd2;



$librofolioa2 = $libros2.$folio3;
$librofoliodiv2 = $libros.$folio2;


$lin = "FIRMACMARGI.jpg";
$jefer = "Licda. Telma Francisca Ramos de García";
$carg = "Registrador del Estado Familiar";
$margpdf = ( empty($_POST['margpdf']) )   ? NULL : $_POST['margpdf'];
$margpdfdiv = ( empty($_POST['margpdfdiv']) )   ? NULL : $_POST['margpdfdiv'];


$margpdf2 = $margpdf + 1;
$margdiv2 = $margpdfdiv + 1;
$margpdf3 = $margpdfdiv + 2;


$est = "Activa";

 $hora = date("H:i:s");  
$dia = date('d');
$diaeste = numtoletras($dia);

if ($diaeste == "veintidos"){
	$dia_actual = "veintidós";
	} else if ($diaeste == "dieciseis"){
	$dia_actual = "dieciséis";
	} else if ($diaeste == "veintitres"){
	$dia_actual = "veintitrés";
	} else if ($diaeste == "veintiseis"){
	$dia_actual = "veintiséis";
	}
	else{
	$dia_actual = $diaeste;
	}




$anio = date('Y');

$anioconversion =  numtoletrasanio($anio);

if ($anioconversion == "dos mil veinti"){
	$anio_actual = "dos mil veintiuno";
	}
	
	else if ($anioconversion == "dos mil veintidos"){
	$anio_actual = "dos mil veintidós";
	}
	
	else
	{
		$anio_actual = $anioconversion;
	}












	
$fechaActual2 = date('Y-m-d');
$fechaActual = date('Y/m/d');
$mes_actual = strtolower(dater($fechaActual));





/////////////////////////////////////////
///////Variables Revisión Marginaciones
$textorevi = ( empty($_POST['textorev']) ) ? NULL : $_POST['textorev'];



$tiporevi = ( empty($_POST['tiporev']) ) ? NULL : $_POST['tiporev'];
$estadorevi1 = "revisado3";



$textorevi2 = ( empty($_POST['textorev2']) ) ? NULL : $_POST['textorev2'];



$tiporevi2 = ( empty($_POST['tiporev2']) ) ? NULL : $_POST['tiporev2'];
















/////////////////////////////////////////
///////Variables Marg. Otras
$txtotr = ( empty($_POST['txtotra']) ) ? NULL : $_POST['txtotra'];
$tipootr = ( empty($_POST['chkotr']) ) ? NULL : $_POST['chkotr'];
$margpdfotr = ( empty($_POST['margpdfotr']) ) ? NULL : $_POST['margpdfotr'];



/////////////////////////////////////////
///////Variables Marg. Varias
$tipovar = ( empty($_POST['variastipo']) ) ? NULL : $_POST['variastipo'];
$tipovareje = ( empty($_POST['ejecuvar1']) ) ? NULL : $_POST['ejecuvar1'];
$tipovarsen = ( empty($_POST['ejecuvar2']) ) ? NULL : $_POST['ejecuvar2'];
$tipovarnad = ( empty($_POST['optionsnad']) ) ? NULL : $_POST['optionsnad'];
$sexovar = ( empty($_POST['hijosvar']) ) ? NULL : $_POST['hijosvar'];
$tipoacta = ( empty($_POST['tipoaa']) ) ? NULL : $_POST['tipoaa'];

if ($sexovar == "hijo"){
	$sexovar = " hijo de ";
	$legivar = " legitimado ";
	}
	
	else {
		$sexovar = " hija de ";
		$legivar = " legitimada ";
	}

if ($tipoacta == "acuerdo"){
	$tipoacta = " acuerdo municipal número ";
	
	}
	
	else {
	
		$tipoacta = " acta número ";
	}




$menorvar = ( empty($_POST['nmenor']) ) ? NULL : $_POST['nmenor'];
$madrevar = ( empty($_POST['madrevar']) ) ? NULL : $_POST['madrevar'];
$padrevar = ( empty($_POST['padrevar']) ) ? NULL : $_POST['padrevar'];

$antecedelegi= ( empty($_POST['padrevar']) )   ? NULL : $_POST['padrevar'];
$lugarvar = ( empty($_POST['lugarvar']) ) ? NULL : $_POST['lugarvar'];
$nombrevar = ( empty($_POST['notariovar']) ) ? NULL : $_POST['notariovar'];
$datevars = ( empty($_POST['fechabvar']) ) ? NULL : $_POST['fechabvar'];
$fecharepo = ( empty($_POST['fechavaracu1']) ) ? NULL : $_POST['fechavaracu1'];

$newDate_varw = date('Y/m/d', strtotime($fecharepo));
$mes_B_varw = strtolower(dater($newDate_varw));

$varwDate2 = date('Y', strtotime($fecharepo));
$aniorepo = numtoletrasanio($varwDate2);

if ($aniorepo == "dos mil veinti"){
	$anio_B_varw = "dos mil veintiuno";
	}
	else if ($aniorepo == "dos mil veintidos"){
	$anio_B_varw = "dos mil veintidós";
	}


	else {
		$anio_B_varw = $aniorepo;
	}





	
$varwDate3 = date('d', strtotime($fecharepo));
$diavarw = numtoletras($varwDate3);

if ($diavarw == "veintidos"){
	$dia_B_varw = "veintidós";
	} else if ($diavarw == "dieciseis"){
	$dia_B_varw = "dieciséis";
	} else if ($diavarw == "veintitres"){
	$dia_B_varw = "veintitrés";
	} else if ($diavarw == "veintiseis"){
	$dia_B_varw = "veintiséis";
	} else{
	$dia_B_varw = $diavarw;
	}






$fecha_varw = $dia_B_varw . "" . $mes_B_varw . "" . $anio_B_varw; 

if ($fecharepo == ""){
	$fecharepo = "";

	}
	
	else {
		$fecharepo = " de fecha " . $fecha_varw;
	}





$newDate_vars = date('Y/m/d', strtotime($datevars));
$mes_B_vars = strtolower(dater($newDate_vars));

$varsDate2 = date('Y', strtotime($datevars));
$aniovarios = numtoletrasanio($varsDate2);
	
$varsDate3 = date('d', strtotime($datevars));
$diavars = numtoletras($varsDate3);

if ($diavars == "veintidos"){
	$dia_B_vars = "veintidós";
	} else if ($diavars == "dieciseis"){
	$dia_B_vars = "dieciséis";
	} else if ($diavars == "veintitres"){
	$dia_B_vars = "veintitrés";
	} else if ($diavars == "veintiseis"){
	$dia_B_vars = "veintiséis";
	} else{
	$dia_B_vars = $diavars;
	}






if ($aniovarios == "dos mil veinti"){
	$anio_B_vars = "dos mil veintiuno";
	}
	else if ($aniovarios == "dos mil veintidos"){
	$anio_B_vars = "dos mil veintidós";
	}
	
	else {
		$anio_B_vars = $aniovarios;
	}




$fecha_vars = $dia_B_vars . "" . $mes_B_vars . "" . $anio_B_vars; 

if ($datevars == ""){
	$datevars = "";

	}
	
	else {
		$datevars = " de fecha " . $fecha_vars;
	}

$optionvar = ( empty($_POST['optionvar']) )   ? NULL : $_POST['optionvar'];

$casovar2 = ( empty($_POST['txtotrovar']) )   ? NULL : $_POST['txtotrovar'];

if ($optionvar == "."){
	$optionvar = "";
	$casootrovar = trim($casovar2) . " en ";
	}
	else{
		$casootrovar = "";
	}


$lugarlegi = trim($casovar2). " en ";






$margpdfvar = ( empty($_POST['margpdfvar']) ) ? NULL : $_POST['margpdfvar'];
$aniovar = ( empty($_POST['aniovar']) ) ? NULL : $_POST['aniovar'];
$librovar = ( empty($_POST['librovar']) ) ? NULL : $_POST['librovar'];
$folvar = ( empty($_POST['folvar']) ) ? NULL : $_POST['folvar'];
$numvar = ( empty($_POST['numvar']) ) ? NULL : $_POST['numvar'];

$aniovart = numtoletrasanio($aniovar);



if ($aniovart == "dos mil veinti"){
	$aniovar2 = "dos mil veintiuno";
	}
else if ($aniovart == "dos mil veintidos"){
	$aniovar2 = "dos mil veintidós";
	}
else if ($aniovart == "mil novecientos veintidos"){
	$aniovar2 = "mil novecientos veintidós";
	}
else if ($aniovart == "mil novecientos veintitres"){
	$aniovar2 = "mil novecientos veintitrés";
	}
else if ($aniovart == "mil novecientos veintiseis"){
	$aniovar2 = "mil novecientos veintiséis";
	}

	else {
		$aniovar2 = $aniovart;
	}


if ($librovar == "16"){
		$librovar2 = "dieciséis";
	}
	elseif ($librovar == "22"){
		$librovar2 = "veintidós";
	}

	elseif ($librovar == "23"){
		$librovar2 = "veintitrés";
	}
	elseif ($librovar == "26"){
		$librovar2 = "veintiséis";
	}

else {
		$librovar2 = numtoletras($librovar);
	}




if ($folvar == "16"){
		$folvar2 = "dieciséis";
	}
	elseif ($folvar == "22"){
		$folvar2 = "veintidós";
	}

	elseif ($folvar == "23"){
		$folvar2 = "veintitrés";
	}
	elseif ($folvar == "26"){
		$folvar2 = "veintiséis";
	}

else {
		$folvar2 = numtoletras($folvar);
	}


if ($numvar == "16"){
		$numvar2 = "dieciséis";
	}
	elseif ($numvar == "22"){
		$numvar2 = "veintidós";
	}

	elseif ($numvar == "23"){
		$numvar2 = "veintitrés";
	}
	elseif ($numvar == "26"){
		$numvar2 = "veintiséis";
	}

else {
		
$numvar2 = numtoletras($numvar);
	}















$actavar = ( empty($_POST['acuer']) ) ? NULL : $_POST['acuer'];



if ($actavar == "16"){
		$actavar2 = "dieciséis";
	}
	elseif ($actavar == "22"){
		$actavar2 = "veintidós";
	}

	elseif ($actavar == "23"){
		$actavar2 = "veintitrés";
	}
	elseif ($actavar == "26"){
		$actavar2 = "veintiséis";
	}

else {
		
$actavar2 = numtoletras($actavar);
	}







// Hora de varias 1
$hora_var = ( empty($_POST['timevar1']) )   ? NULL : $_POST['timevar1'];
$hora_var2 = date('G', strtotime($hora_var));

if ($hora_var2 == "20"){
	$hora_var3 = "veinte";

	}
	elseif ($hora_var2 == "21"){
		$hora_var3 = "veintiún";
	}
	elseif ($hora_var2 == "16"){
		$hora_var3 = "dieciséis";
	}
	elseif ($hora_var2 == "22"){
		$hora_var3 = "veintidós";
	}

	elseif ($hora_var2 == "23"){
		$hora_var3 = "veintitrés";
	}
	elseif ($hora_var2 == "26"){
		$hora_var3 = "veintiséis";
	}

else {
		$hora_var3 = numtoletras4($hora_var2);
	}


$min_var2 =  strtotime($hora_var);
$min_var3 =  date("i", $min_var2);




if ($min_var3  == "16"){
		$min_var4  = "dieciséis";
	}
	elseif ($min_var3 == "22"){
		$min_var4  = "veintidós";
	}

	elseif ($min_var3  == "23"){
		$min_var4  = "veintitrés";
	}
	elseif ($min_var3  == "26"){
		$min_var4  = "veintiséis";
	}

else {
		$min_var4 =  numtoletras($min_var3);
	}










// Fecha de varias 1
$datevar = ( empty($_POST['fechavari1']) )   ? NULL : $_POST['fechavari1'];
$newDate_var = date('Y/m/d', strtotime($datevar));
$mes_B_var = strtolower(dater($newDate_var));

$varDate2 = date('Y', strtotime($datevar));
$anioBvar = numtoletrasanio($varDate2);

if ($anioBvar == "dos mil veinti"){
	$anio_B_var = "dos mil veintiuno";
	}
else if ($anioBvar == "dos mil veintidos"){
	$anio_B_var = "dos mil veintidós";
	}

	
	else {
		$anio_B_var = $anioBvar;
	}



	
$varDate3 = date('d', strtotime($datevar));
$diabvar = numtoletras($varDate3);
if ($diabvar == "veintidos"){
	$dia_B_var = "veintidós";
	} else if ($diabvar == "dieciseis"){
	$dia_B_var = "dieciséis";
	} else if ($diabvar == "veintitres"){
	$dia_B_var = "veintitrés";
	} else if ($diabvar == "veintiseis"){
	$dia_B_var = "veintiséis";
	} else{
	$dia_B_var = $diabvar;
	}






$fecha_var = $dia_B_var . "" . $mes_B_var . "" . $anio_B_var; 


// Por - varias 1
$por_var01 = ( empty($_POST['porvartxt1']) )   ? NULL : $_POST['porvartxt1'];
$por_var = trim($por_var01);


if ($hora_var == ""){
	$hora_var = "";

	}
	elseif ($min_var4 == "uno"){
		$hora_var = " a las " . $hora_var3 . " horas con un minuto";
	}
		elseif ($min_var3 == "00"){
		$hora_var = " a las " . $hora_var3 . " horas";	
	}		
	else {
		$hora_var = " a las " . $hora_var3 . " horas con " . $min_var4 . " minutos";
	}

/////////// fecha varias 1
 if ($datevar == "" and $hora_var == ""){
	$datevar = "";

	}else if ($datevar != "" and $hora_var == ""){
		$datevar = " el día " . $fecha_var;
	}else if ($datevar != "" and $hora_var != ""){
		$datevar = " del día " . $fecha_var;
	}













		
	 if ($por_var == ""){
	$por_var = "";

	}
	
	else {
		$por_var = ", por " . $por_var;
		}

// Hora de varias 2
$hora_vari = ( empty($_POST['timevar2']) )   ? NULL : $_POST['timevar2'];
$hora_vari2 = date('G', strtotime($hora_vari));

if ($hora_vari2 == "20"){
	$hora_vari3 = "veinte";

	}
	elseif ($hora_vari2 == "21"){
		$hora_vari3 = "veintiún";
	}

	elseif ($hora_vari2 == "16"){
		$hora_vari3 = "dieciséis";
	}
	elseif ($hora_vari2 == "22"){
		$hora_vari3 = "veintidós";
	}

	elseif ($hora_vari2 == "23"){
		$hora_vari3 = "veintitrés";
	}
	elseif ($hora_vari2 == "26"){
		$hora_vari3 = "veintiséis";
	}

else {
		$hora_vari3 = numtoletras4($hora_vari2);
	}



$min_vari2 =  strtotime($hora_vari);
$min_vari3 =  date("i", $min_vari2);


if ($min_vari3  == "16"){
		$min_vari4  = "dieciséis";
	}
	elseif ($min_vari3 == "22"){
		$min_vari4  = "veintidós";
	}

	elseif ($min_vari3  == "23"){
		$min_vari4  = "veintitrés";
	}
	elseif ($min_vari3  == "26"){
		$min_vari4  = "veintiséis";
	}

else {
		$min_vari4 =  numtoletras($min_vari3);
	}









// Fecha de varias 2
$datevari = ( empty($_POST['fechavari2']) )   ? NULL : $_POST['fechavari2'];
$newDate_vari = date('Y/m/d', strtotime($datevari));
$mes_B_vari = strtolower(dater($newDate_vari));

$variDate2 = date('Y', strtotime($datevari));
$anio_varios = numtoletrasanio($variDate2);


if ($anio_varios == "dos mil veinti"){
	$anio_B_vari = "dos mil veintiuno";
	}
else if ($anio_varios == "dos mil veintidos"){
	$anio_B_vari = "dos mil veintidós";
	}

	
	else {
		$anio_B_vari = $anio_varios;
	}








	
$variDate3 = date('d', strtotime($datevari));
$diabvari = numtoletras($variDate3);

if ($diabvari == "veintidos"){
	$dia_B_vari = "veintidós";
	} else if ($diabvari == "dieciseis"){
	$dia_B_vari = "dieciséis";
	} else if ($diabvari == "veintitres"){
	$dia_B_vari = "veintitrés";
	} else if ($diabvari == "veintiseis"){
	$dia_B_vari = "veintiséis";
	} else{
	$dia_B_vari = $diabvari;
	}





$fecha_vari = $dia_B_vari . "" . $mes_B_vari . "" . $anio_B_vari; 


// Por - varias 1
$por_vari01 = ( empty($_POST['porvartxt2']) )   ? NULL : $_POST['porvartxt2'];
$por_vari = trim($por_vari01);

if ($hora_vari == ""){
	$hora_vari = "";

	}
	elseif ($min_vari4 == "uno"){
		$hora_vari = " a las " . $hora_vari3 . " horas con un minuto";
	}
		elseif ($min_vari3 == "00"){
		$hora_vari = " a las " . $hora_vari3 . " horas";	
	}		
	else {
		$hora_vari = " a las " . $hora_vari3 . " horas con " . $min_vari4 . " minutos";
	}

/////////// fecha varias 2
 if ($datevari == "" and $hora_vari == ""){
	$datevari = "";

	}else if ($datevari != "" and $hora_vari == ""){
		$datevari = " el día " . $fecha_vari;
	}else if ($datevari != "" and $hora_vari != ""){
		$datevari = " del día " . $fecha_vari;
	}
		
		


	 if ($por_vari == ""){
	$por_vari = "";

	}
	
	else {
		$por_vari = ", por " . $por_vari;
		}












/////////////////////////// Variables Union no Matr
$tipoju = ( empty($_POST['valuedivnjsr']) )   ? NULL : $_POST['valuedivnjsr'];
$tipoju2 = ( empty($_POST['valuedivnjser']) )   ? NULL : $_POST['valuedivnjser'];

$tiporeg = ( empty($_POST['regim']) )   ? NULL : $_POST['regim'];
$regpdf = ( empty($_POST['margpdfreg']) )   ? NULL : $_POST['margpdfreg'];
$nregel = ( empty($_POST['edit_elreg']) )   ? NULL : $_POST['edit_elreg'];
$nregella = ( empty($_POST['edit_ellareg']) )   ? NULL : $_POST['edit_ellareg'];

$nuevoreg = ( empty($_POST['nreg']) )   ? NULL : $_POST['nreg'];
$cargoreg = ( empty($_POST['cargo_reg']) )   ? NULL : $_POST['cargo_reg'];
$nfunreg = ( empty($_POST['nfunreg']) )   ? NULL : $_POST['nfunreg'];
$lugarreg = ( empty($_POST['lugarreg']) )   ? NULL : $_POST['lugarreg'];


// Hora de Union no Matr
$hora_reg = ( empty($_POST['timedecrenjsr']) )   ? NULL : $_POST['timedecrenjsr'];
$hora_reg2 = date('G', strtotime($hora_reg));


if ($hora_reg2 == "20"){
	$hora_reg3 = "veinte";

	}
	elseif ($hora_reg2 == "21"){
		$hora_reg3 = "veintiún";
	}

elseif ($hora_reg2  == "16"){
		$hora_reg3 = "dieciséis";
	}
	elseif ($hora_reg2  == "22"){
		$hora_reg3 = "veintidós";
	}

	elseif ($hora_reg2  == "23"){
		$hora_reg3 = "veintitrés";
	}
	elseif ($hora_reg2  == "26"){
		$hora_reg3 = "veintiséis";
	}

else {
		$hora_reg3 = numtoletras4($hora_reg2);
	}

$min_reg2 =  strtotime($hora_reg);
$min_reg3 =  date("i", $min_reg2);

if ($min_reg3  == "16"){
		$min_reg4  = "dieciséis";
	}
	elseif ($min_reg3 == "22"){
		$min_reg4  = "veintidós";
	}

	elseif ($min_reg3  == "23"){
		$min_reg4  = "veintitrés";
	}
	elseif ($min_reg3  == "26"){
		$min_reg4  = "veintiséis";
	}

else {
		$min_reg4 =  numtoletras($min_reg3);
	}


// Fecha de Union no Matr.
$datereg = ( empty($_POST['fechadecrenjsr']) )   ? NULL : $_POST['fechadecrenjsr'];
$newDate_reg = date('Y/m/d', strtotime($datereg));
$mes_B_reg = strtolower(dater($newDate_reg));

$regDate2 = date('Y', strtotime($datereg));
$anioregimen = numtoletrasanio($regDate2);



if ($anioregimen == "dos mil veinti"){
	$anio_B_reg = "dos mil veintiuno";
	}
else if ($anioregimen == "dos mil veintidos"){
	$anio_B_reg = "dos mil veintidós";
	}	


	else {
		$anio_B_reg = $anioregimen;
	}




	
$regDate3 = date('d', strtotime($datereg));
$diareg = numtoletras($regDate3);

if ($diareg == "veintidos"){
	$dia_B_reg = "veintidós";
	} else if ($diareg == "dieciseis"){
	$dia_B_reg = "dieciséis";
	} else if ($diareg == "veintitres"){
	$dia_B_reg = "veintitrés";
	} else if ($diareg == "veintiseis"){
	$dia_B_reg = "veintiséis";
	} else{
	$dia_B_reg = $diareg;
	}



$fecha_reg = $dia_B_reg . "" . $mes_B_reg . "" . $anio_B_reg; 


// Por - Union no Matr.
$por_reg01 = ( empty($_POST['txt_por_sjuzr']) )   ? NULL : $_POST['txt_por_sjuzr'];
$por_reg = trim($por_reg01);


if ($hora_reg == ""){
	$hora_reg = "";

	}
	elseif ($min_reg4 == "uno"){
		$hora_reg = " a las " . $hora_reg3 . " horas con un minuto";
	}
		elseif ($min_reg3 == "00"){
		$hora_reg = " a las " . $hora_reg3 . " horas";	
	}		
	else {
		$hora_reg = " a las " . $hora_reg3 . " horas con " . $min_reg4 . " minutos";
	}

/////////// fecha union no matr
 if ($datereg == "" and $hora_reg == ""){
	$datereg = "";

	}
	
	else if ($datereg != "" and $hora_reg == ""){
		$datereg = " el día " . $fecha_reg;
	}else if ($datereg != "" and $hora_reg != ""){
		$datereg = " del día " . $fecha_reg;
	}
		


	 if ($por_reg == ""){
	$por_reg = "";

	}
	
	else {
		$por_reg = ", por " . $por_reg;
		}
		
// Fecha de regimen
$dateregc = ( empty($_POST['Fecharegs']) )   ? NULL : $_POST['Fecharegs'];
$newDate_regc = date('Y/m/d', strtotime($dateregc));
$mes_B_regc = strtolower(dater($newDate_regc));

$regDatec2 = date('Y', strtotime($dateregc));
$anioreg = numtoletrasanio($regDatec2);

if ($anioreg == "dos mil veinti"){
	$anio_B_regc = "dos mil veintiuno";
	}
else if ($anioreg == "dos mil veintidos"){
	$anio_B_regc = "dos mil veintidós";
	}	

	else {
		$anio_B_regc = $anioreg;
	}



	
$regDatec3 = date('d', strtotime($dateregc));
$diaregc = numtoletras($regDatec3);

if ($diaregc == "veintidos"){
	$dia_B_regc  = "veintidós";
	} else if ($diaregc == "dieciseis"){
	$dia_B_regc = "dieciséis";
	} else if ($diaregc == "veintitres"){
	$dia_B_regc = "veintitrés";
	} else if ($diaregc == "veintiseis"){
	$dia_B_regc = "veintiséis";
	} else{
	$dia_B_regc  = $diaregc;
	}



$fecha_regc = $dia_B_regc . "" . $mes_B_regc . "" . $anio_B_regc; 		
		
if ($dateregc == ""){
	$dateregc = "";

	}
	
	else {
		$dateregc = ", el día " . $fecha_regc;
	}











		
// Fecha de regimen 2
$daterego = ( empty($_POST['Fecharegs2']) )   ? NULL : $_POST['Fecharegs2'];
$newDate_rego = date('Y/m/d', strtotime($daterego));
$mes_B_rego = strtolower(dater($newDate_rego));

$regDateo2 = date('Y', strtotime($daterego));
$aniorego  = numtoletrasanio($regDateo2);

if ($aniorego  == "dos mil veinti"){
	$anio_B_rego  = "dos mil veintiuno";
	}
	else if ($aniorego  == "dos mil veintidos"){
	$anio_B_rego  = "dos mil veintidós";
	}

	else {
		$anio_B_rego  = $aniorego;
	}


	
$regDateo3 = date('d', strtotime($daterego));
$diarego = numtoletras($regDateo3);

if ($diarego == "veintidos"){
	$dia_B_rego  = "veintidós";
	} else if ($diarego == "dieciseis"){
	$dia_B_rego = "dieciséis";
	} else if ($diarego == "veintitres"){
	$dia_B_rego = "veintitrés";
	} else if ($diarego == "veintiseis"){
	$dia_B_rego = "veintiséis";
	} else{
	$dia_B_rego  = $diarego;
	}



$fecha_rego = $dia_B_rego . "" . $mes_B_rego . "" . $anio_B_rego; 		
		
if ($daterego == ""){
	$daterego = "";

	}
	
	else {
		$daterego = ", el día " . $fecha_rego;
	}
		


		
	
// Hora de Union no Matr
$hora_regu = ( empty($_POST['timedecrenjser']) )   ? NULL : $_POST['timedecrenjser'];
$hora_regu2 = date('G', strtotime($hora_regu));


if ($hora_regu2 == "20"){
	$hora_regu3 = "veinte";

	}
	elseif ($hora_regu2 == "21"){
		$hora_regu3 = "veintiún";
	}

elseif ($hora_regu2  == "16"){
		$hora_regu3 = "dieciséis";
	}
	elseif ($hora_regu2  == "22"){
		$hora_regu3 = "veintidós";
	}

	elseif ($hora_regu2  == "23"){
		$hora_regu3 = "veintitrés";
	}
	elseif ($hora_regu2  == "26"){
		$hora_regu3 = "veintiséis";
	}

else {
		$hora_regu3 = numtoletras4($hora_regu2);
	}



$min_regu2 =  strtotime($hora_regu);
$min_regu3 =  date("i", $min_regu2);

if ($min_regu3  == "16"){
		$min_regu4  = "dieciséis";
	}
	elseif ($min_regu3 == "22"){
		$min_regu4  = "veintidós";
	}

	elseif ($min_regu3  == "23"){
		$min_regu4  = "veintitrés";
	}
	elseif ($min_regu3  == "26"){
		$min_regu4  = "veintiséis";
	}

else {
		$min_regu4 =  numtoletras($min_regu3);
	}



// Fecha de Union no Matr. 2
$dateregu = ( empty($_POST['fechadecrenjser']) )   ? NULL : $_POST['fechadecrenjser'];
$newDate_regu = date('Y/m/d', strtotime($dateregu));
$mes_B_regu = strtolower(dater($newDate_regu));

$regDateu2 = date('Y', strtotime($dateregu));
$anioregu = numtoletrasanio($regDateu2);

if ($anioregu  == "dos mil veinti"){
	$anio_B_regu  = "dos mil veintiuno";
	}
	else if ($anioregu  == "dos mil veintidos"){
	$anio_B_regu  = "dos mil veintidós";
	}

	else {
		$anio_B_regu  = $anioregu;
	}



	
$regDateu3 = date('d', strtotime($dateregu));
$diaregu = numtoletras($regDateu3);

if ($diaregu == "veintidos"){
	$dia_B_regu  = "veintidós";
	} else if ($diaregu == "dieciseis"){
	$dia_B_regu = "dieciséis";
	} else if ($diaregu == "veintitres"){
	$dia_B_regu = "veintitrés";
	} else if ($diaregu == "veintiseis"){
	$dia_B_regu = "veintiséis";
	} else{
	$dia_B_regu  = $diaregu;
	}



$fecha_regu = $dia_B_regu . "" . $mes_B_regu . "" . $anio_B_regu; 

// Por - Union no Matr. 2
$por_regu01 = ( empty($_POST['txt_por_ejuzr']) )   ? NULL : $_POST['txt_por_ejuzr'];
$por_regu = trim($por_regu01);

if ($hora_regu == ""){
	$hora_regu = "";

	}
	elseif ($min_regu4 == "uno"){
		$hora_regu = " a las " . $hora_regu3 . " horas con un minuto";
	}
		elseif ($min_regu3 == "00"){
		$hora_regu = " a las " . $hora_regu3 . " horas";	
	}		
	else {
		$hora_regu = " a las " . $hora_regu3 . " horas con " . $min_regu4 . " minutos";
	}

/////////// fecha union no matr. 2
 if ($dateregu == "" and $hora_regu == ""){
	$dateregu = "";

	}else if ($dateregu != "" and $hora_regu == ""){
		$dateregu = " el día " . $fecha_regu;
	}else if ($dateregu != "" and $hora_regu != ""){
		$dateregu = " del día " . $fecha_regu;
	}
		











	 if ($por_regu == ""){
	$por_regu = "";

	}
	
	else {
		$por_regu = ", por " . $por_regu;
	}

/////////////////////////////////////////
///////Variables tutorias
$tipotu = ( empty($_POST['autori']) ) ? NULL : $_POST['autori'];
$tipotuto = ( empty($_POST['inifinal']) ) ? NULL : $_POST['inifinal'];
$cargotu = ( empty($_POST['cargot']) ) ? NULL : $_POST['cargot'];
$nombretu = ( empty($_POST['ntutor']) ) ? NULL : $_POST['ntutor'];
$respectotu = ( empty($_POST['nrespecto']) ) ? NULL : $_POST['nrespecto'];
$sentenciatu = ( empty($_POST['ejecututo1']) ) ? NULL : $_POST['ejecututo1'];
$ejecutoriatu = ( empty($_POST['ejecututo2']) ) ? NULL : $_POST['ejecututo2'];
$margpdftu = ( empty($_POST['margpdfaut']) ) ? NULL : $_POST['margpdfaut'];
$autoridadtu = ( empty($_POST['perdida']) ) ? NULL : $_POST['perdida'];
$padrestu = ( empty($_POST['nperdida']) ) ? NULL : $_POST['nperdida'];
$hijostu = ( empty($_POST['hijos']) ) ? NULL : $_POST['hijos'];
$hijostur = ( empty($_POST['hijosr']) ) ? NULL : $_POST['hijosr'];
$repretu = ( empty($_POST['decrep']) ) ? NULL : $_POST['decrep'];
$tiporepre = ( empty($_POST['decrep']) ) ? NULL : $_POST['decrep'];
$nhijotu = ( empty($_POST['nhijo']) ) ? NULL : $_POST['nhijo'];
$tipopadretu = ( empty($_POST['padresp']) ) ? NULL : $_POST['padresp'];
$npadreotro = ( empty($_POST['notrore']) ) ? NULL : $_POST['notrore'];
$npadretu = ( empty($_POST['npadre']) ) ? NULL : $_POST['npadre'];

$tutorpara = ( empty($_POST['tutorpara']) ) ? NULL : $_POST['tutorpara'];


$portuto = ( empty($_POST['portuto']) ) ? NULL : $_POST['portuto'];
$lugartuto = ( empty($_POST['lugartuto']) ) ? NULL : $_POST['lugartuto'];




$oficiotuto = ( empty($_POST['ofituto']) ) ? NULL : $_POST['ofituto'];



if ($oficiotuto == "16"){
		$oficiotuto2 = "dieciséis";
	}
	elseif ($oficiotuto == "22"){
		$oficiotuto2 = "veintidós";
	}

	elseif ($oficiotuto == "23"){
		$oficiotuto2 = "veintitrés";
	}
	elseif ($oficiotuto == "26"){
		$oficiotuto2 = "veintiséis";
	}

else {
		
$oficiotuto2 = numtoletras($oficiotuto);
	}



$fechartuto = ( empty($_POST['fechartuto']) ) ? NULL : $_POST['fechartuto'];

$newDate_ampli = date('Y/m/d', strtotime($fechartuto));
$mes_B_ampli = strtolower(dater($newDate_ampli));

$varwDateampli = date('Y', strtotime($fechartuto));
$aniorepoampli = numtoletrasanio($varwDateampli);

if ($aniorepoampli == "dos mil veinti"){
	$anio_B_ampli = "dos mil veintiuno";
	}
	else if ($aniorepoampli == "dos mil veintidos"){
	$anio_B_ampli = "dos mil veintidós";
	}


	else {
		$anio_B_ampli = $aniorepoampli;
	}





	
$varwDateampli2 = date('d', strtotime($fechartuto));
$diavarwampli = numtoletras($varwDateampli2);

if ($diavarwampli == "veintidos"){
	$dia_B_varw_ampli = "veintidós";
	} else if ($diavarwampli == "dieciseis"){
	$dia_B_varw_ampli = "dieciséis";
	} else if ($diavarwampli == "veintitres"){
	$dia_B_varw_ampli = "veintitrés";
	} else if ($diavarwampli == "veintiseis"){
	$dia_B_varw_ampli = "veintiséis";
	} else{
	$dia_B_varw_ampli = $diavarwampli;
	}






$fecha_varw_ampli = $dia_B_varw_ampli . "" . $mes_B_ampli . "" . $anio_B_ampli; 

if ($fechartuto == ""){
	$fechartuto = "";

	}
	
	else {
		$fechartuto = ", de fecha " . $fecha_varw_ampli;
	}











$hijoauto = ( empty($_POST['nautoridadnombre']) ) ? NULL : $_POST['nautoridadnombre'];
$porauto = ( empty($_POST['autoridadpor']) ) ? NULL : $_POST['autoridadpor'];

if ($porauto != ""){
	$porautodos = ", ". $porauto;

	}
	else{
		$porautodos = "";
	}













if ($tipopadretu == "padre"){
	$tipopadretu = "el padre ";

	}
	elseif ($tipopadretu == "madre"){
		$tipopadretu = "la madre ";
	}
			
	else {
		$tipopadretu  = "" . $npadreotro . " ";
	}

if ($hijostur == "hijo"){
	$menorr = " del menor ";
	}
	
	else {
		$menorr = " de la menor ";
	}






// Hora de Tutoria sentencia
$hora_tuto = ( empty($_POST['timetu1']) )   ? NULL : $_POST['timetu1'];
$hora_tuto2 = date('G', strtotime($hora_tuto));


if ($hora_tuto2 == "20"){
	$hora_tuto3 = "veinte";

	}
	elseif ($hora_tuto2 == "21"){
		$hora_tuto3 = "veintiún";
	}

elseif ($hora_tuto2  == "16"){
		$hora_tuto3  = "dieciséis";
	}
	elseif ($hora_tuto2 == "22"){
		$hora_tuto3  = "veintidós";
	}

	elseif ($hora_tuto2  == "23"){
		$hora_tuto3  = "veintitrés";
	}
	elseif ($hora_tuto2  == "26"){
		$hora_tuto3  = "veintiséis";
	}

else {
		$hora_tuto3 = numtoletras4($hora_tuto2);
	}



$min_tuto2 =  strtotime($hora_tuto);
$min_tuto3 =  date("i", $min_tuto2);

if ($min_tuto3  == "16"){
		$min_tuto4  = "dieciséis";
	}
	elseif ($min_tuto3 == "22"){
		$min_tuto4  = "veintidós";
	}

	elseif ($min_tuto3  == "23"){
		$min_tuto4  = "veintitrés";
	}
	elseif ($min_tuto3  == "26"){
		$min_tuto4  = "veintiséis";
	}

else {
		$min_tuto4 =  numtoletras($min_tuto3);
	}



// Fecha de Tutoria
$datetuto = ( empty($_POST['fechatuto1']) )   ? NULL : $_POST['fechatuto1'];
$newDate_tuto = date('Y/m/d', strtotime($datetuto));
$mes_B_tuto = strtolower(dater($newDate_tuto));

$tutoDate2 = date('Y', strtotime($datetuto));
$aniotuto = numtoletrasanio($tutoDate2);



if ($aniotuto  == "dos mil veinti"){
	$anio_B_tuto  = "dos mil veintiuno";
	}
else if ($aniotuto  == "dos mil veintidos"){
	$anio_B_tuto  = "dos mil veintidós";
	}	


	else {
		$anio_B_tuto  = $aniotuto;
	}



	
$tutoDate3 = date('d', strtotime($datetuto));
$diatuto = numtoletras($tutoDate3);

if ($diatuto == "veintidos"){
	$dia_B_tuto  = "veintidós";
	} else if ($diatuto == "dieciseis"){
	$dia_B_tuto = "dieciséis";
	} else if ($diatuto == "veintitres"){
	$dia_B_tuto = "veintitrés";
	} else if ($diatuto == "veintiseis"){
	$dia_B_tuto = "veintiséis";
	} else{
	$dia_B_tuto  = $diatuto;
	}



$fecha_tuto = $dia_B_tuto . "" . $mes_B_tuto . "" . $anio_B_tuto; 


// Por - Tutoria
$por_tuto01 = ( empty($_POST['portutxt1']) )   ? NULL : $_POST['portutxt1'];
$por_tuto = trim($por_tuto01);

if ($hora_tuto == ""){
	$hora_tuto = "";

	}
	elseif ($min_tuto4 == "uno"){
		$hora_tuto = " a las " . $hora_tuto3 . " horas con un minuto";
	}
		elseif ($min_tuto3 == "00"){
		$hora_tuto = " a las " . $hora_tuto3 . " horas";	
	}		
	else {
		$hora_tuto = " a las " . $hora_tuto3 . " horas con " . $min_tuto4 . " minutos";
	}

/////////// fecha tutorias



 if ($datetuto == "" and $hora_tuto == ""){
	$datetuto = "";

	}else if ($datetuto != "" and $hora_tuto == ""){
		$datetuto = " el día " . $fecha_tuto;
	}else if ($datetuto != "" and $hora_tuto != ""){
		$datetuto = " del día " . $fecha_tuto;
	}
		
















		
	 if ($por_tuto == ""){
	$por_tuto = "";

	}
	
	else {
		$por_tuto = ", por " . $por_tuto;
		}
		






/////////////////////////////////////// fechas y horas sentencia perdina nacionalidad

$numpdfprnac = ( empty($_POST['margpdfprnac']) )   ? NULL : $_POST['margpdfprnac'];



		// Hora de nacionalidad sentencia
$hora_prnac = ( empty($_POST['timeprnac']) )   ? NULL : $_POST['timeprnac'];
$hora_prnac2 = date('G', strtotime($hora_prnac));


if ($hora_prnac2 == "20"){
	$hora_prnac3 = "veinte";

	}
	elseif ($hora_prnac2 == "21"){
		$hora_prnac3 = "veintiún";
	}

elseif ($hora_prnac2  == "16"){
		$hora_prnac3  = "dieciséis";
	}
	elseif ($hora_prnac2 == "22"){
		$hora_prnac3  = "veintidós";
	}

	elseif ($hora_prnac2  == "23"){
		$hora_prnac3  = "veintitrés";
	}
	elseif ($hora_prnac2  == "26"){
		$hora_prnac3  = "veintiséis";
	}

else {
		$hora_prnac3 = numtoletras4($hora_prnac2);
	}



$min_prnac2 =  strtotime($hora_prnac);
$min_prnac3 =  date("i", $min_prnac2);

if ($min_prnac3  == "16"){
		$min_prnac4  = "dieciséis";
	}
	elseif ($min_prnac3 == "22"){
		$min_prnac4  = "veintidós";
	}

	elseif ($min_prnac3  == "23"){
		$min_prnac4  = "veintitrés";
	}
	elseif ($min_prnac3  == "26"){
		$min_prnac4  = "veintiséis";
	}

else {
		$min_prnac4 =  numtoletras($min_prnac3);
	}



// Fecha de nacionalidad
$dateprnac = ( empty($_POST['fechaprnacdate']) )   ? NULL : $_POST['fechaprnacdate'];
$newDate_prnac = date('Y/m/d', strtotime($dateprnac));
$mes_B_prnac = strtolower(dater($newDate_prnac));

$prnacDate2 = date('Y', strtotime($dateprnac));
$anioprnac = numtoletrasanio($prnacDate2);



if ($anioprnac  == "dos mil veinti"){
	$anio_B_prnac = "dos mil veintiuno";
	}
else if ($anioprnac  == "dos mil veintidos"){
	$anio_B_prnac = "dos mil veintidós";
	}	


	else {
		$anio_B_prnac = $anioprnac;
	}



	
$prnacDate3 = date('d', strtotime($dateprnac));
$diaprnac = numtoletras($prnacDate3);

if ($diaprnac == "veintidos"){
	$dia_B_prnac  = "veintidós";
	} else if ($diaprnac == "dieciseis"){
	$dia_B_prnac = "dieciséis";
	} else if ($diaprnac == "veintitres"){
	$dia_B_prnac = "veintitrés";
	} else if ($diaprnac == "veintiseis"){
	$dia_B_prnac = "veintiséis";
	} else{
	$dia_B_prnac  = $diaprnac;
	}



$fecha_prnac = $dia_B_prnac . "" . $mes_B_prnac . "" . $anio_B_prnac; 


// Por - nacionalidad
$por_prnac01 = ( empty($_POST['porprnactxt1']) )   ? NULL : $_POST['porprnactxt1'];
$por_prnac = trim($por_prnac01);

if ($hora_prnac == ""){
	$hora_prnac = "";

	}
	elseif ($min_prnac4 == "uno"){
		$hora_prnac = " a las " . $hora_prnac3 . " horas con un minuto";
	}
		elseif ($min_prnac3 == "00"){
		$hora_prnac = " a las " . $hora_prnac3 . " horas";	
	}		
	else {
		$hora_prnac = " a las " . $hora_prnac3 . " horas con " . $min_prnac4 . " minutos";
	}

/////////// fecha nacionalidad



 if ($dateprnac == "" and $hora_prnac == ""){
	$dateprnac = "";

	}else if ($dateprnac != "" and $hora_prnac == ""){
		$dateprnac = " el día " . $fecha_prnac;
	}else if ($dateprnac != "" and $hora_prnac != ""){
		$dateprnac = " del día " . $fecha_prnac;
	}
		

		
	 if ($por_prnac == ""){
	$por_prnac = "";

	}
	
	else {
		$por_prnac = ", por " . $por_prnac;
		}









// Hora de tutoria ejecutoria
$hora_tutos = ( empty($_POST['timetu2']) )   ? NULL : $_POST['timetu2'];
$hora_tutos2 = date('G', strtotime($hora_tutos));


if ($hora_tutos2 == "20"){
	$hora_tutos3 = "veinte";

	}
	elseif ($hora_tutos2 == "21"){
		$hora_tutos3 = "veintiún";
	}
	elseif ($hora_tutos2  == "16"){
		$hora_tutos3  = "dieciséis";
	}
	elseif ($hora_tutos2 == "22"){
		$hora_tutos3  = "veintidós";
	}

	elseif ($hora_tutos2  == "23"){
		$hora_tutos3  = "veintitrés";
	}
	elseif ($hora_tutos2  == "26"){
		$hora_tutos3  = "veintiséis";
	}

else {
		$hora_tutos3 = numtoletras4($hora_tutos2);
	}



$min_tutos2 =  strtotime($hora_tutos);
$min_tutos3 =  date("i", $min_tutos2);

if ($min_tutos3  == "16"){
		$min_tutos4  = "dieciséis";
	}
	elseif ($min_tutos3 == "22"){
		$min_tutos4  = "veintidós";
	}

	elseif ($min_tutos3  == "23"){
		$min_tutos4  = "veintitrés";
	}
	elseif ($min_tutos3  == "26"){
		$min_tutos4  = "veintiséis";
	}

else {
		$min_tutos4 =  numtoletras($min_tutos3);
	}



// Fecha de tutosria
$datetutos = ( empty($_POST['fechatuto2']) )   ? NULL : $_POST['fechatuto2'];
$newDate_tutos = date('Y/m/d', strtotime($datetutos));
$mes_B_tutos = strtolower(dater($newDate_tutos));

$tutosDate2 = date('Y', strtotime($datetutos));
$aniotutos = numtoletrasanio($tutosDate2);
	

if ($aniotutos  == "dos mil veinti"){
	$anio_B_tutos  = "dos mil veintiuno";
	}
else if ($aniotutos  == "dos mil veintidos"){
	$anio_B_tutos  = "dos mil veintidós";
	}
		
	else {
		$anio_B_tutos  = $aniotutos;
	}





$tutosDate3 = date('d', strtotime($datetutos));
$diatutos = numtoletras($tutosDate3);

if ($diatutos == "veintidos"){
	$dia_B_tutos  = "veintidós";
	} else if ($diatutos == "dieciseis"){
	$dia_B_tutos = "dieciséis";
	} else if ($diatutos == "veintitres"){
	$dia_B_tutos = "veintitrés";
	} else if ($diatutos == "veintiseis"){
	$dia_B_tutos = "veintiséis";
	} else{
	$dia_B_tutos  = $diatutos;
	}


$fecha_tutos = $dia_B_tutos . "" . $mes_B_tutos . "" . $anio_B_tutos; 


// Por - tutoria
$por_tutos01 = ( empty($_POST['portutxt2']) )   ? NULL : $_POST['portutxt2'];
$por_tutos = trim($por_tutos01);

if ($hora_tutos == ""){
	$hora_tutos = "";

	}
	elseif ($min_tutos4 == "uno"){
		$hora_tutos = " a las " . $hora_tutos3 . " horas con un minuto";
	}
		elseif ($min_tutos3 == "00"){
		$hora_tutos = " a las " . $hora_tutos3 . " horas";	
	}		
	else {
		$hora_tutos = " a las " . $hora_tutos3 . " horas con " . $min_tutos4 . " minutos";
	}

/////////// fecha tutorias


 if ($datetutos == "" and $hora_tutos == ""){
	$datetutos = "";

	}else if ($datetutos != "" and $hora_tutos == ""){
		$datetutos = " el día " . $fecha_tutos;
	}else if ($datetutos != "" and $hora_tutos != ""){
		$datetutos = " del día " . $fecha_tutos;
	}












		
	 if ($por_tutos == ""){
	$por_tutos = "";

	}
	
	else {
		$por_tutos = ", por " . $por_tutos;
		}
		










//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////// Fecha de Defunción
$datecd = ( empty($_POST['Fechacd']) )   ? NULL : $_POST['Fechacd'];
$newDate_cd = date('Y/m/d', strtotime($datecd));
$mes_B_cd = strtolower(dater($newDate_cd));

$Date2cd = date('Y', strtotime($datecd));
$aniocd = numtoletrasanio($Date2cd);
	

if ($aniocd  == "dos mil veinti"){
	$anio_B_cd  = "dos mil veintiuno";
	}
	else if ($aniocd  == "dos mil veintidos"){
	$anio_B_cd  = "dos mil veintidós";
	}
		else {
		$anio_B_cd  = $aniocd;
	}



$Date3cd = date('d', strtotime($datecd));
$diacd = numtoletras($Date3cd);

if ($diacd == "veintidos"){
	$dia_B_cd  = "veintidós";
	} else if ($diacd == "dieciseis"){
	$dia_B_cd = "dieciséis";
	} else if ($diacd == "veintitres"){
	$dia_B_cd = "veintitrés";
	} else if ($diacd == "veintiseis"){
	$dia_B_cd = "veintiséis";
	} else{
	$dia_B_cd  = $diacd;
	}


$fecha_cd = $dia_B_cd . "" . $mes_B_cd . "" . $anio_B_cd; 

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////// Fecha de Identidades
$dateid = ( empty($_POST['Fechaid']) )   ? NULL : $_POST['Fechaid'];
$newDate_id = date('Y/m/d', strtotime($dateid));
$mes_B_id = strtolower(dater($newDate_id));

$Date2id = date('Y', strtotime($dateid));
$anioid = numtoletrasanio($Date2id);


if ($anioid  == "dos mil veinti"){
	$anio_B_id  = "dos mil veintiuno";
	}
else if ($anioid  == "dos mil veintidos"){
	$anio_B_id  = "dos mil veintidós";
	}
	
else {
		$anio_B_id  = $anioid;
	}



	
$Date3id = date('d', strtotime($dateid));
$diaid = numtoletras($Date3id);

if ($diaid == "veintidos"){
	$dia_B_id  = "veintidós";
	} else if ($diaid == "dieciseis"){
	$dia_B_id = "dieciséis";
	} else if ($diaid == "veintitres"){
	$dia_B_id = "veintitrés";
	} else if ($diaid == "veintiseis"){
	$dia_B_id = "veintiséis";
	} else{
	$dia_B_id  = $diaid;
	}


$fecha_id = $dia_B_id . "" . $mes_B_id . "" . $anio_B_id; 

if ($dateid == ""){
	$dateid = "";

	}
	
	else {
		$dateid = " de fecha " . $fecha_id;
	}




/////////////////////////// Variables Identidades
$margpdfiden = ( empty($_POST['margpdfiden']) )   ? NULL : $_POST['margpdfiden'];
$margpdfiden2 = $margpdfiden + 1;
$sexoid = ( empty($_POST['sexoid']) )   ? NULL : $_POST['sexoid'];
$sexoid2 = ( empty($_POST['sexoid']) )   ? NULL : $_POST['sexoid'];

if ($sexoid == "male"){
	$sexoid = " conocido por";

	}
	
	else {
		$sexoid = " conocida por";
	}

	if ($sexoid2 == "male"){
	$sexoid2 = " fue conocido por";

	}
	
	else {
		$sexoid2 = " fue conocida por";
	}
	
	


$niden = ( empty($_POST['edit_nid']) )   ? NULL : $_POST['edit_nid'];
$niden2 = ( empty($_POST['edit_nid2']) )   ? NULL : $_POST['edit_nid2'];

$conide = ( empty($_POST['conoid']) )   ? NULL : $_POST['conoid'];
$conide2 = ( empty($_POST['conoid2']) )   ? NULL : $_POST['conoid2'];

$tipoide = ( empty($_POST['siden']) )   ? NULL : $_POST['siden'];

$cargoid = ( empty($_POST['cargoid']) )   ? NULL : $_POST['cargoid'];
$nombreiden = ( empty($_POST['nombrefid']) )   ? NULL : $_POST['nombrefid'];
$lugarid = ( empty($_POST['lugarid']) )   ? NULL : $_POST['lugarid'];



///////////// Variables de Cancelaciones por defunción

$tipocd = ( empty($_POST['scandef']) )   ? NULL : $_POST['scandef'];
$nombrecd = ( empty($_POST['edit_ncd']) )   ? NULL : $_POST['edit_ncd'];
$lugarcdef = ( empty($_POST['lugarcf']) )   ? NULL : $_POST['lugarcf'];
$lugarcd = trim($lugarcdef);
$foliocd = ( empty($_POST['tipofcd']) )   ? NULL : $_POST['tipofcd'];
$numparpdfcd = ( empty($_POST['margpdfcandef']) )   ? NULL : $_POST['margpdfcandef'];
$numparpdfcd2 = $numparpdfcd+1;
$numparpdfcd3 = $numparpdfcd+2;
$viudocd = ( empty($_POST['viudo']) )   ? NULL : $_POST['viudo'];

$sexocd = ( empty($_POST['sexocd']) )   ? NULL : $_POST['sexocd'];
$sexocdfaX = ( empty($_POST['sexocdfa']) )   ? NULL : $_POST['sexocdfa'];
$sexocdfaY = ( empty($_POST['sexocdfa']) )   ? NULL : $_POST['sexocdfa'];




if ($foliocd == "ss"){
$aniocdef = ( empty($_POST['edefanio']) )   ? NULL : $_POST['edefanio'];
$librocdef = ( empty($_POST['librodef']) )   ? NULL : $_POST['librodef'];
$numpcdef = ( empty($_POST['numdef']) )   ? NULL : $_POST['numdef'];
$foliocdef = ( empty($_POST['foliodef']) )   ? NULL : $_POST['foliodef'];
$alcaldiacd = ( empty($_POST['alcaldiadef']) )   ? NULL : $_POST['alcaldiadef'];
$tipolibronum = ( empty($_POST['librotipo']) )   ? NULL : $_POST['librotipo'];

	
$aniodef2 = numtoletrasanio($aniocdef);
	
if ($aniodef2 == "dos mil veinti"){
	$aniocdef2  = "dos mil veintiuno";
	}
else if ($aniodef2  == "dos mil veintidos"){
	$aniocdef2  = "dos mil veintidós";
	}

else {
		$aniocdef2  = $aniodef2;
	}	
	
	
if ($tipolibronum != ""){

$librocdef2 = numtoletras(trim($librocdef)). " " . $tipolibronum;
}
else {

$librocdef2 = numtoletras(trim($librocdef));

}

$numpcdef2 = numtoletrasanio(trim($numpcdef));
$foliocdef2 = numtoletrasanio(trim($foliocdef));
	
$pardef = " número " . $numpcdef2 . ", folio " . $foliocdef2 . ", libro " . $librocdef2 . ", del año " . $aniocdef2 . ", extendida por la Alcaldía de " . trim($alcaldiacd) . "";

	}
	
	else if ($foliocd == "ss2"){
$aniocdefo = ( empty($_POST['foliodef2']) )   ? NULL : $_POST['foliodef2'];
$alcaldiacdo = ( empty($_POST['alcaldiadefdos']) )   ? NULL : $_POST['alcaldiadefdos'];
$pardef = " ". $aniocdefo . ", extendida por la Alcaldía de " . trim($alcaldiacdo) . "";		
		
	}

if ($datecd == ""){
	$datecd = "";

	}
	
	else {
		$datecd = " el día " . $fecha_cd;
	}


if ($lugarcd == ""){
	$lugarcd = "";

	}
	
	else {
		$lugarcd = ", en " . $lugarcd;
	}

$conocandef1 = ( empty($_POST['conotxtcandef1']) )   ? NULL : $_POST['conotxtcandef1'];
$conocandef2 = ( empty($_POST['conotxtcandef2']) )   ? NULL : $_POST['conotxtcandef2'];




if ($sexocd == "male" and $conocandef1 != ""){
	
	$sexocdcon = ", conocido por " . trim(titleCase($conocandef1));

	}
	
	elseif ($sexocd == "female" and $conocandef1 != ""){ 
		
		$sexocdcon = ", conocida por ". trim(titleCase($conocandef1));
	}
else 
	{ 		
	$sexocdcon = "";
		}												
														

if ($sexocdfaX == "male" and $conocandef2 != ""){
	$sexocdfa = "el cónyuge ";
	$sexocandef = ", conocido por  ". trim(titleCase($conocandef2));

	}
	else if ($sexocdfaX == "male" and $conocandef2 == ""){
	$sexocdfa = "el cónyuge ";
	$sexocandef = "";
	
	}
	
	if ($sexocdfaX == "female" and $conocandef2 != ""){
		
		$sexocdfa = "la cónyuge ";
		$sexocandef = ", conocida por  ". trim(titleCase($conocandef2));
	}
else if ($sexocdfaX == "female" and $conocandef2 == ""){
	$sexocdfa = "la cónyuge ";
	$sexocandef = "";
	
	}




//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////// Fecha de Adecuaciones
$datead = ( empty($_POST['Fechaad']) )   ? NULL : $_POST['Fechaad'];
$newDate_ad = date('Y/m/d', strtotime($datead));
$mes_B_ad = strtolower(dater($newDate_ad));

$Date2ad = date('Y', strtotime($datead));
$anioad = numtoletrasanio($Date2ad);

if ($anioad  == "dos mil veinti"){
	$anio_B_ad  = "dos mil veintiuno";
	}
else if ($anioad  == "dos mil veintidos"){
	$anio_B_ad  = "dos mil veintidós";
	}

else {
		$anio_B_ad  = $anioad;
	}



	
$Date3ad = date('d', strtotime($datead));
$diaad = numtoletras($Date3ad);

if ($diaad == "veintidos"){
	$dia_B_ad  = "veintidós";
	} else if ($diaad == "dieciseis"){
	$dia_B_ad = "dieciséis";
	} else if ($diaad == "veintitres"){
	$dia_B_ad = "veintitrés";
	} else if ($diaad == "veintiseis"){
	$dia_B_ad = "veintiséis";
	} else{
	$dia_B_ad  = $diaad;
	}



$fecha_ad = $dia_B_ad . "" . $mes_B_ad . "" . $anio_B_ad; 

if ($datead == ""){
	$datead = "";

	}
	
	else {
		$datead = " de fecha " . $fecha_ad;
	}




/////////////////////////// Variables Adecuaciones
$tipoad = ( empty($_POST['sadec']) )   ? NULL : $_POST['sadec'];
$margpdfadec = ( empty($_POST['margpdfadec']) )   ? NULL : $_POST['margpdfadec'];
$sexoad = ( empty($_POST['sexoad']) )   ? NULL : $_POST['sexoad'];
$sexoad2 = ( empty($_POST['sexoad']) )   ? NULL : $_POST['sexoad'];
$sexoad2mat = ( empty($_POST['sexoad']) )   ? NULL : $_POST['sexoad'];
$tipopadres = ( empty($_POST['padresad']) )   ? NULL : $_POST['padresad'];

if ($sexoad == "male"){
	$sexoad = "del inscrito ";
	$sexoadmat = "del contrayente ";
	}
	
	else {
		$sexoad = "de la inscrita ";
		$sexoadmat = "de la contrayente ";
	}

	if ($sexoad2 == "male"){
	$sexoad2 = " el inscrito ";

	}
	
	else {
		$sexoad2 = " la inscrita ";
	}
	
	if ($tipopadres == "padre"){
	$tipopadres = " el padre ";

	}
	
	else {
		$tipopadres = " la madre ";
	}




$nadec = ( empty($_POST['nombreadec']) )   ? NULL : $_POST['nombreadec'];
$padres_adec = ( empty($_POST['nombre_padres']) )   ? NULL : $_POST['nombre_padres'];

$apelliadec = ( empty($_POST['apeadec']) )   ? NULL : $_POST['apeadec'];
$cargoadec = ( empty($_POST['cargo_adec']) )   ? NULL : $_POST['cargo_adec'];

$nfuncioadec = ( empty($_POST['nfunadec']) )   ? NULL : $_POST['nfunadec'];

$lugaradec = ( empty($_POST['lugaradec']) )   ? NULL : $_POST['lugaradec'];

$folioad= ( empty($_POST['tipofad']) )   ? NULL : $_POST['tipofad'];
////////////////////// Seleccion de foliacion adecuacion por ext. partida

if ($folioad == "ssad"){
$aniocdefad = ( empty($_POST['adefanio']) )   ? NULL : $_POST['adefanio'];
$librocdefad = ( empty($_POST['librodefad']) )   ? NULL : $_POST['librodefad'];
$numpcdefad = ( empty($_POST['numdefad']) )   ? NULL : $_POST['numdefad'];
$foliocdefad = ( empty($_POST['foliodefad']) )   ? NULL : $_POST['foliodefad'];
$alcaldiaad = ( empty($_POST['alcaldiadefad']) )   ? NULL : $_POST['alcaldiadefad'];
$tipolibronumade = ( empty($_POST['librotipoade']) )   ? NULL : $_POST['librotipoade'];

	
$anioefad = numtoletrasanio($aniocdefad);
	
if ($anioefad  == "dos mil veinti"){
	$aniocdefad2  = "dos mil veintiuno";
	}
else if ($anioefad  == "dos mil veintidos"){
	$aniocdefad2  = "dos mil veintidós";
	} 	
	
	else {
		$aniocdefad2  = $anioefad;
	}	

	

if ($tipolibronumade != ""){

$librocdefad2 = numtoletras(trim($librocdefad)). " " . $tipolibronumade;
}
else {

$librocdefad2 = numtoletras(trim($librocdefad));

}







$numpcdefad2 = numtoletrasanio($numpcdefad);
$foliocdefad2 = numtoletrasanio($foliocdefad);
	
$pardefad = " número " . $numpcdefad2 . ", folio " . $foliocdefad2 . ", libro " . $librocdefad2 . ", del año " . $aniocdefad2 . ", extendida por la Alcaldía de " . trim($alcaldiaad) . "";

	}
	
	else if ($folioad == "ssad2"){
$aniocdefoad = ( empty($_POST['foliodefad2']) )   ? NULL : $_POST['foliodefad2'];
$alcaldiacdoad = ( empty($_POST['alcaldiadefad2']) )   ? NULL : $_POST['alcaldiadefad2'];
$pardefad = " ". $aniocdefoad . ", extendida por la Alcaldía de " . trim($alcaldiacdoad) . "";		
		
	}














//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////// Fecha resolucion art 15
$date151 = ( empty($_POST['Fecha151']) )   ? NULL : $_POST['Fecha151'];
$newDate_151 = date('Y/m/d', strtotime($date151));
$mes_B_151 = strtolower(dater($newDate_151));

$Date2151 = date('Y', strtotime($date151));
$anio151 = numtoletrasanio($Date2151);


if ($anio151  == "dos mil veinti"){
	$anio_B_151  = "dos mil veintiuno";
	}
else if ($anio151  == "dos mil veintidos"){
	$anio_B_151  = "dos mil veintidós";
	}

	else {
		$anio_B_151  = $anio151;
	}


	
$Date3151 = date('d', strtotime($date151));
$dia151 = numtoletras($Date3151);

if ($dia151 == "veintidos"){
	$dia_B_151  = "veintidós";
	} else if ($dia151 == "dieciseis"){
	$dia_B_151 = "dieciséis";
	} else if ($dia151 == "veintitres"){
	$dia_B_151 = "veintitrés";
	} else if ($dia151 == "veintiseis"){
	$dia_B_151 = "veintiséis";
	} else{
	$dia_B_151  = $dia151;
	}


$fecha_151 = $dia_B_151 . "" . $mes_B_151 . "" . $anio_B_151; 


///////////////// Fecha resolucion art 15 - 2
$date152 = ( empty($_POST['Fecha152']) )   ? NULL : $_POST['Fecha152'];
$newDate_152 = date('Y/m/d', strtotime($date152));
$mes_B_152 = strtolower(dater($newDate_152));

$Date2152 = date('Y', strtotime($date152));
$anio152 = numtoletrasanio($Date2152);


if ($anio152  == "dos mil veinti"){
	$anio_B_152  = "dos mil veintiuno";
	}
else if ($anio152  == "dos mil veintidos"){
	$anio_B_152  = "dos mil veintidós";
	}

	else {
		$anio_B_152  = $anio152;
	}


	
$Date3152 = date('d', strtotime($date152));
$dia152 = numtoletras($Date3152);

if ($dia152== "veintidos"){
	$dia_B_152  = "veintidós";
	} else if ($dia152 == "dieciseis"){
	$dia_B_152 = "dieciséis";
	} else if ($dia152 == "veintitres"){
	$dia_B_152 = "veintitrés";
	} else if ($dia152 == "veintiseis"){
	$dia_B_152 = "veintiséis";
	} else{
	$dia_B_152  = $dia152;
	}



$fecha_152 = $dia_B_152 . "" . $mes_B_152 . "" . $anio_B_152; 



///////////////// Variables POST art 15 nombre

$nombre151 = ( empty($_POST['nombre151']))  ? NULL : $_POST['nombre151'];
$nombre152 = ( empty($_POST['nombre152']))  ? NULL : $_POST['nombre152'];

//////////////// Variable para crear el numero de PDF

$margpdf17 = ( empty($_POST['margpdf17']) )   ? NULL : $_POST['margpdf17'];
$margpdf172 = $margpdf17 + 1;

///////////////// Variables POST art 15 sexo
$sexo151 = ( empty($_POST['sexo']) )   ? NULL : $_POST['sexo'];
$sexo152 = ( empty($_POST['sexo2']) )   ? NULL : $_POST['sexo2'];

///////////////// Variables POST art 15 1 o 2 marg.

$art151 = ( empty($_POST['art1517']) )   ? NULL : $_POST['art1517'];



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////// Fecha resolucion art 17
$date171 = ( empty($_POST['Fecha171']) )   ? NULL : $_POST['Fecha171'];
$newDate_171 = date('Y/m/d', strtotime($date171));
$mes_B_171 = strtolower(dater($newDate_171));

$Date2171 = date('Y', strtotime($date171));
$anio171 = numtoletrasanio($Date2171);
	
if ($anio171  == "dos mil veinti"){
	$anio_B_171  = "dos mil veintiuno";
	}
else if ($anio171  == "dos mil veintidos"){
	$anio_B_171  = "dos mil veintidós";
	}	
	else {
		$anio_B_171  = $anio171;
	}	



$Date3171 = date('d', strtotime($date171));
$dia171 = numtoletras($Date3171);

if ($dia171 == "veintidos"){
	$dia_B_171  = "veintidós";
	} else if ($dia171 == "dieciseis"){
	$dia_B_171 = "dieciséis";
	} else if ($dia171 == "veintitres"){
	$dia_B_171 = "veintitrés";
	} else if ($dia171 == "veintiseis"){
	$dia_B_171 = "veintiséis";
	} else{
	$dia_B_171  = $dia171;
	}



$fecha_171 = $dia_B_171 . "" . $mes_B_171 . "" . $anio_B_171; 


///////////////// Fecha resolucion art 17 - 2
$date172 = ( empty($_POST['Fecha172']) )   ? NULL : $_POST['Fecha172'];
$newDate_172 = date('Y/m/d', strtotime($date172));
$mes_B_172 = strtolower(dater($newDate_172));

$Date2172 = date('Y', strtotime($date172));
$anio172 = numtoletrasanio($Date2172);

if ($anio172  == "dos mil veinti"){
	$anio_B_172  = "dos mil veintiuno";
	}
else if ($anio172  == "dos mil veintidos"){
	$anio_B_172  = "dos mil veintidós";
	}	
	else {
		$anio_B_172  = $anio172;
	}	



	
$Date3172 = date('d', strtotime($date172));
$dia172 = numtoletras($Date3172);

if ($dia172 == "veintidos"){
	$dia_B_172  = "veintidós";
	} else if ($dia172 == "dieciseis"){
	$dia_B_172 = "dieciséis";
	} else if ($dia172 == "veintitres"){
	$dia_B_172 = "veintitrés";
	} else if ($dia172 == "veintiseis"){
	$dia_B_172 = "veintiséis";
	} else{
	$dia_B_172  = $dia172;
	}



$fecha_172 = $dia_B_172 . "" . $mes_B_172 . "" . $anio_B_172; 



///////////////// Variables de habilitacion para nombre y tipo de partida

$hnombre = ( empty($_POST['17nombre']))  ? NULL : $_POST['17nombre'];
$hnombre2 = ( empty($_POST['17nombre2']) )   ? NULL : $_POST['17nombre2'];

$tipo17 = ( empty ($_POST['tipopart']))   ? NULL : $_POST['tipopart'];
$tipo172 = ( empty($_POST['tipopart2']))  ? NULL : $_POST['tipopart2'];


///////////////// Variables de nombres

$nombre171 = ( empty($_POST['nombre17']))  ? NULL : $_POST['nombre17'];
$nombre172 = ( empty($_POST['nombre172']))   ? NULL : $_POST['nombre172'];


///////////////// Variables de en el sentido que

$sentido1 = ( empty($_POST['sentido17']))  ? NULL : $_POST['sentido17']; 
$sentido2 = ( empty($_POST['sentido172']))  ? NULL : $_POST['sentido172']; 

//////////////// Cambio de variables si en caso fueran vacias o no
if ($nombre171 == ""){
	$nombre171 = "";

	}
	
	else {
		$nombre171 = " a nombre de " . trim(titleCase($nombre171));
	}

if ($nombre172 == ""){
	$nombre172 = "";

	}
	
	else {
		$nombre172 = " a nombre de " . trim(titleCase($nombre172));
	}
if ($tipo17 == ""){
	$tipo17 = "";

	}
	
	else {
		$tipo17 = " de " . $tipo17;
	}
if ($tipo172 == ""){
	$tipo172 = "";

	}
	
	else {
		$tipo172 = " de " . $tipo172;
	}


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////







// Hora de Divorcio - Decreto Exterior
$hora_ext = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
$hora_ext2 = date('G', strtotime($hora_ext));


if ($hora_ext2 == "20"){
	$hora_ext3 = "veinte";

	}
	elseif ($hora_ext2 == "21"){
		$hora_ext3 = "veintiún";
	}

	elseif ($hora_ext2  == "16"){
		$hora_ext3  = "dieciséis";
	}
	elseif ($hora_ext2 == "22"){
		$hora_ext3  = "veintidós";
	}

	elseif ($hora_ext2  == "23"){
		$hora_ext3  = "veintitrés";
	}
	elseif ($hora_ext2  == "26"){
		$hora_ext3  = "veintiséis";
	}

else {
		$hora_ext3 = numtoletras4($hora_ext2);
	}




$min_ext2 =  strtotime($hora_ext);
$min_ext3 =  date("i", $min_ext2);

if ($min_ext3  == "16"){
		$min_ext4  = "dieciséis";
	}
	elseif ($min_ext3 == "22"){
		$min_ext4  = "veintidós";
	}

	elseif ($min_ext3  == "23"){
		$min_ext4  = "veintitrés";
	}
	elseif ($min_ext3  == "26"){
		$min_ext4  = "veintiséis";
	}

else {
		$min_ext4 =  numtoletras($min_ext3);
	}


// Fecha de Divorcio - Decreto Exterior
$dateext = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
$newDate_ext = date('Y/m/d', strtotime($dateext));
$mes_B_ext = strtolower(dater($newDate_ext));

$extDate2 = date('Y', strtotime($dateext));
$anioext = numtoletrasanio($extDate2);

if ($anioext  == "dos mil veinti"){
	$anio_B_ext  = "dos mil veintiuno";
	}
else if ($anioext  == "dos mil veintidos"){
	$anio_B_ext  = "dos mil veintidós";
	}	
	else {
		$anio_B_ext  = $anioext;
	}	




	
$extDate3 = date('d', strtotime($dateext));
$diaext = numtoletras($extDate3);

if ($diaext == "veintidos"){
	$dia_B_ext  = "veintidós";
	} else if ($diaext == "dieciseis"){
	$dia_B_ext = "dieciséis";
	} else if ($diaext == "veintitres"){
	$dia_B_ext = "veintitrés";
	} else if ($diaext == "veintiseis"){
	$dia_B_ext = "veintiséis";
	} else{
	$dia_B_ext  = $diaext;
	}




$fecha_ext = $dia_B_ext . "" . $mes_B_ext . "" . $anio_B_ext; 

// Por - Decreto Exterior
$por_ext01 = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];
$por_ext = trim($por_ext01);


// Hora de Divorcio - CSJ
$hora_csj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
$hora_csj2 = date('G', strtotime($hora_csj));


if ($hora_csj2 == "20"){
	$hora_csj3 = "veinte";

	}
	elseif ($hora_csj2 == "21"){
		$hora_csj3 = "veintiún";
	}

	elseif ($hora_csj2  == "16"){
		$hora_csj3  = "dieciséis";
	}
	elseif ($hora_csj2 == "22"){
		$hora_csj3  = "veintidós";
	}

	elseif ($hora_csj2  == "23"){
		$hora_csj3  = "veintitrés";
	}
	elseif ($hora_csj2  == "26"){
		$hora_csj3  = "veintiséis";
	}

else {
		$hora_csj3 = numtoletras4($hora_csj2);
	}


$min_csj2 =  strtotime($hora_csj);
$min_csj3 =  date("i", $min_csj2);

if ($min_csj3  == "16"){
		$min_csj4  = "dieciséis";
	}
	elseif ($min_csj3 == "22"){
		$min_csj4  = "veintidós";
	}

	elseif ($min_csj3  == "23"){
		$min_csj4  = "veintitrés";
	}
	elseif ($min_csj3  == "26"){
		$min_csj4  = "veintiséis";
	}

else {
		$min_csj4 =  numtoletras($min_csj3);
	}



// Fecha de Divorcio - CSJ
$datecsj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
$newDate_csj = date('Y/m/d', strtotime($datecsj));
$mes_B_csj = strtolower(dater($newDate_csj));

$csjDate2 = date('Y', strtotime($datecsj));
$aniocsj = numtoletrasanio($csjDate2);
	
if ($aniocsj  == "dos mil veinti"){
	$anio_B_csj  = "dos mil veintiuno";
	}
else if ($aniocsj  == "dos mil veintidos"){
	$anio_B_csj  = "dos mil veintidós";
	}
		
	else {
		$anio_B_csj  = $aniocsj;
	}	




$csjDate3 = date('d', strtotime($datecsj));
$diacsj = numtoletras($csjDate3);

if ($diacsj == "veintidos"){
	$dia_B_csj  = "veintidós";
	} else if ($diacsj == "dieciseis"){
	$dia_B_csj = "dieciséis";
	} else if ($diacsj == "veintitres"){
	$dia_B_csj = "veintitrés";
	} else if ($diacsj == "veintiseis"){
	$dia_B_csj = "veintiséis";
	} else{
	$dia_B_csj  = $diacsj;
	}


$fecha_csj = $dia_B_csj . "" . $mes_B_csj . "" . $anio_B_csj; 

// Por - Decreto CSJ
$por_csjt01 = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];
$por_csjt = trim($por_csjt01);


// Hora de Divorcio - Resolucion Juzgado
$hora_rjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
$hora_rjuz2 = date('G', strtotime($hora_rjuz));

if ($hora_rjuz2 == "20"){
	$hora_rjuz3 = "veinte";

	}
	elseif ($hora_rjuz2 == "21"){
		$hora_rjuz3 = "veintiún";
	}
elseif ($hora_rjuz2  == "16"){
		$hora_rjuz3  = "dieciséis";
	}
	elseif ($hora_rjuz2 == "22"){
		$hora_rjuz3  = "veintidós";
	}

	elseif ($hora_rjuz2  == "23"){
		$hora_rjuz3  = "veintitrés";
	}
	elseif ($hora_rjuz2  == "26"){
		$hora_rjuz3  = "veintiséis";
	}

else {
		$hora_rjuz3 = numtoletras4($hora_rjuz2);
	}


$min_rjuz2 =  strtotime($hora_rjuz);
$min_rjuz3 =  date("i", $min_rjuz2);

if ($min_rjuz3  == "16"){
		$min_rjuz4  = "dieciséis";
	}
	elseif ($min_rjuz3 == "22"){
		$min_rjuz4  = "veintidós";
	}

	elseif ($min_rjuz3  == "23"){
		$min_rjuz4  = "veintitrés";
	}
	elseif ($min_rjuz3  == "26"){
		$min_rjuz4  = "veintiséis";
	}

else {
		$min_rjuz4 =  numtoletras($min_rjuz3);
	}



// Fecha de Divorcio - RJuzgado
$daterjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
$newDate_rjuz = date('Y/m/d', strtotime($daterjuz));
$mes_B_rjuz = strtolower(dater($newDate_rjuz));

$rjuzDate2 = date('Y', strtotime($daterjuz));
$aniojuz = numtoletrasanio($rjuzDate2);
	
if ($aniojuz  == "dos mil veinti"){
	$anio_B_rjuz  = "dos mil veintiuno";
	}
else if ($aniojuz  == "dos mil veintidos"){
	$anio_B_rjuz  = "dos mil veintidós";
	}	
	else {
		$anio_B_rjuz  = $aniojuz;
	}	



$rjuzDate3 = date('d', strtotime($daterjuz));
$diarjuz = numtoletras($rjuzDate3);

if ($diarjuz == "veintidos"){
	$dia_B_rjuz  = "veintidós";
	} else if ($diarjuz == "dieciseis"){
	$dia_B_rjuz  = "dieciséis";
	} else if ($diarjuz == "veintitres"){
	$dia_B_rjuz  = "veintitrés";
	} else if ($diarjuz == "veintiseis"){
	$dia_B_rjuz  = "veintiséis";
	} else{
	$dia_B_rjuz  = $diarjuz;
	}




$fecha_rjuz = $dia_B_rjuz . " " . $mes_B_rjuz . " " . $anio_B_rjuz; 

// Por - RJuzgado
$por_rjuzt01 = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];
$por_rjuzt = trim($por_rjuzt01);


// Hora de Divorcio - OFICIO
$hora_rofi = ( empty($_POST['timedecreofi']) )   ? NULL : $_POST['timedecreofi'];
$hora_rofi2 = date('G', strtotime($hora_rofi));


if ($hora_rofi2 == "20"){
	$hora_rofi3 = "veinte";

	}
	elseif ($hora_rofi2 == "21"){
		$hora_rofi3 = "veintiún";
	}
	elseif ($hora_rofi2  == "16"){
		$hora_rofi3  = "dieciséis";
	}
	elseif ($hora_rofi2 == "22"){
		$hora_rofi3  = "veintidós";
	}

	elseif ($hora_rofi2  == "23"){
		$hora_rofi3  = "veintitrés";
	}
	elseif ($hora_rofi2  == "26"){
		$hora_rofi3  = "veintiséis";
	}

else {
		$hora_rofi3 = numtoletras4($hora_rofi2);
	}


$min_rofi2 =  strtotime($hora_rofi);
$min_rofi3 =  date("i", $min_rofi2);

if ($min_rofi3  == "16"){
		$min_rofi4  = "dieciséis";
	}
	elseif ($min_rofi3 == "22"){
		$min_rofi4  = "veintidós";
	}

	elseif ($min_rofi3  == "23"){
		$min_rofi4  = "veintitrés";
	}
	elseif ($min_rofi3  == "26"){
		$min_rofi4  = "veintiséis";
	}

else {
		$min_rofi4 =  numtoletras($min_rofi3);
	}



// Fecha de Divorcio - OFICIO
$daterofi = ( empty($_POST['fechadecreofi']) )   ? NULL : $_POST['fechadecreofi'];
$newDate_rofi = date('Y/m/d', strtotime($daterofi));
$mes_B_rofi = strtolower(dater($newDate_rofi));

$rofiDate2 = date('Y', strtotime($daterofi));
$aniorofi = numtoletrasanio($rofiDate2);
	
if ($aniorofi  == "dos mil veinti"){
	$anio_B_rofi  = "dos mil veintiuno";
	}
else if ($aniorofi  == "dos mil veintidos"){
	$anio_B_rofi  = "dos mil veintidós";
	}	
	else {
		$anio_B_rofi  = $aniorofi;
	}	




$rofiDate3 = date('d', strtotime($daterofi));
$diarofi = numtoletras($rofiDate3);

if ($diarofi == "veintidos"){
	$dia_B_rofi  = "veintidós";
	} else if ($diarofi == "dieciseis"){
	$dia_B_rofi  = "dieciséis";
	} else if ($diarofi == "veintitres"){
	$dia_B_rofi  = "veintitrés";
	} else if ($diarofi == "veintiseis"){
	$dia_B_rofi  = "veintiséis";
	} else{
	$dia_B_rofi  = $diarofi;
	}



$fecha_rofi = $dia_B_rofi . "" . $mes_B_rofi . "" . $anio_B_rofi; 

// Numero de Oficio
$numeroofi = ( empty($_POST['txt_por_ofi']) )   ? NULL : $_POST['txt_por_ofi'];


// Por - OFICIO
$por_rofi = ( empty($_POST['txt_por_rofi']) )   ? NULL : $_POST['txt_por_rofi'];
$por_rofi = trim($por_rofi);




// Hora de Divorcio - Sentencia Juzgado
$hora_sjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
$hora_sjuz2 = date('G', strtotime($hora_sjuz));


if ($hora_sjuz2 == "20"){
	$hora_sjuz3 = "veinte";

	}
	elseif ($hora_sjuz2 == "21"){
		$hora_sjuz3 = "veintiún";
	}
	elseif ($hora_sjuz2  == "16"){
		$hora_sjuz3  = "dieciséis";
	}
	elseif ($hora_sjuz2 == "22"){
		$hora_sjuz3  = "veintidós";
	}

	elseif ($hora_sjuz2  == "23"){
		$hora_sjuz3  = "veintitrés";
	}
	elseif ($hora_sjuz2  == "26"){
		$hora_sjuz3  = "veintiséis";
	}

else {
		$hora_sjuz3 = numtoletras4($hora_sjuz2);
	}

$min_sjuz2 =  strtotime($hora_sjuz);
$min_sjuz3 =  date("i", $min_sjuz2);
if ($min_sjuz3  == "16"){
		$min_sjuz4  = "dieciséis";
	}
	elseif ($min_sjuz3 == "22"){
		$min_sjuz4  = "veintidós";
	}

	elseif ($min_sjuz3  == "23"){
		$min_sjuz4  = "veintitrés";
	}
	elseif ($min_sjuz3  == "26"){
		$min_sjuz4  = "veintiséis";
	}

else {
		$min_sjuz4 =  numtoletras($min_sjuz3);
	}


// Fecha de Divorcio - SJuzgado
$datesjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
$newDate_sjuz = date('Y/m/d', strtotime($datesjuz));
$mes_B_sjuz = strtolower(dater($newDate_sjuz));

$sjuzDate2 = date('Y', strtotime($datesjuz));
$aniosjuz = numtoletrasanio($sjuzDate2);
	

if ($aniosjuz  == "dos mil veinti"){
	$anio_B_sjuz  = "dos mil veintiuno";
	}
else if ($aniosjuz  == "dos mil veintidos"){
	$anio_B_sjuz  = "dos mil veintidós";
	}	
	else {
		$anio_B_sjuz  = $aniosjuz;
	}	





$sjuzDate3 = date('d', strtotime($datesjuz));
$diasjuz = numtoletras($sjuzDate3);

if ($diasjuz == "veintidos"){
	$dia_B_sjuz  = "veintidós";
	} else if ($diasjuz == "dieciseis"){
	$dia_B_sjuz  = "dieciséis";
	} else if ($diasjuz == "veintitres"){
	$dia_B_sjuz  = "veintitrés";
	} else if ($diasjuz == "veintiseis"){
	$dia_B_sjuz  = "veintiséis";
	} else{
	$dia_B_sjuz  = $diasjuz;
	}




$fecha_sjuz = $dia_B_sjuz . "" . $mes_B_sjuz . "" . $anio_B_sjuz; 

// Por - SJuzgado
$por_sjuzt01 = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];
$por_sjuzt = trim($por_sjuzt01);

// Hora de Divorcio - Ejecutoria Juzgado
$hora_ejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
$hora_ejuz2 = date('G', strtotime($hora_ejuz));


if ($hora_ejuz2 == "20"){
	$hora_ejuz3 = "veinte";

	}
	elseif ($hora_ejuz2 == "21"){
		$hora_ejuz3 = "veintiún";
	}
	elseif ($hora_ejuz2 == "16"){
		$hora_ejuz3  = "dieciséis";
	}
	elseif ($hora_ejuz2== "22"){
		$hora_ejuz3  = "veintidós";
	}

	elseif ($hora_ejuz2 == "23"){
		$hora_ejuz3  = "veintitrés";
	}
	elseif ($hora_ejuz2 == "26"){
		$hora_ejuz3  = "veintiséis";
	}

else {
		$hora_ejuz3 = numtoletras4($hora_ejuz2);
	}

$min_ejuz2 =  strtotime($hora_ejuz);
$min_ejuz3 =  date("i", $min_ejuz2);
if ($min_ejuz3  == "16"){
		$min_ejuz4  = "dieciséis";
	}
	elseif ($min_ejuz3 == "22"){
		$min_ejuz4  = "veintidós";
	}

	elseif ($min_ejuz3  == "23"){
		$min_ejuz4  = "veintitrés";
	}
	elseif ($min_ejuz3  == "26"){
		$min_ejuz4  = "veintiséis";
	}

else {
		$min_ejuz4 =  numtoletras($min_ejuz3);
	}



// Fecha de Divorcio - EJuzgado
$dateejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
$newDate_ejuz = date('Y/m/d', strtotime($dateejuz));
$mes_B_ejuz = strtolower(dater($newDate_ejuz));

$ejuzDate2 = date('Y', strtotime($dateejuz));
$anioejuz = numtoletrasanio($ejuzDate2);
	
if ($anioejuz  == "dos mil veinti"){
	$anio_B_ejuz  = "dos mil veintiuno";
	}
else if ($anioejuz  == "dos mil veintidos"){
	$anio_B_ejuz  = "dos mil veintidós";
	}	
	else {
		$anio_B_ejuz  = $anioejuz;
	}	




$ejuzDate3 = date('d', strtotime($dateejuz));
$diaejuz = numtoletras($ejuzDate3);

if ($diaejuz == "veintidos"){
	$dia_B_ejuz  = "veintidós";
	} else if ($diaejuz == "dieciseis"){
	$dia_B_ejuz  = "dieciséis";
	} else if ($diaejuz == "veintitres"){
	$dia_B_ejuz  = "veintitrés";
	} else if ($diaejuz == "veintiseis"){
	$dia_B_ejuz  = "veintiséis";
	} else{
	$dia_B_ejuz  = $diaejuz;
	}



$fecha_ejuz = $dia_B_ejuz . "" . $mes_B_ejuz . "" . $anio_B_ejuz; 

// Por - EJuzgado
$por_ejuzt01 = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];
$por_ejuzt = trim($por_ejuzt01);


// fecha de Matrimonio
$originalDate = ( empty($_POST['FechaB']) )   ? NULL : $_POST['FechaB'];
$newDate = date('Y/m/d', strtotime($originalDate));
$mes_B = strtolower(dater($newDate));

$newDate2 = date('Y', strtotime($originalDate));
$aniosb = numtoletrasanio($newDate2);
	
if ($aniosb  == "dos mil veinti"){
	$anio_B  = "dos mil veintiuno";
	}
else if ($aniosb  == "dos mil veintidos"){
	$anio_B  = "dos mil veintidós";
	}	
	else {
		$anio_B  = $aniosb;
	}
	



$newDate3 = date('d', strtotime($originalDate));
$diab = numtoletras($newDate3);

if ($diab == "veintidos"){
	$dia_B  = "veintidós";
	} else if ($diab == "dieciseis"){
	$dia_B  = "dieciséis";
	} else if ($diab == "veintitres"){
	$dia_B  = "veintitrés";
	} else if ($diab == "veintiseis"){
	$dia_B  = "veintiséis";
	} else{
	$dia_B  = $diab;
	}




$value_el = ( empty($_POST['gender']) )   ? NULL : $_POST['gender'];
$value_el2 = ( empty($_POST['gender2']) )   ? NULL : $_POST['gender2'];
$optioncaso = ( empty($_POST['optionsbo']) )   ? NULL : $_POST['optionsbo'];
$uregimen = ( empty($_POST['RegimenB']) )   ? NULL : $_POST['RegimenB'];

//////////////  Uso de Apellidos



$recepapel = ( empty($_POST['apellidoel1']) ) ? NULL : $_POST['apellidoel1'];
$recepapella = ( empty($_POST['apellidoella1']) ) ? NULL : $_POST['apellidoella1'];
$recepapella2 = ( empty($_POST['apellidoella']) ) ? NULL : $_POST['apellidoella'];


$uapellidos_n = ( empty($_POST['usoA']) )   ? NULL : $_POST['usoA'];
if ($uapellidos_n == "soltera"){
	
		
	
	$usoape1 = "nombre " . $recepapella . " " . $recepapella2;
$usoape2 = trim(titleCase($usoape1));
$usoape3 = substr($usoape2,6);
$uapellidos = trim($usoape3);
	
	
			}
	
	else if ($uapellidos_n == "sinde"){
		
	$usoape12 = "nombre " . $recepapella ." ". $recepapel;	
	$usoape22 = trim(titleCase($usoape12));
$usoape32 = substr($usoape22,6);
$uapellidos = trim($usoape32);	
						  
		
		}
	else if ($uapellidos_n == "conde"){
		$usoape13 = "nombre " . $recepapella." de ". $recepapel;	
	$usoape23 = trim(titleCase($usoape13));
$usoape33 = substr($usoape23,6);
$uapellidos = trim($usoape33);		

	} 
else{
	$otroapellido =  ( empty($_POST['otroapellido']) ) ? NULL : $_POST['otroapellido'];
	$usoape14 = "nombre " . $otroapellido;	
	$usoape24 = trim(titleCase($usoape14));
$usoape34 = substr($usoape24,6);
$uapellidos = trim($usoape34);	
	
			
	}

	


$regimenv = ( empty($_POST['OptionRA']) )   ? NULL : $_POST['OptionRA'];
$apellidosv = ( empty($_POST['OptionAA']) )   ? NULL : $_POST['OptionAA'];
$tipopart = ( empty($_POST['tipopar']) )   ? NULL : $_POST['tipopar'];
$tipopart2 = ( empty($_POST['tipopar2']) )   ? NULL : $_POST['tipopar2'];
$nacimientop = ( empty($_POST['tipodivel']) )   ? NULL : $_POST['tipodivel'];
$matrimoniop = ( empty($_POST['tipodivmatri']) )   ? NULL : $_POST['tipodivmatri'];
$nacimientopella = ( empty($_POST['tipodivella']) )   ? NULL : $_POST['tipodivella'];

$rexterior = ( empty($_POST['valuediv']) )   ? NULL : $_POST['valuediv'];
$rcsj = ( empty($_POST['valuedivn']) )   ? NULL : $_POST['valuedivn'];
$rjuzgado = ( empty($_POST['valuedivnj']) )   ? NULL : $_POST['valuedivnj'];
$sjuzgado = ( empty($_POST['valuedivnjs']) )   ? NULL : $_POST['valuedivnjs'];
$ejuzgado = ( empty($_POST['valuedivnjse']) )   ? NULL : $_POST['valuedivnjse'];
$eoficio = ( empty($_POST['valuedivofi']) )   ? NULL : $_POST['valuedivofi'];


///////////////////////////// cargo y nombre opcionales matrimonio

$cargoopcion = ( empty($_POST['ccargo']) ) ? NULL : $_POST['ccargo'];
$nombreopcion = ( empty($_POST['mnombre']) ) ? NULL : $_POST['mnombre'];



if ($cargoopcion == 'ccargo' and $nombreopcion == 'mnombre' ){
	
	$opcionnotario =  "; ante " . titleCase(trim($_POST['Nnotario']));
	$casootro =  ", " . trim($optioncaso) . ", en ";
	
	} 
elseif ($cargoopcion == 'ccargo' and $nombreopcion == '' ) {
	$opcionnotario =  "";
	$casootro =  ", " . trim($optioncaso) . ", en ";
}

elseif ($cargoopcion == '' and $nombreopcion == 'mnombre' ) {
	
	$opcionnotario =  "; ante " . titleCase(trim($_POST['Nnotario'])) . ", en ";
	$casootro =  "";
	
		}
elseif ($cargoopcion == '' and $nombreopcion == '' ) {
	
	$opcionnotario =  "";
	$casootro =  ", en ";
	
	}
	
	
	
	
	

//////////////////////////////
//////////////////// Por si Variables estan vacias

////////////// hora divorcio oficio
$hoficio = ( empty($_POST['timedecreofi']) )   ? NULL : $_POST['timedecreofi'];
$f_oficio = ( empty($_POST['fechadecreofi']) )   ? NULL : $_POST['fechadecreofi'];
$por_rofi01 = ( empty($_POST['txt_por_rofi']) )   ? NULL : $_POST['txt_por_rofi'];
$por_rofi = trim($por_rofi01);
$num_ofi = ( empty($_POST['txt_por_ofi']) )   ? NULL : $_POST['txt_por_ofi'];

if ($num_ofi  == "16"){
		$num_ofi2  = "dieciséis";
	}
	elseif ($num_ofi == "22"){
		$num_ofi2  = "veintidós";
	}

	elseif ($num_ofi  == "23"){
		$num_ofi2  = "veintitrés";
	}
	elseif ($num_ofi  == "26"){
		$num_ofi2  = "veintiséis";
	}

else {
		$num_ofi2 =  numtoletrasanio($num_ofi);
	}





if ($hoficio == ""){
	$hoficio = "";

	}
	elseif ($min_rofi4 == "uno"){
		$hoficio = ", a las " . $hora_rofi3 . " horas con un minuto";
		
	}
		elseif ($min_rofi3 == "00"){
		$hoficio = " a las " . $hora_rofi3 . " horas";	
	}		
	else {
		$hoficio = ", a las " . $hora_rofi3 . " horas con " . $min_rofi4 . " minutos";
	}	

////////////// fecha dicorvio oficio
 if ($f_oficio == ""){
	$f_oficio = "";

	}
	
	else {
		$f_oficio = ", de fecha " . $fecha_rofi;
	}
		
	 if ($por_rofi == ""){
	$por_rofi = "";

	}
	
	else {
		$por_rofi = ", por " . $por_rofi;
	}


if ($num_ofi == ""){
	$num_ofi = "";

	}
	
	else {
		$num_ofi = " número " . $num_ofi2;
	}


////  fecha art 15
$f_art151 = ( empty($_POST['Fecha151']) )   ? NULL : $_POST['Fecha151'];
	
 if ($f_art151 == ""){
	$f_art151 = "";

	}
	
	else {
		$f_art151 = ", de fecha " . $fecha_151;
	}
////  fecha art 15 - 2
$f_art152 = ( empty($_POST['Fecha152']) )   ? NULL : $_POST['Fecha152'];
	
 if ($f_art152 == ""){
	$f_art152 = "";

	}
	
	else {
		$f_art152 = ", de fecha " . $fecha_152;
	}

////// fecha art 17

$f_art171 = ( empty($_POST['Fecha171']) )   ? NULL : $_POST['Fecha171'];
	
 if ($f_art171 == ""){
	$f_art171 = "";

	}
	
	else {
		$f_art171 = ", de fecha " . $fecha_171;
	}
////  fecha art 15 - 2
$f_art172 = ( empty($_POST['Fecha172']) )   ? NULL : $_POST['Fecha172'];
	
 if ($f_art172 == ""){
	$f_art172 = "";

	}
	
	else {
		$f_art172 = ", de fecha " . $fecha_172;
	}



////////////////////// variasbles rectificacion por escritura


$lugarrecti = ( empty($_POST['lugarrecti']) )   ? NULL : $_POST['lugarrecti'];
$cargorecti = ( empty($_POST['cargorecti']) )   ? NULL : $_POST['cargorecti'];
$nombrerecti = ( empty($_POST['nombrerecti']) )   ? NULL : $_POST['nombrerecti'];













////////// Hora divorcio exterior

$hexterior = ( empty($_POST['timedecre']) )   ? NULL : $_POST['timedecre'];
		$f_exterior = ( empty($_POST['fechadecre']) )   ? NULL : $_POST['fechadecre'];
		$por_exterior01 = ( empty($_POST['txt_por_ext']) )   ? NULL : $_POST['txt_por_ext'];
		$por_exterior = trim($por_exterior01);

if ($hexterior == ""){
	$hexterior = "";

	}
	elseif ($min_ext4 == "uno"){
		$hexterior = " a las " . $hora_ext3 . " horas con un minuto";
		}
		elseif ($min_ext3 == "00"){
		$hexterior = " a las " . $hora_ext3 . " horas";	
	}		
	else {
		$hexterior = " a las " . $hora_ext3 . " horas con " . $min_ext4 . " minutos";
	}	

///////////// fecha divorcio exterior
 if ($f_exterior == "" and $hexterior == ""){
	$f_exterior = "";

	}else if ($f_exterior != "" and $hexterior == ""){
		$f_exterior = " el día " . $fecha_ext;
	}else if ($f_exterior != "" and $hexterior != ""){
		$f_exterior = " del día " . $fecha_ext;
	}










		
	 if ($por_exterior == ""){
	$por_exterior = "";

	}
	
	else {
		$por_exterior = ", por " . $por_ext;
	}

//////////// hora divorcio csj
		
$hcsj = ( empty($_POST['timedecren']) )   ? NULL : $_POST['timedecren'];
		$f_csj = ( empty($_POST['fechadecren']) )   ? NULL : $_POST['fechadecren'];
		$por_csj01 = ( empty($_POST['txt_por_csj']) )   ? NULL : $_POST['txt_por_csj'];
		$por_csj = trim($por_csj01);

if ($hcsj == ""){
	$hcsj = "";

	}
	elseif ($min_csj4 == "uno"){
		$hcsj = " a las " . $hora_csj3 . " horas con un minuto";
	}
		elseif ($min_csj3 == "00"){
		$hcsj = " a las " . $hora_csj3 . " horas";	
	}		
	else {
		$hcsj = " a las " . $hora_csj3 . " horas con " . $min_csj4 . " minutos";
	}	

////////////// fecha divorcio csj
 if ($f_csj == "" and $hcsj == ""){
	$f_csj = "";

	}else if($f_csj != "" and $hcsj == ""){
		$f_csj = " el día " . $fecha_csj;
	}else if($f_csj != "" and $hcsj != ""){
		$f_csj = " del día " . $fecha_csj;
	}




		
	 if ($por_csj == ""){
	$por_csj = "";

	}
	
	else {
		$por_csj = ", por " . $por_csjt;
	}

//////////////hora divorcio resolucion juzgado

	$hrjuz = ( empty($_POST['timedecrenj']) )   ? NULL : $_POST['timedecrenj'];
		$f_rjuz = ( empty($_POST['fechadecrenj']) )   ? NULL : $_POST['fechadecrenj'];
		$por_rjuz01 = ( empty($_POST['txt_por_rjuz']) )   ? NULL : $_POST['txt_por_rjuz'];
		$por_rjuz = trim($por_rjuz01);

if ($hrjuz == ""){
	$hrjuz = "";

	}
	elseif ($min_rjuz4 == "uno"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas con un minuto";
	}
		elseif ($min_rjuz3 == "00"){
		$hrjuz = " a las " . $hora_rjuz3 . " horas";	
	}		
	else {
		$hrjuz = " a las " . $hora_rjuz3 . " horas con " . $min_rjuz4 . " minutos";
	}

/////////// fecha divorcio resolucion juzgado
 if ($f_rjuz == "" and $hrjuz == ""){
	$f_rjuz = "";

	} else if ($f_rjuz != "" and $hrjuz == ""){
		$f_rjuz = " el día " . $fecha_rjuz;
	
	} else if ($f_rjuz != "" and $hrjuz != ""){
		$f_rjuz = " del día " . $fecha_rjuz;
	}	


	 if ($por_rjuz == ""){
	$por_rjuz = "";

	}
	
	else {
		$por_rjuz = ", por " . $por_rjuzt;
	}
	
//////////// hora divorcio sentencia juzgado
	$hsjuz = ( empty($_POST['timedecrenjs']) )   ? NULL : $_POST['timedecrenjs'];
		$f_sjuz = ( empty($_POST['fechadecrenjs']) )   ? NULL : $_POST['fechadecrenjs'];
		$por_sjuz01 = ( empty($_POST['txt_por_sjuz']) )   ? NULL : $_POST['txt_por_sjuz'];
		$por_sjuz = trim($por_sjuz01);

if ($hsjuz == ""){
	$hsjuz = "";

	}
	elseif ($min_sjuz4 == "uno"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas con un minuto";
	}
		elseif ($min_sjuz3 == "00"){
		$hsjuz = " a las " . $hora_sjuz3 . " horas";	
	}		
	else {
		$hsjuz = " a las " . $hora_sjuz3 . " horas con " . $min_sjuz4 . " minutos";
	}

///////////// fecha divorcio sentencia juzgado
 if ($f_sjuz == "" and $hsjuz == ""){
	$f_sjuz = "";

	}else if ($f_sjuz != "" and $hsjuz == ""){
	
		$f_sjuz = " el día " . $fecha_sjuz;
	
		}else if ($f_sjuz != "" and $hsjuz != ""){
	
		$f_sjuz = " del día " . $fecha_sjuz;
	}






	 if ($por_sjuz == ""){
	$por_sjuz = "";

	}
	
	else {
		$por_sjuz = ", por " . $por_sjuzt;
	}


//////////// hora divorcio ejecutoria juzgado
$hejuz = ( empty($_POST['timedecrenjse']) )   ? NULL : $_POST['timedecrenjse'];
		$f_ejuz = ( empty($_POST['fechadecrenjse']) )   ? NULL : $_POST['fechadecrenjse'];
		$por_ejuz01 = ( empty($_POST['txt_por_ejuz']) )   ? NULL : $_POST['txt_por_ejuz'];
		$por_ejuz = trim($por_ejuz01);

if ($hejuz == ""){
	$hejuz = "";

	}
	elseif ($min_ejuz4 == "uno"){
		$hejuz = " a las " . $hora_ejuz3 . " horas con un minuto";
	}
		elseif ($min_ejuz3 == "00"){
		$hejuz = " a las " . $hora_ejuz3 . " horas";	
	}		
	else {
		$hejuz = " a las " . $hora_ejuz3 . " horas con " . $min_ejuz4 . " minutos";
	}	
//////////////// fecha divorcio ejecutoria juzgado

if ($f_ejuz == "" and $hejuz== ""){
	$f_ejuz = "";

	}else if ($f_ejuz != "" and $hejuz == ""){
	$f_ejuz = " el día " . $fecha_ejuz;

	}else if ($f_ejuz != "" and $hejuz != "")
{
		$f_ejuz = " del día " . $fecha_ejuz;
	}








	 if ($por_ejuz == ""){
	$por_ejuz = "";

	}
	
	else {
		$por_ejuz = ", por " . $por_ejuzt;
	}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////// Matrimonios

include ("marginaciones/matrimonios.php");

/////////////////////////////////////
////////////////////////////////////
// Divorcios



include ("marginaciones/divorcios.php");



////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////
////////// Aqui inicia art 15


include ("marginaciones/art1517.php");

////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////
////////// Aqui inicia Cancelaciones por defunción

include ("marginaciones/cancedef.php");

////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////
////////// Aqui inicia Identidades

include ("marginaciones/identidades.php");

////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////
////////// Aqui inicia Cancelaciones por adecuación

include ("marginaciones/adecuaciones.php");


////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////
////////// Aqui inicia union no M. y Regimen

include ("marginaciones/regimenes.php");

////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////
////////// Aqui inicia Tutorias, Auto. Parental

include ("marginaciones/tutorias.php");


////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////
////////// Aqui inicia Perdidad o recuperacion de nacionalidad

include ("marginaciones/nacionalidad.php");










////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////
////////// Aqui inicia Varias

include ("marginaciones/varias.php");

////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////
////////// Aqui inicia Otras

include ("marginaciones/otras.php");


////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////
////////// Revision Marginaciones

include ("marginaciones/revmarginaciones.php");

////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////
////////// Revision Control de Calidad

include ("marginaciones/revcontrol.php");



	
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
			}
	
?>			