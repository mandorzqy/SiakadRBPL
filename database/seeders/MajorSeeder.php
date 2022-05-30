<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('majors')->insert([
            [
                'nama_jurusan'=>'Fisika',
                'faculty_id'=>'4'
            ],
            [
                'nama_jurusan'=>'Matematika',
                'faculty_id'=>'4'
            ],
            [
                'nama_jurusan'=>'Statistika',
                'faculty_id'=>'4'
            ],
            [
                'nama_jurusan'=>'Kimia',
                'faculty_id'=>'4'
            ],
            [
                'nama_jurusan'=>'Aktuaria',
                'faculty_id'=>'4'
            ],
            [
                'nama_jurusan'=>'Teknik Perkapalan',
                'faculty_id'=>'6'
            ],
            [
                'nama_jurusan'=>'Teknik Kelautan',
                'faculty_id'=>'6'
            ],
            [
                'nama_jurusan'=>'Teknik Mesin',
                'faculty_id'=>'3'
            ],
            [
                'nama_jurusan'=>'Sistem Informasi',
                'faculty_id'=>'3'
            ],
            [
                'nama_jurusan'=>'Teknik Sipil',
                'faculty_id'=>'5'
            ],
            [
                'nama_jurusan'=>'Desain Interior',
                'faculty_id'=>'7'
            ],
            [
                'nama_jurusan'=>'Teknik Mesin industri',
                'faculty_id'=>'2'
            ],
            [
                'nama_jurusan'=>'ITS',
                'faculty_id'=>'8'
            ]
            ]);
    }
}
