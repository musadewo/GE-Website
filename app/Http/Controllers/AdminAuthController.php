<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    function index(){
        $data = [
            'content' => 'Frontend/auth/login'
        ];
        return view('Frontend.layouts.wrapper', $data);
    }

    function doLogin(Request $request){
        // dd($request->all());
        $data = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect('admin/dashboard');
        }
        return back()->with('loginError','Gagal Login, Username atau Password Salah');
    }

    function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}