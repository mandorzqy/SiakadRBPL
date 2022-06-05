<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KuesionerController extends Controller
{
    public function index(){
        return view('/proses.kuesioner.index',[
            'title'=>"Kuesioner",
        ]);
    }
}
