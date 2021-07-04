<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\OperasionalController;
use App\Http\Controllers\RegistrasiController;

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





Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/barang', [BarangController::class, 'index'])->name('barang');
Route::get('/operasional', [OperasionalController::class, 'index'])->name('operasional'); 
Route::get('/barang/add', [BarangController::class, 'add']);


// hak akses untuk admin
Route::group(['middleware' => 'directure'], function (){
    Route::get('/registrasi', [RegistrasiController::class, 'index'])->name('registrasi');
});