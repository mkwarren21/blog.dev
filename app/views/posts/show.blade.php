@extends('layouts.blog')

@section('content')


                <!-- Blog Post -->

                <!-- Title -->
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
    <p class="lead">{{{$post->content}}}</p>
    <hr>


@stop


