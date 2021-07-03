<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\OperasionalController;
// use App\Http\Controllers\BarangTambahController;
use App\Http\Controllers\PenjualanController;

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

Route::get('/dashboard', [DashboardController::class, 'index']); 

// Route::get('/barang', [BarangController::class]);
Route::resource('barang', BarangController::class);

Route::get('/penjualan', [PenjualanController::class, 'index']);

Route::get('/operasional', [OperasionalController::class, 'index']);

