<?php

if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']['tipo'] == "Usuario"){
		header("Location: ../../Usuario/");
	}
	
if($_SESSION['usuario']['tipo'] == "Admin"){
		header("Location: ../../Admin/");
	}
	
}

require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $fecha1 = mysqli_real_escape_string($con,(strip_tags($_POST['Fechaini'],ENT_QUOTES)));
	$fecha2 = mysqli_real_escape_string($con,(strip_tags($_POST['Fechafin'],ENT_QUOTES)));
	$newDate_varw = date('d/m/Y', strtotime($fecha1));
	$newDate_varw2 = date('d/m/Y', strtotime($fecha2));	

		
$sql = "SELECT * FROM margi WHERE FechaC >= '$fecha1' AND FechaC <='$fecha2'";
$result = mysqli_query($con,$sql);
$numero = mysqli_num_rows($result);

$sqlACTIVA2 = "SELECT * FROM margi WHERE estado='Sin_Efecto' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultACTIVA2 = mysqli_query($con,$sqlACTIVA2);
$numeroACTIVA2 = mysqli_num_rows($resultACTIVA2);

$sqlACTIVA = "SELECT * FROM margi WHERE estado='Activa' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultACTIVA = mysqli_query($con,$sqlACTIVA);
$numeroACTIVA = mysqli_num_rows($resultACTIVA);

$sqlMAT = "SELECT * FROM margi WHERE TipoMargi='MNAC' AND estado='Activa' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultMAT = mysqli_query($con,$sqlMAT);
$numeroMAT = mysqli_num_rows($resultMAT);

$sqlDIV = "SELECT * FROM margi WHERE TipoMargi='MDIV' AND estado='Activa' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultDIV = mysqli_query($con,$sqlDIV);
$numeroDIV = mysqli_num_rows($resultDIV);

$sqlMNUPDEF = "SELECT * FROM margi WHERE TipoMargi='MNUPDEF' AND estado='Activa' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultMNUPDEF = mysqli_query($con,$sqlMNUPDEF);
$numeroMNUPDEF = mysqli_num_rows($resultMNUPDEF);

$sql15 = "SELECT * FROM margi WHERE TipoMargi='MA15' AND estado='Activa' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$result15 = mysqli_query($con,$sql15);
$numero15 = mysqli_num_rows($result15);

$sql17 = "SELECT * FROM margi WHERE TipoMargi='MA17' AND estado='Activa' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$result17 = mysqli_query($con,$sql17);
$numero17 = mysqli_num_rows($result17);

$sqlCNDEF = "SELECT * FROM margi WHERE TipoMargi='MCNDEF' AND estado='Activa' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultCNDEF = mysqli_query($con,$sqlCNDEF);
$numeroCNDEF = mysqli_num_rows($resultCNDEF);

$sqlVIU = "SELECT * FROM margi WHERE TipoMargi='MVIU' AND estado='Activa' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultVIU = mysqli_query($con,$sqlVIU);
$numeroVIU = mysqli_num_rows($resultVIU);

$sqlCMDEF = "SELECT * FROM margi WHERE TipoMargi='MCMDEF' AND estado='Activa' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultCMDEF = mysqli_query($con,$sqlCMDEF);
$numeroCMDEF = mysqli_num_rows($resultCMDEF);
	
$sqlIDEN = "SELECT * FROM margi WHERE TipoMargi='MIDEN' AND estado='Activa' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultIDEN = mysqli_query($con,$sqlIDEN);
$numeroIDEN = mysqli_num_rows($resultIDEN);

$sqlADEC = "SELECT * FROM margi WHERE TipoMargi='MADEC' AND estado='Activa' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultADEC = mysqli_query($con,$sqlADEC);
$numeroADEC = mysqli_num_rows($resultADEC);

$sqlMUMAT = "SELECT * FROM margi WHERE TipoMargi='MUMAT' AND estado='Activa' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultMUMAT = mysqli_query($con,$sqlMUMAT);
$numeroMUMAT = mysqli_num_rows($resultMUMAT);

$sqlCREG = "SELECT * FROM margi WHERE TipoMargi='MCREG' AND estado='Activa' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultCREG = mysqli_query($con,$sqlCREG);
$numeroCREG = mysqli_num_rows($resultCREG);

$sqlSREG = "SELECT * FROM margi WHERE TipoMargi='MSREG' AND estado='Activa' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultSREG = mysqli_query($con,$sqlSREG);
$numeroSREG = mysqli_num_rows($resultSREG);

$sqlTUTO = "SELECT * FROM margi WHERE TipoMargi='MTUTO' AND estado='Activa' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultTUTO = mysqli_query($con,$sqlTUTO);
$numeroTUTO = mysqli_num_rows($resultTUTO);

$sqlAUTO = "SELECT * FROM margi WHERE TipoMargi='MAUTO' AND estado='Activa' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultAUTO = mysqli_query($con,$sqlAUTO);
$numeroAUTO = mysqli_num_rows($resultAUTO);

$sqlREPRE = "SELECT * FROM margi WHERE TipoMargi='MREPRE' AND estado='Activa' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultREPRE = mysqli_query($con,$sqlREPRE);
$numeroREPRE = mysqli_num_rows($resultREPRE);


$sqlRECO = "SELECT * FROM margi WHERE TipoMargi='MRECO' AND estado='Activa' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultRECO = mysqli_query($con,$sqlRECO);
$numeroRECO = mysqli_num_rows($resultRECO);

$sqlSUB = "SELECT * FROM margi WHERE TipoMargi='MSUB' AND estado='Activa' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultSUB = mysqli_query($con,$sqlSUB);
$numeroSUB = mysqli_num_rows($resultSUB);

$sqlADO = "SELECT * FROM margi WHERE TipoMargi='MADO' AND estado='Activa' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultADO = mysqli_query($con,$sqlADO);
$numeroADO = mysqli_num_rows($resultADO);

$sqlLEG = "SELECT * FROM margi WHERE TipoMargi='MLEG' AND estado='Activa' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultLEG = mysqli_query($con,$sqlLEG);
$numeroLEG = mysqli_num_rows($resultLEG);


$sqlREPO = "SELECT * FROM margi WHERE TipoMargi='MREPO' AND estado='Activa' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultREPO = mysqli_query($con,$sqlREPO);
$numeroREPO = mysqli_num_rows($resultREPO);

$sqlOTRA = "SELECT * FROM margi WHERE TipoMargi='MRECTI' AND estado='Activa' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultOTRA = mysqli_query($con,$sqlOTRA);
$numeroOTRA = mysqli_num_rows($resultOTRA);

$sqlMPNAC = "SELECT * FROM margi WHERE TipoMargi='MPNAC' AND estado='Activa' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultMPNAC = mysqli_query($con,$sqlMPNAC);
$numeroMPNAC = mysqli_num_rows($resultMPNAC);

$sqlMRNAC = "SELECT * FROM margi WHERE TipoMargi='MRNAC' AND estado='Activa' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultMRNAC = mysqli_query($con,$sqlMRNAC);
$numeroMRNAC = mysqli_num_rows($resultMRNAC);

$sqlMCMDIV = "SELECT * FROM margi WHERE TipoMargi='MCMDIV' AND estado='Activa' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultMCMDIV = mysqli_query($con,$sqlMCMDIV);
$numeroMCMDIV = mysqli_num_rows($resultMCMDIV);

$sqlMNUMAR = "SELECT * FROM margi WHERE TipoMargi='MNUMAR' AND estado='Activa' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultMNUMAR = mysqli_query($con,$sqlMNUMAR);
$numeroMNUMAR = mysqli_num_rows($resultMNUMAR);

$sqlMARN = "SELECT * FROM margi WHERE TipoMargi='MARN' AND estado='Activa' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultMARN = mysqli_query($con,$sqlMARN);
$numeroMARN = mysqli_num_rows($resultMARN);

$sqlMADSEP = "SELECT * FROM margi WHERE TipoMargi='MADSEP' AND estado='Activa' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultMADSEP = mysqli_query($con,$sqlMADSEP);
$numeroMADSEP = mysqli_num_rows($resultMADSEP);

$sqlMNMATRI = "SELECT * FROM margi WHERE TipoMargi='MNMATRI' AND estado='Activa' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultMNMATRI = mysqli_query($con,$sqlMNMATRI);
$numeroMNMATRI = mysqli_num_rows($resultMNMATRI);






$sqlMAT2 = "SELECT * FROM margi WHERE TipoMargi='MNAC' AND estado='Sin_Efecto' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultMAT2 = mysqli_query($con,$sqlMAT2);
$numeroMAT2 = mysqli_num_rows($resultMAT2);

$sqlDIV2 = "SELECT * FROM margi WHERE TipoMargi='MDIV' AND estado='Sin_Efecto' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultDIV2 = mysqli_query($con,$sqlDIV2);
$numeroDIV2 = mysqli_num_rows($resultDIV2);

$sqlMNUPDEF2 = "SELECT * FROM margi WHERE TipoMargi='MNUPDEF' AND estado='Sin_Efecto' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultMNUPDEF2 = mysqli_query($con,$sqlMNUPDEF2);
$numeroMNUPDEF2 = mysqli_num_rows($resultMNUPDEF2);

$sql152 = "SELECT * FROM margi WHERE TipoMargi='MA15' AND estado='Sin_Efecto' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$result152 = mysqli_query($con,$sql152);
$numero152 = mysqli_num_rows($result152);

$sql172 = "SELECT * FROM margi WHERE TipoMargi='MA17' AND estado='Sin_Efecto' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$result172 = mysqli_query($con,$sql172);
$numero172 = mysqli_num_rows($result172);

$sqlCNDEF2 = "SELECT * FROM margi WHERE TipoMargi='MCNDEF' AND estado='Sin_Efecto' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultCNDEF2 = mysqli_query($con,$sqlCNDEF2);
$numeroCNDEF2 = mysqli_num_rows($resultCNDEF2);

$sqlVIU2 = "SELECT * FROM margi WHERE TipoMargi='MVIU' AND estado='Sin_Efecto' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultVIU2 = mysqli_query($con,$sqlVIU2);
$numeroVIU2 = mysqli_num_rows($resultVIU2);

$sqlCMDEF2 = "SELECT * FROM margi WHERE TipoMargi='MCMDEF' AND estado='Sin_Efecto' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultCMDEF2 = mysqli_query($con,$sqlCMDEF2);
$numeroCMDEF2 = mysqli_num_rows($resultCMDEF2);
	
$sqlIDEN2 = "SELECT * FROM margi WHERE TipoMargi='MIDEN' AND estado='Sin_Efecto' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultIDEN2 = mysqli_query($con,$sqlIDEN2);
$numeroIDEN2 = mysqli_num_rows($resultIDEN2);

$sqlADEC2 = "SELECT * FROM margi WHERE TipoMargi='MADEC' AND estado='Sin_Efecto' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultADEC2 = mysqli_query($con,$sqlADEC2);
$numeroADEC2 = mysqli_num_rows($resultADEC2);

$sqlMUMAT2 = "SELECT * FROM margi WHERE TipoMargi='MUMAT' AND estado='Sin_Efecto' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultMUMAT2 = mysqli_query($con,$sqlMUMAT2);
$numeroMUMAT2 = mysqli_num_rows($resultMUMAT2);

$sqlCREG2 = "SELECT * FROM margi WHERE TipoMargi='MCREG' AND estado='Sin_Efecto' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultCREG2 = mysqli_query($con,$sqlCREG2);
$numeroCREG2 = mysqli_num_rows($resultCREG2);

$sqlSREG2 = "SELECT * FROM margi WHERE TipoMargi='MSREG' AND estado='Sin_Efecto' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultSREG2 = mysqli_query($con,$sqlSREG2);
$numeroSREG2 = mysqli_num_rows($resultSREG2);

$sqlTUTO2 = "SELECT * FROM margi WHERE TipoMargi='MTUTO' AND estado='Sin_Efecto' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultTUTO2 = mysqli_query($con,$sqlTUTO2);
$numeroTUTO2 = mysqli_num_rows($resultTUTO2);

$sqlAUTO2 = "SELECT * FROM margi WHERE TipoMargi='MAUTO' AND estado='Sin_Efecto' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultAUTO2 = mysqli_query($con,$sqlAUTO2);
$numeroAUTO2 = mysqli_num_rows($resultAUTO2);

$sqlREPRE2 = "SELECT * FROM margi WHERE TipoMargi='MREPRE' AND estado='Sin_Efecto' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultREPRE2 = mysqli_query($con,$sqlREPRE2);
$numeroREPRE2 = mysqli_num_rows($resultREPRE2);


$sqlRECO2 = "SELECT * FROM margi WHERE TipoMargi='MRECO' AND estado='Sin_Efecto' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultRECO2 = mysqli_query($con,$sqlRECO2);
$numeroRECO2 = mysqli_num_rows($resultRECO2);

$sqlSUB2 = "SELECT * FROM margi WHERE TipoMargi='MSUB' AND estado='Sin_Efecto' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultSUB2 = mysqli_query($con,$sqlSUB2);
$numeroSUB2 = mysqli_num_rows($resultSUB2);

$sqlADO2 = "SELECT * FROM margi WHERE TipoMargi='MADO' AND estado='Sin_Efecto' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultADO2 = mysqli_query($con,$sqlADO2);
$numeroADO2 = mysqli_num_rows($resultADO2);

$sqlLEG2 = "SELECT * FROM margi WHERE TipoMargi='MLEG' AND estado='Sin_Efecto' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultLEG2 = mysqli_query($con,$sqlLEG2);
$numeroLEG2 = mysqli_num_rows($resultLEG2);


$sqlREPO2 = "SELECT * FROM margi WHERE TipoMargi='MREPO' AND estado='Sin_Efecto' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultREPO2 = mysqli_query($con,$sqlREPO2);
$numeroREPO2 = mysqli_num_rows($resultREPO2);

$sqlOTRA2 = "SELECT * FROM margi WHERE TipoMargi='MRECTI' AND estado='Sin_Efecto' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultOTRA2 = mysqli_query($con,$sqlOTRA2);
$numeroOTRA2 = mysqli_num_rows($resultOTRA2);


$sqlMPNAC2 = "SELECT * FROM margi WHERE TipoMargi='MPNAC' AND estado='Sin_Efecto' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultMPNAC2 = mysqli_query($con,$sqlMPNAC2);
$numeroMPNAC2 = mysqli_num_rows($resultMPNAC2);

$sqlMRNAC2 = "SELECT * FROM margi WHERE TipoMargi='MRNAC' AND estado='Sin_Efecto' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultMRNAC2 = mysqli_query($con,$sqlMRNAC2);
$numeroMRNAC2 = mysqli_num_rows($resultMRNAC2);

$sqlMCMDIV2 = "SELECT * FROM margi WHERE TipoMargi='MCMDIV' AND estado='Sin_Efecto' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultMCMDIV2 = mysqli_query($con,$sqlMCMDIV2);
$numeroMCMDIV2 = mysqli_num_rows($resultMCMDIV2);


$sqlMNUMAR2 = "SELECT * FROM margi WHERE TipoMargi='MNUMAR' AND estado='Sin_Efecto' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultMNUMAR2 = mysqli_query($con,$sqlMNUMAR2);
$numeroMNUMAR2 = mysqli_num_rows($resultMNUMAR2);

$sqlMARN2 = "SELECT * FROM margi WHERE TipoMargi='MARN' AND estado='Sin_Efecto' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultMARN2 = mysqli_query($con,$sqlMARN2);
$numeroMARN2 = mysqli_num_rows($resultMARN2);

$sqlMADSEP2 = "SELECT * FROM margi WHERE TipoMargi='MADSEP' AND estado='Sin_Efecto' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultMADSEP2 = mysqli_query($con,$sqlMADSEP2);
$numeroMADSEP2 = mysqli_num_rows($resultMADSEP2);

$sqlMNMATRI2 = "SELECT * FROM margi WHERE TipoMargi='MNMATRI' AND estado='Sin_Efecto' AND FechaC BETWEEN '$fecha1' AND '$fecha2'";
$resultMNMATRI2 = mysqli_query($con,$sqlMNMATRI2);
$numeroMNMATRI2 = mysqli_num_rows($resultMNMATRI2);












 ?>


<?php




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




$dompdf->loadHtml('
<table width="100%">
<tr><td align="center"><img src="../ajax/logo_pb.png" with=350px height=53px></td></tr>	
<tr><td align="center">&nbsp;</td></tr
<tr><td align="center"><font size="14px">Reporte de Marginaciones creadas en el periodo del '.$newDate_varw.' al '.$newDate_varw2.'</font></td></tr>	
</table>
<hr style="color: #043569;" />
<br>
<br>
	
<div id="contenedor" style="display:flex;" align="center">
    
<div id="primero" style="width: 50%; float:left;">	
<table style="border-spacing: 5;
  border-collapse: collapse;
  background: white;
  border-radius: 10px;
  border-bottom:#043569 1px solid;
  border-bottom-radius: 10px;
  overflow: hidden;
  width: 50%;
  margin: 5 auto">
	<thead><tr style="height: 80px;background: #043569; border-radius: 10px;font-size: 15px;
  color: #fff;
  line-height: 1.2;
  font-weight: unset;" ><th colspan="3"><font color="#efb810">Marginaciones por tipo</font></th>
  </tr></thead>
<tbody>
<tr align="center" style="height: 80px;
	border-left: #043569 1px solid;
	border-right: #043569 1px solid;background: #efb810;color:#043569;font-size: 13px"><b>
	<td style="height: 25px;width: 250px;
  padding-left: 10px;"><b>Tipo</b></td><td style="height: 25px;width: 50px;
  padding-left: 10px;"><b>Activas</b></td><td style="height: 25px;width: 65px;
  padding-left: 10px;"><b>Sin_Efecto</b></td></b></tr>
	<tr style="height: 80px;
	border-left: #043569 1px solid;
	border-right: #043569 1px solid; background:#F0FFF0">
	<td style="height: 25px;width: 250px;
  padding-left: 10px;">Matrimonio:</td><td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroMAT.'</td><td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroMAT2.'</td></tr>
	<tr style="height: 80px;
	border-left: #043569 1px solid;
	border-right: #043569 1px solid;">
	<td style="height: 25px;width: 250px;
  padding-left: 10px;">Divorcio:</td>
	  <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroDIV.'</td><td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroDIV2.'</td></tr>
	<tr style="height: 80px;
	border-left: #043569 1px solid;
	border-right: #043569 1px solid; background:#F0FFF0">
	<td style="height: 25px;width: 250px;
  padding-left: 10px;">Cancelación Nacimineto por Defunción:</td>
	  <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroCNDEF.'</td><td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroCNDEF2.'</td></tr>
	<tr style="height: 80px;
	border-left: #043569 1px solid;
	border-right: #043569 1px solid;">
	<td style="height: 25px;width: 250px;
  padding-left: 10px;">Cancelación Matrimonio por Defunción:</td>
	  <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroCMDEF.'</td><td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroCMDEF2.'</td></tr>
	<tr style="height: 80px;
	border-left: #043569 1px solid;
	border-right: #043569 1px solid; background:#F0FFF0">
	<td style="height: 25px;width: 250px;
  padding-left: 10px;">Viudez:</td>
	  <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroVIU.'</td><td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroVIU2.'</td></tr>
	<tr style="height: 80px;
	border-left: #043569 1px solid;
	border-right: #043569 1px solid;">
	<td style="height: 25px;width: 250px;
  padding-left: 10px;">Cancelación Matrimonio por Divorcio:</td>
	  <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroMCMDIV.'</td>  <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroMCMDIV2.'</td></tr>
	<tr style="height: 80px;
	border-left: #043569 1px solid;
	border-right: #043569 1px solid; background:#F0FFF0">
	<td style="height: 25px;width: 250px;
  padding-left: 10px;">Artículo 15:</td>
	  <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numero15.'</td><td align="right" style="width: 25px;
  padding-right: 10px;">'.$numero152.'</td></tr>
	<tr style="height: 80px;
	border-left: #043569 1px solid;
	border-right: #043569 1px solid;">
	<td style="height: 25px;width: 250px;
  padding-left: 10px;">Artículo 17:</td>
	  <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numero17.'</td><td align="right" style="width: 25px;
  padding-right: 10px;">'.$numero172.'</td></tr>
	<tr style="height: 80px;
	border-left: #043569 1px solid;
	border-right: #043569 1px solid; background:#F0FFF0">
	<td style="height: 25px;width: 250px;
  padding-left: 10px;">Identidades:</td>
	  <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroIDEN.'</td><td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroIDEN2.'</td></tr>
	<tr style="height: 80px;
	border-left: #043569 1px solid;
	border-right: #043569 1px solid;">
	<td style="height: 25px;width: 250px;
  padding-left: 10px;">Adecuaciones:</td>
	  <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroADEC.'</td><td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroADEC2.'</td></tr>
	<tr style="height: 80px;
	border-left: #043569 1px solid;
	border-right: #043569 1px solid; background:#F0FFF0">
	<td style="height: 25px;width: 250px;
  padding-left: 10px;">Unión no Matrimonial:</td>
	  <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroMUMAT.'</td> <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroMUMAT2.'</td></tr>
	<tr style="height: 80px;
	border-left: #043569 1px solid;
	border-right: #043569 1px solid;">
	<td style="height: 25px;width: 250px;
  padding-left: 10px;">Constitución de Regímen:</td>
	  <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroCREG.'</td><td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroCREG2.'</td></tr>
	<tr style="height: 80px;
	border-left: #043569 1px solid;
	border-right: #043569 1px solid; background:#F0FFF0">
	<td style="height: 25px;width: 250px;
  padding-left: 10px;">Sustitución de Regímen:</td>
	  <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroSREG.'</td><td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroSREG2.'</td></tr>
	<tr style="height: 80px;
	border-left: #043569 1px solid;
	border-right: #043569 1px solid;">
	<td style="height: 25px;width: 250px;
  padding-left: 10px;">Tutoría:</td>
	  <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroTUTO.'</td><td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroTUTO2.'</td></tr>
	<tr style="height: 80px;
	border-left: #043569 1px solid;
	border-right: #043569 1px solid; background:#F0FFF0">
	<td style="height: 25px;width: 250px;
  padding-left: 10px;">Autoridad Parental:</td>
	  <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroAUTO.'</td> <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroAUTO2.'</td></tr>
	<tr style="height: 80px;
	border-left: #043569 1px solid;
	border-right: #043569 1px solid;">
	<td style="height: 25px;width: 250px;
  padding-left: 10px;">Representación Legal:</td><td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroREPRE.'</td><td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroREPRE2.'</td></tr>
	<tr style="height: 80px;
	border-left: #043569 1px solid;
	border-right: #043569 1px solid; background:#F0FFF0">
	<td style="height: 25px;width: 250px;
  padding-left: 10px;">Reconocimiento:</td>
	  <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroRECO.'</td><td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroRECO2.'</td></tr>	
	<tr style="height: 80px;
	border-left: #043569 1px solid;
	border-right: #043569 1px solid;">
	<td style="height: 25px;width: 250px;
  padding-left: 10px;">Subsidiario:</td>
	  <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroSUB.'</td><td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroSUB2.'</td></tr>
	<tr style="height: 80px;
	border-left: #043569 1px solid;
	border-right: #043569 1px solid; background:#F0FFF0">
	<td style="height: 25px;width: 250px;
  padding-left: 10px;">Adopciones:</td>
	  <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroADO.'</td><td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroADO2.'</td></tr>
	<tr style="height: 80px;
	border-left: #043569 1px solid;
	border-right: #043569 1px solid;">
	<td style="height: 25px;width: 250px;
  padding-left: 10px;">Legitimación:</td>
	  <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroLEG.'</td><td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroLEG2.'</td></tr>
	<tr style="height: 80px;
	border-left: #043569 1px solid;
	border-right: #043569 1px solid; background:#F0FFF0">
	<td style="height: 25px;width: 250px;
  padding-left: 10px;">Reposición:</td>
	  <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroREPO.'</td><td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroREPO2.'</td></tr>
	<tr style="height: 80px;
	border-left: #043569 1px solid;
	border-right: #043569 1px solid;">
	<td style="height: 25px;width: 250px;
  padding-left: 10px;">Rectificación:</td>
	  <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroOTRA.'</td> <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroOTRA2.'</td></tr>
  <tr style="height: 80px;
	border-left: #043569 1px solid;
	border-right: #043569 1px solid; background:#F0FFF0"">
	<td style="height: 25px;width: 250px;
  padding-left: 10px;">Perdida de Nacionalidad:</td>
	  <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroMPNAC.'</td> <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroMPNAC2.'</td></tr>
  <tr style="height: 80px;
	border-left: #043569 1px solid;
	border-right: #043569 1px solid;">
	<td style="height: 25px;width: 250px;
  padding-left: 10px;">Recuperación de Nacionalidad:</td>
	  <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroMRNAC.'</td> <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroMRNAC2.'</td></tr>
  <tr style="height: 80px;
	border-left: #043569 1px solid;
	border-right: #043569 1px solid; background:#F0FFF0"">
	<td style="height: 25px;width: 250px;
  padding-left: 10px;">Nulidad de Partida de Defunción:</td>
	  <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroMNUPDEF.'</td> <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroMNUPDEF2.'</td></tr>
  <tr style="height: 80px;
	border-left: #043569 1px solid;
	border-right: #043569 1px solid;">
	<td style="height: 25px;width: 250px;
  padding-left: 10px;">Nulidad de Marginación:</td>
	  <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroMNUMAR.'</td> <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroMNUMAR2.'</td></tr>
       <tr style="height: 80px;
	border-left: #043569 1px solid;
	border-right: #043569 1px solid; background:#F0FFF0"">
	<td style="height: 25px;width: 250px;
  padding-left: 10px;">Nulidad de Matrimonio:</td>
	  <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroMNMATRI.'</td> <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroMNMATRI2.'</td></tr>
    <tr style="height: 80px;
	border-left: #043569 1px solid;
	border-right: #043569 1px solid;">
	<td style="height: 25px;width: 250px;
  padding-left: 10px;">Rectificación Notario:</td>
	  <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroMARN.'</td> <td align="right" style="width: 25px;
  padding-right: 10px;">'.$numeroMARN2.'</td></tr>

	</tbody>
	</table></div>

<div id="segundo" style="width: 63%; float:left;">
	
<table style="border-spacing: 0;
  border-collapse: collapse;
  background: white;
  border-radius: 10px;
  border-bottom:#043569 1px solid;
  border-bottom-radius: 10px;
  overflow: hidden;
  width: 35%;
  margin: 5 auto">
<thead ><tr style="height: 80px;background: #043569; border-radius: 10px;font-size: 15px;
  color: #fff;
  line-height: 1.2;
  font-weight: unset;" ><th colspan="2"><font color="#efb810">Totales de Marginaciones</font></th>
  </tr></thead>
<tbody>	
<tr style="height: 80px;
	border-left: #043569 1px solid;
	border-right: #043569 1px solid; background:#F0FFF0">
	<td style="height: 25px; width: 200px;
  padding-left: 10px;">Total de Marginaciones creadas:</td><td align="right" style="width: 50px;
  padding-right: 10px;">'. $numero .'</td>
  </tr>
	<tr style="height: 80px;
	border-left: #043569 1px solid;
	border-right: #043569 1px solid;">
	<td style="height: 25px;width: 200px;
  padding-left: 10px;">Total de Marginaciones Activas:</td><td align="right" style="width: 50px;
  padding-right: 10px;">'.$numeroACTIVA.'</td>
	</tr>
	<tr style="border-bottom:#043569 1px solid;height: 80px;
	background:#F0FFF0">
	<td style="height: 25px;width: 200px;
  padding-left: 10px;">Total de Marginaciones Sin_Efecto:</td><td align="right" style="width: 50px;
  padding-right: 10px;border-bottom:#043569 1px solid;">'.$numeroACTIVA2.'</td>
	</tr>
	
	</tbody>
</table>	
	</div>
	</div>			');

 
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
