<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function() {
    Route::resource('pasien', App\Http\Controllers\PasienController::class);
    Route::resource('poli', App\Http\Controllers\PoliController::class);
    Route::resource('daftar', App\Http\Controllers\DaftarController::class);
});