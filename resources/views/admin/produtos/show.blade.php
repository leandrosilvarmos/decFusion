@extends('layouts.admin')

@section('content')




<div class="container-fluid ">

    <div class="mb-2 py-2">
        <a class="btn btn-primary" href="{{route('produtos.index')}}">Voltar</a>
    </div>
</div>



<div class="container">
    <div class="d-flex justify-content-between align-items-center py-3 pr-5">
        <div class="">
            <h2 class="mb-4">{{$produtos->name}}</h2>
        </div>
    </div>

    <h3 class="realce">Características</h3>
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Quantidade</label>
                    <input class="form-control bg-light" type="text" placeholder="{{$produtos->quantidade}}" readonly>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-4">
                    <label for="">Cor</label>
                    <input class="form-control bg-light" type="text" placeholder="{{$produtos->cor}}" readonly>
                </div>
                <div class="form-group col-md-4">
                    <label for="">Preço</label>
                    <input class="form-control bg-light" type="text" placeholder="{{$produtos->preco}}" readonly>
                </div>

            </div>
            <div class="form-group">
                <label for="">Descrição</label>
                <textarea class="form-control bg-light" type="text" rows="3" placeholder="{{$produtos->descricao}}" readonly></textarea>
            </div>
        </div>
        <div class="col-md-4">
            <img class="imagem-produto" src="{{asset('storage/'.$produtos->image)}}" alt="Imagem do produto">
        </div>
    </div>

</div>
@endsection