<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>HOME</title>
    <link rel="icon" href="{{asset('src/mind.png')}}" src="{{asset('src/mind.png')}}">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
    <div class="bg-gradient-to-r from-blue-700 via-indigo-700 to-purple-800 h-screen w-screen">
    @if (Route::has('login'))
                <div class="fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="mx-5 no-underline text-3xl text-gray-50 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="mx-5 no-underline text-3xl text-gray-50 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 mx-5 no-underline text-3xl text-gray-50 underline">Register</a>
                        @endif
                    @endauth
                </div>
    @endif
    <div class="z-30 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 font-black text-7xl md:text-8xl lg:text-9x1">HOME</div>
    </div>
</body>
</html>