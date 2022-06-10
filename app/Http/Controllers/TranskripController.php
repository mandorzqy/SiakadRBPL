<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\IpsIpkController;

class TranskripController extends Controller
{

   


    public function index(){
        $ipk=$this->hitungIPK();
        $sks=$this->hitungSKSTotal();
        return view('/akademik.transkrip.index',[
            'title'=>"Transkrip",
            "ipk"=>$ipk,
            "sks"=>$sks
        ]);
    }
}
