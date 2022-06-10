<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class IpsIpkController extends Controller
{
    public function index(){
        $user=auth()->user();
        $scores=$user->score->load('user','course');
        $ipk=$this->hitungIPK();
        $sks=$this->hitungSKSTotal();
        $ips='pilih semester';

        return view('/akademik.ipsipk.index',[
            'title'=>"IPS / IPK",
            "scores"=>$scores,
            "user"=>$user,
            "ipk"=>$ipk,
            "sks"=>$sks,
            "ips"=>$ips
        ]);
    }



    public function search(Request $request){
        $user=auth()->user();
        $id=$user->id;
        $scores=$user->score;
        $keyword = $request->search;
        $ipk=$this->hitungIPK();
        $sks=$this->hitungSKS();
        $ips=$this->hitungIPS();

        if($keyword=='all'){
            return view('/akademik.ipsipk.index',[
                'title'=>'Mata Kuliah',
                "scores"=>$scores,
                "user"=>$user,
                "ipk"=>$ipk,
                "sks"=>$sks,
                "ips"=>$ips
            ]);
        }
        // tampilkan nilai user yang semesternya sama dengan keyword
        else{
           $scores=$user->score->where('semester',$keyword)->load('user','course');
           return view('/akademik.ipsipk.index',[
            'title'=>'Mata Kuliah',
            "scores"=>$scores,
            "user"=>$user,
            "sks"=>$sks,
            "ipk"=>$ipk,
            "ips"=>$ips

        ]);
        }


    }

    public function hitungIPK(){
        $ipk=0;
        $sum=0;
        $user=auth()->user();
        $scores=$user->score->load('user','course');
       $sks=$this->hitungSKSTotal();

        foreach($scores as $score){
            $sum=($sum)+$score->nilai_angka*$score->classroom->course->sks;
        }
        if($sks!=0){
            $ipk=$sum/$sks;
        }
        return $ipk;
    }


    public function hitungIPS(){
        
        $sum=0;
        $ips=0;
        $user=auth()->user();
        if(Request()->search=='all'){
            return 0;
        }
        else{
            $scores=$user->score->where('semester',Request()->search)->load('user','course');
        }

       $sks=$this->hitungSKS();

        foreach($scores as $score){
            $sum=($sum)+$score->nilai_angka*$score->classroom->course->sks;
        }
        if($sks!=0){
            $ips=$sum/$sks;
        }
        return $ips;
    }


    public function hitungSKS(){
        $sks=0;
        $user=auth()->user();

        // total sks
        if(Request()->search=='all'){
            $scores=$user->score->load('user','course');
        }
        else{
            $scores=$user->score->where('semester',Request()->search)->load('user','course');
        }
        foreach($scores as $score){
            $sks+=$score->classroom->course->sks;
        }  
        return $sks;
    }


    public function hitungSKSTotal(){
        $sks=0;
        $user=auth()->user();

        // total sks
        $scores=$user->score->load('user','course');
        foreach($scores as $score){
        $sks+=$score->classroom->course->sks;
        }  
        return $sks;
    }
}
