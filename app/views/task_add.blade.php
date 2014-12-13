@extends('_master')

@section('title')
Add a new task
@stop

@section('content')
<h1>Add a new task</h1>

{{ Form::open(array('url' => '/create')) }}
	<div class='form-group'>
	{{ Form::label('task_name','Task Name') }}  (required)
	{{ Form::text('task_name'); }}
	</div>
	<div class='form-group'>
	{{ Form::label('notes', 'Notes') }}  (optional)
	{{ Form::textarea('notes'); }}
	</div>
	<div class='form-group'>
	{{ Form::label('due_date','Due Date (YYYY-MM-DD)') }}   (required)
	{{ Form::text('due_date'); }}
	</div>
	{{ Form::label('done', 'Done?') }}
	{{ Form::checkbox('done', 'value'); }}
	<br>
	{{ Form::submit('Add'); }}
{{ Form::close() }}
@stop