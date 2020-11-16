<?php

namespace App\Http\Controllers;

use App\Carrinho;
use App\Produtos;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    //

    public function index()
    {
    }

    public function store(Produtos $produto)
    {
        $user = auth()->user();
        $carinho = Carrinho::updateOrCreate(['user_id' => $user->id]);


        if ($carinho->produtos()->where('produto_id', $produto->id)->count()) {
            session()->flash('error', 'O produto (' . $produto->name . ') Já esta no carrinho');
        } else {
            $carinho->produtos()->saveMany([$produto]);
            session()->flash('sucess', 'O produto (' . $produto->name . ') foi adicionado ao carrinho');
        }

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
