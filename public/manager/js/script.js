/**/
/* global NaN */

$(".sub_precio").keyup(function(){

    var precio_base = $("#precio_base").val();

    var precio_reserva = $("#precio_reserva").val();

    var ahorro_monto, ahorro_porcentaje;

    if(precio_base > 0 && precio_base != ""){

        ahorro_monto = precio_base - precio_reserva;

        $("#ahorro_monto").val(ahorro_monto);

        $("#ahorro_porcentaje").val(parseFloat(ahorro_monto*100/precio_base).toFixed(2));

    }else{

        $("#ahorro_monto").val("-");

        $("#ahorro_porcentaje").val("-");

    }

});







$(document).on('submit', '.subastaform', function() {

    frm = $(this);

    btn = frm.find(".save");

    method = frm.attr("method");

    btn.attr("disabled", "disabled");

    html_message = '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert">×</button><strong> </strong>Enviando oferta</div>';

    frm.find('.response').html(html_message).hide().slideDown();

    $.ajax({

        url: frm.attr('action'),

        type: method,

        data: frm.serialize(),

        data: new FormData(this),

                contentType: false,

        cache: false,

        processData: false,

    })

            .done(function(data)

            {

                frm.find('.response').html("").hide().slideDown();

                btn.removeAttr("disabled");

                frm.find('.response').html(data).hide().slideDown();

            })

            .error(function(data, msg)

            {

                btn.removeAttr("disabled");

                frm.find('.response').html("Ha ocurrido un error interno").hide().slideDown();

            });

    return false;

});







//ADD PROVEEDOR SUBASTA

$(document).on('click', '.add-proveedor', function() {

    option = $("#proveedor option:selected").text();

    option_id = $("#proveedor").val();

    alias = $("#alias").val();

    if (option_id == null || alias == '') {

        alertify.alert('<h4>Debe llenar todos los campos</h4>')

                .set('title', 'Importante');

    } else {

        html = '<tr>';

        html += '<td>' + option + '<input type="hidden" name="a_proveedor[]" value="' + option_id + '"></td>';

        html += '<td>' + alias + '<input type="hidden" name="a_alias[]" value="' + alias + '"></td>';

        html += '<td class="text-center"><a class="btn btn-danger remove-criterio" style="background-color: #f16654 !important; border-color: #f16654 !important" data-value="' + option_id + '"><i class="fa fa-trash"></i></a></td>';

        html += '</tr>';

        $("#proveedores").append(html);

        $("#proveedor").val("");

        $("#alias").val("");

    }

    return false;

});



//ADD CRITERIO SUBASTA

$(document).on('click', '.add-criterio', function() {

    total = $("#total").val();

    option = $("#criterio option:selected").text();

    option_id = $("#criterio").val();

    value = $("#valor").val();

    $(".criterios_id").each(function(){
        if($(this).attr("data-id") == option_id){

            alertify.alert('<h4>El criterio ya esta incluido</h4>')

                .set('title', 'Importante');
            return false;
        }
    });


    if (option_id == null || value == '') {

        alertify.alert('<h4>Debe llenar todos los campos</h4>')

                .set('title', 'Importante');

    } else {

        if(value <= 0){

            alertify.alert('<h4>El valor debe ser mayor a cero</h4>')

                .set('title', 'Importante');

        }else if(parseInt(total) + parseInt(value) > 100){

            alertify.alert('<h4>EL valor total no debe sobrepasar el 100%</h4>')

                .set('title', 'Importante');

        }else{

            html = '<tr>';

            html += '<td>' + option + '<input type="hidden" name="a_c_criterio[]" value="' + option_id + '"></td>';

            html += '<td>' + value + '%<input type="hidden" name="a_c_valor[]" value="' + value + '"></td>';

            html += '<td class="text-center"><a class="btn btn-danger remove-criterio" style="background-color: #f16654 !important; border-color: #f16654 !important" data-value="' + value + '"><i class="fa fa-trash"></i></a></td>';

            html += '</tr>';

            $("#criterios").append(html);

            $("#criterio").val("");

            $("#valor").val("");

            $("#total").val(parseInt(total) + parseInt(value));

            $("#total_text").text(parseInt(total) + parseInt(value) + "%");

        }

    }

    return false;

});





$(document).on('click', '.remove-criterio', function() {

	value = $(this).attr('data-value');

	total = $("#total").val();

	$("#total").val(parseInt(total) - parseInt(value));

	$("#total_text").text(parseInt(total) - parseInt(value) + "%");

    $(this).parent().parent().remove();

    return false;

});





//ADD PRODUCTO PROVEEDOR / CLIENTE

$(document).on('click', '.add-producto', function() {

    categoria = $("#categoria option:selected").text();

    categoria_id = $("#categoria").val();

    producto = $("#producto option:selected").text();

    producto_id = $("#producto").val();



    if (categoria_id == null || producto_id == null) {

        alertify.alert('<h4>Debe llenar todos los campos</h4>')

                .set('title', 'Importante');

    } else {

        html = '<tr>';

        html += '<td>' + categoria + '<input type="hidden" name="a_p_categoria[]" value="' + categoria_id + '"></td>';

        html += '<td>' + producto + '<input type="hidden" name="a_p_producto[]" value="' + producto_id + '"></td>';

        html += '<td class="text-center"><a class="btn btn-danger remove-criterio"><i class="fa fa-trash"></i></a></td>';

        html += '</tr>';

        $("#productos").append(html);

        $("#categoria").val("");

        $("#producto").val("");

    }

    return false;

});



//ADD CRITERIO PROVEEDOR

$(document).on('click', '.add-pcriterio', function() {

    option = $("#criterio option:selected").text();

    option_id = $("#criterio").val();

    value = $("#valor").val();

    if (option_id == null || value == '') {

        alertify.alert('<h4>Debe llenar todos los campos</h4>')

                .set('title', 'Importante');

    } else {

        if(value <= 0){

            alertify.alert('<h4>El valor debe ser mayor a cero</h4>')

                .set('title', 'Importante');

        }else if(value > 100){

            alertify.alert('<h4>EL valor no debe sobrepasar el 100%</h4>')

                .set('title', 'Importante');

        }else{

            html = '<tr>';

            html += '<td>' + option + '<input type="hidden" name="a_c_criterio[]" value="' + option_id + '"></td>';

            html += '<td>' + value + ' / 100<input type="hidden" name="a_c_valor[]" value="' + value + '"></td>';

            html += '<td class="text-center"><a class="btn btn-danger remove-criterio" data-value="' + value + '"><i class="fa fa-trash"></i></a></td>';

            html += '</tr>';

            $("#criterios").append(html);

            $("#criterio").val("");

            $("#valor").val("");

        }

    }

    return false;

});













$('#habiform').click(function() {

    $('.togform').toggleClass('togfnone');

    $('.bothab1').toggleClass('botnohab1');

});

/*

var app = angular.module('app', []);

app.controller('appcontroller', function($scope, $http, $interval){

    $interval(function(){

        $http.get(base_url + 'proveedor/subasta/listado_info').then(function(mydata){

            $scope.datas = mydata.data;

            console.log("success");

        });

    }, 500);

});

*/



