<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    function index()
    {
        return view('sesi/index');
    }

    function login(Request $request)
    {
        $request->validate([
            'nis'=>'required|numeric',
            'password'=>'required'
        ],[
            'nis.required'=>'NIS Wajib Diisi',
            'password.required'=>'Password Wajib Diisi'
        ]);

        $infologin = [
            'nis' => $request->nis,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            //Jika Berhasil
            return redirect('dashboard');
        }else{
            //Jika Gagal
            return redirect('login');
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect('login');
    }

}
