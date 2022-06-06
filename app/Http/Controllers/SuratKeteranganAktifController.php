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
    public function cetak(Request $request){
        return view('/suratmahasiswa.suratketeranganaktif.cetak',[
            'title'=>"Surat Keterangan Aktif",
            'nrp'=>auth()->user()->nrp,
            'tipe'=>$request->tipe,
            'periode'=>$request->periode,
            'keperluan'=>$request->keperluan,
            'bahasa'=>$request->bahasa
        ]);
    }
}
