<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('auths.login');
    }
    public function postlogin(Request $request){
       if(Auth::attempt($request->only('email','password'))){
            return redirect('/admin');
        }
        return redirect('/login');
    }
}
