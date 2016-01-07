@extends('layouts.master')

@section('content')

	<h1>Hello, {{{$name}}} </h1>


	@if($name == 'MK')
		<h4>Hello Birdie.</h4>
	@endif

@stop
