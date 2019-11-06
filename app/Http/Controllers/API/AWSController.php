<?php

namespace App\Http\Controllers\API;

use App\ArahAngin;
use App\ArahAnginHarian;
use App\Http\Controllers\Controller;
use App\IntensitasCahaya;
use App\IntensitasCahayaHarian;
use App\Kelembaban;
use App\KelembabanHarian;
use App\KondisiCuaca;
use App\KondisiCuacaHarian;
use App\KualitasUdara;
use App\KualitasUdaraHarian;
use App\Suhu;
use App\SuhuHarian;
use App\TekananUdara;
use App\TekananUdaraHarian;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AWSController extends Controller
{
    public function arah_angin()
    {
        $all = ArahAngin::whereDate('tanggal', date('Y-m-d'))->pluck('nilai');
        $array_5 = ArahAngin::orderBy('id', 'desc')->take(5)->get();
        $latest = ArahAngin::orderBy('id', 'desc')->first();

        if ($latest != null) {
            $latest = $latest->nilai;
        }

        $rata_hari = ArahAnginHarian::where('tanggal', '>=', date('Y-m-d', strtotime('-2 days')))
            ->get();

        if (count($all) != 0) {

            $nilai = [];
            foreach ($all as $a) {
                $nilai[] = (float)$a;
            }

            $rata_rata = number_format(array_sum($nilai) / count($nilai), 2,
                '.', '');

            if (count($nilai) == 1440) {
                $var = new ArahAnginHarian();
                $var->rata_rata = $rata_rata;
                $var->tanggal = Carbon::yesterday();
                $var->save();
            }
        } else {
            $rata_rata = "Belum Ada";
        }

        return response()->json([
            'array' => $array_5,
            'latest' => $latest,
            'rata-rata' => $rata_rata,
            'rata_hari' => $rata_hari
        ]);
    }

    public function suhu()
    {
        $all = Suhu::whereDate('tanggal', date('Y-m-d'))->pluck('nilai');
        $array_5 = Suhu::orderBy('id', 'desc')->take(5)->get();
        $latest = Suhu::orderBy('id', 'desc')->first();

        if ($latest != null) {
            $latest = $latest->nilai;
        }

        $rata_hari = SuhuHarian::where('tanggal', '>=', date('Y-m-d', strtotime('-2 days')))
            ->get();

        if (count($all) != 0) {

            $nilai = [];
            foreach ($all as $a) {
                $nilai[] = (float)$a;
            }

            $rata_rata = number_format(array_sum($nilai) / count($nilai), 2,
                '.', '');

            if (count($nilai) == 1440) {
                $var = new SuhuHarian();
                $var->rata_rata = $rata_rata;
                $var->tanggal = Carbon::yesterday();
                $var->save();
            }
        } else {
            $rata_rata = "Belum Ada";
        }

        return response()->json([
            'array' => $array_5,
            'latest' => $latest,
            'rata-rata' => $rata_rata,
            'rata_hari' => $rata_hari
        ]);
    }

    public function kelembaban()
    {
        $all = Kelembaban::whereDate('tanggal', date('Y-m-d'))->pluck('nilai');
        $array_5 = Kelembaban::orderBy('id', 'desc')->take(5)->get();
        $latest = Kelembaban::orderBy('id', 'desc')->first();

        if ($latest != null) {
            $latest = $latest->nilai;
        }

        $rata_hari = KelembabanHarian::where('tanggal', '>=', date('Y-m-d', strtotime('-2 days')))
            ->get();

        if (count($all) != 0) {

            $nilai = [];
            foreach ($all as $a) {
                $nilai[] = (float)$a;
            }

            $rata_rata = number_format(array_sum($nilai) / count($nilai), 2,
                '.', '');

            if (count($nilai) == 1440) {
                $var = new SuhuHarian();
                $var->rata_rata = $rata_rata;
                $var->tanggal = Carbon::yesterday();
                $var->save();
            }
        } else {
            $rata_rata = "Belum Ada";
        }

        return response()->json([
            'array' => $array_5,
            'latest' => $latest,
            'rata-rata' => $rata_rata,
            'rata_hari' => $rata_hari
        ]);
    }

    public function tekanan_udara()
    {
        $all = TekananUdara::whereDate('tanggal', date('Y-m-d'))->pluck('nilai');
        $array_5 = TekananUdara::orderBy('id', 'desc')->take(5)->get();
        $latest = TekananUdara::orderBy('id', 'desc')->first();

        if ($latest != null) {
            $latest = $latest->nilai;
        }

        $rata_hari = TekananUdaraHarian::where('tanggal', '>=', date('Y-m-d', strtotime('-2 days')))
            ->get();

        if (count($all) != 0) {

            $nilai = [];
            foreach ($all as $a) {
                $nilai[] = (float)$a;
            }

            $rata_rata = number_format(array_sum($nilai) / count($nilai), 2,
                '.', '');

            if (count($nilai) == 1440) {
                $var = new SuhuHarian();
                $var->rata_rata = $rata_rata;
                $var->tanggal = Carbon::yesterday();
                $var->save();
            }
        } else {
            $rata_rata = "Belum Ada";
        }

        return response()->json([
            'array' => $array_5,
            'latest' => $latest,
            'rata-rata' => $rata_rata,
            'rata_hari' => $rata_hari
        ]);
    }

    public function intensitas_cahaya()
    {
        $all = IntensitasCahaya::whereDate('tanggal', date('Y-m-d'))->pluck('nilai');
        $array_5 = IntensitasCahaya::orderBy('id', 'desc')->take(5)->get();
        $latest = IntensitasCahaya::orderBy('id', 'desc')->first();

        if ($latest != null) {
            $latest = $latest->nilai;
        }

        $rata_hari = IntensitasCahayaHarian::where('tanggal', '>=', date('Y-m-d', strtotime('-2 days')))
            ->get();

        if (count($all) != 0) {

            $nilai = [];
            foreach ($all as $a) {
                $nilai[] = (float)$a;
            }

            $rata_rata = number_format(array_sum($nilai) / count($nilai), 2,
                '.', '');

            if (count($nilai) == 1440) {
                $var = new SuhuHarian();
                $var->rata_rata = $rata_rata;
                $var->tanggal = Carbon::yesterday();
                $var->save();
            }
        } else {
            $rata_rata = "Belum Ada";
        }

        return response()->json([
            'array' => $array_5,
            'latest' => $latest,
            'rata-rata' => $rata_rata,
            'rata_hari' => $rata_hari
        ]);
    }

    public function kualitas_udara()
    {
        $all = KualitasUdara::whereDate('tanggal', date('Y-m-d'))->pluck('nilai');
        $array_5 = KualitasUdara::orderBy('id', 'desc')->take(5)->get();
        $latest = KualitasUdara::orderBy('id', 'desc')->first();

        if ($latest != null) {
            $latest = $latest->nilai;
        }

        $rata_hari = KualitasUdaraHarian::where('tanggal', '>=', date('Y-m-d', strtotime('-2 days')))
            ->get();

        if (count($all) != 0) {

            $nilai = [];
            foreach ($all as $a) {
                $nilai[] = (float)$a;
            }

            $rata_rata = number_format(array_sum($nilai) / count($nilai), 2,
                '.', '');

            if (count($nilai) == 1440) {
                $var = new SuhuHarian();
                $var->rata_rata = $rata_rata;
                $var->tanggal = Carbon::yesterday();
                $var->save();
            }
        } else {
            $rata_rata = "Belum Ada";
        }

        return response()->json([
            'array' => $array_5,
            'latest' => $latest,
            'rata-rata' => $rata_rata,
            'rata_hari' => $rata_hari
        ]);
    }

    public function kondisi_cuaca()
    {
        $all = KondisiCuaca::whereDate('tanggal', date('Y-m-d'))->pluck('nilai');
        $array_5 = KondisiCuaca::orderBy('id', 'desc')->take(5)->get();
        $latest = KondisiCuaca::orderBy('id', 'desc')->first();

        if ($latest != null) {
            $latest = $latest->nilai;
        }

        $rata_hari = KondisiCuacaHarian::where('tanggal', '>=', date('Y-m-d', strtotime('-2 days')))
            ->get();

        if (count($all) != 0) {

            $nilai = [];
            foreach ($all as $a) {
                $nilai[] = (float)$a;
            }

            $rata_rata = number_format(array_sum($nilai) / count($nilai), 2,
                '.', '');

            if (count($nilai) == 1440) {
                $var = new SuhuHarian();
                $var->rata_rata = $rata_rata;
                $var->tanggal = Carbon::yesterday();
                $var->save();
            }
        } else {
            $rata_rata = "Belum Ada";
        }

        return response()->json([
            'array' => $array_5,
            'latest' => $latest,
            'rata-rata' => $rata_rata,
            'rata_hari' => $rata_hari
        ]);
    }

    public function ketinggian()
    {
        $all = KualitasUdara::whereDate('tanggal', date('Y-m-d'))->pluck('nilai');
        $array_5 = KualitasUdara::orderBy('id', 'desc')->take(5)->get();
        $latest = KualitasUdara::orderBy('id', 'desc')->first();

        if ($latest != null) {
            $latest = $latest->nilai;
        }

        return response()->json([
            'array' => $array_5,
            'latest' => $latest
        ]);
    }
}
