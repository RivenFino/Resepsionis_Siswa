@extends('layouts.form')
@section('title', 'Form Staf / Edit')
@section('judul', 'Form Edit Staf')

@section('row-2-col-2-status', 'hidden')
@section('row-2-status', 'hidden')
@section('row-1-status', 'hidden')
@section('row-3-status', 'hidden')
@section('row-4-status', 'hidden')
@section('data', 'edit siswa')

@section('deskripsi-judul', 'Mohon jangan ubah data jika tidak memilki kepentingan')
@section('nav')
    <a href="../../siswa" class="w-auto h-full font-bold text-red-500 hover:bg-red-600 px-6 flex justify-start items-center hover:text-white">Siswa</a>
    <a href="../../staf" class="w-auto h-full font-bold text-red-500 hover:bg-red-600 px-6 flex justify-start items-center hover:text-white">Staf</a>
    <a href="../../keperluan" class="w-auto h-full font-bold text-red-500 hover:bg-red-600 px-6 flex justify-start items-center hover:text-white">Keperluan</a>
@endsection
@section('form')
    <form action="{{ route('staf.update', $staf->id)}}" enctype="multipart/form-data" method="POST" class="w-full max-w-[1000px] px8 h-full transition-all">
    @method('PUT')
@endsection
@section('row-1-col-1')

<label for="nip" class="uppercase">nip</label>
<input type="number" name="nip" id="nip" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:bg-blue-50 focus:outline-none outline-none transition-all" value="{{$staf->nip}}">

@endsection

@section('row-1-col-2')

<label for="nama">Nama</label>
<input type="text" name="nama" id="nama" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:bg-blue-50 focus:outline-none outline-none transition-all" value="{{$staf->nama}}">
@endsection

@section('row-2-col-1')

<label for="no_telepon" class="capitalize">nomor telepon</label>
<input type="text" name="no_telepon" id="jurno_telepon" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:bg-blue-50 focus:outline-none outline-none transition-all" value="{{$staf->no_telepon}}">

@endsection
@section ('button')
<input type="hidden" name="hidden_id" value="{{$staf->id}}">
<div class="flex justify-end mt-5 px-8">
    <div class="flex w-full justify-between gap-6 max-sm:flex-wrap">
        <div class="flex w-full justify-start gap-6 max-sm:flex-wrap">
            <a href="{{route('staf.index')}}" class="flex justify-center items-center transition-all w-full h-12 bg-green-500 hover:bg-white hover:border hover:border-red-600 hover:text-red-600 text-white font-bold py-2 px-4 rounded">Kembali</a>
            <a href="{{route('staf.edit', $staf->id)}}" class="flex justify-center items-center transition-all w-full h-12 bg-yellow-400 hover:bg-white hover:border hover:border-red-600 hover:text-red-600 text-white font-bold py-2 px-4 rounded">Reset</a>
            <!-- <a href="reset" class="flex justify-center items-center transition-all w-full h-12 bg-red-500 hover:bg-white hover:border hover:border-red-600 hover:text-red-600 text-white font-bold py-2 px-4 rounded">Reset Password</a> -->
        </div>
        <button class="transition-all w-72 max-sm:w-full h-12 bg-blue-600 hover:bg-white hover:border hover:border-red-600 hover:text-red-600 text-gray-100 font-bold py-2 px-4 rounded">Simpan</button>
    </div>

</div>
@endsection