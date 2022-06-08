<?php

namespace Database\Seeders;

use App\Models\Lecturer;
use Illuminate\Database\Seeder;

class LecturersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
        //
        Lecturer::insert([
            [
                'nama_dosen'=>'Bambang',
                'course_id'=>4,
                'lecturers_id'=>1,
            ],
            [
                'nama_dosen'=>'Tri',
                'course_id'=>1,
                'lecturers_id'=>2,
            ],
            [
                'nama_dosen'=>'Puji',
                'course_id'=>2,
                'lecturers_id'=>3,
            ],
            [
                'nama_dosen'=>'Ahmad',
                'course_id'=>1,
                'lecturers_id'=>4,
            ],
            [
                'nama_dosen'=>'Sumi',
                'course_id'=>1,
                'lecturers_id'=>5,
            ],
            [
                'nama_dosen'=>'Ika',
                'course_id'=>2,
                'lecturers_id'=>6,
            ],
            [
                'nama_dosen'=>'Tika',
                'course_id'=>4,
                'lecturers_id'=>7,
            ],
            [
                'nama_dosen'=>'Dewi',
                'course_id'=>2,
                'lecturers_id'=>8,
            ]
                ]);

    }
}
