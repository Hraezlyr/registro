<?php

use App\Http\Controllers\BuscarController;
use App\Http\Controllers\HijoController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;
use App\Models\Persona;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/persona', function () {
    return view('persona.index');
});

Route::resource('persona', PersonaController::class);

Route::get('/buscar/personas',[BuscarController::class,'personas'])->name('buscar.personas');
