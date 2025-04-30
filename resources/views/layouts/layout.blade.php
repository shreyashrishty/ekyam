<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'EKYAM')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900 min-h-screen flex flex-col font-sans">

    @include('partials.navbar')

    <main class="flex-grow max-w-7xl mx-auto px-4 py-8">
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>
