<?php
include 'database.php';

$sql = "SELECT * FROM regiones";
$stmt = $conn->query($sql);
$regiones = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($regiones);
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

