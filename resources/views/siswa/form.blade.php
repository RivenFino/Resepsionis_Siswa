@extends('layouts.form')
@section('title', 'Form Siswa')
@section('judul', 'Form Siswa')
@section('data', 'Siswa')

@section('row-3-status', 'hidden')
@section('row-4-status', 'hidden')
@section('row-2-status', 'hidden')
@section('row-1-status', 'hidden')

@section('deskripsi-judul', 'Silahkan lengkapi data siswa')
@section('nav')
<a href="{{ url('siswa/create')}}" class="w-auto h-full font-bold text-red-500 hover:bg-red-600 px-6 flex justify-start items-center hover:text-white">Siswa</a>
<a href="{{ url('staf/create')}}" class="w-auto h-full font-bold text-red-500 hover:bg-red-600 px-6 flex justify-start items-center hover:text-white">Staf</a>
<a href="{{ url('keperluan/create')}}" class="w-auto h-full font-bold text-red-500 hover:bg-red-600 px-6 flex justify-start items-center hover:text-white">Keperluan</a>
@endsection
@section('form')
<form action="{{ route('siswa.store')}}" enctype="multipart/form-data" method="post" class="w-full max-sm:w-full max-sm:px-3 px-8 h-full transition-all">
@endsection
@section('row-1-col-1')

<label for="nis">NIS</label>
<input type="number" require name="nis" id="nis" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:bg-blue-50 focus:outline-none outline-none transition-all" value="">

@endsection

@section('row-1-col-2')

<label for="nama">Nama</label>
<input type="text" require name="nama" id="jurusan" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:bg-blue-50 focus:outline-none outline-none transition-all" value="">

@endsection
@section('row-2-col-1')

<label for="jurusan">Jurusan</label>
<select name="jurusan" require id="jurusan" class="h-10 border mt-1 rounded px-4 w-full focus:bg-blue-50 focus:outline-none outline-none transition-all">
    <option selected hidden value="" ><span class="capitalize">Pilih Jurusan</option>
    <option value="tjkt"><span class="uppercase">TJKT</span></option>
    <option value="rpl" ><span class="uppercase">RPL</span></option>
    <option value="dkv" ><span class="uppercase">DKV</span></option>
    <option value="anim" ><span class="uppercase">ANIM</span></option>
</select>
@endsection
@section('row-2-col-2')

<label for="angkatan">Angkatan</label>
<input type="number" require name="angkatan" id="angkatan" value="20" min="1" max="40" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:bg-blue-50 focus:outline-none outline-none transition-all">

@endsection
@section ('button')
<div class="flex justify-end mt-5 px-8">
    <div class="inline-flex items-end">
        <button class="transition-all w-64 h-12 bg-blue-600 hover:bg-white hover:border hover:border-red-600 hover:text-red-600 text-gray-100 font-bold py-2 px-4 rounded">Submit</button>
    </div>
</div>
@endsection
<!-- 
    <div class="w-full flex justify-center pt-12">

        <div class="flex  w-[1400px]">
            <div class="flex flex-col w-32 min-h-full justify-self-start bg-white rounded-xl shadow border border-black border-opacity-25">
                <span class="flex justify-center items-center text-2xl h-20 font-semibold">Form</span>
                <hr>
                <div class="pt-4 flex flex-col">
                    <a href="{{route('siswa.create')}}" class="w-full hover:bg-red-600 px-6 h-12 flex justify-start items-center hover:text-white">Siswa</a>
                    <a href="staf" class="w-full hover:bg-red-600 px-6 h-12 flex justify-start items-center hover:text-white">Staf</a>
                    <a href="kepeluan" class="w-full hover:bg-red-600 px-6 h-12 flex justify-start items-center hover:text-white">Kepeluan</a>
                </div>
            </div>
            <form action="{{ route('siswa.store')}}" enctype="multipart/form-data" method="post" class="w-full h-full transition-all">
                @csrf
                <div class="flex flex-col h-full">
        
                    <div class="bg-white p-4 px-0 rounded-xl shadow border border-black border-opacity-25 h-full">
                        <div class="text-zinc-600 px-8">
                            <p class="font-bold text-lg">Form Siswa</p>
                            <p>Mohon lengkapi data berikut.</p>
                        </div>
                        <hr class="mt-3">
                        <div class="flex flex-col gap-8">
                            <div class="flex w-full gap-6 -x py-4 text-sm px-8">
                                <div class="flex flex-col w-full text-lg">
                                    <label for="nis">NIS</label>
                                    <input type="number" name="nis" id="nis" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:bg-blue-50 focus:outline-none outline-none transition-all" value="">
                                </div>
        
                                <div class="flex flex-col w-full text-lg">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" id="jurusan" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:bg-blue-50 focus:outline-none outline-none transition-all" value="">
                                </div>
                            </div>
            
                            <div class="flex w-full gap-6 py-4 text-lg px-8">
                                <div class="flex flex-col w-full text-lg">
                                    <label for="jurusan">Jurusan</label>
                                    <select name="jurusan" id="jurusan" class="h-10 border mt-1 rounded px-4 w-full focus:bg-blue-50 focus:outline-none outline-none transition-all">
                                        <option selected hidden value="" ><span class="capitalize">Pilih Jurusan</option>
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
                            <div class="flex justify-end mt-5 px-8">
                                <div class="inline-flex items-end">
                                    <button class="transition-all w-64 h-12 bg-blue-600 hover:bg-white hover:border hover:border-red-600 hover:text-red-600 text-gray-100 font-bold py-2 px-4 rounded">Submit</button>
                                </div>
                            
                            </div>
                        </div>
        
    
                    </div>
                </div>
            </form>
        </div>
    </div>
 -->