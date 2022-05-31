<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
        return view('dosen.dosenDashboard.index',[
            'title'=>"Dosen",
        ]);
    }
}
