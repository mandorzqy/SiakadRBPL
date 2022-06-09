<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalKuliahController extends Controller
{
    public function index(){
        return view('/laporan.jadwalkuliah.index',[
            'title'=>"Jadwal Kuliah",
        ]);
    }


}
