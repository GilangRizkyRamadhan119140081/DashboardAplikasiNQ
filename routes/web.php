<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;


Route::get('/', function () {
    return view('admin.layouts.index');
});

Route::get('/user', [UserController::class, 'UserIndex'])->name('user.index');
Route::get('/paket', [PaketController::class, 'PaketIndex'])->name('paket.index');
Route::get('/voucher', [VoucherController::class, 'VoucherIndex'])->name('voucher.index');
Route::get('/artikel', [ArtikelController::class, 'ArtikelIndex'])->name('artikel.index');
Route::get('/quote', [QuoteController::class, 'QuoteIndex'])->name('quote.index');
Route::get('/konsultasi', [KonsultasiController::class, 'KonsultasiIndex'])->name('konsultasi.index');
Route::get('/sertifikat', [SertifikatController::class, 'SertifikatIndex'])->name('sertifikat.index');
Route::get('/training', [TrainingController::class, 'TrainingIndex'])->name('training.index');
