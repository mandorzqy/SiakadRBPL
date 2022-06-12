<?php

namespace Database\Seeders;

use App\Models\User;
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
                'hari'=>'Senin',
                'jam'=>'07.00 - 10.00',
                'classroom_id'=>1,
            ],[
                'hari'=>'Senin',
                'jam'=>'11.00 - 13.00',
                'classroom_id'=>2,
            ],
            [
                'hari'=>'Selasa',
                'jam'=>'07.00 - 10.00',
                'classroom_id'=>2,
            ],
            [
                'hari'=>'Rabu',
                'jam'=>'07.00 - 10.00',
                'classroom_id'=>3,
            ],
            [
                'hari'=>'Kamis',
                'jam'=>'07.00 - 10.00',
                'classroom_id'=>1,
            ],
            [
                'hari'=>'Jumat',
                'jam'=>'07.00 - 10.00',
                'classroom_id'=>3,
            ]

            ]);
            // foreach(Schedule::all() as $schedule){
            //     $users=User::inRandomOrder()->take(rand(1,2))->pluck('id');
            //     $schedule->user()->attach($users);
            // }
    }
}
