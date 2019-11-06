<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IntensitasCahaya extends Model
{
    protected $table = 'intensitas_cahaya';

    protected $fillable = [
        'nilai', 'tanggal'
    ];
}
