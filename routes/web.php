<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/productos', [ProductoController::class, 'index'])->middleware('auth')->name('productos.index');
Route::get('/productos/crear', [ProductoController::class, 'create'])->middleware('auth')->name('productos.create');
Route::post('/productos/store', [ProductoController::class, 'store'])->middleware('auth')->name('productos.store');
Route::get('/productos/{producto}/editar', [ProductoController::class, 'edit'])->middleware('auth')->name('productos.edit');
Route::put('/productos/{producto}/actualizar', [ProductoController::class, 'update'])->middleware('auth')->name('productos.update');
