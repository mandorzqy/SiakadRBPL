<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Classroom::insert([
            [
                'course_id' => 13,
                'kelas' => 'A',
                'created_at' => now(),
                'updated_at' => now(),
                'kapasitas' => 10,
                'lecturer_id' => 1
            ],
            [
                'course_id' => 13,
                'kelas' => 'B',
                'created_at' => now(),
                'updated_at' => now(),
                'kapasitas' => 20,
                'lecturer_id' => 2
            ],
            [
                'course_id' => 12,
                'kelas' => 'A',
                'created_at' => now(),
                'updated_at' => now(),
                'kapasitas' => 20,
                'lecturer_id' => 1
            ],
            [
                'course_id' => 12,
                'kelas' => 'B',
                'created_at' => now(),
                'updated_at' => now(),
                'kapasitas' => 20,
                'lecturer_id' => 2
            ],
            [
                'course_id' => 11,
                'kelas' => 'A',
                'created_at' => now(),
                'updated_at' => now(),
                'kapasitas' => 20,
                'lecturer_id' => 1
            ],
            [
                'course_id' =>11,
                'kelas' => 'B',
                'created_at' => now(),
                'updated_at' => now(),
                'kapasitas' => 20,
                'lecturer_id' => 2
            ],
            [
                'course_id' => 14,
                'kelas' => 'A',
                'created_at' => now(),
                'updated_at' => now(),
                'kapasitas' => 20,
                'lecturer_id' => 1
            ],
            [
                'course_id' => 14,
                'kelas' => 'B',
                'created_at' => now(),
                'updated_at' => now(),
                'kapasitas' => 20,
                'lecturer_id' => 2
            ]
            ]);
    }
}
