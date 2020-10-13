<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Produtos;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //

    public function produtosIndex()
    {

        //Codigo da API GET
        return response()->json(Produtos::all());
    }


    public function produtosCreate($request)
    {
        $produtos = Produtos::create($request->all());
        return response()->json($produtos);
    }


    public function produtosShow($id)
    {
        return response()->json(Produtos::find($id));

    }


    public function categoriasIndex()
    {
        return response()->json(Categoria::all());
    }
}
