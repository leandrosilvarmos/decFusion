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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('auth/login', 'Api\\AuthController@login');

Route::group(['middleware' => ['apiJwt']], function () {

    // Usuarios Auth
    Route::get('auth/users', 'Api\\UserController@index');
    Route::post('auth/logout', 'Api\\AuthController@logout');
    Route::post('auth/me', 'Api\\AuthController@me');

    //Categorias Auth
    Route::post('auth/categoria', 'Api\\ApiController@categoriaCreate');
    Route::get('auth/categoria', 'Api\\ApiController@categoriasIndex');

    // Carrinhos
    Route::post('/cart', 'Api\\APICarinhoController@store');
    Route::get('/cart', 'Api\\APICarinhoController@cart');
    Route::get('/cartIndex', 'Api\\APICarinhoController@index');
    Route::post('/cartRemoveUnidade', 'Api\\APICarinhoController@removeProdutoUnico');


});

// Rotas de produtos
Route::post('/produtos', 'Api\\produtosController@produtosCreate');
Route::get('/produtos', 'Api\\produtosController@produtosIndex');
Route::get('/categoria_produtos/{id_categoria}', 'Api\\produtosController@produtosCategoria');
Route::get('/produtos/{id}', 'Api\\produtosController@produtosShow');
Route::delete('/produtos/{id}', 'Api\\produtosController@produtosDestroy');
Route::put('/produtos/{id}', 'Api\\produtosController@produtosUpdate');


// Rotas de categoria
Route::post('/categoria', 'Api\\CategoriaController@categoriasCreate');
Route::get('/categoria', 'Api\\CategoriaController@categoriasIndex');
Route::get('/categoria/{id}', 'Api\\CategoriaController@categoriasShow');
Route::delete('/categoria/{id}', 'Api\\CategoriaController@categoriasDestroy');
Route::put('/categoria/{id}', 'Api\\CategoriaController@categoriasUpdate');



