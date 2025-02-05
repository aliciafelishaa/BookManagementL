<?php

use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('Kategori', KategoriController::class);
Route::put('/kategoriUpdate', [KategoriController::class, 'update'])->name('Kategori.update2');
