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
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/create-book', 'BookController@index');
    Route::post('/save-book', 'BookController@store');
    Route::get('/display-books', 'BookController@display');
    Route::get('/show/{id}', 'BookController@show');
    Route::post('/delete/{id}', 'BookController@delete');
    Route::get('/edit/{id}', 'BookController@edit');
    Route::post('/edit-book/{id}', 'BookController@editStore');

    Route::get('/user/info', 'UserController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
