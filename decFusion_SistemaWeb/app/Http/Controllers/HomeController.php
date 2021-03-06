<?php

namespace App\Http\Controllers;

use App\Produtos;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard.index');
    }

    
    public function escolherLogin(){
        return view('web.escolherlogin');
    }

    public function show(){
        return view('carrinho')->with('produtos', Produtos::all());
    }
}
