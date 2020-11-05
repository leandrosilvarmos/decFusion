<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Http\Requests\CreateProdutosRequest;
use App\Http\Requests\EditProdutoRequest;
use App\Produtos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('VerifyCategoriasCount')->only(['create', 'store']);
    }

    public function index()
    {
        //
        $produtos = Produtos::get();
        $produtosCount = $produtos->count();
        return view('admin.produtos.index')->with('produtos', Produtos::all())->with('produtosCount', $produtosCount);
    }

 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.produtos.create')->with('categorias', Categoria::all());

        // $totalProdutos = DB::table('produtos')->sum('id');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProdutosRequest $request)
    {

        $image = $request->image->store('produtos');
        $produtos = Produtos::create($request->all());

        $produtos->image = $image;
        $produtos->save();

        session()->flash('success', 'Produto Criado com sucesso');

        return redirect(route('produtos.index'));
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Produtos $produto)
    {
        //
        return view('admin.produtos.edit')->with('produtos', $produto)->with('categorias', Categoria::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditProdutoRequest $request, Produtos $produto)
    {
        //php artisan 

        $produto->update([
            'nome' => $request->nome,
            'modelo' => $request->modelo,
            'cor' => $request->cor,
            'categoria_id' => $request->categoria_id,
            'quantidade' => $request->quantidade,
            'sku' => $request->sku,
            'preco' => $request->preco,
            'descricao' => $request->descricao
        ]);

        if ($request->image) {
            Storage::delete($produto->image);
            $image =  $request->image->store('produto');
            $produto->image = $image;
            $produto->save();
        }

        session()->flash('success', 'Produto Editado com sucesso');

        return redirect(route('produtos.index'));
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
