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
            // [
            //     'user_id'=>1,
            //     'course_id'=>2,
            //     'nilai_angka'=>3.5,
            //     'nilai_huruf'=>'AB'
            // ],
            // [
            //     'user_id'=>1,
            //     'course_id'=>1,
            //     'nilai_angka'=>4,
            //     'nilai_huruf'=>'A'
            // ],
            // [
            //     'user_id'=>1,
            //     'course_id'=>3,
            //     'nilai_angka'=>3.7,
            //     'nilai_huruf'=>'AB'
            // ],
            // [
            //     'user_id'=>1,
            //     'course_id'=>4,
            //     'nilai_angka'=>3.6,
            //     'nilai_huruf'=>'AB'
            // ],
            // [
            //     'user_id'=>1,
            //     'course_id'=>5,
            //     'nilai_angka'=>3.3,
            //     'nilai_huruf'=>'AB'
            // ],
            // [
            //     'user_id'=>1,
            //     'course_id'=>6,
            //     'nilai_angka'=>3.5,
            //     'nilai_huruf'=>'B'
            // ],



            [
                'user_id' => '1',
                'course_id' => '1',
                'nilai_angka' => '4',
                'nilai_huruf' =>'A'

            ],
            [
                'user_id' => '1',
                'course_id' => '2',
                'nilai_angka' => '3.4',
                'nilai_huruf' =>'AB'
            ],
            [
                'user_id' => '1',
                'course_id' => '3',
                'nilai_angka' => '3.6',
                'nilai_huruf' =>'AB'
            ],
            [
                'user_id' => '1',
                'course_id' => '4',
                'nilai_angka' => '3.4',
                'nilai_huruf' =>'AB'
            ],
            [
                'user_id' => '1',
                'course_id' => '5',
                'nilai_angka' => '3.7',
                'nilai_huruf' =>'A'
            ],
            [
                'user_id' => '1',
                'course_id' => '6',
                'nilai_angka' => '3.5',
                'nilai_huruf' =>'A'
            ],
            [
                'user_id' => '1',
                'course_id' => '7',
                'nilai_angka' => '3.67',
                'nilai_huruf' =>'A'
            ],
            [
                'user_id' => '1',
                'course_id' => '8',
                'nilai_angka' => '3.78',
                'nilai_huruf' =>'A'
            ],
            [
                'user_id' => '1',
                'course_id' => '9',
                'nilai_angka' => '3.5',
                'nilai_huruf' =>'A'
            ],
            [
                'user_id' => '1',
                'course_id' => '10',
                'nilai_angka' => '3.1',
                'nilai_huruf' =>'A'
            ],
            [
                'user_id' => '2',
                'course_id' => '1',
                'nilai_angka' => '3',
                'nilai_huruf' =>'A'
            ],
            [
                'user_id' => '2',
                'course_id' => '2',
                'nilai_angka' => '3.5',
                'nilai_huruf' =>'A'
            ],
            [
                'user_id' => '2',
                'course_id' => '3',
                'nilai_angka' => '3.5',
                'nilai_huruf' =>'A'
            ],
            [
                'user_id' => '2',
                'course_id' => '4',
                'nilai_angka' => '3.5',
                'nilai_huruf' =>'A'
            ],
            [
                'user_id' => '2',
                'course_id' => '5',
                'nilai_angka' => '3.5',
                'nilai_huruf' =>'A'
            ],
            [
                'user_id' => '2',
                'course_id' => '6',
                'nilai_angka' => '3.5',
                'nilai_huruf' =>'A'
            ],
            [
                'user_id' => '2',
                'course_id' => '7',
                'nilai_angka' => '3.5',
                'nilai_huruf' =>'A'
            ],
            [
                'user_id' => '2',
                'course_id' => '8',
                'nilai_angka' => '3.5',
                'nilai_huruf' =>'A'
            ],
            [
                'user_id' => '2',
                'course_id' => '9',
                'nilai_angka' => '3.5',
                'nilai_huruf' =>'A'
            ],
            [
                'user_id' => '2',
                'course_id' => '10',
                'nilai_angka' => '3.5',
                'nilai_huruf' =>'A'
            ],
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
