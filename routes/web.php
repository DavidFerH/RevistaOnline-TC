<?php

use App\Http\Controllers\ArticulosController;
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

Route::get('/', [ArticulosController::class, 'index']) -> name('revista.index');
Route::get('/create', [ArticulosController::class, 'create']) -> name('revista.create');