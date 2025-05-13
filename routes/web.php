<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\EstacionamientoController;
use App\Http\Controllers\ArriendoController;


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

Route::resource('vehiculos', VehiculoController::class);
Route::resource('estacionamientos', EstacionamientoController::class);
Route::resource('arriendos', ArriendoController::class);




Route::resource('clientes', ClienteController::class);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Ruta para la página de inicio del dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Rutas para la gestión de clientes (CRUD completo)
Route::resource('clientes', ClienteController::class);

// Rutas para la gestión de estacionamientos (CRUD completo)
Route::resource('estacionamientos', EstacionamientoController::class);

// Rutas para la gestión de vehículos (CRUD completo)
Route::resource('vehiculos', VehiculoController::class);

// Si quieres que la raíz del sitio redirija al dashboard (opcional)
Route::get('/', function () {
    return redirect()->route('dashboard');
});

