@extends('layouts.admin')

@section('content')
<form method="POST" enctype="multipart/form-data" action="{{route('produtos.update' , $produtos->id)}}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="form-group col-md-5">
            <input type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{$produtos->nome}}">
            <small><span class="text-danger">{{ $errors->first('nome') }}</span></small>
        </div>

        <div class="form-group col-md-5">
            <input type="text" class="form-control @error('modelo') is-invalid @enderror" name="modelo" value="{{$produtos->modelo}}">
            <small><span class="text-danger">{{ $errors->first('modelo') }}</span></small>
        </div>

    </div>


    <div class="row mt-4">
        <div class="form-group col-md-4">
            <input type="text" class="form-control @error('cor') is-invalid @enderror" name="cor" value="{{$produtos->cor}}">
            <small><span class="text-danger">{{ $errors->first('cor') }}</span></small>
        </div>

        <div class="form-group col-md-6">
            <select name="categoria_id" id="" class="form-control">
                @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->nome}}-{{$categoria->tipo}}</option>
                @endforeach
            </select>
        </div>

    </div>

    <div class="row mt-4 mb-4">

        <div class="form-group col-md-2">
            <input type="text" class="form-control @error('quantidade') is-invalid @enderror" name="quantidade" value="{{$produtos->quantidade}}">
            <small><span class="text-danger">{{ $errors->first('quantidade') }}</span></small>
        </div>

        <div class="form-group col-md-4">
            <input type="text" class="form-control @error('sku') is-invalid @enderror" name="sku" value="{{$produtos->sku}}">
            <small><span class="text-danger">{{ $errors->first('sku') }}</span></small>
        </div>

        <div class="form-group col-md-4">
            <input type="text" class="form-control @error('preco') is-invalid @enderror" name="preco" value="{{$produtos->preco}}">
            <small><span class="text-danger">{{ $errors->first('preco') }}</span></small>
        </div>
    </div>

    <div class="row mt-4 mb-4">

        <div class="form-group col-md-4">
            <input type="text" class="form-control @error('tag_name') is-invalid @enderror" name="tag_name" value="{{$produtos->tag_name}}">
            <small><span class="text-danger">{{ $errors->first('tag_name') }}</span></small>
        </div>

        <div class="form-group col-md-3">
            <input type="text" class="form-control @error('dimensao') is-invalid @enderror" name="dimensao" value="{{$produtos->dimensao}}">
            <small><span class="text-danger">{{ $errors->first('dimensao') }}</span></small>
        </div>


        <div class="form-group col-md-3">
            <input type="text" class="form-control @error('peso') is-invalid @enderror" name="peso" value="{{$produtos->peso}}">
            <small><span class="text-danger">{{ $errors->first('peso') }}</span></small>
        </div>
    </div>

    <div class="form-group">
        <textarea class="form-control @error('descricao') is-invalid @enderror" id=" exampleFormControlTextarea1" rows="2" name="descricao">{{$produtos->descricao}}</textarea>
        <small><span class="text-danger">{{ $errors->first('descricao') }}</span></small>
    </div>


    <div class="row mt-4">
        <div class="form-group col-md-6">
            <input type="file" class="form-control-file" name="image">
        </div>


    </div>


    <div class="float-right">
        <button type="submit" class="btn btn-success">Salvar</button>
        <a class="btn btn-dark" href="{{route('produtos.index')}}">Cancelar</a>
    </div>
</form>


@endsection