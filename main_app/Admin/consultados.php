<?php
if (isset($_GET['term'])){
	# conectare la base de datos
 include ("conexion.php");
	
$return_arr = array();
/* Si la conexión a la base de datos , ejecuta instrucción SQL. */
if ($con)
{
	$fetch = mysqli_query($con,"SELECT * FROM notarios where nombre like '%" . mysqli_real_escape_string($con,($_GET['term'])) . "%' LIMIT 0 ,50"); 
	
	/* Recuperar y almacenar en conjunto los resultados de la consulta.*/
	while ($row = mysqli_fetch_array($fetch)) {
		$id_producto=$row['id'];
		$row_array['value'] = $row['nombre']." | ".$row['cargojuridico'];
		$row_array['id_notario']=$row['id'];
		$row_array['nombrecargo']= $row['nombre']." | ".$row['cargojuridico'];
		$row_array['nombre']=$row['nombre'];
		$row_array['cargosjuridicos']=$row['cargojuridico'];
		
		
		
		array_push($return_arr,$row_array);
    }
}

/* Cierra la conexión. */
mysqli_close($con);

/* Codifica el resultado del array en JSON. */
echo json_encode($return_arr);

}
?>