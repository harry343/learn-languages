<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- CSRF Token -->
    <meta content="{{ csrf_token() }}" name="csrf-token">
    <title>
        {{ config('app.name', 'Laravel') }}
    </title>
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Branding Image -->
    <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Laravel') }}
    </a>
    <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
            class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                <span class="navbar-toggler-icon">
                </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    Home
                    <span class="sr-only">
                                (current)
                            </span>
                </a>
            </li>
            <form class="form-inline my-4 my-lg-0">
                <input aria-label="Search" class="form-control mr-sm-2" placeholder="Search" type="search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    Search
                </button>
            </form>

        </ul>
        <ul class="navbar-nav">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">
                        Login
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">
                        Register
                    </a>
                </li>
            @endguest

            @auth
                <li class="nav-item dropdown">
                    <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle"
                       data-toggle="dropdown" href="#" id="navbarDropdown" role="button">

                        {{ Auth::user()->username }}
                        <span class="caret">
                    </span>
                    </a>
                    <div aria-labelledby="navbarDropdown" class="dropdown-menu  dropdown-menu-right">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </li>
            @endauth
        </ul>
    </div>
</nav>
@yield('content')
<!-- Scripts -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.js') }}">
</script>

</body>
</html>