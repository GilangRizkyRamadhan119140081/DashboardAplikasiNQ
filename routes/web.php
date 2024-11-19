<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
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
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'DashboardIndex'])->name('dashboard.index');

Route::get('/user', [UserController::class, 'UserIndex'])->name('user.index');
Route::get('/user/create', [UserController::class, 'UserCreate'])->name('user.create');
Route::post('/userStore', [UserController::class, 'UserStore'])->name('user.store');
Route::get('/user/{id}/edit', [UserController::class, 'UserEdit'])->name('user.edit');
Route::put('/user/{id}', [UserController::class, 'UserUpdate'])->name('user.update');
Route::delete('/user/{id}', [UserController::class, 'UserDestroy'])->name('user.destroy');


Route::get('/role', [RoleController::class, 'RoleIndex'])->name('role.index');
Route::get('/role/create', [RoleController::class, 'RoleCreate'])->name('role.create');
Route::post('/role', [RoleController::class, 'RoleCreate'])->name('role.store');

Route::get('/paket', [PaketController::class, 'PaketIndex'])->name('paket.index');
Route::get('/paket/create', [PaketController::class, 'PaketCreate'])->name('paket.create');
Route::post('/paketStore', [PaketController::class, 'PaketStore'])->name('paket.store');
Route::get('/paket/{id}/edit', [PaketController::class, 'PaketEdit'])->name('paket.edit');
Route::put('/paket/{id}', [PaketController::class, 'PaketUpdate'])->name('paket.update');
Route::delete('/paket/{id}', [PaketController::class, 'PaketDestroy'])->name('paket.destroy');

Route::get('/produk', [ProdukController::class, 'ProdukIndex'])->name('produk.index');
Route::get('/produk/create', [ProdukController::class, 'ProdukCreate'])->name('produk.create');
Route::post('/produkStore', [ProdukController::class, 'ProdukStore'])->name('produk.store');
Route::get('/produk/{id}/edit', [ProdukController::class, 'ProdukEdit'])->name('produk.edit');
Route::put('/produk/{id}', [ProdukController::class, 'ProdukUpdate'])->name('produk.update');
Route::delete('/produk/{id}', [ProdukController::class, 'ProdukDestroy'])->name('produk.destroy');

Route::get('/voucher', [VoucherController::class, 'VoucherIndex'])->name('voucher.index');
Route::get('/voucher/create', [VoucherController::class, 'VoucherCreate'])->name('voucher.create');
Route::post('/voucher', [ProdukController::class, 'VoucherCreate'])->name('voucher.store');

Route::get('/artikel', [ArtikelController::class, 'ArtikelIndex'])->name('artikel.index');
Route::get('/artikel/create', [ArtikelController::class, 'ArtikelCreate'])->name('artikel.create');
Route::post('/artikelStore', [ArtikelController::class, 'ArtikelStore'])->name('artikel.store');
Route::get('/artikel/draft', [ArtikelController::class, 'ArtikelDraft'])->name('artikel.draft');
Route::get('/artikel/{id}/edit', [ArtikelController::class, 'ArtikelEdit'])->name('artikel.edit');
Route::put('/artikel/{id}', [ArtikelController::class, 'ArtikelUpdate'])->name('artikel.update');
Route::delete('/artikel/{id}', [ArtikelController::class, 'ArtikelDestroy'])->name('artikel.destroy');

Route::get('/quote', [QuoteController::class, 'QuoteIndex'])->name('quote.index');
Route::get('/quote/create', [QuoteController::class, 'QuoteCreate'])->name('quote.create');
Route::post('/quoteStore', [QuoteController::class, 'QuoteStore'])->name('quote.store');
Route::get('/quote/{id}/edit', [QuoteController::class, 'QuoteEdit'])->name('quote.edit');
Route::put('/quote/{id}', [QuoteController::class, 'QuoteUpdate'])->name('quote.update');
Route::delete('/quote/{id}', [QuoteController::class, 'QuoteDestroy'])->name('quote.destroy');

Route::get('/konsultasi', [KonsultasiController::class, 'KonsultasiIndex'])->name('konsultasi.index');
Route::get('/sertifikat', [SertifikatController::class, 'SertifikatIndex'])->name('sertifikat.index');
Route::get('/training', [TrainingController::class, 'TrainingIndex'])->name('training.index');
