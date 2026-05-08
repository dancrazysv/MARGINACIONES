<?php

error_reporting(0);
ini_set('display_errors', 0);

header('Content-Type: application/json; charset=utf-8');

$response = ["success" => false];

// 🔹 Conexión (usa tus credenciales reales)
$conexion = new mysqli("localhost", "root", "", "resoluciones_aar");

if ($conexion->connect_error) {
    echo json_encode($response);
    exit;
}

$anio = isset($_POST['anio']) ? intval($_POST['anio']) : 0;
$correlativo = isset($_POST['correlativo']) ? intval($_POST['correlativo']) : 0;

$stmt = $conexion->prepare("
    SELECT texto_marginal 
    FROM resoluciones 
    WHERE ref_anio = ? 
    AND ref_correlativo = ?
    LIMIT 1
");

if ($stmt) {

    $stmt->bind_param("ii", $anio, $correlativo);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        $response["success"] = true;
        $response["texto"] = $row['texto_marginal'];
    }

    $stmt->close();
}

$conexion->close();

echo json_encode($response);
exit;