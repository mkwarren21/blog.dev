<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showHome');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/resume', 'HomeController@showResume');

Route::get('/login', 'HomeController@getLogin');
//if you are going to have a more complicated login, make a separate Auth controller

Route::post('login', 'HomeController@postLogin');

Route::get('logout', 'HomeController@getLogout');

Route::get('posts/manage', 'PostsController@getManage');

Route::get('simplesimon', 'HomeController@showSimpleSimon');

Route::get('whackamole', 'HomeController@showWhackamole');

Route::get('weather_map', 'HomeController@showWeather');

Route::get('/search', 'HomeController@search');

Route::get('/search/{tag}', 'HomeController@tags');

Route::resource('posts', 'PostsController');

Route::resource('tags', 'TagsController');




