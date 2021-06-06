@extends('layouts.admin')

@section('content')

    <div class="welcome">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h2> Admnistrador</h2>
                        <p> Acompanhamento de dados administrativo da empresa, é tambem a visualização de todos os clientes
                            cadastros na plataforma. Acesso ao seu perfil de usuario.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid mt-3">
        <div class="mb-2 py-2">
            <a class="btn btn-primary" href="{{ route('perfil.edit') }} ">Meu Perfil</a>
            <a class="btn btn-dark " href="{{ route('novo.usuario.admin') }} "> Cadastrar Admnistrador </a>
        </div>
    </div>

    <div class="card shadow dispatched-orders mt-4">
        <h6 class="stat-title font-weight-bold"></h6>
        <div class="table-responsive">
            <table class="table orders-table">
                <thead>
                    <tr class="text-uppercase">
                        <th>Nome Usuario</th>
                        <th>Email</th>
                        <th>Usuario desde</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>

                                <form action="{{ route('autentica.admin', $user->id) }}" class="d-inline" method="POST"
                                    onsubmit=" return confirm ('Confirmar alteração do perfil do usuario ?')">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" href="#"
                                        class="btn btn-warning btn-sm {{ $user->isAdmin() ? 'btn-danger' : 'btn-primary' }}">
                                        {{ $user->isAdmin() ? 'Remover usuario Administrador' : 'Autentica usuario administrador' }}
                                    </button>
                                </form>

                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>

        </div>
    </div>



@endsection
