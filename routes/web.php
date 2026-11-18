<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KalkulatorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga']);
Route::post('/kalkulator/segitiga/proses', [KalkulatorController::class, 'hitungSegitiga']);
