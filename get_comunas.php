<?php
include 'database.php';

if(isset($_POST['region_id'])) {
    $region_id = $_POST['region_id'];

    $sql = "SELECT * FROM comunas WHERE region_id = $region_id";
    $stmt = $conn->query($sql);
    $comunas = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($comunas);
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


