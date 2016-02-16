@extends('layouts.blog')

@section('content')
    <div class = "post">
        <h1>{{{$post->title}}}</h1>
        <!-- Author -->
        <p class="lead">
            by <a href="#">{{{$post->user->username}}}</a>
        </p>

        <hr>
        <!-- Date/Time -->
        <p><i class="fa fa-clock-o"></i> {{{$post->created_at}}}</p>
        <hr>

        <!-- Preview Image -->
        <img class="img-responsive" src="http://placehold.it/900x300" alt="">
        <hr>

        <!-- Post Content -->
        <p class="lead">{{$converter->convertToHtml($post->content)}}</p>
        </div>
    <hr>
@stop

@section('categories')
    <div class="well">
        <h4>Blog Categories</h4>
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-unstyled">
                    @foreach($tags as $tag)
                        <li><a href="{{{action('HomeController@tags', $tag->id)}}}">{{{$tag->name}}}</a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@stop

