<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TekananUdara extends Model
{
    protected $table = 'tekanan_udara';

    protected $fillable = [
        'nilai', 'tanggal'
    ];
}
