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

Route::get('/', 'SuggestionController@index');
Route::post('/store', 'SuggestionController@store');
Route::get('/create', 'SuggestionController@create');
Route::get('/update/{id}', 'SuggestionController@update');
Route::get('/delete/{id}', 'SuggestionController@delete');
Route::post('/edit-save/{id}', 'SuggestionController@saveUpdate');

Route::get('/upvote/{id}', 'SuggestionController@upVote');
Route::get('/downvote/{id}', 'SuggestionController@downVote');
