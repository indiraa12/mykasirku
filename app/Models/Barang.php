<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'data_barang';
    protected $primaryKey = 'id_barang';
    protected $fillable = [
        'id_barang', 'nama_barang', 'harga_barang', 'jumlah_barang'
    ];
}
