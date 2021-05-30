@extends('layouts.app')
@section('content')
@foreach($produtos as $produto)

<header>
<link rel="stylesheet" href="{{ asset('/css/admin/carrinho.css') }}">
</header>
<div class="container wrapper-cart">
    <div class="items-cart">
        <!-- single item -->
        <div class="item-cart">
            <img src="{{asset('storage/'.$produto->image)}}" alt="">

            <h2>
                <p>{{$produto->name}}</p>
            </h2>

            <p>Price: <em>{{$produto->preco}}</em>
            </p>
            <a class="add-to-cart" href="{{route('carrinho-adicionar', $produto->id)}}">Comprar</a>

        </div>
    </div>

    @endforeach
    @endsection