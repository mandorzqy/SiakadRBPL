<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Schedule;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user=auth()->user();
        $schedules=$user->schedules;
        return view('schedule.index',['title'=>'Jadwal','schedules'=>$schedules]);
    }


    public function search(Request $request){
        $user=auth()->user();
        $hari = $request->hari;
        // $nama_mata_kuliah=$request->name;
        $schedules1=$user->schedules;
        if($hari==='all'){
            return view('schedule.index',[
                'title'=>'Jadwal',
                'schedules'=>$schedules1
            ]);
        }
        else{
             $schedules2=$user->schedules->where('hari','=',$hari);
        return view('schedule.index',[
            'title'=>$hari,
            'schedules'=>$schedules2
        ]);
        }
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
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        //
    }
}
