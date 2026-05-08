<?php
if (isset($_GET['term'])){
	# conectare la base de datos
 include ("conexiontres.php");
	
$return_arr = array();
/* Si la conexión a la base de datos , ejecuta instrucción SQL. */
if ($con)
{
	$fetch = mysqli_query($con,"SELECT * FROM datos where solicitud like '%" . mysqli_real_escape_string($con,($_GET['term'])) . "%' LIMIT 0 ,50"); 
	
	/* Recuperar y almacenar en conjunto los resultados de la consulta.*/
	while ($row = mysqli_fetch_array($fetch)) {
		$row_array['value'] = $row['solicitud'];
		$row_array['numsolit'] = $row['solicitud'];
		$row_array['nombreselt'] = $row['nombresel'];
		$row_array['ape1elt']=$row['ape1el'];
		$row_array['ape2elt']= $row['ape2el'];
		$row_array['conocidoelt']=$row['conocidoel'];
		$row_array['nombresellat'] = $row['nombresella'];
		$row_array['ape1ellat']=$row['ape1ella'];
		$row_array['ape2ellat']= $row['ape2ella'];
		$row_array['conocidoellat']=$row['conocidoella'];
		$row_array['fechamatrit']=$row['fechamatri'];
		$row_array['cfuncionariot']=$row['cargofuncionario'];
		$row_array['nfuncionariot']=$row['nombrefuncionario'];
		$row_array['lugarmatrit']=$row['lugarmatri'];
		$row_array['regiment']=$row['regimen'];
		

		$row_array['chkape2el']=$row['chkape2el'];
		$row_array['chkape2ella']=$row['chkape2ella'];

		$row_array['chkconoel']=$row['chkconoel'];
		$row_array['chkconoella']=$row['chkconoella'];

		$row_array['chkcfuncionario']=$row['chkcfuncionario'];
		$row_array['chknfuncionario']=$row['chknfuncionario'];
		$row_array['chkregimen']=$row['chkregimen'];
		$row_array['chkotroape']=$row['chkotroape'];
		$row_array['usoapet']=$row['usoape'];
		$row_array['otroapellido']=$row['otroapellido'];
		
		array_push($return_arr,$row_array);
    }
}

/* Cierra la conexión. */
mysqli_close($con);

/* Codifica el resultado del array en JSON. */
echo json_encode($return_arr);

}
?>