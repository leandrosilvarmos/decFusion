@extends('layouts.web')
@section('content')
    <div class="produto-container">

        <div class="carrinho-col1">

            @foreach ($carrinhos as $carrinho)
                <section class="carrinho-produto">

                    <div class="carrinho-info">
                        <span class="info-nome">{{ $carrinho->produto->nome }}</span>
                        <span class="info-preco">R${{ $carrinho->produto->preco }}</span>
                    </div>
                </section>


            @endforeach

        </div>

        <section class="carrinho-col2">
            <div class="col2-bg">
                <div class="col2-container">
                    <h3>Checkout</h3>
                    <a class="btn-carrinho" href="{{route('checkout')}}">Finalizar Compra</a>
                </div>
            </div>
        </section>
    </div>
@endsection
