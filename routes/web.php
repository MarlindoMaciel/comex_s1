<?php
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class,'index'])->name('principal');;

//testar depois: Route::resource('/categorias', CategoriasController::class);

Route::controller(CategoriasController::class)->group(function(){
    Route::get('/categorias',           'index')->name('categorias');
    Route::post('/categorias/store',    'store');
    Route::post('/categorias/delete',   'delete');
    Route::post('/categorias/update',   'update');
});

Route::controller(ClientesController::class)->group(function(){
    Route::get('/clientes',             'index')->name('clientes');
    Route::post('/clientes/store',      'store');
    Route::post('/clientes/delete',     'delete');
    Route::post('/clientes/update',     'update');
});    

Route::controller(ProdutosController::class)->group(function(){
    Route::get('/produtos',             'index')->name('produtos');
    Route::post('/produtos/store',      'store');
    Route::post('/produtos/delete',     'delete');
    Route::post('/produtos/delete',     'update');
});

Route::controller(PedidosController::class)->group(function(){
    Route::get('/pedidos',              'index')->name('pedidos');
    Route::post('/pedidos/store',       'store');
    Route::post('/pedidos/delete',      'delete');
    Route::post('/pedidos/update',      'update');
});
    
         