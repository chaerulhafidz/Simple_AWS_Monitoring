<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KondisiCuaca extends Model
{
    protected $table = 'kondisi_cuaca';

    protected $fillable = [
        'nilai', 'tanggal'
    ];
}
