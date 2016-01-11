<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showHome()
	{
		return View::make('home');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function showResume()
	{
		return View::make('resume');
	}

	public function showMyFirstView($name = null)
	{
		$data = array('name' => $name);
		return View::make('my-first-view')->with($data);
	}

	public function showRollDice($guess = null)
	{
		$randnum = mt_rand(1,6);
		$data = ['guess' => $guess,
				 'randnum'=> $randnum	
					];
		return View::make('rolldice')->with($data);
	}

}
