<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    KategoriController,
    BarangController,
    SuplierController,
    PembeliController,
    PembelianController,
    PenjualanController,
    DashboardController
};

Route::get('/', [DashboardController::class, 'index']);

//route barang
Route::resource('/barang',BarangController::class);
Route::get('/barang/{id}/hapus',[BarangController::class, 'destroy']);
Route::get('/barang/{id}/edit',[BarangController::class, 'edit']);

//route kategori
Route::resource('/kategori',KategoriController::class);
Route::get('/kategori/hapus/{id}',[KategoriController::class, 'destroy']);
Route::get('/kategori/edit/{id}',[KategoriController::class, 'edit']);

//route suplier
Route::resource('/suplier',SuplierController::class);
Route::get('/suplier/{id}/hapus',[SuplierController::class, 'destroy']);
Route::get('/suplier/edit{id}',[SuplierController::class, 'edit']);

//route pembeli
Route::resource('/pembeli',PembeliController::class);
Route::get('/pembeli/{id}/hapus', [PembeliController::class, 'destroy']);
Route::get('/pembeli/edit/{id}', [PembeliController::class, 'edit']);

//route pembelian
Route::resource('/pembelian',PembelianController::class);
Route::get('/pembelian/{id}/hapus',[PembelianController::class, 'destroy']);
Route::get('/pembelian/edit/{id}',[PembelianController::class, 'edit']);

//route penjualan
Route::resource('/penjualan',PenjualanController::class);
Route::get('/penjualan/{id}/hapus',[PenjualanController::class, 'destroy']);
Route::get('/penjualan/edit/{id}',[PenjualanController::class, 'edit']);


