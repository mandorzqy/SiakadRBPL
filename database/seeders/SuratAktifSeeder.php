<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SuratAktif;

class SuratAktifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SuratAktif::insert([
            [
                'nrp' => 6026201010,
                'tipe' => 'suratketeranganaktif',
                'periode' => '2022 Genap',
                'keperluan' => 'Mengurus Surat Kehilangan',
                'bahasa' => 'Bahasa Indonesia',
            ],
        ]);
    }
}
