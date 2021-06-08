@extends('layouts.admin')

@section('content')

    <section>
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="mb-5">Cadastrar nova Categoria </h2>
        </div>
        <form method="POST" action="{{ route('categoria.store') }}">
            @csrf
            <div class="row">
                <div class="form-group col-md-5">
                    <input type="text" class="form-control @error('nome') is-invalid @enderror" name="nome"
                        value="{{ old('nome') }}" placeholder="Categoria">
                    <small><span class="text-danger">{{ $errors->first('nome') }}</span></small>
                </div>



                <div class="form-group col-md-5">
                    <select name="tipo" id="" class="form-control">
                        <option value=""> Tipo da categoria</option>
                        <option value="Decoracao"> Decoração</option>
                        <option value="Escritorio"> Utensilios</option>
                        <option value="Moveis"> Moveis</option>
                        <option value="Eletrodomesticos"> Eletrodomestico</option>
                        <option value="Jardinagem"> Jardinagem</option>
                        <option value="Escritorio"> Escritorio</option>
                    </select>
                    <small><span class="text-danger">{{ $errors->first('tipo') }}</span></small>

                </div>


            </div>



            <div class="float-right">
                <button type="submit" class="btn btn-success">Cadastrar</button>
                <a class="btn btn-dark" href="{{route('categoria.index')}}">Cancelar</a>
            </div>
        </form>

    </section>



@endsection
