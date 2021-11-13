<?php

use Core\Route;
use App\Helpers\Auth;

Route::get('', ['MainController@home', 'home']);
Route::get('blog/create', ['BlogController@create', 'blog.create']);
Route::post('blog/create', ['BlogController@store', 'blog.store']);
Route::get('blog/{id}', ['BlogController@show', 'blog.show']);

Auth::routes();