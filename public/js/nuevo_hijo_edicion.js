var nuevo = document.getElementById('nuevo_hijo');
var borrar = document.getElementById('eliminar');
nuevo.addEventListener("click",function() {
  // var texto = document.createElement("h1");
  // texto.innerHTML = "hola";

    var span = document.getElementById('no_hay');
    var texto = '<div class="hijos grid grid-cols-6 gap-4">'+
                    '<div class="col-start-1 col-end-3">'+
                        '<label for="nombre_hijo" class="block text-sm font-medium text-gray-700">Nombre</label>'+
                        '<input type="text" name="nombre_hijo[]" id="nombre_hijo" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">'+
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
                '</div>'
    $(span).remove();
   $(texto).appendTo('#grupo-hijo');

})
