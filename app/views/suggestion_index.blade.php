@extends('_master')

@section('title')
Welcome to the Suggestion Box
@stop

@section('head')
@stop

@section('content')
	<h1>Welcome to the Suggestion Box</h1>
	<p>Have you run into errors?  Have questions?  Have suggestions?  See what other people think about us?
	  Have a look below!</p>
	  
	@foreach ($suggestions as $suggestion)
		<p>{{ $suggestion->subject }} test <br>
			{{ $suggestion->suggestion_text }} <br>
		</p>
	@endforeach
	<p><a href="{{ action('SuggestionController@getCreate') }}">Add a Suggestion</a></p>
@stop