<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarMhsMkController extends Controller
{
    public function index(){
        return view('/laporan.daftarmhsmk.index',[
            'title'=>"Daftar Mahasiswa dan Mata Kuliah",
        ]);
    }
}
