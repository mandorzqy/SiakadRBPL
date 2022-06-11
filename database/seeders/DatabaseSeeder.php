<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Major;
use App\Models\Score;
use App\Models\Course;
use App\Models\Faculty;
use App\Models\Product;
use App\Models\Schedule;
use App\Models\CarProduct;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\MajorSeeder;
use Database\Seeders\ScoreSeeder;
use Database\Seeders\CourseSeeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\FacultySeeder;
use Database\Seeders\ScheduleSeeder;
use Database\Seeders\SuratAktifSeeder;
use Database\Seeders\SuratCutiSeeder;
use Database\Seeders\SuratMundurSeeder;
use Database\Seeders\IkomaSeeder;
use Database\Seeders\UKTSeeder;

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
        $this->call(LecturersSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ClassroomSeeder::class);
        $this->call(ScoreSeeder::class);
        $this->call(ScheduleUserSeeder::class);
        $this->call(ScheduleSeeder::class);
        $this->call(ClassroomUserSeeder::class);
        $this->call(SuratAktifSeeder::class);
        $this->call(SuratCutiSeeder::class);
        $this->call(SuratMundurSeeder::class);
        $this->call(IkomaSeeder::class);
        $this->call(UKTSeeder::class);
    }
}
