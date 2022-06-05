<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratKeteranganAktifController extends Controller
{
    public function index(){
        return view('/suratmahasiswa.suratketeranganaktif.index',[
            'title'=>"Surat Keterangan Aktif",
        ]);
    }
}
