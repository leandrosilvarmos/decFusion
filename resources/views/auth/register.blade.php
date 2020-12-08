@extends('layouts.app')

@section('contents')

<head>
    <link href="{{ asset('css/web/register.css') }}" rel="stylesheet">
</head>

<div class="login container" id="container">
    <div class="form-container sign-in-container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1> Realizar Login</h1>
            <form class="form-register" method="post" name="register" novalidate>
                <div class="input-field col s6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror validate" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Informe seu Nome">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="input-field col s6">
                    <input id="email" type="email" ng-model="email" class="form-control @error('email') is-invalid @enderror validate" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Informe seu E-mail">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror


                </div>
                <div class="input-field col s6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror validate" ng-model="password" ng-minlength='6' name="password" required autocomplete="new-password" placeholder="Senha">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="input-field col">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Senha">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
                <div class="space-top text-center">
                    <button  class="btnRegister" type="submit">
                        <i class="material-icons left"></i> Confirmar
                    </button>
                </div>
            </form>
    </div>

    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-right">
                <h1>Ainda não possui conta</h1>
                <p>Se ainda não possui uma conta em nossa loja, realize seu cadastro e aproveite todos os beneficios que temos para vocês . E facil e rapido somente com seu nome e email voce realiza seu cadastro. Venha conhecer nossos produtos e servicos!</p>
            </div>
        </div>
    </div>

</div>
</form>

@endsection