<?php
$html = '<!DOCTYPE html>
<html lang="en" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>DUMMY DOM PDF</title>
    <style>        
        @import url("https://fonts.googleapis.com/css?family=Allerta");
        .joti-font {font-family: "Allerta", sans-serif;}
    </style>
</head>
<body>
<div class="joti-font">This is Test PDF Esta es una prueba de cambio de texto</div>
</body>
</html>';

require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream("codex",array("Attachment"=>0));
?>
