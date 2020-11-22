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

        DB::enableQueryLog();
        $user = auth()->user();
        $carrinho = Carrinho::with('produtos')->where(['user_id' => $user->id ])->get();
        dd(DB::getQueryLog());
        return view('mostrarcarrinho')->with('carrinhos', $carrinho);

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
