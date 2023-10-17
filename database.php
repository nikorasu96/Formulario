<?php

$host = "localhost";
$database ="votacion";
$user = "root";
$password = "m4k98npo";

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);
// foreach ($conn->query("SHOW DATABASES") as $row) {
//     print_r($row);
// }
// die();
}   catch (PDOException $e) {
    die("PDO Connection Error: " . $e->getMessage());
}
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

