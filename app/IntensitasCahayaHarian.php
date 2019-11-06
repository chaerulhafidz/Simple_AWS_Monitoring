<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IntensitasCahayaHarian extends Model
{
    protected $table = 'intensitas_cahaya_harian';

    protected $fillable = [
        'rata_rata', 'tanggal'
    ];
}
