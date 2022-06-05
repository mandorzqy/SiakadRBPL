<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IkomaController extends Controller
{
    //
    public function index(){
        return view('/biayapendidikan.ikoma.index',[
            'title'=>"Biaya Pendidikan",
        ]);
    }
}
