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
        <a class="btn btn-danger" href="{{route('categoria.create')}}">Cadastrar</a>
        <a class="btn btn-dark" href="#">Lixeira Categorias</a>
    </div>
</div>



<section class="statistics">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="box">
                    <i class="fa fa-envelope fa-fw bg-primary"></i>
                    <div class="info">
                        <h3>x</h3> <span> Categorias</span>
                        <p>cadastrados na base</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <i class="fa fa-file fa-fw danger"></i>
                    <div class="info">
                        <h3>34</h3> <span> </span>
                        <p>Categoria Mais Vendido</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <i class="fa fa-users fa-fw success"></i>
                    <div class="info">
                        <h3>Lorem Lorem  </h3>
                        <p>Mollitia illum eligendi quod natus</p>
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
                    <th scoope="col">Id</th>
                    <th scope="col">Nome Categoria</th>
                    <th scope="col">Tipo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categorias as $categoria)
                <tr class="text-center">
                    <td>{{$categoria->id}}</td>
                    <td>{{$categoria->nome}}</td>
                    <td>{{$categoria->tipo}}</td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm">Mostrar</a>
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