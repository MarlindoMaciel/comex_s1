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
    Route::get('/categorias',           'index');
    Route::get('/categorias/index',     'index')->name('categorias');
    Route::get('/categorias/create',    'create');
    Route::get('/categorias/list',      'list');
    Route::get('/categorias/show',      'show');
    Route::get('/categorias/edit',      'edit');
    Route::post('/categorias/store',    'store');
    Route::post('/categorias/delete',   'delete');
    Route::post('/categorias/update',   'update');
});

Route::get('/clientes',             [ClientesController::class,'index']);
Route::get('/clientes/index',       [ClientesController::class,'index'])->name('clientes');
Route::get('/clientes/create',      [ClientesController::class,'create']);
Route::get('/clientes/list',        [ClientesController::class,'list']);
Route::post('/clientes/store',      [ClientesController::class,'store']);
Route::post('/clientes/delete',     [ClientesController::class,'delete']);

Route::get('/produtos',             [ProdutosController::class,'index']);
Route::get('/produtos/index',       [ProdutosController::class,'index'])->name('produtos');
Route::get('/produtos/create',      [ProdutosController::class,'create']);
Route::get('/produtos/list',        [ProdutosController::class,'list']);
Route::post('/produtos/store',      [ProdutosController::class,'store']);
Route::post('/produtos/delete',     [ProdutosController::class,'delete']);

Route::get('/vendas',               [VendasController::class,'index']);
Route::get('/vendas/index',         [VendasController::class,'index'])->name('vendas');
Route::get('/vendas/create',        [VendasController::class,'create']);
Route::get('/vendas/list',          [VendasController::class,'list']);
Route::post('/vendas/store',        [VendasController::class,'store']);
Route::post('/vendas/delete',       [VendasController::class,'delete']);
         