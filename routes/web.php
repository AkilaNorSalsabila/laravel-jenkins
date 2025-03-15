<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanutamaController;
use App\Http\Controllers\LoginController;

// Mengarahkan halaman utama ke HalamanutamaController
Route::get('/', [HalamanutamaController::class, 'index'])->name('halamanutama');

// Route untuk halaman utama secara eksplisit
Route::get('/halamanutama', [HalamanutamaController::class, 'index'])->name('halamanutama');

// Route untuk halaman login
Route::get('/login', [LoginController::class, 'index'])->name('login');
