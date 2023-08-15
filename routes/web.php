<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AmrController;
use App\Http\Controllers\LbkbController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TigaPhasaController;
use App\Http\Controllers\GantiMeterController;
use App\Http\Controllers\PdfController;
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

Route::get('show', function () {
        return view('profile.show');
});

// Route::get('users-export', UserController::class)->name('users.export');


Route::middleware(['auth:sanctum', 'admin'])->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        // History
        Route::get('amr-history', [AmrController::class, 'showhistory'])->name('amr.history');
        // Route::get('amr-histori', [AmrController::class, 'tampilkanRiwayat'])->name('amr.riwayat');

        // Submit
        Route::post('/submit-amr/{id}', [AmrController::class, 'submitAmr'])->name('submit.amr');

        // Update Status
        Route::patch('/amr/{id}/update-status', [AmrController::class, 'updateStatus'])->name('update-status.amr');
        Route::patch('/gantimeter/{id}/update-status', [GantiMeterController::class, 'updateStatus'])->name('update-status.gantimeter');
        Route::patch('/tigaphasa/{id}/update-status', [TigaPhasaController::class, 'updateStatus'])->name('update-status.tigaphasa');
        Route::patch('/lbkb/{id}/update-status', [LbkbController::class, 'updateStatus'])->name('update-status.lbkb');

        // Generate PDF
        Route::get('generatepdf-amr{id}', [AmrController::class, 'generatePdf'])->name('generatepdf.amr');
        Route::get('generatepdf-gantimeter/{id}', [GantiMeterController::class, 'generatePdf'])->name('generatepdf.gantimeter');
        Route::get('generatepdf-lbkb/{id}', [LbkbController::class, 'generatePdf'])->name('generatepdf.lbkb');
        Route::get('generatepdf-tigaphasa/{id}', [TigaPhasaController::class, 'generatePdf'])->name('generatepdf.tigaphasa');

        // Export
        Route::get('amr-export', [AmrController::class, 'export'])->name('amr.export');
        Route::get('tigaphasa-export', [TigaPhasaController::class, 'export'])->name('tigaphasa.export');
        Route::get('gantimeter-export', [GantiMeterController::class, 'export'])->name('gantimeter.export');
        Route::get('lbkb-export', [LbkbController::class, 'export'])->name('lbkb.export');

        // Import
        Route::post('users-import', [UserController::class, 'import'])->name('users.import');
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
});
