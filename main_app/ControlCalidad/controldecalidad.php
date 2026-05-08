	<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #043569;
  border-bottom: 16px solid #043569;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
	text-align: center;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
</head>
<body>

<h2 align="center">Cargando PDF......</h2>

<h4 align="center">
<div class="loader" align="center"></div>
	</h4>
</body>
</html>	


<?php
		
				
if ($enc == 'encabezadopdf' and $marg1 == 'margin1' and $marg2 == 'margin2' and $marg3 == 'margin3' and $marg4 == 'margin4' ) {
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\"] name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"$row[14]\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}

if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}

if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
	
if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}	


}
	


$id =  ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg2' readonly=\"readonly\" id='marg2'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"$row[14]\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}
if ($row[22] == "revisado2"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}	

if ($row[22] == "completo"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}

if ($row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}


}


$id =  ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg3' readonly=\"readonly\" id='marg3'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"$row[14]\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}
	
if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}	
	
	if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}
	
if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}	
	

	}


$id =  ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){


	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg4' readonly=\"readonly\" id='marg4'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"$row[14]\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}	
	
if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}	
if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}	
	
	
	
}
		}
		

		
		
?>
					
			
					
<?php
				
if ($enc == 'encabezadopdf' and $marg1 == 'margin1' and $marg2 == '' and $marg3 == '' and $marg4 == '' ) {
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='' value=''><input type='hidden' name='' value=''><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"$row[14]\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
	
if ($row[22] == "revisado2"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='' value=''><input type='hidden' name='' value=''><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}

if ($row[22] == "completo"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='' value=''><input type='hidden' name='' value=''><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}

if ($row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='' value=''><input type='hidden' name='' value=''><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}


}
	

$id =  ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){
	
	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){

	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'></td>
        </tr>		</tr>";

}
	
	

	}


$id =  ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"$\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'></td>
        </tr></tr>";

}}


$id =  ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){
	
if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'></td>
        </tr></tr>";

}
}
}
?>	
					
			
					
					
					
						
					
<?php
				
if ($enc == 'encabezadopdf' and $marg1 == 'margin1' and $marg2 == 'margin2' and $marg3 == '' and $marg4 == '' ) {
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='' value=''><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"$row[14]\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
	if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='' value=''><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
	
	if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='' value=''><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
	
if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='' value=''><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}	
	
	
	
	
	
	
	}


$id =  ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

		if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg2' readonly=\"readonly\" id='marg2'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"$row[14]\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}
		if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}
		if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}
	
		if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}
	

	
	}


$id =  ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'></td>
        </tr></tr>";

}
	}


$id =  ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){
	
if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'></td>
        </tr></tr>";

}
}
	}
?>					
					
					
					

					
					
					
<?php
				
if ($enc == 'encabezadopdf' and $marg1 == 'margin1' and $marg2 == 'margin2' and $marg3 == 'margin3' and $marg4 == '' ) {
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"$row[14]\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
	
	if ($row[22] == "revisado2"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
	
	if ($row[22] == "completo"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
if ($row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}	
	
	
	
	
	}


$id =  ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg2' readonly=\"readonly\" id='marg2'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"$row[14]\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}
	
if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}	
	
if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}		
	
if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}		
	

	
	}


$id =  ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

if ($row[22] == "revisado3"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg3' readonly=\"readonly\" id='marg3'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"$row[14]\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}

if ($row[22] == "revisado2"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}	
	
if ($row[22] == "completo"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}	
	
if ($row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}
	
	
	
}	
	


$id =  ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){
	
	
	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	

	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'></td>
        </tr></tr>";

}
}
}
?>	
					
					
					

					
				
					
					
<?php
				
if ($enc == 'encabezadopdf' and $marg1 == '' and $marg2 == '' and $marg3 == '' and $marg4 == '' ) {
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

		if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='' value=''><input type='hidden' name='' value=''><input type='hidden' name='' value=''><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'></td>
        </tr></tr>";

}
	}


$id =  ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'></td>
        </tr>		</tr>";

}
	}


$id =  ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'></td>
        </tr></tr>";

}
	}


$id =  ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'></td>

        </tr></tr>";

}
}
	}
?>					
					
				
					
				
					<?php
				
if ($enc == 'encabezadopdf' and $marg1 == '' and $marg2 == 'margin2' and $marg3 == '' and $marg4 == '' ) {
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='' value=''><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='' value=''><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\"] name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'></td>
        </tr></tr>";
}
}


$id =  ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"$row[14]\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}
	
if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}	
	if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}	
	if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}	
	
	
	
	
	}


$id =  ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'></td>
        </tr></tr>";

}
	}


$id =  ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'></td>
        </tr></tr>";

}
}
}
?>				
			
					
					
		
					
				
					
					
			<?php
				
if ($enc == 'encabezadopdf' and $marg1 == '' and $marg2 == '' and $marg3 == 'margin3' and $marg4 == '' ) {
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='' value=''><input type='hidden' name='' value=''><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\"] name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'></td>
        </tr></tr>";

}
	}


$id =  ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'></td>
        </tr>		</tr>";

}
}

$id =  ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];


$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp3' readonly=\"readonly\" id='libp3'></td>


				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"$row[14]\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}

if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>


				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}
if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>


				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}	
if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>


				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}	
	
	
	
	
	
	}
	
	


$id =  ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'></td>
        </tr></tr>";

}
}
}
?>				
					
					
			
				
					
					
					
					
<?php
				
if ($enc == 'encabezadopdf' and $marg1 == '' and $marg2 == '' and $marg3 == '' and $marg4 == 'margin4' ) {
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	
	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='' value=''><input type='hidden' name='' value=''><input type='hidden' name='' value=''><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\"] name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'></td>
        </tr></tr>";

}
	}


$id =  ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){


	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'></td>
        </tr>		</tr>";

}
	}



$id =  ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];





$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){


	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'></td>
        </tr></tr>";

}
	}


$id =  ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
		if ($row[22] == "revisado3"){
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"$row[14]\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
	
if ($row[22] == "revisado2"){
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
	
	if ($row[22] == "completo"){
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
	
if ($row[22] == ""){
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}	
	
	
	
	
	
	
	
	
}}
?>				
	
					
					
			
					
				
					
<?php
				
if ($enc == 'encabezadopdf' and $marg1 == 'margin1' and $marg2 == '' and $marg3 == 'margin3' and $marg4 == '' ) {
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='' value=''><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"$row[14]\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
	
	if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='' value=''><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='' value=''><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}	
if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='' value=''><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}	
	

	}
	
	
	


$id =  ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'></td>
        </tr>		</tr>";

}
	}


$id =  ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];





$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){


	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"$row[14]\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}
if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}	
	
	if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}	
	
if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}		
	
	
	
	
	}


$id =  ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

		if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'></td>
        </tr></tr>";
}
}
}
?>	
					
					
					
					
			
					
					
					
<?php
				
if ($enc == 'encabezadopdf' and $marg1 == 'margin1' and $marg2 == '' and $marg3 == '' and $marg4 == 'margin4' ) {
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){


	if ($row[22] == "revisado3"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='' value=''><input type='hidden' name='' value=''><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>

                <td><input type='text' value=\"$row[4]\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"$row[14]\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
	
	if ($row[22] == "revisado2"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='' value=''><input type='hidden' name='' value=''><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>

                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
	if ($row[22] == "completo"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='' value=''><input type='hidden' name='' value=''><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>

                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
if ($row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='' value=''><input type='hidden' name='' value=''><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>

                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}	
	
	
	
	}


$id =  ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'></td>
        </tr>		</tr>";

}
	}


$id =  ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];





$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'></td>
        </tr></tr>";

}
}

$id =  ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"$row[14]\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
	
if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}	
	
	if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}	
	
	if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}	
	
	
	
	
	
	
	
	
	
	}
}
?>
					
					
				
					
					
					
<?php
				
if ($enc == 'encabezadopdf' and $marg1 == '' and $marg2 == 'margin2' and $marg3 == 'margin3' and $marg4 == '' ) {
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='' value=''><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\"] name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'></td>

        </tr></tr>";

}
	}


$id =  ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"$row[14]\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}

if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}	
if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}	
if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}	
	
	
	
	
	
	}
	
	
	

$id =  ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];





$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"$row[14]\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}
	
if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}	
	if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}	
	if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}	
	
	
	
	}


$id =  ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'></td>
        </tr></tr>";

}
	
}
}
?>					
					
					

					
				
					
					
					
<?php
				
if ($enc == 'encabezadopdf' and $marg1 == '' and $marg2 == 'margin2' and $marg3 == '' and $marg4 == 'margin4' ) {
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='' value=''><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='' value=''><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\"] name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'></td>
        </tr></tr>";

}
	}


$id =  ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"$row[14]\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}
if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}
	
if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}	
	
if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}	
	
	
	}

$id =  ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];





$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>


                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'></td>
        </tr></tr>";

}
	}


$id =  ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"$row[14]\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
	
if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}	
	if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}	
	
if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}		
	
	
	
	
	
	}
}
?>
					
					
					
					
					
					
					
<?php
				
if ($enc == 'encabezadopdf' and $marg1 == '' and $marg2 == '' and $marg3 == 'margin3' and $marg4 == 'margin4' ) {
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='' value=''><input type='hidden' name='' value=''><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\"] name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'></td>
        </tr></tr>";

}
	}


$id =  ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'></td>
        </tr>		</tr>";

}
	}



$id =  ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];





$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	
	if ($row[22] == "revisado3"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"$row[14]\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}
	
if ($row[22] == "revisado2"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}	
if ($row[22] == "completo"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}		
if ($row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}		
	
	
	}


$id =  ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"$row[14]\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
	
	if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
	
if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}	
	
if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}	
	
	
	
	
	
	}
}
?>				
	
					
					
				
					
					
				
					
					
				
					
<?php
				
if ($enc == 'encabezadopdf' and $marg1 == 'margin1' and $marg2 == 'margin2' and $marg3 == '' and $marg4 == 'margin4' ) {
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='' value=''><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"$row[14]\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='' value=''><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}	
if ($row[22] == "rcompleto"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='' value=''><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}		
if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='' value=''><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}		
	
	
	
	}


$id =  ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"$row[14]\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}
if ($row[22] == "revisado2"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			


			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}	
if ($row[22] == "completo"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}	
	
if ($row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}	
	
	
	
	
	}


$id =  ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];





$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'></td>
        </tr></tr>";

}
	}


$id =  ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"$row[14]\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
	
if ($row[22] == "revisado2"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}	
	
if ($row[22] == "completo"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}		
if ($row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}		
	
	
	
	
}
}
?>					

					
					
					
					
					
					
				
					
					
						
<?php
				
if ($enc == 'encabezadopdf' and $marg1 == 'margin1' and $marg2 == '' and $marg3 == 'margin3' and $marg4 == 'margin4' ) {
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='' value=''><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"$row[14]\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
	if ($row[22] == "revisado2"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='' value=''><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
	if ($row[22] == "completo"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='' value=''><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
	if ($row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='' value=''><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
	
	
	}


$id =  ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'></td>
        </tr>		</tr>";

}
	}


$id =  ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];





$sql = "SELECT * FROM margi WHERE id = '".$id."'";


$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"$row[14]\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}
if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}	
if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}		
if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}		
	
	
	
	}


$id =  ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"$row[14]\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
	
if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"$\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}	
	if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"$\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"$\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}	
	
	

	
	}
}
?>				
					

					
					
					
					
					
					
	
						
<?php
				
if ($enc == 'encabezadopdf' and $marg1 == '' and $marg2 == 'margin2' and $marg3 == 'margin3' and $marg4 == 'margin4' ) {
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value='encabezadopdfsi'><input type='hidden' name='' value=''><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\"] name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'></td>
        </tr></tr>";

}
	}


$id =  ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"$row[14]\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}
	
if ($row[22] == "revisado2"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}	
if ($row[22] == "completo"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}	
if ($row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}		
	
	
	}


$id =  ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];





$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"$row[14]\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}
	if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}
if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}	
	
if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}	
	
	
	
	}


$id =  ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>

                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"$row[14]\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
if ($row[22] == "revisado2"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>

                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}	
if ($row[22] == "completo"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>

                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}	
	
if ($row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>

                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}	
	
	
	
	
	}
}
?>			
					
					
	
				
					
		
				
					
<?php
				
if ($enc == '' and $marg1 == 'margin1' and $marg2 == 'margin2' and $marg3 == 'margin3' and $marg4 == 'margin4' ) {
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"$row[14]\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}	
	if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}	
	
	
	}


$id =  ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg2' readonly=\"readonly\" id='marg2'><input type='hidden' name='encabezadodi' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"$row[14]\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}
	if ($row[22] == "revisado2"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'><input type='hidden' name='encabezadodi' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}
if ($row[22] == "completo"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'><input type='hidden' name='encabezadodi' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}
if ($row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'><input type='hidden' name='encabezadodi' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}	
	
	
	
	}


$id =  ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg3' readonly=\"readonly\" id='marg3'><input type='hidden' name='encabezadodi' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"$row[14]\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}
if ($row[22] == "revisado2"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'><input type='hidden' name='encabezadodi' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}	
if ($row[22] == "completo"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'><input type='hidden' name='encabezadodi' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}	
if ($row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'><input type='hidden' name='encabezadodi' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}	
	
	
	
	
	
	}


$id =  ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg4' readonly=\"readonly\" id='marg4'><input type='hidden' name='encabezadodi' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"$row[14]\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'><input type='hidden' name='encabezadodi' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}	
	if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'><input type='hidden' name='encabezadodi' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
	
	if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'><input type='hidden' name='encabezadodi' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
	
	
	
	
	}
}
?>				
					
					

				
					
					
					
<?php
				
if ($enc == '' and $marg1 == 'margin1' and $marg2 == '' and $marg3 == '' and $marg4 == '' ) {
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";


$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='' value=''><input type='hidden' name='' value='n'><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"$row[14]\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
	
	if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='' value=''><input type='hidden' name='' value='n'><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>

			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
	if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='' value=''><input type='hidden' name='' value='n'><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
	
if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='' value=''><input type='hidden' name='' value='n'><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}	
	

	
	}


$id =  ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'><input type='hidden' name='encabezadodi' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'></td>
        </tr>		</tr>";

}
	}


$id =  ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'><input type='hidden' name='encabezadodi' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"$\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'></td>
        </tr></tr>";

}
	}


$id =  ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'><input type='hidden' name='encabezadodi' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'></td>
        </tr></tr>";

}
	}
}
?>	
					
					
					
					
					
					
					
				
<?php
				
if ($enc == '' and $marg1 == 'margin1' and $marg2 == 'margin2' and $marg3 == '' and $marg4 == '' ) {
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='' value=''><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"$row[14]\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
	if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='' value=''><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
	if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='' value=''><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='' value=''><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}	
	
	
	
	}


$id =  ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg2' readonly=\"readonly\" id='marg2'><input type='hidden' name='encabezadodi' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"$row[14]\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}
	
	if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'><input type='hidden' name='encabezadodi' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}
	if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'><input type='hidden' name='encabezadodi' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}
	
if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'><input type='hidden' name='encabezadodi' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}	
	
	}


$id =  ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'><input type='hidden' name='encabezadodi' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'></td>
        </tr></tr>";

}
	}


$id =  ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'><input type='hidden' name='encabezadodi' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'></td>
        </tr></tr>";

}
	}
}

?>				
					
		
					
					
					
					
					
					
<?php
				
if ($enc == '' and $marg1 == 'margin1' and $marg2 == 'margin2' and $marg3 == 'margin3' and $marg4 == '' ) {
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"$row[14]\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
	
	if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"$\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"$\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}	
if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"$\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}	
	
	
	
	
	}


$id =  ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	
	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg2' readonly=\"readonly\" id='marg2'><input type='hidden' name='encabezadodi' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"$row[14]\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}
if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'><input type='hidden' name='encabezadodi' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}
	
if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'><input type='hidden' name='encabezadodi' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}	
	if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'><input type='hidden' name='encabezadodi' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}
	
	
	
	}


$id =  ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg3' readonly=\"readonly\" id='marg3'><input type='hidden' name='encabezadodi' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>

            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"$row[14]\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}
	
if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'><input type='hidden' name='encabezadodi' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>

            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}	
	
if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'><input type='hidden' name='encabezadodi' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>

            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}		
if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'><input type='hidden' name='encabezadodi' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>

            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}		
	
	
	
	}


$id =  ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'><input type='hidden' name='encabezadodi' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'></td>
        </tr></tr>";

}
	}
}
?>				
	
					
					
					
					
					
					
	
					
<?php
				
if ($enc == '' and $marg1 == '' and $marg2 == 'margin2' and $marg3 == '' and $marg4 == '' ) {
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){


	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='' value=''><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='' value=''><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\"] name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'></td>
        </tr></tr>";

}
	}


$id =  ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"$row[14]\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}
if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}	
	
	if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}	
	
if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}		
	
	
	
	}


$id =  ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];





$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'></td>
        </tr></tr>";

}
	}


$id =  ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'></td>
        </tr></tr>";

}
	}
}
?>
					
					
					
					
					
					
	
					<?php
				
if ($enc == '' and $marg1 == '' and $marg2 == '' and $marg3 == 'margin3' and $marg4 == '' ) {
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='' value=''><input type='hidden' name='' value=''><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\"] name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'></td>
        </tr></tr>";

}
	}


$id =  ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'></td>
        </tr>		</tr>";

}
	}


$id =  ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];





$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"$row[14]\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}
if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}	
if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}		
if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}		
	
	
	
	}


$id =  ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'></td>
        </tr></tr>";

}
}
	}
?>					

					
				
					
					
					
					
				
					
<?php
				
if ($enc == '' and $marg1 == '' and $marg2 == '' and $marg3 == '' and $marg4 == 'margin4' ) {
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='' value=''><input type='hidden' name='' value=''><input type='hidden' name='' value=''><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\"] name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'></td>
        </tr></tr>";

}
	}


$id =  ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'></td>
        </tr>		</tr>";

}
	}


$id =  ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];





$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>

                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'></td>
        </tr></tr>";

}
	}


$id =  ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"$row[14]\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
	
if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}	
	
if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}		
if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}		
	
	
	
	
	}
}
?>	
					
					
					
					
					
					
<?php
				
if ($enc == '' and $marg1 == 'margin1' and $marg2 == '' and $marg3 == 'margin3' and $marg4 == '' ) {
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3"){
	
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='' value=''><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\"] name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"$row[14]\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
if ($row[22] == "revisado2"){
	
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='' value=''><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"]\"] name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}	
if ($row[22] == "completo"){
	
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='' value=''><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"]\"] name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}	
		
if ($row[22] == ""){
	
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='' value=''><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"]\"] name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}	
		

	
	}


$id =  ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			

			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'></td>
        </tr>		</tr>";

}

}

$id =  ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];





$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"$row[14]\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}
	
if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}	
if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}	
	
if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}	
	
	
	
	}


$id =  ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'></td>
        </tr></tr>";

}
	}
}
?>
					
					
					
					
					
					
			
					
<?php
				
if ($enc == '' and $marg1 == 'margin1' and $marg2 == '' and $marg3 == '' and $marg4 == 'margin4' ) {
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='' value=''><input type='hidden' name='' value=''><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"$row[14]\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
	
if ($row[22] == "revisado2"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='' value=''><input type='hidden' name='' value=''><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}	
if ($row[22] == "completo"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='' value=''><input type='hidden' name='' value=''><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}		
	
if ($row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='' value=''><input type='hidden' name='' value=''><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}		
	
	
	
	
	}


$id =  ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'></td>
        </tr>		</tr>";

}
	}


$id =  ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];





$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'></td>
        </tr></tr>";

}
	}


$id =  ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">

					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"$row[14]\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">

					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}	
if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">

					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}		
if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">

					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}		
	
	
	
	
	}
}
?>					
		
					
					
					
					
					
					
					
				
					
<?php
				
if ($enc == '' and $marg1 == '' and $marg2 == 'margin2' and $marg3 == 'margin3' and $marg4 == '' ) {
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='' value=''><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\"] name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'></td>
        </tr></tr>";

}
	}


$id =  ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"$row[14]\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}
if ($row[22] == "revisado2"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}	
	
if ($row[22] == "completo"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}		
	
if ($row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}		
	
	
	
	}


$id =  ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];





$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"$row[14]\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}
	
	if ($row[22] == "revisado2"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}
if ($row[22] == "completo"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}	
	
if ($row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}	
	
	
	}


$id =  ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >

                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'></td>
        </tr></tr>";

}
}
	}
?>	
					
					
					
					
					
				
					
					
					
<?php
				
if ($enc == '' and $marg1 == '' and $marg2 == 'margin2' and $marg3 == '' and $marg4 == 'margin4' ) {
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='' value=''><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='' value=''><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\"] name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'></td>
        </tr></tr>";

}
	}


$id =  ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"$row[14]\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}
if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}	
	if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}	
if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}		
	
	
	
	}


$id =  ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];





$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'></td>
        </tr></tr>";

}
	}


$id =  ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm4' readonly=\"readonly\" id='tipm4'><input type='hidden' value=\"$row[14]\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini4' readonly=\"readonly\" id='ini4'></td>
        </tr></tr>";

}
	
if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'></td>
        </tr></tr>";

}	
	
if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'></td>
        </tr></tr>";

}		
	
if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'></td>
        </tr></tr>";

}		
	
	
	
	
}
}
?>
					
					
					
					
				
	
					
				
<?php
				
if ($enc == '' and $marg1 == '' and $marg2 == '' and $marg3 == 'margin3' and $marg4 == 'margin4' ) {
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='' value=''><input type='hidden' name='' value=''><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\"] name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'></td>
        </tr></tr>";

}
	}


$id =  ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'></td>
        </tr>		</tr>";

}
	}


$id =  ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];





$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"$row[14]\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}
if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}	
if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}		
	
if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}		
	
	
	
	
	
	
	}


$id =  ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"$row[14]\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}	
if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}		
if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}		
	}	
	
	
}
?>					
					
					
					

					
					
					
					
					
<?php
				
if ($enc == '' and $marg1 == 'margin1' and $marg2 == 'margin2' and $marg3 == '' and $marg4 == 'margin4' ) {
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='' value=''><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"$row[14]\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
	if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='' value=''><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
	
	if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='' value=''><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
	
	if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='' value=''><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
	
	
	
	}


$id =  ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"$row[14]\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}
	if ($row[22] == "revisado2"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}
	
if ($row[22] == "completo"){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}	
	
	if ($row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}
	
	
	
	
	
	}


$id =  ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];





$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'></td>
        </tr></tr>";

}
	}


$id =  ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"$row[14]\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
if ($row[22] == "revisado2"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}	
if ($row[22] == "completo"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}		
	
if ($row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}		
	
	
	
	
	
	
	
	
	}
	
	
	
}
?>
					
					
				
					
					
					
<?php
				
if ($enc == '' and $marg1 == 'margin1' and $marg2 == '' and $marg3 == 'margin3' and $marg4 == 'margin4' ) {
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

		
	if ($row[22] == "revisado3"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='' value=''><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"$row[14]\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
	if ($row[22] == "revisado2"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='' value=''><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}
	
if ($row[22] == "completo"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='' value=''><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}	
	
if ($row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='nmarg1' value='nmarg1'><input type='hidden' name='' value=''><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'><input type='hidden' value=\"\" name='linea1' readonly=\"readonly\" id='linea1'>
<input type='hidden' value=\"\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}	
	

	
	}


$id =  ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'></td>
        </tr>		</tr>";

}
	}


$id =  ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];





$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm3' readonly=\"readonly\" id='tipm3'><input type='hidden' value=\"$row[14]\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini3' readonly=\"readonly\" id='ini3'></td>
        </tr></tr>";

}
	if ($row[22] == "revisado2"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini3' readonly=\"readonly\" id='ini3'></td>
        </tr></tr>";

}
if ($row[22] == "completo"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini3' readonly=\"readonly\" id='ini3'></td>
        </tr></tr>";

}	
if ($row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini3' readonly=\"readonly\" id='ini3'></td>
        </tr></tr>";

}	
	
	
	
	
	}


$id =  ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"$row[14]\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
	if ($row[22] == "revisado2"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
if ($row[22] == "completo"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}	
if ($row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>

                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}	
	
	
	
	
	}
}
?>
					
					
					
					
			
					
	
					
<?php
				
if ($enc == '' and $marg1 == '' and $marg2 == 'margin2' and $marg3 == 'margin3' and $marg4 == 'margin4' ) {
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='' value=''><input type='hidden' name='nmarg2' value='nmarg2'><input type='hidden' name='nmarg3' value='nmarg3'><input type='hidden' name='nmarg4' value='nmarg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\"] name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'></td>
        </tr></tr>";

}
	}


$id =  ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

if ($row[22] == "revisado3"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"$row[14]\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}
	
if ($row[22] == "revisado2"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}	
	
if ($row[22] == "completo"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}		
	
if ($row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'><input type='hidden' value=\"\" name='linea2' readonly=\"readonly\" id='linea2'>
<input type='hidden' value=\"\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}		
	}
	
	


$id =  ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];





$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"$row[14]\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}
	
	if ($row[22] == "revisado2"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}
if ($row[22] == "completo"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}	
	if ($row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'><input type='hidden' value=\"\" name='linea3' readonly=\"readonly\" id='linea3'>
<input type='hidden' value=\"\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}
	
	
	}


$id =  ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	
	if ($row[22] == "revisado3"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"$row[16]\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\">$row[2]</textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"$row[3]\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"$row[8]\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"$row[4]\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"$row[5]\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"$row[9]\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"$row[11]\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"$row[14]\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"REVISIÓN DE MARGINACIÓN\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"ÁREA DE CONTROL DE CALIDAD\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
	if ($row[22] == "revisado2"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}	
	
	if ($row[22] == "completo"){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}	
	
if ($row[22] == ""){
	
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'><input type='hidden' value=\"\" name='linea4' readonly=\"readonly\" id='linea4'>
<input type='hidden' value=\"\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}		
	
	
}
}
?>				
					
					
					
					
					
			
					
					
<?php
				
if ($enc == '' and $marg1 == '' and $marg2 == '' and $marg3 == '' and $marg4 == '' ) {
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg1' readonly=\"readonly\" id='marg1'><input type='hidden' name='encabezadodi' value=''><input type='hidden' name='' value=''><input type='hidden' name='' value=''><input type='hidden' name='' value=''><input type='hidden' name='' value=''></b></td>
				<td rowspan=6><textarea name=\"impmargi1\" rows='7' cols='60' readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					
                <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
						</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop1' readonly=\"readonly\" id='aniop1'></td>
				<td ><b><input type='text' value=\"\" name='libf1' readonly=\"readonly\" id='libf1'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp1' readonly=\"readonly\" id='libp1'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\"] name='nump1' readonly=\"readonly\" id='nump1'></td>
				<td ><b><input type='text' value=\"\" name='numf1' readonly=\"readonly\" id='numf1'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm1' readonly=\"readonly\" id='tipm1'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini1' readonly=\"readonly\" id='ini1'></td>
        </tr></tr>";

}
	}


$id =  ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){


	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg2' readonly=\"readonly\" id='marg2'></b></td>
				<td rowspan=6><textarea name=\"impmargi2\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
		 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop2' readonly=\"readonly\" id='aniop2'></td>
				<td ><b><input type='text' value=\"\" name='libf2' readonly=\"readonly\" id='libf2'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp2' readonly=\"readonly\" id='libp2'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump2' readonly=\"readonly\" id='nump2'></td>
				<td ><b><input type='text' value=\"\" name='numf2' readonly=\"readonly\" id='numf2'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm2' readonly=\"readonly\" id='tipm2'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini2' readonly=\"readonly\" id='ini2'></td>
        </tr>		</tr>";

}
	}


$id =  ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];





$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg3' readonly=\"readonly\" id='marg3'></b></td>
				<td rowspan=6><textarea name=\"impmargi3\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
					<td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop3' readonly=\"readonly\" id='aniop3'></td>
				<td ><b><input type='text' value=\"\" name='libf3' readonly=\"readonly\" id='libf3'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp3' readonly=\"readonly\" id='libp3'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump3' readonly=\"readonly\" id='nump3'></td>
				<td ><b><input type='text' value=\"\" name='numf3' readonly=\"readonly\" id='numf3'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm3' readonly=\"readonly\" id='tipm3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini3' readonly=\"readonly\" id='ini3'></td>
        </tr></tr>";

}
	}


$id =  ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	if ($row[22] == "revisado3" || $row[22] == "revisado2" || $row[22] == "completo" || $row[22] == ""){
	
	echo "<tr >
                <td width=10%># Marginación</td>
						<td><b><input type='text' value=\"\" name='marg4' readonly=\"readonly\" id='marg4'></b></td>
				<td rowspan=6><textarea name=\"impmargi4\" rows='7' cols='60'readonly=\"readonly\"></textarea></td>
					<td rowspan=1 width=\"8%\">Libro:</td>
				 <td rowspan=6 width=\"18%\"></td>
		<td rowspan=6 width=\"10%\">
					</td>
				</tr>  <tr>
				
                <td>Año Partida</td>
                <td><input type='text' value=\"\" name='aniop4' readonly=\"readonly\" id='aniop4'></td>
				<td ><b><input type='text' value=\"\" name='libf4' readonly=\"readonly\" id='libf4'></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><input type='text' value=\"\" name='libp4' readonly=\"readonly\" id='libp4'></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><input type='text' value=\"\" name='nump4' readonly=\"readonly\" id='nump4'></td>
				<td ><b><input type='text' value=\"\" name='numf4' readonly=\"readonly\" id='numf4'></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><input type='text' value=\"\" name='tipm4' readonly=\"readonly\" id='tipm4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"\" name='ini4' readonly=\"readonly\" id='ini4'></td>
        </tr></tr>";

}
	}
	}

					
?>		