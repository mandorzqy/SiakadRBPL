<?php

namespace Database\Seeders;

use App\Models\Score;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Score::insert([
            [
                'user_id'=>1,
                'course_id'=>2,
                'nilai_angka'=>3.5,
                'nilai_huruf'=>'AB'
            ],
            [
                'user_id'=>1,
                'course_id'=>1,
                'nilai_angka'=>4,
                'nilai_huruf'=>'A'
            ],
            [
                'user_id'=>1,
                'course_id'=>3,
                'nilai_angka'=>3.7,
                'nilai_huruf'=>'AB'
            ],
            [
                'user_id'=>1,
                'course_id'=>4,
                'nilai_angka'=>3.6,
                'nilai_huruf'=>'AB'
            ],
            [
                'user_id'=>1,
                'course_id'=>5,
                'nilai_angka'=>3.3,
                'nilai_huruf'=>'AB'
            ],
            [
                'user_id'=>1,
                'course_id'=>6,
                'nilai_angka'=>3.5,
                'nilai_huruf'=>'B'
            ],
        ]);
    }
}
