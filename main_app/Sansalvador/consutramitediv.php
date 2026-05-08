<?php
if (isset($_GET['term'])){
	# conectare la base de datos
 include ("conexiontres.php");
	
$return_arr = array();
/* Si la conexión a la base de datos , ejecuta instrucción SQL. */
if ($con)
{
	$fetch = mysqli_query($con,"SELECT * FROM divorcios where solicitud like '%" . mysqli_real_escape_string($con,($_GET['term'])) . "%' LIMIT 0 ,50"); 
	
	/* Recuperar y almacenar en conjunto los resultados de la consulta.*/
	while ($row = mysqli_fetch_array($fetch)) {
		$row_array['value'] = $row['solicitud'];
		$row_array['numsolitdiv'] = $row['solicitud'];
		$row_array['nombreseldiv'] = $row['nombresel'];
		$row_array['nombreselladiv'] = $row['nombresella'];
		$row_array['conocidoeldiv']=$row['conocidoel'];
		$row_array['conocidoelladiv']=$row['conocidoella'];
		
		$row_array['fechasendiv'] = $row['fechas'];
		$row_array['lsendiv']=$row['inss'];
		$row_array['chksendiv']= $row['chksentencia'];
		$row_array['chksfechadiv']=$row['chksfecha'];
		$row_array['chkspordiv']=$row['chkspor'];
		
		$row_array['chkoficiodiv']= $row['chkoficio'];
		$row_array['chkofechadiv']= $row['chkofecha'];
		$row_array['chkooficiodiv']= $row['chkooficio'];
		$row_array['chkopordiv']= $row['chkopor'];
		$row_array['fechaoficiodiv']= $row['fechaoficio'];
		$row_array['numoficiodiv']= $row['numoficio'];
		$row_array['insoficiodiv']= $row['insoficio'];


		$row_array['fechaejediv'] = $row['fechae'];
		$row_array['lejediv']=$row['inse'];
		$row_array['chkejediv']= $row['chkejecutoria'];
		$row_array['chkefechadiv']=$row['chkefecha'];
		$row_array['chkepordiv']=$row['chkepor'];

		$row_array['chknombresdiv']=$row['chknombres'];

		$row_array['chkconoeldiv']=$row['chkconoel'];
		$row_array['chkconoelladiv']=$row['chkconoella'];
		$row_array['loficios']=$row['lugaroficio'];
		$row_array['lsentencia']=$row['lugarsentencia'];
		$row_array['lejecutoria']=$row['lugarejecutoria'];



		array_push($return_arr,$row_array);
    }
}

/* Cierra la conexión. */
mysqli_close($con);

/* Codifica el resultado del array en JSON. */
echo json_encode($return_arr);

}
?>