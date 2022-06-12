<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Score;
use App\Models\Lecturer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DosenFRSController extends Controller
{
    //

    public function hitung(){

    }


    public function index(){
        $doswal=Lecturer::where('nrp',auth()->user()->nrp)->first();
        $users=$doswal->users;
        return view('dosen.frs.index',[
            'title' => 'FRS',
            'users'=>$users->where('type','mahasiswa'),
        ]);
    }

    public function show($nrp){
        $user=User::where('nrp',$nrp)->first();
        $scores=$user->score->load('user','course')->where('tahun',2022);
        return view('dosen.frs.show',[
            'title' => 'Detail FRS',
            'user'=>$user,
            'scores'=>$scores
    ]);
    }


    public function search(Request $request,$id){
        $user=User::find($id);
        // $user=User::find(1);
        $periode=$request->periode;
        $tahun=$request->tahun;
        // $scores=$user->score->load('user','course')->where('tahun',2021);
        $scores=$user->score->load('user','course')->where('periode',$periode)->where('tahun',$tahun);
        return view('dosen.frs.show',[
            'title' => 'Detail FRS',
            'user'=>$user,
            'scores'=>$scores
        ]);
    }


    public function accept(Request $request,$id){
        $user=User::find($id);
        User::find($id)->update([
            'status_frs'=>true
        ]);
        return redirect()->back()->with('success'," FRS {$user->name} telah disetujui");
    }


}
