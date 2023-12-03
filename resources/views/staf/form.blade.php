@extends('layouts.form')
@section('title', 'Form Staf')
@section('judul', 'Form Staf')
@section('data', 'Staf')

@section('row-3-status', 'hidden')
@section('row-4-status', 'hidden')
@section('row-2-status', 'hidden')
@section('row-1-status', 'hidden')

@section('deskripsi-judul', 'Silahkan lengkapi data staf')
@section('nav')
<a href="{{ url('siswa/create')}}" class="w-auto h-full font-bold text-red-500 hover:bg-red-600 px-6 flex justify-start items-center hover:text-white">Siswa</a>
<a href="{{ url('staf/create')}}" class="w-auto h-full font-bold text-red-500 hover:bg-red-600 px-6 flex justify-start items-center hover:text-white">Staf</a>
<a href="{{ url('keperluan/create')}}" class="w-auto h-full font-bold text-red-500 hover:bg-red-600 px-6 flex justify-start items-center hover:text-white">Keperluan</a>
@endsection
@section('form')
    <form action="{{ route('staf.store')}}" enctype="multipart/form-data" method="POST" class="w-full px-8 max-sm:px-3 h-full transition-all">
@endsection
@section('row-1-col-1')

<label for="nip" class="uppercase">nip</label>
<input type="number" name="nip" id="nip" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:bg-blue-50 focus:outline-none outline-none transition-all" value="">

@endsection

@section('row-1-col-2')

<label for="nama">Nama</label>
<input type="text" name="nama" id="nama" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:bg-blue-50 focus:outline-none outline-none transition-all" value="">
@endsection

@section('row-2-col-1')

<label for="no_telepon" class="capitalize">nomor telepon</label>
<input type="text" name="no_telepon" id="jurno_telepon" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:bg-blue-50 focus:outline-none outline-none transition-all" value="">

@endsection
@section('row-2-col-2')

<label for="password" class="capitalize">password</label>
<input type="password" name="password" id="password" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:bg-blue-50 focus:outline-none outline-none transition-all" value="">

@endsection
@section ('button')
<div class="flex justify-end mt-5 px-8">
    <div class="inline-flex items-end">
        <button class="transition-all w-64 h-12 bg-blue-600 hover:bg-white hover:border hover:border-red-600 hover:text-red-600 text-gray-100 font-bold py-2 px-4 rounded">Submit</button>
    </div>
</div>
@endsection
