<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('top', 'TopController@index')->name('top');
Route::post('top', 'TopController@index');

Route::get('home', 'HomeController@index')->name('home');
Route::post('home', 'HomeController@index');

Route::get('post', 'PostController@index')->name('post');

Route::post('create', 'PostController@create');

Route::post('recipe', 'RecipeController@index');
