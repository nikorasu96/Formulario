<?php
// Incluye el archivo de configuración y conexión a la base de datos
include 'database.php';

// Verifica si se ha recibido un valor para 'region_id' a través de POST
if(isset($_POST['region_id'])) {
    // Obtiene el valor de 'region_id' desde la solicitud POST
    $region_id = $_POST['region_id'];

    // Prepara una consulta SQL para obtener todas las comunas de la región especificada
    $sql = "SELECT * FROM comunas WHERE region_id = $region_id";

    // Ejecuta la consulta y guarda el resultado en $stmt
    $stmt = $conn->query($sql);

    // Obtiene todas las filas de resultados como un array asociativo y lo almacena en $comunas
    $comunas = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Convierte el array asociativo en formato JSON y lo imprime
    echo json_encode($comunas);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formulario de Votación</title>
    <!-- Se incluye una hoja de estilos CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Se incluye la biblioteca jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Se incluye un archivo de script JavaScript -->
    <script src="js/script.js"></script>
</head>

<body>
    <!-- Contenido del cuerpo del documento HTML -->
</body>

</html>
