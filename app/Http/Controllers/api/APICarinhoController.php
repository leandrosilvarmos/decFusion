<?php

namespace App\Http\Controllers\Api;

use App\Carrinho;
use App\Http\Controllers\Controller;
use App\Produtos;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class APICarinhoController extends Controller
{
  


    public function cart()
    {
        $user = auth()->user();
        // dd($user);

        $carrinho = $user->carrinho;


        if ($carrinho->count() > 0) {

            $produtos = [];

            foreach ($carrinho as $c) {

                $produto = Produtos::find($c->produto_id);
                // dd($c);

                $quantidade = ($c->quantidade);
                $produto->quantidade = $quantidade;
                array_push($produtos, $produto);
            }

            //dd($products);

            return response()->json(['produtos' => $produtos]);

        } else {

            return response()->json(["error" => "Não há produtos no carrinho"], 400);
        }
    }


    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
            return response()->json(Carrinho::all());
        
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

                return response()->json(["success" => "Mais uma unidade adicionada ao carrinho"]);

            } else { 

                Carrinho::create([
                    'user_id' => $userId,
                    'produto_id' => $request->produto_id,
                    'quantidade' => 1

                ]);

                return response()->json(["success" => "Produto adicionado no carrinho"]); 

            } 
        }else { 

            return response()->json([
                "error" => "Produto não cadastrado na base",
                "product_id" => "ID Invalido",
                "mesage" => "Não é possivel adicionar no carrinho"
            ], 401);        }
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
