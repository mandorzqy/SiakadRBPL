<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Course::insert([
            [
                'kode_mk'=>'IS184307',
                'nama_mata_kuliah'=>'Pemrograman Web',
                'kode_kelas'=>'SI1101',
                'dosen_pengampu'=>'Faisal Johan',
                'sks'=>3,
            ],
            [
                'kode_mk'=>'IS184308',
                'nama_mata_kuliah'=>'Algoritma Pemrograman',
                'kode_kelas'=>'SI1101',
                'dosen_pengampu'=>'Renny',
                'sks'=>4,
            ]
            ]);
    }
}
