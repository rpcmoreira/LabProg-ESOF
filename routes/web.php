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
Route::get('/about', [Controlador::class, 'about']);
Route::get('/intro', [Controlador::class, 'intro']);


Route::get('/candidatos',[CandidatoController::class, 'index']);
Route::get('/candidatos/create', [CandidatoController::class, 'create']);
Route::post('/candidatos', [CandidatoController::class, 'store']);