<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratMahasiswaController extends Controller
{
    public function index(){
        return view('/suratmahasiswa.index',[
            'title'=>"Surat Mahasiswa",
        ]);
    }
}
