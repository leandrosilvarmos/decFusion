<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')dacFusion</title>


    <!-- Scripts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@300;600&display=swap" rel="stylesheet">


    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/web/style.css') }}">

</head>



<body>

    <header>
        <section class="navbar">
        <div>
            <img src="" alt="">
        </div>
        <nav>

            <div>
                <ul class="nav-links">
                    <li><a href="#" class="active">Empresa</a></li>
                    <li><a href="#">Conceito</a></li>
                    <li><a href="#">Produtos</a></li>
                    <li><a href="#">Saiba mais</a></li>
                </ul>
            </div>

        </nav>
        <div>
            <a href="" class="btn-links">Login</a>
            <a href="" class="btn-links">Cadastre-se</a>
        </div>
        </section>
        

        <h1>
            dacFusion
        </h1>

    </header>


    <main>

        @yield('content')

    </main>
</body>

</html>