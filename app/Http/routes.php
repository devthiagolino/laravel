<?php

Route::get('/', function () {
    return view('home');
});

Route::group(['prefix' => 'livros'], function(){
	Route::get('/', ['uses' => 'LivrosController@index', 'as' => 'livros.index']);
	Route::get('create', ['uses' => 'LivrosController@create', 'as' => 'livros.create']);
	Route::get('{id}/edit', ['uses' => 'LivrosController@edit', 'as' => 'livros.edit']);
	Route::get('{id}/show', ['uses' => 'LivrosController@show', 'as' => 'livros.show']);
	Route::post('/', ['uses' => 'LivrosController@store', 'as' => 'livros.store']);
	Route::delete('/{id}', ['uses' => 'LivrosController@destroy', 'as' => 'livros.destroy']);
	Route::put('/{id}', ['uses' => 'LivrosController@update', 'as' => 'livros.update']);
});


Route::group(['prefix' => 'autores'], function(){
	Route::get('/', ['uses' => 'AutoresController@index', 'as' => 'autores.index']);
	Route::get('create', ['uses' => 'AutoresController@create', 'as' => 'autores.create']);
	Route::get('{id}/edit', ['uses' => 'AutoresController@edit', 'as' => 'autores.edit']);
	Route::post('/', ['uses' => 'AutoresController@store', 'as' => 'autores.store']);
	Route::delete('/{id}', ['uses' => 'AutoresController@destroy', 'as' => 'autores.destroy']);
	Route::put('/{id}', ['uses' => 'AutoresController@update', 'as' => 'autores.update']);
});