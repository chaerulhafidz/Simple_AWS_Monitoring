<?php

namespace App\Console\Commands;

use App\IntensitasCahaya;
use App\IntensitasCahayaHarian;
use App\Kelembaban;
use App\KelembabanHarian;
use App\Suhu;
use App\SuhuHarian;
use App\TekananUdara;
use App\TekananUdaraHarian;
use Carbon\Carbon;
use Illuminate\Console\Command;

class DailyUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Menyimpan data setiap hari    ';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $suhu = Suhu::whereDate('tanggal', date('Y-m-d'))->pluck('nilai');
        $kelembaban = Kelembaban::whereDate('tanggal', date('Y-m-d'))->pluck('nilai');
        $tekanan_udara = TekananUdara::whereDate('tanggal', date('Y-m-d'))->pluck('nilai');
        $intensitas_cahaya = IntensitasCahaya::whereDate('tanggal', date('Y-m-d'))->pluck('nilai');

        $nilai_suhu = [];
        foreach ($suhu as $s) {
            $nilai_suhu[] = (float)$s;
        }
        $nilai_kelembaban = [];
        foreach ($kelembaban as $k) {
            $nilai_kelembaban[] = (float)$k;
        }
        $nilai_tekanan_udara = [];
        foreach ($tekanan_udara as $t) {
            $nilai_tekanan_udara[] = (float)$t;
        }
        $nilai_intensitas_cahaya = [];
        foreach ($intensitas_cahaya as $i) {
            $nilai_intensitas_cahaya[] = (float)$i;
        }

        $rata_rata_suhu = number_format(array_sum($nilai_suhu) / count($nilai_suhu), 2,
            '.', '');
        $rata_rata_kelembaban = number_format(array_sum($nilai_kelembaban) / count($nilai_kelembaban), 2,
            '.', '');
        $rata_rata_tekanan_udara = number_format(array_sum($nilai_tekanan_udara) / count($nilai_tekanan_udara), 2,
            '.', '');
        $rata_rata_intensitas_cahaya = number_format(array_sum($nilai_intensitas_cahaya) / count($nilai_intensitas_cahaya), 2,
            '.', '');

        SuhuHarian::create([
            'rata_rata' => $rata_rata_suhu,
            'tanggal' => Carbon::now()
        ]);
        KelembabanHarian::create([
            'rata_rata' => $rata_rata_kelembaban,
            'tanggal' => Carbon::now()
        ]);
        TekananUdaraHarian::create([
            'rata_rata' => $rata_rata_tekanan_udara,
            'tanggal' => Carbon::now()
        ]);
        IntensitasCahayaHarian::create([
            'rata_rata' => $rata_rata_intensitas_cahaya,
            'tanggal' => Carbon::now()
        ]);
    }
}
