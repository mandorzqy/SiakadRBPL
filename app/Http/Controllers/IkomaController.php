<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ikoma;

class IkomaController extends Controller
{
    //
    public function index(){
        $ikoma = Ikoma::where('nrp', auth()->user()->nrp)->get();

        return view('/biayapendidikan.ikoma.index',[
            'title'=>"Biaya Pendidikan",
            'ikoma' => $ikoma
        ]);
    }
}
