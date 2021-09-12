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

Route::get('/',  [App\Http\Controllers\foto\FotoController::class, 'index'] );

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/perfilpublico{id_user}', [App\Http\Controllers\foto\FotoController::class, 'perfilpublico'])->name('perfilpublico');

Route::resource('foto', App\Http\Controllers\foto\FotoController::class);

Route::resource('categoria', App\Http\Controllers\categoria\CategoriaController::class);

