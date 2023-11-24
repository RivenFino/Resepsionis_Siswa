@extends('layouts.main')
@section('title', 'Data Siswa')
@section('container')
@if($notif = Session::get('success'))




<script type="text/javascript">
    const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.onmouseenter = Swal.stopTimer;
        toast.onmouseleave = Swal.resumeTimer;
    }
    });
    Toast.fire({
    icon: 'success',
    title: '{{ $notif }}'
});
</script>
@endif
<div class="flex w-full justify-center max-md:justify-start pt-12 max-md:pt-2 max-md:px-12 max-md:scale[20%] gap-4">
    <div class="flex w-[1400px] max-md:flex-col max-md:px-2 ">
        <div class="flex flex-col max-md:flex-row max-md:w-full w-32 max-md:h-20 h-full max-md:px-8 bg-white rounded-xl shadow border border-black border-opacity-25">
            <span class="flex justify-center items-center text-2xl h-20 font-semibold max-md:hidden">Data</span>
            <hr class="mx-md:hidden">
            <div class="pt-4 max-md:pt-0 max-md:h-20 flex flex-col max-md:flex-row">
                <a href="siswa" class="w-full max-md:h-full hover:bg-red-600 px-6 h-12 flex justify-start items-center hover:text-white">Siswa</a>
                <a href="staf" class="w-full max-md:h-full hover:bg-red-600 px-6 h-12 flex justify-start items-center hover:text-white">Staf</a>
                <a href="kepeluan" class="w-full max-md:h-full hover:bg-red-600 px-6 h-12 flex justify-start items-center hover:text-white">Kepeluan</a>
            </div>
        </div>
        <div class="flex flex-col w-full p-4 px-0 rounded-xl shadow border border-black border-opacity-25 h-full bg-white">
            <div class="text-zinc-600 px-8">
                <p class="font-bold text-lg">Data Siswa</p>
                <p>Jangan ubah data siswa jika tidak memiliki kepentingan.</p>
            </div>
            <hr class="mt-3">
            <div class="flex justify-between h-16 items-center w-full gap-12 px-8 my-4 transition-all">
                <form class="flex w-2/5" action="siswa" method="GET" accept-charset="UTF-8" role="searc">
                    <button type="submit" class="w-16 text-white bg-blue-500 rounded-l-lg flex justify-center items-center hover:bg-white hover:border hover:border-red-600 hover:text-red-600 focus:shadow-lg transition-all"><svg xmlns="http://www.w3.org/2000/svg" class=" w-8 h-8 hover:text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                    </button>
                    <input class="h-12 rounded-r-lg text-gray-500 border outline-none w-full bg-gray-50 focus:bg-blue-50 px-4 focus:outline-none focus:shadow-lg focus:text-lg transition-all focus:text-black" type="text" placeholder="Cari.." name="search" value="{{request('search')}}">
                </form>

                <a href="{{url('/siswa/create')}}" class="transition-all w-32 h-12 text-white flex items-center justify-center text-xl bg-green-500 text-center hover:bg-white hover:border hover:border-red-600 hover:text-red-600 rounded-lg select-none">Tambah</a>
            </div>
            
            @if(count($siswa) > 0)
                <div class="flex flex-col gap-6 max-w-[1400px] w-full px-8 my-4">
                    <div class="bg-gray-50 px-0 rounded-xl shadow border border-black border-opacity-25 h-full w-full py-2">
                        <div class="flex flex-col gap-4 overflow-auto">

                            <table class="w-full">
                                <thead class="bg-gray-50 border-b-2 border-gray-200 ">
                                    <tr class="">
                                        <th class="p-3 text-sm font-semibold tracking-wide text-start">NIS</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-start">Nama</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-start">Jurusan</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-start">Angkatan</th>
                                        <th class="p-3 text-center text-sm font-semibold tracking-wide">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($siswa as $item)
                                        <tr class="bg-white border-gray-100 border-b-2 shadow-sm">
                                            <td class="text-sm max-md:w-20 w-52 text-gray-700 p-3">{{$item['nis']}}</td>
                                            <td class="text-sm text-gray-700 p-3">{{$item['nama']}}</td>
                                            <td class="text-sm w-40 text-gray-700 p-3">{{$item['jurusan']}}</td>
                                            <td class="text-sm w-20 text-gray-700 p-3">{{$item['angkatan']}}</td>
                                            <td class="text-sm w-32 text-gray-700 p-3">
                                                <div class="flex justify-center w-full h-full ">
                                                    <div class="flex justify-center items-center w-full h-full">
                                                        <a href="{{ route('siswa.edit', $item->id)}}" class="flex items-center justify-center w-12 bg-gray-200 border border-gray-400 rounded-lg h-12 p-2 text-gray-600 hover:bg-white hover:border hover:border-yellow-600 hover:text-yellow-600 transition-all select-none">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                                              </svg>
                                                              
                                                        </a>
                                                    </div>
                                                    <form class="flex justify-center items-center w-full h-full" method="POST" action="{{ route('siswa.destroy', $item->id) }}">
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
                        {{ $siswa->links('layouts.pagination')}}
                    </div>
                </div>
                    
            @else
                    <div class="text-xl select-none flex justify-center text-gray-500">Belum ada Data Siswa yang terdaftar</div>
            @endif
        </div>
    </div>
</div>
<script type="text/javascript">
    window.deleteConfirm = function (e) {
        e.preventDefault();
        var form = e.target.form;
        Swal.fire({
            title: 'Apakah anda yakin',
            text: "Anda tidak dapat mengembalikan data ini setelah dihapus",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#e63e3e',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
        }).then((result) => {
        if(result.isConfirmed){
            form.submit()
        }
        })
    }
</script>


@endsection