<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pedidos extends Model
{
    //
    protected $fillable = ['user_id'];

    // usuário dono do pedido
    public function user(){

        return $this->belongsTo(User::class , 'user_id');

    }


    public function pedidosItens() {

        return $this->hasMany(Produtos::class);
    }
}
