<?php

use App\Http\Controllers\PersonaController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::resource('persona', PersonaController::class);
