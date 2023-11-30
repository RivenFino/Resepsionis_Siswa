<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</head>
<body style="background-image: url({{asset('img/SMK-Telkom-Banjarbaru.jpg')}});" class="bg-no-repeat bg-cover bg-center">
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
    <div class="flex h-full max-sm:h-screen max-sm:bg-gray-200 justify-between max-sm:justify-start max-sm:items-start">
        <div class="flex flex-col justify-center bg-gray-100 max-sm:bg-gray-200 w-[700px] max-sm:text-sm h-screen max-sm:h-[650px] max-sm:justify-center items-center align-center max-sm:px-2 gap-2 max-sm:gap-4">

            <div class="flex flex-col gap-2 justify-center items-center max-sm:max-w-[310px]">
                <img src="{{asset('img/Telkom-School.svg')}}" alt="School Title" class="max-sm:w-full h-auto"> 
                <img src="{{asset('img/Line-Decor.svg')}}" alt="Decoration Line" class="max-sm:w-full h-auto">
            </div>
            <div class="flex max-sm:w-full w-[400px] justify-center items-center h-auto">
                <form class="flex max-sm:max-w-[320px] w-full flex-col gap-6 max-sm:gap-2  mt-4" action="login/proses" method="post">
                    @csrf
                    <input type="text" class="h-14 max-sm:h-8 max-sm:rounded-sm max-sm:text-sm max-sm:focus:text-sm rounded-md bg-gray-50 drop-shadow-xl px-4 text-xl hover:outline-gray-300 hover:outline focus:outline-none focus:bg-blue-100 uppercase" placeholder="nip" name="nip">
                    <input type="password" class="h-14 max-sm:h-8 max-sm:rounded-sm max-sm:text-sm max-sm:focus:text-sm rounded-md bg-gray-50 drop-shadow-xl px-4 text-xl hover:outline-gray-300 hover:outline focus:outline-none focus:bg-blue-100" placeholder="password" name="password">
                    <div class="flex justify-start px-2 gap-4">
                    </div>
                    <div class="flex justify-center gap-4">
                        <button class="bg-red-500 max-sm:h-8 max-sm:rounded-sm rounded-md font-bold flex w-2/3 h-14 justify-center items-center text-white" type="submit" name="login">Login</button>
                    </div>
                </form>
            </div>

        </div>
        <div class="m-4 h-auto w-auto max-sm:top-1 max-sm:absolute max-sm:right-3">
            <img class="max-sm:max-h-28" src="{{asset('img/YPT-Logo.svg')}}" alt="School Logo">
        </div>
    </div>
</body>
</html>