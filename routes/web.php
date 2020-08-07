<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('Home');

Route::get('post', 'PostController@index')->name('post');

Route::post('create', 'PostController@create');

Route::post('recipe', 'RecipeController@index');

Route::post('recipe', 'RecipeController@index');