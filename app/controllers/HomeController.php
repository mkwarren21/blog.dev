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

	public function search()
	{
		$search = Input::get('search');

	    $searchTerms = explode(' ', $search);

	    $queryPost = Post::with('user');

	    foreach($searchTerms as $term)
	    {
	        $queryPost->where('title', 'LIKE', '%'. $term .'%')
	        ->orWhere('content', 'LIKE', '%' . $term . '%');

	    }

	    $posts = $queryPost->orderBy('created_at', 'desc')->get();
		$tags = Tag::with('posts')->paginate(8);


	    return View::make('search', compact('posts', 'tags'));
	}

	public function tags($id)
	{
	    $tag = Tag::find($id);

  		$posts = $tag->posts()->get();
		$tags = Tag::with('posts')->paginate(8);
  		

	    return View::make('search', compact('posts', 'tags'));

	}
}
