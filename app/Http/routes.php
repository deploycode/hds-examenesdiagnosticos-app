<?php

Route::get('/'      ,'FrontController@index');
Route::get('citas'  ,'FrontController@citas');
Route::get('login'  ,'FrontController@login');
Route::get('oct'    ,'FrontController@oct');
Route::get('admin'  ,'FrontController@admin');

Route::get('menus', 'MenuController@listing');
Route::resource('menu', 'MenuController');

Route::get('password/reset/{token}','Auth\PasswordController@getReset');
Route::post('password/reset','Auth\PasswordController@postReset');

Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

Route::resource('examen', 'PostController');
Route::get('examen/{slug}', ['as' => 'examen', 'uses' => 'PostController@show']);

Route::resource('image', 'ImageController');

Route::resource('user', 'UserController');

Route::resource('log' , 'LogController');
Route::get('logout'   , 'LogController@logout');

Route::resource('mail', 'MailController');
