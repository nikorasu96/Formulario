<?php
include 'database.php'; // Incluye el archivo de conexión a la base de datos.

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica si se ha enviado una solicitud POST.
    try {
        // Obtiene los datos del formulario.
        $nombre_apellido = $_POST["nombre_apellido"];
        $alias = $_POST["alias"];
        $rut = $_POST["rut"];
        $email = $_POST["email"];
        $region = $_POST["region"];
        $comuna = $_POST["comuna"];
        $candidato = $_POST["candidato"];
        $como_se_entero = implode(", ", $_POST["como_se_entero"]);

        // Inserta los datos en la base de datos.
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

        if ($stmt->execute()) { // Si la consulta se ejecuta con éxito, redirige a una página de agradecimiento.
            header("Location: gracias.php");
            exit();
        } else {
            throw new Exception("Error al ejecutar la consulta.");
        }
    } catch (Exception $e) {
        $error_message = $e->getMessage(); // Captura cualquier excepción y almacena el mensaje de error.
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Error en el Formulario</title>
</head>

<body>
    <?php if (isset($error_message)): ?>
        <h2>Hubo un error al procesar el formulario:</h2>
        <p><?php echo $error_message; ?></p>
        <button onclick="window.history.back();">Volver</button>
    <?php endif; ?>
</body>

</html>
