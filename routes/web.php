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
    Route::get('inicio', [AdminController::class,'index'])->name('HomeAdministrador');
    Route::get('jugadores/view', [AdminController::class,'jugadoresView'])->name('jugadoresView');
    Route::get('jugador/edit/{id}', [AdminController::class,'jugadoresEditView'])->name('jugadoresEditView');
    Route::post('jugador/save', [AdminController::class,'jugadoresEditSave'])->name('jugadoresEditSave');
    Route::get('jugador/create', [AdminController::class,'jugadoresCreate'])->name('jugadoresCreate');
    Route::post('jugador/create/save', [AdminController::class,'jugadoresCreateSave'])->name('jugadoresCreateSave');
    Route::get('jugador/delete', [AdminController::class,'jugadoresDelete'])->name('jugadoresDelete');

    Route::get('equipo/view', [AdminController::class,'EquiposView'])->name('EquiposView');
    Route::get('equipo/edit/{id}', [AdminController::class,'EquiposEditView'])->name('EquiposEditView');
    Route::post('equipo/save', [AdminController::class,'EquiposEditSave'])->name('EquiposEditSave');
    Route::get('equipo/create/view', [AdminController::class,'EquiposCreate'])->name('EquiposCreate');
    Route::post('equipo/create/save', [AdminController::class,'EquiposCreateSave'])->name('EquiposCreateSave');
    Route::get('equipo/delete', [AdminController::class,'EquiposDelete'])->name('EquiposDelete');
});

Route::prefix('jugador')->group(function () {
    Route::get('inicio', [JugadorController::class,'index'])->name('HomeJugador');
    Route::post('editar/imagen', [JugadorController::class,'editImagen'])->name('editImagen');
});
