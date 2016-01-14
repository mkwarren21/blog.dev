@extends('layouts.master')

@section('content')


{{ Form::open(array('action'=>'HomeController@postLogin')) }}


{{ Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Enter your email'])}}
{{ Form::password('password', ['class'=>'form-control', 'placeholder'=>'Enter your password'])}}

{{ Form::submit('submit') }}	


{{ Form::close() }}

@stop