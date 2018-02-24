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

Route::get('/', 'BlogController@index');
Route::get('/post/{slug}', 'BlogController@show');
Route::get('/contato', function(){
	return view('contato');
});
Route::get('/sobre-nos', function(){
	return view('about');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/teste', 'BlogController@teste');