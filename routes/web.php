<?php
use App\Http\Controllers\CategoriasController;
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

Route::get('/categorias',         [CategoriasController::class,'index']);
Route::get('/',                   [CategoriasController::class,'index'])->name('index');
Route::get('/categorias/index',   [CategoriasController::class,'index']);
Route::get('/categorias/create',  [CategoriasController::class,'create']);
Route::post('/categorias/store',  [CategoriasController::class,'store']);
Route::get('/categorias/list',    [CategoriasController::class,'list']);
Route::post('/categorias/delete', [CategoriasController::class,'delete']);
