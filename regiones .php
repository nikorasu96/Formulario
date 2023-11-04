<?php
include 'database.php'; // Incluye el archivo de conexión a la base de datos.

// Consulta SQL para seleccionar todas las regiones
$sql = "SELECT * FROM regiones";

// Ejecuta la consulta y guarda el resultado en $stmt
$stmt = $conn->query($sql);

// Obtiene todas las filas de resultados como un array asociativo y lo almacena en $regiones
$regiones = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Convierte el array asociativo en formato JSON y lo imprime
echo json_encode($regiones);
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
