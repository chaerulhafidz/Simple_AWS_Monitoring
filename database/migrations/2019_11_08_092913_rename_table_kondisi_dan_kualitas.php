<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameTableKondisiDanKualitas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('kualitas_udara_harian', 'kualitas_udara_perjam');
        Schema::rename('kondisi_cuaca_harian', 'kondisi_cuaca_perjam');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('kualitas_udara_perjam', 'kualitas_udara_harian');
        Schema::rename('kondisi_cuaca_perjam', 'kondisi_cuaca_harian');
    }
}
