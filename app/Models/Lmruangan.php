<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lmruangan extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'id_mruangan'];
    public $timestamp = true;

    public function mruangan()
    {
        return $this->belongsTo(Mruangan::class, 'id_mruangan');
    }
}
