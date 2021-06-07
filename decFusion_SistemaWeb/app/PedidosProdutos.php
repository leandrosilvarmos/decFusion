<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\HasFactory;


class PedidosProdutos extends Model
{
    //
    use HasFactory;


    protected $fillable = ['pedido_id', 'produto_id', 'valor_total', 'quantidade'];

    public function produto()
    {
        return $this->belongsTo(Produtos::class);
    }


    public function pedido(){
        return $this->hasOne(Produtos::class);
    }
}
