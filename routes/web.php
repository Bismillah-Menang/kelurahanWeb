<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DatapegawaiController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/', [HomeController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'dashboardindex'])->name('dashboard');
Route::get('/data-pegawai', [DataPegawaiController::class, 'index'])->name('data-pegawai');