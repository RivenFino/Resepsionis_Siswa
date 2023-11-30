@extends('layouts/index')

@section('container')
    @if(count($keperluan) > 0)
                    <div class="flex flex-col gap-6 max-w-full justify-center items-center w-full px-8 max-sm:px-3  my-4">
                        <div class="bg-gray-50 px-0 rounded-xl shadow border border-black border-opacity-25 h-full w-[1260px] py-2">
                            <div class="flex flex-col gap-4 overflow-auto">

                                <table class="w-full">
                                    <thead class="bg-gray-50 border-b-2 border-gray-200 ">
                                        <tr class="">
                                            <th class="p-3 text-sm font-semibold tracking-wide text-start">Kode Keperluan</th>
                                            <th class="p-3 text-sm font-semibold tracking-wide text-start">Keperluan</th>
                                            <th class="p-3 text-sm font-semibold tracking-wide text-start">Keterangan</th>
                                            <th class="p-3 text-sm font-semibold tracking-wide text-start">Tanggal</th>
                                            <th class="p-3 text-sm font-semibold tracking-wide text-start">Waktu</th>
                                            <th class="p-3 text-sm font-semibold tracking-wide text-start">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach ($keperluan as $item)
                                            <tr class="bg-white border-gray-100 border-b-2 shadow-sm">
                                                <td class="text-sm max-md:w-20 w-64 text-gray-700 p-3">{{$item->kode_keperluan}}</td>
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
                        <div class="text-xl select-none flex justify-center text-gray-500">Belum ada Data staf yang terdaftar</div>
                @endif
@endsection