<?php
if (isset($_GET['term'])){
	# conectare la base de datos
 include ("conexiondos.php");
	
$return_arr = array();
/* Si la conexión a la base de datos , ejecuta instrucción SQL. */
if ($con)
{
	$fetch = mysqli_query($con,"SELECT * FROM actas where busquedalf like '%" . mysqli_real_escape_string($con,($_GET['term'])) . "%' LIMIT 0 ,50"); 
	
	/* Recuperar y almacenar en conjunto los resultados de la consulta.*/
	while ($row = mysqli_fetch_array($fetch)) {
		$id_producto=$row['id'];
		$row_array['value'] = $row['busquedalf'];
		$row_array['actanum']=$row['busquedalf'];
		$row_array['nombresel'] = $row['nombresel']. " " . $row['apellidounoel']. " " . $row['apellidodosel'];
		$row_array['apeunoel']=$row['apellidounoel'];
		$row_array['apedosel']= $row['apellidodosel'];
		$row_array['nombresella']=$row['nombresella']. " " . $row['apellidounoella']. " " . $row['apellidodosella'];
		$row_array['apeunoella']=$row['apellidounoella'];
		$row_array['apedosella']=$row['apellidodosella'];
		$row_array['alcalde']=$row['alcalde'];
		$row_array['regimen']=$row['tiporegimen'];
		$row_array['usoapellidos']=$row['usoapellidos'];
		$row_array['fechamatrimonio']=$row['fechamatri'];
		$row_array['origenel']=$row['origenel'];
		$row_array['origenella']=$row['origenella'];
		$row_array['actanombreel']=$row['nombresel'];
		$row_array['actanombreella']=$row['nombresella'];
		$row_array['conoel']=$row['conoelacta'];
		$row_array['conoella']=$row['conoellaacta'];
		
		array_push($return_arr,$row_array);
    }
}

/* Cierra la conexión. */
mysqli_close($con);

/* Codifica el resultado del array en JSON. */
echo json_encode($return_arr);

}
?>