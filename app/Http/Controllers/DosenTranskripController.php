<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;
use App\Models\User;
use App\Models\Major;
class DosenTranskripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dosen.transkrip.index',[
            'title'=>'Transkrip Mahasiswa',
            'users'=>User::all()->where('type','mahasiswa')           
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function hitungIPK($id){
        $ipk=0;
        $sum=0;
        $user=User::find($id);
        $scores=$user->score->load('user','course');
        $sks=$this->hitungSKSTotal($id);

        foreach($scores as $score){
            $sum=($sum)+$score->nilai_angka*$score->classroom->course->sks;
        }
        if($sks!=0){
            $ipk=$sum/$sks;
        }
        return $ipk;
    }
     

    public function hitungSKSTotal($id){
        $sks=0;
        $user=User::find($id);

        // total sks
        $scores=$user->score->load('user','course');
        foreach($scores as $score){
        $sks+=$score->classroom->course->sks;
        }  
        return $sks;
    }


    public function transkrip(User $user){
        return view('transkrip.index',[
            // 'user'=>$user,
            'title'=>'Transkrip',
            'score'=>$user->score->load('user','course'),
            'ipk'=>$this->hitungIPK($user->id),
            'sks'=>$this->hitungSKSTotal($user->id)
        ]);
    }



    public function show($id)
    {
        //
        $user=User::find($id);
        return view('dosen.transkrip.show',[
            'title'=>'Transkrip',
            // 'majors'=>Major::all(),
            'ipk'=>$this->hitungIPK($id),
            'sks'=>$this->hitungSKSTotal($id),
            'user'=>$user,
            'score'=>$user->score->load('user','course')
        ]);

    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $score=Score::find($id);
        return view('dosen.transkrip.edit',
        [
            'title'=>'Edit ',
            'score'=>$score,
            'user'=>$score->user,

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $score=Score::find($id);
        $score->update($request->all());
        return redirect()->route('transkrip.index')->with('success','Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
