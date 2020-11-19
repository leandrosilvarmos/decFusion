<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    //

    protected $fillable = [
        'nome' , 'modelo' , 'cor' , 'quantidade' , 'sku' , 'preco' , 'descricao' ,'image' , 'categoria_id'
    ];

    public function categorias()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id', 'id');
    }


    public function carrinhos(){
        return $this->belongsTo(Carrinho::class);
    }
}
