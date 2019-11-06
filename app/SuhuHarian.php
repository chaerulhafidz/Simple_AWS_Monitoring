<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuhuHarian extends Model
{
    protected $table = 'suhu_harian';

    protected $fillable = [
        'rata_rata', 'tanggal'
    ];
}
