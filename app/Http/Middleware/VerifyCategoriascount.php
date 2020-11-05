<?php

namespace App\Http\Middleware;

use App\Categoria;
use Closure;

class VerifyCategoriascount
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
            if(Categoria::all()->count() ==0 ){
                session()->flash('erro' , 'Para criar um produto e necessario, que tenha uma categoria criada');
                return redirect(route('categoria.create'));
            }

        return $next($request);
    }
}
