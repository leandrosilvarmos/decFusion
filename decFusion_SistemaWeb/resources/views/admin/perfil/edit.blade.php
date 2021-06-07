@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center py-1">
        <h2 class="mb-4">Editar Perfil -  Administrador </h2>
    </div>




        <form action="{{ route('perfil.update', $users->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">

                <div class="form-group col-md-4">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ $users->name }}">
                    <small><span class="text-danger">{{ $errors->first('name') }}</span></small>
                </div>

                <div class="form-group col-md-6">
                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ $users->email }}">
                    <small><span class="text-danger">{{ $errors->first('email') }}</span></small>
                </div>
            </div>

            <div class="row">

                <div class="form-group col-md-4">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                        placeholder="Digite uma nova senha (caso não alterado, sua senha permanecerá a mesma)">
                    <small><span class="text-danger">{{ $errors->first('password') }}</span></small>
                </div>
            </div>

            <div class="float-right">
                <button type="submit" class="btn btn-success">Atualizar</button>
                <a class="btn btn-dark" href="{{ route('users.index') }}">Cancelar</a>
            </div>
        </form>

@endsection
