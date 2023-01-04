<?php

namespace App\Http\Controllers;
use Auth;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //Login
    public function halamanlogin () {
        return view('Login-Bagas');
    }

    public function postlogin (Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/Home2-Bagas');
        }
        return redirect('/loginpage');   
    }

    public function logout (Request $request){ 
        Auth::logout();
        return redirect('/');
    }

    public function simpanregistrasi(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'password' => bcrypt($request->password),

        ]);
        return view('/Login-Bagas');
    }

    public function registrasi(){
        return view('/Registrasi');
    }

}
