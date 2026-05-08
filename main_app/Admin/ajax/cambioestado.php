<?php
// Configuración y conexión
date_default_timezone_set('America/Costa_Rica');

// Incluimos las funciones necesarias.
require_once("quitar_espacios.php");
require_once("funcion_nombres.php");
require_once("../conexion.php");

// Función para conectar a la base de datos de forma segura
function conectarDB() {
    $host = 'localhost';
    $usuario = 'root';
    $password = '';
    $nombreDB = 'marginaciones';

    $con = new mysqli($host, $usuario, $password, $nombreDB);
    if ($con->connect_error) {
        die("Error en la conexión a la base de datos: " . $con->connect_error);
    }
    return $con;
}

// Inicializamos las variables con un valor por defecto
$libestado = $_POST['libestado'] ?? null;
$margestado = $_POST['margestado'] ?? null;
$eestado = $_POST['estadom'] ?? null;

// Inicializamos el array de errores y mensajes
$errors = [];
$messages = [];

// Validamos que los datos necesarios no estén vacíos
if (empty($libestado) || empty($margestado) || empty($eestado)) {
    $errors[] = "Datos incompletos. Asegúrese de que el libro, la marginación y el estado estén seleccionados.";
}

// Si no hay errores, procedemos con la lógica
if (empty($errors)) {
    $con = conectarDB();

    // Verificamos si la marginación existe, tiene texto y obtenemos los campos 'lugar' y 'registrador'
    $sql_check_exist = "SELECT lugar, registrador FROM margi WHERE LibroO = ? AND NMargi1 = ? AND TxtMargi1 != ''";
    $stmt_exist = $con->prepare($sql_check_exist);
    $stmt_exist->bind_param("ss", $libestado, $margestado);
    $stmt_exist->execute();
    $result_exist = $stmt_exist->get_result();

    if ($result_exist->num_rows > 0) {
        // La marginación existe, obtenemos el lugar y el registrador
        $fila = $result_exist->fetch_assoc();
        $lugar = $fila['lugar'];
        $registrador = $fila['registrador']; // Obtenemos el registrador de la base de datos

        // Verificamos si la marginación ya tiene el estado seleccionado
        $sql_check_state = "SELECT * FROM margi WHERE LibroO = ? AND NMargi1 = ? AND revestado = ?";
        $stmt_state = $con->prepare($sql_check_state);
        $stmt_state->bind_param("sss", $libestado, $margestado, $eestado);
        $stmt_state->execute();
        $result_state = $stmt_state->get_result();

        if ($result_state->num_rows > 0) {
            $errors[] = "La marginación seleccionada ya se encuentra en el estado elegido.";
        } else {
            // Lógica para determinar la firma de forma optimizada
            $firmas_por_lugar = [
                "Ayutuxtepeque" => [
                    "revisado1" => "FIRMACMARGI.jpg",
                    "revisado2" => "FIRMACMARGI.jpg",
                    "revisado3" => "FIRMACCALIDAD.jpg",
                    "completo" => "FIRMASAMIA.jpg"
                ],
                "Usuario" => [
                    "revisado1" => "FIRMACMARGI.jpg",
                    "revisado2" => "FIRMACMARGI.jpg",
                    "revisado3" => "FIRMACCALIDAD.jpg",
                    "completo" => "FIRMAKARLA.jpg"
                ],
                "Mejicanos" => [
                    "revisado1" => "FIRMACMARGI.jpg",
                    "revisado2" => "FIRMACMARGI.jpg",
                    "revisado3" => "FIRMACCALIDAD.jpg",
                    "completo" => "FIRMAGABRIELA.jpg"
                ],
                "Cuscatancingo" => [
                    "revisado1" => "FIRMACMARGI.jpg",
                    "revisado2" => "FIRMACMARGI.jpg",
                    "revisado3" => "FIRMACCALIDAD.jpg",
                    "completo" => "FIRMADARLYN.jpg"
                ],
                "Ciudaddelgado" => [
                    "revisado1" => "FIRMACMARGI.jpg",
                    "revisado2" => "FIRMACMARGI.jpg",
                    "revisado3" => "FIRMACCALIDAD.jpg",
                    "completo" => "FIRMAEDWIN.jpg"
                ],
                "Sansalvador" => [
                    "revisado1" => "FIRMACMARGI.jpg",
                    "revisado2" => "FIRMACMARGI.jpg",
                    "revisado3" => "FIRMACCALIDAD.jpg",
                    "completo" => "FIRMAKARLACENTRO.jpg"
                ]
            ];
            
            $firma = "FIRMA_POR_DEFECTO.jpg"; // Valor por defecto

            // Lógica para el caso especial de Sansalvador y estado 'completo'
            if ($lugar == "Sansalvador" && $eestado == "completo") {
                if ($registrador == "Licda. Telma Francisca Ramos de García") {
                    $firma = "FIRMATELMACENTRO.jpg";
                } else {
                    $firma = "FIRMAKARLACENTRO.jpg";
                }
            } else {
                // Obtenemos la firma usando la estructura de datos para otros casos
                $firma = $firmas_por_lugar[$lugar][$eestado] ?? $firma;
            }

            // Actualizamos el registro en la base de datos
            $sql_update = "UPDATE margi SET revestado = ?, lineapdf = ? WHERE LibroO = ? AND NMargi1 = ?";
            $stmt_update = $con->prepare($sql_update);
            $revestado_sanitized = Espacios($eestado);
            $firma_sanitized = Espacios($firma);
            $stmt_update->bind_param("ssss", $revestado_sanitized, $firma_sanitized, $libestado, $margestado);

            if ($stmt_update->execute()) {
                $messages[] = "El estado de la marginación se cambió correctamente.";
            } else {
                $errors[] = "Lo sentimos, la actualización falló. Por favor, inténtelo de nuevo.";
            }

            // Cerramos el statement
            $stmt_update->close();
        }
        // Cerramos los statements de las verificaciones
        $stmt_state->close();
        $stmt_exist->close();
    } else {
        $errors[] = "La marginación aún no ha sido creada o no tiene texto asociado.";
    }
    // Cerramos la conexión a la base de datos
    $con->close();
}

// Presentamos los resultados al usuario
if (!empty($errors)) {
    ?>
    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
        <strong><i class="fas fa-times-circle"></i> Error!</strong>
        <?php foreach ($errors as $error) { echo $error; } ?>
    </div>
    <?php
}

if (!empty($messages)) {
    ?>
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
        <strong><i class="fas fa-check-circle"></i> ¡Bien hecho!</strong>
        <?php foreach ($messages as $message) { echo $message; } ?>
    </div>
    <?php
}
?>