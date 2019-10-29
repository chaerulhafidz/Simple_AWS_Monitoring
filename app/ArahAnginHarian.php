<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArahAnginHarian extends Model
{
    protected $table = 'arah_angin_hari';

    protected $fillable = [
        'rataan', 'tanggal'
    ];
}
