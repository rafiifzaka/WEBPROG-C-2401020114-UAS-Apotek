<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return redirect('/produk');
});

Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create'); // <--- ini penting
Route::post('/produk/store', [ProdukController::class, 'store'])->name('produk.store');
Route::get('/produk/delete/{id}', [ProdukController::class, 'delete'])->name('produk.delete');
