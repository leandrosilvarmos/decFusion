<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    

    protected $fillable = ['cliente_id', 'profissional_id' , 'produto_id' , 'quantidade'];

  

    public function Cliente(){
        return $this->belongsTo(Cliente::class , 'cliente_id');
        
    }


    public function Profissiona(){
        return $this->belongsTo(Profissional::class,  'profissional_id');
    }

    public function produto(){ 
        
        return $this->belongsTo(Produtos::class , 'produto_id');
        // return $this->belongsTo(Produtos::class);

    }



}


    // Codigos anteriores 
    

    // protected $fillable = ['user_id', 'produto_id', 'quantidade'];

    // protected $table = 'carrinhos';


    //  public function user(){ 
        
    //     return $this->belongsTo(User::class , 'user_id');

    //     // return $this->belongsTo(User::class);

    // }