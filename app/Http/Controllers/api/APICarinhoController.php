<?php

namespace App\Http\Controllers\Api;

use App\Carrinho;
use App\Http\Controllers\Controller;
use App\Pedidos;
use App\Produtos;
use Illuminate\Http\Request;
use PedidosProdutos;

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
    public function index()
    {
        return response()->json(Carrinho::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (!$request->produto_id) {
            return response()->json(["Erro" => "Requisição invalida"]);
        }

        $prod = Produtos::all()->where('id', $request->produto_id)->count();

        if ($prod > 0) {
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
                    'quantidade' => 1,


                ]);

                return response()->json(["success" => "Produto adicionado no carrinho"]);
            }
        } else {

            return response()->json([
                "error" => "Produto não cadastrado na base",
                "product_id" => "ID Invalido",
                "mesage" => "Não é possivel adicionar no carrinho"
            ], 401);
        }
        //
    }



    public function removeProdutoUnico(Request $request)
    {

        if (!$request->produto_id) {

            return response()->json(["Error" => "Requisição Incompleta "], 400);
        }

        $user = auth()->user()->id;

        $checkCart = Carrinho::all()->where('user_id', $user)->where('produto_id', $request->produto_id)->first();

        if ($checkCart == null) {

            return response()->json(["Error" => "Carrinho não encontrado"], 404);
        }

        if ($checkCart->quantidade > 1) {

            $quantidade = $checkCart->quantidade;

            $checkCart->update(['quantidade' => $quantidade - 1]);
        } else {

            $checkCart->delete();
        }
        $product = Produtos::findOrFail($checkCart->produto_id);
        return response()->json(["success" => "Uma unidade do produto removida com sucesso! "]);
    }



    public function removeProduto(Request $request)
    {

        if (!$request->produto_id) {

            return response()->json(["Error" => "Dados incompletos"], 400);
        }

        $user = auth()->user()->id;

        $checkCart = Carrinho::all()->where('user_id', $user)->where('produto_id', $request->produto_id)->first();

        if ($checkCart == null) {

            return response()->json(["Error" => "Carrinho não encontrado"], 404);
        }

        if ($checkCart->amount > 0) {
            $checkCart->delete();
        }
        $produto = Produtos::findOrFail($checkCart->produto_id);
        return response()->json(["success" => "{$produto->nome} removido do carrinho com sucesso"]);
    }


    public function checkout(Request $request)
    {

        $user = auth()->user()->id;

        $pedidosItems = Carrinho::all()->where('user_id', $user);

        // verificar estoque do produto
        foreach ($pedidosItems as $prod) {

            $produtos = Produtos::find($prod->produto_id);
            $quantidade = $produtos->quantidade;

            if ($prod->quantidade > $quantidade) {
                return response()->json([
                    "message" => "Pedido não realizado, o $produtos->name não tem em estoque",
                ], 303);
            }
        }

        //Aqui fica a parte de pedidos
        $pedidos = Pedidos::create(['user_id' => $user, 'valor_total' => $request->valor_total]);

        // Inserindo os pedidos no banco de dados
        $this->insertOrder($user, $pedidos->id);

        //removendo produtos do carrinho
        $this->delete($user);

        return response()->json(["message" => "Muito obrigado por ter comprado conosco! Seu pedido foi processado, código do pedido!"]);
    }



    private function insertOrder(int $user, int $pedido)
    {
        // Pegar carrinho do usuário
        $orderItems = Carrinho::all()->where('user_id', $user);

        foreach ($orderItems as $prod) {
            $produtos = Produtos::find($prod->produto_id);

            // Criando registo na tabela de order
            PedidosProdutos::create([
                'pedido_id' => $pedido,
                'produto_id' => $produtos->id,
                'valor_total' => $produtos->valor_total,
                'quantidade' => $prod->quantidade
            ]);

            // remove o produto do estoque
            $quantidade = $produtos->quantidade;
            $quantidade = $prod->valor_total;


            //atualizando produto
            $produtos->update(['quantidade' => $quantidade]);
        }
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
