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
        // \App\Models\User::factory(10)->create();
            Score::insert([
                [
                    'user_id'=>1,
                    'course_id'=>2,
                    'nilai_angka'=>3.5,
                    'nilai_huruf'=>'B'
                ],
                [
                    'user_id'=>2,
                    'course_id'=>1,
                    'nilai_angka'=>4,
                    'nilai_huruf'=>'A'
                ]
                
                ]);

            Faculty::insert([
                [
                    'nama_fakultas'=>'FTEIC',
                ],
                [
                    'nama_fakultas'=>'VOKASI',
                ],
                [
                    'nama_fakultas'=>'FTIRS',
                ],
                [
                    'nama_fakultas'=>'FSAD',
                ],
                [
                    'nama_fakultas'=>'FTSPK',
                ],
                [
                    'nama_fakultas'=>'FTK',
                ],
                [
                    'nama_fakultas'=>'FDKBD',
                ]
                    ]);

            Major::insert([
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
                ]
                ]);
            Schedule::insert([
                [
                    'Hari'=>'Senin',
                    'Jam'=>'07.00 - 10.00',
                ],
                [
                    'Hari'=>'Selasa',
                    'Jam'=>'07.00 - 10.00',
                ],
                [
                    'Hari'=>'Rabu',
                    'Jam'=>'07.00 - 10.00',
                ],
                [
                    'Hari'=>'Kamis',
                    'Jam'=>'07.00 - 10.00',
                ],
                [
                    'Hari'=>'Jumat',
                    'Jam'=>'07.00 - 10.00',
                ]

                ]);
           

            // User::truncate();
            User::insert([
                [
                    'name'=>'Al Habsi Waliyul Khaq',
                    'major_id'=>10,
                    'email'=>'habsikhaq@gmail.com',
                    'nrp'=>6026201010,
                    'address'=>'Jalan Wijaya Kusuma 123 Yogyakarta',
                    'generation'=>2020,
                    // 'major'=>'Sistem Informasi',
                    // 'faculty'=>'FTEIC',
                    'password'=>bcrypt('akusukakuliah123')
                ],
                [
                    'name'=>'Hatif Isfahani',
                    'major_id'=>5,
                    'email'=>'hatif@gmail.com',
                    'nrp'=>6026201011,
                    'address'=>'Jalan Pahlawan 123 Surabaya',
                    'generation'=>2020,
                    // 'major'=>'FTEIC',
                    // 'faculty'=>'Sistem Informasi',
                    'password'=>bcrypt('akusukakuliah123')
                ],
                [
                    'name'=>'Abyan Tahta',
                    'major_id'=>7,
                    'email'=>'abyan@gmail.com',
                    'nrp'=>6026201012,
                    'address'=>'Jalan Kartini 42 Malang',
                    'generation'=>2020,
                    // 'major'=>'Teknik Komputer',
                    // 'faculty'=>'FTEIC',
                    'password'=>bcrypt('akusukakuliah123')
                ],
                [
                    'name'=>'Ernando Taufiq',
                    'major_id'=>10,
                    'email'=>'ernando@gmail.com',
                    'nrp'=>6035601012,
                    'address'=>'Jalan Bungah 42 Malang',
                    'generation'=>2020,
                    // 'major'=>'Teknik Komputer',
                    // 'faculty'=>'FTEIC',
                    'password'=>bcrypt('akusukakuliah123')
    
                ]

                ]);



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
