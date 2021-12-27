<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConductorController;
use App\Http\Controllers\Conductor;
use App\Http\Controllers\Pasajero;
use App\Http\Controllers\PasajeroController;
use App\Http\Controllers\Opinion;
use App\Http\Controllers\OpinionController;

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

Route::resource('/conductores', ConductorController::class);
Route::get('/opiniones_conductor/{conductor_id}', [ConductorController::class, 'opinionesConductor'])->name('opiniones_conductor');
Route::get('/trayectos/{conductor_id}', [ConductorController::class, 'trayectosConductor'])->name('trayectos_conductor');

Route::resource('/pasajeros', PasajeroController::class);
Route::get('/conductorespdf', [ConductorController::class, 'imprimir']);
Route::get('/pasajerospdf', [PasajeroController::class, 'imprimir']);

Route::resource('/opiniones', OpinionController::class);
