<?php

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

Route::get('/', function () {
    return view('sources.body');
});

Route::get('/laravel', 'BlogController@index');
Route::get('/show-books', 'BlogController@showBooks');
Route::get('/book/create', 'BlogController@createBooks');

Route::get('/profile', function () {
    return view('profile');
});
