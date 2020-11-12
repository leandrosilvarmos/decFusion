<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    //

    protected $fillable = ['usuario_id'];

    public function usuario(){
        return $this->hasOne(User::class);

    }

    public function produtos(){
        return $this->belongsToMany(Produtos::class);
    }
}
