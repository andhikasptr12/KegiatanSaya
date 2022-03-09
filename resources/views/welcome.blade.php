<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            @auth()
                                <li class="nav-item">
                                    <a href="{{route('dashboard.index')}}" class="nav-link">{{ __('Dashboard') }}</a>
                                </li>
                            @endauth
                            @role('admin')
                            <li class="nav-item">
                                <a href="{{route('data.siswa')}}" class="nav-link">{{ __('Data Siswa') }}</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('manage-kegiatan')}}" class="nav-link">{{ __('Manage Kegiatan') }}</a>
                            </li>
                            @endrole
                            @role('bendahara')
                            <li class="nav-item">
                                <a href="{{route('verifikasi-pendaftaran')}}" class="nav-link">{{ __('Verifikasi Pendaftaran ')
                                    }}</a>
                            </li>
                            @endrole
                            @role('student')
                            <li class="nav-item">
                                <a href="{{route('kegiatan.tampilkan')}}" class="nav-link">{{ __('Cek Kegiatan') }}</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('activity')}}" class="nav-link">{{ __('Kegiatanku') }}</a>
                            </li>
                            @endrole
                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="jumbotron">
                <div class="container">
                    <div>
                        <h4 class="text-primary">Manage Event</h4>
                        <h4 class="text-primary">SMK AL-BAHRI</h4>
                        <p class="text-primary">
                            Jl. Yon Armed 7 No.143, RT.003/RW.006, Cikiwul, Bantargebang, Kota Bks, Jawa Barat 17152
                        </p>
                    </div>
                </div>
            </div>
            <main >
                @yield('content')
            </main>
        </div>
    </body>
</html>