@extends('layouts.admin')

@section('content')

    <section>
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="mb-5">Cadastrar novo Produto</h2>
        </div>

        <form method="POST" enctype="multipart/form-data" action="{{ route('produtos.store') }}">
            @csrf
            <div class="row">
                <div class="form-group col-md-5">
                    <input type="text" class="form-control @error('nome') is-invalid @enderror" name="nome"
                        value="{{ old('nome') }}" placeholder="Nome Produto">
                    <small><span class="text-danger">{{ $errors->first('nome') }}</span></small>
                </div>

                <div class="form-group col-md-5">
                    <input type="text" class="form-control @error('modelo') is-invalid @enderror" name="modelo"
                        value="{{ old('modelo') }}" placeholder="Modelo">
                    <small><span class="text-danger">{{ $errors->first('modelo') }}</span></small>
                </div>

            </div>


            <div class="row mt-4">
                <div class="form-group col-md-4">
                    <input type="text" class="form-control @error('cor') is-invalid @enderror" name="cor"
                        value="{{ old('cor') }}" placeholder="Cor">
                    <small><span class="text-danger">{{ $errors->first('cor') }}</span></small>
                </div>

                <div class="form-group col-md-6">
                    <select name="categoria_id" id="" class="form-control">
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nome }}-{{ $categoria->tipo }}</option>
                        @endforeach
                    </select>
                </div>

            </div>

            <div class="row mt-4 mb-4">

                <div class="form-group col-md-2">
                    <input type="text" class="form-control @error('quantidade') is-invalid @enderror" name="quantidade"
                        value="{{ old('quantidade') }}" placeholder="Quantidade">
                    <small><span class="text-danger">{{ $errors->first('quantidade') }}</span></small>
                </div>

                <div class="form-group col-md-4">
                    <input type="text" class="form-control @error('sku') is-invalid @enderror" name="sku"
                        placeholder="Sku Produto">
                    <small><span class="text-danger">{{ $errors->first('sku') }}</span></small>
                </div>

                <div class="form-group col-md-4">
                    <input type="text" class="form-control @error('preco') is-invalid @enderror" name="preco"
                        placeholder="Preço">
                    <small><span class="text-danger">{{ $errors->first('preco') }}</span></small>
                </div>
            </div>


            <div class="row mt-4 mb-4">

                <div class="form-group col-md-4">
                    <input type="text" class="form-control @error('tag_name') is-invalid @enderror" name="tag_name"
                        placeholder="Tag Name para acessebilidade">
                    <small><span class="text-danger">{{ $errors->first('tag_name') }}</span></small>
                </div>

                <div class="form-group col-md-3">
                    <input type="text" class="form-control @error('dimensao') is-invalid @enderror" name="dimensao"
                        value="{{ old('dimensao') }}" placeholder="Dimensao do Produto - Tamanho e Altura">
                    <small><span class="text-danger">{{ $errors->first('dimensao') }}</span></small>
                </div>


                <div class="form-group col-md-3">
                    <input type="text" class="form-control @error('peso') is-invalid @enderror" name="peso"
                        placeholder="Peso do Produto">
                    <small><span class="text-danger">{{ $errors->first('peso') }}</span></small>
                </div>
            </div>


            <div class="form-group">
                <textarea class="form-control @error('descricao') is-invalid @enderror" id=" exampleFormControlTextarea1"
                    rows="2" name="descricao"></textarea>
                <small><span class="text-danger">{{ $errors->first('descricao') }}</span></small>
            </div>


            <div class="row mt-4">
                <div class="form-group col-md-6">
                    <input type="file" class="form-control-file" name="image">
                </div>


            </div>


            <div class="float-right">
                <button type="submit" class="btn btn-success">Cadastrar</button>
                <a class="btn btn-dark" href="{{ route('produtos.index') }}">Cancelar</a>
            </div>
        </form>
    </section>




@endsection
