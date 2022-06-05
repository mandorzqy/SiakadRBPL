<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UktController extends Controller
{
    //
    public function index(){
        return view('/biayapendidikan.ukt.index',[
            'title'=>"UKT",
        ]);
    }
}
