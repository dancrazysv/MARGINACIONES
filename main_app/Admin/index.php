<?php date_default_timezone_set('America/Costa_Rica'); ?>

<?php





if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']['tipo'] == "Usuario"){
		header('Location: ../../');
	}
	
else if($_SESSION['usuario']['tipo'] == "Admin"){
	
	header("Location: ../Admin/");
	
}

else if($_SESSION['usuario']['tipo'] == "CCalidad"){
	
	header("Location: ../ControlCalidad/");
	
}

else if($_SESSION['usuario']['tipo'] == "CCMarginacion"){
	
	header("Location: ../CCalidadmarginaciones/");
	
}

else if($_SESSION['usuario']['tipo'] == "Cuscatancingo"){
	
	header("Location: ../Cuscatancingo/");
	
}

else if($_SESSION['usuario']['tipo'] == "Ayutuxtepeque"){
	
	header("Location: ../Ayutuxtepeque/");
	
}

else if($_SESSION['usuario']['tipo'] == "Mejicanos"){
	
	header("Location: ../Mejicanos/");
	
}

else if($_SESSION['usuario']['tipo'] == "Ciudaddelgado"){
	
	header("Location: ../Ciudaddelgado/");
	
}



}





include_once '../intercambiador.php';

?>




<!DOCTYPE html>
<html lang="es">
<head>
  
	
	
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=0">
<title>Sistema de Marginaciones AMSS </title>

<?php require_once "vistas/parte_superior.php"?>
		
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">	 
<link href="fontawesome/css/all.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="css/bootstrapsistema.css">

<link rel="stylesheet" type="text/css" href="css/custom.css">
	
	<link href="css/jquery-ui.css" rel="stylesheet"  type="text/css">

  <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
	 <link rel="stylesheet" type="text/css" href="css/autocomplete.css">
	
	 <link rel="stylesheet" type="text/css" href="css/estilodo.css">

	
</head>
<body>

    <div class="container">
        <div class="table-wrapper">
            <div class="table-title" >
                <div class="row" >
					
                   <div class="col-sm-6" style="float:left;">
						<h2 ><img src="images/alcaldia.png"
     
     width="40px"
     height="45px"><font color="#FFFFFF"> Sistema de <b>Marginaciones AMSS</b></font></h2>
					
					
				  </div>
					<div class='fa-pull-right pull-right' style="float:right;">
						<table cellspacing="0">
						<tr><td align="right"><font color="#FFFFFF"><br/> <?php echo $nombreusers;  ?></font></td><td rowspan="2" valign="bottom" ><div class="btn-group">
<button class="btn btn-link dropdown-toggle" id="salir" 
          data-toggle="dropdown"><i class="fas fa-user-circle" style="font-size: 35px"></i></button>

  <ul class="dropdown-menu dropdown-left-manual" role="menu" >
    <li><a href='../salir.php'><i class='fas fa-sign-out-alt' >&nbsp;Cerrar Sesión</i></a></li>
    <li class="divider"></li>
    <li style="float: left"><a href="#"><button class="btn btn-link" type="button" name="cambiarc" id="cambiarc" data-toggle="tooltip" data-placement="bottom" ><span class="stretched-link" data-toggle="modal" data-target="#cambiarcontra"><i class="fas fa-unlock" style="color: #121c4e; font-size: 12px">&nbsp;Cambiar contraseña</i></span></button></a></li>


  </ul>
</div></td></tr>
						<tr><td align="right"><font color="#FFFFFF" size="1px">Administrador</font></td></tr>	
							
						</table>
						
					
					
					</div>
				
              </div>
            </div>
			<nav class="navbar navbar-default" >
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
       
		  
	
      </ul>
		<ul class="nav navbar-nav navbar-right">
			
		<button class="btn btn-link" type="button" name="btn" id="submitBtn"  data-toggle="tooltip" data-placement="bottom" title="Imprimir Marginaciones" onclick="imprimirdatos()"><span  data-toggle="modal" data-target="#confirm-submit" > <i class="fas fa-print" style="font-size:25px;color: #121c4e"></i></span></button>
		 </ul>
		<ul class="nav navbar-nav navbar-right">
			  <form class="navbar-form navbar-left">
        <div class="form-group">
			<div id="custom-search-input">
						<button 
    type="button" 
    class="btn btn-primary btn-sm" 
    data-toggle="modal" 
    data-target="#consultaModal"
>
    Consultar Foliaciones
</button>
				<div class="input-group ">
				<input type="text" class="form-control" placeholder="Buscar Libro-Folio, Nombre ó Libro--Marginación"  id="q" onkeyup="load(1);" name="folios" style="HEIGHT: 34px; width: 400px" >
                <span class="input-group-btn">
                <button class="btn btn-info" type="button" onclick="load(1);">
                <i class="fas fa-search" style="font-size:17px" ></i> </button></spam>
            				
	 </div>	
		</div>
			</div></form>
		
      </ul>
		
		
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
			
		
			
		
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

	
	
	 <script src="js/jquery-1.10.2.min.js"></script>
  <script src="js/jquery-ui.js"></script> 

	
<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/scriptdos.js"></script>
	<script src="js/bootstrap-select.min.js"></script>


	

</body>
</html>                                		                            