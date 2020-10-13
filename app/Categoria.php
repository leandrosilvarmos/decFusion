<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //

    protected $fillable = [
        'nome' , 'tipo'
    ];

    public function produtos()
    {
        return $this->hasMany(Produtos::class, 'categoria_id', 'id');
    }
}
