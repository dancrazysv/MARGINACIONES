<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sistema de Marginaciones AMSS </title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/custom.css">
</head>
<body onload="myFunction()">

    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
					
                   <div class="col-sm-6">
						<h2><img src="images/alcaldia.png"
     
     width="40"
     height="45"><font color="#A78B1B"> Sistema de <b>Marginaciones AMSS</b></font></h2>
					
					
					</div>
					                </div>
            </div>
			<div class='col-sm-4 pull-right'>
				<div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" class="form-control" placeholder="Buscar Libro-Folio"  id="q" onkeyup="load(1);" width="25"/>
                                <span class="input-group-btn">
                                    <button class="btn btn-info" type="button" onclick="load(1);">
                                        <span class="glyphicon glyphicon-search"></span>
										
                                    </button>
                                </span>
                            </div>
				
					    
                </div>
			</div>
			<div class='clearfix'></div>
			<hr>
			<div id="loader"></div><!-- Carga de datos ajax aqui -->
			<div id="resultados"></div><!-- Carga de datos ajax aqui -->
			<div class='outer_div'></div><!-- Carga de datos ajax aqui -->
            
			
        </div>
    </div>


<?php
	
	/* Connect To Database*/
	require_once ("../conexion.php");

	
$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';

if($action == 'ajax'){
	$query = mysqli_real_escape_string($con,(strip_tags($_REQUEST['query'], ENT_QUOTES)));

	$tables="margi";
	$campos="*";
	$sWhere = "margi.busquedalf LIKE '%".$query."%'";
	$sWhere.="order by margi.id";

	
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
	$query = mysqli_query($con,"SELECT $campos FROM  $tables where $sWhere LIMIT $offset,$per_page");
	//loop through fetched data
	


		
	
	if ($numrows>0){
		
	?>
		<div class="table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th colspan=2>Foliación</th>
		  <th align="center">Marginación</th>
						<th align="center">Libro/Folio</th>
		  <th align="center">Acción</th>
					</tr>
				</thead>
				<tbody>	
					
					
						<?php 
						$finales=0;
						while($row = mysqli_fetch_array($query)){	
							$product_id=$row['id'];
							$product_id2=$row['id'];
							$nmarg=$row['NMargi1'];
							$lpartida=$row['LibroP'];
							$npartida=$row['NPartida'];
							$tpartida=$row['TipoP'];
							$iniciales=$row['Iniciales1'];
							$txtmargi=$row['TxtMargi1'];
							$anif=$row['AnioP'];
							$libroa=$row['LibroO'];
							$folioa=$row['FolioO'];
							$finales++;
						?>	
					<tr>
                <td width=10%># Marginación</td>
						<td><b><?php echo $nmarg;?></b></td>
				<td rowspan=6><?php echo $txtmargi;?></td>
					<td rowspan=1 width="8%">Libro:</td>
						
					
						
                <td rowspan=6 width="20%">
					<?php
				if ($txtmargi == "")	 {
				
echo "<script>";
echo "function btnseleccion" . $product_id . "(sel) {";
echo "if (sel.value=='matrimonio'){";
echo "divC = document.getElementById('btnmatrimonio" . $product_id . "');";
echo "divC.style.display = '';";
echo "divT = document.getElementById('btndivorcio" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnart17" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "} else if (sel.value=='divorcio'){";
echo "divC = document.getElementById('btnmatrimonio" . $product_id . "');";
echo "divC.style.display = 'none';";
echo "divT = document.getElementById('btndivorcio" . $product_id . "');";
echo "divT.style.display = '';";
echo "divT = document.getElementById('btnart17" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "}	else {";
echo "divC = document.getElementById('btnmatrimonio" . $product_id . "');";
echo "divC.style.display = 'none';";
echo "divT = document.getElementById('btndivorcio" . $product_id . "');";
echo "divT.style.display = 'none';";
echo "divT = document.getElementById('btnart17" . $product_id . "');";
echo "divT.style.display = '';";
echo "}";		
echo "}";
echo "</script>";
echo " <select id=\"mySelect\" onchange=\"btnseleccion". $product_id . "(this)\" class=\"btn-sm\" >
										<option value=\"0\">Seleccione una opción</option>
			  <option value=\"matrimonio\">Matrimonio</option>
			  <option value=\"divorcio\">Divorcio</option>
										<option value=\"art17\">Articulo 17</option>
		  </select>					
<a href=\"#\"  data-target=\"#editProductModal\" onclick=\"myFunction()\" id=btnmatrimonio". $product_id ." class=\"fa\" data-toggle=\"modal\" style=\"display: none\" data-aniow='" . $anif . "' data-libro=\"". $lpartida . "\" data-npartida=\"" . $npartida . "\" data-iniciales1=\"" . $iniciales . "\" data-price=\"" . $iniciales . "\" data-id=\"" . $product_id . "\"><i class=\"material-icons\" data-toggle=\"tooltip\" title=\"Editar\" >&#xE254;</i>Marginación Matrimonio</a>
				
				
	<a href=\"#\"  data-target=\"#divorcios\" onclick=\"myFunction2()\" id=btndivorcio". $product_id ." class=\"fa\" data-toggle=\"modal\" style=\"display: none\" data-aniow='" . $anif . "' data-libro=\"". $lpartida . "\" data-npartida=\"" . $npartida . "\" data-iniciales1=\"" . $iniciales . "\" data-price=\"" . $iniciales . "\" data-id2=\"" . $product_id2 . "\"><i class=\"material-icons\" data-toggle=\"tooltip\" title=\"Editar\" >&#xE254;</i>Marginación Divorcio</a>
				
				
				
				<a href=#art17_" . $product_id  ." class=\"btn btn-success\" data-toggle=\"modal\" id=btnart17". $product_id  ." style=\"display: none\"><span class=\"fa fa-edit\"></span> Crear Art. 17</a>";
						    				
							
	  
} else { 
		
		echo "Para poder editar la marginación debe solicitarlo al Administrador";			
}	
			?>		
																																																																					</td>
					  <tr>
				
                <td>Año Partida</td>
                <td><?php echo $anif;?></td>
				<td ><b><?php echo $libroa;?></b></td>
						  
            </tr>
            <tr>
                <td>Libro Partida</td>
                <td><?php echo $lpartida;?></td>
				<td>Folio:</td>
            </tr>
			<tr>
                <td># Partida</td>
                <td><?php echo $npartida;?></td>
				<td ><b><?php echo $folioa;?></b></td>
            </tr>
			
			<tr>
                <td>Tipo Partida</td>
                <td><?php echo $tpartida;?></td>
            </tr>
			
			<tr>
                <td>Iniciales</td>
                <td><?php echo $iniciales;?></td>
        </tr></tbody>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
						
						</tr>
						<?php }?>
						<tr>
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
	<script src="js\script.js"></script>
	

</body>
</html>                                		                            	  
