<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/{id}', [TareasController::class, 'Buscar']);

Route::get('/titulo/{titulo}', [TareasController::class, 'buscarPorTitulo']);

Route::get('/autor/{autor}', [TareasController::class, 'buscarPorAutor']);

Route::get('/estado/{estado}', [TareasController::class, 'buscarPorEstado']);


