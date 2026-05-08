<?php
session_start();

// Validar que el usuario esté logueado
if (!isset($_SESSION['usuario'])) {
    // Redirigir al login si no hay sesión activa
    header("Location: ../../index.php");
    exit;
}

// Acceder con seguridad a los datos del usuario
$usuario = $_SESSION['usuario'];
$inicialesuser = $usuario['iniciales'] ?? '';
$pregunta = $usuario['idpregunta'] ?? '';
$correo = $usuario['correo'] ?? '';
$inicialesuserid = $usuario['iniciales'] ?? '';
$nombreusers = $usuario['nombre'] ?? '';
$tipousers = $usuario['tipo'] ?? '';
?>