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

Auth::routes();

Route::group(['middleware' => 'auth'] ,function() {

    Route::get('/users', 'UserController@showUsers');
    Route::get('/user/followinglist', 'UserController@showFollowing');
    Route::get('/user/followerslist', 'UserController@showFollowers');
    Route::get('/user/follow/{id}', 'UserController@follow');
    Route::get('/user/unfollow/{id}', 'UserController@unfollow');
    Route::get('/user/edit/{id}', 'UserController@edit');
    Route::post('/user/storeEdit/{id}', 'UserController@editStore');
    Route::get('/user/profile/{id}', 'UserController@showUser');
    Route::get('/user/edit/password/{id}', 'UserController@changePassword');
    Route::post('/user/storePassword/{id}', 'UserController@passwordStore');
    Route::get('/home', 'HomeController@home')->name('home');

});