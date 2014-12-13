@extends('_master')

@section('title')
Add to the suggestion box
@stop

@section('content')
<h1>Add a new suggestion</h1>

{{ Form::open(array('url' => '/create_suggestion')) }}
	<div class='form-group'>
	{{ Form::label('subject','Subject') }}  (optional)
	{{ Form::text('subject'); }}
	</div>
	<div class='form-group'>
	{{ Form::label('suggestion_text', 'Suggestion') }}  (required)
	{{ Form::textarea('suggestion_text'); }}
	</div>
	{{ Form::submit('Add'); }}
{{ Form::close() }}
@stop