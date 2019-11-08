<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KondisiCuacaPerjam extends Model
{
    protected $table = 'kondisi_cuaca_perjam';

    protected $fillable = [
        'rata_rata', 'tanggal'
    ];
}
