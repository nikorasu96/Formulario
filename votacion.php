<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_apellido = $_POST["nombre_apellido"];
    $alias = $_POST["alias"];
    $rut = $_POST["rut"];
    $email = $_POST["email"];
    $region = $_POST["region"];
    $comuna = $_POST["comuna"];
    $candidato = $_POST["candidato"];
    $como_se_entero = implode(", ", $_POST["como_se_entero"]);

    // Insertar en la base de datos
    $sql = "INSERT INTO votos (nombre_apellido, alias, rut, email, region_id, comuna_id, candidato_id, como_se_entero) 
            VALUES (:nombre_apellido, :alias, :rut, :email, :region, :comuna, :candidato, :como_se_entero)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre_apellido', $nombre_apellido);
    $stmt->bindParam(':alias', $alias);
    $stmt->bindParam(':rut', $rut);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':region', $region);
    $stmt->bindParam(':comuna', $comuna);
    $stmt->bindParam(':candidato', $candidato);
    $stmt->bindParam(':como_se_entero', $como_se_entero);

    if ($stmt->execute()) {
        header("Location: gracias.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>";
    }
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

