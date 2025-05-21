<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Salam STT NF, Selamat Datang di Laravel";
});

Route::get('/admin', function () {
    return "Ini Halaman Admin";
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);