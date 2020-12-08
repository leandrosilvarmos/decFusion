<?php

namespace App\Http\Controllers;

use App\Carrinho;
use App\Produtos;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarrinhoController extends Controller
{
    //

    public function index()
    {

        // // DB::enableQueryLog();
        // $carrinho = session()->has('carrinho') ? session()->get('carrinho'):[];
        // $user = auth()->user();
        // $carrinho = Carrinho::with('produtos');
        // $carrinho =  Carrinho::selectRaw('carrinhos.*')->orderByDesc('id');
        // // dd(DB::getQueryLog());
         // $carrinho = session()->has('carrinhos') ? session()->get('carrinhos') : [];
        // dd($carrinho);

        // return Carrinho::getContent();

        // $user = auth()->user();
        // $carrinho = $user->carrinho;

        // if($carrinho->count() > 0){
        //     foreach($carrinho as $produtos)
        //     {
        //         $forProduto = Produtos::withTrashed()->find($produtos->produto_id);
        //         $produtos[] = $forProduto;
        //     }

        // }else
        // {
        //     $produtos =  null;
        // }

        // $user = auth()->user();
        // $cart = $user->carrinho;
        // $totalPrice = 0;

        // if ($cart->count() > 0)
        // {
        //     foreach ($cart as $produtos)
        //     {
        //         $forProd = Produtos::withTrashed()->find($produtos->produto_id);

        //         $produtos[] = $forProd;
        //     }
        // }
        // else
        // {
        //     $produtos = null;
        //     $totalPrice = null;
        // }
                // return view('mostrarcarrinho', compact('cart'));



        // Esse codigo esta certo, nesse inferno.............

        $user = auth()->user();
        $carrinho = $user->carrinho;
        // $carrinho = Carrinho::selectRaw('carrinhos.*')->orderByDesc('id')->paginate(5);
        $carrinho = Carrinho::where('user_id', $user->id)->orderByDesc('id')->paginate(5);

        foreach($carrinho as $c){
          $produtos =   Produtos::find($c->produto_id);
            $c->produto =  $produtos;
        }

        
        return view('mostrarcarrinho', ['carrinhos' => $carrinho]);
       
        // $user = auth()->user();
        // $cart = $user->cart;

        // //se o usuario não tiver carrinho, cria um carrinho vazio
        // if($cart == null)
        //     $cart = $cart = Carrinho::updateOrCreate(['user_id' => $user->id]);

        // return view('mostrarcarrinho')->with('products', $cart->produtos);
    }

    public function store($id)  
    {
        $user = auth()->user();
        $produto = Produtos::find($id);
        $carinho = Carrinho::updateOrCreate(['user_id' => $user->id , 'produto_id'=>$produto->id]);
        session()->flash('success', 'Produto adicionado ao carrinho');


        return redirect()->back();
        
    }


    

    public function destroy()
    {
    }



    // public function update(Request $request)x
    // {
    //     if ($request->id and $request->quantity) {
    //         $cart = session()->get('cart');
    //         $cart[$request->id]["quantity"] = $request->quantity;
    //         session()->put('cart', $cart);
    //         session()->flash('success', 'Cart updated successfully');
    //     }
    // }
    // public function remove(Request $request)
    // {
    //     if ($request->id) {
    //         $cart = session()->get('cart');
    //         if (isset($cart[$request->id])) {
    //             unset($cart[$request->id]);
    //             session()->put('cart', $cart);
    //         }
    //         session()->flash('success', 'Product removed successfully');
    //     }
    // }
}
