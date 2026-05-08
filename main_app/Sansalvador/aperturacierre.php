    <script>

    window.onload=function(){

		document.forms["enviarapertura"].submit();
}
	</script>

    
</head>
<body>

    <div class="container">
        <div class="table-wrapper">

                <div class="row">
					
                   <div class="col-sm-6">
						<h2></h2>
					
					
				  </div>
  </div>
          
<form name="enviarapertura" id="enviarapertura" method="POST" action="ajax/aperturapdf.php"  target="_parent"  type="application/octet-stream">

		<div class="table-responsive">
			<table class="table table-striped table-hover" style="display: none">
				<thead>
					<tr>
						<th colspan=2 >Foliación</th>
		  <th align="center">Marginación</th>
						<th align="center">Libro/Folio</th>
		 
					</tr>
				</thead>
				<tbody>	
<?php
$enc = ( empty($_POST['encabchk']) )   ? NULL : $_POST['encabchk'];					
$marg1 = ( empty($_POST['margchk1']) )   ? NULL : $_POST['margchk1'];
$marg2 = ( empty($_POST['margchk2']) )   ? NULL : $_POST['margchk2'];
$marg3 = ( empty($_POST['margchk3']) )   ? NULL : $_POST['margchk3'];					
$marg4 = ( empty($_POST['margchk4']) )   ? NULL : $_POST['margchk4'];				
?>
<?php
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

	echo "<input type='hidden' value=\"$row[8]\" name='libropdf' readonly=\"readonly\" id='libf1'>
		
				<input type='hidden' value=\"$row[9]\" name='foliopdf' readonly=\"readonly\" id='numf1'>";

}	
?>					
					
					
					
					
					
<?php
				
if ($enc == 'encabezadopdf' and $marg1 == 'margin1' and $marg2 == 'margin2' and $marg3 == 'margin3' and $marg4 == 'margin4' ) {
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"$row[17]\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}


$id = $hora_ext = ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"$row[17]\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}


$id = $hora_ext = ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"$row[17]\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}


$id = $hora_ext = ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){


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
<input type='hidden' value=\"$row[15]\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"$row[17]\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
}
?>
<?php
				
if ($enc == 'encabezadopdf' and $marg1 == 'margin1' and $marg2 == '' and $marg3 == '' and $marg4 == '' ) {
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"$row[17]\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}


$id = $hora_ext = ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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

}


$id = $hora_ext = ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
?>	
<?php
				
if ($enc == 'encabezadopdf' and $marg1 == 'margin1' and $marg2 == 'margin2' and $marg3 == '' and $marg4 == '' ) {
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"$row[17]\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}


$id = $hora_ext = ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"$row[17]\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}


$id = $hora_ext = ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
?>	
<?php
				
if ($enc == 'encabezadopdf' and $marg1 == 'margin1' and $marg2 == 'margin2' and $marg3 == 'margin3' and $marg4 == '' ) {
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"$row[17]\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}


$id = $hora_ext = ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"$row[17]\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}


$id = $hora_ext = ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"$row[17]\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}


$id = $hora_ext = ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
?>					
<?php
				
if ($enc == 'encabezadopdf' and $marg1 == '' and $marg2 == '' and $marg3 == '' and $marg4 == '' ) {
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
?>
					<?php
				
if ($enc == 'encabezadopdf' and $marg1 == '' and $marg2 == 'margin2' and $marg3 == '' and $marg4 == '' ) {
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"$row[17]\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}


$id = $hora_ext = ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
?>
					<?php
				
if ($enc == 'encabezadopdf' and $marg1 == '' and $marg2 == '' and $marg3 == 'margin3' and $marg4 == '' ) {
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"$row[17]\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}


$id = $hora_ext = ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
?>
<?php
				
if ($enc == 'encabezadopdf' and $marg1 == '' and $marg2 == '' and $marg3 == '' and $marg4 == 'margin4' ) {
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"$row[17]\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
}
?>
<?php
				
if ($enc == 'encabezadopdf' and $marg1 == 'margin1' and $marg2 == '' and $marg3 == 'margin3' and $marg4 == '' ) {
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"$row[17]\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}


$id = $hora_ext = ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"$row[17]\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}


$id = $hora_ext = ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
?>
<?php
				
if ($enc == 'encabezadopdf' and $marg1 == 'margin1' and $marg2 == '' and $marg3 == '' and $marg4 == 'margin4' ) {
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"$row[17]\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}


$id = $hora_ext = ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"$row[17]\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
}
?>
<?php
				
if ($enc == 'encabezadopdf' and $marg1 == '' and $marg2 == 'margin2' and $marg3 == 'margin3' and $marg4 == '' ) {
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"$row[17]\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}


$id = $hora_ext = ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"$row[17]\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}


$id = $hora_ext = ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
?>
<?php
				
if ($enc == 'encabezadopdf' and $marg1 == '' and $marg2 == 'margin2' and $marg3 == '' and $marg4 == 'margin4' ) {
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"$row[17]\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}


$id = $hora_ext = ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"$row[17]\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
}
?>
<?php
				
if ($enc == 'encabezadopdf' and $marg1 == '' and $marg2 == '' and $marg3 == 'margin3' and $marg4 == 'margin4' ) {
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"$row[17]\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}


$id = $hora_ext = ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"$row[17]\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
}
?>
<?php
				
if ($enc == 'encabezadopdf' and $marg1 == 'margin1' and $marg2 == 'margin2' and $marg3 == '' and $marg4 == 'margin4' ) {
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"$row[17]\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}


$id = $hora_ext = ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"$row[17]\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}


$id = $hora_ext = ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"$row[17]\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
}
?>
<?php
				
if ($enc == 'encabezadopdf' and $marg1 == 'margin1' and $marg2 == '' and $marg3 == 'margin3' and $marg4 == 'margin4' ) {
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"$row[17]\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}


$id = $hora_ext = ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");



$sql = "SELECT * FROM margi WHERE id = '".$id."'";


$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"$row[17]\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}


$id = $hora_ext = ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"$row[17]\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
}
?>
<?php
				
if ($enc == 'encabezadopdf' and $marg1 == '' and $marg2 == 'margin2' and $marg3 == 'margin3' and $marg4 == 'margin4' ) {
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"$row[17]\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}


$id = $hora_ext = ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"$row[17]\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}


$id = $hora_ext = ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"$row[17]\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
}
?>
<?php
				
if ($enc == '' and $marg1 == 'margin1' and $marg2 == 'margin2' and $marg3 == 'margin3' and $marg4 == 'margin4' ) {
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"$row[17]\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}


$id = $hora_ext = ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"$row[17]\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}


$id = $hora_ext = ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"$row[17]\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}


$id = $hora_ext = ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"$row[17]\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
}
?>
<?php
				
if ($enc == '' and $marg1 == 'margin1' and $marg2 == '' and $marg3 == '' and $marg4 == '' ) {
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";


$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"$row[17]\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}


$id = $hora_ext = ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
?>	
<?php
				
if ($enc == '' and $marg1 == 'margin1' and $marg2 == 'margin2' and $marg3 == '' and $marg4 == '' ) {
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"$row[17]\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}


$id = $hora_ext = ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"$row[17]\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}


$id = $hora_ext = ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
?>	
<?php
				
if ($enc == '' and $marg1 == 'margin1' and $marg2 == 'margin2' and $marg3 == 'margin3' and $marg4 == '' ) {
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"$row[17]\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}


$id = $hora_ext = ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"$row[17]\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}


$id = $hora_ext = ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"$row[17]\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}


$id = $hora_ext = ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
?>					
<?php
				
if ($enc == '' and $marg1 == '' and $marg2 == 'margin2' and $marg3 == '' and $marg4 == '' ) {
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"$row[17]\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}


$id = $hora_ext = ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
?>
					<?php
				
if ($enc == '' and $marg1 == '' and $marg2 == '' and $marg3 == 'margin3' and $marg4 == '' ) {
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"$row[17]\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}


$id = $hora_ext = ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
?>
<?php
				
if ($enc == '' and $marg1 == '' and $marg2 == '' and $marg3 == '' and $marg4 == 'margin4' ) {
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"$row[17]\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
}
?>
<?php
				
if ($enc == '' and $marg1 == 'margin1' and $marg2 == '' and $marg3 == 'margin3' and $marg4 == '' ) {
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"$row[17]\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}


$id = $hora_ext = ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"$row[17]\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}


$id = $hora_ext = ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
?>
<?php
				
if ($enc == '' and $marg1 == 'margin1' and $marg2 == '' and $marg3 == '' and $marg4 == 'margin4' ) {
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"$row[17]\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}


$id = $hora_ext = ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"$row[17]\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
}
?>
<?php
				
if ($enc == '' and $marg1 == '' and $marg2 == 'margin2' and $marg3 == 'margin3' and $marg4 == '' ) {
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"$row[17]\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}


$id = $hora_ext = ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"$row[17]\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}


$id = $hora_ext = ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
?>
<?php
				
if ($enc == '' and $marg1 == '' and $marg2 == 'margin2' and $marg3 == '' and $marg4 == 'margin4' ) {
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"$row[17]\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}


$id = $hora_ext = ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"$row[17]\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini4' readonly=\"readonly\" id='ini4'></td>
        </tr></tr>";

}
}
?>
<?php
				
if ($enc == '' and $marg1 == '' and $marg2 == '' and $marg3 == 'margin3' and $marg4 == 'margin4' ) {
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"$row[17]\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}


$id = $hora_ext = ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"$row[17]\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
}
?>
<?php
				
if ($enc == '' and $marg1 == 'margin1' and $marg2 == 'margin2' and $marg3 == '' and $marg4 == 'margin4' ) {
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"$row[17]\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}


$id = $hora_ext = ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"$row[17]\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}


$id = $hora_ext = ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"$row[17]\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
}
?>
<?php
				
if ($enc == '' and $marg1 == 'margin1' and $marg2 == '' and $marg3 == 'margin3' and $marg4 == 'margin4' ) {
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador1' readonly=\"readonly\" id='registrador1'><input type='hidden' value=\"$row[17]\" name='cargoregis1' readonly=\"readonly\" id='cargoregis1'></td>
        </tr></tr>";

}


$id = $hora_ext = ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"$row[17]\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><input type='text' value=\"$row[21]\" name='ini3' readonly=\"readonly\" id='ini3'></td>
        </tr></tr>";

}


$id = $hora_ext = ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"$row[17]\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
}
?>
<?php
				
if ($enc == '' and $marg1 == '' and $marg2 == 'margin2' and $marg3 == 'margin3' and $marg4 == 'margin4' ) {
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador2' readonly=\"readonly\" id='registrador2'><input type='hidden' value=\"$row[17]\" name='cargoregis2' readonly=\"readonly\" id='cargoregis2'></td>
        </tr>		</tr>";

}


$id = $hora_ext = ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador3' readonly=\"readonly\" id='registrador3'><input type='hidden' value=\"$row[17]\" name='cargoregis3' readonly=\"readonly\" id='cargoregis3'></td>
        </tr></tr>";

}


$id = $hora_ext = ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
<input type='hidden' value=\"$row[15]\" name='registrador4' readonly=\"readonly\" id='registrador4'><input type='hidden' value=\"$row[17]\" name='cargoregis4' readonly=\"readonly\" id='cargoregis4'></td>
        </tr></tr>";

}
}
?>
<?php
				
if ($enc == '' and $marg1 == '' and $marg2 == '' and $marg3 == '' and $marg4 == '' ) {
					
$id = $hora_ext = ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname2']) )   ? NULL : $_POST['lname2'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname3']) )   ? NULL : $_POST['lname3'];

include ("conexion.php");



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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


$id = $hora_ext = ( empty($_POST['lname4']) )   ? NULL : $_POST['lname4'];

include ("conexion.php");

$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

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
?>
					
					
				</tbody></table></form>	
	
	