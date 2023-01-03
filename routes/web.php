<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('inicio', function () {
    return view('inicio');
});

Route::get('productos3', function () {
    return view('productos.index');
});


Route::get('productos', [ProductoController::class, 'index']);

Route::get('productos/{producto}', [ProductoController::class, 'show']);

Route::get('hola', function () {
    return "<h1>Hola mundo</h1>";
});

Route::get('productos2', [ProductoController::class, 'index']);

Route::get('productos2/{producto}', [ProductoController::class, 'show']);

Route::get('usuarios', [UsuarioController::class, 'index']);

Route::resource('clientes', ClienteController::class);

Route::get('hola/{nombre}', function ($nombre) {
    return "<h1>HOLA $nombre</h1>";
}); 

Route::get('pais/{nPais}/capital/{nCapital?}', function ($nPais, $nCapital = null) {
    if ($nCapital == null) {
        return "Error";
    }
    return "<h1>La capital de $nPais es $nCapital</h1>";
}); 
