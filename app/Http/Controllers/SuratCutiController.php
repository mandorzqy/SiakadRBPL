<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratCuti;

class SuratCutiController extends Controller
{
    public function index(){
        $suratcuti = SuratCuti::where('nrp', auth()->user()->nrp)->orderBy('periode', 'ASC')->get();

        return view('/suratmahasiswa.suratcuti.index',[
            'title'=>"Surat Cuti",
            'suratcuti' => $suratcuti
        ]);
    }

    public function simpan(Request $request)
    {
        SuratCuti::insert([
            'nrp' => auth()->user()->nrp,
            'tipe' => $request->tipe,
            'periode' => $request->periode,
            'alasan' => $request->alasan,
            'durasi' => $request->durasi,
            'bahasa' => $request->bahasa
        ]);

        return redirect('/suratcuti');
    }
}
