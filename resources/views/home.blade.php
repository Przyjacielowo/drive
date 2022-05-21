@extends('layouts.app')

@section('content')

    <nav class="main-header navbar navbar-expand navbar-white navbar-light" @guest style="margin-left: 0;" @endguest>
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            @guest
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('home') }}" class="nav-link" style="font-weight: 700; font-size: 22px;">drive.ridiculam.pl</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('home') }}" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('home') }}" class="nav-link">Contact</a>
            </li>
            @endguest
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            @auth
            <li class="nav-item d-none d-sm-inline-block">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Wyloguj</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
            @endauth
        </ul>
    </nav>

    @auth

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

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item menu-is-opening menu-open">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
                Ulubione katalogi
                <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('catalog.show', 1) }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>katalog v1</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('catalog.show', 2) }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>katalog v2</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('catalog.show', 3) }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>katalog v3</p>
                </a>
            </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{ route('catalog.create') }}" class="nav-link active">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Dodaj katalog
                </p>
            </a>
        </li>
        
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    </aside>
    @endauth
@endsection
