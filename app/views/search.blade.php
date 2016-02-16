@extends('layouts.blog')

@section('content')
	
	 @foreach ($posts as $post)
	                <!-- First Blog Post -->
        <h2>
            <a href="{{{action('PostsController@show', $post->slug)}}}">{{{$post->title}}}</a>
        </h2>
        <p class="lead">
            by <a href="index.php">{{{$post->user->username}}}</a>
        </p>
        <p><i class="fa fa-clock-o"></i> {{{$post->created_at}}}</p>
        <hr>
        <img class="img-responsive" src="http://placehold.it/900x300" alt="">
        <hr>
        <p>{{{$post->content}}}</p>
        <a class="btn btn-primary" href="{{{action('PostsController@show', $post->slug)}}}">Read More <i class="fa fa-chevron-right"></i></a>

        <hr>
    @endforeach

@stop