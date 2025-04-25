<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'supplier';  // Nama tabel
    protected $primaryKey = 'ID_SUPPLIER';  // Nama kolom primary key
    protected $fillable = [
        'NAMA_SUPPLIER',
        'ALAMAT_SUPPLIER',
        'TELEPON_SUPPLIER',
        'EMAIL_SUPPLIER',
    ];
}
