<?php

use Illuminate\Http\Request;
use App\Models\livro;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;

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
Route::get('/obras', [LivroController::class, 'index']);
Route::post('/obras', [LivroController::class, 'store']);
Route::get('/obras/{id}', [LivroController::class, 'show']);
Route::put('/obras/{id}', [LivroController::class, 'update']);
Route::delete('/obras/{id}', [LivroController::class, 'destroy']);
