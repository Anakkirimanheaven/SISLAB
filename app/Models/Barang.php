<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_barang', 'id_merk', 'ruangan', 'id_kondisi', 'posisi', 'spek'];
    public $timestamps = true;

    public function barang()
    {
        return $this->hasMany(barang::class, 'id_barang');
    }
}
