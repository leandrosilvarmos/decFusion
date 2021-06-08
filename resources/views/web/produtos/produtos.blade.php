@extends('layouts.web')
@section('content')

   

        <div class="col2">
            <section class="container produtos">
                @foreach ($produtos as $produto)
                    <div class="prod-item">
                        <img src="{{ asset('storage/' . $produto->image) }}" alt="">
                        <h2>{{ $produto->nome }}</h2>
                        <span>R$ {{ $produto->preco }}</span>
                        <a class="add-to-cart" href="{{ route('carrinho-adicionar', $produto->id) }}">Comprar</a>
                    </div>
                    @endforeach
            </section>
        </div>

@endsection
