@extends('layouts.master')

@section('content')
<form role="form" method="POST" action="{{{ action('PostsController@store') }}}">
	<div class="form-group">
	  <label for="title">Title:</label>
	  <input type="text" name="title" class="form-control" id="title" value="{{{ Input::old('title') }}}">
	</div>
	<div class="form-group">
	  <label for="content">Body:</label>
	  <textarea class="form-control" name="content" rows="10" id="content">{{{ Input::old('content') }}}</textarea>
	</div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

@stop