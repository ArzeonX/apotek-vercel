<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;

    protected $table = 'pembelian_obat'; // Nama tabel
    protected $primaryKey = 'ID_PEMBELIAN'; // Primary Key
    public $timestamps = false; // Matikan timestamps jika tidak digunakan

    // Field yang bisa diisi (mass assignable)
    protected $fillable = [
        'ID_PELANGGAN', 
        'ID_OBAT', 
        'QTY', 
        'ID_TRANSAKSI'
    ];

    // Relasi dengan model Pelanggan
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'ID_PELANGGAN');
    }

    // Relasi dengan model Obat
    public function obat()
    {
        return $this->belongsTo(Obat::class, 'ID_OBAT');
    }

    // Relasi dengan model Transaksi
    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'ID_TRANSAKSI');
    }
}
