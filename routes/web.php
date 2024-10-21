<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContohController;
use App\Http\Controllers\ProdukController;


Route::get('/', function () {
    return view('welcome');
});

// Correcting method name to TampilContoh
Route::get('/contoh', [ContohController::class, 'TampilContoh']);
Route::get('/produk', [ProdukController::class, 'ViewProduk']);
Route::get('/produk/add', [ProdukController::class, 'ViewAddProduk']);
Route::post('/produk/add', [ProdukController::class, 'CreateProduk']);
Route::delete('/produk/delete/{id}', [ProdukController::class, 'DeleteProduk'])->name('produk.delete');
Route::get('/produk/edit/{id}', [ProdukController::class, 'ViewEditProduk'])->name('produk.edit');
Route::put('/produk/update/{id}', [ProdukController::class, 'UpdateProduk'])->name('produk.update');
Route::get('/produk', [ProdukController::class, 'ViewProduk'])->name('produk.view');




