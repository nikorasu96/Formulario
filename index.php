<?php

require "database.php"; // Incluye el archivo de conexión a la base de datos.

$FORMULARIO_NICOLASENDRESS = $conn->query("SELECT * FROM votos"); // Consulta para obtener todos los votos.

// Consulta para cargar candidatos
$stmt_candidatos = $conn->query("SELECT * FROM candidatos"); // Consulta para obtener todos los candidatos.
$candidatos = $stmt_candidatos->fetchAll(); // Obtiene todas las filas de resultados y las almacena en $candidatos.

// Consulta para cargar regiones
$stmt_regiones = $conn->query("SELECT * FROM regiones"); // Consulta para obtener todas las regiones.
$regiones = $stmt_regiones->fetchAll(); // Obtiene todas las filas de resultados y las almacena en $regiones.

// Consulta para cargar comunas
$stmt_comunas = $conn->query("SELECT * FROM comunas"); // Consulta para obtener todas las comunas.
$comunas = $stmt_comunas->fetchAll(); // Obtiene todas las filas de resultados y las almacena en $comunas.

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formulario de Votación</title>
    <link rel="stylesheet" href="css/estilo.css"> <!-- Enlaza el archivo de estilos CSS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Incluye la biblioteca jQuery -->
    <script src="js/script.js"></script> <!-- Incluye el archivo de script JavaScript -->
    <script>
        $(document).ready(function() {
            $('form').submit(function(event) {
                var checkboxes = $("input[name='como_se_entero[]']:checked");
                if (checkboxes.length < 2) {
                    alert("Por favor, selecciona al menos dos opciones de cómo se enteró de nosotros.");
                    event.preventDefault();
                }
            });
        });
    </script>
</head>

<body>
    <div>
        <h1 class="titulo">Formulario de Votación</h1>
    </div>

    <form action="votacion.php" method="post">
        <label for="nombre_apellido">Nombre y Apellido:</label>
        <input type="text" id="nombre_apellido" name="nombre_apellido" required><br>

        <label for="alias">Alias:</label>
        <input type="text" id="alias" name="alias" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{5,}$" required><br>

        <label for="rut">RUT:</label>
        <input type="text" id="rut" name="rut" pattern="\d{1,2}\.\d{3}\.\d{3}-\d|kK" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="region">Región:</label>
        <select id="region" name="region" required>
            <option value="">Selecciona una Región</option>
            <?php foreach ($regiones as $region) : ?>
                <option value="<?= $region['id'] ?>"><?= $region['nombre'] ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="comuna">Comuna:</label>
        <select id="comuna" name="comuna" required>
            <option value="">Selecciona una Comuna</option>
            <?php foreach ($comunas as $comuna) : ?>
                <option value="<?= $comuna['id'] ?>"><?= $comuna['nombre'] ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="candidato">Candidato:</label>
        <select id="candidato" name="candidato" required>
            <option value="">Selecciona un Candidato</option>
            <?php foreach ($candidatos as $candidato) : ?>
                <option value="<?= $candidato['id'] ?>"><?= $candidato['nombre_apellido'] ?></option>
            <?php endforeach; ?>
        </select><br>

        <div style="display: flex; align-items: center;">
            <label>¿Cómo se enteró de nosotros?</label><br>
            <div style="display: flex; gap: 10px;">
                <input type="checkbox" name="como_se_entero[]" value="web" style="margin-left: 10px;"> Web
                <input type="checkbox" name="como_se_entero[]" value="tv"> TV
                <input type="checkbox" name="como_se_entero[]" value="redes_sociales"> Redes Sociales
                <input type="checkbox" name="como_se_entero[]" value="amigos"> Amigos
            </div>
        </div>

        <input type="submit" value="Votar">

    </form>
</body>

</html>
