<?php

namespace Database\Seeders;

use App\Models\Faculty;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
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
            ],
            [
                'nama_fakultas'=>'ITS',
            ]
                ]);

    }
}
