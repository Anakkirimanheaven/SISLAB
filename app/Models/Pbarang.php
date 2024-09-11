<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pbarang extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_peminjam', 'email', 'instansi', 'id_barang', 'id_ruangan', 'tanggal_peminjaman', 'keterangan', 'id_kondisi', 'dokumentasi'];
    public $timestamp = true;

    public function pbarang()
    {
        return $this->hasMany(Pbarang::class, 'id_pbarang');
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }

    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class, 'id_ruangan');
    }

    public function kondisi()
    {
        return $this->belongsTo(Kondisi::class, 'id_kondisi');
    }

    public function deleteImage()
    {
        if ($this->dokumentasi && file_exists(public_path('images/barang/' . $this->dokumentasi))) {
            return unlink(public_path('images/barang/' . $this->dokumentasi));
        }
    }
}
