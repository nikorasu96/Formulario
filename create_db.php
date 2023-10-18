<?php
$host = "localhost";
$database ="votacion";
$user = "root"; // Reemplaza con tu nombre de usuario de MySQL
$password = ""; // Reemplaza con tu contraseña de MySQL

// Crear conexión
$conn = new mysqli($host,$database, $user, $password);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Crear la base de datos
$sql = "CREATE DATABASE IF NOT EXISTS votacion";

if ($conn->query($sql) === TRUE) {
    echo "Base de datos creada correctamente";
} else {
    echo "Error al crear la base de datos: " . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formulario de Votación</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
</head>

<body>

</body>

</html>

