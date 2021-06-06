<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\HasFactory;

class Pedidos extends Model
{
    use HasFactory; 

    //'cliente_id' , 'profissional_id'


    protected $fillable = ['user_id' ,  'valor_total'];

    // usuário dono do pedido

    public function User(){
        return $this->belongsTo(User::class , 'user_id');
    }

    // public function cliente(){

    //     return $this->belongsTo(Cliente::class , 'cliente_id');

    // }

    // public function profissional(){
    //     return $this->belongsTo(Profissional::class , 'profissional_id');
    // }


    public function produtosPedido() {

        return $this->hasMany(Produtos::class);
    }
}
