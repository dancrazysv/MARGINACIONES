<?php
if (empty($_POST['librou2'])) {
    $errors[] = "Número de Libro vacío.";
} elseif (!empty($_POST['librou2'])) {
    require_once("../conexion.php"); // Contiene la función que conecta a la base de datos

    $nlibros = mysqli_real_escape_string($con, (strip_tags($_POST["librou2"], ENT_QUOTES)));
    $nlibro = $nlibros; // Usamos $nlibro para mayor claridad

    // --- NUEVA LÓGICA PARA CONTAR LIBROS INCOMPLETOS ---
    $sqlCountIncompletos = "SELECT COUNT(DISTINCT LibroO) AS total_incompletos FROM margi WHERE TxtMargi1 = ''";
    $resultCount = mysqli_query($con, $sqlCountIncompletos);
    $filaCount = mysqli_fetch_assoc($resultCount);
    $totalIncompletos = $filaCount['total_incompletos'];

    // Verificar si hay más de dos libros incompletos
    if ($totalIncompletos >= 2) { // Si hay 2 o más libros incompletos, no permitir guardar
        ?>
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
            <strong><i class="fas fa-bell"></i> No puedes crear un nuevo libro. Existen <?php echo $totalIncompletos; ?> libros incompletos.</strong>
        </div>
        <?php
    } else {
        // --- PREPARAR CONSULTAS ---

        // 1. Preparar las sentencias INSERT para cfolios (812 filas)
        $valuesCfolios = [];
        // Genera 4 entradas en cfolios por cada folio (del 1 al 203)
        for ($i = 1; $i <= 2000; $i++) {
            $numFolio = ceil($i / 4); // Calcula el número de folio (1, 1, 1, 1, 2, 2, 2, 2...)
            $busquedaFolio = $nlibro. '-' .$numFolio; // Calcula el valor para busquedafolio
            $valuesCfolios[] = "('$i', '0$nlibro', '$numFolio', '0$busquedaFolio')";
        }
        $sqlCfolios = "INSERT INTO cfolios(nummargi, numlibro, numfolio, busquedafolio) VALUES " . implode(",", $valuesCfolios);

        // 2. Preparar las sentencias INSERT para margi (2000 filas)
        $valuesMargi = [];
        for ($i = 1; $i <= 2000; $i++) {
            $folioO = ceil($i / 4); // Calcula FolioO, similar a numfolio en cfolios
            $busquedalf = $nlibro.'-'. $folioO; // Calcula busquedalf
            // Los campos se insertan en el orden: NMargi1, LibroO, FolioO, busquedalf
            $valuesMargi[] = "('$i', '0$nlibro', '$folioO', '0$busquedalf')";
        }
        $sqlMargi = "INSERT INTO margi(NMargi1, LibroO, FolioO, busquedalf) VALUES " . implode(",", $valuesMargi);

        // --- INICIAR TRANSACCIÓN Y EJECUTAR ---
        mysqli_begin_transaction($con);

        try {
            // Ejecutar inserción en cfolios
            $query_insert_cfolios = mysqli_query($con, $sqlCfolios);

            // Ejecutar inserción en margi
            $query_insert_margi = mysqli_query($con, $sqlMargi);

            if ($query_insert_cfolios && $query_insert_margi) {
                mysqli_commit($con); // Si todo fue bien, guarda los cambios permanentemente
                ?>
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                    <strong><i class="fas fa-check"></i> Datos guardados exitosamente en libro de marginaciones y Sistema de Entrega de Folios.</strong>
                </div>
                <?php
            } else {
                mysqli_rollback($con); // Si algo falló, deshaz todos los cambios
                $errors[] = "Lo sentimos, el registro falló. Por favor, inténtelo de nuevo.";
                // Para depuración, puedes descomentar las siguientes líneas:
                // $errors[] = "Error en cfolios: " . mysqli_error($con);
                // $errors[] = "Error en margi: " . mysqli_error($con);
            }
        } catch (Exception $e) {
            mysqli_rollback($con); // Captura cualquier excepción y revierte la transacción
            $errors[] = "Error en la transacción: " . $e->getMessage();
        }

        // --- MOSTRAR ERRORES (SI LOS HAY) ---
        if (isset($errors) && count($errors) > 0) {
            ?>
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert"><i class="far fa-times-circle"></i></button>
                <strong>Error:</strong>
                <?php
                foreach ($errors as $error) {
                    echo "<p>" . $error . "</p>";
                }
                ?>
            </div>
            <?php
        }
    }
}
?>