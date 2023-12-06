<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Jugador\JugadorController;
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
})->name('home');

Route::prefix('auth')->group(function () {
    Route::post('login/verify', [AuthController::class,'login'])->name('verifyLogin');
    Route::get('salir', [AuthController::class, 'salir'])->name('salir');
});

Route::prefix('administrador')->group(function () {
    Route::get('inicio', [AdminController::class,'index'])->name('HomeAdmin');
});

Route::prefix('jugador')->group(function () {
    Route::get('inicio', [JugadorController::class,'index'])->name('HomeJugador');
    Route::post('editar/imagen', [JugadorController::class,'editImagen'])->name('editImagen');
});
