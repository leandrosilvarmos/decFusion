<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    //

    protected $fillable = [
        'nome' , 'cor' , 'quantidade' , 'preco' , 'descricao' 
    ];

    
}
