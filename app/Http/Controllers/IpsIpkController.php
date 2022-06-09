<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IpsIpkController extends Controller
{
    public function index(){
        $user=auth()->user();
        $scores=$user->score->load('user','course');
        return view('/akademik.ipsipk.index',[
            'title'=>"IPS / IPK",
            "scores"=>$scores,
            "user"=>$user
        ]);
    }
}
