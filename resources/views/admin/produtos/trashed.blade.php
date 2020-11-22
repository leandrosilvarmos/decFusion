@extends('layouts.admin')

@section('content')




<div class="container-fluid ">

    <div class="mb-2 py-2">
        <a class="btn btn-primary" href="{{route('produtos.index')}}">Voltar</a>
    </div>
</div>

<div class="card shadow dispatched-orders mt-4">
    <h6 class="stat-title font-weight-bold">Produtos Lixeira</h6>
    <div class="table-responsive">
        <table class="table orders-table">
            <thead>
                <tr class="text-uppercase">
                    <th scoope="col">Id</th>
                    <th scope="col">Nome Produto</th>
                    <th scope="col">Sku</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produtos as $produto)
                <tr class="text-center">
                    <td>{{$produto->id}}</td>
                    <td>{{$produto->nome}}</td>
                    <td>{{$produto->sku}}</td>
                    <td>
                       
                        <form action="{{route('produtos.destroy' , $produto->id)}}" class="d-inline" method="POST" onsubmit="return confirm('Você tem certeza que quer apagar?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" href="#" class="btn alert-secondary btn-sm"> Excluir</button>
                        </form>

                        <form action="{{route('produtos.restore' , $produto->id)}}" class="d-inline" method="POST" onsubmit="return confirm('Você tem certeza que deseja reativar o produto?')">
                            @csrf
                            @method('PUT')
                            <button type="submit" href="#" class="btn btn-warning btn-sm"> Reativar</button>
                        </form>

                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection