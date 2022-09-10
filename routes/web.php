<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\MutasiController;

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

Route::get('/', function () {
    return view('home');
});

// Barang
Route::get('/barang', [BarangController::class, 'index']);
Route::post('/barang/add', [BarangController::class, 'add']);
Route::get('/barang/edit/{kode}', [BarangController::class, 'edit']);
Route::post('/barang/update', [BarangController::class, 'update']);
Route::get('/barang/delete/{kode}', [BarangController::class, 'delete']);

// Mutasi
Route::get('/mutasi/data', [MutasiController::class, 'index']);
Route::get('/mutasi/input_mutasi', [MutasiController::class, 'form']);
Route::post('/mutasi/add', [MutasiController::class, 'add']);
Route::get('/mutasi/edit/{kode}', [MutasiController::class, 'edit']);
Route::post('/mutasi/update', [MutasiController::class, 'update']);
Route::get('/mutasi/delete/{kode}', [MutasiController::class, 'delete']);

Route::get('/mutasi/cari_mutasi', [MutasiController::class, 'cari_mutasi']);
Route::post('/mutasi/search', [MutasiController::class, 'search']);
