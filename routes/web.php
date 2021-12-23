<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;
use App\Http\Controllers\CandidatoController;

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

Route::get('/', [Controlador::class, 'index']);
Route::get('/teste', [Controlador::class, 'teste']);

Route::get('/candidato', [CandidatoController::class, 'index']);

Route::get('/candidato/registar', [CandidatoController::class, 'create']);
Route::post('/candidatos', [CandidatoController::class, 'store']);