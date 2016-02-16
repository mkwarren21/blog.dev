@extends('layouts.post')

@section('content')
{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}

	@include('posts.create-edit-form-template')

{{ Form::close()}}

{{ Form::model($post, array('action' => array('PostsController@destroy', $post->id),'method' => 'DELETE')) }}
	{{Form::submit('Delete this Post', array('class' => 'btn btn-warning'))}}
{{ Form::close()}}

@stop