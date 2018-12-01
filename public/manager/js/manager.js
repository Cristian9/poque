/**/ 
/* global NaN */

// TOOLTIP
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
//EDITOR DE TEXTO
$(document).ready(function(){
    tinymce.init({
        selector:'.editor',
        height: 300,
        plugins: 'advlist lists link image code textcolor',
        toolbar: 'undo redo | styleselect | bold italic forecolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | code'
      });
});

//DATA TABLES
$(document).ready(function() {
    $('.datatable').DataTable({
        language: {
            processing:     "Procesando...",
            search:         "Buscar:",
            lengthMenu:    "Mostrar _MENU_ registros",
            info:           "Mostrando del _START_ al _END_ de _TOTAL_ registros",
            infoEmpty:      "Mostrando del 0 al 0 de 0 registros",
            infoFiltered:   "(filtrado de un total de _MAX_ registros)",
            infoPostFix:    "",
            loadingRecords: "Cargando...",
            zeroRecords:    "No se encontraron resultados",
            emptyTable:     "Ningun dato disponible en esta tabla",
            paginate: {
                first:      "Primero",
                previous:   "Anterior",
                next:       "Siguiente",
                last:       "Último"
            },
            aria: {
                sortAscending:  ": Activar para ordenar la columna de manera ascendente",
                sortDescending: ": Activar para ordenar la columna de manera descendente"
            }
        }
    });
} );

//INPUT FILE
function bs_input_file() {
	$(".input-file").before(
		function() {
			if ( ! $(this).prev().hasClass('input-ghost') ) {
				var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
				element.attr("name",$(this).attr("name"));
				element.change(function(){
					element.next(element).find('input').val((element.val()).split('\\').pop());
				});
				$(this).find("button.btn-choose").click(function(){
					element.click();
				});
				$(this).find("button.btn-reset").click(function(){
					element.val(null);
					$(this).parents(".input-file").find('input').val('');
				});
				$(this).find('input').css("cursor","pointer");
				$(this).find('input').mousedown(function() {
					$(this).parents('.input-file').prev().click();
					return false;
				});
				return element;
			}
		}
	);
}
$(function() {
	bs_input_file();
});

//COLOR PICKER
$(function() {
    $('.color-pick1').colorpicker();
    $('.color-pick2').colorpicker();
    $('.color-pick3').colorpicker();
});

$(function () {
    //Enable iCheck plugin for checkboxes
    //iCheck for checkbox and radio inputs
    $('.mailbox-messages input[type="checkbox"]').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });

    //Enable check and uncheck all functionality
    $(".checkbox-toggle").click(function () {
      var clicks = $(this).data('clicks');
      if (clicks) {
        //Uncheck all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
        $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
      } else {
        //Check all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("check");
        $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
      }
      $(this).data("clicks", !clicks);
    });

    //Handle starring for glyphicon and font awesome
    $(".mailbox-star").click(function (e) {
      e.preventDefault();
      //detect type
      var $this = $(this).find("a > i");
      var glyph = $this.hasClass("glyphicon");
      var fa = $this.hasClass("fa");

      //Switch states
      if (glyph) {
        $this.toggleClass("glyphicon-star");
        $this.toggleClass("glyphicon-star-empty");
      }

      if (fa) {
        $this.toggleClass("fa-star");
        $this.toggleClass("fa-star-o");
      }
    });
  });


//para la confirmacion del cambiar de estado
$(document).on('click', '.denegar', function(e) {

    e.preventDefault();
    url = $(this).attr("data-url");

    alertify.confirm('<h3>¿Esta seguro que desea bloquear este registro?</h3>')
            .set('title', 'Importante')
            .set('labels', {ok: 'Confirmar', cancel: 'Cancelar'})
            .set('onok', function(closeEvent) {
                $.post(url,
                        {},
                        function(response) {
                            $('.response').html(response);
                        });
            })
});

//para la confirmacion de la eliminacion de un registro
$(document).on('click', '.eliminar', function(e) {
    e.preventDefault();
    url = $(this).attr("data-url");
    alertify.confirm('<h3>¿Esta seguro que desea eliminar este registro?</h3><h4>recuerde que la eliminacion sera permantente</h4>')
            .set('title', 'Importante')
            .set('labels', {ok: 'Confirmar', cancel: 'Cancelar'})
            .set('onok', function(closeEvent) {
                $.post(url,
                        {},
                        function(response) {
                            $('.response').html(response);
                        });
            })
});