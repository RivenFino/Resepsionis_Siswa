@extends('layouts.form')
@section('title', 'Detail Keperluan')
@section('judul', 'Detail Konfimasi')

@section('row-4-status', 'hidden')
@section('row-1-status', 'hidden')
@section('row-22-status', 'hidden')

@section('deskripsi-judul', 'Silahkan lengkapi data keperluan')
@section('form')
    <form action="{{ route('keperluan.update', $keperluan->id)}}" enctype="multipart/form-data" method="POST" class="w-full h-full max-sm:px-3 px-8 transition-all">
    @method('PUT')
@endsection
@section('row-1-col-1')

<label for="nis" class="uppercase">nis</label>
<input type="number" readonly name="nis" id="nis" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:border-none focus:outline-none outline-none" value="{{$keperluan->siswa->nis}}">

@endsection
@section('row-1-col-2')

<label for="nama" class="capitalize">Nama</label>
<input type="text" name="nama" id="nis" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:border-none focus:outline-none outline-none" readonly value="{{$keperluan->siswa->nama}}">

@endsection
@section('row-2')

<label for="keterangan" class="capitalize">Keterangan</label>
<textarea readonly type="text" name="keterangan" id="keterangan" class="h-24 max-h-32 border mt-1 rounded px-4 w-full bg-gray-50 focus:border-none focus:outline-none outline-none text-xl" value="{{$keperluan->keterangan}}">
{{$keperluan->keterangan}}
</textarea>

@endsection

@section('row-3')

<label for="status" class="capitalize">Status</label>
<select name="status" id="status" flex relative flex-col w-full p-4 gap-4 px-0 rounded-xl shadow border border-black border-opacity-25 h-full bg-white class="h-10 border mt-1 rounded px-4 w-full focus:bg-blue-50 focus:outline-none outline-none transition-all">
    <option value="{{$keperluan->status}} selected hidden ><span class="capitalize">{{$keperluan->status}}</option>
</select>

@endsection

@section ('button')
<div class="flex justify-end mt-5 px-8">
    <div class="inline-flex items-end">
        <a href="/keperluan" class="flex justify-center items-center transition-all w-64 h-12 bg-blue-600 hover:bg-white hover:border hover:border-red-600 hover:text-red-600 text-gray-100 font-bold py-2 px-4 rounded">Kembali</a>
    </div>
</div>
@endsection
