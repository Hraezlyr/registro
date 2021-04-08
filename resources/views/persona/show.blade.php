@extends('index')
@section('contenido')

<div class="flex flex-wrap pt-5 pl-3 pr-3">
    <div class="bg-gray-100 h-screen overflow-y-scroll h-32 overflow-x-hidden flex">
        <div>
            <div class="md:flex no-wrap md:-mx-2 ">
                <!-- Left Side -->
                <div class="w-full md:w-3/12 md:mx-2">
                    <!-- Profile Card -->
                    <div class="bg-white p-3 border-t-4 border-green-400">
                        <div class="image overflow-hidden">
                            @if ($datos->imagen == "https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png")
                                <img class="h-auto w-full mx-auto" src="{{$datos->imagen}}">
                            @else
                                <img class="h-auto w-full mx-auto" src="{{asset(Storage::url($datos->imagen))}}">
                            @endif
                        </div>
                    </div>
                    <div class="flex pt-3">
                        <a class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-2" href="{{route('persona.edit',$datos->id)}}">Editar</a>
                        <form class="borrar_registro" action="{{route('persona.destroy',$datos)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Eliminar</button>
                        </form>
                    </div>
                    <!-- End of profile card -->
                    <div class="my-4"></div>
                    <!-- Friends card -->
                    <!-- End of friends card -->
                </div>
                <!-- Right Side -->
                <div class="w-full md:w-9/12 h-64">
                    <!-- Profile tab -->
                    <!-- About Section -->
                    <div class="bg-white p-3 shadow-sm rounded-sm">
                        <div class="text-gray-700">
                            <div class="grid md:grid-cols-2 text-sm">
                                <div class="grid grid-cols-2">
                                    <div class="px-4 font-semibold">Nombre Completo</div>
                                    <div class="px-4">{{$datos->nombre}}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 font-semibold">Cédula</div>
                                    <div class="px-4">{{$datos->cedula}}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 font-semibold">Número de INSS</div>
                                    <div class="px-4">{{$datos->inss}}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 font-semibold">Fecha de Afiliación</div>
                                    <div class="px-4">{{$datos->fecha_afiliacion}}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 font-semibold">Fecha de Ingreso</div>
                                    <div class="px-4">{{$datos->fecha_ingreso}}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 font-semibold">Fecha de Actualización</div>
                                    <div class="px-4">{{$datos->fecha_actualizacion}}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 font-semibold">Correo Electronico</div>
                                    <div class="px-4">
                                        <a class="text-blue-800">{{$datos->correo}}</a>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 font-semibold">Facultad</div>
                                    <div class="px-4">{{$datos->facultad}}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 font-semibold">Departamento</div>
                                    <div class="px-4">{{$datos->departamento}}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 font-semibold">Telefono de Casa</div>
                                    <div class="px-4">
                                        @if ($datos->cel_casa === null)
                                            No registrado
                                        @else
                                            {{$datos->cel_casa}}
                                        @endif
                                    </div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 font-semibold">Telefono de Oficina</div>
                                    <div class="px-4">
                                        @if ($datos->cel_trabajo === null)
                                            No registrado
                                        @else
                                            {{$datos->cel_trabajo}}
                                        @endif
                                    </div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 font-semibold">Telefono Claro</div>
                                    <div class="px-4">
                                        @if ($datos->cel_claro === null)
                                            No registrado
                                        @else
                                            {{$datos->cel_claro}}
                                        @endif
                                    </div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 font-semibold">Telefono Tigo</div>
                                    <div class="px-4">
                                        @if ($datos->cel_tigo === null)
                                            No registrado
                                        @else
                                            {{$datos->cel_tigo}}
                                        @endif
                                    </div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 font-semibold">Dirección</div>
                                    <div class="px-4">{{$datos->direccion}}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 font-semibold">Estado Civil</div>
                                    <div class="px-4">{{$datos->estado_civil}}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 font-semibold">Nombre de la Madre</div>
                                    <div class="px-4">{{$datos->madre}}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 font-semibold">Nombre del Padre</div>
                                    <div class="px-4">{{$datos->padre}}</div>
                                </div>
                                @if ($datos->nombre_conyugue != null)
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 font-semibold">Nombre Conyugue o Acompañante</div>
                                        <div class="px-4">{{$datos->nombre_conyugue}}</div>
                                    </div>
                                @endif
                            </div>
                            <hr>
                            <div class="grid md:grid-cols-3 text-sm">
                                @if ($datosH != null)
                                    @foreach ($datosH as $item)
                                        <div class="grid grid-cols-1">
                                            <div class="px-4 py-2 font-semibold">Nombre del Hijo</div>
                                            <div class="px-4">{{$item->nombre_hijo}}</div>
                                        </div>
                                        <div class="grid grid-cols-1">
                                            <div class="px-4 py-2 font-semibold">Sexo</div>
                                            <div class="px-4">{{$item->sexo}}</div>
                                        </div>
                                        <div class="grid grid-cols-1">
                                            <div class="px-4 py-2 font-semibold">Edad</div>
                                            <div class="px-4 pb-2">{{$item->edad}}</div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <hr>
                            <div class="grid md:grid-cols-4 text-sm">
                                @if ($datosB != null)
                                    @foreach ($datosB as $item)
                                        <div class="grid grid-cols-1">
                                            <div class="px-4 py-2 font-semibold">Nombre del Beneficiario</div>
                                            <div class="px-4">{{$item->nombre_beneficiario}}</div>
                                        </div>
                                        <div class="grid grid-cols-1">
                                            <div class="px-4 py-2 font-semibold">Cédula del Beneficiario</div>
                                            <div class="px-4">{{$item->cedula_beneficiario}}</div>
                                        </div>
                                        <div class="grid grid-cols-1">
                                            <div class="px-4 py-2 font-semibold">Parentezco</div>
                                            <div class="px-4">{{$item->parentezco}}%</div>
                                        </div>
                                        <div class="grid grid-cols-1">
                                            <div class="px-4 py-2 font-semibold">Celular del Beneficiario</div>
                                            <div class="px-4">{{$item->cel_beneficiario}}</div>
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
</div>

<script src="{{asset('js/alerta_borrar.js')}}"></script>
@endsection
