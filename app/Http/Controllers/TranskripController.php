<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranskripController extends Controller
{
    public function index(){
        return view('/akademik.transkrip.index',[
            'title'=>"Transkrip",
        ]);
    }
}
