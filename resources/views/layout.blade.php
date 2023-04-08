<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title', 'Blog')
    </title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <nav class="bg-green-600 px-5 py-4 text-white font-normal">
        <ul class="w-fit flex laptop:flex-row laptop:gap-5">
            <li class="hover:text-yellow-400"><a href="{{ route('home') }}">Home</a>
            <li class="hover:text-yellow-400"><a href="{{ route('about') }}">About us</a></li>
        </ul>
    </nav>
    <main>
        @yield('main')
    </main>
    <footer>
        @yield('footer')
    </footer>
</body>
</html>