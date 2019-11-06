<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KelembabanHarian extends Model
{
    protected $table = 'kelembaban_harian';

    protected $fillable = [
        'rata_rata', 'tanggal'
    ];
}
