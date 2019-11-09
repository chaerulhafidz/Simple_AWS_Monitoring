<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KualitasUdaraPerjam extends Model
{
    protected $table = 'kualitas_udara_perjam';

    protected $fillable = [
        'rata_rata', 'tanggal'
    ];
}
