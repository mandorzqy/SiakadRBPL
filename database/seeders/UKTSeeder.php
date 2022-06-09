<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UKT;

class UKTSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UKT::insert([
            [
                'nrp' => 6026201010,
                'periode' => '2022 Genap',
                'tanggal' => '2022-05-12',
                'total' => '7.500.000',
                'tagihan1' => '7.500.000',
                'tagihan2' => '0',
                'tagihan3' => '0',
                'tagihan4' => '0',
            ],
        ]);
    }
}
