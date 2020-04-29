<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ChemistryWeb</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- TETRIS -->

    @if (Request::path() == 'newbieTetris')
        <link rel="stylesheet" type="text/css" href="{{ url('/css/newbieTetris.css') }}" />
    @endif

    @if (Request::path() == 'easyTetris')
        <link rel="stylesheet" type="text/css" href="{{ url('/css/easyTetris.css') }}" />
    @endif

    @if (Request::path() == 'normalTetris')
        <link rel="stylesheet" type="text/css" href="{{ url('/css/normalTetris.css') }}" />
    @endif

    @if (Request::path() == 'advanceTetris')
        <link rel="stylesheet" type="text/css" href="{{ url('/css/advanceTetris.css') }}" />
    @endif

    @if (Request::path() == 'hardTetris')
        <link rel="stylesheet" type="text/css" href="{{ url('/css/hardTetris.css') }}" />
    @endif

    @if (Request::path() == 'expertTetris')
        <link rel="stylesheet" type="text/css" href="{{ url('/css/expertTetris.css') }}" />
    @endif

    @if (Request::path() == 'extremeTetris')
        <link rel="stylesheet" type="text/css" href="{{ url('/css/extremeTetris.css') }}" />
    @endif

    <!-- MEMORAMA -->

    @if (Request::path() == 'newbieMemorama')
        <link rel="stylesheet" type="text/css" href="{{ url('/css/newbieMemorama.css') }}" />
    @endif

    @if (Request::path() == 'easyMemorama')
        <link rel="stylesheet" type="text/css" href="{{ url('/css/newbieMemorama.css') }}" />
    @endif

    @if (Request::path() == 'normalMemorama')
        <link rel="stylesheet" type="text/css" href="{{ url('/css/newbieMemorama.css') }}" />
    @endif

    @if (Request::path() == 'advanceMemorama')
        <link rel="stylesheet" type="text/css" href="{{ url('/css/newbieMemorama.css') }}" />
    @endif

    @if (Request::path() == 'hardMemorama')
        <link rel="stylesheet" type="text/css" href="{{ url('/css/newbieMemorama.css') }}" />
    @endif

    @if (Request::path() == 'expertMemorama')
        <link rel="stylesheet" type="text/css" href="{{ url('/css/newbieMemorama.css') }}" />
    @endif

    @if (Request::path() == 'extremeMemorama')
        <link rel="stylesheet" type="text/css" href="{{ url('/css/newbieMemorama.css') }}" />
    @endif

    <!-- DUOLINGO -->

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                @can('edit-users')
                <a class="navbar-brand" href="{{ url('/home') }}">
                @endcan
                    <!--{{ config('app.name', 'Laravel') }} -->
                    ChemistryWeb - Project
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto"> </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                    {{ Auth::user()->surname }} alias "{{ Auth::user()->username }}"
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/home">
                                        Inicio
                                    </a>

                                    @can('manage-users')
                                    <a class="dropdown-item" href="{{ route('admin.users.index') }}">
                                        Administrar Usuarios
                                    </a>
                                    @endcan

                                    <a class="dropdown-item" href="{{route('myProfile')}}">
                                        Mi Perfil
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
