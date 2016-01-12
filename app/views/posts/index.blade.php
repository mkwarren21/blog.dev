@extends('layouts.master')

@section('top-script')
<link href="/css/blog.css" rel="stylesheet">
	<style type="text/css">
		.btn-lg {
		    font-size: 18px;
		    padding: 10px 16px;
		}
	</style>
@stop

@section('content')
	<header class="intro-header" style="background-image: url('/img/170H.jpg')">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
	                    <div class="site-heading">
	                        <h1>Along Came 'MK' AS 'Alice'</h1>
	                        <hr class="small">
	                        <span class="subheading">A Trip Through the Wonderland of Development</span>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </header>
	
		<div class="container">
			<div class="row">
	            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
	            	<a href="{{{action('PostsController@create')}}}">Create a Post!</a>
	            </div>
			</div>
	        <div class="row">
	            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
	            	@foreach($posts as $post)
		                <div class="post-preview">
		                    <a href="{{{action('PostsController@show', $post->id)}}}">
		                        <h2 class="post-title">
		                            {{{$post->title}}}
		                        </h2>
		                        <h3 class="post-subtitle">
		                            {{{$post->subtitle}}}
		                        </h3>
		                    </a>
		                    <p class="post-meta">Posted by <a href="#">Foreign Key UserName</a> on {{{$post->date}}}</p>
		                </div>
		                <hr>
	                @endforeach
	                <!-- Pager -->
	                <ul class="pager">
	                    <li class="next">
	                    	{{ $posts->links() }}
	                        <a href="#">Older Posts →</a>
	                    </li>
	                </ul>
	            </div>
	        </div>
	    </div>
	
@stop