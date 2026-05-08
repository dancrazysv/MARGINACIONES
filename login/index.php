<?php
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']['tipo'] == "Admin"){
		header('Location: main_app/Admin/index.php');
	}else if($_SESSION['usuario']['tipo'] == 'Usuario'){
		header('Location: main_app/Usuario/index.php');
	}
	
	
}

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Sistema de Marginaciones AMSS</title>
    <link rel="stylesheet" href="css/maindos.css">
	
	  
  </head>

	<script type='text/javascript'>santyLibBgAleat=function(){this.v="1.0";this.imagenes=function(){var x=arguments,img=this.a(x);this.s(img)};this.a=function(r){var a=Math.random()*r.length;a=Math.floor(a);return(r[a])};this.c=function(b){head=document.getElementsByTagName("head")[0];if(!head)return;var s=document.createElement("style");s.type='text/css';s.innerHTML=b;head.appendChild(s)};this.s=function(b){var o=undefined;b.css=(b.css!==o)?b.css:"";b.url=(b.url!==o)?b.url:"";
	this.c("body{background:url('"+b.url+"')no-repeat center center fixed;-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;}")}};
		$santyBA=new santyLibBgAleat();
$santyBA.imagenes(
{url:"img/back/bg1.jpg"},
{url:"img/back/bg2.jpg"},
{url:"img/back/bg3.jpg"},
{url:"img/back/bg4.jpg"},
{url:"img/back/bg5.jpg"},
{url:"img/back/bg6.jpg"}
);
</script>
	

	
  <body >



    
	  
    <div class="error">
      <span>Datos de ingreso no válidos, inténtelo de nuevo  por favor</span>
    </div>
	  <div class="contenedor">
    <div class="main">
		 
                    <img src="img/user.png" width="75" height="75" />
                
     <form action="" id="formLg" autocomplete="off" name="formularioacceso">
        <input type="text" name="usuariolg"  placeholder="Usuario" class="lowercase" autocomplete="off" required>
        <input type="password" name="passlg" placeholder="Contraseña" autocomplete="off" onkeypress="if (event.keyCode == 13) enviar_formulario();" required />
       
		 <input type="submit" class="botonlg"  value="Iniciar Sesión" >
		     </form> 
		
  </div>
		  
	  <div class="main2" style="align-content: center;">
		<center>  <img src="img/user2.png" /></center>
		  
	    </div>
	</div>
		
	  <div align="center"><font color="#FFFFFF" size="2">Sistema de Marginaciones AMSS v1.8  © 2022 Daniel Hernández</font></div>
			
		
			
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/main.js"></script>
	 
	  
  </body>
</html>
