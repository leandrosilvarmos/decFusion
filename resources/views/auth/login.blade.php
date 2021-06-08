@extends('layouts.web')

@section('content')




<section class="login-container" id="container">

    <div class="form-container sign-in-container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1> Realizar Login</h1>
            <span>para aceder ao decFusion</span>


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

            <a href="#"> Esqueci a Senha </a>

        </form>
    </div>

    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-right">
                <h1>Se ainda não possui acesso ao sistema</h1>
                <span>Entre em contato com o suporte ao sistema ou diretamente com o gestor do seu departamento, para obter a liberação de acesso.</span>
            </div>
        </div>
    </div>


</section>


@endsection