<?php

namespace App\Http\Controllers\Api;

use App\Carrinho;
use App\Http\Controllers\Controller;
use App\Produtos;
use Illuminate\Http\Request;

class APICarinhoController extends Controller
{
    //
    public function carinho(){

        $user = auth()->user();
        $carinho = $user->carinho;

        

        if ($carinho > 0) {
            $produtos = [];

            dd($produtos);

            foreach($carinho as $c) {

                $prod = Produtos::all()->find($c->produto_id);
                array_push($c, $prod);
            }

            return response()->json($produtos);

        }else {

            return response()->json(["error" => "Carrinho etá Vazio"]);
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        if(!$request->produto_id) {
            return response()->json(["Erro" => "Requisição invalida"]);
        }

        $prod = Produtos::all()->where('id', $request->produto_id)->count();

        if($prod > 0 ) { 
            $userId = auth()->user()->id;

            $checkCarinho = Carrinho::all()->where('user_id', $userId)->where('produto_id', $request->produto_id)->first();

            if ($checkCarinho) {

                $quantidade = $checkCarinho->quantidade;

                $checkCarinho->update(['quantidade' => $quantidade]);

                return response()->json(["success" => "Produto adiconado ao carrinho"]);

            } else { 

                Carrinho::create([
                    'user_id' => $userId,
                    'produto_id' => $request->produto_id,
                    'quantidade' => 1

                ]);

                return response()->json(["success" => "Produto adicionado no carrinho"]); 

            } 
        }else { 

            return response()->json(["Error" => "Produto inválido"], 400);
        }
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
