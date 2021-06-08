@extends('layouts.web')
@section('content')

    <div class="thanks-container">

        <p class="thanks-p">Muito obrigado por ter comprado conosco!</p>
        <p>Seu pedido foi processado, código do pedido: 15778006699</p>


    </div>


    <section class="profs-container">
        <div class="form-container">
            <h2 class="mb-5">Profissionais</h2>
            <span> Agora você pode optar por contatar algum de nossos profissionais cadastrados na plataforma,
                é pode obter melhores informações das melhores maneiras de acomodar seu produto ao seu ambiente. </span>
            <form method="POST" enctype="multipart/form-data" action="#">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <select name="profissional_id" id="" class="form-control">
                            @foreach ($profissionais as $profissional)
                                <option value="{{ $profissional->id }}">{{ $profissional->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <textarea name="" id="" cols="40" rows="4">Informe sua solicitação</textarea>
                      </div>
                </div>


                <div class="float-right">
                    <button type="submit" class="btn btn-success">Confirmar</button>
                </div>
            </form>
        </div>

    </section>

@endsection
