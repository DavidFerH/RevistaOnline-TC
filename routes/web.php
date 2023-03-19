<?php

use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RevistasController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'index']) -> name('index.index');

Route::get('/autor', [AutorController::class, 'index']) -> name('autor.index');
Route::get('/autor/create', [AutorController::class, 'create']) -> name('autor.create');
Route::post('/autor/store', [AutorController::class, 'store']) -> name('autor.store');
Route::post('/autor/edit/{DNI}', [AutorController::class, 'edit']) -> name('autor.edit');
Route::post('/autor/update/{DNI}', [AutorController::class, 'update']) -> name('autor.update');
Route::delete('/autor/destroy/{DNI}', [AutorController::class, 'destroy']) -> name('autor.destroy');

Route::get('/articulos', [ArticulosController::class, 'showArticles']) -> name('articulo.index');
Route::get('/articulo/create', [ArticulosController::class, 'create']) -> name('articulo.create');
Route::post('/articulo/store', [ArticulosController::class, 'store']) -> name('articulo.store');
Route::get('/articulo/edit', [ArticulosController::class, 'index']) -> name('articulo.editList');
Route::post('/articulo/edit/{DNI}', [ArticulosController::class, 'edit']) -> name('articulo.edit');
Route::post('/articulo/update/{DNI}', [ArticulosController::class, 'update']) -> name('articulo.update');
Route::delete('/articulo/destroy/{DNI}', [ArticulosController::class, 'destroy']) -> name('articulo.destroy');

Route::get('/revista', [RevistasController::class, 'showMagazines']) -> name('revista.index');
Route::get('/revista/create', [RevistasController::class, 'create']) -> name('revista.create');
Route::post('/revista/store', [RevistasController::class, 'store']) -> name('revista.store');
Route::get('/revista/edit', [RevistasController::class, 'index']) -> name('revista.editList');
Route::post('/revista/edit/{DNI}', [RevistasController::class, 'edit']) -> name('revista.edit');
Route::post('/revista/update/{DNI}', [RevistasController::class, 'update']) -> name('revista.update');
Route::delete('/revista/destroy/{DNI}', [RevistasController::class, 'destroy']) -> name('revista.destroy');
Route::post('/revista/leer/{COD_REV}', [RevistasController::class, 'readMagazine']) -> name('revista.leer');

