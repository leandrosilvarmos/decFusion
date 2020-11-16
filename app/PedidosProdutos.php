<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidosProdutos extends Model
{
    //
    protected $fillable = ['pedidos_id', 'produtos_id', 'valor_total', 'quantidade'];

    public function produtos() {

        return $this->belongsTo(Produtos::class);

    }

    public function pedidos() {

        return $this->hasOne(Produtos::class);

    }
}
