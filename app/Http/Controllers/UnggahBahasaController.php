<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnggahBahasaController extends Controller
{
    public function index(){
        return view('/yudisium.unggahbahasa.index',[
            'title'=>"Unggah Nilai Bahasa Asing",
        ]);
    }
}
