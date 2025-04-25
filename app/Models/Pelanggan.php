<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $primaryKey = 'ID_PELANGGAN';
    public $timestamps = false;

    protected $fillable = [
        'NAMA_PELANGGAN',
        'JENIS_KELAMIN'
    ];
}
