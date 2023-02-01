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
//testar depois: Route::resource('/categorias', CategoriasController::class);

Route::controller(App\Http\Controllers\ComexController::class)->group(function(){
    Route::get('/', 'index')->name('principal');
});

/*
Route::controller(App\Http\Controllers\CategoriasController::class)
        ->prefix('categorias')
        ->group(function(){
    Route::get('/',        'index')->name('categorias');
    Route::post('/store',  'store');
    Route::post('/delete/{id}', 'destroy')->name('categorias.delete');
    Route::post('/update', 'update');
});
*/
Route::resource('categorias', App\Http\Controllers\CategoriasController::class);


Route::controller(App\Http\Controllers\ClientesController::class)
        ->prefix('clientes')
        ->group(function(){
    Route::get('/',        'index')->name('clientes');
    Route::post('/store',  'store');
    Route::post('/delete', 'destroy');
    Route::post('/update', 'update');
});

Route::controller(App\Http\Controllers\ProdutosController::class)
        ->prefix('produtos')
        ->group(function(){
    Route::get('/',        'index')->name('produtos');
    Route::post('/store',  'store');
    Route::post('/delete', 'destroy');
    Route::post('/update', 'update');
});

Route::controller(App\Http\Controllers\PedidosController::class)
        ->prefix('pedidos')
        ->group(function(){
    Route::get('/',        'index')->name('pedidos');
    Route::post('/store',  'store');
    Route::post('/delete', 'destroy');
    Route::post('/update', 'update');
});

Auth::routes();
