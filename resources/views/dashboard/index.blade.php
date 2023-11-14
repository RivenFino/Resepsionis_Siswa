<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Dashboard Resepsionis</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            .a {
                background-color: r#f3f4f6;
            }
        </style>
    </head>
    <body>
        <div class="flex">
            <nav class="flex sticky top-0 flex-col h-screen z-1000">
                <div
                    class="flex px-12 w-64 bg-gray-50 h-16 items-center justify-center border-b border-r-2 border-gray-300"
                >
                    <h2 class="text-gray-600 font-bold text-2xl text-center">
                        Resepsionis
                    </h2>
                </div>
                <div
                    class="flex py-20 h-36 w-64 bg-gray-50 items-center justify-center border-b border-r-2 border-gray-300"
                >
                    <div
                        class="flex flex-col gap-2 justify-center items-center"
                    >
                        <div
                            class="w-20 h-20 bg-gray-600 rounded-full flex justify-center items-center drop-shadow-md shadow-md shadow-black/25"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="60"
                                height="60"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    fill="white"
                                    d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4Z"
                                />
                            </svg>
                        </div>
                        <h1 class="font-bold text-xl text-gray-800">Admin</h1>
                    </div>
                </div>
                <div
                    class="flex justify-between h-screen flex-col gap-2 py-6 w-64 bg-gray-300"
                >
                    <div class="navbar flex flex-col gap-2">
                        <a
                            href="#"
                            class="flex mx-2 m-1 rounded-lg justify-start h-12 items-center bg-red-700 text-xl text-gray-100 font-bold drop-shadow-md shadow-md shadow-black/20 hover:bg-red-900 hover:text-gray-50"
                        >
                            <div class="flex items-center gap-2 pl-2">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="40"
                                    height="40"
                                    viewBox="0 0 32 32"
                                >
                                    <path
                                        fill="white"
                                        d="M24 21h2v5h-2zm-4-5h2v10h-2zm-9 10a5.006 5.006 0 0 1-5-5h2a3 3 0 1 0 3-3v-2a5 5 0 0 1 0 10z"
                                    />
                                    <path
                                        fill="white"
                                        d="M28 2H4a2.002 2.002 0 0 0-2 2v24a2.002 2.002 0 0 0 2 2h24a2.003 2.003 0 0 0 2-2V4a2.002 2.002 0 0 0-2-2Zm0 9H14V4h14ZM12 4v7H4V4ZM4 28V13h24l.002 15Z"
                                    />
                                </svg>
                                <p>Dashboard</p>
                            </div>
                        </a>
                        <a
                            href="#"
                            class="flex mx-2 m-1 rounded-lg justify-start h-12 items-center bg-gray-100 text-xl text-red-700 font-bold drop-shadow-md shadow-md shadow-black/20 hover:bg-gray-900 hover:text-red-50"
                        >
                            <div class="flex items-center gap-2 pl-2">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="40"
                                    height="40"
                                    viewBox="0 0 24 24"
                                >
                                    <g fill="none">
                                        <path
                                            fill="#dc2626"
                                            d="M21 7c0 2.21-4.03 4-9 4S3 9.21 3 7s4.03-4 9-4s9 1.79 9 4z"
                                        />
                                        <path
                                            stroke="#dc2626"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M21 7c0 2.21-4.03 4-9 4S3 9.21 3 7m18 0c0-2.21-4.03-4-9-4S3 4.79 3 7m18 0v5M3 7v5m18 0c0 2.21-4.03 4-9 4s-9-1.79-9-4m18 0v5c0 2.21-4.03 4-9 4s-9-1.79-9-4v-5"
                                        />
                                    </g>
                                </svg>
                                <p>Data Resepsionis</p>
                            </div>
                        </a>
                        <a
                            href="/dashboard"
                            class="flex mx-2 m-1 rounded-lg justify-start h-12 items-center bg-gray-100 text-xl text-red-700 font-bold drop-shadow-md shadow-md shadow-black/20 hover:bg-gray-900 hover:text-red-50"
                        >
                            <div class="flex items-center gap-2 pl-2">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="40"
                                    height="40"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        fill="#dc2626"
                                        d="M11 15h6v2h-6v-2M9 7H7v2h2V7m2 6h6v-2h-6v2m0-4h6V7h-6v2m-2 2H7v2h2v-2m12-6v14c0 1.1-.9 2-2 2H5c-1.1 0-2-.9-2-2V5c0-1.1.9-2 2-2h14c1.1 0 2 .9 2 2m-2 0H5v14h14V5M9 15H7v2h2v-2Z"
                                    />
                                </svg>
                                <p>Form Keperluan</p>
                            </div>
                        </a>
                        <hr class="mt-4" />
                    </div>

                    <a
                        href="/login/logout"
                        class="flex mx-2 rounded-lg justify-start h-16 items-center bg-gray-800 text-xl text-gray-100 font-bold"
                    >
                        <div class="flex items-center gap-2 pl-12">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="40"
                                height="40"
                                viewBox="0 0 36 36"
                            >
                                <path
                                    fill="#f3f4f6"
                                    d="M23 4H7a2 2 0 0 0-2 2v24a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6h-9.37a1 1 0 0 1-1-1a1 1 0 0 1 1-1H25V6a2 2 0 0 0-2-2Z"
                                    class="clr-i-solid clr-i-solid-path-1"
                                />
                                <path
                                    fill="#f3f4f6"
                                    d="M28.16 17.28a1 1 0 0 0-1.41 1.41L30.13 22H25v2h5.13l-3.38 3.46a1 1 0 1 0 1.41 1.41l5.84-5.8Z"
                                    class="clr-i-solid clr-i-solid-path-2"
                                />
                                <path fill="none" d="M0 0h36v36H0z" />
                            </svg>
                            <p>Logout</p>
                        </div>
                    </a>
                </div>
            </nav>

            <div class="flex flex-col items-center w-screen gap-24 pt-8 bg-neutral-100">
                <div
                    class="box-content flex p-3 px-10  bg-white rounded-xl shadow border border-black border-opacity-25 w-screen max-w-[1320px] max-[1759px]:max-w-[1100px]  |  max-[1600px]:max-w-[1100px]  |  max-[1300px]:max-w-[778px]">

                    <nav class="flex justify-between gap-16 w-screen ">
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
                    </nav>
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

            </div>

        </div>
    </body>
</html>
