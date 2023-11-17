<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function index ()
    {
        $siswa = Siswa::orderby('nis','desc')->paginate(5);
        return view('siswa/index', ['siswa'=>$siswa]);
        return response()->json($siswa);
    }
    public function form_siswa()
    {
        return view("siswa/form");
    }
    public function create(Request $request)
    {
        $siswa = new Siswa();
        

        $siswa -> nis = $request -> nis;
        $siswa -> nama = $request -> nama;
        $siswa -> jurusan = $request -> jurusan;
        $siswa -> angkatan = $request -> angkatan;
        $siswa -> password = $request -> password;

        $siswa -> save();
         
        return redirect()->back();
    }
}
