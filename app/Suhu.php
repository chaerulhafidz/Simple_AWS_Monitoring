<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suhu extends Model
{
    protected $table = 'suhu';

    protected $fillable = [
        'nilai', 'tanggal'
    ];
}
