@extends('layouts.master')

@section('top-script')
<link href="/css/blog.css" rel="stylesheet">
@stop

@section('content')
	<header class="intro-header" style="background-image: url('img/264H.jpg')">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
	                    <div class="site-heading">
	                        <h1>Blog Title</h1>
	                        <hr class="small">
	                        <span class="subheading">Blog Subheading</span>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </header>
	
		<div class="container">
	        <div class="row">
	            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
	            	@foreach($posts as $post)
		                <div class="post-preview">
		                    <a href="post.html">
		                        <h2 class="post-title">
		                            {{{$post->title}}}
		                        </h2>
		                        <h3 class="post-subtitle">
		                            Subtitle
		                        </h3>
		                    </a>
		                    <p class="post-meta">Posted by <a href="#">Foreign Key UserName</a> on {{{$post->date}}}</p>
		                </div>
		                <hr>
	                @endforeach
	                <!-- Pager -->
	                <ul class="pager">
	                    <li class="next">
	                        <a href="#">Older Posts →</a>
	                    </li>
	                </ul>
	            </div>
	        </div>
	    </div>
	
@stop