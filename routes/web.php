<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DatapegawaiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\AparaturController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\petugasRtController;
use App\Http\Controllers\petugasRwController;
use App\Http\Controllers\RiwayatVerifikasiAdmin;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
//bagian pages
use App\Http\Controllers\SktmController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPemohonController;
use App\Http\Controllers\UserPengajuan;

// Rute untuk halaman utama
Route::get('/', [HomeController::class, 'halamanutama'])->name('halamanutama');
// Route::get('/', function(){
//     return view('welcome');
// })->name('home');
Route::group(['middleware' => 'user'], function () {
    Route::get('/user/dashboard', [UserController::class, 'showdashboard'])->name('user_dashboard');
    Route::get('/user/pengajuansktm', [UserController::class, 'pengajuansktm'])->name('user_pengajuansktm');
    Route::get('/user/pemohon', [UserController::class, 'showpemohon'])->name('user_pemohon');
    Route::post('/user/pemohon/tambah', [UserPemohonController::class, 'showtambah'])->name('user_tambahpemohon');
    Route::put('/user/pemohon/edit/{id}', [UserPemohonController::class, 'update'])->name('user_editpemohon');
    Route::delete('/user/pemohon/hapus/{id}', [UserPemohonController::class, 'destroy'])->name('user_pemohon.hapus');
    Route::put('/user/claimpemohon/{id}', [UserPemohonController::class, 'claimpemohon']);
    Route::post('/user/tambahsktm', [UserPengajuan::class, 'tambahsktm'])->name('user.pengajuansktm');
});



Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'showAdminDashboard'])->name('admin_dashboard');
    Route::get('/admin/akunuser', [AdminController::class, 'showakunuser'])->name('showUser');
    Route::get('/admin/akunpetugas', [AdminController::class, 'showakunpetugas'])->name('showPetugas');
    Route::get('/admin/sktm', [AdminController::class, 'showsktmadmin'])->name('showsktmadmin');
    Route::put('/admin/update/permintaansktm/{id}', [AdminController::class, 'ubahstatusadmin'])->name('updatestatusadmin');
    Route::get('/admin/templatesktm/{id}', [AdminController::class, 'showtemplatesktm'])->name('templatesktm');
    Route::get('/admin/riwayat/', [AdminController::class, 'showriwayat'])->name('riwayat');

    //CRUD Account User
    Route::post('/admin/user/make', [AdminController::class, 'make'])->name('user.make');
    Route::put('/admin/akunuser/update/{id}', [AdminController::class, 'update'])->name('user.update');
    Route::delete('/admin/akunuser/delete/{id}', [AdminController::class, 'delete'])->name('user.delete');
    //CRUD Account Petugas
    Route::post('/admin/petugas/make', [AdminController::class, 'createPetugas'])->name('petugas.create');
    Route::put('/admin/akunpetugas/update/{id}', [AdminController::class, 'updatePetugas'])->name('petugas.update');
    Route::delete('/admin/akunpetugas/delete/{id}', [AdminController::class, 'deletePetugas'])->name('petugas.delete');
    Route::get('/riwayat', [AdminController::class, 'showRiwayat'])->name('showRiwayat');
    Route::delete('/riwayat/{id}', [AdminController::class, 'deleteRiwayat'])->name('delete.riwayat');
    Route::get('/akunuser', [AdminController::class, 'showakunuser'])->name('showUser');
});

Route::group(['middleware' => 'petugas_rt'], function () {
    Route::get('/petugasRt/dashboard', [petugasRtController::class, 'showpetugasRtDashboard'])->name('petugasRt_dashboard');
    Route::get('/petugasRt/permintaansktm', [petugasRtController::class, 'showSktmrt'])->name('sktmrt');
    Route::put('/petugasRt/update/permintaansktm/{id}', [petugasRtController::class, 'ubahstatus'])->name('updatestatus');
    Route::post('/verify-password', [petugasRtController::class, 'verifyPassword'])->name('verifyPassword');
});

Route::get('/logout', [AdminController::class, 'logout'])->name('keluar');

// Rute untuk halaman login
Route::middleware(['guest'])->group(function () {
});
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('form');
Route::post('/login', [AuthController::class, 'login'])->name('masuk');

// Register routes
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

//Rute untuk Login
// Route::middleware(['auth'])->group(function(){
//     //Rute Logout 
//     // Rute untuk halaman dashboard
//     Route::get('/dashboard', [AdminController::class, 'dashboardindex'])->name('dashboard');
//     //Rute Membuat Akun User
//     Route::get('/user', [AdminController::class, 'userindex'])->name('user');
//     Route::get('/create', [AdminController::class, 'create'])->name('user.create');
//     Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('user.edit');
//     Route::put('/update/{id}', [AdminController::class, 'update'])->name('user.update');
//     Route::delete('/delete/{id}', [AdminController::class, 'delete'])->name('user.delete');
//     Route::post('/make', [AdminController::class, 'make'])->name('user.make');
//     //Rute Untuk Membuat Petugas
//     Route::get('/petugas', [AdminController::class, 'indexPetugas'])->name('petugas');
//     Route::get('/createpetugas',[AdminController::class, 'makePetugas'])->name('create.petugas');
//     Route::get('/updatepetugas/{id}',[AdminController::class, 'updatePetugas'])->name('update.petugas');
//     Route::post('/addpetugas', [AdminController::class, 'createpetugas'])->name('add.petugas');
// });
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

//Bagaian Pages 
Route::get('/sktm', [SktmController::class, 'showsktm'])->name('sktm');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])
    ->name('password.reset');

Route::post('/reset-password', [ResetPasswordController::class, 'reset'])
    ->name('password.update');
Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');
