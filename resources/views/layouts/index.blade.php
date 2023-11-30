<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title')</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            .a {
                background-color: r#f3f4f6;
            }
        </style>
    </head>
    <body class="">
        <nav class="flex w-full h-24 justify-center items-center bg-slate-100 sticky top-0 ">
            <div class="flex items-center px-12 h-full max-w-[1360px] w-full">
                <div class=""><img src="{{asset('img/Telkom-School.svg')}}" alt="School Title" class="h-20 w-auto"> </div>
            </div>
        </nav>

        <div class="flex flex-col w-full">
            @yield('container')
        </div>
    </body>
</html>
