<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    KategoriController,
    BarangController
};

Route::get('/', function () {
    return view('home');
});

//route barang
Route::resource('/barang',BarangController::class);
Route::get('/barang/{id}/hapus',[BarangController::class, 'destroy']);
Route::get('/barang/{id}/edit',[BarangController::class, 'edit']);

//route kategori
Route::resource('/kategori',KategoriController::class);
Route::get('/kategori/hapus/{id}',[KategoriController::class, 'destroy']);
Route::get('/kategori/edit/{id}',[KategoriController::class, 'edit']);


Route::get('/suplier', function () {
    return view('suplier.index');
});
Route::get('/pembeli', function () {
    return view('pembeli.index');
});
Route::get('/pembelian', function () {
    return view('pembelian.index');
});
Route::get('/penjualan', function () {
    return view('penjualan.index');
});