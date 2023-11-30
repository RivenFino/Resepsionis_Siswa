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
    function siswa()
    {
        return view('sesi/siswa');
    }

    function login(Request $request)    
    {
        $request->validate([
            'nip'=>'required|numeric',
            'password'=>'required'
        ],[
            'nip.required'=>'Mohon isi NIP',
            'password.required'=>'Password Wajib Diisi'
        ]);

        $infologin = [
            'nip' => $request->nip,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            //Jika Berhasil
            return redirect('dashboard')->with('success', 'Selamat Anda berhasil Login');
        }else{
            //Jika Gagal
            return redirect('login');
            
        }
    }
    function loginSiswa(Request $request)
    {
        $request->validate([
            'nis'=>'required|numeric',
        ],[
            'nis.required'=>'NIS Wajib Diisi',
        ]);

        $infologin = [
            'nis' => $request->nis,
        ];

        if (Auth::attempt($infologin)) {
            //Jika Berhasil
            return redirect('dashboard');
        }else{
            //Jika Gagal
            return redirect('loginSiswa');
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect('login')->with('success', 'Anda telah Logout');
    }

}
