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
		// $file = '/img/resume.pdf'; 
        
		
		// if (File::exists($file)) {

		//     $content = file_get_contents($file);
		//     return Response::make($content, 200, array('content-type'=>'application/pdf'));
		// } else{
		// 	return "failure";
		// }
	}



}
