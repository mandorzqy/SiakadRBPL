<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){
        return view('/login.index',[
            'title'=>"Login",
        ]);
    }

    public function authenticate(Request $request){
        $credentials=$request->validate([
            'nrp'=>'required|numeric',
            'password'=>'required'
        ]);
        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            // return redirect()->intended('/');
            if (auth()->user()->type == 'mahasiswa')
            {
                return redirect()->route('dashboard');
            }
            else if (auth()->user()->type == 'admin') 
            {
                return redirect()->route('admin');
            }
            else if (auth()->user()->type == 'dosen') 
            {
                return redirect()->route('dosen');
            }
                // else if (auth()->user()->type == 'staff') 
                // {
                //     return redirect()->route('dashboard.staff');
                // }
            else
            {
                return redirect()->intended('/');
                // return redirect()->route('/');
            }
        }
        return back()->with('loginError','Login Gagal');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/login');

    }


}
