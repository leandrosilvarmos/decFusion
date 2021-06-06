@extends('layouts.admin')

@section('content')


<div class="welcome">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <h2>Produtos</h2>
                    <p> Realizar o cadastro de produtos, é acompanhar os produtos cadastrados, mais vendidos e quantidade em estoque.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-3">
    <div class="mb-2 py-2">
        <a class="btn btn-primary" href="{{route('produtos.create')}}">Novo Produto</a>
        <a class="btn-danger btn " href="{{route('produtos.trashed')}}">Lixeira Produtos</a>
    </div>
</div>

<section class="statistics">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="box">
                    <i class="fa fa-envelope fa-fw bg-primary"></i>
                    <div class="info">
                        <h3>{{$produtosCount}}: </h3> <span> Produtos</span>
                        <p>cadastrados na base</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <i class="fa fa-caret-up fa-fw danger bg-primary"></i>
                    <div class="info">
                        <h3>Produto</h3> <span> </span>
                        <p>Mais Vendido</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <i class="fa fa-exclamation-triangle fa-fw success bg-danger"></i>

                    <div class="info">
                        <h3>Produto</h3>
                        <p>Menor quantidade em estoque</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<div class="card shadow dispatched-orders mt-4">
    <h6 class="stat-title font-weight-bold">Lista de Produtos</h6>
    <div class="table-responsive">
        <table class="table orders-table">
            <thead>
                <tr class="text-uppercase">
                    <th>Id</th>
                    <th>Nome Produto</th>
                    <th>Sku</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produtos as $produto)
                <tr>
                    <td>{{$produto->id}}</td>
                    <td>{{$produto->nome}}</td>
                    <td>{{$produto->sku}}</td>
                    <td>
                        <a href="{{route('produtos.show', $produto->id)}}" class="btn btn-primary btn-sm">Mostrar</a>
                        <a href="{{route('produtos.edit', $produto->id)}}" class="btn btn-warning btn-sm ">Editar</a>
                        <form action="{{route('produtos.destroy' , $produto->id)}}" class="d-inline" method="POST" onsubmit="return confirm('Você tem certeza que quer mover pra lixeira?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" href="#" class="btn btn-dark btn-sm"> Mover para Lixeira</button>
                        </form>

                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
        {{$produtos->links()}}

    </div>
</div>



@endsection