@extends('layouts.app')

@section('contents')


<head>
    <link href="{{ asset('css/web/login.css') }}" rel="stylesheet">
</head>
<div class="login container" id="container">

    <div class="form-container sign-in-container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1> Realizar Login</h1>
            <span>atravês do facebook ou Google+, para acompanhar os seus pedidos.</span>

            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            </div>
            <span>Ou informando seu e-mail e senha!</span>
            <div>
                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div>
                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <button type="submit" class="btnlogin">
                {{ __('Login') }}
            </button>
        </form>
    </div>

    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-right">
                <h1>Ainda não possui conta</h1>
                <p>Se ainda não possui uma conta em nossa loja, realize seu cadastro e aproveite todos os beneficios que temos para vocês . E facil e rapido somente com seu nome e email voce realiza seu cadastro. Venha conhecer nossos produtos e servicos!</p>
                <button class="ghost" id="signUp"><a href="{{route('register')}}">Cadastre-se</a></button>
            </div>
        </div>
    </div>


</div>


@endsection