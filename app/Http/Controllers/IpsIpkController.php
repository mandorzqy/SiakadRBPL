<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IpsIpkController extends Controller
{
    public function index(){
        return view('/akademik.ipsipk.index',[
            'title'=>"IPS / IPK",
        ]);
    }
}
