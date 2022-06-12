<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Http\Requests\StoreScoreRequest;
use App\Http\Requests\UpdateScoreRequest;
use App\Models\User;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('transkrip.index',['title'=>'Biodata']);
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


    public function transkrip(User $user){
        return view('transkrip.index',[
            'title'=>'Transkrip',
            'score'=>$user->score->load('user','course'),
            'ipk'=>$this->hitungIPK(),
            'sks'=>$this->hitungSKSTotal(),
            'user'=>auth()->user()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreScoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreScoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function show(Score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function edit(Score $score)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateScoreRequest  $request
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateScoreRequest $request, Score $score)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function destroy(Score $score)
    {
        //
    }
}
