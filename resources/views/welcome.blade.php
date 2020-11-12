@extends('layouts.web')
@section('content')

<section class="objetivo">
    <div class="card">
        <div class="title">
            <h2>Inovação</h2>
            <img src="{{asset('assets/iconfinder_ideation_3380384.png')}}" alt="">
        </div>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Fugit, illo perspiciatis? Distinctio voluptatum quisquam ea laborum amet.
            Beatae laudantium et magni quia. Quis ipsum doloribus iusto a. Iure, at optio.
        </p>
    </div>

    <div class="card">
        <div class="title">
            <h2>Objetivo</h2>
            <img src="{{asset('assets/mission.png')}}" alt="">
        </div>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Fugit, illo perspiciatis? Distinctio voluptatum quisquam ea laborum amet.
            Beatae laudantium et magni quia. Quis ipsum doloribus iusto a. Iure, at optio.
        </p>
    </div>

    <div class="card">
        <div class="title">
            <h2>Interação</h2>
            <img src="{{asset('assets/peer-to-peer.png')}}" alt="">
        </div>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Fugit, illo perspiciatis? Distinctio voluptatum quisquam ea laborum amet.
            Beatae laudantium et magni quia. Quis ipsum doloribus iusto a. Iure, at optio.
        </p>
    </div>
</section>


<section class="conceito">
    <div class="card">
        <div class="circle">
            <h2> Cliente</h2>
        </div>
        <div class="content">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Fugit, illo perspiciatis? Distinctio voluptatum quisquam ea laborum amet.
                Beatae laudantium et magni quia. Quis ipsum doloribus iusto a. Iure, at optio.
            </p>
            <a href="#"> Saiba Mais </a>

        </div>
    </div>

    <div class="card">
        <div class="circle">
            <h2> Profissionais </h2>
        </div>
        <div class="content">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Fugit, illo perspiciatis? Distinctio voluptatum quisquam ea laborum amet.
                Beatae laudantium et magni quia. Quis ipsum doloribus iusto a. Iure, at optio.
            </p>
            <a href="#"> Saiba Mais </a>
        </div>
    </div>
</section>


<section class="produtos">
    <h2> Conheça nossos produtos</h2>
    <div class="card-one">
        <!-- <img src="{{asset('assets/imagemProduto-1.png')}}" alt=""> -->
        1
    </div>
    <div class="card-two">
        <img src="{{asset('assets/designecologist-hWhkVavh-EQ-unsplash.png')}}" alt="">
        2

    </div>
    <div class="card-trhe">
        3
    </div>
</section>

<section>

@foreach($produtos as $produto)
<img src="{{asset('storage/produtos'.$produto->image)}}" alt="">
<p>{{$produto->name}}</p>

<a href="{{route('carrinho', $produto->id)}}">Comprar</a>
@endforeach
</section>
@endsection