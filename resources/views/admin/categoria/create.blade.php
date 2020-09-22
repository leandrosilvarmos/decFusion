@extends('layout.admin')

@section('content')
<form method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="form-group col-md-6">
            <input type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{old('nome')}}" placeholder="Nome Produto">
            <small><span class="text-danger">{{ $errors->first('nome') }}</span></small>
        </div>

        <div class="form-group col-md-3">
            <input type="text" class="form-control @error('quantidade') is-invalid @enderror" name="quantidade" value="{{old('quantidade')}}" placeholder="Quantidade">
            <small><span class="text-danger">{{ $errors->first('quantidade') }}</span></small>
        </div>

        <div class="form-group col-md-2">
            <input type="text" class="form-control @error('cor') is-invalid @enderror" name="cor" value="{{old('cor')}}" placeholder="Cor">
            <small><span class="text-danger">{{ $errors->first('cor') }}</span></small>
        </div>


    </div>

    <div class="row mt-4">


        <div class="form-group col-md-5">
            <input type="text" class="form-control @error('modelo') is-invalid @enderror" name="modelo">
            <small><span class="text-danger">{{ $errors->first('modelo') }}</span></small>
        </div>


        <div class="form-group col-md-6">
            <select name="category_id" id="" class="form-control">
                <option value=""> Selecione uma Categoria</option>
            </select>
        </div>

    </div>

    <div class="row mt-4 mb-4">

        <div class="form-group col-md-3">
            <input type="text" class="form-control @error('sku') is-invalid @enderror" name="price" placeholder="Sku Produto">
            <small><span class="text-danger">{{ $errors->first('sku') }}</span></small>
        </div>

        <div class="form-group col-md-3">
            <input type="text" class="form-control @error('preco') is-invalid @enderror" name="preco" placeholder="Preço">
            <small><span class="text-danger">{{ $errors->first('preco') }}</span></small>
        </div>
    </div>


    <div class="form-group">
        <textarea class="form-control @error('descricao') is-invalid @enderror" id=" exampleFormControlTextarea1" rows="2" name="descricao"></textarea>
        <small><span class="text-danger">{{ $errors->first('descricao') }}</span></small>
    </div>


    <div class="float-right">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <a class="btn btn-danger" href="#">Cancelar</a>
    </div>
</form>


@endsection