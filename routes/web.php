<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\PerhitunganController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect()->route('siswa.create');
});

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
// route untuk add data siswa, lihat data siswa
Route::controller(SiswaController::class)->prefix('siswa')->name('siswa.')->group(function() {
    Route::get('/', 'index')->name('table');

    Route::get('create', 'create')->name('create');
    Route::post('create', 'store')->name('store');
});

// route untuk perhitungan luas persegi, luas segitia, luas lingkaran, volume kubus, volume tabung, volume limas
Route::controller(PerhitunganController::class)->prefix('perhitungan')->name('perhitungan.')->group(function() {
    Route::get('/', 'index')->name('list');

    Route::prefix('luas')->name('luas.')->group(function() {
        Route::get('persegi', 'luas_persegi')->name('persegi');
        Route::post('persegi', 'hasil_luas_persegi');

        Route::get('segitiga', 'luas_segitiga')->name('segitiga');
        Route::post('segitiga', 'hasil_luas_segitiga');

        Route::get('lingkaran', 'luas_lingkaran')->name('lingkaran');
        Route::post('lingkaran', 'hasil_luas_lingkaran');
    });
    
    Route::prefix('volume')->name('volume.')->group(function() {
        Route::get('kubus', 'volume_kubus')->name('kubus');
        Route::post('kubus', 'hasil_volume_kubus');

        Route::get('limas', 'volume_limas')->name('limas');
        Route::post('limas', 'hasil_volume_limas');

        Route::get('tabung', 'volume_tabung')->name('tabung');
        Route::post('tabung', 'hasil_volume_tabung');
    });
});

// Route::controller(DataController::class)->prefix('data')->name('data.')->group(function() {
//     Route::get('/', 'index')->name('export');

//     Route::get('export/siswa', 'siswa')->name('export.siswa');
//     Route::get('export/perhitungan', 'perhitungan')->name('export.perhitungan');
// });

Route::get('/data', [DataController::class, 'index'])->name('data.export');
Route::get('/data/siswa', [DataController::class, 'siswa'])->name('data.export.siswa');
Route::get('/data/perhitungan', [DataController::class, 'perhitungan'])->name('data.export.perhitungan');