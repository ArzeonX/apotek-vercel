<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
# supplier
use App\Http\Controllers\SupplierController;
Route::resource('supplier', SupplierController::class);

# pelanggan 
use App\Http\Controllers\PelangganController;
Route::resource('pelanggan', PelangganController::class);

# obat 
use App\Http\Controllers\ObatController;
Route::resource('obat', ObatController::class);

# transaksi
use App\Http\Controllers\TransaksiController;
Route::resource('transaksi', TransaksiController::class);

# detail transaksi
use App\Http\Controllers\DetailTransaksiController;
Route::resource('detailTransaksi', DetailTransaksiController::class);



