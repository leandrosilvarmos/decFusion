@extends('layouts.admin')

@section('content')


<div class="welcome">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <h2>Categorias</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-3">
    <div class="mb-2 py-2">
        <a class="btn btn-primary" href="{{route('categoria.create')}}">Nova Categoria</a>
        <a class="btn btn-dark" href="#">Lixeira Categorias</a>
    </div>
</div>



<section class="statistics">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="box">
                    <i class="fas fa-tags fa-fw bg-primary"></i>
                    <div class="info">
                        <h3>{{$categoriasCount}}:</h3> <span> Categorias</span>
                        <p>cadastrados na base</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                <i class="fa fa-caret-up fa-fw danger bg-primary"></i>
                    <div class="info">
                        <h3>Categoria</h3> <span> </span>
                        <p>Mais Vendida</p>
                    </div>
                </div>
            </div>
         
        </div>
    </div>
</section>


<div class="card shadow dispatched-orders mt-4">
    <h6 class="stat-title font-weight-bold">Lista de Categorias</h6>
    <div class="table-responsive">
        <table class="table orders-table">
            <thead>
                <tr class="text-uppercase">
                    <th>Id</th>
                    <th>Nome Categoria</th>
                    <th>Tipo</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categorias as $categoria)
                <tr>
                    <td>{{$categoria->id}}</td>
                    <td>{{$categoria->nome}}</td>
                    <td>{{$categoria->tipo}}</td>
                    <td>
                        <a href="{{route('categoria.edit', $categoria->id)}}" class="btn btn-warning btn-sm text-white">Editar</a>
                        <form action="#" class="d-inline" method="POST" onsubmit="return confirm('Você tem certeza que quer apagar?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" href="#" class="btn btn-danger btn-sm"> Mover para Lixeira</button>
                        </form>

                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection