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

Route::get('/', 'TeamsController@index')->name('all-teams');
Route::get('/register', 'RegistrationController@create');
Route::get('/teams/{id}', 'TeamsController@show')->name('single-team');
Route::get('/players/{id}', 'PlayersController@show')->name('single-player');
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::get('/login/{user_id}', 'VerifyController@store')->name('verification');
Route::get('/login', 'LoginController@create')->name('login');
Route::post('/login', 'LoginController@store');
Route::get('/logout', 'LoginController@destroy');
Route::post('/teams/{id}/comments', 'CommentsController@store')->name('comments-team');

Route::get('/news', 'NewsController@index');
Route::get('/news/{id}', 'NewsController@show')->name('single-news');
