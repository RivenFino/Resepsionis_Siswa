@extends('layouts.main')
@section('title', 'Dashboard')
@section('container')
        <div
            class="box-content flex p-3 px-10  bg-white rounded-xl shadow border border-black border-opacity-25 w-screen max-w-[1320px] max-[1759px]:max-w-[1100px]  |  max-[1600px]:max-w-[1100px]  |  max-[1300px]:max-w-[778px]">

            <div     class="flex justify-between gap-16 w-screen ">
                <div class="flex gap-8 items-center">
                    <h3 class="text-3xl font-bold mx-4 my-4">
                        Data Resepsionis
                    </h3>

                    <div class="bg-zinc-600 bg-opacity-25 px-6 rounded-lg h-12 flex text-center text-red-500 text-xl font-bold items-center justify-center align-center">
                            Hari ini
                    </div>
                </div>
                <div class="flex gap-16 ">
                    <div
                        class="pl-5 ml-5 p-2.5 bg-white rounded-xl shadow-md border border-black border-opacity-25 justify-center items-center gap-2.5 inline-flex"
                    >
                        <div class="text-zinc-600 text-xl font-medium max-[1600px]:text-2lg]">
                            Tanggal dan waktu sekarang :
                        </div>
                    </div>

                    <div class="flex flex-col text-xl font-bold">
                        <p>01 Januari 2023</p>
                        <div class="flex gap-10 text-gray-600">
                            <p>Senin</p>
                            <p>07:00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex gap-10 h-44 w-screen max-w-[1412px] max-[1759px]:max-w-[1300px]  max-[1300px]:flex-wrap max-[1300px]:h-[390px]  max-[1300px]:w-[1000px] justify-center  max-[841px]:h-[450px]">
            <div
                class="flex-col  white:bg-gray-800 shadow-lg rounded-xl flex items-center justify-between py-3 border text-black font-medium group bg-white w-screen max-w-[400px] mix-xl:min-w-[300px]"
            >
                <div class="flex justify-center items-center w-64 h-32 gap-12">
                    <img
                        src="{{ asset('img/Siswa yang Keluar.svg') }}"
                        alt="Siswa yang izin"
                        class="bg-white transition-all duration-300 transform w-14 h-14" />

                        <p class="text-2xl">Siswa yang Keluar</p>
                </div>
                <div class=" flex items-start w-full">
                    <p
                        class="text-center text-3xl px-16 w-full py-1 mr-4 bg-red-500 text-white"
                    >
                        23 Orang
                    </p>
                </div>
            </div>
            <div
                class="flex-col  white:bg-gray-800 shadow-lg rounded-xl flex items-center justify-between py-3 border text-black font-medium group bg-white w-screen max-w-[400px] mix-xl:min-w-[300px]"
            >
                <div class="flex justify-center items-center w-64 h-32 gap-12">
                    <img
                        src="{{ asset('img/Siswa yang Terlambat.svg') }}"
                        alt="Siswa yang izin"
                        class="bg-white  transition-all duration-300 transform w-14 h-14" />

                        <p class="text-2xl">Siswa yang Terlambat</p>
                </div>
                <div class=" flex items-start w-full">
                    <p
                        class="text-center text-3xl px-16 w-full py-1 mr-4 bg-red-500 text-white"
                    >
                        2 Orang
                    </p>
                </div>
            </div>
            <div
                class="flex-col  white:bg-gray-800 shadow-lg rounded-xl flex items-center justify-between py-3 border text-black font-medium group bg-white w-screen max-w-[400px] mix-xl:min-w-[300px]"
            >
                <div class="flex justify-center items-center w-64 h-32 gap-12">
                    <img
                        src="{{ asset('img/Siswa yang Izin.svg') }}"
                        alt="Siswa yang izin"
                        class="bg-white  transition-all duration-300 transform w-14 h-14" />

                        <p class="text-2xl">Siswa yang Izin</p>
                </div>
                <div class=" flex items-start w-full">
                    <p
                        class="text-center text-3xl px-16 w-full py-1 mr-4 bg-red-500 text-white"
                    >
                        32 Orang
                    </p>
                </div>
            </div>
            <div
                class="flex-col  white:bg-gray-800 shadow-lg rounded-xl flex items-center justify-between py-3 border text-black font-medium group bg-white w-screen max-w-[400px] mix-xl:min-w-[300px]"
            >
                <div class="flex justify-center items-center w-64 h-32 gap-12">
                    <img
                        src="{{ asset('img/Tamu Datang dan perbandingan tamu.svg') }}"
                        alt="Siswa yang izin"
                        class="bg-white  transition-all duration-300 transform w-14 h-14" />

                        <p class="text-2xl">Tamu yang Datang</p>
                </div>
                <div class=" flex items-start w-full">
                    <p
                        class="text-center text-3xl px-16 w-full py-1 mr-4 bg-red-500 text-white"
                    >
                        12 Orang
                    </p>
                </div>
            </div>
        </div>

        <div class="flex gap-10 h-72 mt-8 w-screen max-w-[1412px] max-[1759px]:max-w-[1300px] max-[1300px]:max-w-[750px] max-[1300px]:flex-wrap max-[1300px]:h-[900px]">

                <div
                    class="white:bg-gray-800 shadow-lg rounded-xl flex items-center justify-center p-3 border text-black font-semibold group gap-4 bg-white h-[300px] w-full "
                >
                    <div class="absolute">

                        <div class="flex absolute top-[-200px] left-[-300px] rounded-full w-28 h-28 bg-white stroke-white shadow stroke align-middle items-center justify-center">
                            <img
                            src="{{ asset('img/Perbandingan Siswa.svg') }}"
                            alt="Siswa yang izin"
                            class="bg-white  transition-all duration-300 transform w-14 h-14" />
                        </div>

                    </div>

                    <div class="flex-col flex items-center justify-center align-center mt-12 gap">

                        <div class="w-96 text-center items-center ">
                            <p class="text-center ">
                                Perbandingan dengan siswa yang izin di
                                <span class="text-red-500"> hari </span>
                                sebelumnya
                                (Siswa yang keluar + Terlambat + Izin)
                            </p>
                        </div>
                        <div class="w-full flex justify-center items-center my-4 mb-8">
                            <p class="text-8xl flex w-[170px] h-[170px] justify-center items-center text-center rounded-full">
                                10
                                <div class="relative ">
                                    <div class="flex text-4xl text-white bg-red-500 rounded-full justify-center items-center relative h-24 w-24  top-[-40px]">
                                        -4
                                    </div>
                                </div>
                            </p>

                        </div>
                        
                    </div>
                </div>

                <div
                    class="white:bg-gray-800 shadow-lg rounded-xl flex items-center justify-center p-3 border text-black font-semibold group gap-4 bg-white h-[300px] w-full "
                >
                    <div class="absolute">

                        <div class="flex absolute top-[-200px] left-[-300px] rounded-full w-28 h-28 bg-white stroke-white shadow stroke align-middle items-center justify-center">
                            <img
                            src="{{ asset('img/Tamu Datang dan perbandingan tamu.svg') }}"
                            alt="Siswa yang izin"
                            class="bg-white  transition-all duration-300 transform w-14 h-14" />
                        </div>

                    </div>

                    <div class="flex-col flex items-center justify-center align-center mt-12 gap">

                        <div class="w-96 text-center items-center ">
                            <p class="text-center ">
                                Perbandingan tamu yang datang di
                                <span class="text-red-500">hari</span> sebelumnya
                            </p>
                        </div>
                        <div class="w-full flex justify-center items-center my-4 mb-8">
                            <p class="text-8xl flex w-[170px] h-[170px] justify-center items-center text-center rounded-full ">
                                12
                                <div class="relative ">
                                    <div class="flex text-4xl text-white bg-red-500 rounded-full justify-center items-center relative h-24 w-24  top-[-40px]">
                                        -30
                                    </div>
                                </div>
                            </p>

                        </div>
                        
                    </div>
                </div>
                

        </div>

@endsection
