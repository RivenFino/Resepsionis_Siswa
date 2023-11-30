<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title')</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
        <style>
            .a {
                background-color: r#f3f4f6;
            }
        </style>
        <meta http-equiv="refresh" content="1200">
    </head>
    <body class="max-w-full bg-neutral-100">
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
        <div class="flex w-full max-md:flex-col">
            <nav class="flex sticky top-0 flex-col h-screen w-auto z-1000 select-none max-md:hidden" id="drawer-navigation" tabindex="-1" aria-labelledby="drawer-navigation-label">
                <div class="flex px-12 w-full bg-gray-50 h-16 items-center justify-center border-b border-r-2 border-gray-300">
                    <h2 class="text-red-600 font-bold text-2xl text-center">
                        Resepsionis
                    </h2>
                </div>
                <div class="flex  flex-col gap-4 py-6 h-auto w-full bg-gray-50 items-center justify-center border-b border-r-2 border-gray-300" >
                    <div class="w-20 relative h-20 bg-red-600 rounded-full flex justify-center items-center drop-shadow-md shadow-md shadow-black/25 group">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="60"
                            height="60"
                            viewBox="0 0 24 24">
                            <path
                                fill="white"
                                d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4Z"
                            />
                        </svg>
                        <a href="/login/logout" class="invisible group-hover:visible flex absolute top-24 rounded-lg justify-start h-16 items-center px-12 hover:bg-red-600 bg-gray-800 text-xl text-gray-100 font-bold transition-all">
                            <div class="flex items-center gap-2 w-full">
                                <svg xmlns="http://www.w3.org/2000/svg"  width="40" height="40"  viewBox="0 0 36 36">
                                    <path fill="#f3f4f6"  d="M23 4H7a2 2 0 0 0-2 2v24a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6h-9.37a1 1 0 0 1-1-1a1 1 0 0 1 1-1H25V6a2 2 0 0 0-2-2Z" class="clr-i-solid clr-i-solid-path-1" />
                                    <path fill="#f3f4f6" d="M28.16 17.28a1 1 0 0 0-1.41 1.41L30.13 22H25v2h5.13l-3.38 3.46a1 1 0 1 0 1.41 1.41l5.84-5.8Z"  class="clr-i-solid clr-i-solid-path-2"  />
                                    <path fill="none" d="M0 0h36v36H0z" />
                                </svg>
                                <p>Logout</p>
                            </div>
                        </a>
                    </div>
                    <h1 class="font-bold text-lg w-full px-3 h-auto text-red-600 text-center">
                    {{ Auth::user()->nama }}
                    </h1>
                </div>
                <div class="flex justify-between h-screen flex-col gap-2 py-6 px-2 w-full bg-gray-300">
                    <div class="navbar flex flex-col gap-2">

                        <a href="/dashboard" class="flex rounded-lg justify-start h-16 items-center bg-gray-100 text-xl text-red-700  font-bold drop-shadow-md shadow-md shadow-black/20   hover:bg-gray-900 hover:text-red-50">
                            <div class="flex items-center gap-2 pl-2">
                                <svg   xmlns="http://www.w3.org/2000/svg"  width="40"    height="40" viewBox="0 0 32 32" >
                                    <path   fill="red"   d="M24 21h2v5h-2zm-4-5h2v10h-2zm-9 10a5.006 5.006 0 0 1-5-5h2a3 3 0 1 0 3-3v-2a5 5 0 0 1 0 10z" />
                                    <path   fill="red"  d="M28 2H4a2.002 2.002 0 0 0-2 2v24a2.002 2.002 0 0 0 2 2h24a2.003 2.003 0 0 0 2-2V4a2.002 2.002 0 0 0-2-2Zm0 9H14V4h14ZM12 4v7H4V4ZM4 28V13h24l.002 15Z"  />
                                </svg>
                                <p>Dashboard</p>
                            </div>
                        </a>

                        <a  href="/siswa"  class="flex rounded-lg justify-start h-16 items-center bg-gray-100 text-xl text-red-700 font-bold drop-shadow-md shadow-md shadow-black/20 hover:bg-gray-900 hover:text-red-50"  >
                            <div class="flex items-center gap-2 pl-2">
                                <svg  xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"  >
                                    <g fill="none">
                                        <path  fill="#dc2626"   d="M21 7c0 2.21-4.03 4-9 4S3 9.21 3 7s4.03-4 9-4s9 1.79 9 4z" />
                                        <path  stroke="#dc2626"   stroke-linecap="round"    stroke-linejoin="round"   stroke-width="2"  d="M21 7c0 2.21-4.03 4-9 4S3 9.21 3 7m18 0c0-2.21-4.03-4-9-4S3 4.79 3 7m18 0v5M3 7v5m18 0c0 2.21-4.03 4-9 4s-9-1.79-9-4m18 0v5c0 2.21-4.03 4-9 4s-9-1.79-9-4v-5" />
                                    </g>
                                </svg>
                                <p>Data Resepsionis</p>
                            </div>
                        </a>

                        <a  href="/siswa/create"    class="flex rounded-lg justify-start h-16 items-center bg-gray-100 text-xl text-red-700 font-bold drop-shadow-md shadow-md shadow-black/20 hover:bg-gray-900 hover:text-red-50"   >
                            <div class="flex items-center gap-2 pl-2">
                                <svg  xmlns="http://www.w3.org/2000/svg"   width="40"   height="40" viewBox="0 0 24 24" >
                                    <path  fill="#dc2626" d="M11 15h6v2h-6v-2M9 7H7v2h2V7m2 6h6v-2h-6v2m0-4h6V7h-6v2m-2 2H7v2h2v-2m12-6v14c0 1.1-.9 2-2 2H5c-1.1 0-2-.9-2-2V5c0-1.1.9-2 2-2h14c1.1 0 2 .9 2 2m-2 0H5v14h14V5M9 15H7v2h2v-2Z" />
                                </svg>
                                <p>Input Data</p>
                            </div>
                        </a>

                        <hr class="mt-4" />
                    </div>

                    <a href="/login/logout" class="flex rounded-lg justify-start h-16 items-center w-full hover:bg-red-600 bg-gray-800 text-xl text-gray-100 font-bold">
                        <div class="flex justify-center items-center gap-2 w-full">
                            <svg xmlns="http://www.w3.org/2000/svg"  width="40" height="40"  viewBox="0 0 36 36">
                                <path fill="#f3f4f6"  d="M23 4H7a2 2 0 0 0-2 2v24a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6h-9.37a1 1 0 0 1-1-1a1 1 0 0 1 1-1H25V6a2 2 0 0 0-2-2Z" class="clr-i-solid clr-i-solid-path-1" />
                                <path fill="#f3f4f6" d="M28.16 17.28a1 1 0 0 0-1.41 1.41L30.13 22H25v2h5.13l-3.38 3.46a1 1 0 1 0 1.41 1.41l5.84-5.8Z"  class="clr-i-solid clr-i-solid-path-2"  />
                                <path fill="none" d="M0 0h36v36H0z" />
                            </svg>
                            <p>Logout</p>
                        </div>
                    </a>
                </div>
            </nav>
            <nav class="h-16 hidden w-full px-4 bg-gray-50 border max-md:flex justify-between items-center">
                <h2 class="text-red-600 font-bold text-2xl text-center max-md:text-lg">
                    Resepsionis
                </h2>
                <div class="flex h-full justify-evenly items-center gap-6">
                    
                    <div>
                        <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" type="button">Menu <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                        </button>
        
                        <!-- Dropdown menu -->
                        <div id="dropdownHover" class="z-10 hidden divide-y divide-gray-100 rounded-lg shadow w-44 bg-gray-700">
                            <ul class="py-2 text-sm text-gray-200" aria-labelledby="dropdownHoverButton">
                            <li>
                                <a href="{{url('/dashboard')}}" class="block px-4 py-2 hover:bg-gray-600 text-white">Dashboard</a>
                            </li>
                            <li>
                                <a href="{{url('/siswa')}}" class="block px-4 py-2 hover:bg-gray-600 text-white">Data Siswa</a>
                            </li>
                            <li>
                                <a href="{{url('/siswa/create')}}" class="block px-4 py-2 hover:bg-gray-600 text-white">Input Data</a>
                            </li>
                            </ul>
                        </div>
                    </div>
    
                    <div class="flex h-16 items-center justify-center">
                        <div class="flex flex-col gap-2 justify-center items-center" >
                            <div id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-8 h-8 bg-red-600 rounded-full flex justify-center items-center drop-shadow-md shadow-md shadow-black/25">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="28"
                                    height="28"
                                    viewBox="0 0 24 24">
                                    <path
                                        fill="white"
                                        d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4Z"
                                    />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <!-- Dropdown menu -->
                    <div id="userDropdown" class="z-10 hidden divide-y rounded-lg shadow w-44 bg-gray-700 divide-gray-600 text-gray-200">
                        <div class="px-4 py-3 text-smtext-white ga">
                        <div class="text-sm">{{ Auth::user()->nama }}</div>
                        <div class="font-medium truncate">NIP: {{ Auth::user()->nip }}</div>
                        </div>
                        <div class="">
                            <a href="/login/logout" class="block px-4 py-2 text-sm bg-gray-800  border-white rounded-b-lg hover:bg-gray-600">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="flex flex-col p-6 h-full w-full gap-6 max-md:p-3 max-sm:p-1 max-sm:py-2 sm:gap-1 ">
                @yield('container')
            </div>

        </div>
    </body>
</html>
