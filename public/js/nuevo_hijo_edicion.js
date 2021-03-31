var nuevo = document.getElementById('nuevo_hijo');
var borrar = document.getElementById('boton_eliminar');
var borrar_campo = document.getElementById('borrar_campo');
var inputs = document.querySelectorAll('.contar')



nuevo.addEventListener("click",function() {
  // var texto = document.createElement("h1");
  // texto.innerHTML = "hola";

    var span = document.getElementById('no_hay');
    borrar_campo.classList.remove('hidden');
    var texto = '<div class="hijos grid grid-cols-6 gap-4">'+
                    '<div class="col-start-1 col-end-3">'+
                        '<label for="nombre_hijo" class="block text-sm font-medium text-gray-700">Nombre</label>'+
                        '<input type="text" name="nombre_hijo[]" id="nombre_hijo" class="contar mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">'+
                    '</div>'+
                    '<div class="col-start-3 col-end-5">'+
                        '<label for="sexo" class="block text-sm font-medium text-gray-700">Sexo</label>'+
                        '<select id="sexo" name="sexo[]" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">'+
                            '<option value="femenino">Femenino</option>'+
                            '<option value="masculino">Masculino</option>'+
                        '</select>'+
                    '</div>'+
                    '<div class="col-start-5">'+
                        '<label for="edad" class="block text-sm font-medium text-gray-700">Edad</label>'+
                        '<input type="number" name="edad[]" id="edad" class="w-24 mt-1 focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm border-gray-300 rounded-md">'+
                    '</div>'+
                    '<div class="flex mt-6">'+
                        '<label class="flex items-center">'+
                            '<input id="eliminar_h" name="eliminar_h[]" type="checkbox" class="form-checkbox" value="{{$item->id}}">'+
                            '<span class="ml-2">Eliminar</span>'+
                        '</label>'+
                    '</div>'
                '</div>'
    $(span).remove();
    $(texto).appendTo('#grupo-hijo');

})



/*if (cont > 1) {
    borrar_campo.classList.remove('hidden');
   }
   else{
    borrar_campo.classList.add('hidden');
   }
*/
    borrar_campo.addEventListener('click',function() {

        var $clone = $('#grupo-hijo .hijos').last();
            $clone.remove();

    })
