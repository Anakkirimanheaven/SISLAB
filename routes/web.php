<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KondisiController;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\BarangController;


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

Route::resource('kondisi', KondisiController::class);
Route::resource('merk', MerkController::class);
Route::resource('barang', BarangController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
