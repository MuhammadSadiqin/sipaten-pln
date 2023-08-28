<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AmrController;
use App\Http\Controllers\LbkbController;
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

// Route::get('/', function () {
//         return view('welcome');
// });

Route::get('show', function () {
        return view('profile.show');
});

// Route::get('users-export', UserController::class)->name('users.export');


// Route::middleware(['auth:sanctum', 'admin', 'petugas'])->group(function () {
Route::middleware(['auth:sanctum'])->group(function () {
        Route::middleware(['admin'])->group(function () {
                // Dashboard
                Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

                // FORM DETAIL
                Route::get('lbkb-detail-{id}', [LbkbController::class, 'showDetail'])->name('lbkb.detail');
                Route::get('amr-detail-{id}', [AmrController::class, 'showDetail'])->name('amr.detail');
                Route::get('gantimeter-detail-{id}', [GantiMeterController::class, 'showDetail'])->name('gantimeter.detail');
                Route::get('tigaphasa-detail-{id}', [TigaPhasaController::class, 'showDetail'])->name('tigaphasa.detail');

                // Update
                Route::patch('lbkb-update-{id}', [LbkbController::class, 'update'])->name('lbkb.update');
                Route::patch('amr-update-{id}', [AmrController::class, 'update'])->name('amr.update');
                Route::patch('gantimeter-update-{id}', [GantiMeterController::class, 'update'])->name('gantimeter.update');
                Route::patch('tigaphasa-update-{id}', [TigaPhasaController::class, 'update'])->name('tigaphasa.update');

                // History
                Route::get('amr-history', [AmrController::class, 'showhistory'])->name('amr.history');

                // Update Status
                Route::patch('/amr/{id}/update-status', [AmrController::class, 'updateStatus'])->name('update-status.amr');
                Route::patch('/gantimeter/{id}/update-status', [GantiMeterController::class, 'updateStatus'])->name('update-status.gantimeter');
                Route::patch('/tigaphasa/{id}/update-status', [TigaPhasaController::class, 'updateStatus'])->name('update-status.tigaphasa');
                Route::patch('/lbkb/{id}/update-status', [LbkbController::class, 'updateStatus'])->name('update-status.lbkb');

                // Generate PDF
                Route::get('generatepdf-amr/{id}', [AmrController::class, 'generatePdf'])->name('generatepdf.amr');
                Route::get('generatepdf-gantimeter/{id}', [GantiMeterController::class, 'generatePdf'])->name('generatepdf.gantimeter');
                Route::get('generatepdf-lbkb/{id}', [LbkbController::class, 'generatePdf'])->name('generatepdf.lbkb');
                Route::get('generatepdf-tigaphasa/{id}', [TigaPhasaController::class, 'generatePdf'])->name('generatepdf.tigaphasa');

                // Export
                Route::get('amr-export', [AmrController::class, 'export'])->name('amr.export');
                Route::get('tigaphasa-export', [TigaPhasaController::class, 'export'])->name('tigaphasa.export');
                Route::get('gantimeter-export', [GantiMeterController::class, 'export'])->name('gantimeter.export');
                Route::get('lbkb-export', [LbkbController::class, 'export'])->name('lbkb.export');

                // Import
                Route::post('GantiMeter-import', [GantiMeterController::class, 'import'])->name('GantiMeter.import');
                Route::post('tigaphasa-import', [TigaPhasaController::class, 'import'])->name('tigaphasa.import');
                Route::post('lbkb-import', [LbkbController::class, 'import'])->name('Lbkb.import');
                Route::post('Amr-import', [AmrController::class, 'import'])->name('Amr.import');

                // Resource
                Route::resource('users', UserController::class);
                Route::resource('gantimeter', GantiMeterController::class);
                Route::resource('tigaphasa', TigaPhasaController::class);
                Route::resource('lbkb', LbkbController::class);
                Route::resource('amr', AmrController::class);

                // User
                Route::get('user-create', [UserController::class, 'create'])->name('users.create');
        });
});

// Route::middleware(['auth:sanctum', 'petugas'])->group(function () {

//         Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
//         // Rute-rute resource yang hanya bisa diakses oleh petugas
//         Route::resource('gantimeter', GantiMeterController::class);
//         Route::resource('tigaphasa', TigaPhasaController::class);
//         Route::resource('lbkb', LbkbController::class);
//         Route::resource('amr', AmrController::class);
// });
