<?php
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']['tipo'] != "Usuario"){
		header("Location: ../Admin/");
	}
	
}else{
	header('Location: ../../');
	
}

 ?>
<?php
$inicialesuser = $_SESSION['usuario']['iniciales'];
?>


<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sistema de Marginaciones AMSS </title>
	<link href="fontawesome/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/custom.css">
	
</head>
<body>

    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
					
                   <div class="col-sm-6" style="float:left;">
						<h2><img src="images/alcaldia.png"
     
     width="40"
     height="45"><font color="#efb810"> Sistema de <b>Marginaciones AMSS</b></font></h2>
					
					
				  </div>
					<div class='fa-pull-right pull-right' style="float:right;">
						<font color="#efb810">Usuario:<br/> <?php echo $_SESSION['usuario']['nombre'] ?> </font>&nbsp;&nbsp;<a href="../salir.php" ><i class="fa fa-sign-out" style="font-size:20px"></i></a>
					
					
					</div>
						<div >
						

					
					
					</div>
              </div>
            </div><table align="right" width="30%">
	<tr><td></td><td>
              <div id="custom-search-input">
				                          <div class="input-group " >
							
                         <input type="text" class="form-control" placeholder="Buscar Libro-Folio o Nombre"  id="q" onkeyup="load(1);" width="25" name="folios" style="HEIGHT: 44px" >
                                <span class="input-group-btn">
                                    <button class="btn btn-info" type="button" onclick="load(1);">
                                        <span class="glyphicon glyphicon-search" style="font-size:25px"></span>
										 </button></spam>
                               
								
	 </div>
        	
				
		</div>			
	 </td><td><button class="btn btn-link" type="button" name="btn" id="submitBtn" data-toggle="modal" data-target="#confirm-submit" onclick="imprimirdatos()"><span class="glyphicon glyphicon-print" style="font-size:25px"></span></button> </td></tr>
		<tr><td>&nbsp;</td><td>&nbsp; 	</td><td>&nbsp;</td></tr>
	
	</table>
			
		
			<div class='clearfix'></div>
			<hr>
			<div id="loader"></div><!-- Carga de datos ajax aqui -->
			<div id="resultados"></div>
			
			<div class='outer_div'></div><!-- Carga de datos ajax aqui -->
            
			
        </div>
    </div>
	<!-- Edit Modal HTML -->
	<?php include("html/modal_add.php");?>
	<!-- Edit Modal HTML -->
	
	<?php include("html/modal_edit.php");?>

	<!-- Delete Modal HTML -->
	<?php include("html/modal_delete.php");?>
	<script src="js\script.js"></script>
	

</body>
</html>                                		                            