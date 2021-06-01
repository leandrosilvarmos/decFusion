<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Cliente extends Model
{
    //

    use Notifiable;

    protected $guarded = [];

    protected $hidden  =[
        'senha'
    ];


    protected $fillable = [
        'nome' , 'email' , 'celular' ,'endereco' , 'senha' , 
    ];

    public function getAuthPassword(){
        return $this->password;
    }
}
