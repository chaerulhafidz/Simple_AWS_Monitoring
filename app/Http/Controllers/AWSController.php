<?php

namespace App\Http\Controllers;

use App\ArahAngin;
use App\IntensitasCahaya;
use App\Kelembaban;
use App\Ketinggian;
use App\KondisiCuaca;
use App\KualitasUdara;
use App\Suhu;
use App\TekananUdara;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AWSController extends Controller
{
    public function welcome()
    {
        $arah_angin = ArahAngin::orderBy('id', 'desc')->first();
        if ($arah_angin != null) {
            $arah_angin = $arah_angin->nilai;
        }

        $suhu = Suhu::orderBy('id', 'desc')->first();
        if ($suhu != null) {
            $suhu = $suhu->nilai;
        }

        $kelembaban = Kelembaban::orderBy('id', 'desc')->first();
        if ($kelembaban != null) {
            $kelembaban = $kelembaban->nilai;
        }

        $tekanan_udara = TekananUdara::orderBy('id', 'desc')->first();
        if ($tekanan_udara != null) {
            $tekanan_udara = $tekanan_udara->nilai;
        }

        $intensitas_cahaya = IntensitasCahaya::orderBy('id', 'desc')->first();
        if ($intensitas_cahaya != null) {
            $intensitas_cahaya = $intensitas_cahaya->nilai;
        }

        $kualitas_udara = KualitasUdara::orderBy('id', 'desc')->first();
        if ($kualitas_udara != null) {
            $kualitas_udara = $kualitas_udara->nilai;
        }

        $kondisi_cuaca = KondisiCuaca::orderBy('id', 'desc')->first();
        if ($kondisi_cuaca != null) {
            $kondisi_cuaca = $kondisi_cuaca->nilai;
        }

        $ketinggian = Ketinggian::orderBy('id', 'desc')->first();
        if ($ketinggian != null) {
            $ketinggian = $ketinggian->nilai;
        }

        return view('welcome', [
            'arah_angin' => $arah_angin, 'suhu' => $suhu, 'kelembaban' => $kelembaban,
            'tekanan_udara' => $tekanan_udara, 'intensitas_cahaya' => $intensitas_cahaya,
            'kualitas_udara' => $kualitas_udara, 'kondisi_cuaca' => $kondisi_cuaca,
            'ketinggian' => $ketinggian
        ]);
    }

}
