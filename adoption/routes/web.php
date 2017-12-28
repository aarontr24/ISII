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

Route::get('/', 'MainController@home');
Route::get('adopta', 'MainController@adopta');
Route::get('conocenos', 'MainController@weare');
Route::get('donation', 'MainController@donation');
Route::get('question', 'MainController@question');
/*
Route::get('fichas/{id}', 'FichasController@create')->name('fichas');
*/	

Route::resource('albergues','AlberguesController', ['only' => ['create','store']]);
Route::get('fichas/{id}', ['as' => 'fichas', 'uses' => 'FichasController@create']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::resource('pets','PetsController');

Route::resource('fichas','FichasController', ['only' => ['create','store']]);


Route::get('/home', 'HomeController@index')->name('home');

Route::get('pets/images/{filename}',function($filename){
	$path = storage_path("app/images/$filename");
	if(!\File::exists($path)) abort(404);
	$file = \File::get($path);
	$type = \File::mimeType($path);
	$response = Response::make($file,200);
	$response->header("Content-Type",$type);
	return $response;
});
