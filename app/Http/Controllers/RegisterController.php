<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function create(){
        return view('/register.index',[
            'title'=>"Register",
            // 'active'=>'register'
        ]);
    }
    public function store(Request $request){
        $validatedData=$request->validate([
            'name'=>'required|max:255',
            'nrp'=>'required|numeric',
            'email'=>'required|email:dns|unique:users',
            'password'=>'required|min:5|max:255',
            'generation'=>'required|numeric|max:2100',
            'major'=>'required|max:255',
            'faculty'=>'required|max:255',
            'address'=>'required|max:255'
            
        ]);
        // enkripsi password dengan hash
        // $validatedData['password']=bcrypt($validatedData['password]);
        $validatedData['password']=Hash::make($validatedData['password']);

        User::create($validatedData);
        // $request->session()->flash('success','Registration Successfull, Please Login');
        return redirect('/login')->with('success','Registration Successfull, Please Login');
        
    }
}
