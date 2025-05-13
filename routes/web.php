<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\EstacionamientoController;
use App\Http\Controllers\ArriendoController;
use MongoDB\Laravel\Eloquent\Builder;



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


Route::get('/arriendos/buscar', [ArriendoController::class, 'buscar'])->name('arriendos.buscar');


Route::resource('vehiculos', VehiculoController::class);
Route::resource('estacionamientos', EstacionamientoController::class);
Route::resource('arriendos', ArriendoController::class);
Route::resource('clientes', ClienteController::class);




Route::resource('clientes', ClienteController::class);
Route::get('/dashboard', function () {
    return view('welcome');
})->name('dashboard');
