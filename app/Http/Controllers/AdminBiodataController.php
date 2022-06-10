<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Major;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminBiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.biodata.index',[
            'title'=>'Biodata Mahasiswa',
            'students'=>User::all()
            
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
        return view('admin.biodata.create',[
            'title'=>'Tambah Biodata',
            'active'=>'biodata',
             'majors'=>Major::all()
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
        $biodata=new User;
        $biodata->nrp=$request->nrp;
        $biodata->name=$request->name;
        $biodata->email=$request->email;
        $biodata->password=bcrypt($request->password);
        $biodata->major_id=$request->major_id;
        $biodata->address=$request->address;
        $biodata->generation=$request->generation;
        $biodata->save();
        return redirect()->route('biodata.index')->with('success','Data berhasil ditambahkan');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user=User::find($id);
        return view('admin.biodata.show',[
            'title'=>'Detail Biodata',
            's'=>Major::all(),
            'student'=>$user
        ]);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user=User::find($id);
        return view('admin.biodata.edit',
        [
            'title'=>'Edit Biodata',
            'active'=>'biodata',
            'majors'=>Major::all(),
            'biodata'=>$user

        ]);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $biodata=User::find($id);
        $biodata->nrp=$request->nrp;
        $biodata->name=$request->name;
        $biodata->email=$request->email;
        $biodata->password=bcrypt($request->password);
        $biodata->major_id=$request->major_id;
        $biodata->address=$request->address;
        $biodata->generation=$request->generation;
        $biodata->save();
        return redirect('admin/biodata')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $biodata=User::find($id);
        $biodata->delete();
        return redirect('admin/biodata')->with('success','Data berhasil dihapus');
    }
}
