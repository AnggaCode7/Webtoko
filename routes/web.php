<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SalesProdukController;
use App\Http\Controllers\ListProdukController;

<<<<<<< Updated upstream
Route::get('/listproduk', [ListProdukController::class, 'show']);
=======
Route::get('/listproduk', [ListProdukController::class, 'show']);
Route::post('/listproduk', [ListProdukController::class, 'simpan'])->name('produk.simpan');
Route::delete('/listproduk/{id}', [ListProdukController::class, 'delete'])->name('produk.delete');
>>>>>>> Stashed changes
