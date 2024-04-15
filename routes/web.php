<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
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
    return "Hola Mundo";
});

//Para valor nulo en la url o preestablecido ya en la funcion
                    //nulo
/*Route::get('clientes/{id?}', function($id = 1){
    return "Cliente $id";
});

Route::get('clientes/{id}/venta/{idVenta?}', function($id, $idVenta = null){
    if($idVenta == null){
        return "Error";
    }
    return "El cliente $id realizó la venta $idVenta";
});*/

//rutas con controllers
Route::get('productos', [ProductoController::class, 'index']);

Route::get('productos/create', [ProductoController::class, 'create']);

Route::get('productos/{id}', [ProductoController::class, 'show']);

Route::post('productos', [ProductoController::class, 'store']);

Route::get('productos/{id}/edit', [ProductoController::class, 'edit']);

Route::put('productos/{id}', [ProductoController::class, 'update']);

Route::delete('productos/{id}', [ProductoController::class, 'destroy']);


Route::get('usuarios', [UsuarioController::class, 'index']);

Route::resource('clientes', ClienteController::class);