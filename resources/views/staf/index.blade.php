@extends('layouts.table')
@section('title', 'Data Staf')
@section('data', 'staf')
@section('link-url', 'staf')
@section('link-add', 'staf/create')
@section('deskripsi-judul', 'Jangan pernah ubah data Staf jika tidak memiliki kepentingan')

@section('table')                  
@if(count($staf) > 0)
                <div class="flex flex-col gap-6 max-w-full w-full px-8 max-sm:px-3 my-4">
                    <div class="bg-gray-50 px-0 rounded-xl shadow border border-black border-opacity-25 h-full w-full py-2">
                        <div class="flex flex-col gap-4 overflow-auto">

                            <table class="w-full">
                                <thead class="bg-gray-50 border-b-2 border-gray-200 ">
                                    <tr class="">
                                        <th class="p-3 text-sm font-semibold tracking-wide text-start">NIP</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-start">Nama</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-start">Nomor Telepon</th>
                                        <th class="p-3 text-center text-sm font-semibold tracking-wide">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($staf as $item)
                                        <tr class="bg-white border-gray-100 border-b-2 shadow-sm">
                                            <td class="text-sm max-md:w-20 w-52 text-gray-700 p-3">{{$item['nip']}}</td>
                                            <td class="text-sm text-gray-700 p-3">{{$item['nama']}}</td>
                                            <td class="text-sm w-40 text-gray-700 p-3">{{$item['no_telepon']}}</td>
                                            <td class="text-sm w-32 text-gray-700 p-3">
                                                <div class="flex justify-center w-full h-full ">
                                                    <div class="flex justify-center items-center w-full h-full">
                                                        <a href="{{ route('staf.edit', $item->id)}}" class="flex items-center justify-center w-12 bg-gray-200 border border-gray-400 rounded-lg h-12 p-2 text-gray-600 hover:bg-white hover:border hover:border-yellow-600 hover:text-yellow-600 transition-all select-none">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                                              </svg>
                                                              
                                                        </a>
                                                    </div>
                                                    <form class="flex justify-center items-center w-full h-full" method="POST" action="{{ route('staf.destroy', $item->id) }}">
                                                        @method('delete')
                                                        @csrf
                                                        <button onclick="deleteConfirm(event)" class="flex items-center justify-center w-12 bg-gray-200 border border-gray-400 rounded-lg h-12 p-2 text-gray-600 hover:bg-white hover:border hover:border-red-600 hover:text-red-600 transition-all select-none">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m6 4.125l2.25 2.25m0 0l2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                                              </svg>
                                                              
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        {{ $staf->links('layouts.pagination')}}
                    </div>
                </div>
                    
            @else
                    <div class="text-xl select-none flex justify-center text-gray-500">Belum ada Data staf yang terdaftar</div>
            @endif
@endsection