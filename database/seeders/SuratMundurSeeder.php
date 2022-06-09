<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SuratMundur;

class SuratMundurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SuratMundur::insert([
            [
                'nrp' => 6026201010,
                'tipe' => 'suratmundur',
                'periode' => '2022 Genap',
                'alasan' => 'Tidak mampu membayar',
                'bahasa' => 'Bahasa Indonesia',
            ],
        ]);
    }
}
