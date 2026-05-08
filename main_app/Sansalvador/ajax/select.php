
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>

  </head>

  <body>

  <div class="container">
    <div class="row">
      <h2>Bootstrap Select con buscador en vivo PHP MySQL</h2>
      <p>Buscador select en vivo</p>
      <hr />
    
    <div class="row-fluid">
      <select class="selectpicker" data-show-subtext="true" data-live-search="true">

<?php
include "db.php";
$con = connect();
if (!$con->set_charset("utf8")) {//asignamos la codificación comprobando que no falle
       die("Error cargando el conjunto de caracteres utf8");
}
$consulta = "SELECT * FROM municipios";
$resultado = mysqli_query($con , $consulta);
$contador=0;

while($misdatos = mysqli_fetch_assoc($resultado)){ $contador++;?>
<option data-subtext="<?php echo $misdatos["municipio"]; ?>" ></option>
<?php }?>          
</select>

    </div><hr />
    </div> 
     
  </div>


   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>  
