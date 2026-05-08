<?php

$confecha =     ( empty($_POST['chkfecha']) )   ? NULL : $_POST['chkfecha'];

    if (empty($_POST['edit_idotr'])){
       
    } elseif (!empty($_POST['edit_idotr'])){
    require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
    // escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['aniootr'],ENT_QUOTES)));
    $Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
    $NPartida = ucwords(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['numotr']),'utf-8'),ENT_QUOTES))));
    $LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['librootr']),'utf-8'),ENT_QUOTES)));
    $Tipootr = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['tipootr']),'utf-8'),ENT_QUOTES)));
    $tipomargv = mysqli_real_escape_string($con,(strip_tags($_POST['tipomargvacia'],ENT_QUOTES)));
      
 
    
    $id=intval($_POST['edit_idotr']);
    // UPDATE data into database

if ($confecha != "")
{
$TxtMargi1 = trim($txtotr);
}
else
{
$TxtMargi1 = trim($txtotr);
}


        






    $sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$Tipootr', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdfotr', cargor = '$carg', estado = '$est', TipoMargi = '$tipomargv', revestado = 'revisado1', lugar= '$tipousers' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
        
        

    
        
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
    
        
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdfotr ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdfotr ?> esta asignada a otro usuario.</strong></div>
<?php 
    } 
        
        
                        
        
        
    } else 
    {
        $errors[] = "desconocido.";
    }
    


?>