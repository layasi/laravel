<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') | {{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a href="{{ url('/') }}" class="navbar-brand">Abubakar Iliyasu</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a href="{{route ('home')}}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route ('about.index')}}" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route ('projects.index')}}" class="nav-link">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route ('contact.index')}}" class="nav-link">Contact</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        @guest
                        <li class="nav-item">
                            <a href="{{route('auth.register')}}" class="nav-link">Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('auth.login')}}" class="nav-link">Login</a>
                        </li>
                        @endguest
                        @auth
                        <li class="nav-item">
                            <a href="{{route('dashboard')}}" class="nav-link">{{auth()->user()->name}}</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <button class="nav-link border-none">Logout</button>
                            </form>
                        </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4 container">
            @yield('content')
        </main>
    </div>
</body>
</html>