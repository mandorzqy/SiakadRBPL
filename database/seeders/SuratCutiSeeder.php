<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SuratCuti;

class SuratCutiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SuratCuti::insert([
            [
                'nrp' => 6026201010,
                'tipe' => 'suratcuti',
                'periode' => '2022 Genap',
                'alasan' => 'Cuti Melahirkan',
                'durasi' => 2,
                'bahasa' => 'Bahasa Indonesia',
            ],
        ]);
    }
}
