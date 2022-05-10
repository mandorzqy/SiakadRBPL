<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
                'name'=>'Al Habsi Waliyul Khaq',
                'email'=>'habsikhaq@gmail.com',
                'nrp'=>6026201010,
                'address'=>'Jalan Wijaya Kusuma 123 Jogjakarta',
                'generation'=>2020,
                'major'=>'FTEIC',
                'faculty'=>'Information System',
                'password'=>bcrypt('akusukakuliah123')
            ]);
    
            User::create([
                'name'=>'Ernando Taufiq Nur Hidayat',
                'email'=>'ernando@gmail.com',
                'nrp'=>6026201011,
                'address'=>'Jalan Pahlawan 123 Surabaya',
                'generation'=>2020,
                'major'=>'FTEIC',
                'faculty'=>'Information System',
                'password'=>bcrypt('akusukasi123')
            ]);
    
            User::create([
                'name'=>'Muhammad Fathurahmman',
                'email'=>'fathoor@gmail.com',
                'nrp'=>6026201012,
                'address'=>'Jalan Kartini 42 Malang',
                'generation'=>2020,
                'major'=>'FTEIC',
                'faculty'=>'Information System',
                'password'=>bcrypt('akusukainformasi123')
            ]);

    }
}
