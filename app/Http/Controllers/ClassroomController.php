<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\Lecturer;
use App\Models\Classroom;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
    }


    public function indexMahasiswa(){
        $user=auth()->user();
        $classrooms=Classroom::all();
        return view('laporan.kelas.index',[
            'title' => 'Kelas',
            'user'=>$user,
            'classrooms'=>$classrooms,
            
        ]);
    }

    public function indexDosen(){
        $user=auth()->user();
        $lecturer=Lecturer::where('nrp',$user->nrp)->first();
        $mahasiswa=$lecturer->users->where('type','mahasiswa');
        $classrooms=$lecturer->classrooms;
        return view('laporan.kelas.index',[
            'title' => 'Kelas',
            'user'=>$user,
            'classrooms'=>$classrooms,
        ]);
    }


    public function showMahasiswa($id){
        $classroom=Classroom::find($id);
        $users=$classroom->user;
        $scores=$classroom->scores;
        return view('laporan.kelas.show',[
            'title' => 'Kelas',
            'classroom'=>$classroom,
            'users'=>$users,
            'scores'=>$scores,
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
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        //
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Classroom  $classroom
    //  * @return \Illuminate\Http\Response
    //  */
    public function edit($nrp)
    {
        $user=User::find($nrp);
        dd($user);
        // $classroom=Classroom::find($id);
        // $score=Score::where('user_id',$user->id)->where('classroom_id',$classroom->id)->first();
        // return view('laporan.kelas.edit',[
        //     'title' => 'Kelas',
        //     'user'=>$user,
        //     'classroom'=>$classroom,
        //     'score'=>$score,
        // ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        
        $classroom=Classroom::find($request->id);
        $user=User::where('nrp',$request->nrp)->first();
        $score=Score::where('user_id',$user->id)->where('classroom_id',$classroom->id)->first();
        $score->nilai_angka=$request->nilai_angka;
        $score->save();
        return redirect('dosen-kelas/'.$request->id)->with('success', 'Nilai Berhasil Diubah');   
        
    }

    /**
     * Remove the specified resource from storage.  
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classroom $classroom)
    {
        //
    }
}
