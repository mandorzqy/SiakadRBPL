<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('schedule_user')->insert([
            [
                'user_id'=>1,
                'schedule_id'=>1
            ],
            [
                'user_id'=>1,
                'schedule_id'=>2
            ],
            [
                'user_id'=>1,
                'schedule_id'=>3
            ],
            [
                'user_id'=>1,
                'schedule_id'=>4
            ],
        ]);

    }
}
