<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PenerbitController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('kategori', KategoriController::class);
Route::resource('penerbit', PenerbitController::class);
// Route::put('/kategori/{kategori}', [KategoriController::class, 'update'])->name('kategori.update2');
