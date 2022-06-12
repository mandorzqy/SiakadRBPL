<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\Classroom;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;

class DosenNilaiController extends Controller
{
    //
    public function editNilai($nrp ,$id)
    {
        $user=User::where('nrp',$nrp)->first();
        $classroom=Classroom::find($id);
        $score=Score::where('user_id',$user->id)->where('classroom_id',$classroom->id)->first();
        return view('laporan.kelas.edit',[
            'title' => 'Kelas',
            'user'=>$user,
            'classroom'=>$classroom,
            'score'=>$score,
        ]);
    }
}
