<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminKurikulumController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('proses.kurikulum.create',[
            'title'=>'Tambah Mata Kuliah',
            'course'=>new Course()
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
        $course=new Course;
        $course->nama_mata_kuliah=$request->nama_mata_kuliah;
        $course->kode_mk=$request->kode_mk;
        $course->sks=$request->sks;
        $course->semester=$request->semester;
        $course->kode_kelas=$request->kode_kelas;
        $course->tahunKurikulum=$request->tahunKurikulum;
        $course->save();
        return redirect()->route('admin-kurikulum.index')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $course=Course::find($id);
        return view('proses.kurikulum.edit',[
            'title'=>'Edit Mata Kuliah',
            'course'=>$course
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
        $course=Course::find($id);
        $rules=[
            'nama_mata_kuliah'=>'required',
            'sks'=>'required',
            'semester'=>'required',
            'tahunKurikulum'=>'required',
            'kode_kelas'=>'required'
        ];

        if($request->mk!=$course->mk){
            $rules['kode_mk']='required';
        }

        $validatedData=$request->validate($rules);
        // $course=Course::find($id);
        // $course->nama_mata_kuliah=$request->nama_mata_kuliah;
        // $course->kode_mk=$request->kode_mk;
        // $course->sks=$request->sks;
        // $course->semester=$request->semester;
        // $course->kode_kelas=$request->kode_kelas;
        // $course->tahunKurikulum=$request->tahunKurikulum;
        // $course->update();
        $course->update($validatedData);
        return redirect()->route('admin-kurikulum.index')->with('success','Data berhasil diubah');
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
        $matkul=Course::find($id);
        $matkul->delete();
        return back()->with('success','Data berhasil dihapus');
    }
}
