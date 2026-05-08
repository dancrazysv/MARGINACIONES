
<?php

include_once '../../intercambiador.php';


?>



<?php
	
	/* Connect To Database*/
	require_once ("../conexion.php");

	
$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';

if($action == 'ajax'){
	$query = mysqli_real_escape_string($con,(strip_tags($_REQUEST['query'], ENT_QUOTES)));
	$tconsulta = mysqli_real_escape_string($con,(strip_tags($_REQUEST['query'], ENT_QUOTES)));
	
	$foo = $tconsulta;

if(strpos($foo, "-") === false){
  $impresion = "nombre";
}else{
	 $impresion = "folio";
	}
	

$tables = "margi";
$campos = "*";

$sWhereParts = [];

if ($impresion === 'folio') {
    // Búsqueda rápida y exacta
    $sWhereParts[] = "margi.busquedalf = '".$query."'";
    $sWhereParts[] = "margi.libro_nmargi_concat = '".$query."'";
} else {
    // Búsqueda por texto (solo cuando no es folio)
    $sWhereParts[] = "margi.TxtMargi1 LIKE '%".$query."%'";
}

$sWhere = "(" . implode(" OR ", $sWhereParts) . ")";
$sWhere .= " ORDER BY margi.id";

	
	include 'pagination.php'; //include pagination file
	//pagination variables
	$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
	$per_page = intval($_REQUEST['per_page']); //how much records you want to show
	$adjacents  = 4; //gap between pages after number of adjacents
	$offset = ($page - 1) * $per_page;
	//Count the total number of row in your table*/
	$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM $tables where $sWhere ");
	if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
	else {echo mysqli_error($con);}
	$total_pages = ceil($numrows/$per_page);
	//main query to fetch the data
	$query = mysqli_query($con,"SELECT $campos FROM $tables where $sWhere LIMIT $offset,$per_page");
	//loop through fetched data
	
$libroultimo =  mysqli_query($con,"SELECT LibroO FROM margi order by id desc");
$libroultimo2 = mysqli_fetch_array($libroultimo);
$libroultimo3 = $libroultimo2['LibroO'];		
$libroultimo4 = $libroultimo2['LibroO']+1;

		
	
	if ($numrows>0){
		
	?>
<form role="form" id="formfield" action="ajax/beforeprint.php" method="post"  enctype="multipart/form-data" onsubmit="return validateForm();" >
<input type="hidden" name="action" value="add_form" /> 
		<div class="table-responsive">
			<table class="table table-striped table-hover" width="100%">
				<thead>
					<tr>
						<th colspan="2" style="text-align:center" >Foliación</th>
		  <th style="text-align:center" width="65%">Marginación</th>
						<th style="text-align:center">Libro/Folio</th>
		  <th style="text-align:center">Acción</th>
						
					</tr>
				</thead>
				<tbody>	
					
					
						<?php 
						$finales=0;
						while($row = mysqli_fetch_array($query)){	
							$product_id=$row['id'];
							$product_id3=$row['id']+1;
							$product_id4=$row['id']+2;
							$product_id5=$row['id']+3;
							$product_id2=$row['id'];
							$product_id17=$row['id'];
							$product_idcd=$row['id'];
							$product_idad=$row['id'];
							$product_idid=$row['id'];
							$product_idprnac=$row['id'];
							$product_idimp=$row['id'];
							$product_idreg=$row['id'];
							$product_idaut=$row['id'];
							$product_idvar=$row['id'];
							$product_idotr=$row['id'];
							$product_idrev=$row['id'];
							$revision_margi=$row['id'];
							$nmarg=$row['NMargi1'];
							$nmarpdf2=$row['NMargi1'];
							$nmarpdfiden=$row['NMargi1'];
							$nmarpdfprnac=$row['NMargi1'];
							$nmarpdfadec=$row['NMargi1'];
							$nmarpdfreg=$row['NMargi1'];
							$nmarpdfotr=$row['NMargi1'];
							$nmarg2=$row['NMargi1']+1;
							$nmarg3=$row['NMargi1']+2;
							$nmarg4=$row['NMargi1']+3;
							$control=$row['revestado'];
							$lpartida=$row['LibroP'];
							$npartida=$row['NPartida'];
							$tpartida=$row['TipoP'];
							$iniciales=$row['Iniciales1'];
							$txtmargi=$row['TxtMargi1'];
							$txtmargirev=$row['TxtMargi1'];
							$anif=$row['AnioP'];
							$libroa=$row['LibroO'];
							$folioa=$row['FolioO'];
							$tipomarginacion=$row['TipoMargi'];
							$nmarpdf=$row['NMargi1'];
							$nmarpdf17=$row['NMargi1'];
							$nmarpdfcd=$row['NMargi1'];
							$nmarpdfaut=$row['NMargi1'];
							$nmarpdfvar=$row['NMargi1'];
							$estados=$row['estado'];
							$fecha=$row['FechaC'];
							$hora=$row['HoraC'];
							$librof=$row['busquedalf'];
							$librofdiv=$row['busquedalf'];
							$revisionestado=$row['revestado'];
							$fechae = $row['Fechae'];
							$seguimientouno=$row['seguimientogcm'];
							$seguimientodos=$row['seguimientoccgcm'];
							$segcontrolc = $row['seguimientogcm'];
							$segcontrole = $row['seguimientoecm'];

							$seguimientoediuno = $row['seguimientoccgcm'];
							$seguimientoedidos = $row['seguimientoccecm'];
							$lugar = $row['lugar'];

							$fin=$row['margfin'];
							$finales++;
							
							if($fecha==''){
								$newDate='';
								
							}else{
								$newDate = date("d/m/Y", strtotime($fecha));
							}
								
							
							
							
						?>	
					<tr >
                <td width="5%"># Marg.</td>
						<td width="7%"><b><?php echo $nmarg;?></b></td>
				<td rowspan="6" align="justify"><?php echo $txtmargi;?></td>
					<td rowspan="1" width="5%">Libro-Folio:</td>
						
					
						
                <td rowspan="4" width="18%" align="">
					
					
					<?php
						
				
		echo "<input type='hidden' class='form-control'  name='ulibro' id='ulibro' value='$libroultimo3'>";
							echo "<input type='hidden' class='form-control'  name='ulibro2' id='ulibro2' value='$libroultimo4'>";
				echo "<input type='hidden' class='form-control' name='lastname' id='lastname' value='$product_id'>";
							echo "<input type='hidden' class='form-control'  name='marginum' id='marginum' value='$nmarg'>";
				echo "<input type='hidden' class='form-control' name='lastname1' id='lastname1' value='$product_id3'>";
							echo "<input type='hidden' class='form-control'  name='marginum2' id='marginum2' value='$nmarg2'>";
								echo "<input type='hidden' class='form-control'  name='lastname2' id='lastname2' value='$product_id4'>";
							echo "<input type='hidden' class='form-control'  name='marginum3' id='marginum3' value='$nmarg3'>";
								echo "<input type='hidden' class='form-control'  name='lastname3' id='lastname3' value='$product_id5'>";
							echo "<input type='hidden' class='form-control'  name='marginum4' id='marginum4' value='$nmarg4'>";
							echo "<input type='hidden' name='tipoimpresion' id='tipoimpresion' value='$impresion'>";
						echo "<input type='hidden' class='form-control'  name='marg1control' id='marg1control' value='$control'>";
							
							
							
			?>
					
					<?php
							
		
							
							
		if ($iniciales == "")	{
			
		echo "La marginación no ha sido asignada";		
			
			
		}  	else {							
							
		
					
							
							
				if ($txtmargi == "" and $revisionestado == "")	 {
				

echo "<script>";
echo "function btnseleccion" . $product_id . "(sel) {";
echo "if (sel.value=='matrimonio'){";
echo "divC = document.getElementById('btnmatrimonio" . $product_id . "');";
echo "divC.style.display = '';";
echo "divT = document.getElementById('btndivorcio" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnart17" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btncandef" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btniden" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnadec" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnreg" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnaut" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnvar" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnprnac" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnotr" . $product_id . "');";
echo "divT.style.display = 'none';";					
echo "} else if (sel.value=='divorcio'){";
echo "divC = document.getElementById('btnmatrimonio" . $product_id . "');";
echo "divC.style.display = 'none';";
echo "divT = document.getElementById('btndivorcio" . $product_id . "');";
echo "divT.style.display = '';";
echo "divT = document.getElementById('btnart17" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btncandef" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btniden" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnadec" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnreg" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnaut" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnvar" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnprnac" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnotr" . $product_id . "');";
echo "divT.style.display = 'none';";					
echo "}	 else if (sel.value=='candef'){";
echo "divC = document.getElementById('btnmatrimonio" . $product_id . "');";
echo "divC.style.display = 'none';";
echo "divT = document.getElementById('btndivorcio" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnart17" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btncandef" . $product_id . "');";
echo "divT.style.display = '';";
echo "divT = document.getElementById('btniden" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnadec" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnreg" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnaut" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnvar" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnprnac" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnotr" . $product_id . "');";
echo "divT.style.display = 'none';";					
echo "}	else if (sel.value=='art17') {";
echo "divC = document.getElementById('btnmatrimonio" . $product_id . "');";
echo "divC.style.display = 'none';";
echo "divT = document.getElementById('btndivorcio" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnart17" . $product_id . "');";
echo "divT.style.display = '';";
echo "divT = document.getElementById('btncandef" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btniden" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnadec" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnreg" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnaut" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnvar" . $product_id . "');";
echo "divT.style.display = 'none';";	
echo "divT = document.getElementById('btnprnac" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnotr" . $product_id . "');";
echo "divT.style.display = 'none';";					
echo "} else if (sel.value=='iden') {";
echo "divC = document.getElementById('btnmatrimonio" . $product_id . "');";
echo "divC.style.display = 'none';";
echo "divT = document.getElementById('btndivorcio" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnart17" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btncandef" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btniden" . $product_id . "');";
echo "divT.style.display = '';";
echo "divT = document.getElementById('btnadec" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnreg" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnaut" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnvar" . $product_id . "');";
echo "divT.style.display = 'none';";	
echo "divT = document.getElementById('btnprnac" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnotr" . $product_id . "');";
echo "divT.style.display = 'none';";					
echo "} else if (sel.value=='adec') {";
echo "divC = document.getElementById('btnmatrimonio" . $product_id . "');";
echo "divC.style.display = 'none';";
echo "divT = document.getElementById('btndivorcio" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnart17" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btncandef" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btniden" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnadec" . $product_id . "');";
echo "divT.style.display = '';";
echo "divT = document.getElementById('btnreg" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnaut" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnvar" . $product_id . "');";
echo "divT.style.display = 'none';";	
echo "divT = document.getElementById('btnprnac" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnotr" . $product_id . "');";
echo "divT.style.display = 'none';";					
echo "} else if (sel.value=='reg') {";
echo "divC = document.getElementById('btnmatrimonio" . $product_id . "');";
echo "divC.style.display = 'none';";
echo "divT = document.getElementById('btndivorcio" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnart17" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btncandef" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btniden" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnadec" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnreg" . $product_id . "');";
echo "divT.style.display = '';";
echo "divT = document.getElementById('btnaut" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnvar" . $product_id . "');";
echo "divT.style.display = 'none';";	
echo "divT = document.getElementById('btnprnac" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnotr" . $product_id . "');";
echo "divT.style.display = 'none';";					
echo "} else if (sel.value=='aut') {";
echo "divC = document.getElementById('btnmatrimonio" . $product_id . "');";
echo "divC.style.display = 'none';";
echo "divT = document.getElementById('btndivorcio" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnart17" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btncandef" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btniden" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnadec" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnreg" . $product_id . "');";
echo "divT.style.display = 'none';";	
echo "divT = document.getElementById('btnaut" . $product_id . "');";
echo "divT.style.display = '';";
echo "divT = document.getElementById('btnvar" . $product_id . "');";
echo "divT.style.display = 'none';";	
echo "divT = document.getElementById('btnprnac" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnotr" . $product_id . "');";
echo "divT.style.display = 'none';";					
echo "} else if (sel.value=='var') {";
echo "divC = document.getElementById('btnmatrimonio" . $product_id . "');";
echo "divC.style.display = 'none';";
echo "divT = document.getElementById('btndivorcio" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnart17" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btncandef" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btniden" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnadec" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnreg" . $product_id . "');";
echo "divT.style.display = 'none';";	
echo "divT = document.getElementById('btnaut" . $product_id . "');";
echo "divT.style.display = 'none';";		
echo "divT = document.getElementById('btnvar" . $product_id . "');";
echo "divT.style.display = '';";
echo "divT = document.getElementById('btnprnac" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnotr" . $product_id . "');";
echo "divT.style.display = 'none';";					
echo "} else if (sel.value=='otr') {";
echo "divC = document.getElementById('btnmatrimonio" . $product_id . "');";
echo "divC.style.display = 'none';";
echo "divT = document.getElementById('btndivorcio" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnart17" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btncandef" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btniden" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnadec" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnreg" . $product_id . "');";
echo "divT.style.display = 'none';";	
echo "divT = document.getElementById('btnaut" . $product_id . "');";
echo "divT.style.display = 'none';";		
echo "divT = document.getElementById('btnvar" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnprnac" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnotr" . $product_id . "');";
echo "divT.style.display = '';";					
echo "} 

else if (sel.value=='prnac'){";
echo "divC = document.getElementById('btnmatrimonio" . $product_id . "');";
echo "divC.style.display = 'none';";
echo "divT = document.getElementById('btndivorcio" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnart17" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btncandef" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btniden" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnadec" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnreg" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnaut" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnvar" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnprnac" . $product_id . "');";
echo "divT.style.display = '';";
echo "divT = document.getElementById('btnotr" . $product_id . "');";
echo "divT.style.display = 'none';";					
echo "}	



else {";
echo "divC = document.getElementById('btnmatrimonio" . $product_id . "');";
echo "divC.style.display = 'none';";
echo "divT = document.getElementById('btndivorcio" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnart17" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btncandef" . $product_id . "');";
echo "divT.style.display = 'none';";	
echo "divT = document.getElementById('btniden" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnadec" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnreg" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnaut" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnvar" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnprnac" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnotr" . $product_id . "');";
echo "divT.style.display = 'none';";					
echo "}}";
echo "</script>";
echo " <select id=\"mySelect\" class=\"form-control btn-sm\"  onchange=\"btnseleccion". $product_id . "(this);\"  >
										<option value=\"0\">Seleccione una opción</option>
			  <option value=\"matrimonio\">Matrimonio</option>
			  <option value=\"divorcio\">Divorcio</option>
										<option value=\"art17\">Articulo 15, 17 y Recti. Notario</option>
										<option value=\"candef\">Cancelaciones por Def.</option>
										<option value=\"iden\">Identidades</option>
										<option value=\"adec\">Adecuaciones</option>
										<option value=\"reg\">Unión no Matr. y Régimen</option>
										<option value=\"aut\">Tuto./Rep. Legal/Aut. Paren.&nbsp;&nbsp;&nbsp;&nbsp;</option>
										<option value=\"var\">Varias</option>
										<option value=\"prnac\">Pérdida o Recuperación Nac.</option>
										<option value=\"otr\">Otro</option>
		  </select>	<br/>				
<a href=\"#\"  data-target=\"#editProductModal\" onclick=\"myFunction()\" id=btnmatrimonio". $product_id ." class=\"fa\" data-toggle=\"modal\" style=\"display: none\" data-librof='" . $librof . "' data-libro=\"". $lpartida . "\" data-npartida=\"" . $npartida . "\" data-iniciales1=\"" . $iniciales . "\" data-nmar=\"" . $nmarpdf . "\"  data-price=\"" . $iniciales . "\" data-id=\"" . $product_id . "\"><i class=\"fas fa-ring\" style=\"color: darkgoldenrod; font-size: 12px\"></i>Marginación Matrimonio</a>
				
				
	<a href=\"#\"  data-target=\"#divorcios\" onclick=\"myFunction2()\" id=btndivorcio". $product_id ." class=\"fa\" data-toggle=\"modal\" style=\"display: none\" data-librofdiv='" . $librofdiv . "' data-nmar2=\"" . $nmarpdf2 . "\" data-libro=\"". $lpartida . "\" data-npartida=\"" . $npartida . "\" data-iniciales1=\"" . $iniciales . "\" data-price=\"" . $iniciales . "\" data-id2=\"" . $product_id2 . "\"><i class=\"fas fa-heart-broken\" style=\"color: indianred; font-size: 12px\"></i>Marginación Divorcio</a>
				
				
				
	<a href=\"#\" name=\"btn1715\" data-target=\"#art17\" onclick=\"myFunction4()\" id=btnart17". $product_id17 ." class=\"fa\" data-toggle=\"modal\" style=\"display: none\" data-nmar17=\"" . $nmarpdf17 . "\"  data-id17=\"" . $product_id17 . "\"><i class=\"fas fa-balance-scale\" style=\"color: cadetblue; font-size: 12px\"></i>Artículo 15, 17 y Recti. Notario</a>
	
	<a href=\"#\" data-target=\"#cancedef\" onclick=\"myFunction5()\" id=btncandef". $product_idcd ." class=\"fa\" data-toggle=\"modal\" style=\"display: none\" data-nmarcd=\"" . $nmarpdfcd . "\"  data-idcd=\"" . $product_idcd . "\"><i class=\"fas fa-cross\" style=\"color: black; font-size: 12px\"></i>Cance. por Defunción</a>
	
		<a href=\"#\"  data-target=\"#identidades\" onclick=\"myFunction6()\" id=btniden". $product_idid ." class=\"fa\" data-toggle=\"modal\" style=\"display: none\" data-niden=\"" . $nmarpdfiden . "\"  data-ididen=\"" . $product_idid . "\"><i class=\"fas fa-people-arrows\" style=\"color: SlateBlue; font-size: 12px\"></i>Identidades</a>
		
		<a href=\"#\"  data-target=\"#adecuaciones\" onclick=\"myFunction7()\" id=btnadec". $product_idad ." class=\"fa\" data-toggle=\"modal\" style=\"display: none\" data-nadec=\"" . $nmarpdfadec . "\"  data-idadec=\"" . $product_idad . "\"><i class=\"fas fa-people-carry\" style=\"color: #008080; font-size: 12px\"></i>Adecuaciones</a>
		
		<a href=\"#\"  data-target=\"#regimenes\" onclick=\"myFunction8()\" id=btnreg". $product_idreg ." class=\"fa\" data-toggle=\"modal\" style=\"display: none\" data-nreg=\"" . $nmarpdfreg . "\"  data-idreg=\"" . $product_idreg . "\"><i class=\"fas fa-handshake\" style=\"color: #DC143C; font-size: 12px\"></i>Uni. no Matr. y Régimen</a>
		
			<a href=\"#\"  data-target=\"#tutorias\" onclick=\"myFunction9()\" id=btnaut". $product_idaut ." class=\"fa\" data-toggle=\"modal\" style=\"display: none\" data-naut=\"" . $nmarpdfaut . "\"  data-idaut=\"" . $product_idaut . "\"><i class=\"fas fa-handshake\" style=\"color: #00BFFF; font-size: 12px\"></i>Tuto./A. Par./R. Legal</a>
			
			<a href=\"#\"  data-target=\"#varias\" onclick=\"myFunction10()\" id=btnvar". $product_idvar ." class=\"fa\" data-toggle=\"modal\" style=\"display: none\" data-nvar=\"" . $nmarpdfvar . "\"  data-idvar=\"" . $product_idvar . "\"><i class=\"fas fa-tasks\" style=\"color: #C71585; font-size: 12px\"></i>Varias</a>
	
		<a href=\"#\"  data-target=\"#perdidanac\" onclick=\"myFunction14()\" id=btnprnac". $product_idprnac ." class=\"fa\" data-toggle=\"modal\" style=\"display: none\" data-nprnac=\"" . $nmarpdfprnac . "\"  data-idprnac=\"" . $product_idprnac . "\"><i class=\"fas fa-address-card\" style=\"color: #A20021; font-size: 12px\"></i>Pérdida o Recuperación Nacionalidad</a>


			<a href=\"#\"  data-target=\"#otras\" onclick=\"myFunction11()\" id=btnotr". $product_idotr ." class=\"fa\" data-toggle=\"modal\" style=\"display: none\" data-notr=\"" . $nmarpdfotr . "\"  data-idotr=\"" . $product_idotr . "\"><i class=\"fas fa-boxes\" style=\"color: #20B2AA; font-size: 12px\"></i>Otras</a>";
			





				
} else { 
					
		if ($txtmargi != "" and $revisionestado == "revisado1")	 {			
					
	echo "Marginación en revisión del operador";

			}
			
	if ($txtmargi != "" and $revisionestado == "revisado2")	 {			
					
echo "Marginación en revisión en el área de marginaciones";

			}

			if ($txtmargi != "" and $revisionestado == "revisado3")	 {			
					
		echo "<a href=\"#\"  data-target=\"#validarccontrol\" onclick=\"myFunction21()\" id=btnrev". $product_idrev ." class=\"fa\" data-toggle=\"modal\"  data-idrevisionc='" . $revision_margi . "' data-idvar=\"" . $nmarpdf2 . "\" data-textrevision=\"". $iniciales  . "\" data-txtlugar=\"". $lugar . "\" data-npartidarevi=\"" . $npartida . "\" data-nlibrev=\"" . $seguimientodos . "\" data-anior=\"" . $anif . "\" data-tipoparrev=\"" . $tpartida . "\"><i class=\"far fa-calendar-check\" style=\"color: #16c79a; font-size: 12px\"></i>Validar Marginación</a>";

			}
					
	if ($txtmargi != "" and $revisionestado == "completo")	 {			
					
	echo "Marginación Completa para poder editar la marginación debes de solicitarlo al Administrador";

			}				
					
					
					
					
			
			
}
		
		
		
		
		
		
		
		}	
					
					
					?>		
																																																																					</td>
		
					
					
					</tr>  <tr>
				
                <td>Tipo</td>
                <td><?php echo $tpartida;?></td>
				<td ><b><?php echo $libroa;?>-<?php echo $folioa;?></b></td>
						  
            </tr>
            <tr>
                <td>Año</td>
               
				
				<td><?php echo $anif;?></td>
				<td>Tipo Marg.</td>
            </tr>
			<tr>
                <td>Libro</td>
                
				
			  <td><?php echo $lpartida;?></td>
				<td ><b><?php echo $tipomarginacion;?></b></td>
            </tr>
			
			<tr>
                <td>Partida</td>
                
				
				
			  <td><?php echo $npartida;?></td>
				<td>Estado:</td>
				<td><b><?php echo $estados;?></b></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><?php echo $iniciales;?></td>
				<td>Creación:</td>
				<td><?php echo $newDate;?>&nbsp;||&nbsp;<?php echo $hora;?></td>
        </tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>Expediente:</td>
					<td>Edición:</td>
					<td></td>
					</tr>
				
<tr>
					<td colspan="2" style="color:#797979;">
						Seguimiento:

					</td>	<td width="50%" style="color:#797979;">Validación Control Calidad Marginaciones:</td><td colspan="2" style="color:#797979;">Validación Edición C. C. Marg.:</td></tr>
<tr><td colspan="2" style="color:#797979;"><td style="color:#797979;">
<?php 
if($segcontrolc == '' AND $fechae == '' AND $fin == ''){
$datosedicion = "Marginación en Proceso de Revisión";}

if($segcontrolc == '' AND $fechae == '' AND $fin != ''){
$datosedicion = "<font style=color:#900C3F>MARGINACIÓN NO VALIDADA</font>";}

if($segcontrolc == '' AND $fechae != '' AND $fin == ''){
$datosedicion = "<font style=color:#900C3F>MARGINACIÓN NO VALIDADA</font>";}

if($segcontrolc == '' AND $fechae != '' AND $fin != ''){
$datosedicion = "<font style=color:#900C3F>MARGINACIÓN NO VALIDADA</font>";}

if($segcontrolc != '' AND $fechae == '' AND $fin == ''){
$datosedicion = $segcontrolc;}

if($segcontrolc != '' AND $fechae != '' AND $fin != ''){
$datosedicion = $segcontrolc;}

if($segcontrolc != '' AND $fechae != '' AND $fin == ''){
$datosedicion = $segcontrolc;}

if($segcontrolc != '' AND $fechae == '' AND $fin != ''){
$datosedicion = $segcontrolc;}

if($segcontrolc == '' AND $fechae == '' AND $fin == '' AND $control == 'completo'){
$datosedicion = "<font style=color:#900C3F>MARGINACIÓN NO VALIDADA</font>";}



echo $datosedicion;
?>
	
</bold></td><td colspan="2" style="color:#797979;">


<?php

if($segcontrole == '' AND $fechae == '' AND $fin == ''){
$datosediciondos = "No requiere validación";}

if($segcontrole == '' AND $fechae == '' AND $fin != ''){
$datosediciondos = "No requiere validación";}

if($segcontrole == '' AND $fechae != '' AND $fin == ''){
$datosediciondos = "<font style=color:#900C3F>MARGINACIÓN NO VALIDADA</font>";}

if($segcontrole == '' AND $fechae != '' AND $fin != ''){
$datosediciondos = "<font style=color:#900C3F>MARGINACIÓN NO VALIDADA</font>";}

if($segcontrole != '' AND $fechae == '' AND $fin == ''){
$datosediciondos = $segcontrole;}

if($segcontrole != '' AND $fechae != '' AND $fin != ''){
$datosediciondos = $segcontrole;}

if($segcontrole != '' AND $fechae != '' AND $fin == ''){
$datosediciondos = $segcontrole;}

if($segcontrole != '' AND $fechae == '' AND $fin != ''){
$datosediciondos = $segcontrole;}

echo $datosediciondos;

?>

</td>


					</tr>


<tr>
					<td colspan="2" style="color:#797979;">
						

					</td>	<td width="50%" style="color:#797979;">Validación Control de Calidad:</td><td colspan="2" style="color:#797979;">Validación Edición C. Calidad:</td></tr>
<tr><td colspan="2" style="color:#797979;"><td style="color:#797979;"><bold>
<?php 
if($seguimientoediuno == '' AND $fechae == '' AND $fin == ''){
$datosedicioncc = "Marginación en Proceso de Revisión";}

if($seguimientoediuno == '' AND $fechae == '' AND $fin != ''){
$datosedicioncc = "<font style=color:#900C3F>MARGINACIÓN NO VALIDADA</font>";}

if($seguimientoediuno == '' AND $fechae != '' AND $fin == ''){
$datosedicioncc = "<font style=color:#900C3F>MARGINACIÓN NO VALIDADA</font>";}

if($seguimientoediuno == '' AND $fechae != '' AND $fin != ''){
$datosedicioncc = "<font style=color:#900C3F>MARGINACIÓN NO VALIDADA</font>";}

if($seguimientoediuno != '' AND $fechae == '' AND $fin == ''){
$datosedicioncc = $seguimientoediuno;}

if($seguimientoediuno != '' AND $fechae != '' AND $fin != ''){
$datosedicioncc = $seguimientoediuno;}

if($seguimientoediuno != '' AND $fechae != '' AND $fin == ''){
$datosedicioncc = $seguimientoediuno;}

if($seguimientoediuno != '' AND $fechae == '' AND $fin != ''){
$datosedicioncc = $seguimientoediuno;}


if($seguimientoediuno == '' AND $fechae == '' AND $fin == '' AND $control == 'completo'){
$datosedicioncc = "<font style=color:#900C3F>MARGINACIÓN NO VALIDADA</font>";}

echo $datosedicioncc;
?>
	
</bold></td><td colspan="2" style="color:#797979;">


<?php

if($seguimientoedidos == '' AND $fechae == '' AND $fin == ''){
$datosediciondoscc = "No requiere validación";}

if($seguimientoedidos == '' AND $fechae == '' AND $fin != ''){
$datosediciondoscc = "No requiere validación";}

if($seguimientoedidos == '' AND $fechae != '' AND $fin == ''){
$datosediciondoscc = "<font style=color:#900C3F>MARGINACIÓN NO VALIDADA</font>";}

if($seguimientoedidos == '' AND $fechae != '' AND $fin != ''){
$datosediciondoscc = "<font style=color:#900C3F>MARGINACIÓN NO VALIDADA</font>";}

if($seguimientoedidos != '' AND $fechae == '' AND $fin == ''){
$datosediciondoscc = $seguimientoedidos;}

if($seguimientoedidos != '' AND $fechae != '' AND $fin != ''){
$datosediciondoscc = $seguimientoedidos;}

if($seguimientoedidos != '' AND $fechae != '' AND $fin == ''){
$datosediciondoscc = $seguimientoedidos;}

if($seguimientoedidos != '' AND $fechae == '' AND $fin != ''){
$datosediciondoscc = $seguimientoedidos;}

echo $datosediciondoscc;

?>

</td>


					</tr>









				</tbody>
					
			
					
			
						<?php }?></table>
					
						                                
					</form>
				
				</div>
			</div>


	
	
					<table class="table table-striped table-hover"><tbody>	<tr>
							<td colspan='6'> 
								<?php 
									$inicios=$offset+1;
									$finales+=$inicios -1;
									echo "Mostrando $inicios al $finales de $numrows registros";
									echo paginate( $page, $total_pages, $adjacents);
								?>
							</td>
						</tr>
				</tbody>			
			</table>
		</div>	

	
	
	<?php	
	}	
} 
	
?>          
	
	