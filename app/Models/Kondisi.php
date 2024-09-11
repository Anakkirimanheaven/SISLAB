<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kondisi extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'kondisi'];
    public $timestamps = true;

    public function kondisi()
    {
        return $this->hasMany(Kondisi::class, 'id_kondisi');
    }
}
