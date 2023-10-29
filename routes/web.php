<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DaftarMahasiswaController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PembayaranKasController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Login Authentikasi
Route::get('/', [UserController::class, 'index']);
Route::get('/login', [AdminController::class, 'index'])->name('login')->middleware('guest');
// Route::get('/admin', [AdminController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AdminController::class, 'authenticate']);

// User
Route::get('/mi23b', [AdminController::class, 'kas'])->middleware('auth');

// Admin
Route::post('/logout', [AdminController::class, 'logout']);
Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware('auth');
Route::resource('/daftarmahasiswa', DaftarMahasiswaController::class)->middleware('auth');
Route::resource('/pembayarankas', PembayaranKasController::class)->middleware('auth');
Route::resource('/laporan',LaporanController::class)->middleware('auth');
Route::post('/laporanpost', [LaporanController::class, 'pengeluaran'])->middleware('auth');
Route::resource('/informasi',InformasiController::class)->middleware('auth');

