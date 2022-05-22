<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Score;
use App\Models\Course;
use App\Models\Major;
use App\Models\Faculty;
use App\Models\Schedule;
use Illuminate\Database\Seeder;

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


        // mengisi tabel data mahasiswa
        

            Course::create([
                'kode_mk'=>'IS184307',
                'nama_mata_kuliah'=>'Pemrograman Web',
                'kode_kelas'=>'SI1101',
                'dosen_pengampu'=>'Faisal Johan',
                'sks'=>3,
            ]);

            Course::create([
                'kode_mk'=>'IS184308',
                'nama_mata_kuliah'=>'Algoritma Pemrograman',
                'kode_kelas'=>'SI1101',
                'dosen_pengampu'=>'Renny',
                'sks'=>4,
            ]);

            Score::create([
                'user_id'=>1,
                'course_id'=>2,
                'nilai_angka'=>3.5,
                'nilai_huruf'=>'B'
            ]);

            Score::create([
                'user_id'=>2,
                'course_id'=>1,
                'nilai_angka'=>4,
                'nilai_huruf'=>'A'
            ]);
            Faculty::create([
                'nama_fakultas'=>'FTEIC',
            ]);
            Faculty::create([
                'nama_fakultas'=>'VOKASI',
            ]);
            Faculty::create([
                'nama_fakultas'=>'FTIRS',
            ]);
            Faculty::create([
                'nama_fakultas'=>'FSAD',
            ]);
            Faculty::create([
                'nama_fakultas'=>'FTSPK',
            ]);
            Faculty::create([
                'nama_fakultas'=>'FTK',
            ]);
            Faculty::create([
                'nama_fakultas'=>'FDKBD',
            ]);
            //FSAD
            Major::create([
                'nama_jurusan'=>'Fisika',
                'faculty_id'=>'4'
            ]);
            Major::create([
                'nama_jurusan'=>'Matematika',
                'faculty_id'=>'4'
            ]);
            Major::create([
                'nama_jurusan'=>'Statistika',
                'faculty_id'=>'4'
            ]);
            Major::create([
                'nama_jurusan'=>'Kimia',
                'faculty_id'=>'4'
            ]);
            Major::create([
                'nama_jurusan'=>'Biologi',
                'faculty_id'=>'4'
            ]);
            Major::create([
                'nama_jurusan'=>'Aktuaria',
                'faculty_id'=>'4'
            ]);
            //FTK
            Major::create([
                'nama_jurusan'=>'Teknik Perkapalan',
                'faculty_id'=>'6'
            ]);
            Major::create([
                'nama_jurusan'=>'Teknik Kelautan',
                'faculty_id'=>'6'
            ]);
            //FTIRS
            Major::create([
                'nama_jurusan'=>'Teknik Mesin',
                'faculty_id'=>'3'
            ]);
            //FTEIC
            Major::create([
                'nama_jurusan'=>'Sistem Informasi',
                'faculty_id'=>'1'
            ]);
            //FTSPK
            Major::create([
                'nama_jurusan'=>'Teknik Sipil',
                'faculty_id'=>'5'
            ]);
            //FDKBD
            Major::create([
                'nama_jurusan'=>'Desain Interior',
                'faculty_id'=>'7'
            ]);
            //Vokasi
            Major::create([
                'nama_jurusan'=>'Teknik Mesin industri',
                'faculty_id'=>'2'
            ]);
            //sesi 1
            Schedule::create([
                'Hari'=>'Senin',
                'Jam'=>'07.00 - 10.00',
            ]);
            Schedule::create([
                'Hari'=>'Selasa',
                'Jam'=>'07.00 - 10.00',
            ]);
            Schedule::create([
                'Hari'=>'Rabu',
                'Jam'=>'07.00 - 10.00',
            ]);
            Schedule::create([
                'Hari'=>'Kamis',
                'Jam'=>'07.00 - 10.00',
            ]);
            Schedule::create([
                'Hari'=>'Jumat',
                'Jam'=>'07.00 - 10.00',
            ]);

            User::create([
                'name'=>'Al Habsi Waliyul Khaq',
                'major_id'=>10,
                'email'=>'habsikhaq@gmail.com',
                'nrp'=>6026201010,
                'address'=>'Jalan Wijaya Kusuma 123 Yogyakarta',
                'generation'=>2020,
                // 'major'=>'Sistem Informasi',
                // 'faculty'=>'FTEIC',
                'password'=>bcrypt('akusukakuliah123')
            ]);

            User::create([
                'name'=>'Hatif Isfahani',
                'major_id'=>5,
                'email'=>'hatif@gmail.com',
                'nrp'=>6026201011,
                'address'=>'Jalan Pahlawan 123 Surabaya',
                'generation'=>2020,
                // 'major'=>'FTEIC',
                // 'faculty'=>'Sistem Informasi',
                'password'=>bcrypt('akusukakuliah123')
            ]);

            User::create([
                'name'=>'Abyan Tahta',
                'major_id'=>7,
                'email'=>'abyan@gmail.com',
                'nrp'=>6026201012,
                'address'=>'Jalan Kartini 42 Malang',
                'generation'=>2020,
                // 'major'=>'Teknik Komputer',
                // 'faculty'=>'FTEIC',
                'password'=>bcrypt('akusukakuliah123')
            ]);

            User::create([
                'name'=>'Ernando Taufiq',
                'major_id'=>10,
                'email'=>'ernando@gmail.com',
                'nrp'=>6035601012,
                'address'=>'Jalan Bungah 42 Malang',
                'generation'=>2020,
                // 'major'=>'Teknik Komputer',
                // 'faculty'=>'FTEIC',
                'password'=>bcrypt('akusukakuliah123')

            ]);





    }
}
