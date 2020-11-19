<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Http\Requests\CreateCategoriaRequest;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
    }


    public function index()
    {
        //
        return view('admin.categoria.index')->with('categorias' , Categoria::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCategoriaRequest $request)
    {

        Categoria::create([
            'nome' => $request->nome,
            'tipo' => $request->tipo
        ]);

        session()->flash('success', 'Categoria Criada com sucesso');
        return redirect(route('categoria.index'));
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
    public function edit(Categoria $categoria)
    {
        //
        return view('admin.categoria.edit')->with('categorias' , $categoria);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        //
        $categoria->update([
            'nome'=>$request->nome , 
            'tipo'=>$request->tipo
        ]);

        $categoria->save();

        session()->flash('success', 'Categoria Editado com sucesso');

        return redirect(route('categoria.index'));
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
