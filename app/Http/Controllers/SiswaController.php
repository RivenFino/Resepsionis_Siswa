<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Siswa;
use Illuminate\Http\RedirectResponse;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $keyword = $request->get('search');
        $perPage=5;
        if(!empty($keyword)){
            $siswa = Siswa::where('nama', 'LIKE', "%$keyword%")
                ->orWhere('nis', 'LIKE', "%$keyword")
                ->orWhere('angkatan', 'LIKE', "%$keyword")
                ->orWhere('jurusan', 'LIKE', "%$keyword")
                ->latest()->paginate($perPage);
        }else
        {
            $siswa = Siswa::orderby('nis','desc')->paginate(5);
        }
        return view('siswa.index', ['siswa'=> $siswa])->with('i', (request()->input('page',1) -1) *5);
        return response()->json($siswa); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('siswa.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) 
    {
        $siswa = new Siswa;
        // $request->validate([
        //     'nis' => 'required|unique:siswa,nis',
        //     'nama' => 'required',
        //     'jurusan' => 'required',
        //     'angkatan' => 'required|numeric',
        // ]);
        // Siswa::create($request->all());
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->jurusan = $request->jurusan;
        $siswa->angkatan = $request->angkatan;
        $siswa->save();

        return redirect()->route('siswa.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa) : View
    {
        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) : View
    {
        $siswa = Siswa::findOrFail($id);
    
        return view('siswa.edit')->with('siswa', $siswa);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa) 
    {
    

        $siswa = Siswa::find($request->hidden_id);

        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->jurusan = $request->jurusan;
        $siswa->angkatan = $request->angkatan;
        $siswa->save();
        
        return redirect()->route('siswa.index')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    $siswa = Siswa::findOrFail($id);

    $siswa->delete();
    return redirect()->route('siswa.index')
    ->with('success', 'Data Siswa berhasil dihapus');
    }
}

