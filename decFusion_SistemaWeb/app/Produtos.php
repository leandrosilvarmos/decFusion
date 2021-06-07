<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produtos extends Model
{
    //

    use SoftDeletes;
    protected $fillable = [
        'nome' , 'modelo' , 'cor' , 'quantidade' , 'sku' , 'preco' , 'descricao' ,'image' , 'categoria_id' , 'dimensao', 'peso' , 'tag_name'
    ];

    public function categorias()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id', 'id');
    }


    public function carrinhos(){
        return $this->belongsTo(Carrinho::class);
    }
}
