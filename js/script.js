$(document).ready(function () {
    $('#region').change(function () {
        var region_id = $(this).val();
        if (region_id != '') {
            $.ajax({
                url: 'get_comunas.php', // Nombre del archivo PHP que manejará la solicitud
                type: 'POST',
                data: { region_id: region_id },
                dataType: 'json',
                success: function (data) {
                    // Rellenar el campo de selección de comunas con las opciones obtenidas
                    var options = '';
                    $.each(data, function (index, comuna) {
                        options += '<option value="' + comuna.id + '">' + comuna.nombre + '</option>';
                    });
                    $('#comuna').html(options);
                }
            });

            $.ajax({
                url: 'get_candidatos.php',
                type: 'POST',
                data: { region_id: region_id },
                dataType: 'json',
                contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
                success: function (data) {
                    // Aquí, asumimos que `data` es un array de candidatos
                    // Debes adaptar este código según el formato de tu respuesta JSON
                    var options = '';
                    $.each(data, function (index, candidato) {
                        options += '<option value="' + candidato.id + '">' + candidato.nombre_apellido + '</option>';
                    });
                    $('#candidato').html(options);
                }
            });

        }
    });
});

