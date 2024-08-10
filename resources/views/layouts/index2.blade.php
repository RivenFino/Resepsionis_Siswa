<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Resepsionis Siswa</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
        <style>
            .a {
                background-color: r#f3f4f6;
            }
            </style>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    </head>
    <body class="select-none">
         @if($notif = Session::get('notif'))


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
        <nav class="w-full flex h-24 max-sm:h-20 justify-center items-center fixed top-0 z-10 transition-all ">
            <div class="flex justify-between items-center w-[1400px] h-full max-sm:w-full max-sm:px-4 ">

                <a href="home#home" class="flex w-full max-sm:w-48 items-center justify-center px-12 h-full">
                    <div class="flex w-full h-full"><img src="{{asset('img/Telkom-School.svg')}}" alt="School Title" class="max-sm:w-full max-sm:scale-[150%] max-sm:-translate-x-6"> </div>
                </a>
                <div class="flex w-full h-full items-center justify-center max-sm:hidden">
                    <a href="../../../home#home" id="openDataBtn" class="hover:cursor px-6 text-2xl flex items-center font-semibold hover:text-red-600 h-full">Data</a>
                    <a href="../../../home#home" id="openFormBtn" class="px-6 text-2xl flex items-center font-semibold hover:text-red-600 h-full">Isi Formulir</a>
                    <a class="px-6 text-2xl flex items-center font-semibold hover:text-red-600 h-full" href="../../../../home#panduan">Panduan</a>
                    <a class="px-6 text-2xl flex items-center font-semibold h-full justify-center py-4" href="login"><span class="hover:bg-white text-center px-6 flex items-center hover:text-red-600 rounded-3xl text-white h-full bg-red-600 ring-red-400 hover:ring transition-all">Masuk</span></a>
                </div>
                <div class="lg:hidden">
                    <button id="openModalBtn" class="text-2xl px-2 py-1 font-semibold text-white bg-red-500 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <div id="navModal" class="fixed h-full inset-0 bg-white hidden"> <!-- Nav untuk mobile -->
                    <div class="bg-white flex flex-col justify-center w-full mx-auto rounded-lg">
                        <div class="flex justify-end w-full h-20 border-lg">
                            <button id="closeModalBtn" class="text-lg justify-center items-center flex rounded font-semibold text-white bg-red-500 w-16 h-16">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div class="flex flex-col h-auto items-center bg-white">
                            <a id="tombolHome" href="../../../../home#home" class="text-2xl flex items-center w-full justify-start px-4 border-b py-6  font-semibold hover:text-red-600">Beranda</a>
                            <a id="tombolPanduan" href="../../../../home#panduan" onclick="scrollToElement('panduan')" id="tombolPanduan" class="text-2xl flex items-center w-full justify-start px-4 border-b py-6  font-semibold hover:text-red-600">Panduan</a>
                            <a href="login" class="text-2xl flex items-center w-full justify-start px-4 border-b py-6  font-semibold hover:text-red-600">Masuk</a>
                        </div>

                    </div>
                </div>
                <!-- Modal Data -->
                <div id="dataForm" class="fixed flex justify-center items-center w-full h-full inset-0 bg-black bg-opacity-50 hidden transition-all"> 
                    <div class="bg-white flex flex-col justify-center w-[500px] max-sm:w-80 pb-12 h-auto mx-auto rounded-xl">
                        <div class="flex justify-end w-full h-20 border-lg rounded-t-lg bg-white">
                            <button id="closeDataBtn" class="text-lg justify-center items-center flex rounded-tr-lg font-semibold text-white bg-red-500 w-16 h-16">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div class="w-full h-6 max-sm:h-auto px-8">
                            <h2 class="text-xl flex w-full text-center h-auto justify-center text-gray-700 font-semibold">Masukkan NIS Terlebih dahulu</h2>
                        </div>
                        <form action="/Data" enctype="multipart/form-data" method="POST" class="flex flex-col py-8 pt-12 items-center gap-8 bg-white w-full max-sm:px-3 px-8 h-full transition-all">
                            @csrf
                            <div class="flex items-center flex-col justify-center w-3/4 max-sm:w-full px-8 gap-6">
                                <div class="flex max-w-[400px] w-full flex-col">
                                    <label for="nis" class="uppercase">NIS</label>
                                    <input type="number" require name="nis" id="nis" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:bg-blue-50 focus:outline-none outline-none transition-all" value="">
                                </div>
                                <div class="flex justify-end mt-5 px-8">
                                    <div class="inline-flex items-end">
                                        <button type="submit" class="transition-all w-64 h-12 bg-blue-600 hover:bg-white hover:border hover:border-red-600 hover:text-red-600 text-gray-100 font-bold py-2 px-4 rounded">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
                <!-- Modal Form -->
                <div id="Form" class="fixed flex justify-center items-center w-full h-full inset-0 bg-black bg-opacity-50 hidden transition-all"> 
                    <div class="bg-white flex flex-col justify-center w-[500px] max-sm:w-80 pb-12 h-auto mx-auto rounded-xl">
                        <div class="flex justify-end w-full h-20 border-lg rounded-t-lg bg-white">
                            <button id="closeFormBtn" class="text-lg justify-center items-center flex rounded-tr-lg font-semibold text-white bg-red-500 w-16 h-16">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div class="w-full h-6 max-sm:h-auto px-8">
                            <h2 class="text-xl flex w-full h-auto text-center justify-center text-gray-700 font-semibold">Masukkan NIS terlebih dahulu</h2>
                        </div>
                        <form action="/process" enctype="multipart/form-data" method="POST" class="flex flex-col py-8 pt-12 items-center gap-8 bg-white w-full max-sm:px-3 px-8 h-full transition-all">
                            @csrf
                            <div class="flex items-center flex-col justify-center w-3/4 max-sm:w-full px-8 gap-6">
                                <div class="flex max-w-[400px] w-full flex-col">
                                    <label for="nisform" class="uppercase">NIS</label>
                                    <input type="number" require name="nis" id="nisform" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:bg-blue-50 focus:outline-none outline-none transition-all" value="">
                                </div>
                                <div class="flex justify-end mt-5 px-8">
                                    <div class="inline-flex items-end">
                                        <button type="submit" class="transition-all w-64 h-12 bg-blue-600 hover:bg-white hover:border hover:border-red-600 hover:text-red-600 text-gray-100 font-bold py-2 px-4 rounded">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </nav>

        <div class="flex flex-col w-full">
            @yield('container')
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
            var navbar = document.querySelector("nav");

            window.addEventListener("scroll", function () {
                if (window.scrollY > 25) {
                navbar.classList.add("bg-white");
                navbar.classList.add("shadow");
                navbar.classList.add("border-gray-400");
                navbar.classList.add("shadow-neutral-200");
                } else {
                navbar.classList.remove("bg-white");
                navbar.classList.remove("shadow");
                navbar.classList.remove("border-gray-400");
                navbar.classList.remove("shadow-neutral-200");
                }
            });
            });

        </script>
        
        <script> //Navigasi untuk mobile
            var openModalBtn = document.getElementById('openModalBtn');
            var closeModalBtn = document.getElementById('closeModalBtn');
            var closePanduan = document.getElementById('tombolPanduan');
            var closeHome = document.getElementById('tombolHome');
            var navModal = document.getElementById('navModal');

            openModalBtn.addEventListener('click', function() {
                navModal.classList.remove('hidden');
            });

            closeModalBtn.addEventListener('click', function() {
                navModal.classList.add('hidden');
            });

            closePanduan.addEventListener('click', function() {
                navModal.classList.add('hidden');
            });
            closeHome.addEventListener('click', function() {
                navModal.classList.add('hidden');
            });
        </script>


    </body>
    
</html>
