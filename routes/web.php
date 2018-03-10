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

/* Rota da página principal - Landing Page */
Route::get('/', 'HomePageController@index');


Route::get('/blog', 'BlogController@index');
Route::get('/blog/post/{slug}', 'BlogController@show');
Route::get('/blog/contato', function(){
	return view('contato');
});
Route::post('/blog/contato', 'BlogController@comentStore')->name('contato');
Route::get('/blog/sobre-nos', 'BlogController@about');

/* Rota para painel administrativo do blog */
Route::group(['prefix' => '/admin'], function () {
    Voyager::routes();
});

Route::get('/teste', 'BlogController@teste');
