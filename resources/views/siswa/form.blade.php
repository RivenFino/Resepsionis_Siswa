@extends('layouts.main')
@section('title', 'Form Siswa')
@section('container')

    <div class="w-[640px] bg-neutral-200 p-8 px-6 rounded">
        <form action="siswa" method="post" class="flex flex-col gap-2">
            @csrf
            <div class="flex flex-col ">
                <label for="nis">NIS</label>
                <input class="h-8 px-4 pr-1 rounded" type="number" name="nis" id="nis">
            </div>
            <div class="flex flex-col ">
                <label for="nama">Nama Lengkap</label>
                <input class="h-8 px-4 rounded" type="text" name="nama" id="nama">
            </div>
            <div class="flex flex-col ">
                <label for="jurusan">Jurusan</label>
                <select class="h-8 px-4" name="jurusan" id="jurusan">
                    <option value="TJKT">TJKT</option>
                    <option value="RPL">RPL</option>
                    <option value="DKV">DKV</option>
                    <option value="ANIM">ANIM</option>
                </select>
            </div>
            <div class="flex flex-col ">
                <label for="angkatan">Angkatan</label>
                <input class="h-8 px-4 pr-1 rounded" type="number" name="angkatan" id="angkatan" min="1" max="40">
            </div>
            <div class="flex flex-col ">
                <label for="password">Password</label>
                <input class="h-8 px-4 pr-1 rounded" type="password" name="password" id="password" min="1" max="40">
            </div>
            <div class="flex justify-end py-3 pt-4 gap-2">
                
                <input class="flex bg-blue-600 text-white font-bold w-40 justify-center h-12 rounded" type="submit" value="simpan">
            </div>
        </form>
    </div>

@endsection