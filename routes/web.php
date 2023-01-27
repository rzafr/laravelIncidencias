<?php

use App\Models\Incidencia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncidenciaController;// NO OLVIDAR IR PONIENDO LO QUE SE USA

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

// Mostrar todas las incidencias
Route::get('/', [IncidenciaController::class, 'index']);

// Mostrar incidencia en detalle por id (habria que cambiar la vista y se puede poner incluso mapa)
Route::get('/incidencia/{id}', [IncidenciaController::class, 'show']);
