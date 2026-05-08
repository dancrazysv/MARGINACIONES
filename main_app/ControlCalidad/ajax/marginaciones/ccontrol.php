<?php

// Inicia la sesión al principio.
session_start();

// Verifica si la sesión de usuario existe.
if (!isset($_SESSION['usuario']['iniciales'])) {
    exit('Acceso no autorizado.');
}

// Usa el operador de coalescencia nula ?? para inicializar variables.
$IniValidador = $_SESSION['usuario']['iniciales'];
$validaredidos = $_POST['validaredidos'] ?? NULL;
$lugar = $_POST['validarlugar'] ?? NULL;
$idrevc = $_POST['validaridc'] ?? NULL;
$revokc = $_POST['valimargic'] ?? NULL;
$Iniciales = $_POST['validariinidc'] ?? NULL;

// Valida que el ID esté presente antes de continuar.
if (empty($idrevc)) {
    exit('El ID de marginación no fue proporcionado.');
}

// Incluye la conexión a la base de datos una sola vez.
require_once "../conexion.php";

// Prepara las variables para la consulta.
$id = intval($idrevc);
$Iniciales = mysqli_real_escape_string($con, strip_tags($Iniciales, ENT_QUOTES));

// Inicializa las variables para el seguimiento
$revokmargic = '';
$lineapdf = '';
$creaciong = '';
$creacione = '';
$fin = 'fin';

// Lógica para determinar el estado de la marginación.
if ($revokc == "error") {
    $revokmargic = "revisado1";
    $lineapdf = "FIRMACMARGI.jpg";
    $fin = ""; 
} else {
    $revokmargic = "completo";
    
    // Nueva lógica de validación para el campo 'registrador'.
    $registrador = ""; // Asume que necesitas obtener el registrador de alguna manera, por ejemplo, de la base de datos.
    
    // Obtén el valor del campo 'registrador' de la base de datos.
    $sql_get_registrador = "SELECT registrador FROM margi WHERE id = '$id'";
    $result_registrador = mysqli_query($con, $sql_get_registrador);
    if ($row = mysqli_fetch_assoc($result_registrador)) {
        $registrador = $row['registrador'];
    }

    if ($registrador == "Licda. Telma Francisca Ramos de García") {
        if ($lugar == "Sansalvador" || $lugar == "") {
            $lineapdf = "FIRMATELMACENTRO.jpg";
        } else {
            // Mapeo original para otros lugares cuando el registrador es Telma
            $lugar_mapping = [
                "Ayutuxtepeque" => "FIRMASAMIA.jpg",
                "Mejicanos" => "FIRMAGABRIELA.jpg",
                "Ciudaddelgado" => "FIRMAEDWIN.jpg",
                "Cuscatancingo" => "FIRMAKARLACENTROSS.jpg",
                "Usuario" => "FIRMAKARLA.jpg"
            ];
            $lineapdf = $lugar_mapping[$lugar] ?? "FIRMAKARLACENTROSS.jpg"; // Valor por defecto si el lugar no coincide
        }
    } else {
        // Lógica para el caso contrario.
        if ($lugar == "Sansalvador" || $lugar == "") {
            $lineapdf = "FIRMAKARLACENTROSS.jpg";
        } else {
            // Mapeo original para otros lugares cuando el registrador NO es Telma
            $lugar_mapping = [
                "Ayutuxtepeque" => "FIRMASAMIA.jpg",
                "Mejicanos" => "FIRMAGABRIELA.jpg",
                "Ciudaddelgado" => "FIRMAEDWIN.jpg",
                "Cuscatancingo" => "FIRMAKARLACENTROSS.jpg",
                "Usuario" => "FIRMAKARLA.jpg"
            ];
            $lineapdf = $lugar_mapping[$lugar] ?? "FIRMAKARLACENTROSS.jpg"; // Valor por defecto si el lugar no coincide
        }
    }
    
    // Consulta para verificar si el registro ya tiene un "final".
    $sql_check_fin = "SELECT id FROM margi WHERE Iniciales1 = '$Iniciales' AND id = '$id' AND margfin = ''";
    $resultado_fin = mysqli_query($con, $sql_check_fin);

    if (mysqli_num_rows($resultado_fin) > 0) {
        // Es un nuevo registro.
        $fechacreacion = date('Y-m-d');
        $horacreacion = date("H:i:s");
        $creaciong = "$IniValidador || $fechacreacion || $horacreacion";
        $creacione = "";
    } else {
        // Es una edición de un registro existente.
        $fechaedicion = date('Y-m-d');
        $horaedicion = date("H:i:s");
        $creaciong = $validaredidos;
        $creacione = "$IniValidador || $fechaedicion || $horaedicion";
    }
}

// Ahora realizamos una única consulta para actualizar, si es que el ID existe.
$sql_check_id = "SELECT id FROM margi WHERE id = '$id'";
$resultado_id = mysqli_query($con, $sql_check_id);

if (mysqli_num_rows($resultado_id) > 0) {
    // El registro existe, se procede con la actualización.
    $sql_update = "UPDATE margi SET 
                   revestado = '$revokmargic', 
                   lineapdf = '$lineapdf', 
                   seguimientoccgcm = '$creaciong', 
                   seguimientoccecm = '$creacione', 
                   margfin = '$fin' 
                   WHERE id = '$id'";

    $query = mysqli_query($con, $sql_update);

    if ($query) {
        $messages[] = "La Marginación se ha editado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la edición de la Marginación falló. Por favor, regrese y vuelva a intentarlo.";
    }
} else {
    // El registro no existe o el ID no es válido.
    $errors[] = "La marginación esta asignada a otro usuario o no existe.";
}

// Muestra los mensajes de error o éxito.
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<div class='alert alert-danger' role='alert'><i class='fas fa-bell'></i> $error</div>";
    }
} elseif (!empty($messages)) {
    foreach ($messages as $message) {
        echo "<div class='alert alert-success' role='alert'><i class='fas fa-check'></i> $message</div>";
    }
}

// Cierra la conexión a la base de datos.
mysqli_close($con);
?>