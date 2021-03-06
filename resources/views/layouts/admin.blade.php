<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')dacFusion</title>


    <!-- Scripts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <script src="{{ asset('js/app.js') }}"></script>


    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@700&family=Quicksand&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Overlock:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">


    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/admin/style.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/hotjar.js') }}"></script>




</head>


<body>


    <nav class="flex-column navbar navbar-expand-lg navbar-light p-0 fixed-top" id="navMenu">

        <div class="bg-green seperator w-100"></div>
        <div class="d-flex w-100 px-0 pt-0 pb-thin">
            <div class="flex-grow-1 navbar navbar-expand-lg w-100 mw-100 p-0">
                <a class="navbar-brand" href="#">
                </a>
                <button class="mr-4 navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
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
                            <a class="navbar-item nav-link btn-logout dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); 
            document.getElementById('logout-form').submit();">
                                {{ 'Sair' }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="bg-green seperator w-100"></div>
    </nav>
    <section class="wrapper">
        <div class="sidebar">

            <h2> DecFusion </h2>
            <ul>
                <li><a class="dashboard-link" href="{{ route('dashboard') }}"><i class="fa fa-home"
                            aria-hidden="true"></i><span class="title">Inicio</span></a></li>
                <li><a href="{{ route('users.index') }}"><i class="fas fa-user"" aria-hidden=" true"></i><span
                            class="title">Administrador</span></a></li>
                <li><a href="{{ route('categoria.index') }}"><i class="fa fa-tag" aria-hidden="true"></i><span
                            class="title">Categorias</span></a></li>
                <li><a href="{{ route('produtos.index') }}"><i class="fa fa-cubes" aria-hidden="true"></i><span
                            class="title">Produtos</span></a> </li>
                <li><a href="#"><i class="fa fa-user-tie" aria-hidden="true"></i><span class="title">Clientes</span></a>
                </li>
                <li><a href="#"><i class="fa fa-user-tie" aria-hidden="true"></i><span
                            class="title">Profissionais</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span
                            class="title">Vendas</span></a></li>
            </ul>
        </div>
        <section class="main-content">

            <section class="content">

                @yield('content')
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger">{{ session()->get('error') }}</div>
                @endif
            </section>


        </section>
    </section>




</body>

</html>
