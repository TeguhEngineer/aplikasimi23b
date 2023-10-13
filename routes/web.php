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
Route::get('/kas', [AdminController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index']);
Route::post('/admin', [AdminController::class, 'authenticate']);

// User
Route::get('/mi23b', [AdminController::class, 'kas']);

// Admin
Route::get('/dashboard', [AdminController::class, 'dashboard']);
Route::resource('/daftarmahasiswa', DaftarMahasiswaController::class);
Route::resource('/pembayarankas', PembayaranKasController::class);
Route::resource('/laporan',LaporanController::class);
Route::post('/laporan', [LaporanController::class, 'pengeluaran']);
Route::resource('/informasi',InformasiController::class);

