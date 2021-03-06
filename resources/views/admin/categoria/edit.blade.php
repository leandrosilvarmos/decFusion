@extends('layouts.admin')

@section('content')
<form action="{{route('categoria.update' , $categorias->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="form-group col-md-5">
            <input type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{$categorias->nome}}" placeholder="Categoria">
            <small><span class="text-danger">{{ $errors->first('nome') }}</span></small>
        </div>


        <div class="form-group col-md-5">
            <select name="tipo" id="" class="form-control">
                <option value=""> Tipo da categoria</option>
                <option value="decoracao"> Decoração</option>
                <option value="escritorio"> Escritorio</option>
                <option value="casa"> Casa</option>
            </select>
            <small><span class="text-danger">{{ $errors->first('tipo') }}</span></small>

        </div>
</div>


    <div class="float-right">
        <button type="submit" class="btn btn-success">Salvar</button>
        <a class="btn btn-dark" href="{{route('categoria.index')}}">Cancelar</a>
    </div>
</form>


@endsection