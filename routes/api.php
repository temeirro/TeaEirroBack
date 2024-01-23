<?php

use App\Http\Controllers\TeaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login',[AuthController::class, 'login']);
Route::post('/register',[AuthController::class, 'register']);
Route::get('/getImage',[AuthController::class, 'getUserImageNameByEmail']);


Route::get('/getAllTea', [TeaController::class, 'getAll']);
Route::get('/getBlackTea', [TeaController::class, 'getBlackTea']);
Route::get('/getGreenTea', [TeaController::class, 'getGreenTea']);
Route::get('/getYellowTea', [TeaController::class, 'getYellowTea']);
Route::get('/getOolongTea', [TeaController::class, 'getOolongTea']);
Route::get('/getWhiteTea', [TeaController::class, 'getWhiteTea']);
Route::get('/getPuerhTea', [TeaController::class, 'getPuerhTea']);
Route::get('/getMatchaTea', [TeaController::class, 'getMatchaTea']);

Route::get('/getTea/{id}', [TeaController::class, 'getTeaById']);

