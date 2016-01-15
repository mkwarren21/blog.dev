<?php

class PostsController extends \BaseController {

	public function __construct()
	{
		parent::__construct();

		$this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$query = Post::with('user');
		

		if (Input::has('search')){
			$search = Input::get('search');
			$query->where('title', 'like', "%{$search}%")->orWhere('content', 'like', "%{$search}%");
		}

		$posts=$query->orderBy('created_at', 'desc')->paginate(4);



		if (Request::wantsJson()){
			return Response::json(['posts'=>$posts]);
		} else{
			return View::make('posts.index')->with('posts', $posts);
		}
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}

	/**
	 * Validate inputs and save to database.
	 *
	 * @return Response
	 */

	protected function validateAndSave($post)
	{
		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		} else{
			$post->title = Input::get('title');
			$post->subtitle = Input::get('subtitle');
			$post->content = Input::get('content');
			$post->user_id = Auth::id();
			$post->image = '/img/264H.jpg';
			$result = $post->save();
			if($result) {
                Session::flash('successMessage', 'Great Success!');
				return Redirect::action('PostsController@show', $post->slug);
			} else {
                Session::flash('errorMessage', 'Post was not saved.');
				return Redirect::back()->withInput();
			}
		}		
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$post = new Post();
        Log::info(Input::all());
		return $this->validateAndSave($post);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		$post = Post::where('slug',$slug)->first();
    	if (!$post){
            App::abort(404);
			return Redirect::action('PostsController@index');
		} 

		return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($slug)
	{
		$post = Post::where('slug',$slug)->first();
		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::find($id);
		return $this->validateAndSave($post);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

		$post = Post::find($id);
		$post->delete();

		return Redirect::action('PostsController@index');
	}

	public function getManage()
	{
		return View::make('posts.manage');
	}


}
