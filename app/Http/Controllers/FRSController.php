<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FRSController extends Controller
{
    public function index(){
        return view('/proses.frs.index',[
            'title'=>"FRS",
        ]);
    }
}
