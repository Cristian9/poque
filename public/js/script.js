$(document).on('click', '.add-item', function() {

    name = $(this).attr("data-name");

    div = $(this).attr("data-div");

    select = $(this).attr("data-select");

    option = $("#" + select + " option:selected").text();

    option_id = $("#" + select).val();

    if (option_id == null) {

        alertify.alert('<h4>Debe elegir una opción</h4>')

                .set('title', 'Importante');

    } else {

        html = '<tr>';

        html += '<td>' + option + '<input type="hidden" name="a_' + name + '[]" value="' + option_id + '"></td>';

        html += '<td class="text-center"><a class="btn btn-danger remove-item"><i class="fa fa-trash"></i></a></td>';

        html += '</tr>';

        $("#" + div).append(html);

        $("#" + select).val("");

    }

});



$(document).on('click', '.delete-item', function(e) {

    e.preventDefault();

    url = $(this).attr("data-url");

    id = $(this).attr("data-id");

    alertify.confirm('<h3>¿Esta seguro que desea eliminar este registro?</h3>')

            .set('title', 'Importante')

            .set('labels', {ok: 'Confirmar', cancel: 'Cancelar'})

            .set('onok', function(closeEvent) {

                $.post(url,

                        {id: id},

                function(response) {

                    $('.response').html(response);

                });

            })

});



$(document).on('click', '.remove-item', function() {

    $(this).parent().parent().remove();

    return false;

});

/* ------ CAMPOS NUMERICOS ------- */

$(document).ready(function(){
    $('.entero').numeric();
    $('.decimal').numeric({ 
        decimal : ".",
        decimalPlaces : 2,
        
        });
});

$('#categoria').on('change', function() {

    $.post(base_url + 'general/dependencia/producto',

            {categoria: $('#categoria').val()},

    function(response) {

        $('#producto').html('<option value="">Seleccione una opción</option>');

        var total = Object.keys(response).length;

        for (var i = 0; i < total; i++) {

            $('#producto').append('<option value="' + response[i].id + '">' + response[i].descripcion + '</option>');

        }

    }, 'json');

});

$('#sector').on('change', function() {

    $.post(base_url + 'general/dependencia/rubro',

            {sector: $('#sector').val()},

    function(response) {

        $('#rubro').html('<option value="">Seleccione una opción</option>');

        var total = Object.keys(response).length;

        for (var i = 0; i < total; i++) {

            $('#rubro').append('<option value="' + response[i].id + '">' + response[i].descripcion + '</option>');

        }

    }, 'json');

});

$('#pais').on('change', function() {

    $.post(base_url + 'general/ubicacion/departamento',

            {pais: $('#pais').val()},

    function(response) {

        $('#departamento').html('<option value="">Seleccione una opción</option>');

        var total = Object.keys(response).length;

        for (var i = 0; i < total; i++) {

            $('#departamento').append('<option value="' + response[i].id + '">' + response[i].descripcion + '</option>');

        }

        $('#provincia').html('<option value="">Seleccione una opción</option>');

        $('#distrito').html('<option value="">Seleccione una opción</option>');

    }, 'json');

});

$('#departamento').on('change', function() {

    $.post(base_url + 'general/ubicacion/provincia',

            {departamento: $('#departamento').val()},

    function(response) {

        $('#provincia').html('<option value="">Seleccione una opción</option>');

        var total = Object.keys(response).length;

        for (var i = 0; i < total; i++) {

            $('#provincia').append('<option value="' + response[i].id + '">' + response[i].descripcion + '</option>');

        }

        $('#distrito').html('<option value="">Seleccione una opción</option>');

    }, 'json');

});

$('#provincia').on('change', function() {

    $.post(base_url + 'general/ubicacion/distrito',

            {provincia: $('#provincia').val()},

    function(response) {

        $('#distrito').html('<option value="">Seleccione una opción</option>');

        var total = Object.keys(response).length;

        for (var i = 0; i < total; i++) {

            $('#distrito').append('<option value="' + response[i].id + '">' + response[i].descripcion + '</option>');

        }

    }, 'json');

});

//



