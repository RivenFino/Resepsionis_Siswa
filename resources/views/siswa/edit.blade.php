@extends('layouts.main')
@section('title', 'Form Siswa / Edit')
@section('container')
    <div class="w-full flex justify-center pt-12">

        <div class="flex  w-[1400px]">
            <div class="flex flex-col w-32 min-h-full justify-self-start bg-white rounded-xl shadow border border-black border-opacity-25">
                <span class="flex justify-center items-center text-2xl h-20 font-semibold">Data</span>
                <hr>
                <div class="pt-4 flex flex-col">
                    <a href="/../siswa" class="w-full hover:bg-red-600 px-6 h-12 flex justify-start items-center hover:text-white">Siswa</a>
                    <a href="staf" class="w-full hover:bg-red-600 px-6 h-12 flex justify-start items-center hover:text-white">Staf</a>
                    <a href="kepeluan" class="w-full hover:bg-red-600 px-6 h-12 flex justify-start items-center hover:text-white">Kepeluan</a>
                </div>
            </div>
            <form action="{{route('siswa.update', $siswa->id)}}" enctype="multipart/form-data" method="post" class="w-full h-full transition-all">
                @csrf
                @method('PUT')
                <div class="flex flex-col h-full">
        
                    <div class="bg-white p-4 px-0 rounded-xl shadow border border-black border-opacity-25 h-full">
                        <div class="text-zinc-600 px-8">
                            <p class="font-bold text-lg">Edit Data Siswa</p>
                            <p>Untuk memastikan bahwa anda memang perlu mengubah data ini. Silahkan konfirmasi siswa yang bersangkutan terlebih dahulu sebelum mengubah data ini!</p>
                        </div>
                        <hr class="mt-3">
                        <div class="flex flex-col gap-8">
                            <div class="flex w-full gap-6 -x py-4 text-sm px-8">
                                <div class="flex flex-col w-full text-lg">
                                    <label for="nis">NIS</label>
                                    <input type="number" name="nis" id="nis" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:bg-blue-50 focus:outline-none outline-none transition-all" value="{{$siswa->nis}}">
                                </div>
        
                                <div class="flex flex-col w-full text-lg">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" id="jurusan" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:bg-blue-50 focus:outline-none outline-none transition-all" value="{{$siswa->nama}}">
                                </div>
                            </div>
            
                            <div class="flex w-full gap-6 py-4 text-lg px-8">
                                <div class="flex flex-col w-full text-lg">
                                    <label for="jurusan">Jurusan</label>
                                    <select name="jurusan" id="jurusan" class="h-10 border mt-1 rounded px-4 w-full focus:bg-blue-50 focus:outline-none outline-none transition-all">
                                        <option selected value="{{$siswa->jurusan}}" ><span class="capitalize">{{$siswa->jurusan}} (sebelumnya)</option>
                                        <option value="tjkt"><span class="uppercase">TJKT</span></option>
                                        <option value="rpl" ><span class="uppercase">RPL</span></option>
                                        <option value="dkv" ><span class="uppercase">DKV</span></option>
                                        <option value="anim" ><span class="uppercase">ANIM</span></option>
                                    </select>
                                </div>
        
                                <div class="flex flex-col w-full text-lg">
                                    <label for="angkatan">Angkatan</label>
                                    <input type="number" name="angkatan" id="angkatan" value="20" min="1" max="40" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:bg-blue-50 focus:outline-none outline-none transition-all">
                                </div>
                            </div>
                            <input type="hidden" name="hidden_id" value="{{$siswa->id}}">
                            <div class="flex justify-end mt-5 px-8">
                                <div class="flex w-full justify-between gap-6">
                                    <div class="flex w-full justify-start gap-6">
                                        <a href="{{route('siswa.index')}}" class="flex justify-center items-center transition-all w-48 h-12 bg-green-500 hover:bg-white hover:border hover:border-red-600 hover:text-red-600 text-white font-bold py-2 px-4 rounded">Kembali</a>
                                        <a href="{{route('siswa.edit', $siswa->id)}}" class="flex justify-center items-center transition-all w-48 h-12 bg-yellow-400 hover:bg-white hover:border hover:border-red-600 hover:text-red-600 text-white font-bold py-2 px-4 rounded">Reset</a>
                                    </div>
                                    <button class="transition-all w-48 h-12 bg-blue-600 hover:bg-white hover:border hover:border-red-600 hover:text-red-600 text-gray-100 font-bold py-2 px-4 rounded">Simpan</button>
                                </div>
                            
                            </div>
                        </div>
        
    
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection