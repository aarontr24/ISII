<?php

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'MainController@home');

Auth::routes();

Route::resource('products','ProductsController');

/*
	GET /products => index
	POST /products => store
	GET /products/create => Formulario para crear
	GET /products/:id => mostrar un producto con ID
	GET /products/:id/edit
	PUT/PACTH /products/:id
	DELETE /products/:id
*/

Route::get('/home', 'HomeController@index')->name('home');
