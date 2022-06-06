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
                'course_id' => 1,
                'kelas' => 'A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 1,
                'kelas' => 'B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 2,
                'kelas' => 'A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 2,
                'kelas' => 'B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 3,
                'kelas' => 'A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 3,
                'kelas' => 'B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 4,
                'kelas' => 'A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 4,
                'kelas' => 'B',
                'created_at' => now(),
                'updated_at' => now(),
            ]
            ]);
    }
}
