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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/produtos', function () {
//     return view('admin/produtos/index');
// });

// Route::get('/dashboard', function () {
//     return view('admin/dashboard/index')->name('dashboard');
// });



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');



Route::middleware(['auth' , 'admin'])->group(function () {
    Route::resource('produtos', 'ProdutosController');
    Route::resource('categoria', 'CategoriaController');
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

});





