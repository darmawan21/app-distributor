<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\OperasionalController;
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

Route::resource('barang', BarangController::class);
Route::get('/laporan-barang', [BarangController::class, 'report']);

Route::resource('penjualan', PenjualanController::class);

Route::resource('operasional', OperasionalController::class);
Route::get('/laporan-operasional', [OperasionalController::class, 'report']);

