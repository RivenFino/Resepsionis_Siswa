@extends('layouts.main')
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
<div class="flex w-full h-full max-md:flex-col max-md:px-2 max-sm:gap-4 max-md:gap-2 relative">
        <div class="flex relative flex-col w-full p-4 gap-4 px-0 rounded-xl shadow border border-black border-opacity-25 h-full bg-white">
            <div class="text-zinc-600 px-8 max-sm:px-3 max-sm:text-sm">
                <p class="font-bold text-lg capitalize">Data @yield('data')</p>
                <p>@yield('deskripsi-judul')</p>
            </div>
            <div class="flex flex-col w-full h-full sticky max-sm:top-16 top-0 gap-0">
                <div class="flex h-16 w-full justify-center flex-row max-md:flex-row max-md:w-full max-md:h-16 max-sm:px-3 max-sm:text-sm max-sm:h-12 bg-white border border-black border-opacity-10 border-x-0">
                    <a href="{{ url('siswa')}}" class="w-auto h-full font-bold text-red-500 hover:bg-red-600 px-6 flex justify-start items-center hover:text-white">Siswa</a>
                    <a href="{{ url('staf')}}" class="w-auto h-full font-bold text-red-500 hover:bg-red-600 px-6 flex justify-start items-center hover:text-white">Staf</a>
                    <a href="{{ url('keperluan')}}" class="w-auto h-full font-bold text-red-500 hover:bg-red-600 px-6 flex justify-start items-center hover:text-white">Keperluan</a>
                </div>
                <div class="flex  bg-white max-sm:px-3 justify-between h-16 items-center w-full gap-12 px-8 py-8 transition-all border border-black border-opacity-25 border-x-0 border-t-0">
                    <form class="flex w-full" action="@yield('link-url')" method="GET" accept-charset="UTF-8" role="searc">
                        <button type="submit" class="w-16 text-white bg-blue-500 rounded-l-lg flex justify-center items-center hover:bg-white hover:border hover:border-red-600 hover:text-red-600 focus:shadow-lg transition-all"><svg xmlns="http://www.w3.org/2000/svg" class=" w-8 h-8 hover:text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 max-sm:h-3 max-sm:h-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                        </button>
                        <input class="h-12 max-sm:h-8 text-lg rounded-r-lg text-gray-500 border outline-none focus:border-none w-full bg-gray-50 max-sm:text-sm focus:bg-blue-50 px-4 focus:outline-none focus:shadow-lg transition-all focus:text-black" type="text" placeholder="Cari.." name="search" value="{{request('search')}}">
                    </form>
    
                    <a href="@yield('link-add')" class="transition-all w-32 h-12 max-sm:h-8 text-white flex items-center justify-center text-xl max-sm:text-sm bg-green-500 text-center hover:bg-white hover:border hover:border-red-600 hover:text-red-600 rounded-lg select-none">Tambah</a>
                </div>
            </div>
            
            @yield('table')

        </div>
</div>
<script type="text/javascript">
    window.deleteConfirm = function (e) {
        e.preventDefault();
        var form = e.target.form;
        Swal.fire({
            title: 'Apakah anda yakin',
            text: "Anda tidak dapat mengembalikan data @yield('data') ini setelah dihapus",
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