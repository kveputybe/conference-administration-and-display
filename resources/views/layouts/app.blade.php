<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<div>
    <header class="m-10">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid ">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('conferences.show')}}">{{ __('app.conference') }}</a>
                    </li>
                    @guest
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('conferences.create')}}">{{ __('app.createConference') }}</a>
                    </li>
                    @endguest
                    <li class="nav-item ">
                        @guest
                            <a class="nav-link" href="{{ route('login') }}">{{ __('app.login') }}</a>
                            @else
                            <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('app.logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endguest
                    </li>
                </ul>
        </header>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
