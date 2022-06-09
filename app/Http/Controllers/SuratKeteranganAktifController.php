<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratAktif;

class SuratKeteranganAktifController extends Controller
{
    public function index(){
        $surataktif = SuratAktif::where('nrp', auth()->user()->nrp)->orderBy('periode', 'ASC')->get();

        return view('/suratmahasiswa.suratketeranganaktif.index',[
            'title'=>"Surat Keterangan Aktif",
            'surataktif' => $surataktif
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

    public function simpan(Request $request)
    {
        SuratAktif::insert([
            'nrp' => auth()->user()->nrp,
            'tipe' => $request->tipe,
            'periode' => $request->periode,
            'keperluan' => $request->keperluan,
            'bahasa' => $request->bahasa
        ]);

        return redirect('/suratketeranganaktif');
    }
}
