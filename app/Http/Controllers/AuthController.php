<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function proses(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/')->with('message', '<div class="alert 
            alert-success">Login Berhasil</div>');;
        }

        return redirect('/login')->with('message', '<div class="alert 
        alert-danger">Login Gagal</div>');

    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
