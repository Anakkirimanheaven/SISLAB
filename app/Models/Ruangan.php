<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
    use HasFactory;
      protected $filLable = ['id', 'nama_ruangan','nama_pic','jml_komputer','jml_leptop'];
    public $timestamps = true;

    public function ruangan()
    {
        return $this->hasMany(Ruangan::class, 'id_ruangan');
    }

}
