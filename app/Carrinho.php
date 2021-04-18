<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    //
    

    // protected $fillable = ['user_id', 'produto_id', 'quantidade'];

    protected $fillable = ['user_id' , 'produto_id' , 'quantidade'];

    // protected $table = 'carrinhos';

   

     public function user(){ 
        
        return $this->belongsTo(User::class , 'user_id');

        // return $this->belongsTo(User::class);

    }

    public function produto(){ 
        
        return $this->belongsTo(Produtos::class , 'produto_id');
        // return $this->belongsTo(Produtos::class);

    }



}
