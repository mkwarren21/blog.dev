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
			$post->image = '/img/264H.jpg';
			$result = $post->save();
			if($result) {
                Session::flash('successMessage', 'Great Success!');
				return Redirect::action('PostsController@show', $post->id);
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
	public function show($id)
	{
		$post = Post::find($id);
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


}
