<?php

#Route::get('/', 'WelcomeController@index');

/*
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/
Route::get('home', 'HomeController@index');
Route::get('about', 'ModuleController@about');
Route::get('dashboard', 'ModuleController@index');
Auth::routes();
