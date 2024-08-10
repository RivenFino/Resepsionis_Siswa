@extends('layouts/index2')

@section('container')
<div class="w-full h-full p-3 z">
    <div class="flex relative mt-32 flex-col w-full p-4 gap-4 px-0 rounded-xl shadow border border-black border-opacity-25 h-full bg-white">
    <div class="h-auto w-full flex flex-col items-center">
        <div class="w-[1260px] max-sm:w-full max-sm:px-8">
            <p class="text-xl flex text-gray-700 font-semibold">NIS: {{$siswa->nis}}</p>
            <p class="text-xl flex text-gray-700 font-semibold">Nama: {{$siswa->nama}}</p>
        </div>
        <div class="flex flex-col gap-6 max-w-full justify-center items-center w-full px-8 max-sm:px-3  my-4">
            <div class="bg-gray-50 px-0 flex flex-col items-center rounded-xl shadow border border-black border-opacity-25 h-full w-[1260px] max-sm:w-full py-2">
                <div class="w-full gap-4 overflow-auto items-center py-2">
    
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
                        <tr class="bg-white border-gray-100 border-b-2 shadow-sm w-full">
                            <td class="text-sm w-64 text-gray-700 p-3">{{$item->kode_keperluan}}</td>
                            <td class="text-sm w-40 text-gray-700 p-3">{{$item->keperluan}}</td>
                            <td class="text-sm w-80 text-gray-700 p-3">{{$item->keterangan}}</td>
                            <td class="text-sm w-24 text-gray-700 p-3">{{$item->tanggal}}</td>
                            <td class="text-sm w-24 text-gray-700 p-3">{{$item->waktu}}</td>
                            <td class="text-sm w-24 text-white p-3 ">
                                <span class="p-2 rounded-md flex w-full justify-center items-center
                                    @if($item->status == 'unconfirm')
                                        bg-yellow-500
                                    @elseif($item->status == 'confirmed')
                                        bg-green-500
                                    @elseif($item->status == 'cancel')
                                        bg-red-500
                                    @else
                                        bg-gray-500
                                    @endif
                                ">
                                    {{$item->status}}
                                </span>
                            </td>
                        </tr>
                    @endforeach
    
                            </tbody>
                    </table>
                </div>
                <a href="../" class="flex justify-center items-center transition-all w-64 h-12 bg-yellow-400 hover:bg-white hover:border hover:border-red-600 hover:text-red-600 text-white font-bold py-2 px-4 rounded">Kembali</a>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection