<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\SuratCuti;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SuratCutiController extends Controller
{
    public function index(){
        $suratcuti = SuratCuti::where('nrp', auth()->user()->nrp)->orderBy('periode', 'ASC')->get();

        return view('/suratmahasiswa.suratcuti.index',[
            'title'=>"Surat Cuti",
            'suratcuti' => $suratcuti
        ]);
    }

    public function indexAdmin(){
        $letters=SuratCuti::join('users','users.nrp','=','surat_cuti.nrp')->get();
        return view('admin.surat.surat-cuti.index',[
            'title'=>"Surat Cuti",
            'letters'=>$letters
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


    public function accept($nrp){
        SuratCuti::where('nrp',$nrp)->update([
            'status'=>true
        ]);
        return redirect('admin/surat/cuti')->with('success'," Surat telah disetujui");
    }

    public function reject($nrp){
        SuratCuti::where('nrp',$nrp)->update([
            'status'=>false
        ]);
        return redirect('admin/surat/cuti')->with('success'," Surat telah disetujui");
    }
}
