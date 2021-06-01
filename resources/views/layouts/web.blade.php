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


    <!-- Styles -->
    <link href="{{ asset('css/web/style.css') }}" rel="stylesheet">



</head>



<body>

    <header>

        <img class="logo" src="../../assets/dacfusionBlack.jpg" alt="logo" />

        <nav>

            <ul class="nav-links">
                <li><a href="#" class="active">Inicio</a></li>
                <li><a href="#">Conceito</a></li>
                <li><a href="#">Produtos</a></li>
            </ul>
        </nav>

                <a href="{{ route('register') }}" class="btn-links">Realize seu Login</a>
    </header>


    <main>

        @yield('content')

    </main>

    <footer class="footerBg">
        <div class="footer-container container">
            <img class="footer-logo" src="../assets/dacfusionWhite.png" alt="Logo" />
    
            <div class="footer-info">
                <div class="ftRedes-sociais">
                    <span>Redes Sociais</span>
                    <img src="../assets/facebook.png" alt="redes sociais" />
                    <img src="../assets/instagram.png" alt="redes sociais" />
                </div>
                <div class="ftContato">
                    <span>Contato</span>
                    <p>Insira seu e-mail</p>
                    <input type="text" />
                </div>
                <div class="ftEndereco">
                    <span>Endereço</span>
                    <p>Avenida Eusébio Stevaux 4007 São Paulo, SP - 047-200</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
