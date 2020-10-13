<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




Route::post('/produtos' , 'ApiController@produtosCreate');
Route::get('/produtos' , 'ApiController@produtosIndex');
Route::get('/produtos/{id}' , 'ApiController@produtosShow');


Route::post('/categoria' , 'ApiController@categoriaCreate');
Route::get('/categoria' , 'ApiController@categoriasIndex');
