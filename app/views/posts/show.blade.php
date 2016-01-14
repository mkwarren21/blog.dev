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
                    <div class="post-heading">
                        <h1>{{{$post->title}}}</h1>
                        <h2 class="subheading">{{{$post->subtitle}}}</h2>
                        <span class="meta">Posted by <a href="#">{{{$post->user()->first()->username}}}</a> on {{{$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <article>
        <div class="container">
            <div class="row">
                @if (Auth::check())
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <a href="{{{action('PostsController@edit', $post->slug)}}}">Edit the Post!</a>
                </div>
                
                {{ Form::model($post, array('action' => array('PostsController@destroy', $post->id),'method' => 'DELETE', 'class'=> 'col-lg-offset-2 col-md-offset-1')) }}
                    {{Form::submit('Delete this Post', array('class' => 'btn btn-warning'))}}
                {{ Form::close()}}
                @endif

                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <p>{{{$post->content}}}</p>
                </div>
            </div>
        </div>
    </article>
@stop


