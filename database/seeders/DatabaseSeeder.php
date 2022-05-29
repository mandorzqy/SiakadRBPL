<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Major;
use App\Models\Score;
use App\Models\Course;
use App\Models\Faculty;
use App\Models\Schedule;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(CourseSeeder::class);
        $this->call(FacultySeeder::class);
        $this->call(MajorSeeder::class);
        $this->call(ScheduleSeeder::class);
        $this->call(ScoreSeeder::class);
        $this->call(UserSeeder::class);                
    }
}
