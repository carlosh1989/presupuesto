<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/





Route::group(['middlewareGroups' => 'web'], function () {

Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');

    Route::group(['middleware' => ['auth', 'role:admin']], function () {         
		Route::get('/admin', 'Admin\PrincipalController@index');
		Route::get('/posts','HomeController@posts');
		Route::get('/posts/form','HomeController@postsForm');
		Route::post('/posts','HomeController@postsGuardar');
		Route::get('/posts/{id}/show','HomeController@postShow');
		Route::get('/posts/{id}/form','HomeController@postUpdate');
		Route::post('/posts/{id}/update','HomeController@postUpdateProceso');
		Route::get('/posts/{id}/destroy','HomeController@postDestroy');

		Route::get('verificar/proceso','Admin\VerificarController@verificar');
		Route::resource('verificar', 'Admin\VerificarController');

		Route::resource('decretos','Admin\DecretotpController');

		Route::resource('decrees','Admin\DecreesController');
		Route::resource('details','Admin\DetailsController');

    });


});