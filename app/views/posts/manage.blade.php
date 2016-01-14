@extends('layouts.master')

@section('bottom-script')

	<script src="/js/angular.min.js"></script>
	<script src="/js/postsModule.js"></script>

@stop

@section('content')

	<section  ng-app="postModule">
		<table ng-controller="ManagePostsController">
		</table>
	</section>
@stop