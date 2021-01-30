@extends('index')
@section('contenido')


<!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('tailwindcss/forms'),
    ]
  }
  ```
-->
<form action="{{route('persona.store')}}" method="POST">
    @csrf
    <div>
    <div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
      <div class="border-t border-gray-200"></div>
    </div>
  </div>

  <div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium leading-6 text-gray-900">Información Personal</h3>
        </div>
      </div>
      <div class="mt-5 md:mt-0 md:col-span-2">
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                  <label for="fecha_afiliacion" class="block text-sm font-medium text-gray-700">Fecha de Afiliación</label>
                  <input type="date" name="fecha_afiliacion" id="fecha_afiliacion" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="fecha_ingreso" class="block text-sm font-medium text-gray-700">Fecha de Ingreso a la UNAN</label>
                  <input type="date" name="fecha_ingreso" id="fecha_ingreso" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="fecha_actualizacion" class="block text-sm font-medium text-gray-700">Fecha de Actualización</label>
                    <input type="date" name="fecha_actualizacion" id="fecha_actualizacion" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="correo" class="block text-sm font-medium text-gray-700">Correo Electronico</label>
                  <input type="email" name="correo" id="correo" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6">
                    <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre y Apellido</label>
                    <input type="text" name="nombre" id="nombre" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="cedula" class="block text-sm font-medium text-gray-700">Cédula</label>
                    <input type="text" name="cedula" id="cedula" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="inss" class="block text-sm font-medium text-gray-700">Número de INSS</label>
                    <input type="text" name="inss" id="inss" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6">
                    <label for="direccion" class="block text-sm font-medium text-gray-700">Dirección</label>
                    <input type="text" name="direccion" id="direccion" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="cel_casa" class="block text-sm font-medium text-gray-700">Telefono Convencional Casa</label>
                    <input type="text" name="cel_casa" id="cel_casa" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="cel_claro" class="block text-sm font-medium text-gray-700">Telefono Claro</label>
                    <input type="text" name="cel_claro" id="cel_claro" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="cel_trabajo" class="block text-sm font-medium text-gray-700">Telefono Oficina</label>
                    <input type="text" name="cel_trabajo" id="cel_trabajo" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="cel_tigo" class="block text-sm font-medium text-gray-700">Celular Tigo</label>
                    <input type="text" name="cel_tigo" id="cel_tigo" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="facultad" class="block text-sm font-medium text-gray-700">Facultad</label>
                  <select id="facultad" name="facultad" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option disabled selected>Elija la facultad a la que pertenece</option>
                  </select>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="departamento" class="block text-sm font-medium text-gray-700">Departamento</label>
                    <select id="departamento" name="departamento" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                      <option selected disabled>Elija su departamento</option>
                    </select>
                  </div>
                  <div class="col-span-6 sm:col-span-3">
                    <label for="estado_civil" class="block text-sm font-medium text-gray-700">Estado Civil</label>
                    <select id="estado_civil" name="estado_civil" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option>Soltero</option>
                        <option>Casado</option>
                        <option>Acompañado</option>
                    </select>
                  </div>
                  <br>
                <div class="col-span-6 sm:col-span-3">
                    <label for="nombre_conyugue" class="block text-sm font-medium text-gray-700">Nombre del Conyugue</label>
                    <input type="text" name="nombre_conyugue" id="nombre_conyugue" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <div class="flex items-center">
                      <input id="c_fallecido" name="c_fallecido" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">
                      <label for="c_fallecido" class="ml-3 block text-sm font-medium text-gray-700">
                        Si
                      </label>
                    </div>
                    <div class="flex items-center">
                      <input id="c_fallecido" name="c_fallecido" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="0">
                      <label for="c_fallecido" class="ml-3 block text-sm font-medium text-gray-700">
                        No
                      </label>
                    </div>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="padre" class="block text-sm font-medium text-gray-700">Nombre del Padre</label>
                    <input type="text" name="padre" id="padre" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <div class="flex items-center">
                      <input id="p_fallecido" name="p_fallecido" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">
                      <label for="p_fallecido" class="ml-3 block text-sm font-medium text-gray-700">
                        Si
                      </label>
                    </div>
                    <div class="flex items-center">
                      <input id="p_fallecido" name="p_fallecido" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="0">
                      <label for="p_fallecido" class="ml-3 block text-sm font-medium text-gray-700">
                        No
                      </label>
                    </div>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="madre" class="block text-sm font-medium text-gray-700">Nombre de la Madre</label>
                    <input type="text" name="madre" id="madre" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <div class="flex items-center">
                      <input id="m_fallecida" name="m_fallecida" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">
                      <label for="m_fallecida" class="ml-3 block text-sm font-medium text-gray-700">
                        Si
                      </label>
                    </div>
                    <div class="flex items-center">
                      <input id="m_fallecida" name="m_fallecida" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="0">
                      <label for="m_fallecida" class="ml-3 block text-sm font-medium text-gray-700">
                        No
                      </label>
                    </div>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <p class="block text-sm font-medium text-gray-700">Usted tiene hijos?</p>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <div class="flex items-center">
                      <input id="push_everything" name="push_notifications" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">
                      <label for="push_everything" class="ml-3 block text-sm font-medium text-gray-700">
                        Si
                      </label>
                    </div>
                    <div class="flex items-center">
                      <input id="push_email" name="push_notifications" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="0">
                      <label for="push_email" class="ml-3 block text-sm font-medium text-gray-700">
                        No
                      </label>
                    </div>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <div>
                        <label for="nombre_hijo" class="block text-sm font-medium text-gray-700">Nombre</label>
                        <input type="text" name="nombre_hijo" id="nombre_hijo" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                            1
                    <div>
                            2
                    </div>
                  </div>
              </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">

            </div>
          </div>

      </div>
    </div>
  </div>

  <div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
      <div class="border-t border-gray-200"></div>
    </div>
  </div>

    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Beneficiarios</h3>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="grid-cols-4">
                                <label for="nombre_beneficiario" class="block text-sm font-medium text-gray-700">Nombre</label>
                                <input type="text" name="nombre_beneficiario" id="nombre_beneficiario" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                        <div class="grid-cols-4">
                            <label for="cedula_beneficiario" class="block text-sm font-medium text-gray-700">Cédula</label>
                            <input type="text" name="cedula_beneficiario" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="grid-cols-4">
                            <label for="parentezco" class="block text-sm font-medium text-gray-700">Parentezco %</label>
                            <input type="number" name="parentezco" id="parentezco" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="grid-cols-4">
                            <label for="cel_beneficiario" class="block text-sm font-medium text-gray-700">Celular</label>
                            <input type="text" name="cel_beneficiario" id="cel_beneficiario" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">

                </div>
            </div>
        </div>
    </div>
  </div>
  <div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
      <div class="border-t border-gray-200"></div>
    </div>
  </div>
  <div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Anexos</h3>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="last_name" class="block text-sm font-medium text-gray-700">Partida de nacimiento del afiliado</label>
                            <div class="flex items-center">
                                <input id="partida_afiliado" name="partida_afiliado" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">
                                <label for="partida_afiliado" class="ml-3 block text-sm font-medium text-gray-700">
                                  Si
                                </label>
                              </div>
                              <div class="flex items-center">
                                <input id="partida_afiliado" name="partida_afiliado" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="0">
                                <label for="partida_afiliado" class="ml-3 block text-sm font-medium text-gray-700">
                                  No
                                </label>
                              </div>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="partida_hijo" class="block text-sm font-medium text-gray-700">Partida de nacimiento de hijos</label>
                            <div class="flex items-center">
                                <input id="partida_hijo" name="partida_hijo" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">
                                <label for="partida_hijo" class="ml-3 block text-sm font-medium text-gray-700">
                                  Si
                                </label>
                              </div>
                              <div class="flex items-center">
                                <input id="partida_hijo" name="partida_hijo" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="0">
                                <label for="partida_hijo" class="ml-3 block text-sm font-medium text-gray-700">
                                  No
                                </label>
                              </div>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="partida_padres" class="block text-sm font-medium text-gray-700">Partida de nacimiento de los padres</label>
                            <div class="flex items-center">
                                <input id="partida_padres" name="partida_padres" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">
                                <label for="partida_padres" class="ml-3 block text-sm font-medium text-gray-700">
                                  Si
                                </label>
                              </div>
                              <div class="flex items-center">
                                <input id="partida_padres" name="partida_padres" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="0">
                                <label for="partida_padres" class="ml-3 block text-sm font-medium text-gray-700">
                                  No
                                </label>
                              </div>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="last_name" class="block text-sm font-medium text-gray-700">Certificado de Matrimonio</label>
                            <div class="flex items-center">
                                <input id="acta_matrimonio" name="acta_matrimonio" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">
                                <label for="acta_matrimonio" class="ml-3 block text-sm font-medium text-gray-700">
                                  Si
                                </label>
                              </div>
                              <div class="flex items-center">
                                <input id="acta_matrimonio" name="acta_matrimonio" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="0">
                                <label for="acta_matrimonio" class="ml-3 block text-sm font-medium text-gray-700">
                                  No
                                </label>
                              </div>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="last_name" class="block text-sm font-medium text-gray-700">Declaración Notariada</label>
                            <div class="flex items-center">
                                <input id="declaracion_notariada" name="declaracion_notariada" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">
                                <label for="declaracion_notariada" class="ml-3 block text-sm font-medium text-gray-700">
                                  Si
                                </label>
                              </div>
                              <div class="flex items-center">
                                <input id="declaracion_notariada" name="declaracion_notariada" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="0">
                                <label for="declaracion_notariada" class="ml-3 block text-sm font-medium text-gray-700">
                                  No
                                </label>
                              </div>
                        </div>
                        <div>
                            <label for="about" class="block text-sm font-medium text-gray-700">
                              Observaciones
                            </label>
                            <div class="mt-1">
                              <textarea id="observaciones" name="observaciones" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                            </div>
                        </div>
                </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Guardar
                </button>
                <a href="{{url('/persona')}}" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Cancelar</a>
            </div>
        </div>
    </div>
  </div>
</div>
</form>
<script src="{{asset('/js/facultad.js')}}"></script>
@endsection

