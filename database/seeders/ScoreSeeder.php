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
                'user_id' => '1',
                'tahun' => 2020,
                'classroom_id' => '1',
                'nilai_angka' => 3.75,
                'semester'=>1
            ],
            [
                'user_id' => '1',
                'nilai_angka' => 4.00,
                'tahun' => 2020,
                'classroom_id' => '2',
                'semester'=>1
            ],
            [
                'user_id' => '1',
                'nilai_angka' => 4.00,
                'tahun' => 2020,
                'classroom_id' => '3',
                'semester'=>1
            ],
            // 
            //     'user_id' => '1',
            //     'nilai_angka' => 100,
            //     'tahun' => 2020,
            //     'periode'=>'1',
            //     'classroom_id' => '3',

            // ],
            // [
            //     'user_id' => '1',
            //     'nilai_angka' => 100,
            //     'tahun' => 2020,
            //     'periode'=>'1',
            //     'classroom_id' => '4',

            // ],
            // [
            //     'user_id' => '1',
            //     'nilai_angka' => 100,
            //     'tahun' => 2020,
            //     'periode'=>'1',
            //     'classroom_id' => '5',
            // ],
            // [
            //     'user_id' => '1',
            //     'nilai_angka' => 100,
            //     'tahun' => 2021,
            //     'periode'=>'1',
            //     'classroom_id' => '6',
            // ],
            // [
            //     'user_id' => '1',
            //     'nilai_angka' => 100,
            //     'tahun' => 2021,
            //     'periode'=>'1',
            //     'classroom_id' => '7',

            // ],
            // [
            //     'user_id' => '1',
            //     'nilai_angka' => 100,
            //     'tahun' => 2021,
            //     'periode'=>'1',
            //     'classroom_id' => '8',

            // ],
            // [
            //     'user_id' => '1',
            //     'nilai_angka' => 100,
            //     'tahun' => 2021,
            //     'periode'=>'1'

            // ],
            [
                'user_id' => '1',
                'nilai_angka' => 3.5,
                'tahun' => 2022,
                'classroom_id' => 5,
                'semester'=>2
            ],
            [
                'user_id' => '1',
                'nilai_angka' => 3.4,
                'tahun' => 2022,
                'classroom_id' => 7,
                'semester'=>3
            ],
            // [
            //     'user_id' => '1',
            //     'nilai_angka' => null,
            //     'tahun' => 2022,
            //     'periode'=>'2',
            //     'classroom_id' => 7,
            // ],
            // [
            //     'user_id' => '2',
            //     'nilai_angka' => null,
            //     'tahun' => 2022,
            //     'periode'=>2,
            //     'classroom_id' => 7,

            // ],
            // [
            //     'user_id' => '2',
            //     'nilai_angka' => null,
            //     'tahun' => 2022,
            //     'periode'=>1,

            // ],
            // [
            //     'user_id' => '2',
            //     'nilai_angka' => 100,
            //     'tahun' => 2022,
            //     'periode'=>1,

            // ],
            // [
            //     'user_id' => '2',
            //     'nilai_angka' => 100,
            //     'tahun' => 2022,
            //     'periode'=>1,

            // ],
            // [
            //     'user_id' => '2',
            //     'nilai_angka' => 100,
            //     'tahun' => 2022,
            //     'periode'=>1,

            // ],
            // [
            //     'user_id' => '2',
            //     'nilai_angka' => 100,
            //     'tahun' => 2022,
            //     'periode'=>1,

            // ],
            // [
            //     'user_id' => '2',
            //     'nilai_angka' => 100,
            //     'tahun' => 2022,
            //     'periode'=>2,
            // ],
            // [
            //     'user_id' => '2',
            //     'nilai_angka' => 100,
            //     'tahun' => 2022,
            //     'periode'=>2,

            // ],
            // [
            //     'user_id' => '2',
            //     'tahun' => 2022,
            //     'periode'=>2,
            //     'nilai_angka' => null,

            // ],
            // [
            //     'user_id' => '2',
            //     'tahun' => 2023,
            //     'periode'=>2,
            //     'nilai_angka' => null,

            // ],
            // [
            //     'user_id' => '5026201139',
            //     'course_id' => '1',
            //     'nilai_angka' => '84',
            // ],
            // [
            //     'user_id' => '5026201139',
            //     'course_id' => '2',
            //     'nilai_angka' => '88',
            // ],
            // [
            //     'user_id' => '5026201139',
            //     'course_id' => '3',
            //     'nilai_angka' => '78',
            // ],
            // [
            //     'user_id' => '5026201139',
            //     'course_id' => '4',
            //     'nilai_angka' => '86',
            // ],
            // [
            //     'user_id' => '5026201139',
            //     'course_id' => '5',
            //     'nilai_angka' => '77',
            // ],
            // [
            //     'user_id' => '5026201139',
            //     'course_id' => '6',
            //     'nilai_angka' => '95',
            // ],
            // [
            //     'user_id' => '5026201139',
            //     'course_id' => '7',
            //     'nilai_angka' => '96',
            // ],
            // [
            //     'user_id' => '5026201139',
            //     'course_id' => '8',
            //     'nilai_angka' => '86',
            // ],
            // [
            //     'user_id' => '5026201139',
            //     'course_id' => '9',
            //     'nilai_angka' => '84',
            // ],
            // [
            //     'user_id' => '5026201139',
            //     'course_id' => '10',
            //     'nilai_angka' => '80',
            // ],
            // [
            //     'user_id' => '5026201054',
            //     'course_id' => '1',
            //     'nilai_angka' => '78',
            // ],
            // [
            //     'user_id' => '5026201054',
            //     'course_id' => '2',
            //     'nilai_angka' => '88',
            // ],
            // [
            //     'user_id' => '5026201054',
            //     'course_id' => '3',
            //     'nilai_angka' => '83',
            // ],
            // [
            //     'user_id' => '5026201054',
            //     'course_id' => '4',
            //     'nilai_angka' => '78',
            // ],
            // [
            //     'user_id' => '5026201054',
            //     'course_id' => '5',
            //     'nilai_angka' => '89',
            // ],
            // [
            //     'user_id' => '5026201054',
            //     'course_id' => '6',
            //     'nilai_angka' => '74',
            // ],
            // [
            //     'user_id' => '5026201054',
            //     'course_id' => '7',
            //     'nilai_angka' => '80',
            // ],
            // [
            //     'user_id' => '5026201054',
            //     'course_id' => '8',
            //     'nilai_angka' => '94',
            // ],
            // [
            //     'user_id' => '5026201054',
            //     'course_id' => '9',
            //     'nilai_angka' => '85',
            // ],
            // [
            //     'user_id' => '5026201054',
            //     'course_id' => '10',
            //     'nilai_angka' => '89',
            // ],
            // [
            //     'user_id' => '5026201045',
            //     'course_id' => '1',
            //     'nilai_angka' => '86',
            // ],
            // [
            //     'user_id' => '5026201045',
            //     'course_id' => '2',
            //     'nilai_angka' => '88',
            // ],
            // [
            //     'user_id' => '5026201045',
            //     'course_id' => '3',
            //     'nilai_angka' => '76',
            // ],
            // [
            //     'user_id' => '5026201045',
            //     'course_id' => '4',
            //     'nilai_angka' => '86',
            // ],
            // [
            //     'user_id' => '5026201045',
            //     'course_id' => '5',
            //     'nilai_angka' => '74',
            // ],
            // [
            //     'user_id' => '5026201045',
            //     'course_id' => '6',
            //     'nilai_angka' => '80',
            // ],
            // [
            //     'user_id' => '5026201045',
            //     'course_id' => '7',
            //     'nilai_angka' => '75',
            // ],
            // [
            //     'user_id' => '5026201045',
            //     'course_id' => '8',
            //     'nilai_angka' => '97',
            // ],
            // [
            //     'user_id' => '5026201045',
            //     'course_id' => '9',
            //     'nilai_angka' => '72',
            // ],
            // [
            //     'user_id' => '5026201045',
            //     'course_id' => '10',
            //     'nilai_angka' => '98',
            // ],
            // [
            //     'user_id' => '5026201115',
            //     'course_id' => '1',
            //     'nilai_angka' => '80',
            // ],
            // [
            //     'user_id' => '5026201115',
            //     'course_id' => '2',
            //     'nilai_angka' => '76',
            // ],
            // [
            //     'user_id' => '5026201115',
            //     'course_id' => '3',
            //     'nilai_angka' => '70',
            // ],
            // [
            //     'user_id' => '5026201115',
            //     'course_id' => '4',
            //     'nilai_angka' => '80',
            // ],
            // [
            //     'user_id' => '5026201115',
            //     'course_id' => '5',
            //     'nilai_angka' => '98',
            // ],
            // [
            //     'user_id' => '5026201115',
            //     'course_id' => '6',
            //     'nilai_angka' => '78',
            // ],
            // [
            //     'user_id' => '5026201115',
            //     'course_id' => '7',
            //     'nilai_angka' => '88',
            // ],
            // [
            //     'user_id' => '5026201115',
            //     'course_id' => '8',
            //     'nilai_angka' => '87',
            // ],
            // [
            //     'user_id' => '5026201115',
            //     'course_id' => '9',
            //     'nilai_angka' => '76',
            // ],
            // [
            //     'user_id' => '5026201115',
            //     'course_id' => '10',
            //     'nilai_angka' => '87',
            // ],
            // [
            //     'user_id' => '5026201096',
            //     'course_id' => '1',
            //     'nilai_angka' => '82',
            // ],
            // [
            //     'user_id' => '5026201096',
            //     'course_id' => '2',
            //     'nilai_angka' => '95',
            // ],
            // [
            //     'user_id' => '5026201096',
            //     'course_id' => '3',
            //     'nilai_angka' => '85',
            // ],
            // [
            //     'user_id' => '5026201096',
            //     'course_id' => '4',
            //     'nilai_angka' => '80',
            // ],
            // [
            //     'user_id' => '5026201096',
            //     'course_id' => '5',
            //     'nilai_angka' => '70',
            // ],
            // [
            //     'user_id' => '5026201096',
            //     'course_id' => '6',
            //     'nilai_angka' => '92',
            // ],
            // [
            //     'user_id' => '5026201096',
            //     'course_id' => '7',
            //     'nilai_angka' => '80',
            // ],
            // [
            //     'user_id' => '5026201096',
            //     'course_id' => '8',
            //     'nilai_angka' => '90',
            // ],
            // [
            //     'user_id' => '5026201096',
            //     'course_id' => '9',
            //     'nilai_angka' => '76',
            // ],
            // [
            //     'user_id' => '5026201096',
            //     'course_id' => '10',
            //     'nilai_angka' => '80',
            // ],
            // [
            //     'user_id' => '5026201109',
            //     'course_id' => '1',
            //     'nilai_angka' => '84',
            // ],
            // [
            //     'user_id' => '5026201109',
            //     'course_id' => '2',
            //     'nilai_angka' => '90',
            // ],
            // [
            //     'user_id' => '5026201109',
            //     'course_id' => '3',
            //     'nilai_angka' => '87',
            // ],
            // [
            //     'user_id' => '5026201109',
            //     'course_id' => '4',
            //     'nilai_angka' => '77',
            // ],
            // [
            //     'user_id' => '5026201109',
            //     'course_id' => '5',
            //     'nilai_angka' => '80',
            // ],
            // [
            //     'user_id' => '5026201109',
            //     'course_id' => '6',
            //     'nilai_angka' => '72',
            // ],
            // [
            //     'user_id' => '5026201109',
            //     'course_id' => '7',
            //     'nilai_angka' => '90',
            // ],
            // [
            //     'user_id' => '5026201109',
            //     'course_id' => '8',
            //     'nilai_angka' => '91',
            // ],
            // [
            //     'user_id' => '5026201109',
            //     'course_id' => '9',
            //     'nilai_angka' => '83',
            // ],
            // [
            //     'user_id' => '5026201109',
            //     'course_id' => '10',
            //     'nilai_angka' => '88',
            // ],
            // [
            //     'user_id' => '5026201007',
            //     'course_id' => '1',
            //     'nilai_angka' => '91',
            // ],
            // [
            //     'user_id' => '5026201007',
            //     'course_id' => '2',
            //     'nilai_angka' => '90',
            // ],
            // [
            //     'user_id' => '5026201007',
            //     'course_id' => '3',
            //     'nilai_angka' => '87',
            // ],
            // [
            //     'user_id' => '5026201007',
            //     'course_id' => '4',
            //     'nilai_angka' => '84',
            // ],
            // [
            //     'user_id' => '5026201007',
            //     'course_id' => '5',
            //     'nilai_angka' => '86',
            // ],
            // [
            //     'user_id' => '5026201007',
            //     'course_id' => '6',
            //     'nilai_angka' => '94',
            // ],
            // [
            //     'user_id' => '5026201007',
            //     'course_id' => '7',
            //     'nilai_angka' => '80',
            // ],
            // [
            //     'user_id' => '5026201007',
            //     'course_id' => '8',
            //     'nilai_angka' => '93',
            // ],
            // [
            //     'user_id' => '5026201007',
            //     'course_id' => '9',
            //     'nilai_angka' => '96',
            // ],
            // [
            //     'user_id' => '5026201007',
            //     'course_id' => '10',
            //     'nilai_angka' => '100',
            // ],
        ]);
    }
}
