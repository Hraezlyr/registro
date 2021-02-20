@extends('index')
@section('contenido')
<div class="bg-gray-100 h-screen overflow-hidden flex">
    <div class="container mx-auto my-5 p-5">
        <div class="md:flex no-wrap md:-mx-2 ">
            <!-- Left Side -->
            <div class="w-full md:w-3/12 md:mx-2">
                <!-- Profile Card -->
                <div class="bg-white p-3 border-t-4 border-green-400">
                    <div class="image overflow-hidden">
                        <img class="h-auto w-full mx-auto"
                            src="{{$datos->imagen}}"
                            alt="">
                    </div>
                </div>
                <!-- End of profile card -->
                <div class="my-4"></div>
                <!-- Friends card -->
                <!-- End of friends card -->
            </div>
            <!-- Right Side -->
            <div class="w-full md:w-9/12 mx-2 h-64">
                <!-- Profile tab -->
                <!-- About Section -->
                <div class="bg-white p-3 shadow-sm rounded-sm">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <span class="tracking-wide">Información</span>
                    </div>
                    <div class="text-gray-700">
                        <div class="grid md:grid-cols-2 text-sm">
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Nombre Completo</div>
                                <div class="px-4 py-2">{{$datos->nombre}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Cédula</div>
                                <div class="px-4 py-2">{{$datos->cedula}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Número de INSS</div>
                                <div class="px-4 py-2">{{$datos->inss}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Fecha de Afiliación</div>
                                <div class="px-4 py-2">{{$datos->fecha_afiliacion}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Fecha de Ingreso</div>
                                <div class="px-4 py-2">{{$datos->fecha_ingreso}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Fecha de Actualización</div>
                                <div class="px-4 py-2">{{$datos->fecha_actualizacion}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Correo Electronico</div>
                                <div class="px-4 py-2">
                                    <a class="text-blue-800">{{$datos->correo}}</a>
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Facultad</div>
                                <div class="px-4 py-2">{{$datos->facultad}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Departamento</div>
                                <div class="px-4 py-2">{{$datos->departamento}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Telefono de Casa</div>
                                <div class="px-4 py-2">
                                    @if ($datos->cel_casa === null)
                                        No registrado
                                    @else
                                        {{$datos->cel_casa}}
                                    @endif
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Telefono de Oficina</div>
                                <div class="px-4 py-2">
                                    @if ($datos->cel_trabajo === null)
                                        No registrado
                                    @else
                                        {{$datos->cel_trabajo}}
                                    @endif
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Telefono Claro</div>
                                <div class="px-4 py-2">
                                    @if ($datos->cel_claro === null)
                                        No registrado
                                    @else
                                        {{$datos->cel_claro}}
                                    @endif
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Telefono Tigo</div>
                                <div class="px-4 py-2">
                                    @if ($datos->cel_tigo === null)
                                        No registrado
                                    @else
                                        {{$datos->cel_tigo}}
                                    @endif
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Dirección</div>
                                <div class="px-4 py-2">{{$datos->direccion}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Estado Civil</div>
                                <div class="px-4 py-2">{{$datos->estado_civil}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Nombre de la Madre</div>
                                <div class="px-4 py-2">{{$datos->madre}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Nombre del Padre</div>
                                <div class="px-4 py-2">{{$datos->padre}}</div>
                            </div>
                            @if ($datos->nombre_conyugue != null)
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Nombre Conyugue o Acompañante</div>
                                <div class="px-4 py-2">{{$datos->nombre_conyugue}}</div>
                            </div>
                            @endif
                        </div>
                        <hr>
                        <div class="grid md:grid-cols-2 text-sm">
                            @if ($datosH != null)
                                @foreach ($datosH as $item)
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Nombre del Hijo</div>
                                    <div class="px-4 py-2">{{$item->nombre_hijo}}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Edad</div>
                                    <div class="px-4 py-2">{{$item->edad}}</div>
                                </div>
                                @endforeach
                            @endif
                        </div>
                        <hr>
                        <div class="grid md:grid-cols-2 text-sm">
                            @if ($datosB != null)
                                @foreach ($datosB as $item)
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Nombre del Beneficiario</div>
                                    <div class="px-4 py-2">{{$item->nombre_beneficiario}}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Cédula del Beneficiario</div>
                                    <div class="px-4 py-2">{{$item->cedula_beneficiario}}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Celular del Beneficiario</div>
                                    <div class="px-4 py-2">{{$item->celular_beneficiario}}</div>
                                </div>
                                @endforeach
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
