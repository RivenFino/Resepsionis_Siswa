@extends('layouts.form')
@section('title', 'Form Keperluan')
@section('judul', 'Form Keperluan')
@section('data', 'Keperluan')

@section('row-4-status', 'hidden')
@section('row-1-status', 'hidden')
@section('row-22-status', 'hidden')


@section('deskripsi-judul', 'Silahkan lengkapi data keperluan')
@section('nav')
<a href="{{ url('siswa/create')}}" class="w-auto h-full hover:bg-red-600 px-6 flex justify-start items-center hover:text-white">Siswa</a>
<a href="{{ url('staf/create')}}" class="w-auto h-full hover:bg-red-600 px-6 flex justify-start items-center hover:text-white">Staf</a>
<a href="{{ url('keperluan/create')}}" class="w-auto h-full hover:bg-red-600 px-6 flex justify-start items-center hover:text-white">Keperluan</a>
@endsection
@section('form')
    <form action="/process-form" enctype="multipart/form-data" method="POST" class="w-full px-8 h-full transition-all">
@endsection
@section('row-1-col-1')

<label for="nis" class="uppercase">nis</label>
<input type="number" readonly name="nis" id="nis" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:border-none focus:outline-none outline-none" value="{{$siswa->nis}}">

@endsection
@section('row-1-col-2')

<label for="nama" class="capitalize">Nama</label>
<input type="text" name="nama" id="nis" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:border-none focus:outline-none outline-none" readonly value="{{$siswa->nama}}">

@endsection
@section('row-2')

<label for="keperluan" class="capitalize">keperluan</label>
<select name="keperluan" id="keperluan" class="h-10 border mt-1 rounded px-4 w-full focus:bg-blue-50 focus:outline-none outline-none transition-all">
    <option selected hidden value="" ><span class="capitalize">keperluan</option>
    <option value="keluar sekolah"><span class="capitalize">keluar sekolah</span></option>
    <option value="izin" ><span class="capitalize">izin</span></option>
    <option value="terlambat" ><span class="capitalize">terlambat</span></option>
    <option value="melanggar aturan" ><span class="capitalize">melanggar aturan</span></option>
</select>

@endsection
@section('row-3')

<label for="keterangan" class="capitalize">Keterangan</label>
<textarea type="text" name="keterangan" id="keterangan" class="h-10 max-h-20 border mt-1 rounded px-4 w-full bg-gray-50 focus:border-none focus:outline-none outline-none" value="" max="255">
</textarea>

@endsection

@section ('button')
<div class="flex justify-end mt-5 px-8">
    <div class="inline-flex items-end">
        <button class="transition-all w-64 h-12 bg-blue-600 hover:bg-white hover:border hover:border-red-600 hover:text-red-600 text-gray-100 font-bold py-2 px-4 rounded">Submit</button>
    </div>
</div>
@endsection
