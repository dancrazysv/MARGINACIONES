<?php
if (isset($_GET['term'])){
	# conectare la base de datos
 include ("conexion.php");
	
$return_arr = array();
/* Si la conexión a la base de datos , ejecuta instrucción SQL. */
if ($con)
{
	$fetch = mysqli_query($con,"SELECT * FROM cargo_juridico where cargo like '%" . mysqli_real_escape_string($con,($_GET['term'])) . "%' LIMIT 0 ,50"); 
	
	/* Recuperar y almacenar en conjunto los resultados de la consulta.*/
	while ($row = mysqli_fetch_array($fetch)) {
		$id_producto=$row['id'];
		$row_array['value'] = $row['cargo'];
		$row_array['id_cargo']=$row['id'];
		$row_array['nombrecargo']= $row['cargo'];
		
		
		
		
		array_push($return_arr,$row_array);
    }
}

/* Cierra la conexión. */
mysqli_close($con);

/* Codifica el resultado del array en JSON. */
echo json_encode($return_arr);

}
?>