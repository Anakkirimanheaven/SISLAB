<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KondisiController;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\PbarangController;
use App\Http\Controllers\LbarangController;
use App\Http\Controllers\MruanganController;
use App\Http\Controllers\LmruanganController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::resource('kondisi', KondisiController::class);
Route::resource('merk', MerkController::class);
Route::resource('barang', BarangController::class);
Route::resource('ruangan', RuanganController::class);
Route::resource('pbarang', PbarangController::class);
Route::resource('lbarang', LbarangController::class);
Route::resource('mruangan', MruanganController::class);
Route::resource('lmruangan', LmruanganController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
