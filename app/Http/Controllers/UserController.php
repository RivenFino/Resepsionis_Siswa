<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keperluan;

use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request):view
    {
        $keyword = $request->get('search');
        $perPage = 15;
    
        if (!empty($keyword)) {
            $keperluan = Keperluan::where('kode_keperluan', 'LIKE', "$id")
                ->latest()
                ->paginate($perPage);
        } else {
            $keperluan = Keperluan::orderBy('tanggal', 'desc')->paginate($perPage);
        }
    
        $siswa = $keperluan->pluck('siswa')->flatten()->unique();
    
        return view('user.index', compact('keperluan','siswa'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
