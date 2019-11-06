<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelembaban extends Model
{
    protected $table = 'kelembaban';

    protected $fillable = [
        'nilai', 'tanggal'
    ];
}
