<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')dacFusion</title>


    <!-- Scripts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Karma&display=swap" rel="stylesheet">



    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/admin/style.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



</head>

<body>
    @auth
    @if(auth()->user()->isAdmin())

    <nav class="flex-column navbar navbar-expand-lg navbar-light p-0 fixed-top" id="navMenu">

        <div class="bg-green seperator w-100"></div>
        <div class="d-flex w-100 px-0 pt-0 pb-thin">
            <div class="flex-grow-1 navbar navbar-expand-lg w-100 mw-100 p-0">
                <a class="navbar-brand" href="#">
                </a>
                <button class="mr-4 navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                </div>
                <div class="d-none d-lg-flex justify-content-end align-items-end nav-login h-100">
                    <div class="dropdown">
                        <div class="profile-info mb-2 mr-2 centered-flexbox pointer" data-toggle="dropdown">
                            <div class="text-white d-flex flex-column align-items-end user-info">
                                <span>Bem vindo: {{ Auth::user()->name }}</span>
                            </div>
                        </div>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-anim mr-2">
                            <a class="dropdown-item" href="#">Edit Profile</a>
                            <a class="navbar-item nav-link btn-logout dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); 
    document.getElementById('logout-form').submit();">
                                {{ ('Sair') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="bg-green seperator w-100"></div>
    </nav>
    <section class="wrap-whole d-flex">
        <div class="inner">
            <section class="vertical-navbar p-3 sidebar" id="sidebar">
                <i id="btnToggleSlimMenu" class="fa fa-list text-green pointer mb-3" role="button"></i>
                <a class="dashboard-link d-flex align-items-center px-2 py-1 bg-green pointer mb-3" href="{{route('dashboard')}}">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span class="ml-2 text-white font-weight-light nav-item-text">Inicio</span>
                </a>
                <a href="{{route('produtos.index')}}"><i class="fa fa-cubes" aria-hidden="true"></i><span class="title">Produtos</span></a>
                <a href="{{route('categoria.index')}}"><i class="fa fa-tag" aria-hidden="true"></i><span class="title">Categorias</span></a>
                <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="title">Vendas</span></a>
                <a href="#"><i class="fas fa-sliders-h" aria-hidden="true"></i><span class="title">Perfil</span></a>
                <a href="#"><i class="fa fa-users" aria-hidden="true"></i><span class="title">Clientes</span></a>
                <a href="#"><i class="fa fa-users" aria-hidden="true"></i><span class="title">Profissionais</span></a>
            </section>
        </div>
        <section class="main-content container">


            @yield('content')
            @if(session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
            @endif
            @if(session()->has('error'))
            <div class="alert alert-danger">{{session()->get('error')}}</div>
            @endif


        </section>
    </section>


    @else

    <nav class="flex-column navbar navbar-expand-lg navbar-light p-0 fixed-top" id="navMenu">

        <div class="bg-green seperator w-100"></div>
        <div class="d-flex w-100 px-0 pt-0 pb-thin">
            <div class="flex-grow-1 navbar navbar-expand-lg w-100 mw-100 p-0">
                <a class="navbar-brand" href="#">
                </a>
                <button class="mr-4 navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                </div>
                <div class="d-none d-lg-flex justify-content-end align-items-end nav-login h-100">
                    <div class="dropdown">
                        <div class="profile-info mb-2 mr-2 centered-flexbox pointer" data-toggle="dropdown">
                            <div class="text-white d-flex flex-column align-items-end user-info">
                                <span>Bem vindo: {{ Auth::user()->name }}</span>
                            </div>
                        </div>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-anim mr-2">
                            <a class="dropdown-item" href="#">Edit Profile</a>
                            <a class="navbar-item nav-link btn-logout dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); 
    document.getElementById('logout-form').submit();">
                                {{ ('Sair') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="bg-green seperator w-100"></div>
    </nav>
    <section class="wrap-whole d-flex">
        <div class="inner">
            <section class="vertical-navbar p-3 sidebar" id="sidebar">
                <i id="btnToggleSlimMenu" class="fa fa-list text-green pointer mb-3" role="button"></i>
                <a class="dashboard-link d-flex align-items-center px-2 py-1 bg-green pointer mb-3" href="{{route('dashboard')}}">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span class="ml-2 text-white font-weight-light nav-item-text">Inicio</span>
                </a>
                <a href="#"><i class="fas fa-sliders-h" aria-hidden="true"></i><span class="title">Perfil</span></a>
                <a href="#"><i class="fa fa-users" aria-hidden="true"></i><span class="title">Profissionais</span></a>
            </section>
        </div>
        <section class="main-content container">
            <div class="welcome">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content">
                                <h2>Welcome to Dashboard</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            @yield('content')
            @if(session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
            @endif
            @if(session()->has('error'))
            <div class="alert alert-danger">{{session()->get('error')}}</div>
            @endif


        </section>
    </section>
    @endif
    @endauth
</body>

<main class="container">
    @yield('contents')
</main>

</html>