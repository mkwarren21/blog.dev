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

	public function getLogin()
	{
		return View::make('login');
	}

	public function postLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
			$loggedInUser = Auth::user();
		    return Redirect::intended('/');
		} else {
		    // login failed, go back to the login screen
		    Session::flash('errorMessage', 'Log in failed.');
		    return Redirect::back();
		}
	}

	public function getLogout()
	{
		Auth::logout();
		return Redirect::action('HomeController@showHome');
	}

	public function showSimpleSimon()
	{
		return View::make('simplesimon');
	}

	public function showWhackamole()
	{
		return View::make('whackamole');
	}

	protected function sendNotificationEmail($comment)
	{

		if (isset($comment->qa_id)){
			$user = $comment->qa->user;
		} else {
			$user = $comment->tutorial->user;
		}

		$text = "Someone responded to your post!";

		return Mail::send('emails.notification', ['user' => $user], function ($m) use ($user) {
            $m->from('postmaster@sandbox8db08a1a17a44e4b83110e3242bbf4ca.mailgun.org', 'Your Application');

            $m->to($user->email)->subject('Notification from GreaseMonkey!');
        });
	
	}
}
