<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    protected $primaryKey = 'ID_TRANSAKSI';  
    protected $fillable = [
        'ID_PELANGGAN', 
        'TANGGAL_TRANSAKSI', 
        'TOTAL_HARGA', 
        'METODE_PEMBAYARAN'
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'ID_PELANGGAN');
    }
}
