<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title')</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <style>
            .a {
                background-color: r#f3f4f6;
            }
        </style>
    </head>
    <body class="max-w-full">
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
        <div class="flex max-md:flex-col justify-start ">
            <nav class="flex sticky top-0 flex-col h-screen z-1000 w-auto select-none max-md:hidden">
                <div class="flex px-12 w-64 bg-gray-50 h-16 items-center justify-center border-b border-r-2 border-gray-300">
                    <h2 class="text-red-600 font-bold text-2xl text-center">
                        Resepsionis
                    </h2>
                </div>
                <div class="flex py-20 h-36 w-64 bg-gray-50 items-center justify-center border-b border-r-2 border-gray-300">
                    <div class="flex flex-col gap-2 justify-center items-center" >
                        <div class="w-20 h-20 bg-red-600 rounded-full flex justify-center items-center drop-shadow-md shadow-md shadow-black/25">
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
                        </div>
                        <h1 class="font-bold text-xl text-red-600">
                            {{-- {{$user['username']}} --}}Admin
                        </h1>
                    </div>
                </div>
                <div class="flex justify-between h-screen flex-col gap-2 py-6 w-64 bg-gray-300">
                    <div class="navbar flex flex-col gap-2">
                        <a href="/dashboard"
                            class="flex mx-2 m-1 rounded-lg justify-start h-12 items-center bg-gray-100 text-xl text-red-700
                            {{-- bg-red-700 text-xl text-gray-100  --}}
                            font-bold drop-shadow-md shadow-md shadow-black/20 
                            {{-- hover:bg-red-900 hover:text-gray-50 --}}
                            hover:bg-gray-900 hover:text-red-50">
                            <div class="flex items-center gap-2 pl-2">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="40"
                                    height="40"
                                    viewBox="0 0 32 32"
                                >
                                    <path
                                        fill="red"
                                        d="M24 21h2v5h-2zm-4-5h2v10h-2zm-9 10a5.006 5.006 0 0 1-5-5h2a3 3 0 1 0 3-3v-2a5 5 0 0 1 0 10z"
                                    />
                                    <path
                                        fill="red"
                                        d="M28 2H4a2.002 2.002 0 0 0-2 2v24a2.002 2.002 0 0 0 2 2h24a2.003 2.003 0 0 0 2-2V4a2.002 2.002 0 0 0-2-2Zm0 9H14V4h14ZM12 4v7H4V4ZM4 28V13h24l.002 15Z"
                                    />
                                </svg>
                                <p>Dashboard</p>
                            </div>
                        </a>
                        <a
                            href="/siswa"
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
                            href="/siswa/create"
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
                                <p>Input Data</p>
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
            <nav class="h-16 hidden w-full px-12 bg-gray-50 border max-md:flex justify-between items-center">
                <h2 class="text-red-600 font-bold text-2xl text-center">
                    Resepsionis
                </h2>

                <div class="flex h-16 items-center justify-center">
                    <div class="flex flex-col gap-2 justify-center items-center" >
                        <div class="w-8 h-8 bg-red-600 rounded-full flex justify-center items-center drop-shadow-md shadow-md shadow-black/25">
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
            </nav>

            <div class="flex flex-col pt-8 w-screen gap-10 bg-neutral-100 ">
                @yield('container')
            </div>

        </div>
    </body>
</html>
