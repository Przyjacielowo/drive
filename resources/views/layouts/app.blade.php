<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
</head>
<body>
    @guest

    <div style="width: 100%; border-bottom: 1px solid #dee2e6; padding: 10px 0 5px 10px; margin-bottom: 5px;">
        <a href="{{ route('home') }}" class="nav-link" style="font-size: 22px; color: rgb(0, 0, 0);">drive.ridiculam.pl</a>
    </div>

    @endguest
@auth
    <nav class="main-header navbar navbar-expand navbar-white navbar-light" @guest style="margin-left: 0;" @endguest>
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('home') }}" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('home') }}" class="nav-link">Contact</a>
            </li>

        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Wyloguj</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>

        </ul>
    </nav>



    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('home') }}" class="brand-link elevation-4">
            <span class="brand-text font-weight-light" style="display: block; text-align: center;">drive.ridiculam.pl</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info" style="width: 100%; text-align: center;">
                    <a href="#" class="d-block">User</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                {{-- <li class="nav-item menu-is-opening menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Ulubione katalogi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('folders.show', 1) }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>katalog v1</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('folders.show', 2) }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>katalog v2</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('folders.show', 3) }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>katalog v3</p>
                        </a>
                    </li>
                    </ul>
                </li> --}}
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="fa-solid fa-house-chimney"></i>
                        <p>
                            Strona główna
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('folders.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Foldery
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link">
                        <i class="fa-solid fa-users"></i>
                        <p>
                            Użytkownicy
                        </p>
                    </a>
                </li>

            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
@endauth


    <main>
        @yield('content')
    </main>


</body>
</html>
