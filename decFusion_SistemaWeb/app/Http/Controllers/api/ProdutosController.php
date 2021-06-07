<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
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

    public function produtoUpdate(Request $request , $id){
        $produtos =  Produtos::find($id);
        $produtos->nome = $request->input('nome');
        $produtos->cor = $request->input('cor');
        $produtos->quantidade = $request->input('quantidade');
        $produtos->preco = $request->input('preco');
        $produtos->modelo = $request->input('modelo');
        $produtos->descricao = $request->input('descricao');
        $produtos->sku = $request->input('sku');
        $produtos->dimensao = $request->input('dimensao');
        $produtos->peso = $request->input('preco');
        $produtos->tag_name = $request->input('tag_name');



        return response()->json($produtos);
    }

    public function produtosDestroy($id)
    {
        $produtos = Produtos::find($id);
        if($produtos){
            $produtos->delete();
            return response()->json($produtos);
        }
        return response()->json('produdo não encontrado');

    }


    public function produtosCategoria($id_categoria){
        $produtos = Produtos::all()->where('categoria_id' , '=' , $id_categoria)->sortByDesc('id');
        return response()->json($produtos);
    }

}
