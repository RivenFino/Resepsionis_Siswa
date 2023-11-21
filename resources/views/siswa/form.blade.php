@extends('layouts.main')
@section('title', 'Form Siswa')
@section('container')

    <div class="">
        <form action="siswa" method="post" class="">
            @csrf
            <div class="bg-white p-4 px-4 md:p-8 mb-6 rounded-xl shadow border border-black border-opacity-25">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="text-zinc-600">
                            <p class="font-bold text-lg">Form Siswa</p>
                            <p>Mohon lengkapi data berikut.</p>
                </div>
                <br>

        <div class="lg:col-span-2">
            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                <form class="md:col-span-5">
                    <label for="nis">NIS</label>
                    <input type="number" name="nis" id="nis" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="">
                </form>
            </div>
        </div>
        
            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                <form class="md:col-span-5">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="jurusan" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="">
                </form>
            </div>
            <br>
            
        
            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                <form class="md:col-span-5">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" name="jurusan" id="jurusan" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="">
                </form>
            </div>
        
        
            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5 pl-3">
                <form class="md:col-span-5">
                    <label for="angkatan">Angkatan</label>
                    <input type="number" name="angkatan" id="angkatan" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="">
                </form>
            </div>
       

        <div class="md:col-span-5 text-right">
                      <div class="inline-flex items-end">
                        <button class="bg-gray-100 hover:bg-black hover:text-white text-red-700 font-bold py-2 px-4 rounded">Submit</button>
                      </div>
                    </div>
        </div>
        </div>
        </form>
    </div>

@endsection