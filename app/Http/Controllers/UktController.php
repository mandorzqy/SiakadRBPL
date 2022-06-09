<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UKT;

class UktController extends Controller
{
    //
    public function index(){
        $ukt = UKT::where('nrp', auth()->user()->nrp)->get();

        return view('/biayapendidikan.ukt.index',[
            'title'=>"UKT",
            'ukt' => $ukt
        ]);
    }
}
