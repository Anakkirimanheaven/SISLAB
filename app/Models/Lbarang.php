<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lbarang extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'id_pbarang', 'kondisi', 'dokumentasi', 'keterangan'];
    public $timestamp = true;

    public function pbarang()
    {
        return $this->belongsTo(Pbarang::class, 'id_pbarang');
    }

    public function kondisi()
    {
        return $this->belongsTo(Kondisi::class, 'id_kondisi');
    }
}
