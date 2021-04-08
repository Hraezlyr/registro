<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="{{asset('/js/app.js')}}"></script>


    <nav class="bg-gray-800 pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0">
        <div class="flex flex-wrap items-center">
            <div class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white">
                <a href="#">
                    <span class="text-xl pl-2"><i class="em em-grinning"></i></span>
                </a>
            </div>
            <div class="flex flex-1 md:w-1/3 justify-center md:justify-start text-white px-2">
                <span class="relative w-full">
                    <form action="">
                        <input type="search" id="busqueda" placeholder="Busqueda rápida" class="w-full bg-gray-900 text-white transition border border-transparent focus:outline-none focus:border-gray-400 rounded py-3 px-2 pl-10 appearance-none leading-normal">
                        <div class="absolute search-icon" style="top: 1rem; left: .8rem;">
                            <svg class="fill-current pointer-events-none text-white w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                            </svg>
                        </div>
                    </form>
                </span>
            </div>
            <div class="flex w-full pt-2 content-center justify-between md:w-1/3 md:justify-end">
                <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                    <li class="flex-1 md:flex-none md:mr-3">
                        <span class="inline-block py-2 px-4 text-white no-underline" href="#">Active</span>
                    </li>
                    <li class="flex-1 md:flex-none md:mr-3">
                        <div class="relative inline-block">
                            <button id="boton" class="drop-button text-white focus:outline-none realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                                <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400" alt="">
                            </button>
                            <div id="menu" class="dropdownlist absolute bg-gray-800 text-white right-0 mt-3 p-3 overflow-auto z-30 hidden">
                                <a href="#" class="p-2 hover:bg-gray-800 text-white text-lg no-underline hover:no-underline block">Perfil</a>
                                <a href="#" class="p-2 hover:bg-gray-800 text-white text-lg no-underline hover:no-underline block">Ajustes</a>
                                <div class="border border-gray-600"></div>
                                <a href="#" class="p-2 hover:bg-gray-800 text-white text-lg no-underline hover:no-underline block">Salir</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="flex flex-col md:flex-row">
        <div class="bg-gray-800 shadow-xl h-16 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48">
            <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                <ul class="list-reset flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left">
                    <li class="mr-3 flex-1">
                        <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500">
                            <i class="fas fa-users pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Usuarios</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="{{route('persona.index')}}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                            <i class="fa fa-list pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Ver Registros</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="{{route('persona.create')}}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-blue-600">
                            <i class="fas fa-plus pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Nuevo registro</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="#" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                            <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Payments</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
            <main>
                @yield('contenido')
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                @if (session('guardar') == 'ok')
                    <script>
                        Swal.fire(
                            'Guardado!',
                            'El registro ha sido guardado',
                            'success')
                    </script>
                @endif
                @if (session('actualizado') == 'ok')
                    <script>
                        Swal.fire(
                            'Actualizado!',
                            'El registro ha sido actualizado',
                            'success')
                    </script>
                @endif
                @if (session('eliminar') == 'ok')
                    <script>
                        Swal.fire(
                            'Eliminado!',
                            'El registro ha sido eliminado',
                            'success')
                    </script>
                @endif
                <script src="{{url('/js/alerta_borrar.js')}}"></script>
                <script src="{{url('/js/menu.js')}}"></script>
                <script src="{{url('/js/busqueda.js')}}"></script>
            </main>
        </div>
    </div>
</body>
</html>
