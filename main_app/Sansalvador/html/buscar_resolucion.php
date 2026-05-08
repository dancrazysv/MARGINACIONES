<?php
header('Content-Type: application/json; charset=utf-8');

$response = ["success" => false];

// 🔹 Conexión directa (déjala como la tenías correcta)
$conexion = new mysqli("localhost", "root", "", "resoluciones_arr");

if ($conexion->connect_error) {
    echo json_encode($response);
    exit;
}

$anio = $_POST['anio'] ?? '';
$correlativo = $_POST['correlativo'] ?? '';

// 🔥 Convertir 2026 → 2.026 (porque así está guardado en la base)
if (strlen($anio) == 4) {
    $anio = substr($anio, 0, 1) . "." . substr($anio, 1);
}

$stmt = $conexion->prepare("
    SELECT texto_marginal 
    FROM resoluciones 
    WHERE ref_anio = ? 
    AND ref_correlativo = ?
    LIMIT 1
");

if ($stmt) {

    $stmt->bind_param("ss", $anio, $correlativo);
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