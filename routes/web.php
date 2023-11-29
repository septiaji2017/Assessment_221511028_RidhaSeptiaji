<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\TenanController;
use App\Http\Controllers\NotaController;

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

Route::get('/barangs', [BarangController::class, 'index'])->name('barang.index'); 

Route::get('/kasir', [KasirController::class, 'index'])->name('kasir.index'); 

Route::get('/tenan', [TenanController::class, 'index'])->name('tenan.index'); 

Route::get('/nota', [NotaController::class, 'index'])->name('nota.index');

Route::get('/barangs/input', [BarangController::class, 'add'])->name('barang.create');

Route::post('/barang/store', [BarangController::class, 'store'])->name('barang.store');

Route::get('/barang/{id}/edit', [BarangController::class, 'edit'])->name('barang.edit');

Route::put('/barang/{id}', [BarangController::class, 'update'])->name('barang.update');

Route::delete('/barang/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');

