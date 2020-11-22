<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Http\Requests\CreateCategoriaRequest;
use App\Http\Requests\EditCategoriaRequest;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
  


    public function index()
    {
        //
        return view('admin.categoria.index')->with('categorias' , Categoria::all());
    }

 
    public function create()
    {
        //

        return view('admin.categoria.create');
    }

 
    public function store(CreateCategoriaRequest $request)
    {

        Categoria::create([
            'nome' => $request->nome,
            'tipo' => $request->tipo
        ]);

        session()->flash('success', 'Categoria Criada com sucesso');
        return redirect(route('categoria.index'));
    }

 
    public function show($id)
    {
        //
    }


    public function edit(Categoria $categoria)
    {
        
        return view('admin.categoria.edit')->with('categorias' , $categoria);


    }

    public function update(EditCategoriaRequest $request, Categoria $categoria)
    {
        $categoria->update([
            'nome' => $request->nome,
            'tipo' => $request->tipo
        ]);

        session()->flash('success', 'Categoria alterada  com sucesso');

        return redirect(route('categoria.index'));
    }


    public function destroy($id)
    {
        //
    }
}
