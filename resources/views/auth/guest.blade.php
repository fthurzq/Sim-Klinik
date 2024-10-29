<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body>
    <div class="min-h-screen flex justify-center items-center">
        <div class="w-1/2 ">

            <div class="flex justify-center items-center py-10 px-10 bg-white border sm:rounded-lg">
                <div class="w-[462px]">
                    <p class="block font-bold text-center text-lg">@yield('title_name')</p>   
                    <p class="desc-login text-center">@yield('desc')</p>     
                    @yield('form')
                </div>
            </div>
        </div>
        <div class="w-1/2 rounded-lg bg-klinikBlue">
            <p>Halo</p>
        </div>
    </div>
    <script src="{{ asset('node_modules/flowbite/dist/flowbite.js') }}"></script>
</body>
</html>
