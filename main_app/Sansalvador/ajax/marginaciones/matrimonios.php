<?php

require_once ("../conexion.php");
$actanombresel = ( empty($_POST['actanombresel']) ) ? NULL : $_POST['actanombresel'];
$actaapeunoel = ( empty($_POST['actaapeunoel']) ) ? NULL : $_POST['actaapeunoel'];
$actaapedosel = ( empty($_POST['actaapedosel']) ) ? NULL : $_POST['actaapedosel'];
$actanombresella = ( empty($_POST['actanombresella']) ) ? NULL : $_POST['actanombresella'];
$actaapeunoella = ( empty($_POST['actaapeunoella']) ) ? NULL : $_POST['actaapeunoella'];
$actaapedosella = ( empty($_POST['actaapedosella']) ) ? NULL : $_POST['actaapedosella'];
$actaalcalde = ( empty($_POST['actaalcalde']) ) ? NULL : $_POST['actaalcalde'];
$actaregimen = ( empty($_POST['actaregimen']) ) ? NULL : $_POST['actaregimen'];
$actausoapellidos = ( empty($_POST['actausoapellidos']) ) ? NULL : $_POST['actausoapellidos'];
$actafechamatri = ( empty($_POST['actafechamatri']) ) ? NULL : $_POST['actafechamatri'];
$actaconoel = ( empty($_POST['actaconoel']) ) ? NULL : $_POST['actaconoel'];
$actaconoella = ( empty($_POST['actaconoella']) ) ? NULL : $_POST['actaconoella'];


$chkactael = ( empty($_POST['actael']) ) ? NULL : $_POST['actael'];
$chkactaella = ( empty($_POST['actaella']) ) ? NULL : $_POST['actaella'];

$actanombreseltrim = trim(titleCase($actanombresel));
$actanombresellatrim = trim(titleCase($actanombresella));
$actaapeunoeltrim = trim(titleCase($actaapeunoel));
$actaapeunoellatrim = trim(titleCase($actaapeunoella));
$actaapedoseltrim = trim(titleCase($actaapedosel));
$actaapedosellatrim = trim(titleCase($actaapedosella));
$actaconoeltrim = trim(titleCase($actaconoel));
$actaconoellatrim = trim(titleCase($actaconoella));



if ($actaapedosel == "" and $actaconoel == ""){
$nombresactael = trim(titleCase($actanombresel)) . " " . trim(titleCase($actaapeunoel));
}

if($actaapedosel != "" and $actaconoel == ""){
$nombresactael = trim(titleCase($actanombresel)) . " " . trim(titleCase($actaapeunoel)) . " " . trim(titleCase($actaapedosel));
}

if($actaapedosel == "" and $actaconoel != ""){
$nombresactael = trim(titleCase($actanombresel)) . " " . trim(titleCase($actaapeunoel)) . " conocido por " . trim(titleCase($actaconoel));
}

if($actaapedosel != "" and $actaconoel != ""){
$nombresactael = trim(titleCase($actanombresel)) . " " . trim(titleCase($actaapeunoel)) . " " . trim(titleCase($actaapedosel)) . " conocido por " . trim(titleCase($actaconoel));
}




if ($actaapedosella == "" and $actaconoella == ""){
$nombresactaella = trim(titleCase($actanombresella)) . " " . trim(titleCase($actaapeunoella));
}

if($actaapedosella != "" and $actaconoella == ""){
$nombresactaella = trim(titleCase($actanombresella)) . " " . trim(titleCase($actaapeunoella)) . " " . trim(titleCase($actaapedosella));
}

if($actaapedosella == "" and $actaconoella != ""){
$nombresactaella = trim(titleCase($actanombresella)) . " " . trim(titleCase($actaapeunoella)) . " conocida por " . trim(titleCase($actaconoella));
}

if($actaapedosella != "" and $actaconoella != ""){
$nombresactaella = trim(titleCase($actanombresella)) . " " . trim(titleCase($actaapeunoella)) . " " . trim(titleCase($actaapedosella)) . " conocida por " . trim(titleCase($actaconoella));
}



if ($actausoapellidos == "soltera"){

    $usoape1acta = "nombre " . $actaapeunoella . " " . $actaapedosella;
$usoape2acta = trim(titleCase($usoape1acta));
$usoape3acta = substr($usoape2acta,6);
$uapellidosacta = trim($usoape3acta);
        
            }
    
    else if ($actausoapellidos == "sinde"){
        
    $usoape12acta = "nombre " . $actaapeunoella ." ". $actaapeunoel;  
    $usoape22acta = trim(titleCase($usoape12acta));
$usoape32acta = substr($usoape22acta,6);
$uapellidosacta = trim($usoape32acta);  

        }
    else if ($actausoapellidos == "conde"){
        $usoape13acta = "nombre " . $actaapeunoella." de ". $actaapeunoel;    
    $usoape23acta = trim(titleCase($usoape13acta));
$usoape33acta = substr($usoape23acta,6);
$uapellidosacta = trim($usoape33acta);      

    } 

    else {
        
        $uapellidosacta = "";
        
    }





$newDateact = date('Y/m/d', strtotime($actafechamatri));
$mes_Bacta = strtolower(dater($newDateact));

$newDateact2 = date('Y', strtotime($actafechamatri));
$aniosbacta = numtoletrasanio($newDateact2);
    
if ($aniosbacta  == "dos mil veinti"){
    $anio_Bacta  = "dos mil veintiuno";
    }
else if ($aniosbacta  == "dos mil veintidos"){
    $anio_Bacta  = "dos mil veintidós";
    }   
    else {
        $anio_Bacta  = $aniosbacta;
    }
    

$newDateact3 = date('d', strtotime($actafechamatri));
$diact = numtoletras($newDateact3);

if ($diact == "veintidos"){
    $dia_acta  = "veintidós";
    } else if ($diact == "dieciseis"){
    $dia_acta  = "dieciséis";
    } else if ($diact == "veintitres"){
    $dia_acta  = "veintitrés";
    } else if ($diact == "veintiseis"){
    $dia_acta  = "veintiséis";
    } else{
    $dia_acta  = $diact;
    }



if ($actaapedosella == "" and $actausoapellidos == "soltera"){

$usaraacta = "usará el apellido";



}else{

    $usaraacta = "usará los apellidos";
}







if ($recepapella2 == "" and $uapellidos_n == "soltera"){

$usara = "usará el apellido";



}else{

    $usara = "usará los apellidos";
}






///////////////// Tipo de doc


$numdocescritura = ( empty($_POST['escrinumero']) )   ? NULL : $_POST['escrinumero'];


$aniopartida = ( empty($_POST['actanummat']) )   ? NULL : $_POST['actanummat'];
$libropartida = ( empty($_POST['libroacta']) )   ? NULL : $_POST['libroacta'];
$numpartida = ( empty($_POST['partidaacta']) )   ? NULL : $_POST['partidaacta'];
$tipopartidamat = ( empty($_POST['librotipomatri']) )   ? NULL : $_POST['librotipomatri'];




if ($tipopartidamat == ""){

$letratipopartida = "";    

} else {

$letratipopartida = $tipopartidamat;

}





$numescri = numtoletras($numdocescritura);
$numaniopartida = numtoletras($aniopartida);
$numlibpartida = numtoletras($libropartida);
$numpartidamat = numtoletras($numpartida);



if ($numescri == "veintidos"){
    $numescrimat  = "veintidós";
    } else if ($numescri == "dieciseis"){
    $numescrimat  = "dieciséis";
    } else if ($numescri == "veintitres"){
    $numescrimat  = "veintitrés";
    } else if ($numescri == "veintiseis"){
    $numescrimat  = "veintiséis";
    } else{
    $numescrimat  = $numescri;
    }


if ($numaniopartida == "veintidos"){
    $numpartimatanio  = "veintidós";
    } else if ($numaniopartida == "dieciseis"){
    $numpartimatanio  = "dieciséis";
    } else if ($numaniopartida == "veintitres"){
    $numpartimatanio  = "veintitrés";
    } else if ($numaniopartida == "veintiseis"){
    $numpartimatanio  = "veintiséis";
    } else{
    $numpartimatanio  = $numaniopartida;
    }


if ($numlibpartida == "veintidos"){
    $numlibpartimat  = "veintidós";
    } else if ($numlibpartida == "dieciseis"){
    $numlibpartimat  = "dieciséis";
    } else if ($numlibpartida == "veintitres"){
    $numlibpartimat  = "veintitrés";
    } else if ($numlibpartida == "veintiseis"){
    $numlibpartimat  = "veintiséis";
    } else{
    $numlibpartimat  = $numlibpartida;
    }


if ($numpartidamat == "veintidos"){
    $numpartidamatacta  = "veintidós";
    } else if ($numpartidamat == "dieciseis"){
    $numpartidamatacta  = "dieciséis";
    } else if ($numpartidamat == "veintitres"){
    $numpartidamatacta  = "veintitrés";
    } else if ($numpartidamat == "veintiseis"){
    $numpartidamatacta  = "veintiséis";
    } else{
    $numpartidamatacta  = $numpartidamat;
    }




if ($tipodocmatri == "escritura"){

$textomargmatri = "según Escritura Pública número " . $numescrimat . " del año " . $anio_B;

}

else if ($tipodocmatri == "acta"){

$textomargmatri = "según Acta de Matrimonio número " . $numpartidamatacta . ", libro " . $numlibpartimat . "".$letratipopartida.", del año " . $numpartimatanio;

}
else if ($tipodocmatri == "partida"){

$textomargmatri = "según Asiento de Matrimonio número " . $numpartidamatacta . ", libro " . $numlibpartimat . "".$letratipopartida.", del año " . $numpartimatanio;

}





//////////////////////////////////Matrimonio conocido social

$txtconoel = ( empty($_POST['conotxt']) ) ? NULL : $_POST['conotxt'];
$txtconoella = ( empty($_POST['conotxt2']) ) ? NULL : $_POST['conotxt2'];

if ($txtconoel == ""){
    $conocidoel = "";
    $conocido = "";
        }
    
    else {
        $conocidoel = " conocido por " . trim(titleCase($txtconoel)) . "";
        $conocido = " conocido por " . trim(titleCase($txtconoel)) . ",";
    }

if ($txtconoella == ""){
    $conocidoella = "";
    $conocida = "";
        }
    
    else {
        $conocidoella = " conocida por " . trim(titleCase($txtconoella)) . "";
        $conocida = " conocida por " . trim(titleCase($txtconoella)) . ",";
    }




$apellidosel = ( empty($_POST['apellidoel']) ) ? NULL : $_POST['apellidoel'];

if ($apellidosel == ""){
    $apellido2 = "";
        }
    
    else {
        $apellidoconl = "nombre " . $apellidosel;
        $apellidosconl = trim(titleCase($apellidoconl));
        
        $result1 = substr($apellidosconl,6);
            
        $apellido2 = " " . trim($result1);
        
    }

$apellidosella = ( empty($_POST['apellidoella']) ) ? NULL : $_POST['apellidoella'];
if ($apellidosella == ""){
    $apellidoella2 = "";
        }
    
    else {
        $apellidoconl2 = "nombre " . $apellidosella;
        $apellidosconl2 = trim(titleCase($apellidoconl2));
        
        $result2 = substr($apellidosconl2,6);
        
        
        $apellidoella2 = " " . trim($result2);
        
    }



$ape1 = ( empty($_POST['apellidoel1']) ) ? NULL : $_POST['apellidoel1'];

$conv1 = titleCase("nombre " . $ape1);
$convape = trim(titleCase($conv1));
$conv2 = substr($conv1,6);
$conv3 = trim($conv2);


$ape2 = ( empty($_POST['apellidoella1']) ) ? NULL : $_POST['apellidoella1'];

$conv4 = titleCase("nombre " . $ape2);
$convape2 = trim(titleCase($conv4));
$conv5 = substr($conv4,6);
$conv6 = trim($conv5);



///////////////////// revision si ya se encuentra realizada la marginacion

    $AnioP = ( empty($_POST['edit_anioe3']) ) ? NULL : $_POST['edit_anioe3'];
    $NPartida = ( empty($_POST['edit_npartida3']) ) ? NULL : $_POST['edit_npartida3'];
    $LibroP = ( empty($_POST['edit_libro3']) ) ? NULL : $_POST['edit_libro3'];
    $tipopart = ( empty($_POST['tipopar']) )   ? NULL : $_POST['tipopar'];




    $AnioP2 = ( empty($_POST['edit_anioe2']) ) ? NULL : $_POST['edit_anioe2'];
    $NPartida2 = ( empty($_POST['edit_npartida2']) ) ? NULL : $_POST['edit_npartida2'];
    $LibroP2 = ( empty($_POST['edit_libro2']) ) ? NULL : $_POST['edit_libro2'];
    $tipopart2 = ( empty($_POST['tipopar2']) )   ? NULL : $_POST['tipopar2'];





$sql = "select * from margi where (AnioP='$AnioP') AND (LibroP='$LibroP') AND (NPartida='$NPartida') AND (estado='Activa') AND (TipoP='$tipopart') AND (TipoMargi='MNAC') AND (fechaevento='$originalDate')";
$result = mysqli_query($con, $sql);

$sql2 = "select * from margi where (AnioP='$AnioP2') AND (LibroP='$LibroP2') AND (NPartida='$NPartida2') AND (estado='Activa') AND (TipoP='$tipopart2') AND (TipoMargi='MNAC') AND (fechaevento='$originalDate')";
$result2 = mysqli_query($con, $sql2);

$sql3 = "select * from margi where (AnioP='$AnioP') AND (LibroP='$LibroP') AND (NPartida='$NPartida') AND (estado='Activa') AND (TipoP='$tipopart') AND (TipoMargi='MNAC') AND (fechaevento='$actafechamatri')";
$result3 = mysqli_query($con, $sql3);

$sql4 = "select * from margi where (AnioP='$AnioP2') AND (LibroP='$LibroP2') AND (NPartida='$NPartida2') AND (estado='Activa') AND (TipoP='$tipopart2') AND (TipoMargi='MNAC') AND (fechaevento='$actafechamatri')";
$result4 = mysqli_query($con, $sql4);





 if(mysqli_num_rows($result)>=1)
 { ?>
     <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> Registro no guardado una o más marginaciones ya han sido creadas dentro del sistema 1</strong>
<?php 
}
 elseif (mysqli_num_rows($result2)>=1)
 { ?>
     <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> Registro no guardado una o más marginaciones ya han sido creadas dentro del sistema 2</strong>
<?php 
 }

elseif (mysqli_num_rows($result3)>=1)
 { ?>
     <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> Registro no guardado una o más marginaciones ya han sido creadas dentro del sistema 3</strong>
<?php 
 }

elseif (mysqli_num_rows($result4)>=1)
 { ?>
     <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> Registro no guardado una o más marginaciones ya han sido creadas dentro del sistema 4</strong>
<?php 
 }




else
 {






if ($value_el == 'male' and $regimenv == 'Rvalue' and $apellidosv == 'Avalue' ) {


    if (empty($_POST['edit_id'])){
        
    } elseif (!empty($_POST['edit_id'])){
    require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
    // escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe3'],ENT_QUOTES)));
    $Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
    $NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida3']),'utf-8'),ENT_QUOTES))));
    $LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro3']),'utf-8'),ENT_QUOTES)));
    
    
    
    
 
    
    $id=intval($_POST['edit_id']);
    // UPDATE data into database
$TxtMargi1 = trim(titleCase($_POST['edit_el2'])) . " " .  "" . $conv2 . "" . $apellido2 . "" . $conocido . " contrajo matrimonio con " . trim(titleCase($_POST['Nellamat'])) . " " .  "" . $conv6 . "" . $apellidoella2 . "" .$conocidoella . ", el día " . $dia_B . "" . $mes_B . "" . $anio_B . $opcionnotario . $casootro . "" . trim($_POST['LugarB'],'utf-8') . "; los contrayentes optan por el Régimen Patrimonial " . trim(titleCase($uregimen)) . "; la contrayente ". $usara ." ". trim(titleCase($uapellidos)) .". Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        

    $sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1', fechaevento = '$originalDate', lugar= '$tipousers' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
        
        
     
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
    
        
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert" >
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Matrimonio El) esta asignada a otro usuario.</strong></div>
<?php 
    } 
        
        
                        
        
        
    } else 
    {
        $errors[] = "desconocido.";
    }
    
    
    
    } if ($value_el == 'female' and $regimenv == 'Rvalue' and $apellidosv == 'Avalue') {


    if (empty($_POST['edit_id'])){
        $errors[] = "ID está vacío.2";
    } elseif (!empty($_POST['edit_id'])){
    require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
    // escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe2'],ENT_QUOTES)));
    $Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
    $NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida2']),'utf-8'),ENT_QUOTES)));
    $LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro2']),'utf-8'),ENT_QUOTES)));
        
                
 
    
    $id=intval($_POST['edit_id']);
    // UPDATE data into database
            $TxtMargi1 = trim(titleCase($_POST['Nellamat'])) . " " .  "" . $conv6 . "" . $apellidoella2 . "" . $conocida . " contrajo matrimonio con " . trim(titleCase($_POST['edit_el2'])) . " " .  "" . $conv2 . "" . $apellido2 . "". $conocidoel . ", el día " .  $dia_B . "" . $mes_B . "" . $anio_B . $opcionnotario . $casootro . "" . trim($_POST['LugarB'],'utf-8') . "; los contrayentes optan por el Régimen Patrimonial " . trim(titleCase($uregimen)) . "; la contrayente ". $usara ." ". trim(titleCase($uapellidos)) .". Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        
        
        
    $sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart2', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1', fechaevento = '$originalDate', lugar= '$tipousers' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
        
        
   $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
    
        
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " .$margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Matrimonio Ella) esta asignada a otro usuario.</strong></div>
<?php 
    } 
            
        
        
    } else 
    {
        $errors[] = "desconocido.";
    }
        
        
} if ($value_el == 'other' and $regimenv == 'Rvalue' and $apellidosv == 'Avalue' ) {


    if (empty($_POST['edit_id'])){
        $errors[] = "ID está vacío.3";
    } elseif (!empty($_POST['edit_id'])){
    require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
    // escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe3'],ENT_QUOTES)));
    $Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
    $NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida3']),'utf-8'),ENT_QUOTES)));
    $LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro3']),'utf-8'),ENT_QUOTES)));
        
        $AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe2'],ENT_QUOTES)));
    $NPartida2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida2']),'utf-8'),ENT_QUOTES)));
    $LibroP2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro2']),'utf-8'),ENT_QUOTES)));
    
 
    
    $id=intval($_POST['edit_id']);
    $id2 = $_POST['edit_id']+1;
    // UPDATE data into database
            $TxtMargi1 = trim(titleCase($_POST['edit_el2'])) . " " .  "" . $conv2 . "" . $apellido2 . "" . $conocido . " contrajo matrimonio con " . trim(titleCase($_POST['Nellamat'])) . " " .  "" . $conv6 . "" . $apellidoella2 . "". $conocidoella . ", el día " .  $dia_B . "" . $mes_B . "" . $anio_B . $opcionnotario . $casootro . "" . trim($_POST['LugarB'],'utf-8') . "; los contrayentes optan por el Régimen Patrimonial " . trim(titleCase($uregimen)) . "; la contrayente ". $usara ." ". trim(titleCase($uapellidos)) .". Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        
        
        
    $sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1', fechaevento = '$originalDate', lugar= '$tipousers' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
        
        $TxtMargi2 = trim(titleCase($_POST['Nellamat'])) . " " .  "" . $conv6 . "" . $apellidoella2 . "". $conocida ." contrajo matrimonio con " .  trim(titleCase($_POST['edit_el2'])) . " " .  "" . $conv2 . "" . $apellido2 . "". $conocidoel . ", el día " .  $dia_B . "" . $mes_B . "" . $anio_B . $opcionnotario . $casootro . "" . trim($_POST['LugarB'],'utf-8') . "; los contrayentes optan por el Régimen Patrimonial " . trim(titleCase($uregimen)) . "; la contrayente ". $usara ." ". trim(titleCase($uapellidos)) .". Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        
        
        
    $sql2 = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi2) . "', AnioP = '$AnioP2', LibroP = '" . Espacios($LibroP2) . "', NPartida = '" . Espacios($NPartida2) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart2', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf2', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1', fechaevento = '$originalDate', lugar= '$tipousers' WHERE id = '$id2' AND Iniciales1 = '$Iniciales'";
        
        
        
        
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
    
        
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " .$margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Matrimonio El) esta asignada a otro usuario.</strong></div>
<?php 
    } 
            
 $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id2'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
        
        
        
        $query2 = mysqli_query($con,$sql2);
         // if product has been added successfully
    if ($query2) {
        $messages[] = "La Marginación " . $margpdf2 ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf2  ?> (Matrimonio Ella) esta asignada a otro usuario. </strong></div>
<?php 
    } 
        
        
    } else 
    {
        $errors[] = "desconocido.";
    }

}

if ($value_el == 'male' and $regimenv == 'Rvalue' and $apellidosv == '' ) {


    if (empty($_POST['edit_id'])){
        $errors[] = "ID está vacío.4";
    } elseif (!empty($_POST['edit_id'])){
    require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
    // escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe3'],ENT_QUOTES)));
    $Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
    $NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida3']),'utf-8'),ENT_QUOTES)));
    $LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro3']),'utf-8'),ENT_QUOTES)));
        
                
 
    
    $id=intval($_POST['edit_id']);
    // UPDATE data into database
            $TxtMargi1 = "Modifíquese el presente asiento de nacimiento, en el sentido que la persona inscrita adquirió el estado familiar de casado, por contraer matrimonio con " .  trim(titleCase($_POST['Nellamat'])) . " " .  "" . $conv6 . "" . $apellidoella2 . "". $conocidoella . ", en " . trim($_POST['LugarB'],'utf-8') . ", en fecha " .  $dia_B . "" . $mes_B . "" . $anio_B . $casootro . $opcionnotario . ", " . $textomargmatri . ". Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";

        
        
    $sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1', fechaevento = '$originalDate', lugar= '$tipousers' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
        
        
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
    
        
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " .$margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Matrimonio El) esta asignada a otro usuario.</strong></div>
<?php 
    } 
        
        
        
    } else 
    {
        $errors[] = "desconocido.";
    }
    
    
    } if ($value_el == 'female' and $regimenv == 'Rvalue' and $apellidosv == '' ) {


    if (empty($_POST['edit_id'])){
        $errors[] = "ID está vacío.5";

    } elseif (!empty($_POST['edit_id'])){
    require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
    // escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe2'],ENT_QUOTES)));
    $Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
    $NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida2']),'utf-8'),ENT_QUOTES)));
    $LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro2']),'utf-8'),ENT_QUOTES)));
        
                
 
    
    $id=intval($_POST['edit_id']);
    // UPDATE data into database
             $TxtMargi1 = "Modifíquese el presente asiento de nacimiento, en el sentido que la persona inscrita adquirió el estado familiar de casada, por contraer matrimonio con " .  trim(titleCase($_POST['edit_el2'])) . " " .  "" . $conv2 . "" . $apellido2 . "". $conocidoel . ", en " . trim($_POST['LugarB'],'utf-8') . ", en fecha " .  $dia_B . "" . $mes_B . "" . $anio_B . $casootro . $opcionnotario . ", " . $textomargmatri . ". Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        
        
        
    $sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart2', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1', fechaevento = '$originalDate', lugar= '$tipousers' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
        
        
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
    
        
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " .$margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Matrimonio Ella) esta asignada a otro usuario.</strong></div>
<?php 
    } 
        
        
        
    } else 
    {
        $errors[] = "desconocido.";
    }
        
        
} if ($value_el == 'other' and $regimenv == 'Rvalue' and $apellidosv == '' ) {


    if (empty($_POST['edit_id'])){
        $errors[] = "ID está vacío.6";
    } elseif (!empty($_POST['edit_id'])){
    require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
    // escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe3'],ENT_QUOTES)));
    $Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
    $NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida3']),'utf-8'),ENT_QUOTES)));
    $LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro3']),'utf-8'),ENT_QUOTES)));
    
 $AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe2'],ENT_QUOTES)));
    $NPartida2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida2']),'utf-8'),ENT_QUOTES)));
    $LibroP2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro2']),'utf-8'),ENT_QUOTES)));
    
    
    $id=intval($_POST['edit_id']);
    $id2 = $_POST['edit_id']+1;
    // UPDATE data into database
             $TxtMargi1 = "Modifíquese el presente asiento de nacimiento, en el sentido que la persona inscrita adquirió el estado familiar de casado, por contraer matrimonio con " .  trim(titleCase($_POST['Nellamat'])) . " " .  "" . $conv6 . "" . $apellidoella2 . "". $conocidoella . ", en " . trim($_POST['LugarB'],'utf-8') . ", en fecha " .  $dia_B . "" . $mes_B . "" . $anio_B . $casootro . $opcionnotario . ", " . $textomargmatri . ". Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        
        
        
    $sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1', fechaevento = '$originalDate', lugar= '$tipousers' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
        
       $TxtMargi2 = "Modifíquese el presente asiento de nacimiento, en el sentido que la persona inscrita adquirió el estado familiar de casada, por contraer matrimonio con " .  trim(titleCase($_POST['edit_el2'])) . " " .  "" . $conv2 . "" . $apellido2 . "". $conocidoel . ", en " . trim($_POST['LugarB'],'utf-8') . ", en fecha " .  $dia_B . "" . $mes_B . "" . $anio_B . $casootro . $opcionnotario . ", " . $textomargmatri . ". Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        
        
        
    $sql2 = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi2) . "', AnioP = '$AnioP2', LibroP = '" . Espacios($LibroP2) . "', NPartida = '" . Espacios($NPartida2) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart2', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf2', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1', fechaevento = '$originalDate', lugar= '$tipousers' WHERE id = '$id2' AND Iniciales1 = '$Iniciales'";
        
        
        
        
        
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
    
        
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " .$margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Matrimonio El) esta asignada a otro usuario.</strong></div>
<?php 
    } 
        
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id2'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
        
        
        
        $query2 = mysqli_query($con,$sql2);
         // if product has been added successfully
    if ($query2) {
        $messages[] = "La Marginación " . $margpdf2 ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf2  ?> (Matrimonio Ella) esta asignada a otro usuario. </strong></div>
<?php 
    }   
        
        
        
        
    } else 
    {
        $errors[] = "desconocido.";
    }

}   

if ($value_el == 'male' and $regimenv == '' and $apellidosv == 'Avalue' ) {


    if (empty($_POST['edit_id'])){
        $errors[] = "ID está vacío.7";
    } elseif (!empty($_POST['edit_id'])){
    require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
    // escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe3'],ENT_QUOTES)));
    $Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
    $NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida3']),'utf-8'),ENT_QUOTES)));
    $LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro3']),'utf-8'),ENT_QUOTES)));
        
                
 
    
    $id=intval($_POST['edit_id']);
    // UPDATE data into database

          $TxtMargi1 = "Modifíquese el presente asiento de nacimiento, en el sentido que la persona inscrita adquirió el estado familiar de casado, por contraer matrimonio con " .  trim(titleCase($_POST['Nellamat'])) . " " .  "" . $conv6 . "" . $apellidoella2 . "". $conocidoella . ", en " . trim($_POST['LugarB'],'utf-8') . ", en fecha " .  $dia_B . "" . $mes_B . "" . $anio_B . $casootro . $opcionnotario . ", " . $textomargmatri . ". Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";




        
    $sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1', fechaevento = '$originalDate', lugar= '$tipousers' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
        
        
     $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
    
        
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " .$margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Matrimonio El) esta asignada a otro usuario.</strong></div>
<?php 
    } 
        
        
        
    } else 
    {
        $errors[] = "desconocido.";
    }
    
    
    } if ($value_el == 'female' and $regimenv == '' and $apellidosv == 'Avalue' ) {


    if (empty($_POST['edit_id'])){
        $errors[] = "ID está vacío.8";
    } elseif (!empty($_POST['edit_id'])){
    require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
    // escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe2'],ENT_QUOTES)));
    $Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
    $NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida2']),'utf-8'),ENT_QUOTES)));
    $LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro2']),'utf-8'),ENT_QUOTES)));
        
                
 
    
    $id=intval($_POST['edit_id']);
    // UPDATE data into database
      
  $TxtMargi1 = "Modifíquese el presente asiento de nacimiento, en el sentido que la persona inscrita adquirió el estado familiar de casada, por contraer matrimonio con " .  trim(titleCase($_POST['edit_el2'])) . " " .  "" . $conv2 . "" . $apellido2 . "". $conocidoel . ", en " . trim($_POST['LugarB'],'utf-8') . ", en fecha " .  $dia_B . "" . $mes_B . "" . $anio_B . $casootro . $opcionnotario . ". ". $uapellidos . " " . $textomargmatri . ". Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        
        
        
    $sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart2', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1', fechaevento = '$originalDate', lugar= '$tipousers' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
        
        
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
    
        
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " .$margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Matrimonio Ella) esta asignada a otro usuario.</strong></div>
<?php 
    } 
        
        
        
    } else 
    {
        $errors[] = "desconocido.";
    }
        
        
} if ($value_el == 'other' and $regimenv == '' and $apellidosv == 'Avalue' ) {


    if (empty($_POST['edit_id'])){
        $errors[] = "ID está vacío.9";
    } elseif (!empty($_POST['edit_id'])){
    require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
    // escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe3'],ENT_QUOTES)));
    $Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
    $NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida3']),'utf-8'),ENT_QUOTES)));
    $LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro3']),'utf-8'),ENT_QUOTES)));
    $AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe2'],ENT_QUOTES)));
    $NPartida2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida2']),'utf-8'),ENT_QUOTES)));
    $LibroP2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro2']),'utf-8'),ENT_QUOTES)));
    
 
    
    $id=intval($_POST['edit_id']);
    $id2 = $_POST['edit_id']+1;
    // UPDATE data into database
           $TxtMargi1 = "Modifíquese el presente asiento de nacimiento, en el sentido que la persona inscrita adquirió el estado familiar de casado, por contraer matrimonio con " .  trim(titleCase($_POST['Nellamat'])) . " " .  "" . $conv6 . "" . $apellidoella2 . "". $conocidoella . ", en " . trim($_POST['LugarB'],'utf-8') . ", en fecha " .  $dia_B . "" . $mes_B . "" . $anio_B . $casootro . $opcionnotario . ", " . $textomargmatri . ". Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        
        
        
    $sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1', fechaevento = '$originalDate', lugar= '$tipousers' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
        
       $TxtMargi2 = "Modifíquese el presente asiento de nacimiento, en el sentido que la persona inscrita adquirió el estado familiar de casada, por contraer matrimonio con " .  trim(titleCase($_POST['edit_el2'])) . " " .  "" . $conv2 . "" . $apellido2 . "". $conocidoel . ", en " . trim($_POST['LugarB'],'utf-8') . ", en fecha " .  $dia_B . "" . $mes_B . "" . $anio_B . $casootro . $opcionnotario . ". ". $uapellidos . " " . $textomargmatri . ". Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        
        
        
    $sql2 = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi2) . "', AnioP = '$AnioP2', LibroP = '" . Espacios($LibroP2) . "', NPartida = '" . Espacios($NPartida2) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart2', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf2', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1', fechaevento = '$originalDate', lugar= '$tipousers' WHERE id = '$id2' AND Iniciales1 = '$Iniciales'";
        
        
        
     $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
    
        
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " .$margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Matrimonio El) esta asignada a otro usuario.</strong></div>
<?php 
    } 
    
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id2'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
        
        
        
        $query2 = mysqli_query($con,$sql2);
         // if product has been added successfully
    if ($query2) {
        $messages[] = "La Marginación " . $margpdf2 ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf2  ?> (Matrimonio Ella) esta asignada a otro usuario. </strong></div>
<?php 
    }   
        
        
        
    } else 
    {
        $errors[] = "desconocido.";
    }

}

if ($value_el == 'male' and $regimenv == '' and $apellidosv == '' ) {


    if (empty($_POST['edit_id'])){
        $errors[] = "ID está vacío.10";
    } elseif (!empty($_POST['edit_id'])){
    require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
    // escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe3'],ENT_QUOTES)));
    $Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
    $NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida3']),'utf-8'),ENT_QUOTES)));
    $LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro3']),'utf-8'),ENT_QUOTES)));
        
                
 
    
    $id=intval($_POST['edit_id']);
    // UPDATE data into database
          $TxtMargi1 = "Modifíquese el presente asiento de nacimiento, en el sentido que la persona inscrita adquirió el estado familiar de casado, por contraer matrimonio con " .  trim(titleCase($_POST['Nellamat'])) . " " .  "" . $conv6 . "" . $apellidoella2 . "". $conocidoella . ", en " . trim($_POST['LugarB'],'utf-8') . ", en fecha " .  $dia_B . "" . $mes_B . "" . $anio_B . $casootro . $opcionnotario . ", " . $textomargmatri . ". Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";

        
        
        
    $sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1', fechaevento = '$originalDate', lugar= '$tipousers' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
        
        
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
    
        
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " .$margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Matrimonio El) esta asignada a otro usuario.</strong></div>
<?php 
    } 
        
        
        
    } else 
    {
        $errors[] = "desconocido.";
    }
    
    
    } if ($value_el == 'female' and $regimenv == '' and $apellidosv == '' ) {


    if (empty($_POST['edit_id'])){
        $errors[] = "ID está vacío.11";
    } elseif (!empty($_POST['edit_id'])){
    require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
    // escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe2'],ENT_QUOTES)));
    $Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
    $NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida2']),'utf-8'),ENT_QUOTES)));
    $LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro2']),'utf-8'),ENT_QUOTES)));

                
 
    
    $id=intval($_POST['edit_id']);
    // UPDATE data into database
          $TxtMargi1 = "Modifíquese el presente asiento de nacimiento, en el sentido que la persona inscrita adquirió el estado familiar de casada, por contraer matrimonio con " .  trim(titleCase($_POST['edit_el2'])) . " " .  "" . $conv2 . "" . $apellido2 . "". $conocidoel . ", en " . trim($_POST['LugarB'],'utf-8') . ", en fecha " .  $dia_B . "" . $mes_B . "" . $anio_B . $casootro . $opcionnotario . ", " . $textomargmatri . ". Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        
        
        
    $sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart2', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1', fechaevento = '$originalDate', lugar= '$tipousers' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
        
        
     $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
    
        
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " .$margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Matrimonio Ella) esta asignada a otro usuario.</strong></div>
<?php 
    } 
        
        
        
    } else 
    {
        $errors[] = "desconocido.";
    }
       


///////////////// matri por actas


}if ($value_el == 'acta' and $chkactael == 'actael' and $chkactaella == '' ) {


    if (empty($_POST['edit_id'])){
        
    } elseif (!empty($_POST['edit_id'])){
    require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
    // escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe3'],ENT_QUOTES)));
    $Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
    $NPartida = titleCase(mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida3']),'utf-8'),ENT_QUOTES))));
    $LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro3']),'utf-8'),ENT_QUOTES)));
    
    
    
    
 
    
    $id=intval($_POST['edit_id']);
    // UPDATE data into database
$TxtMargi1 = $nombresactael . " contrajo matrimonio con " . $nombresactaella . ", el día " . $dia_acta . "" . $mes_Bacta . "" . $anio_Bacta . "; ante " . trim(titleCase($actaalcalde)) . ", Alcalde Municipal, en San Salvador, San Salvador; los contrayentes optan por el Régimen Patrimonial " . trim(titleCase($actaregimen)) . "; la contrayente ". $usaraacta ." ". trim(titleCase($uapellidosacta)) .". Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        

    $sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1', fechaevento = '$actafechamatri', lugar= '$tipousers' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
        
        

    
        
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
    
        
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert" >
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Matrimonio El) esta asignada a otro usuario.</strong></div>
<?php 
    } 
        
        
                        
        
        
    } else 
    {
        $errors[] = "desconocido.";
    }
    

}
if ($value_el == 'acta' and $chkactael == '' and $chkactaella == 'actaella' ) {


    if (empty($_POST['edit_id'])){
        
    } elseif (!empty($_POST['edit_id'])){
    require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
    // escaping, additionally removing everything that could be (html/javascript-) code
   $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe2'],ENT_QUOTES)));
    $Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
    $NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida2']),'utf-8'),ENT_QUOTES)));
    $LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro2']),'utf-8'),ENT_QUOTES)));

    
    
 
    
    $id=intval($_POST['edit_id']);
    // UPDATE data into database
$TxtMargi1 = $nombresactaella . " contrajo matrimonio con " . $nombresactael . ", el día " . $dia_acta . "" . $mes_Bacta . "" . $anio_Bacta . "; ante " . trim(titleCase($actaalcalde)) . ", Alcalde Municipal, en San Salvador, San Salvador; los contrayentes optan por el Régimen Patrimonial " . trim(titleCase($actaregimen)) . "; la contrayente ". $usaraacta ." ". trim(titleCase($uapellidosacta)) .". Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        

    $sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart2', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1', fechaevento = '$actafechamatri', lugar= '$tipousers' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
        
        

    
        
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
    
        
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " . $margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert" >
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>

                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Matrimonio El) esta asignada a otro usuario.</strong></div>
<?php 
    } 
        
        
                        
        
        
    } else 
    {
        $errors[] = "desconocido.";
    }
    

} if ($value_el == 'acta' and $chkactael == 'actael' and $chkactaella == 'actaella'  ) {


    if (empty($_POST['edit_id'])){
        $errors[] = "ID está vacío.9";
    } elseif (!empty($_POST['edit_id'])){
    require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
    // escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe3'],ENT_QUOTES)));
    $Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
    $NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida3']),'utf-8'),ENT_QUOTES)));
    $LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro3']),'utf-8'),ENT_QUOTES)));
    $AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe2'],ENT_QUOTES)));
    $NPartida2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida2']),'utf-8'),ENT_QUOTES)));
    $LibroP2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro2']),'utf-8'),ENT_QUOTES)));
    
 
    
    $id=intval($_POST['edit_id']);
    $id2 = $_POST['edit_id']+1;
    // UPDATE data into database
       $TxtMargi1 = $nombresactael . " contrajo matrimonio con " . $nombresactaella. ", el día " . $dia_acta . "" . $mes_Bacta . "" . $anio_Bacta . "; ante " . trim(titleCase($actaalcalde)) . ", Alcalde Municipal, en San Salvador, San Salvador; los contrayentes optan por el Régimen Patrimonial " . trim(titleCase($actaregimen)) . "; la contrayente ". $usaraacta ." ". trim(titleCase($uapellidosacta)) .". Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        
        
        
    $sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1', fechaevento = '$actafechamatri', lugar= '$tipousers' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
        
$TxtMargi2 = $nombresactaella . " contrajo matrimonio con " . $nombresactael . ", el día " . $dia_acta . "" . $mes_Bacta . "" . $anio_Bacta . "; ante " . trim(titleCase($actaalcalde)) . ", Alcalde Municipal, en San Salvador, San Salvador; los contrayentes optan por el Régimen Patrimonial " . trim(titleCase($actaregimen)) . "; la contrayente ". $usaraacta ." ". trim(titleCase($uapellidosacta)) .". Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        
        
        
    $sql2 = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi2) . "', AnioP = '$AnioP2', LibroP = '" . Espacios($LibroP2) . "', NPartida = '" . Espacios($NPartida2) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart2', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf2', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1', fechaevento = '$actafechamatri', lugar= '$tipousers' WHERE id = '$id2' AND Iniciales1 = '$Iniciales'";
        
        
        
     $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
    
        
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " .$margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Matrimonio El) esta asignada a otro usuario.</strong></div>
<?php 
    } 
    
    $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id2'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
        
        
        
        $query2 = mysqli_query($con,$sql2);
         // if product has been added successfully
    if ($query2) {
        $messages[] = "La Marginación " . $margpdf2 ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf2  ?> (Matrimonio Ella) esta asignada a otro usuario. </strong></div>
<?php 
    }   
        
        
        
    } else 
    {
        $errors[] = "desconocido.";
    }







/////////////////////////////////


   
} if ($value_el == 'other' and $regimenv == '' and $apellidosv == '') {


    if (empty($_POST['edit_id'])){
        $errors[] = "ID está vacío.12";
    } elseif (!empty($_POST['edit_id'])){
    require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
    // escaping, additionally removing everything that could be (html/javascript-) code
    $AnioP = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe3'],ENT_QUOTES)));
    $Iniciales = mysqli_real_escape_string($con,(strip_tags($_POST['edit_ini'],ENT_QUOTES)));
    $NPartida = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida3']),'utf-8'),ENT_QUOTES)));
    $LibroP = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro3']),'utf-8'),ENT_QUOTES)));
    $AnioP2 = mysqli_real_escape_string($con,(strip_tags($_POST['edit_anioe2'],ENT_QUOTES)));
    $NPartida2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_npartida2']),'utf-8'),ENT_QUOTES)));
    $LibroP2 = mysqli_real_escape_string($con,(strip_tags(mb_strtoupper(trim($_POST['edit_libro2']),'utf-8'),ENT_QUOTES)));
    
 
    
    $id=intval($_POST['edit_id']);
    $id2 = $_POST['edit_id']+1;
    // UPDATE data into database
             $TxtMargi1 = "Modifíquese el presente asiento de nacimiento, en el sentido que la persona inscrita adquirió el estado familiar de casado, por contraer matrimonio con " .  trim(titleCase($_POST['Nellamat'])) . " " .  "" . $conv6 . "" . $apellidoella2 . "". $conocidoella . ", en " . trim($_POST['LugarB'],'utf-8') . ", en fecha " .  $dia_B . "" . $mes_B . "" . $anio_B . $casootro . $opcionnotario . ", " . $textomargmatri . ". Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        
        
        
    $sql = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi1) . "', AnioP = '$AnioP', LibroP = '" . Espacios($LibroP) . "', NPartida = '" . Espacios($NPartida) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1', fechaevento = '$originalDate', lugar= '$tipousers' WHERE id = '$id' AND Iniciales1 = '$Iniciales'";
        
       $TxtMargi2 = "Modifíquese el presente asiento de nacimiento, en el sentido que la persona inscrita adquirió el estado familiar de casada, por contraer matrimonio con " .  trim(titleCase($_POST['edit_el2'])) . " " .  "" . $conv2 . "" . $apellido2 . "". $conocidoel . ", en " . trim($_POST['LugarB'],'utf-8') . ", en fecha " .  $dia_B . "" . $mes_B . "" . $anio_B . $casootro . $opcionnotario . ", " . $textomargmatri . ". Registro del Estado Familiar del Municipio de San Salvador Centro, San Salvador, " . $dia_actual . "" . $mes_actual . "" . $anio_actual.".";
        
        
        
    $sql2 = "UPDATE margi SET TxtMargi1 = '" . Espacios($TxtMargi2) . "', AnioP = '$AnioP2', LibroP = '" . Espacios($LibroP2) . "', NPartida = '" . Espacios($NPartida2) . "', InicialesPDF = '$Iniciales', FechaC = '$fechaActual2', TipoP = '$tipopart2', HoraC = '$hora', lineapdf = '$lin', registrador = '$jefer', nmargpdf = '$margpdf2', cargor = '$carg', estado = '$est', TipoMargi= 'MNAC', revestado = 'revisado1', fechaevento = '$originalDate', lugar= '$tipousers' WHERE id = '$id2' AND Iniciales1 = '$Iniciales'";
        
        
        
 $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
    
        
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La Marginación " .$margpdf ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf ?> (Matrimonio El) esta asignada a otro usuario.</strong></div>
<?php 
    } 
    
        $sqlc = "select * from margi where TxtMargi1='' AND Iniciales1='$Iniciales' AND id='$id2'";
$result = mysqli_query($con, $sqlc);

 if(mysqli_num_rows($result)>0)
 {      
        
        
        
        $query2 = mysqli_query($con,$sql2);
         // if product has been added successfully
    if ($query2) {
        $messages[] = "La Marginación " . $margpdf2 ." se ha creado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la creación de la Marginación fallo. Por favor, regrese y vuelva a intentarlo.";
    }
        
        }else{ ?>
    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                        <strong><i class="fas fa-bell"></i> La marginación <?php echo $margpdf2  ?> (Matrimonio Ella) esta asignada a otro usuario. </strong></div>
<?php 
    }
        
        
    } else 
    {
        $errors[] = "desconocido.";
    }

    
    
}
}
?>
    
    