<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visual extends Model
{
    protected $table = 'visual';
    protected $fillable = ['kecamatan','PMKS','PSKS'];
}
