<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::orderby('nis','desc')->paginate(5);
        return view('siswa.index', ['siswa'=> $siswa]);
        return response()->json($siswa);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|unique:siswa,nis',
            'nama' => 'required',
            'jurusan' => 'required',
            'angkatan' => 'required|numeric',
            'password' => 'required',
        ]);
        Siswa::create($request->all());

return redirect('/siswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa$siswa)
    {
        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa$siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa$siswa)
    {
        $request->validate([
            'nis' => 'required|unique:siswa,nis',
            'nama' => 'required',
            'jurusan' => 'required',
            'angkatan' => 'required|numeric',
            'password' => 'required',
            ]);
            
            $siswa->update($request->all());
            
            return redirect()->route('siswa.index')
            ->with('success', 'Siswa updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa$siswa)
    {
        $siswa->delete();

return redirect()->route('siswa.index')
->with('success', 'Siswa deleted successfully');
}
    }

