<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KondisiCuacaHarian extends Model
{
    protected $table = 'kondisi_cuaca_harian';

    protected $fillable = [
        'rata_rata', 'tanggal'
    ];
}
