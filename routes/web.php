<?php

use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/home', function () {
        return view('core.dashboard');
    });
    Route::resource('/data-siswa', SiswaController::class);
    Route::get('/data-siswa/profile/{nis}', [SiswaController::class, 'ShowProfile']);
    Route::get('/tagihan/{nis}', [SiswaController::class, 'ShowTagihan']);
    Route::get('/cetak/{nis}', [SiswaController::class, 'nota']);
    Route::resource('/pembayaran', PembayaranController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
