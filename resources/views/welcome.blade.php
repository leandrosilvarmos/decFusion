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
        <!-- <img src="{{asset('assets/designecologist-hWhkVavh-EQ-unsplash.png')}}" alt=""> -->
        2

    </div>
    <div class="card-trhe">
3
    </div>
</section>

@endsection


<!-- <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style> -->