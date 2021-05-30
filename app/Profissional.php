<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Profissional extends Model
{
    //

    use Notifiable;

    protected $fillable = [
        'nome' , 'email' , 'celular' ,'endereco' , 'senha' , 
    ];
}
