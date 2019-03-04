<?php

use Illuminate\Support\Facades\View;

Route::post('/send', function () {
    return 'done';
});

Route::get('/', function () {
    return View::component('Welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/posts', 'PostController@index');
Route::get('/emails', 'EmailController@index');
Route::get('/emails/all', 'EmailController@all');
Route::get('/plans', 'PlanController@index');
Route::get('/plans/{plan}', 'PlanController@show');
Route::get('/emails/{email}', 'EmailController@show');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/{post}', 'PostController@show');
Route::post('/posts', 'PostController@store');
Route::post('/emails', 'EmailController@store');
Route::delete('/posts/{post}', 'PostController@destroy');
