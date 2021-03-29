@extends('index')
@section('contenido')
<div class="flex flex-wrap pt-5 pl-3 pr-3">
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-center text-3xl font-bold leading-tight text-gray-900">
            SINDICATO DE PROFESIONALES DE LA EDUCACION SUPERIOR “IVAN MONTENEGRO BÁEZ” (SIPROES) UNIVERSIDAD NACIONAL AUTONOMA DE NICARAGUA, LEON

            <h2 class="text-center text-3xl font-bold leading-tight text-gray-900">FICHA DE AFILIACÓN A LA MUTUAL DOCENTES</h2>
        </h1>
    </div>
</header>
<form action="{{route('persona.update',$datos)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
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
                                    <input type="date" name="fecha_afiliacion" id="fecha_afiliacion" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$datos->fecha_afiliacion}}" required>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="fecha_ingreso" class="block text-sm font-medium text-gray-700">Fecha de Ingreso a la UNAN</label>
                                    <input type="date" name="fecha_ingreso" id="fecha_ingreso" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$datos->fecha_ingreso}}" required>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="fecha_actualizacion" class="block text-sm font-medium text-gray-700">Fecha de Actualización</label>
                                    <input type="date" name="fecha_actualizacion" id="fecha_actualizacion" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$datos->fecha_actualizacion}}">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="correo" class="block text-sm font-medium text-gray-700">Correo Electronico</label>
                                    <input type="email" name="correo" id="correo" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$datos->correo}}" required>
                                </div>
                                <div class="col-span-6">
                                    <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre y Apellido</label>
                                    <input type="text" name="nombre" id="nombre" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$datos->nombre}}" required>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="cedula" class="block text-sm font-medium text-gray-700">Cédula</label>
                                    <input type="text" name="cedula" id="cedula" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$datos->cedula}}" required>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="inss" class="block text-sm font-medium text-gray-700">Número de INSS</label>
                                    <input type="text" name="inss" id="inss" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$datos->inss}}" required>
                                </div>
                                <div class="col-span-6">
                                    <label for="direccion" class="block text-sm font-medium text-gray-700">Dirección</label>
                                    <input type="text" name="direccion" id="direccion" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$datos->direccion}}" required>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="cel_casa" class="block text-sm font-medium text-gray-700">Telefono Convencional Casa</label>
                                    <input type="text" name="cel_casa" id="cel_casa" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$datos->cel_casa}}">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="cel_claro" class="block text-sm font-medium text-gray-700">Telefono Claro</label>
                                    <input type="text" name="cel_claro" id="cel_claro" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$datos->cel_claro}}">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="cel_trabajo" class="block text-sm font-medium text-gray-700">Telefono Oficina</label>
                                    <input type="text" name="cel_trabajo" id="cel_trabajo" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$datos->cel_trabajo}}">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="cel_tigo" class="block text-sm font-medium text-gray-700">Celular Tigo</label>
                                    <input type="text" name="cel_tigo" id="cel_tigo" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$datos->cel_tigo}}">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="facultad" class="block text-sm font-medium text-gray-700">Facultad</label>
                                    <select id="facultad" name="facultad" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option selected>{{$datos->facultad}}</option>
                                    </select>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="departamento" class="block text-sm font-medium text-gray-700">Departamento</label>
                                    <select id="departamento" name="departamento" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option selected>{{$datos->departamento}}</option>
                                    </select>
                                </div>
                                <div class="col-span-6">
                                    <label class="block text-sm font-medium text-gray-700">
                                      Foto de Perfil
                                    </label>
                                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                      <div class="space-y-1 text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                          <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <div class="flex text-sm text-gray-600">
                                          <label for="imagen" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                            <span>Escoja una imagen</span>
                                            <input type="file" name="imagen" id="imagen" accept="image/*"  class="sr-only" value="{{asset(Storage::url($datos->imagen))}}">
                                          </label>
                                          <p class="pl-1">o arrastre un archivo</p>
                                        </div>
                                        <p class="text-xs text-gray-500">
                                          PNG, JPG
                                        </p>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="estado_civil" class="block text-sm font-medium text-gray-700">Estado Civil</label>
                                    <select id="estado_civil" name="estado_civil" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option value="{{$datos->estado_civil}}"selected>{{$datos->estado_civil}}</option>
                                        <option value="soltero">Soltero</option>
                                        <option value="casado">Casado</option>
                                        <option value="acompañado">Acompañado</option>
                                    </select>
                                </div>
                                <br>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="nombre_conyugue" class="block text-sm font-medium text-gray-700">Nombre del Conyugue</label>
                                    <input type="text" name="nombre_conyugue" id="nombre_conyugue" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$datos->nombre_conyugue}}">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <p class="font-medium text-gray-700">Fallecido/a</p>
                                    <div class="flex items-center">
                                        <input id="c_fallecido" name="c_fallecido" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1" {{$datos->c_fallecido == "1" ? 'checked=checked' : ''}}>
                                        <label for="c_fallecido" class="ml-3 block text-sm font-medium text-gray-700">
                                            Si
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="c_fallecido" name="c_fallecido" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="0" {{$datos->c_fallecido == "0" ? 'checked=checked' : ''}}>
                                        <label for="c_fallecido" class="ml-3 block text-sm font-medium text-gray-700">
                                            No
                                        </label>
                                    </div>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="padre" class="block text-sm font-medium text-gray-700">Nombre del Padre</label>
                                    <input type="text" name="padre" id="padre" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$datos->padre}}">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <p class="font-medium text-gray-700">Fallecido</p>
                                    <div class="flex items-center">
                                        <input id="p_fallecido" name="p_fallecido" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1" {{$datos->p_fallecido == "1" ? 'checked=checked' : ''}}>
                                        <label for="p_fallecido" class="ml-3 block text-sm font-medium text-gray-700">
                                            Si
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="p_fallecido" name="p_fallecido" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="0" {{$datos->p_fallecido == "0" ? 'checked=checked' : ''}}>
                                        <label for="p_fallecido" class="ml-3 block text-sm font-medium text-gray-700">
                                            No
                                        </label>
                                    </div>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="madre" class="block text-sm font-medium text-gray-700">Nombre de la Madre</label>
                                    <input type="text" name="madre" id="madre" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$datos->madre}}">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <p class="font-medium text-gray-700">Fallecida</p>
                                        <div class="flex items-center">
                                            <input id="m_fallecida" name="m_fallecida" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1" {{$datos->m_fallecida == "1" ? 'checked=checked' : ''}}>
                                            <label for="m_fallecida" class="ml-3 block text-sm font-medium text-gray-700">
                                                Si
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="m_fallecida" name="m_fallecida" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="0" {{$datos->m_fallecida == "0" ? 'checked=checked' : ''}}>
                                            <label for="m_fallecida" class="ml-3 block text-sm font-medium text-gray-700">
                                                No
                                            </label>
                                        </div>
                                </div>
                                <div class="col-span-6">
                                    <button id="nuevo_hijo" type="button" class="clonar-hijo inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-blue-700 rounded-full shadow ripple hover:shadow-lg hover:bg-blue-800 focus:outline-none">Añadir</button>
                                    <button type="button" class="borrar-hijo inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-red-500 rounded-full shadow ripple hover:shadow-lg hover:bg-red-600 focus:outline-none">Borrar</button>
                                </div>
                                <div id="grupo-hijo" class="col-span-6">
                                    @if (count($datos->hijos) === 0)
                                        <span id="no_hay">No hay datos de hijos registrados</span>
                                    @else
                                        @foreach ($datos->hijos as $item)
                                            <div class="hijos grid grid-cols-6 gap-4">
                                                <div class="col-start-1 col-end-3">
                                                    <label for="nombre_hijo" class="block text-sm font-medium text-gray-700">Nombre</label>
                                                    <input type="text" name="nombre_hijo[]" id="nombre_hijo" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$item->nombre_hijo}}">
                                                </div>
                                                <div class="col-start-3 col-end-5">
                                                    <label for="sexo" class="block text-sm font-medium text-gray-700">Sexo</label>
                                                    <select id="sexo" name="sexo[]" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                        <option value="{{$item->sexo}}"selected>{{$item->sexo}}</option>
                                                        <option value="femenino">Femenino</option>
                                                        <option value="masculino">Masculino</option>
                                                    </select>
                                                </div>
                                                <div class="col-start-5">
                                                    <label for="edad" class="block text-sm font-medium text-gray-700">Edad</label>
                                                    <input type="number" name="edad[]" id="edad" class="w-24 mt-1 focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$item->edad}}">
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6"></div>
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
                        <div id="formulario" class="px-4 py-5 bg-white sm:p-6">
                            <div class="col-span-6 pb-3">
                                <button id="nuevo_b" type="button" class="clonar border inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-blue-700 rounded-full shadow ripple hover:shadow-lg hover:bg-blue-800 focus:outline-none">Añadir</button>
                                <button type="button" class="borrar-beneficiarios inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-red-500 rounded-full shadow ripple hover:shadow-lg hover:bg-red-600 focus:outline-none">Borrar</button>
                            </div>
                            @if (count($datos->beneficiarios) === 0)
                                <div class="col-span-6">
                                    <span id="no_hay_b" class="block text-sm font-medium text-gray-700">No hay beneficiarios registrados</span>
                                </div>
                            @else
                                @foreach ($datos->beneficiarios as $item)
                                    <div class="grupo grid grid-cols-6 gap-4">
                                        <div class="col-start-1 col-span-2">
                                            <label for="nombre_beneficiario" class="block text-sm font-medium text-gray-700">Nombre</label>
                                            <input type="text" name="nombre_beneficiario[]" id="nombre_beneficiario" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$item->nombre_beneficiario}}">
                                        </div>
                                        <div class="col-span-2">
                                            <label for="cedula_beneficiario" class="block text-sm font-medium text-gray-700">Cédula</label>
                                            <input type="text" name="cedula_beneficiario[]" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$item->cedula_beneficiario}}">
                                        </div>
                                        <div>
                                            <label for="parentezco" class="block text-sm font-medium text-gray-700">Parentezco %</label>
                                            <input type="number" name="parentezco[]" id="parentezco" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-24 shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$item->parentezco}}">
                                        </div>
                                        <div class="grid grid-cols-1">
                                            <label for="cel_beneficiario" class="text-sm font-medium text-gray-700">Celular</label>
                                            <input type="text" name="cel_beneficiario[]" id="cel_beneficiario" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-24 shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$item->cel_beneficiario}}">
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6"></div>
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
                                        <input id="partida_afiliado" name="partida_afiliado" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1" {{$datos->anexo->partida_afiliado == "1" ? 'checked=checked' : ''}}>
                                        <label id="eliminar" for="partida_afiliado" class="ml-3 block text-sm font-medium text-gray-700">
                                            Si
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="partida_afiliado" name="partida_afiliado" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="0" {{$datos->anexo->partida_afiliado == "0" ? 'checked=checked' : ''}}>
                                            <label for="partida_afiliado" class="ml-3 block text-sm font-medium text-gray-700">
                                                No
                                            </label>
                                    </div>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="partida_hijo" class="block text-sm font-medium text-gray-700">Partida de nacimiento de hijos</label>
                                    <div class="flex items-center">
                                        <input id="partida_hijo" name="partida_hijo" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1" {{$datos->anexo->partida_hijo == "1" ? 'checked=checked' : ''}}>
                                        <label for="partida_hijo" class="ml-3 block text-sm font-medium text-gray-700">
                                            Si
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="partida_hijo" name="partida_hijo" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="0" {{$datos->anexo->partida_hijo == "0" ? 'checked=checked' : ''}}>
                                        <label for="partida_hijo" class="ml-3 block text-sm font-medium text-gray-700">
                                            No
                                        </label>
                                    </div>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="partida_padres" class="block text-sm font-medium text-gray-700">Partida de nacimiento de los padres</label>
                                    <div class="flex items-center">
                                        <input id="partida_padres" name="partida_padres" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1" {{$datos->anexo->partida_padres == "1" ? 'checked=checked' : ''}}>
                                        <label for="partida_padres" class="ml-3 block text-sm font-medium text-gray-700">
                                            Si
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="partida_padres" name="partida_padres" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="0"  {{$datos->anexo->partida_padres == "0" ? 'checked=checked' : ''}}>
                                        <label for="partida_padres" class="ml-3 block text-sm font-medium text-gray-700">
                                            No
                                        </label>
                                    </div>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="last_name" class="block text-sm font-medium text-gray-700">Certificado de Matrimonio</label>
                                    <div class="flex items-center">
                                        <input id="acta_matrimonio" name="acta_matrimonio" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1" {{$datos->anexo->acta_matrimonio == "1" ? 'checked=checked' : ''}}>
                                        <label for="acta_matrimonio" class="ml-3 block text-sm font-medium text-gray-700">
                                            Si
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="acta_matrimonio" name="acta_matrimonio" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="0" {{$datos->anexo->acta_matrimonio == "0" ? 'checked=checked' : ''}}>
                                        <label for="acta_matrimonio" class="ml-3 block text-sm font-medium text-gray-700">
                                            No
                                        </label>
                                    </div>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="last_name" class="block text-sm font-medium text-gray-700">Declaración Notariada</label>
                                    <div class="flex items-center">
                                        <input id="declaracion_notariada" name="declaracion_notariada" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1" {{$datos->anexo->declaracion_notariada == "1" ? 'checked=checked' : ''}}>
                                        <label for="declaracion_notariada" class="ml-3 block text-sm font-medium text-gray-700">
                                            Si
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="declaracion_notariada" name="declaracion_notariada" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="0" {{$datos->anexo->declaracion_notariada == "0" ? 'checked=checked' : ''}}>
                                        <label for="declaracion_notariada" class="ml-3 block text-sm font-medium text-gray-700">
                                            No
                                        </label>
                                    </div>
                                </div>
                                <div class="col-start-1 col-end-7">
                                    <div>
                                        <label for="observaciones" class="block text-sm font-medium text-gray-700">
                                            Observaciones
                                        </label>
                                        <div class="mt-1">
                                            <textarea id="observaciones" name="observaciones" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md">{{$datos->anexo->observaciones}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Guardar</button>
                            <a href="{{url('/persona')}}" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script src="{{asset('/js/facultad.js')}}"></script>
<script src="{{asset('/js/nuevo_hijo_edicion.js')}}"></script>
<script src="{{asset('/js/nuevo_beneficiario_edicion.js')}}"></script>
</div>
@endsection

