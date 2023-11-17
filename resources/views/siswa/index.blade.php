@extends('layouts.main')
@section('title', 'Data Siswa')
@section('container')

    <div class="w-[700px] bg-neutral-200 p-8 px-6 rounded">
        <table class="w-full border border-collapse border-black">
            <thead class="">
                <tr class="text-center text-white rounded bg-red-700 text-xl">
                    <th class="w-auto border border-black">NIS</th>
                    <th class="w-auto border border-black">Nama</th>
                    <th class="w-auto border border-black">Jurusan</th>
                    <th class="w-auto border border-black">Angkatan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $item)
                <tr class="text-center text-xl">
                    <td class="w-auto border border-gray-700  bg-white white">{{$item['nis']}}</td>
                    <td class="w-auto border border-gray-700 bg-white">{{$item['nama']}}</td>
                    <td class="w-auto border border-gray-700 bg-white">{{$item['jurusan']}}</td>
                    <td class="w-auto border border-gray-700 bg-white">{{$item['angkatan']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $siswa->links()}}

@endsection