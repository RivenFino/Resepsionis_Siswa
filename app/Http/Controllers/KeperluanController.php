<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keperluan;
use App\Models\Siswa;
use Illuminate\View\View;
use Carbon\Carbon;

class KeperluanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $keyword = $request->get('search');
        $perPage = 15;
    
        if (!empty($keyword)) {
            $keperluan = Keperluan::where('kode_keperluan', 'LIKE', "%$keyword%")
                ->orWhere('keperluan', 'LIKE', "%$keyword%") // Perbaikan pada kondisi pencarian
                ->orWhere('keterangan', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->latest()
                ->paginate($perPage);
        } else {
            $keperluan = Keperluan::orderBy('tanggal', 'desc')->paginate($perPage);
        }
    
        $siswa = $keperluan->pluck('siswa')->flatten()->unique();
    
        return view('keperluan.index', compact('keperluan','siswa'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('keperluan.form');
    }

    public function processForm(Request $request)
    {
        // Validasi input
        $request->validate([
            'nis' => 'required|exists:siswa,nis',
        ]);

        // Ambil data siswa berdasarkan NIS
        $siswa = Siswa::where('nis', $request->nis)->first();

        // Kirim data ke halaman kedua
        return view('keperluan.form-2', ['siswa' => $siswa]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nis' => 'required|string',
            'keperluan' => 'required|string',
            'keterangan' => 'required|string',
        ]);

        $siswa = Siswa::where('nis', $request->nis)->first();
        $siswaId = $siswa->id;

        $now = now();
        $date = $now->format('Ymd');
        $time = $now->format('His');

        $keperluan = Keperluan::create([
            'kode_keperluan' => $validatedData['nis']."_".$date."_".$time,
            'id_siswa' => $siswaId,
            'keperluan' => $validatedData['keperluan'],
            'keterangan' => $validatedData['keterangan'],
            'tanggal' => $date,
            'waktu' => $time,
            'status' => 'unconfirm',
        ]);
    
        return redirect()->route('keperluan.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $keperluan = Keperluan::findOrFail($id);

        return view('keperluan.detail')->with('keperluan', $keperluan);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $keperluan = Keperluan::findOrFail($id);
    
        return view('keperluan.edit')->with('keperluan', $keperluan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $keperluan = Keperluan::find($request->hidden_id);

        $request = $request->validate([
            'status' => 'required',
        ]);

        $keperluan->update([
            'status' => $request['status'],
        ]);
    
        return redirect()->route('keperluan.index')->with('success', 'Berhasil mengubah status');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
