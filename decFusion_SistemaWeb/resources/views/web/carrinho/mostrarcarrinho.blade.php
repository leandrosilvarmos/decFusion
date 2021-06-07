@extends('layouts.app')
@section('content')
<h2>Carrinho de compra</h2>
<section class="container py-4">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Ações</th>
                <!-- @if(count($carrinhos) > 0 )
                <th class="text-center" @if( Request::path()=='trashed-carrinho' ) colspan="2" @else colspan="3" @endif>Ações</th>
                @endif -->
            </tr>
        </thead>
        <tbody>
            @foreach($carrinhos as $carrinho)
            <tr>
                <td>{{$carrinho->produto->nome}}</td>
                <td>{{$carrinho->produto->preco}}</td>
                <td><a class="btn btn-dark" href="#">Remover Produto</a>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="#" class="btn btn-primary btn-lg">Finalizar compra</a>
</section>
@endsection