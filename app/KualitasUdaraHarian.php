<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KualitasUdaraHarian extends Model
{
    protected $table = 'kualitas_udara_harian';

    protected $fillable = [
        'rata_rata', 'tanggal'
    ];
}
