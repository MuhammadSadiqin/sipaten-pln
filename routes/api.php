<?php

use App\Http\Controllers\API\AmrController;
use App\Http\Controllers\API\GantiMeterController;
use App\Http\Controllers\API\LbkbController;
use App\Http\Controllers\API\TigaPhasaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;

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

Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [UserController::class, 'logout']);
});

Route::post('login', [UserController::class, 'login']);


Route::get('gantimeter', [GantiMeterController::class, 'all']);
Route::get('tigaphasa', [TigaPhasaController::class, 'all']);
Route::get('amr', [AmrController::class, 'all']);
Route::get('lbkb', [LbkbController::class, 'all']);
