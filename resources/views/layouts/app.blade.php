<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>@yield('title')</title>
</head>
<body>
    <div class="container mx-auto">
    @include('super_admin.partials.sidebar')
        <main>
        @yield('content')
        </main>
    </div>
    <script src="{{ asset('node_modules/flowbite/dist/flowbite.js') }}"></script>
</body>
</html>