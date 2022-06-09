<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratMundur;

class SuratUndurDiriController extends Controller
{
    public function index(){
        $suratmundur = SuratMundur::where('nrp', auth()->user()->nrp)->orderBy('periode', 'ASC')->get();

        return view('/suratmahasiswa.suratundurdiri.index',[
            'title'=>"Surat Undur Diri ",
            'suratmundur' => $suratmundur
        ]);
    }

    public function simpan(Request $request)
    {
        SuratMundur::insert([
            'nrp' => auth()->user()->nrp,
            'tipe' => $request->tipe,
            'periode' => $request->periode,
            'alasan' => $request->alasan,
            'bahasa' => $request->bahasa
        ]);

        return redirect('/suratundurdiri');
    }
}
