@extends('_master')

@section('title')
Add to the suggestion box
@stop

@section('content')
<h1>Add a new suggestion</h1>

{{ Form::open(array('url' => '/create_suggestion')) }}

{{ Form::label('subject','Subject') }}  (optional)
{{ Form::text('subject'); }}
<br>
{{ Form::label('suggestion_text', 'Suggestion') }}  (required)
{{ Form::text('suggestion_text'); }}
<br>
{{ Form::submit('Add'); }}
{{ Form::close() }}
@stop