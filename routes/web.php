<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ReturnController;

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

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login-proses', [AuthController::class, 'loginProcess'])->name('loginProcess');
Route::get('/keluar', [AuthController::class, 'logout'])->name('logout');


# code...
Route::group([
    'middleware' => ['auth']
], function() {
    Route::get('/beranda', [MainController::class, 'dashboard'])->name('dashboard')->middleware('disableBack');

    // tambah barang
    Route::get('/tambah-barang', [MainController::class , 'tambahBarang'])->name('tambahBarang')->middleware('disableBack');
    Route::post('/tambah-barang-proses', [MainController::class , 'tambahBarangProses'])->name('tambahBarangProses');

    Route::get('/ubah-barang/{id}', [MainController::class, 'ubahBarang'])->name('ubahBarang')->middleware('disableBack');
    Route::post('/ubah-barang/{id}/proses', [MainController::class, 'ubahBarangProses'])->name('ubahBarangProses');

    Route::get('/hapus-barang/{id}', [MainController::class, 'hapusBarang'])->name('hapusBarang')->middleware('disableBack');

    // peminjaman
    Route::get('/peminjaman-barang', [LoanController::class, 'loan'])->name('loan')->middleware('disableBack');
    Route::post('/peminjaman-barang-proses', [LoanController::class, 'loanProcess'])->name('loanProcess');


    // pengembalian
    Route::get('/pengembalian-barang', [LoanController::class, 'returnGoods'])->name('returnGoods')->middleware('disableBack');
    Route::get('/pengembalian-barang-proses/{id}', [LoanController::class, 'returnGoodsProcess'])->name('returnGoodsProcess');


    // riwayat
    Route::get('/riwayat-peminjaman', [LoanController::class, 'history'])->name('history')->middleware('disableBack');


    // print
    Route::get('/print', [LoanController::class, 'print'])->name('print');
});