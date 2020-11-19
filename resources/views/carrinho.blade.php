@extends('layouts.app')
@section('content')
@foreach($produtos as $produto)

<li class="list-list-group-item">
    <img src="{{asset('storage/'.$produto->image)}}" alt="">
    <span>
        <p>{{$produto->name}}</p>
    </span>
    <a href="{{route('carrinho-adicionar', $produto->id)}}">Comprar</a>

</li>
@endforeach
@endsection