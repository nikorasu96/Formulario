$(document).ready(function () {
    $('#region').change(function () {
        var region_id = $(this).val();
        if (region_id != '') {
            $.ajax({
                url: 'get_comunas.php',
                type: 'POST',
                data: { region_id: region_id },
                dataType: 'json',
                contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
                success: function (data) {
                    $('#comuna').html(data);
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

