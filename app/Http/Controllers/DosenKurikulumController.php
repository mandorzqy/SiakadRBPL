<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenKurikulumController extends Controller
{
    public function index(){
        return view('/dosen.kurikulum.index',[
            'title'=>"Kurikulum",
        ]);
    }
    //
}
