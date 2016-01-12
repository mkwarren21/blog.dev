<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::paginate(4);
		return View::make('posts.index')->with('posts', $posts);
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
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		} else{
			$post = new Post();
			$post->title = Input::get('title');
			$post->subtitle = Input::get('subtitle');
			$post->content = Input::get('content');
			$post->image = '/img/264H.jpg';
			$post->date = date('Y-m-d');
			$result = $post->save();
			if($result) {
				return Redirect::action('PostsController@index');
			} else {
				return Redirect::back()->withInput();
			}
		}

		

		// return Redirect::back()->withInput();
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
		return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);	
		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		} else{
			$post = new Post();
			$post->title = Input::get('title');
			$post->subtitle = Input::get('subtitle');
			$post->content = Input::get('content');
			$post->image = '/img/264H.jpg';
			$post->date = date('Y-m-d');
			$result = $post->save();
			if($result) {
				return Redirect::action('PostsController@index');
			} else {
				echo "This failed";
				return Redirect::back()->withInput();
			}
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$data = array('id' => $id);
		return View::make('show')->with($data);
	}


}