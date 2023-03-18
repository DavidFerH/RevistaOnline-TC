<?php

use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\AutorController;
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

Route::get('/', [ArticulosController::class, 'index']) -> name('index.index');

Route::get('/articulos', [ArticulosController::class, 'index']) -> name('articulo.index');
Route::get('/articulo/create', [ArticulosController::class, 'create']) -> name('articulo.create');
Route::post('/articulo/store', [ArticulosController::class, 'store']) -> name('articulo.store');

Route::get('/autor', [AutorController::class, 'index']) -> name('autor.index');
Route::get('/autor/create', [AutorController::class, 'create']) -> name('autor.create');
Route::post('/autor/store', [AutorController::class, 'store']) -> name('autor.store');

Route::get('/revista', [RevistasController::class, 'index']) -> name('revista.index');
Route::get('/revista/create', [RevistasController::class, 'create']) -> name('revista.create');
Route::post('/revista/store', [RevistasController::class, 'store']) -> name('revista.store');