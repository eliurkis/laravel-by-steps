<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', 'PostController@index');
Route::get('/posts/show/{id}', 'PostController@show');

Route::get('/posts/create', 'PostController@create');
Route::post('/posts/create', 'PostController@store');

Route::get('/posts/edit/{id}', 'PostController@edit');
Route::post('/posts/edit/{id}', 'PostController@update');
