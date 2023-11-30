@extends('layouts.form')
@section('title', 'Form Keperluan')
@section('judul', 'Form Keperluan')
@section('data', 'Keperluan')

@section('row-3-status', 'hidden')
@section('row-4-status', 'hidden')
@section('row-2-status', 'hidden')
@section('row-2-status', 'hidden')


@section('deskripsi-judul', 'Silahkan isi NIS terlebih dahulu')
@section('nav')
<a href="{{ url('siswa/create')}}" class="w-auto h-full hover:bg-red-600 px-6 flex justify-start items-center hover:text-white">Siswa</a>
<a href="{{ url('staf/create')}}" class="w-auto h-full hover:bg-red-600 px-6 flex justify-start items-center hover:text-white">Staf</a>
<a href="{{ url('keperluan/create')}}" class="w-auto h-full hover:bg-red-600 px-6 flex justify-start items-center hover:text-white">Keperluan</a>
@endsection
@section('form')
    <form action="/process-form" enctype="multipart/form-data" method="GET" class="w-full px-8 h-full transition-all">
@endsection
@section('form-field')

<div class="flex items-center flex-col justify-center  w-auto mt-12 px-8 gap-6">
    <div class="flex max-w-[400px] w-full flex-col">
        <label for="nis" class="uppercase">nis</label>
        <input type="number" name="nis" id="nis" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:bg-blue-50 focus:outline-none outline-none transition-all" value="">
    </div>
    <div class="flex justify-end mt-5 px-8">
        <div class="inline-flex items-end">
            <button class="transition-all w-64 h-12 bg-blue-600 hover:bg-white hover:border hover:border-red-600 hover:text-red-600 text-gray-100 font-bold py-2 px-4 rounded">Submit</button>
        </div>
    </div>
</div>
@endsection
