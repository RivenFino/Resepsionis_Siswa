@extends('layouts.form')
@section('title', 'Detail Keperluan')
@section('judul', 'Detail Konfimasi')

@section('row-4-status', 'hidden')
@section('row-1-status', 'hidden')
@section('row-22-status', 'hidden')

@section('deskripsi-judul', 'Silahkan lengkapi data keperluan')
@section('form')
    <form action="{{ route('keperluan.update', $keperluan->id)}}" enctype="multipart/form-data" method="POST" class="w-full h-full transition-all">
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
<textarea type="text" name="keterangan" id="keterangan" class="h-16 max-h-32 border mt-1 rounded px-4 w-full bg-gray-50 focus:border-none focus:outline-none outline-none text-xl" readonly value="{{$keperluan->keterangan}}">
{{$keperluan->keterangan}}
</textarea>

@endsection

@section('row-3')

<label for="status" class="capitalize">Status</label>
<select name="status" id="status" class="h-10 border mt-1 rounded px-4 w-full focus:bg-blue-50 focus:outline-none outline-none transition-all">
    <option value="{{$keperluan->status}} selected hidden ><span class="capitalize">{{$keperluan->status}}</option>
    <option value="confirmed" ><span class="capitalize">confirmed</span></option>
    <option value="cancel" ><span class="capitalize">cancel</span></option>
</select>

@endsection

@section ('button')
<input type="hidden" name="hidden_id" value="{{$keperluan->id}}">
<div class="flex justify-end mt-5 px-8">
    <div class="inline-flex items-end">
        <button class="transition-all w-64 h-12 bg-blue-600 hover:bg-white hover:border hover:border-red-600 hover:text-red-600 text-gray-100 font-bold py-2 px-4 rounded">Konfirmasi</button>
    </div>
</div>
@endsection
