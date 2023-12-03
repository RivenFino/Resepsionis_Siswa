@extends('layouts.table')
@section('title', 'Data Absensi Keperluan')
@section('data', 'Keperluan')
@section('link-url', 'keperluan')
@section('link-add', 'keperluan/create')
@section('deskripsi-judul', 'Staf dipersilahkan untuk mengkonfirmasi keperluan siswa')

@section('table')                  
@if(count($keperluan) > 0)
                <div class="flex flex-col gap-6 max-w-full w-full px-8 max-sm:px-3  my-4">
                    <div class="bg-gray-50 px-0 rounded-xl shadow border border-black border-opacity-25 h-full w-full py-2">
                        <div class="flex flex-col gap-4 overflow-auto">

                            <table class="w-full">
                                <thead class="bg-gray-50 border-b-2 border-gray-200 ">
                                    <tr class="">
                                        <th class="p-3 text-sm font-semibold tracking-wide text-start">Kode Keperluan</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-start">NIS</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-start">Nama Siswa</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-start">Keperluan</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-start">Keterangan</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-start">Tanggal</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-start">Waktu</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-start">Status</th>
                                        <th class="p-3 text-center text-sm font-semibold tracking-wide">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($keperluan as $item)
                                        <tr class="bg-white border-gray-100 border-b-2 shadow-sm">
                                            <td class="text-sm max-md:w-20 w-64 text-gray-700 p-3">{{$item->kode_keperluan}}</td>
                                            <td class="text-sm w-32 text-gray-700 p-3">{{$item->siswa->nis}}</td>
                                            <td class="text-sm w-56 text-gray-700 p-3">{{$item->siswa->nama}}</td>
                                            <td class="text-sm w-40 text-gray-700 p-3">{{$item['keperluan']}}</td>
                                            <td class="text-sm w-80 text-gray-700 p-3">{{$item['keterangan']}}</td>
                                            <td class="text-sm w-24 text-gray-700 p-3">{{$item['tanggal']}}</td>
                                            <td class="text-sm w-24 text-gray-700 p-3">{{$item['waktu']}}</td>
                                            <td class="text-sm w-24 text-white p-3 ">
                                                <span class="p-2 rounded-md flex w-full justify-center items-center
                                                @if($item['status'] == 'unconfirm')
                                                bg-yellow-500
                                                @elseif($item['status'] == 'confirmed')
                                                bg-green-500
                                                @elseif($item['status'] == 'cancel')
                                                bg-red-500
                                                @else
                                                bg-gray-500
                                                @endif
                                                ">
                                                    {{$item['status']}}
                                                </span></td>
                                            <td class="text-sm w-32 text-gray-700 p-3">
                                                <div class="flex justify-center w-full h-full ">
                                                    <div class="flex justify-end items-center gap-1 w-full h-full">
                                                        <a href="{{ route('keperluan.edit', $item->id)}}" class="
                                                        @if($item['status'] == 'confirmed' || $item['status'] == 'cancel') 
                                                         hidden 
                                                        @endif  
                                                        flex items-center justify-center w-12 bg-gray-200 border border-gray-400 rounded-lg h-12 p-2 text-gray-600 hover:bg-white hover:border hover:border-blue-600 hover:text-blue-600 transition-all select-none">
                                                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                        </a>
                                                        <a href="{{ route('keperluan.show', $item->id)}}" class="flex items-center justify-center w-12 bg-gray-200 border border-gray-400 rounded-lg h-12 p-2 text-gray-600 hover:bg-white hover:border hover:border-blue-600 hover:text-blue-600 transition-all select-none">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        {{ $keperluan->links('layouts.pagination')}}
                    </div>
                </div>
                    
            @else
                    <div class="text-xl select-none flex justify-center text-gray-500">Belum ada Data Keperluan yang terdaftar</div>
            @endif
@endsection