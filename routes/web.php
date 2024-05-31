<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DatapegawaiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\AparaturController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\LayananController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// Rute untuk halaman utama
Route::get('/', [HomeController::class, 'index']);

// Rute untuk halaman login
Route::middleware(['guest'])->group(function(){
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('form');
    Route::post('/login',[AuthController::class,'login'])->name('masuk');    
});

//Rute untuk Login
Route::middleware(['auth'])->group(function(){
    //Rute Logout 
    Route::get('/logout',[AdminController::class,'logout'])->name('keluar');
    // Rute untuk halaman dashboard
    Route::get('/dashboard', [AdminController::class, 'dashboardindex'])->name('dashboard');
    //Rute Membuat Akun User
    Route::get('/user', [AdminController::class, 'userindex'])->name('user');
    Route::get('/create', [AdminController::class, 'create'])->name('user.create');
    Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('user.edit');
    Route::put('/update/{id}', [AdminController::class, 'update'])->name('user.update');
    Route::delete('/delete/{id}', [AdminController::class, 'delete'])->name('user.delete');
    Route::post('/make', [AdminController::class, 'make'])->name('user.make');
    //Rute Untuk Membuat Petugas
    Route::get('/petugas', [AdminController::class, 'indexPetugas'])->name('petugas');
    Route::get('/createpetugas',[AdminController::class, 'makePetugas'])->name('create.petugas');
    Route::get('/updatepetugas/{id}',[AdminController::class, 'updatePetugas'])->name('update.petugas');
    Route::post('/addpetugas', [AdminController::class, 'createpetugas'])->name('add.petugas');
});
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

