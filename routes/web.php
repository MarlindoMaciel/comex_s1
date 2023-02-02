<?php

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

Route::resource('/', App\Http\Controllers\ComexController::class);

Route::resource('categorias', App\Http\Controllers\CategoriasController::class);

Route::resource('clientes', App\Http\Controllers\ClientesController::class);

Route::resource('produtos', App\Http\Controllers\ProdutosController::class);

Route::resource('pedidos', App\Http\Controllers\PedidosController::class);

Route::resource('testes', App\Http\Controllers\TestesController::class);

Auth::routes();
