<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DatapegawaiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\AparaturController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\LayananController;
use Illuminate\Support\Facades\Route;

// Rute untuk halaman utama
Route::get('/', [HomeController::class, 'index']);

// Rute untuk halaman login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Rute untuk halaman dashboard
Route::get('/dashboard', [DashboardController::class, 'dashboardindex'])->name('dashboard');

// Rute untuk halaman data pegawai
Route::get('/data-pegawai', [DataPegawaiController::class, 'index'])->name('data-pegawai');

// Rute untuk halaman visi dan misi
Route::get('/visi-misi', [VisiMisiController::class, 'showVisiMisi'])->name('visimisi');
// routes/web.php
// Rute untuk halaman aparatur
Route::get('/aparatur', [AparaturController::class, 'showAparatur'])->name('aparatur');
// routes/web.php
// Rute untuk halaman struktur organisasi
Route::get('/strukturorganisasi', [StrukturOrganisasiController::class, 'showStrukturOrganisasi'])->name('strukturorganisasi');
// routes/web.php
// Rute untuk halaman layanan
Route::get('/layanan', [LayananController::class, 'showLayanan'])->name('layanan');
// routes/web.php

// Definisikan rute untuk halaman home
Route::get('/home', function () {
    return view('frontend.home');
})->name('home');  // Memberikan nama "home" pada rute ini

