<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSemua extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suhu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nilai');
            $table->dateTime('tanggal');
            $table->timestamps();
        });

        Schema::create('suhu_harian', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rata_rata');
            $table->dateTime('tanggal');
            $table->timestamps();
        });

        Schema::create('kelembaban', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nilai');
            $table->dateTime('tanggal');
            $table->timestamps();
        });

        Schema::create('kelembaban_harian', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rata_rata');
            $table->dateTime('tanggal');
            $table->timestamps();
        });

        Schema::create('tekanan_udara', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nilai');
            $table->dateTime('tanggal');
            $table->timestamps();
        });

        Schema::create('tekanan_udara_harian', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rata_rata');
            $table->dateTime('tanggal');
            $table->timestamps();
        });

        Schema::create('intensitas_cahaya', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nilai');
            $table->dateTime('tanggal');
            $table->timestamps();
        });

        Schema::create('intensitas_cahaya_harian', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rata_rata');
            $table->dateTime('tanggal');
            $table->timestamps();
        });

        Schema::create('ketinggian', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nilai');
            $table->dateTime('tanggal');
            $table->timestamps();
        });

        Schema::create('kualitas_udara', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nilai');
            $table->dateTime('tanggal');
            $table->timestamps();
        });

        Schema::create('kualitas_udara_harian', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rata_rata');
            $table->dateTime('tanggal');
            $table->timestamps();
        });

        Schema::create('kondisi_cuaca', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nilai');
            $table->dateTime('tanggal');
            $table->timestamps();
        });

        Schema::create('kondisi_cuaca_harian', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mayoritas');
            $table->dateTime('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suhu');
        Schema::dropIfExists('suhu_harian');
        Schema::dropIfExists('kelembaban');
        Schema::dropIfExists('kelembaban_harian');
        Schema::dropIfExists('tekanan_udara');
        Schema::dropIfExists('tekanan_udara_harian');
        Schema::dropIfExists('intensitas_cahaya');
        Schema::dropIfExists('intensitas_cahaya_harian');
        Schema::dropIfExists('kualitas_udara');
        Schema::dropIfExists('kualitas_udara_harian');
        Schema::dropIfExists('ketinggian');
        Schema::dropIfExists('kondisi_cuaca');
        Schema::dropIfExists('kondisi_cuaca_harian');
    }
}
