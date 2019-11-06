<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArahAngin extends Model
{
    protected $table = 'arah_angin';

    protected $fillable = [
      'nilai', 'tanggal'
    ];
}
