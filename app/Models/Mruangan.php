<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mruangan extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'id_ruangan', 'jenis_perbaikan', 'waktu_pengerjaan', 'id_kondisi'];
    public $timestamp = true;

    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class, 'id_ruangan');
    }

    public function kondisi()
    {
        return $this->belongsTo(Kondisi::class, 'id_kondisi');
    }

    public function mruangan()
    {
        return $this->hasMany(Mruangan::class, 'id_mruangan');
    }
}
