<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Staf;
use Illuminate\Support\Facades\Hash;


class StafController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        
        $keyword = $request->get('search');
        $perPage=5;
        if(!empty($keyword)){
            $staf = staf::where('nama', 'LIKE', "%$keyword%")
                ->orWhere('nip', 'LIKE', "%$keyword")
                ->orWhere('no_telepon', 'LIKE', "%$keyword")
                ->latest()->paginate($perPage);
        }else
        {
            $staf = staf::orderby('nip','desc')->paginate(5);
        }
        return view('staf.index', ['staf'=> $staf,])->with('i', (request()->input('page',1) -1) *5);
        return response()->json($staf); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('staf.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $staf = new Staf;
        $validatedData = $request->validate([
            'nip' => 'required|string',
            'nama' => 'required|string|max:255',
            'no_telepon' => 'required|string',
            'password' => 'required|string',
        ]);
    
        $hashedPassword = Hash::make($validatedData['password']);
    
        try {
            $staf = Staf::create([
                'nip' => $validatedData['nip'],
                'nama' => $validatedData['nama'],
                'no_telepon' => $validatedData['no_telepon'],
                'password' => $hashedPassword,
                // ... tambahkan kolom lainnya sesuai kebutuhan
            ]);
        
            return redirect()->route('staf.index')->with('success', 'Data berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->route('staf.create')->withInput()->withErrors(['success' => 'Gagal menambahkan data. Silakan coba lagi.']);
        }
        
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $staf = Staf::findOrFail($id);
    
        return view('staf.edit')->with('staf', $staf);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $staf = staf::find($request->hidden_id);
        $validatedData = $request->validate([
            'nip' => 'required|string',
            'nama' => 'required|string|max:255',
            'no_telepon' => 'required|string',
        ]);
    
    
        try {
            $staf->update([
                'nip' => $validatedData['nip'],
                'nama' => $validatedData['nama'],
                'no_telepon' => $validatedData['no_telepon'],
            ]);
        
            return redirect()->route('staf.index')->with('success', 'Data berhasil diubah');
        } catch (\Exception $e) {
            return redirect()->route('staf.edit', $staf->id)->withInput()->withErrors(['success' => 'Gagal mengubah data. Silakan coba lagi.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    $staf = Staf::findOrFail($id);

    $staf->delete();
    return redirect()->route('staf.index')
    ->with('success', 'Data Staf berhasil dihapus');
    }
}
