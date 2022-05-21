<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Score;
use App\Models\Course;
use App\Models\Department;
use App\Models\Faculty;
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
        User::create([
                'name'=>'Al Habsi Waliyul Khaq',
                'email'=>'habsikhaq@gmail.com',
                'nrp'=>6026201010,
                'address'=>'Jalan Wijaya Kusuma 123 Yogyakarta',
                'generation'=>2020,
                'major'=>'Sistem Informasi',
                'faculty'=>'FTEIC',
                'password'=>bcrypt('akusukakuliah123')
            ]);

            User::create([
                'name'=>'Hatif Isfahani',
                'email'=>'hatif@gmail.com',
                'nrp'=>6026201011,
                'address'=>'Jalan Pahlawan 123 Surabaya',
                'generation'=>2020,
                'major'=>'FTEIC',
                'faculty'=>'Sistem Informasi',
                'password'=>bcrypt('akusukakuliah123')
            ]);

            User::create([
                'name'=>'Abyan Tahta',
                'email'=>'abyan@gmail.com',
                'nrp'=>6026201012,
                'address'=>'Jalan Kartini 42 Malang',
                'generation'=>2020,
                'major'=>'Teknik Komputer',
                'faculty'=>'FTEIC',
                'password'=>bcrypt('akusukakuliah123')
            ]);

            User::create([
                'name'=>'Ernando Taufiq',
                'email'=>'ernando@gmail.com',
                'nrp'=>6035601012,
                'address'=>'Jalan Bungah 42 Malang',
                'generation'=>2020,
                'major'=>'Teknik Komputer',
                'faculty'=>'FTEIC',
                'password'=>bcrypt('akusukakuliah123')

            ]);


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
            Department::create([
                'nama_departemen'=>'Fisika',
                'faculty_id'=>'4'
            ]);
            Department::create([
                'nama_departemen'=>'Matematika',
                'faculty_id'=>'4'
            ]);
            Department::create([
                'nama_departemen'=>'Statistika',
                'faculty_id'=>'4'
            ]);
            Department::create([
                'nama_departemen'=>'Kimia',
                'faculty_id'=>'4'
            ]);
            Department::create([
                'nama_departemen'=>'Biologi',
                'faculty_id'=>'4'
            ]);
            Department::create([
                'nama_departemen'=>'Aktuaria',
                'faculty_id'=>'4'
            ]);
            //FTK
            Department::create([
                'nama_departemen'=>'Teknik Perkapalan',
                'faculty_id'=>'6'
            ]);
            Department::create([
                'nama_departemen'=>'Teknik Kelautan',
                'faculty_id'=>'6'
            ]);
            //FTIRS
            Department::create([
                'nama_departemen'=>'Teknik Mesin',
                'faculty_id'=>'3'
            ]);
            //FTEIC
            Department::create([
                'nama_departemen'=>'Sistem Informasi',
                'faculty_id'=>'1'
            ]);
            //FTSPK
            Department::create([
                'nama_departemen'=>'Teknik Sipil',
                'faculty_id'=>'5'
            ]);
            //FDKBD
            Department::create([
                'nama_departemen'=>'Desain Interior',
                'faculty_id'=>'7'
            ]);
            //Vokasi
            Department::create([
                'nama_departemen'=>'Teknik Mesin industri',
                'faculty_id'=>'2'
            ]);




    }
}
