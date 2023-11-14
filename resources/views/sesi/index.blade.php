<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body style="background-image: url({{asset('img/SMK-Telkom-Banjarbaru.jpg')}});" class="bg-no-repeat bg-cover bg-center">
    <div class="flex justify-between">
        <div class="flex bg-gray-100 w-[700px] h-screen justify-center items-center align-center">
            <div class="flex flex-col">
                <div class="flex flex-col gap-2">
                    <img src="{{asset('img/Telkom-School.svg')}}" alt="School Title"> 
                    <img src="{{asset('img/Line-Decor.svg')}}" alt="Decoration Line">
                </div>
                <div>
                    <form class="flex flex-col gap-6 mt-4 justify-normal" action="login/proses" method="post">
                        @csrf
                        <input type="text" class="h-14 rounded-md bg-gray-50 drop-shadow-xl px-4 text-xl hover:outline-gray-300 hover:outline focus:outline-none focus:bg-blue-100 focus:px-5 focus:text-2xl" placeholder="NIS" name="nis">
                        <input type="password" class="h-14 rounded-md bg-gray-50 drop-shadow-xl px-4 text-xl hover:outline-gray-300 hover:outline focus:outline-none focus:bg-blue-100 focus:px-5 focus:text-2xl" placeholder="password" name="password">
                        <div class="flex justify-start px-2 gap-4">
                            <input class="align-start scale-[2]" type="radio" name="remember" id="">
                            Ingatkan Saya
                        </div>
                        <div class="flex gap-4">
                            <button class="bg-red-500 rounded-md font-bold flex w-full h-14 justify-center items-center text-white" type="submit" name="login">Login</button>
                            <a class="flex w-full" href="#">
                                <button class="bg-gray-300 rounded-md font-bold flex w-full h-14 justify-center items-center text-gray-900" type="button" href>Tamu</button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="m-4">
            <img src="{{asset('img/YPT-Logo.svg')}}" alt="School Logo">
        </div>
    </div>
</body>
</html>