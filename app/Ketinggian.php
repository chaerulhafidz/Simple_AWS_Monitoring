<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ketinggian extends Model
{
    protected $table = 'ketinggian';

    protected $fillable = [
        'nilai', 'tanggal'
    ];
}
