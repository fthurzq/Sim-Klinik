<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        @include('super_admin.layouts.sidebar')

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <header class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-semibold text-gray-700">@yield('title_name')</h1>
                <a href="{{ route('logout') }}" class="text-sm font-medium text-gray-500 hover:text-gray-700">Logout</a>
            </header>

            <!-- Content -->
            <main>
                @yield('content') <!-- Section yang akan diisi konten halaman spesifik -->
            </main>
        </div>
    </div>

    <!-- Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.5.1/flowbite.min.js"></script>
</body>
</html>
