<?php

use Illuminate\Support\Facades\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('/send', function () {
    $email = new \SendGrid\Mail\Mail();
    $email->setFrom('test@example.com', 'Example User');
    $email->setSubject('Sending with SendGrid is NOT Fun');
    $email->addTo('andylauszp@gmail.com', 'Andy');
    // $email->addTo('Andy@infosoft.co.nz', 'Andy');
    // $email->addTo('Sam@infosoft.co.nz', 'Sam');
    // $email->addTo('paul@infosoft.co.nz', 'Paul');
    // $email->addTo('Alastair@infosoft.co.nz', 'Alastair');
    $email->addContent(
    'text/html', request()->input('email')
);
    $sendgrid = new \SendGrid(config('app.sendGrid', false));
    try {
        $response = $sendgrid->send($email);
        dd($response);
        echo $response->statusCode()."\n";
        print_r($response->headers());
        echo $response->body()."\n";
    } catch (Exception $e) {
        echo 'Caught exception: '.$e->getMessage()."\n";
    }
});
Route::get('/', function () {
    return View::component('Welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/posts', 'PostController@index');
Route::get('/emails', 'EmailController@index');
Route::get('/plans', 'PlanController@index');
Route::get('/plans/{plan}', 'PlanController@show');
Route::get('/emails/{email}', 'EmailController@show');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/{post}', 'PostController@show');
Route::post('/posts', 'PostController@store');
Route::post('/emails', 'EmailController@store');
Route::delete('/posts/{post}', 'PostController@destroy');
