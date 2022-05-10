<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function create(){
        return view('/register.index',[
            'title'=>"Register",
            'active'=>'register'
        ]);
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required|max:255',
            'nrp'=>'required|numeric',
            'email'=>'required|email',
            'password'=>'required|min:5|max:255'
        ]);
    }
}
