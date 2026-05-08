<?php
if (isset($_GET['term'])){
	# conectare la base de datos
   include ("conexion.php");
	
$return_arr = array();
/* Si la conexión a la base de datos , ejecuta instrucción SQL. */
if ($con)
{
	$fetch = mysqli_query($con,"SELECT * FROM tipo_partida where nombre_partida like '%" . mysqli_real_escape_string($con,($_GET['term'])) . "%' LIMIT 0 ,50"); 
	
	/* Recuperar y almacenar en conjunto los resultados de la consulta.*/
	while ($row = mysqli_fetch_array($fetch)) {
		$id_producto=$row['id'];
		$row_array['value'] = $row['nombre_partida'];
		$row_array['nombre_partida'] = $row['nombre_partida'];
		$row_array['iniciales_partida']=$row['iniciales_partida'];
		$row_array['id_tipo']= $row['id'];
		$row_array['grupo_partida']= $row['grupo_partida'];
		
		
		
		
		array_push($return_arr,$row_array);
    }
}

/* Cierra la conexión. */
mysqli_close($con);

/* Codifica el resultado del array en JSON. */
echo json_encode($return_arr);

}
?>