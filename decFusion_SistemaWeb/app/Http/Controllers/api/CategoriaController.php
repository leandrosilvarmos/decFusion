<?php

namespace App\Http\Controllers\Api;

use App\Categoria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    //
    public function categoriasIndex()
    {
        return response()->json(Categoria::all());
        
    }

    public function categoriasCreate($request)
    {
        $categoria = Categoria::create($request->all());
        return response()->json($categoria);
    }



    public function categoriasShow($id)
    {
        return response()->json(Categoria::find($id));

    }



    public function categoriasUpdate(Request $request , $id){
        $categoria =  Categoria::find($id);
        $categoria->nome = $request->input('nome');
        $categoria->tipo = $request->input('tipo');


        return response()->json($categoria);
    }


    public function categoriasDestroy($id)
    {
        $categoria = Categoria::find($id);
        if($categoria){
            $categoria->delete();
            return response()->json($categoria);
        }
        return response()->json('categoria não encontrado');

    }
}
