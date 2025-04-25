<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $table = 'obat';
    protected $primaryKey = 'ID_OBAT';
    public $timestamps = false;

    protected $fillable = [
        'NAMA_OBAT',
        'KATEGORI',
        'KETERANGAN',
        'JUMLAH_STOCK',
        'HARGA',
        'EXP',
        'ID_SUPPLIER'
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'ID_SUPPLIER');
    }
}
