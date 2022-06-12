<?php

namespace Database\Seeders;

use App\Models\Lecturer;
use Illuminate\Database\Seeder;

class LecturersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
        //
        Lecturer::insert([
            [
                'name'=>'Radityo Prasetianto Wibowo',
                'nrp'=>602621,
            ],
            [
                'name'=>'Faizal Johan Atletiko',
                'nrp'=>602622,
            ],
                ]);

    }
}
