@extends('layouts.blog')


@section('content')
    <div class="page-header">
        <h1>Along came 'MK' AS 'Alice'</h1>
          <h3>A Trip Through the Wonderland of Development</h3>
      </div>


    @foreach ($posts as $post)
        <!-- First Blog Post -->
        <h2>
            <a href="{{{action('PostsController@show', $post->slug)}}}">{{{$post->title}}}</a>
        </h2>
        <p class="lead">
            by <a href="#">{{{$post->user->username}}}</a>
        </p>
        <p><i class="fa fa-clock-o"></i> {{{$post->created_at}}}</p>
        <hr>
        <img class="img-responsive" src="http://placehold.it/900x300" alt="">
        <hr>
        <p>{{{$post->content}}}</p>
        <a class="btn btn-primary" href="{{{action('PostsController@show', $post->slug)}}}">Read More <i class="fa fa-chevron-right"></i></a>

        <hr>
    @endforeach

     <!-- Pager -->
    {{ $posts->links() }}
    <ul class="pager">
        <li class="previous">
            <a href="#">← Older</a>
        </li>
        <li class="next">
            <a href="#">Newer →</a>
        </li>
    </ul> 
	
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