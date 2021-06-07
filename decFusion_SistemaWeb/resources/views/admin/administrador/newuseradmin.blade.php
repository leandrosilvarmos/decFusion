@extends('layouts.admin')

@section('content')

    <section>
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="mb-5">Cadastrar novo Usuario administrador</h2>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <form class="form-register" method="post" name="register" novalidate>
                <div class="row">

                    <div class="form-group col-md-4">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror validate"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                            placeholder="Informe seu Nome">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <input id="email" type="email" ng-model="email"
                            class="form-control @error('email') is-invalid @enderror validate" name="email"
                            value="{{ old('email') }}" required autocomplete="email" placeholder="Informe seu E-mail">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror


                    </div>
                </div>


                <div class="row">


                    <div class="form-group col-md-5">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror validate" ng-model="password"
                            ng-minlength='6' name="password" required autocomplete="new-password" placeholder="Senha">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="form-group col-md-5">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password" placeholder="Confirmar Senha">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                </div>



                <div class="float-left py-4">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                    <a class="btn btn-dark" href="{{ route('users.index') }}">Cancelar</a>
                </div>

            </form>
    </section>


@endsection
