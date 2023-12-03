@extends('layouts.form')
@section('title', 'Form Siswa / Edit')
@section('judul', 'Form Edit Staf')

@section('row-2-col-2-status', 'hidden')
@section('row-2-status', 'hidden')
@section('row-1-status', 'hidden')
@section('row-3-status', 'hidden')
@section('row-4-status', 'hidden')
@section('nav')
    <a href="../siswa" class="w-auto h-full hover:bg-red-600 px-6 flex justify-start items-center hover:text-white">Siswa</a>
    <a href="../staf" class="w-auto h-full hover:bg-red-600 px-6 flex justify-start items-center hover:text-white">Staf</a>
    <a href="../keperluan" class="w-auto h-full hover:bg-red-600 px-6 flex justify-start items-center hover:text-white">Keperluan</a>
@endsection
@section('deskripsi-judul', 'Mohon jangan ubah data jika tidak memilki kepentingan')
@section('form')
<form action="{{route('siswa.update', $siswa->id)}}" enctype="multipart/form-data" method="post" class="w-full max-w-[1000px] h-full transition-all">
    @method('PUT')
@endsection
@section('row-1-col-1')

<label for="nis">NIS</label>
<input type="number" name="nis" id="nis" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:bg-blue-50 focus:outline-none outline-none transition-all" value="{{$siswa->nis}}">

@endsection

@section('row-1-col-2')

<label for="nama">Nama</label>
<input type="text" name="nama" id="jurusan" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:bg-blue-50 focus:outline-none outline-none transition-all" value="{{$siswa->nama}}">
@endsection

@section('row-2-col-1')

<label for="jurusan">Jurusan</label>
<select name="jurusan" id="jurusan" class="h-10 border mt-1 rounded px-4 w-full focus:bg-blue-50 focus:outline-none outline-none transition-all">
    <option @if($siswa['jurusan'] == 'TJKT') selected  @endif value="tjkt"><span class="uppercase">TJKT @if($siswa['jurusan'] == 'TJKT') (sebelumnya)  @endif </span></option>
    <option @if($siswa['jurusan'] == 'RPL') selected  @endif value="rpl" ><span class="uppercase">RPL @if($siswa['jurusan'] == 'RPL') (sebelumnya)  @endif </span></option>
    <option @if($siswa['jurusan'] == 'DKV') selected  @endif value="dkv" ><span class="uppercase">DKV @if($siswa['jurusan'] == 'DKV') (sebelumnya)  @endif </span></option>
    <option @if($siswa['jurusan'] == 'ANIM') selected  @endif value="anim" ><span class="uppercase">ANIM @if($siswa['jurusan'] == 'ANIM') (sebelumnya)  @endif </span></option>
</select>

@endsection
@section('row-2-col-2')

<label for="angkatan">Angkatan</label>
<input type="number" name="angkatan" id="angkatan" value="{{$siswa->angkatan}}" min="1" max="40" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:bg-blue-50 focus:outline-none outline-none transition-all">

@endsection
@section ('button')
<input type="hidden" name="hidden_id" value="{{$siswa->id}}">
<div class="flex justify-end mt-5 px-8">
    <div class="flex w-full justify-between gap-6 max-sm:flex-wrap">
        <div class="flex w-1/2 max-sm:w-full justify-start gap-6 max-sm:flex-wrap">
            <a href="{{route('siswa.index')}}" class="flex justify-center items-center transition-all w-full h-12 bg-green-500 hover:bg-white hover:border hover:border-red-600 hover:text-red-600 text-white font-bold py-2 px-4 rounded">Kembali</a>
            <a href="{{route('siswa.edit', $siswa->id)}}" class="flex justify-center items-center transition-all w-full h-12 bg-yellow-400 hover:bg-white hover:border hover:border-red-600 hover:text-red-600 text-white font-bold py-2 px-4 rounded">Reset</a>
        </div>
        <button class="transition-all w-48 max-sm:w-full h-12 bg-blue-600 hover:bg-white hover:border hover:border-red-600 hover:text-red-600 text-gray-100 font-bold py-2 px-4 rounded">Simpan</button>
    </div>

</div>
@endsection