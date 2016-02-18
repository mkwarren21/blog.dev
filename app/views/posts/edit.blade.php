@extends('layouts.post')

@section('content')

	<p>create a post</p>

		<div class = 'content'>
		{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}

		<div class="form-group {{ ($errors->has('title')) ? 'has-error' : '' }}">
			{{ $errors->first('title', '<div class="alert alert-danger">:message</div>') }}
			{{ Form::label('title', 'Title') }}
			{{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter your title','value' => '{{{ $post->content }}}']) }}
		</div>

		<div class="form-group {{ ($errors->has('content')) ? 'has-error' : '' }}">
			{{ $errors->first('content', '<div class="alert alert-danger">:message</div>') }}
			{{ Form::label('content', 'Content') }}
			{{ Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Enter your content', 'data-provide'=>'markdown', 'data-iconlibrary'=>'fa','value' => '{{{ $post->content }}}') }}
		</div>

		<div class="form-group {{ ($errors->has('image')) ? 'has-error' : '' }}">
			{{ $errors->first('image', '<div class="alert alert-danger">:message</div>') }}
			{{ Form::label('image', 'Image') }}
			<p>Current Image:</p>
			{{{ $postl->image }}}
			{{ Form::file('image') }}
		</div>

		<div>
				@foreach($tags as $tag)
					{{ Form::label('tuttags[]', $tag->name)}}
					{{ Form::checkbox('tuttags[]', $tag->id)}}
					<span class="tags-pad"></span>
				@endforeach
			<br>
			{{ Form::label('addtag', "Don't see a tag? Add it here!")}}
			{{ Form::text('addtag', null,array('id' => 'addtag', 'placeholder'=>'Add a Tag!'))}}
		</div>

	{{ Form::submit('submit') }}
	{{ Form::close() }}


	{{ Form::model($post, array('action' => array('PostsController@destroy', $post->id),'method' => 'DELETE')) }}
		{{Form::submit('Delete this Post', array('class' => 'btn btn-warning'))}}
	{{ Form::close()}}
@stop