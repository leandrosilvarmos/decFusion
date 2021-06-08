<?php

namespace App\Http\Controllers;

use App\Carrinho;
use App\Produtos;
use App\Profissional;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarrinhoController extends Controller
{
    //

    public function index()
    {



        $user = auth()->user();
        $carrinho = $user->carrinho;
        // $carrinho = Carrinho::selectRaw('carrinhos.*')->orderByDesc('id')->paginate(5);
        $carrinho = Carrinho::where('user_id', $user->id)->orderByDesc('id')->paginate(5);

        foreach($carrinho as $c){
          $produtos =   Produtos::find($c->produto_id);
            $c->produto =  $produtos;
        }

        
        return view('web.carrinho.mostrarcarrinho', ['carrinhos' => $carrinho]);
       

    }

    public function store($id)  
    {
        $user = auth()->user();
        $produto = Produtos::find($id);
        $carinho = Carrinho::updateOrCreate(['user_id' => $user->id , 'produto_id'=>$produto->id , 'quantidade' => 1]);
        session()->flash('success', 'Produto adicionado ao carrinho');


        return redirect()->back();
        
    }

    public function showProdutos(){
        return view('web.produtos.produtos')->with('produtos', Produtos::all());
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



    public function checkout (){
        
        return view('web.carrinho.checkout')->with('profissionais' , Profissional::all());
    }
}
