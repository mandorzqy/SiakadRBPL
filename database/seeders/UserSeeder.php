<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'name'=>'Al Habsi Waliyul Khaq',
                'major_id'=>10,
                'email'=>'habsikhaq@gmail.com',
                'nrp'=>6026201010,
                'address'=>'Jalan Wijaya Kusuma 123 Yogyakarta',
                'generation'=>2020,
                // 'major'=>'Sistem Informasi',
                // 'faculty'=>'FTEIC',
                'password'=>bcrypt('admin123'),
                'type' => 0,
                'lecturer_id'=>1,
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
                'password'=>bcrypt('admin123'),
                'type' => 0,
                'lecturer_id'=>2,
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
                'password'=>bcrypt('admin123'),
                'type' => 0,
                'lecturer_id'=>2,
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
                'password'=>bcrypt('admin123'),
                'type' => 0,
                'lecturer_id'=>1,

            ],

            [
                'name'=>'Admin',
                'major_id'=>13,
                'email'=>'admin@gmail.com',
                'nrp'=>502620,
                'address'=>'Institut Teknologi Sepuluh Nopember Surabaya',
                'generation'=>2000,
                // 'major'=>'Teknik Komputer',
                // 'faculty'=>'FTEIC',
                'password'=>bcrypt('admin123'),
                'type' => 2,
                'lecturer_id'=>1,

            ],
            [
                'name'=>'Dosen',
                'major_id'=>13,
                'email'=>'dosen@gmail.com',
                'nrp'=>602620,
                'address'=>'Institut Teknologi Sepuluh Nopember Surabaya',
                'generation'=>2000,
                // 'major'=>'Teknik Komputer',
                // 'faculty'=>'FTEIC',
                'password'=>bcrypt('dosen123'),
                'type' => 1,
                'lecturer_id'=>2,

            ],
            [
                'name'=>'Radityo Prasetianto Wibowo',
                'major_id'=>13,
                'email'=>'radityo@gmail.com',
                'nrp'=>602621,
                'address'=>'Institut Teknologi Sepuluh Nopember Surabaya',
                'generation'=>2000,
                // 'major'=>'Teknik Komputer',
                // 'faculty'=>'FTEIC',
                'password'=>bcrypt('dosen123'),
                'type' => 1,
                'lecturer_id'=>2,

            ],
            [
                'name'=>'Faizal Johan Atletiko',
                'major_id'=>13,
                'email'=>'faizal@gmail.com',
                'nrp'=>602622,
                'address'=>'Institut Teknologi Sepuluh Nopember Surabaya',
                'generation'=>2000,
                // 'major'=>'Teknik Komputer',
                // 'faculty'=>'FTEIC',
                'password'=>bcrypt('dosen123'),
                'type' => 1,
                'lecturer_id'=>1,
            ]

            ]);
    }
}
