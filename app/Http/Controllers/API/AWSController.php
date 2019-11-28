<?php

namespace App\Http\Controllers\API;

use App\ArahAngin;
use App\ArahAnginHarian;
use App\Http\Controllers\Controller;
use App\IntensitasCahaya;
use App\IntensitasCahayaHarian;
use App\Kelembaban;
use App\KelembabanHarian;
use App\Ketinggian;
use App\KondisiCuaca;
use App\KondisiCuacaPerjam;
use App\KualitasUdara;
use App\KualitasUdaraPerjam;
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
        $array = ArahAngin::orderBy('id', 'desc')->take(60)->get();
        $latest = ArahAngin::orderBy('id', 'desc')->first();
//        dd(Carbon::now()->format('H:i:s.u'));
        if ($latest != null) {
            $latest = $latest->nilai;
        }

        foreach ($array as $ar) {
            $ar->tanggal = Carbon::parse($ar->tanggal)->format('d F y | H:i');
        }

        $rata_hari = ArahAnginHarian::where('tanggal', '>=', date('Y-m-d', strtotime('-2 days')))
            ->get();

        foreach ($rata_hari as $rh) {
            $rh->tanggal =  Carbon::parse($rh->tanggal)->format('l, d F y');
        }

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
                $var->tanggal = Carbon::today();
                $var->save();
            }
        } else {
            $rata_rata = "Belum Ada";
        }

        return response()->json([
            'array' => $array,
            'latest' => $latest,
            'rata_rata' => $rata_rata,
            'rata_hari' => $rata_hari
        ]);
    }

    public function suhu()
    {
        $all = Suhu::whereDate('tanggal', date('Y-m-d'))->pluck('nilai');
        $array = Suhu::orderBy('id', 'desc')->take(60)->get();
        $latest = Suhu::orderBy('id', 'desc')->first();

        if ($latest != null) {
            $latest = $latest->nilai;
        }

        foreach ($array as $ar) {
            $ar->tanggal = Carbon::parse($ar->tanggal)->format('d F y | H:i');
        }

        $rata_hari = SuhuHarian::where('tanggal', '>=', date('Y-m-d', strtotime('-2 days')))
            ->get();

        foreach ($rata_hari as $rh) {
            $rh->tanggal =  Carbon::parse($rh->tanggal)->format('l, d F y');
        }

        if (count($all) != 0) {

            $nilai = [];
            foreach ($all as $a) {
                $nilai[] = (float)$a;
            }

            $rata_rata = number_format(array_sum($nilai) / count($nilai), 2,
                '.', '');

            if (Carbon::now()->format('H:i:s') == "23:59:30") {
                $var = new SuhuHarian();
                $var->rata_rata = $rata_rata;
                $var->tanggal = Carbon::today();
                $var->save();
            }
        } else {
            $rata_rata = "Belum Ada";
        }

        return response()->json([
            'array' => $array,
            'latest' => $latest,
            'rata_rata' => $rata_rata,
            'rata_hari' => $rata_hari
        ]);
    }

    public function kelembaban()
    {
        $all = Kelembaban::whereDate('tanggal', date('Y-m-d'))->pluck('nilai');
        $array = Kelembaban::orderBy('id', 'desc')->take(60)->get();
        $latest = Kelembaban::orderBy('id', 'desc')->first();

        if ($latest != null) {
            $latest = $latest->nilai;
        }

        foreach ($array as $ar) {
            $ar->tanggal = Carbon::parse($ar->tanggal)->format('d F y | H:i');
        }

        $rata_hari = KelembabanHarian::where('tanggal', '>=', date('Y-m-d', strtotime('-2 days')))
            ->get();

        foreach ($rata_hari as $rh) {
            $rh->tanggal =  Carbon::parse($rh->tanggal)->format('l, d F y');
        }

        if (count($all) != 0) {

            $nilai = [];
            foreach ($all as $a) {
                $nilai[] = (float)$a;
            }

            $rata_rata = number_format(array_sum($nilai) / count($nilai), 2,
                '.', '');

            if (Carbon::now()->format('H:i:s') == "23:59:30") {
                $var = new KelembabanHarian();
                $var->rata_rata = $rata_rata;
                $var->tanggal = Carbon::today();
                $var->save();
            }
        } else {
            $rata_rata = "Belum Ada";
        }

        return response()->json([
            'array' => $array,
            'latest' => $latest,
            'rata_rata' => $rata_rata,
            'rata_hari' => $rata_hari
        ]);
    }

    public function tekanan_udara()
    {
        $all = TekananUdara::whereDate('tanggal', date('Y-m-d'))->pluck('nilai');
        $array = TekananUdara::orderBy('id', 'desc')->take(60)->get();
        $latest = TekananUdara::orderBy('id', 'desc')->first();

        if ($latest != null) {
            $latest = $latest->nilai;
        }

        foreach ($array as $ar) {
            $ar->tanggal = Carbon::parse($ar->tanggal)->format('d F y | H:i');
        }

        $rata_hari = TekananUdaraHarian::where('tanggal', '>=', date('Y-m-d', strtotime('-2 days')))
            ->get();

        foreach ($rata_hari as $rh) {
            $rh->tanggal =  Carbon::parse($rh->tanggal)->format('l, d F y');
        }

        if (count($all) != 0) {

            $nilai = [];
            foreach ($all as $a) {
                $nilai[] = (float)$a;
            }

            $rata_rata = number_format(array_sum($nilai) / count($nilai), 2,
                '.', '');

            if (Carbon::now()->format('H:i:s') == "23:59:30") {
                $var = new TekananUdaraHarian();
                $var->rata_rata = $rata_rata;
                $var->tanggal = Carbon::today();
                $var->save();
            }
        } else {
            $rata_rata = "Belum Ada";
        }

        return response()->json([
            'array' => $array,
            'latest' => $latest,
            'rata_rata' => $rata_rata,
            'rata_hari' => $rata_hari
        ]);
    }

    public function intensitas_cahaya()
    {
        $all = IntensitasCahaya::whereDate('tanggal', date('Y-m-d'))->pluck('nilai');
        $array = IntensitasCahaya::orderBy('id', 'desc')->take(60)->get();
        $latest = IntensitasCahaya::orderBy('id', 'desc')->first();

        if ($latest != null) {
            $latest = ((float)$latest->nilai / 1023) * 100;
        }

        foreach ($array as $ar) {
            $ar->tanggal = Carbon::parse($ar->tanggal)->format('d F y | H:i');
            $ar->nilai = ((float)$ar->nilai / 1023) * 100;
        }

        $rata_hari = IntensitasCahayaHarian::where('tanggal', '>=', date('Y-m-d', strtotime('-2 days')))
            ->get();

        foreach ($rata_hari as $rh) {
            $rh->tanggal =  Carbon::parse($rh->tanggal)->format('d F y');
        }

        if (count($all) != 0) {

            $nilai = [];
            foreach ($all as $a) {
                $nilai[] = (float)$a;
            }

            $rata_rata = number_format(array_sum($nilai) / count($nilai), 2,
                '.', '');
            
            $rata_rata = ($rata_rata / 1023) * 100;

            if (Carbon::now()->format('H:i:s') == "23:59:30") {
                $var = new IntensitasCahayaHarian();
                $var->rata_rata = $rata_rata;
                $var->tanggal = Carbon::today();
                $var->save();
            }
        } else {
            $rata_rata = "Belum Ada";
        }

        return response()->json([
            'array' => $array,
            'latest' => $latest,
            'rata_rata' => $rata_rata,
            'rata_hari' => $rata_hari
        ]);
    }

    public function kualitas_udara()
    {
        $all = KualitasUdara::whereBetween('tanggal', [
            now()->format('Y-m-d H:00:00'),
            now()->addHours(1)->format('Y-m-d H:00:00')
        ])->pluck('nilai')->toArray();
        $array = KualitasUdara::orderBy('id', 'desc')->take(24)->get();
        $latest = KualitasUdara::orderBy('id', 'desc')->first();

        if ($latest != null) {
            $latest = $latest->nilai;
        }

        foreach ($array as $ar) {
            $ar->tanggal = Carbon::parse($ar->tanggal)->format('d F y | H:i');
        }

        $rata_hari = KualitasUdaraPerjam::where('tanggal', '>=', date('Y-m-d', strtotime('-2 days')))
            ->get();

        foreach ($rata_hari as $rh) {
            $rh->tanggal =  Carbon::parse($rh->tanggal)->format('l, d F y');
        }

        if (Carbon::now()->format('i:s') == "59:30") {
            $c = array_count_values($all);
            $rata_rata = array_search(max($c), $c);

            $var = new KualitasUdaraPerjam();
            $var->rata_rata = $rata_rata;
            $var->tanggal = now();
            $var->save();
        } else {
            $rata_rata = "Belum Ada";
        }

        return response()->json([
            'array' => $array,
            'latest' => $latest,
            'rata_rata' => $rata_rata,
            'rata_hari' => $rata_hari
        ]);
    }

    public function kondisi_cuaca()
    {
        $all = KondisiCuaca::whereBetween('tanggal', [
            now()->format('Y-m-d H:00:00'),
            now()->addHours(1)->format('Y-m-d H:00:00')
        ])->pluck('nilai')->toArray();
        $array = KondisiCuaca::orderBy('id', 'desc')->take(24)->get();
        $latest = KondisiCuaca::orderBy('id', 'desc')->first();

        if ($latest != null) {
            $latest = $latest->nilai;
        }

        foreach ($array as $ar) {
            $ar->tanggal = Carbon::parse($ar->tanggal)->format('d F y | H:i');
        }

        $rata_hari = KondisiCuacaPerjam::where('tanggal', '>=', date('Y-m-d', strtotime('-2 days')))
            ->get();

        foreach ($rata_hari as $rh) {
            $rh->tanggal =  Carbon::parse($rh->tanggal)->format('l, d F y');
        }

        if (Carbon::now()->format('i:s') == "59:30") {
            $c = array_count_values($all);
            $rata_rata = array_search(max($c), $c);

            $var = new KondisiCuacaPerjam();
            $var->rata_rata = $rata_rata;
            $var->tanggal = now();
            $var->save();
        } else {
            $rata_rata = "Belum Ada";
        }

        return response()->json([
            'array' => $array,
            'latest' => $latest,
            'rata_rata' => $rata_rata,
            'rata_hari' => $rata_hari
        ]);
    }

    public function ketinggian()
    {
        $all = Ketinggian::whereDate('tanggal', date('Y-m-d'))->pluck('nilai');
        $array = Ketinggian::orderBy('id', 'desc')->take(60)->get();
        $latest = Ketinggian::orderBy('id', 'desc')->first();

        if ($latest != null) {
            $latest = $latest->nilai;
        }

        return response()->json([
            'array' => $array,
            'latest' => $latest
        ]);
    }
}
