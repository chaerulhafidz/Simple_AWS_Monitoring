<?php

namespace App\Console\Commands;

use App\KondisiCuaca;
use App\KondisiCuacaPerjam;
use App\KualitasUdara;
use App\KualitasUdaraPerjam;
use Carbon\Carbon;
use Illuminate\Console\Command;

class HourlyUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hour:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Menyimpan data mayoritas perjam';

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
        $kualitas_udara = KualitasUdara::whereBetween('tanggal', [
            now()->format('Y-m-d H:00:00'),
            now()->addHours(1)->format('Y-m-d H:00:00')
        ])->pluck('nilai')->toArray();

        $c_kualitas_udara = array_count_values($kualitas_udara);
        $rata_rata_kualitas_udara = array_search(max($c_kualitas_udara), $c_kualitas_udara);

        $kondisi_cuaca = KondisiCuaca::whereBetween('tanggal', [
            now()->format('Y-m-d H:00:00'),
            now()->addHours(1)->format('Y-m-d H:00:00')
        ])->pluck('nilai')->toArray();

        $c_kondisi_cuaca = array_count_values($kondisi_cuaca);
        $rata_rata_kondisi_cuaca = array_search(max($c_kondisi_cuaca), $c_kondisi_cuaca);

        KualitasUdaraPerjam::create([
            'rata_rata' => $rata_rata_kualitas_udara,
            'tanggal' => Carbon::now()
        ]);
        KondisiCuacaPerjam::create([
            'rata_rata' => $rata_rata_kondisi_cuaca,
            'tanggal' => Carbon::now()
        ]);

        $this->info('Hourly Updated');
    }


}
