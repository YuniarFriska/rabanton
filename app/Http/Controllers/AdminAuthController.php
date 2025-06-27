<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    //
    function index(){
        $data = [
            'content' => 'admin/auth/login'
        ];
        return view('home.auth.login', $data);
    }

    function doLogin(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        //Lempar ke Admin Jika berhasil login
        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect('/admin/dashboard');
        }

        return back()->with('loginError', 'Gagal Login, Email atau Password Tidak Ditemukan');
    }

    function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }
}
