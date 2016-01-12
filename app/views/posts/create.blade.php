@extends('layouts.master')

@section('content')


{{ Form::open(array('action'=>'PostsController@store')) }}

	<div class="form-group">
		{{ $errors->first('title', '<span class="help-block">:message</span>') }}
	  	<label for="title">Title:</label>
	 	 <input  type="text" name="title" class="form-control" id="title" value="{{{ Input::old('title') }}}">
	</div>
	<div class="form-group">
		{{$errors->first('subtitle', '<span class="help-block">:message</span>')}}
	  	<label for="subtitle">Subtitle:</label>
	  	<input type="text" name="subtitle" class="form-control" id="subtitle" value="{{{ Input::old('subtitle') }}}">
	</div>
	<div class="form-group">
		{{$errors->first('content', '<span class="help-block">:message</span>')}}
		<label for="content">Body:</label>
	  	<textarea class="form-control" name="content" rows="10" id="content">{{{Input::old('content')}}}</textarea>
	</div>
  <button type="submit" class="btn btn-default">Submit</button>

{{ Form::close() }}


@stop