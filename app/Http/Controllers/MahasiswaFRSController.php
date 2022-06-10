<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Score;
use App\Models\Classroom;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class MahasiswaFRSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
        public function index(){
            $user=auth()->user();
            $scores=$user->score->load('user','course')->where('tahun',2022)->where('periode','2');
            $classrooms=Classroom::all();

            $startDate = Carbon::createFromFormat('Y-m-d','2022-01-31');
            $endDate = Carbon::createFromFormat('Y-m-d','2022-02-05');
            $masaFrs = Carbon::now()->between($startDate,$endDate);

        return view('proses.frs.index',[
                'title' => 'FRS',
                'user'=>$user,
                'scores'=>$scores,
                'classrooms'=>$classrooms,
                'masaFrs'=>$masaFrs,
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
        // auth()->user()->classrooms->where('id',$request->classroom_id)->first()->course->sks;\
        $array=[];
        $sks=0;
        $classroom=Classroom::find($request->classroom_id);
        foreach($classroom->user as $user){
            array_push($array,$user->id);
        }
        $tambahansks=$classroom->course->where('id',$request->classroom_id)->first()->sks;
        foreach(auth()->user()->classrooms as $classroom){
            $sks+=$classroom->course->sks;
        }  
        $sks=$sks+$tambahansks;
        if($request->action=='ambil'){
            if ($sks>24) return redirect()->back()->with('errorsks','SKS yang anda ambil melebihi batas maksimum');
            if(in_array(auth()->user()->id,$array)) return redirect()->back()->with('errorsks','Anda sudah mengambil matkul ini');
            if($classroom->user->count()+$tambahansks>$classroom->kapasitas) return redirect()->back()->with('errorsks','Kapasitas kelas penuh');
                DB::table('classroom_user')->insert([
                    [
                        'user_id'=>auth()->user()->id,
                        'classroom_id'=>$request->input('classroom_id')
                    ]
                ]);
                return redirect()->back()->with('success','Anda berhasil mendaftar ke kelas ');
        }
            if($request->action=='peserta'){
            return redirect('/kelas/'.$request->classroom_id);
        }
        
        
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
        $user=auth()->user();
        $scores=$user->score->load('user','course')->where('tahun',2022);
        return view('proses.frs.index',[
            'title' => 'Detail FRS',
            'user'=>$user,
            'scores'=>$scores
    ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Score $score)
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
