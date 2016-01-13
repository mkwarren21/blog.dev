@extends('layouts.master')

@section('content')
<div class = "container">
	<div class = "row">
		<div class = "col-lg-10 offset-col-lg-1">
			<h1 >Not all those who wander are lost... </h1>
			<img src="/img/four_oh_four.png">
			<h2>But you certainly seem to be. Please return to the <a href="{{{action('HomeController@showHome')}}}">main page.</a></h2>
		</div>
	</div>
</div>

@stop