<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KualitasUdara extends Model
{
    protected $table = 'kualitas_udara';

    protected $fillable = [
        'nilai', 'tanggal'
    ];
}
