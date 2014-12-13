@extends('_master')

@section('title')
	Log in
@stop

@section('content')
<h1>Log in</h1>
	{{ Form::open(array('url' => '/login')) }}
	<div class='form-group'>
	{{ Form::label('email') }}
	{{ Form::text('email') }}
	</div>
	<div class='form-group'>
	{{ Form::label('password') }}
	{{ Form::password('password') }}
	</div>
	{{ Form::submit('Submit') }}
	{{ Form::close() }}
@stop