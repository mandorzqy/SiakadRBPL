<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratUndurDiriController extends Controller
{
    public function index(){
        return view('/suratmahasiswa.suratundurdiri.index',[
            'title'=>"Surat Undur Diri ",
        ]);
    }
}
