<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rolsController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('rols/create', [rolsController::class, 'create'])->name('rols.create');
Route::post('rols', [rolsController::class, 'store'])->name('rols.store');
Route::get('rols', [rolsController::class, 'index'])->name('rols.index');

//editar
Route::get('rols/{rol}/edit', [rolsController::class, 'edit'])->name('rols.edit');
Route::put('rols/{rol}', [rolsController::class, 'update'])->name('rols.update');
//eliminar
Route::delete('rols/{rol}',[rolsController::class, 'destroy'])->name('rols.destroy');
