<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TekananUdaraHarian extends Model
{
    protected $table = 'tekanan_udara_harian';

    protected $fillable = [
        'rata_rata', 'tanggal'
    ];
}
