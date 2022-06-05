<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('proses.kurikulum.index',[
            'no'=>1,
            'title'=>'Mata Kuliah',
            'courses'=>Course::all()
        ]);
    }

    public function search(Request $request){
        $keyword = $request->search;
        $keyword2=$request->name;
        if($keyword=='all'){
            return view('proses.kurikulum.index',[
                'no'=>1,
                'title'=>'Mata Kuliah',
                'courses'=>Course::all()
            ]);
        }
        else{
             $courses=Course::where([['semester','like','%'.$keyword.'%'],['nama_mata_kuliah','like','%'.$keyword2.'%']])->get();
        return view('proses.kurikulum.index',[
            'no'=>1,
            'title'=>'Mata Kuliah',
            'courses'=>$courses
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
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
