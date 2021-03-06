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
})->name('home');

// Rotas das paginas de Clientes

Route::get('/clientes/create', 'ClientesController@create')->name('cliente-create');
Route::get('/clientes/login', 'ClientesController@login')->name('cliente-login');
Route::get('/escolherlogin', 'HomeController@escolherLogin')->name('escolher-login');
Route::get('/carinho', 'CarrinhoController@showProdutos')->name('produtos');


Route::middleware(['auth'])->group(function () {
    Route::get('/carinho/index', 'CarrinhoController@index')->name('carrinho');
    Route::get('/carinho/{produtos}/store', 'CarrinhoController@store')->name('carrinho-adicionar');
    Route::get('/carinho/{produtos}/remove', 'CarrinhoController@destroy')->name('carrinho-remover');
    Route::get('/checkout', 'CarrinhoController@checkout')->name('checkout');
});


Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('produtos', 'ProdutosController');
    Route::get('trashed.produtos', 'ProdutosController@trashed')->name('produtos.trashed');
    Route::put('restore.produtos/{produtos}', 'ProdutosController@restore')->name('produtos.restore');
    Route::resource('categoria', 'CategoriaController');
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('users', 'AdminController@index')->name('users.index');
    Route::get('user/perfil', 'AdminController@edit')->name('perfil.edit');
    Route::put('user/{user}/perfil', 'AdminController@update')->name('perfil.update');
    Route::put('user/{user}/autentica-admin', 'AdminController@changeAdmin')->name('autentica.admin');
    Route::get('user/novo-usuario-admin', 'AdminController@NewUserAdmin')->name('novo.usuario.admin');
});
