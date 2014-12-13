@extends('_master')

@section('title')
	Edit
@stop

@section('head')
@stop

@section('content')
	<h1>Edit task called {{ $task->task_name }}?</h1>

   {{ Form::open(array('action' => array('TaskController@getEdit', $task->id))) }}
		<div class='form-group'>
		{{ Form::label('task_name','Task name') }} (required)
		{{ Form::text('task_name',$task['task_name']); }}
		</div>
		<div class='form-group'>
		{{ Form::label('notes','Notes') }} (optional)
		{{ Form::textarea('notes',$task['notes']); }}
		</div>
		<div class='form-group'>
		{{ Form::label('due_date','Due date') }} (required)
		{{ Form::text('due_date',$task['due_date']); }}
		</div>
		{{ Form::label('done','Done?') }}
		{{ Form::checkbox('done',$task['value']); }}
		<br>
		{{ Form::submit('Save'); }}
	{{ Form::close() }}
	<br>
    <p><a href="/list">No, go back to my task list.</a></p>

@stop