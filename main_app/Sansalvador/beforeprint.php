    <script>

    window.onload=function(){
document.forms["enviarimprimir"].submit();
		
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
          
<form name="enviarimprimir" id="enviarimprimirid" method="POST" action="ajax/foliopdf.php"  target="_parent"  type="application/octet-stream">

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
		include ("conexion.php");			
				
					
$tipoimpre = ( empty($_POST['tipoimpresion']) )   ? NULL : $_POST['tipoimpresion'];	
$jeferegistro = ( empty($_POST['nombrejefe']) )   ? NULL : $_POST['nombrejefe'];
$cargojefe = ( empty($_POST['cargos']) )   ? NULL : $_POST['cargos'];

					
if ($jeferegistro == "jefe1"){
	$nombrejefe = "Lic. Juan José Armando Azucena Catán";
			}
	
	else {
		$nombrejefe = "YENY CARINA CRUZ DÍAZ";
	}			
					
if ($cargojefe == "cargo1"){
	$cargodeljefe = "Jefe del Registro del Estado Familiar";
			}
if ($cargojefe == "cargo2"){
	$cargodeljefe = "JEFA DEL REGISTRO DEL ESTADO FAMILIAR";
			}
if ($cargojefe == "cargo3"){
	$cargodeljefe = "JEFE INTERINO DEL REGISTRO DEL ESTADO FAMILIAR";
			}
if ($cargojefe == "cargo4"){
	$cargodeljefe = "JEFA INTERINO DEL REGISTRO DEL ESTADO FAMILIAR";
			}					
if ($cargojefe == "cargo5"){
	$cargodeljefe = "JEFE INTERINO adHonorem DEL REGISTRO DEL ESTADO FAMILIAR";
			}						
if ($cargojefe == "cargo6"){
	$cargodeljefe = "JEFA INTERINA adHonorem DEL REGISTRO DEL ESTADO FAMILIAR";
			}		
	
				
					
$enc = ( empty($_POST['encabchk']) )   ? NULL : $_POST['encabchk'];					
$marg1 = ( empty($_POST['margchk1']) )   ? NULL : $_POST['margchk1'];
$marg2 = ( empty($_POST['margchk2']) )   ? NULL : $_POST['margchk2'];
$marg3 = ( empty($_POST['margchk3']) )   ? NULL : $_POST['margchk3'];					
$marg4 = ( empty($_POST['margchk4']) )   ? NULL : $_POST['margchk4'];				
?>
<?php
					
$id =  ( empty($_POST['lname']) )   ? NULL : $_POST['lname'];



$sql = "SELECT * FROM margi WHERE id = '".$id."'";

$result = mysqli_query($con,$sql);
					


while($row = mysqli_fetch_array($result)){

	echo "<input type='hidden' value=\"$row[8]\" name='libropdf' readonly=\"readonly\" id='libf1'>
		
				<input type='hidden' value=\"$row[9]\" name='foliopdf' readonly=\"readonly\" id='numf1'>";

}	
					
		//////////////////////////////////		TIPO DE IMPRESION MARGINACIONES					
				
		if ($tipoimpre == "revisado2")	{		


		include ("controlmarginaciones.php");
					
			}		
	//////////////////////////////////		TIPO DE IMPRESION CONTROL DE CALIDAD		
		if ($tipoimpre == "revisado3")	{		
		

		include ("controldecalidad.php");		
					
			}			
					
					
	////////////////////////////////////		IMPRESION DE FOLIO COMPLETO
					
	if ($tipoimpre == "completo")	{

	include ("foliocompleto.php");				
			
			}			
						
					
					
?>					
					
					

		
					
				</tbody></table></form>	
	
	