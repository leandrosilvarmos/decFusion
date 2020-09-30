@extends('layout.admin')

@section('content')


<div class="col-md-4">
    <div class="card-counter danger">
        <div class="card-title">
            <h3> Vendas Montante </h3>
        </div>
        <div class="row">
            <div class="col-auto">
                <span class="count-numbers">599</span>
                <span class="count-name">Instances</span>
                <i class="fas fa-calendar"></i>
            </div>
        </div>
    </div>
</div>

<div class="float-right">
    <a class="btn btn-danger" href="{{route('produtos.create')}}">Cadastrar</a>
</div>


@endsection