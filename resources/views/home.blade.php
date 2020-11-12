@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($produtos as $produto)
    <img src="{{asset('storage/'. $produto->image)}}" alt="">
    <p>{{$produto->name}}</p>

    <a href="{{rout('carrinho', $produto->id">Comprar</a>
@endforeach
</div>
@endsection