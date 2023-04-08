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
    <nav class="bg-[#000814] px-5 py-4 text-white font-normal">
        <ul class="w-fit flex laptop:flex-row laptop:gap-5">
            <li class="{{ request()->routeIs('home') ? 'text-[#219ebc]' : 'text-white' }} hover:text-[#219ebc]"><a href="{{ route('home') }}">Home</a>
            <li class="{{ request()->routeIs('about') ? 'text-[#219ebc]' : 'text-white' }} hover:text-[#219ebc]"><a href="{{ route('about') }}">About Us</a></li>
            <li class="{{ request()->routeIs('posts.create') ? 'text-[#219ebc]' : 'text-white' }} hover:text-[#219ebc]"><a href="{{ route('posts.create') }}">Create Post</a></li>
        </ul>
    </nav>
    <main class="bg-slate-200 p-1 min-h-screen">
        @yield('main')
    </main>
    <footer>
        @yield('footer')
    </footer>
</body>
</html>