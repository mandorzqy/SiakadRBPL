<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiayaPendidikanController extends Controller
{
    //
    public function index(){
        return view('/biayapendidikan.index',[
            'title'=>"Biaya Pendidikan",
        ]);
    }
}
