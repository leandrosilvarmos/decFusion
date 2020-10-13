@extends('layouts.admin')

@section('content')

<section class="cards-info">


    <div class="col-md-4">
        <div class="card-counter danger">
            <div class="card-title">
                <h3> Produto em Estoque </h3>
            </div>
            <div class="row">
                <div class="col-auto">
                    <span class="count-numbers">
                      
                    </span>
                    <span class="count-name">Instances</span>
                    <i class="fas fa-calendar"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card-counter danger">
            <div class="card-title">
                <h3> Produto mais Vendido </h3>
            </div>
            <div class="row">
                <div class="col-auto">
                    <span class="count-numbers">599</span>
                    <span class="count-name">Instances</span>
                    <i class="fas fa-calendar"></i>
                </div>
            </div>
        </div>
    </div>

</section>
<hr>

<div class="mr-4 mt-2">
    <div class="float-right mb-1">
        <a class="btn btn-primary" href="{{route('produtos.create')}}">Novo Produto</a>
        <a class="btn btn-dark" href="#">Lixeira Produtos</a>
    </div>



    <table class="table container">
        <thead>
            <tr class="text-center table">
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
                    <a href="#" class="btn btn-primary btn-sm">Mostrar</a>
                    <a href="{{route('produtos.edit', $produto->id)}}" class="btn btn-warning btn-sm text-white">Editar</a>
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





@endsection