var nuevo_b = document.getElementById('nuevo_b');
var texto_b = document.getElementById('no_hay_b');
nuevo_b.addEventListener('click',function() {

    var texto = '<div class="grupo grid grid-cols-6 gap-4">'+
                        '<div class="col-start-1 col-span-2">'+
                            '<label for="nombre_beneficiario" class="block text-sm font-medium text-gray-700">Nombre</label>'+
                            '<input type="text" name="nombre_beneficiario[]" id="nombre_beneficiario" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">'+
                        '</div>'+
                        '<div class="col-start-3 col-span-2">'+
                            '<label for="cedula_beneficiario" class="block text-sm font-medium text-gray-700">Cédula</label>'+
                            '<input type="text" name="cedula_beneficiario[]" id="cedula_beneficiario" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">'+
                        '</div>'+
                        '<div>'+
                            '<label for="parentezco" class="block text-sm font-medium text-gray-700">Parentezco %</label>'+
                            '<input type="number" name="parentezco[]" id="parentezco" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-24 shadow-sm sm:text-sm border-gray-300 rounded-md">'+
                        '</div>'+
                        '<div class="grid grid-cols-1">'+
                            '<label for="cel_beneficiario" class="text-sm font-medium text-gray-700">Celular</label>'+
                            '<input type="text" name="cel_beneficiario[]" id="cel_beneficiario" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-24 shadow-sm sm:text-sm border-gray-300 rounded-md">'+
                        '</div>'+
                    '</div>'
    $(texto_b).remove();
    $(texto).appendTo('#formulario');



})
var rescate = '<div class="col-span-2">'+

'</div>'
