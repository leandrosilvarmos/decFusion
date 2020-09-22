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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Karma&display=swap" rel="stylesheet">



    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/admin/style.css') }}">


</head>


<body>



    <div class="wrapper">

        <nav id="sidebar" class="sidebar">

            <div class="sidebar-header">
                <h1> dacFusion</h1>
            </div>



            <a href="{{route('dashboard')}}"><i class="fa fa-home" aria-hidden="true"></i><span class="title">Inicio</span></a>
            <a href="{{route('produtos.index')}}"><i class="fa fa-cubes" aria-hidden="true"></i><span class="title">Produtos</span></a>
            <a href="{{route('categoria.index')}}"><i class="fa fa-tag" aria-hidden="true"></i><span class="title">Categorias</span></a>
            <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="title">Vendas</span></a>
            <a href="#"><i class="fas fa-sliders-h" aria-hidden="true"></i><span class="title">Perfil</span></a>
            <a href="#"><i class="fa fa-users" aria-hidden="true"></i><span class="title">Clientes</span></a>
            <a href="#"><i class="fa fa-users" aria-hidden="true"></i><span class="title">Profissionais</span></a>

        </nav>





        <section class="content d-flex flex-column">
            <nav class="navbar navbar-expand topbar mb-4 static-top ">
                <div class="container-fluid">

                    <button class="btn btn-link d-md-none rounded-circle mr-3" type="button" id="sidebarToggle">
                        <i class="fas fa-bars"></i>
                    </button>

                    <form action="" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-o small" placeholder="Pesquise...">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="navbar-nav">
                        <a href="" class="navbar-item nav-link btn-logout"><i class="fas fa-sign-out-alt"></i> Sair </a>
                    </div>
                </div>
            </nav>


            <div class="container">
                @yield('content')
            </div>




        </section>
    </div>

    <script>
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>

</body>

</html>