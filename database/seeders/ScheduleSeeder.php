<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('schedules')->insert([
            [
                'Hari'=>'Senin',
                'Jam'=>'07.00 - 10.00',
            ],
            [
                'Hari'=>'Selasa',
                'Jam'=>'07.00 - 10.00',
            ],
            [
                'Hari'=>'Rabu',
                'Jam'=>'07.00 - 10.00',
            ],
            [
                'Hari'=>'Kamis',
                'Jam'=>'07.00 - 10.00',
            ],
            [
                'Hari'=>'Jumat',
                'Jam'=>'07.00 - 10.00',
            ]

            ]);
    }
}
