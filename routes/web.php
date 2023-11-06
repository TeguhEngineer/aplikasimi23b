<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DaftarMahasiswaController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PembayaranKasController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/login', [AdminController::class, 'index'])->name('login');
// Route::get('/admin', [AdminController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AdminController::class, 'authenticate']);

// User
Route::get('/mi23b', [AdminController::class, 'kas'])->middleware('auth')->middleware('can:user');

// Admin
Route::middleware('auth','can:admin')->group(function(){

    Route::post('/logout', [AdminController::class, 'logout']);
    Route::get('/dashboard', [AdminController::class, 'dashboard']);
    Route::resource('/daftarmahasiswa', DaftarMahasiswaController::class);
    Route::resource('/pembayarankas', PembayaranKasController::class);
    Route::resource('/laporan',LaporanController::class);
    Route::get('/print', [LaporanController::class, 'print']);
    Route::post('/laporanpost', [LaporanController::class, 'pengeluaran']);
    Route::resource('/informasi',InformasiController::class);
});

Route::get('/logout', function(){
    Auth::logout();
    return redirect('/login');
});

