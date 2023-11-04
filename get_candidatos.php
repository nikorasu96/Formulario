<?php
include 'database.php'; // Incluye el archivo de conexión a la base de datos.

if (isset($_POST['region_id'])) { // Verifica si se ha recibido el 'region_id' a través de POST.
    $region_id = $_POST['region_id']; // Obtiene el 'region_id' desde la solicitud POST.

    $sql = "SELECT * FROM candidatos"; // Prepara una consulta SQL para obtener todos los candidatos.
    $stmt = $conn->query($sql); // Ejecuta la consulta y guarda el resultado en $stmt.
    $candidatos = $stmt->fetchAll(PDO::FETCH_ASSOC); // Obtiene todas las filas de resultados como un array asociativo y lo almacena en $candidatos.

    echo json_encode($candidatos); // Convierte el array asociativo en formato JSON y lo imprime.
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formulario de Votación</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Enlaza el archivo de estilos CSS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Incluye la biblioteca jQuery -->
    <script src="js/script.js"></script> <!-- Incluye el archivo de script JavaScript -->
</head>

<body>

</body>

</html>
