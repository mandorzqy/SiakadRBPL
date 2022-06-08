<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YudisiumController extends Controller
{
    public function index(){
        return view('/yudisium.index',[
            'title'=>"Yudisium",
        ]);
    }
}
