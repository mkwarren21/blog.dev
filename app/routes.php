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

Route::get('/', function()
{
	return View::make('home');
});

Route::get('/portfolio', function()
{
	return View::make('portfolio');
});

Route::get('/resume', function()
{
	return View::make('resume');
});

Route::get('/my-first-view/{name?}', function($name = null)
{
	$data = array('name' => $name);
	return View::make('my-first-view')->with($data);
});

Route::get('/rolldice/{guess?}', function($guess = null)
{
	$randnum = mt_rand(1,6);
	$data = ['guess' => $guess,
			 'randnum'=> $randnum	
				];
	return View::make('rolldice')->with($data);
});
