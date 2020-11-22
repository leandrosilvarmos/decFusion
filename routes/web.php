<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::get('/dashboard', function () {
//     return view('admin/dashboard/index')->name('dashboard');
// });



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/carinho/index' , 'CarrinhoController@index')->name('carrinho');
    Route::get('/carinho/{produtos}/store' , 'CarrinhoController@store')->name('carrinho-adicionar');
    Route::get('/carinho/{produtos}/remove' , 'CarrinhoController@destroy')->name('carrinho-remover');
    Route::get('/carinho', 'HomeController@show');
});


Route::middleware(['auth' , 'admin'])->group(function () {
    Route::resource('produtos', 'ProdutosController');
    Route::get('trashed.produtos', 'ProdutosController@trashed')->name('produtos.trashed');
    Route::put('restore.produtos/{produtos}', 'ProdutosController@restore')->name('produtos.restore');
    Route::resource('categoria', 'CategoriaController');
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


});





