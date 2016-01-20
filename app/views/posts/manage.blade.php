@extends('layouts.master')

@section('bottom-script')

	<script src="/js/moment.js"></script>
	<script src="/js/moment-timezone.js"></script>
	<script src="/js/angular.min.js"></script>

	<script src="/js/postsModule.js"></script>


@stop

@section('content')

	<section ng-app="postModule">
		<table class = "table-striped" ng-controller="ManagePostsController">
			<tr>
				<th>Blog Title</th>
				<th>Sub-Title</th>
				<th>Content</th>
				<th>Created</th>
				<th>Last Updated</th>
				<th>Delete</th>
				<th>Edit</th>
			</tr>
			<tr ng-repeat ="post in posts">
				<td>@{{post.title}}</td>
				<td>@{{post.subtitle}}</td>
				<td>@{{post.content}}</td>
				<td>@{{post.created_at |phpDate}}</td>
				<td>@{{post.updated_at |phpDate}}</td>
				<td>Delete</td>
				<td>Edit</td>
			</tr>
		</table>
	</section>
@stop