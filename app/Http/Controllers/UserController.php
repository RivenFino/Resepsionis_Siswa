<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keperluan;
use App\Models\Siswa;
use Illuminate\Support\Facades\DB;

use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request){
            $request->validate([
                'nis' => 'required|exists:siswa,nis',
            ]);
        
            // Ambil data siswa berdasarkan NIS
            $siswa = Siswa::where('nis', $request->nis)->first();
        
            if ($siswa) {
                $id = $siswa->id;
        
                // Ambil data keperluan berdasarkan ID siswa
                $keperluan = Keperluan::where('id_siswa', $id)->get(); // Gunakan get() untuk menjalankan query
        
                // Kirim data ke halaman kedua
                return view('user.index', ['keperluan' => $keperluan, 'siswa' => $siswa]);
            } else {
                $notif = "Siswa dengan NIS $request->nis tidak ditemukan";
                return view('user.index', compact('notif'));
            }
        }else{
            return view('user.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function getStudent($nis)
    {
        $siswa = Siswa::where('nis', $nis)->first();

        if ($siswa) {
            // Mengembalikan data siswa dalam format JSON
            return response()->json($siswa);
        } else {
            // Jika siswa tidak ditemukan, mengembalikan respons kosong
            return response()->json(null);
        }
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
        return view('user.form', ['siswa' => $siswa]);
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
    
        return view('welcome')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
