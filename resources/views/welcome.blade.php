@extends('layouts.index')
@section('title', 'Resepsionis Siswa')
@section('container')


        <div id="home" class="w-full h-screen max-sm:h-full flex justify-center flex-col items-centermax-sm:h-full bg-fixed bg-cover bg-no-repeat" style="background-image: url(https://www.smktelkom-bjb.sch.id/web/assets/img/hero-bg.png);">
            <div class="flex w-full h-full max-sm:flex-col max-sm:justify-evenly">
                <div class="w-full h-full max-sm:h-screen flex justify-center items-center max-sm:px-4">
                    <div class="w-92 h-[700px] flex-col flex justify-center items-start gap-10 max-sm:gap-24 max-sm:-translate-y-12">
                        <h1 class="text-5xl text-red-600 font-semibold max-sm:text-3xl">Resepsionis Siswa</h1>
                        <div class="flex flex-col w-[230px] max-sm:w-full max-sm:px-8 gap-10">
                            <div class="rounded-3xl w-full text-center bg-red-600 p-4 px-8 text-xl text-white hover:bg-red-900  transition-all capitalize"><a href="">Isi Formulir</a></div>
                            <div class="rounded-3xl w-full text-center bg-red-600 p-4 px-8 text-xl text-white hover:bg-red-900  transition-all capitalize"><a href="#panduan">Panduan</a></div>
                        </div>
                    </div>
                </div>
                <div class="w-full h-full flex justify-center items-center">
                    <div class="overflow-hidden flex justify-center items-center w-[600px] max-sm:w-full bg-no-repeat h-[600px] max-sm:h-full rounded-full max-sm:rounded-none bg-slate-300 max-sm:translate-y-0 shadow-lg">
                        <img class="object-cover w-full h-full" src="{{asset('img/SMK-Telkom-Banjarbaru.jpg')}}" alt="Gambar Sekolah">
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center p-6 items-center w-full h-72 gap-24 bg-white border-t max-sm:gap-6">
            <div class="w-92 max-sm:w-48 h-full flex justify-center items-center">
                <h2 class="text-4xl text-center max-sm:text-2xl text-red-600 font-semibold">Resepsionis Siswa</h2>
            </div>
            <div class="w-92 max-sm:w-48 h-full flex justify-center items-center ">
                <p class="w-80 text-xl max-sm:text-sm text-justify">
                    Resepsionis Siswa bertujuan memudahkan siswa mencatat keperluan jika ingin keluar sekolah selama kegiatan belajar mengajar (KBM) berlangsung.  
                </p>
            </div>
        </div>
        <div id="panduan" class="w-full py-auto py-40 flex flex-col justify-start  gap-24 items-center h-full xl:h-screen bg-red-500">
            <h2 class="text-4xl text-center max-sm:text-2xl text-gray-100 font-semibold">
                Panduan Pengisian Form
            </h2>
            <div class="h-auto flex gap-8 max-xl:flex-col justify-center items-center max-sm:hidden">
                <div class="flex h-full w-full items-center gap-8">
                    <div class="flex justify-center items-center bg-gray-50 w-64 h-64 text-xl text-gray-700 rounded p-6 text-center">Buka Formulir Keperluan</div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-100 w-12 h-12">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                    <div class="flex justify-center items-center bg-gray-50 w-64 h-64 text-xl text-gray-700 rounded p-6 text-center">Masukkan NIS</div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-100 w-12 h-12 max-xl:hidden">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </div>
                <div class="h-full w-full items-center justify-center gap-8 hidden max-xl:flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-100 w-12 h-12">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 4.5l-15 15m0 0h11.25m-11.25 0V8.25" />
                    </svg>
                </div>
                <div class="flex h-full w-full items-center gap-8">
                    <div class="flex justify-center items-center bg-gray-50 w-64 h-64 text-xl text-gray-700 rounded p-6 text-center">Lengkapi Formulir Keperluan</div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-100 w-12 h-12">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                    <div class="flex justify-center items-center bg-gray-50 w-64 h-64 text-xl text-gray-700 rounded p-6 text-center">Simpan</div>
                </div>

            </div>
            <div class="h-auto gap-8 max-xl:flex-col justify-center items-center hidden max-sm:flex">
                <div class="flex flex-col h-full w-full items-center gap-8">
                    <div class="flex justify-center items-center bg-gray-50 w-48 h-48 text-xl text-gray-700 rounded p-6 text-center">Buka Formulir Keperluan</div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-100 w-12 h-12">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />
                    </svg>

                    <div class="flex justify-center items-center bg-gray-50 w-48 h-48 text-xl text-gray-700 rounded p-6 text-center">Masukkan NIS</div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-100 w-12 h-12">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />
                    </svg>

                    <div class="flex justify-center items-center bg-gray-50 w-48 h-48 text-xl text-gray-700 rounded p-6 text-center">Lengkapi Formulir Keperluan</div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-100 w-12 h-12">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />
                    </svg>
                    <div class="flex justify-center items-center bg-gray-50 w-48 h-48 text-xl text-gray-700 rounded p-6 text-center">Simpan</div>
                </div>

            </div>
            <div class="flex w-3/4 max-sm:w-full max-sm:px-6">
                <p class="text-lg flex w-1/2 max-sm:w-full text-justify  text-gray-100 font-semibold">
                    Setelah mengisi form keperluan, tunggu konfirmasi dari staf, kemudian form keperluan akan terkonfirmasi.
                </p>
            </div>
        </div>



@endsection