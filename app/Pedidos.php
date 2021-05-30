<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pedidos extends Model
{
    //
    protected $fillable = ['cliente_id' , 'profissional_id' , 'valor_total'];

    // usuário dono do pedido
    public function cliente(){

        return $this->belongsTo(Cliente::class , 'cliente_id');

    }

    public function profissional(){
        return $this->belongsTo(Profissional::class , 'profissional_id');
    }


    public function pedidosItens() {

        return $this->hasMany(Produtos::class);
    }
}
