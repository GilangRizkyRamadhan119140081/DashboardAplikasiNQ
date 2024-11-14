<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PaketController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\VoucherController;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\QuoteController;
use App\Http\Controllers\Admin\KonsultasiController;
use App\Http\Controllers\Admin\SertifikatController;
use App\Http\Controllers\Admin\TrainingController;


Route::get('/', function () {
    return view('admin.layouts.index');
});

Route::get('/user', [UserController::class, 'UserIndex'])->name('user.index');
Route::get('/user/create', [UserController::class, 'UserCreate'])->name('user.create');
Route::post('/user', [UserController::class, 'UserCreate'])->name('user.store');

Route::get('/role', [RoleController::class, 'RoleIndex'])->name('role.index');
Route::get('/role/create', [RoleController::class, 'RoleCreate'])->name('role.create');
Route::post('/role', [RoleController::class, 'RoleCreate'])->name('role.store');

Route::get('/paket', [PaketController::class, 'PaketIndex'])->name('paket.index');
Route::get('/paket/create', [paketController::class, 'PaketCreate'])->name('paket.create');
Route::post('/paket', [paketController::class, 'PaketCreate'])->name('paket.store');

Route::get('/produk', [ProdukController::class, 'ProdukIndex'])->name('produk.index');
Route::get('/produk/create', [ProdukController::class, 'ProdukCreate'])->name('produk.create');
Route::post('/produk', [ProdukController::class, 'ProdukCreate'])->name('produk.store');

Route::get('/voucher', [VoucherController::class, 'VoucherIndex'])->name('voucher.index');
Route::get('/voucher/create', [VoucherController::class, 'VoucherCreate'])->name('voucher.create');
Route::post('/voucher', [ProdukController::class, 'VoucherCreate'])->name('voucher.store');

Route::get('/artikel', [ArtikelController::class, 'ArtikelIndex'])->name('artikel.index');
Route::get('/artikel/create', [ArtikelController::class, 'ArtikelCreate'])->name('artikel.create');
Route::get('/ckEditorUpload', [ArtikelController::class, 'ckEditorUpload'])->name('ckEditorUpload');

Route::get('/quote', [QuoteController::class, 'QuoteIndex'])->name('quote.index');
Route::get('/quote/create', [QuoteController::class, 'QuoteCreate'])->name('quote.create');
Route::get('/quote', [QuoteController::class, 'QuoteCreate'])->name('quote.store');

Route::get('/konsultasi', [KonsultasiController::class, 'KonsultasiIndex'])->name('konsultasi.index');
Route::get('/sertifikat', [SertifikatController::class, 'SertifikatIndex'])->name('sertifikat.index');
Route::get('/training', [TrainingController::class, 'TrainingIndex'])->name('training.index');
