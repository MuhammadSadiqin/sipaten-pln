<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AmrController;
use App\Http\Controllers\LbkbController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TigaPhasaController;
use App\Http\Controllers\GantiMeterController;
use App\Models\TigaPhasa;

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
                Route::get('amr-export', [AmrController::class, 'export'])->name('amr.export');
                Route::get('tigaphasa-export', [TigaPhasaController::class, 'export'])->name('tigaphasa.export');
                Route::get('gantimeter-export', [GantiMeterController::class, 'export'])->name('gantimeter.export');
                Route::get('lbkb-export', [LbkbController::class, 'export'])->name('Lbkb.export');
                Route::post('users-import', [UserController::class, 'import'])->name('users.import');

                Route::post('GantiMeter-import', [GantiMeterController::class, 'import'])->name('GantiMeter.import');


                Route::post('lbkb-import', [LbkbController::class, 'import'])->name('Lbkb.import');
                Route::post('Amr-import', [AmrController::class, 'import'])->name('Amr.import');
                Route::resource('users', UserController::class);
                Route::resource('gantimeter', GantiMeterController::class);
                Route::resource('tigaphasa', TigaPhasaController::class);
                Route::resource('lbkb', LbkbController::class);
                Route::resource('amr', AmrController::class);
        });
