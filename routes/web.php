<?php

Route::get('/', 'HomeController@index');

/* Administration Routes */

Route::get('/admin/posts', 'Admin\PostController@index')->name('admin.posts.index')->middleware(['auth']);
Route::get('/admin/posts/show/{id}', 'Admin\PostController@show')->name('admin.posts.show');

Route::get('/admin/posts/create', 'Admin\PostController@create')->name('admin.posts.create');
Route::post('/admin/posts/create', 'Admin\PostController@store')->name('admin.posts.create');

Route::get('/admin/posts/edit/{id}', 'Admin\PostController@edit')->name('admin.posts.edit');
Route::post('/admin/posts/edit/{id}', 'Admin\PostController@update')->name('admin.posts.edit');

Route::get('/admin/posts/delete/{id}', 'Admin\PostController@destroy')->name('admin.posts.delete');

Auth::routes();
