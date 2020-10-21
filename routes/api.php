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

Route::group(['middleware' => ['apiJwt']] , function(){
    Route::get('auth/users' , 'Api\\UserController@index');
    Route::post('auth/logout', 'Api\\AuthController@logout');
    Route::post('auth/me', 'Api\\AuthController@me');

});



Route::post('auth/produtos' , 'Api\\ApiController@produtosCreate');
Route::get('auth/produtos' , 'Api\\ApiController@produtosIndex');
Route::get('auth/produtos/{id}' , 'Api\\ApiController@produtosShow');


Route::post('auth/categoria' , 'Api\\ApiController@categoriaCreate');
Route::get('auth/categoria' , 'Api\\ApiController@categoriasIndex');
