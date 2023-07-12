<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TigaPhasaController;
use App\Http\Controllers\GantiMeterController;

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

// Route::get('users-export', UserController::class)->name('users.export');


Route::prefix('dashboard')
    ->middleware(['auth:sanctum', 'admin'])
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('users-import', [UserController::class, 'import'])->name('users.import');
        Route::resource('users', UserController::class);
        Route::resource('gantimeter', GantiMeterController::class);
        Route::resource('tigaphasa', TigaPhasaController::class);
    });
