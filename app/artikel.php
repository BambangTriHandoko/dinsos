<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    protected $table = 'artikel';


    protected $fillable = ['judul','isi','gambar','kategori'];
}
