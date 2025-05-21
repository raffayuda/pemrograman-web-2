<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('porfil');
});

Route::get('/salam', function () {
    return "Salam STT NF, Selamat Datang di Laravel";
});

Route::get('/admin', function () {
    return "Ini Halaman Admin";
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/produk/{id}', function ($id) {
    return view('produk.index', ['id' => $id]);
});

Route::get('/prodi', [ProdiController::class, 'show']);
Route::get('/books', [BookController::class, 'index']);