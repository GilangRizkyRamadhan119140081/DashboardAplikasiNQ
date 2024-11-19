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
// user route
Route::get('/user', [UserController::class, 'UserIndex'])->name('user.index');
Route::get('/user/create', [UserController::class, 'UserCreate'])->name('user.create');
Route::post('/userStore', [UserController::class, 'UserStore'])->name('user.store');
Route::get('/user/{id}/edit', [UserController::class, 'UserEdit'])->name('user.edit');
Route::put('/user/{id}', [UserController::class, 'UserUpdate'])->name('user.update');
Route::delete('/user/{id}', [UserController::class, 'UserDestroy'])->name('user.destroy');

// role route
Route::get('/role', [RoleController::class, 'RoleIndex'])->name('role.index');
Route::get('/role/create', [RoleController::class, 'RoleCreate'])->name('role.create');
Route::post('/role', [RoleController::class, 'RoleCreate'])->name('role.store');

// paket route
Route::get('/paket', [PaketController::class, 'PaketIndex'])->name('paket.index');
Route::get('/paket/create', [PaketController::class, 'PaketCreate'])->name('paket.create');
Route::post('/paketStore', [PaketController::class, 'PaketStore'])->name('paket.store');
Route::get('/paket/{id}/edit', [PaketController::class, 'PaketEdit'])->name('paket.edit');
Route::put('/paket/{id}', [PaketController::class, 'PaketUpdate'])->name('paket.update');
Route::delete('/paket/{id}', [PaketController::class, 'PaketDestroy'])->name('paket.destroy');

// produk route
Route::get('/produk', [ProdukController::class, 'ProdukIndex'])->name('produk.index');

// voucher route
Route::get('/voucher', [VoucherController::class, 'VoucherIndex'])->name('voucher.index');
Route::get('/voucher/create', [VoucherController::class, 'VoucherCreate'])->name('voucher.create');
Route::post('/voucher', [ProdukController::class, 'VoucherCreate'])->name('voucher.store');

// artikel route
Route::get('/artikel', [ArtikelController::class, 'ArtikelIndex'])->name('artikel.index');

// quote route
Route::get('/quote', [QuoteController::class, 'QuoteIndex'])->name('quote.index');
Route::get('/quote/create', [QuoteController::class, 'QuoteCreate'])->name('quote.create');
Route::post('/quote', [QuoteController::class, 'QuoteCreate'])->name('quote.store');

// konsultasi route
Route::get('/konsultasi', [KonsultasiController::class, 'KonsultasiIndex'])->name('konsultasi.index');
// sertifikat route
Route::get('/sertifikat', [SertifikatController::class, 'SertifikatIndex'])->name('sertifikat.index');
// training route
Route::get('/training', [TrainingController::class, 'TrainingIndex'])->name('training.index');
