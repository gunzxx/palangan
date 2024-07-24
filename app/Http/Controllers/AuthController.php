<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function authLogin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only(['email', 'password']);
        if(auth()->attempt($credentials)){
            $token = auth()->guard('api')->attempt($credentials);
            return redirect('/admin')->with([
                'token' => $token,
            ]);
        };

        return back()->withErrors([
            'error' => 'Email atau password salah'
        ]);
    }
    
    public function logout(){
        auth()->logout();
        return redirect('/');
    }
}
