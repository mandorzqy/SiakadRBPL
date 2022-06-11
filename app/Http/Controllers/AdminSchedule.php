<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Schedule;
use App\Models\Classroom;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminSchedule extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.schedule.index',[
            'title'=>'Schedule Mahasiswa',
            'courses'=>Course::all(),
            'schedules'=>Schedule::all()

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
        return view('admin.schedule.create',[
            'title'=>'Tambah schedule',
            'active'=>'schedule',
            'classes'=>Classroom::all(),
            'courses'=>Course::all()
        ]);
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
        $schedule=new Schedule;
        $schedule->classroom_id=$request->classroom_id;
        $schedule->hari=$request->hari;
        $schedule->jam=$request->jam;
        $schedule->save();
        return redirect()->route('schedule.index')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule, $id)
    {
        //
        $user=Schedule::find($id);
        return view('admin.schedule.show',[
            'title'=>'Detail schedule',
            'classes'=>Classroom::all(),
            'student'=>$user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user=Schedule::find($id);
        return view('admin.schedule.edit',[
            'title'=>'Edit schedule',
            'active'=>'schedule',
            'classes'=>Classroom::all(),
            'schedule'=>$user

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $schedule=Schedule::find($id);
        $schedule->classroom_id=$request->classroom_id;
        $schedule->hari=$request->hari;
        $schedule->jam=$request->jam;
        $schedule->save();
        return redirect('admin/schedule')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $schedule=Schedule::find($id);
        $schedule->delete();
        return back()->with('success','Data berhasil dihapus');    }
}
