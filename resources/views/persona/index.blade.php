@extends('index')
@section('contenido')
<div class="bg-gray-800 pt-3">
    <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
        <h3 class="font-bold pl-2">Maestros Registrados</h3>
    </div>
</div>
<div class="flex flex-wrap">
    <table class="min-w-max w-full table-auto">
        <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">Nombre</th>
                <th class="py-3 px-6 text-left">Facultad</th>
                <th class="py-3 px-6 text-center">Departamento</th>
                <th class="py-3 px-6 text-center">Acciones</th>
            </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
            @foreach ($lista as $item)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left">
                        <div class="flex items-center">
                            <div class="mr-2">
                                @if ($item->imagen == "https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png")
                                <img class="w-6 h-6 rounded-full" src="{{$item->imagen}}" >
                                @else
                                <img class="w-6 h-6 rounded-full" src="{{asset(Storage::url($item->imagen))}}" >
                                @endif
                            </div>
                            <span class="font-medium">{{$item->nombre}}</span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-left whitespace-nowrap">
                        <div class="flex items-center">
                            <span class="font-medium">{{$item->facultad}}</span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <div class="flex items-center justify-center">
                            <span class="font-medium">{{$item->departamento}}</span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <div class="flex item-center justify-center">
                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                <a href="{{route('persona.show',$item->id)}}">
                                   <i class="fa fa-eye"></i>
                                </a>
                            </div>
                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                <a href={{route('persona.edit',$item->id)}}>
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </div>
                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                <form class="borrar_registro" action="{{route('persona.destroy',$item)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="py-3 px-6 text-left">
        {{$lista->links()}}
    </div>
  </div>
</div>
@endsection


