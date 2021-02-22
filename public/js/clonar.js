$('.clonar').click(function() {
    // Clona el .input-group
    var $clone = $('#formulario .grupo').last().clone();

    // Borra los valores de los inputs clonados
    $clone.find(':input').each(function () {
      if ($(this).is('select')) {
        this.selectedIndex = 0;
      } else {
        this.value = '';
      }
    });

    // Agrega lo clonado al final del #formulario
    $clone.appendTo('#formulario');
});

$('.clonar-hijo').click(function() {
    // Clona el .input-group
    var $clone = $('#grupo-hijo .hijos').last().clone();

    // Borra los valores de los inputs clonados
    $clone.find(':input').each(function () {
      if ($(this).is('select')) {
        this.selectedIndex = 0;
      } else {
        this.value = '';
      }
    });

    // Agrega lo clonado al final del #formulario
    $clone.appendTo('#grupo-hijo');
});

$(document).on('click','.borrar-hijo', function() {
    var $clone = $('#grupo-hijo .hijos').last();
    $clone.remove();
})
/*$(document).on('click','.borrar-beneficiarios', function() {
    var $clone = $('#formulario .grupo').last();
    $clone.remove();
})*/

$(".borrar-beneficiarios").click(function() {
    $(this).closest('div.row').remove();
  });

