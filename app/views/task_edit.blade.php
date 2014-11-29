@extends('_master')

@section('title')
	Edit
@stop

@section('head')
@stop

@section('content')
	<h1>Edit task called {{ $task->task_name }}?</h1>

   {{ Form::open(array('url' => '/edit'.$task)) }}
		<div class='form-group'>
		{{ Form::label('task_name','task name') }}
		{{ Form::text('task_name',$task['task_name']); }}
		</div>
		<div class='form-group'>
		{{ Form::label('notes','notes') }}
		{{ Form::text('notes',$task['notes']); }}
		</div>
		<div class='form-group'>
		{{ Form::label('due_date','due date') }}
		{{ Form::text('due_date',$task['due_date']); }}
		</div>
		<div class='form-group'>
		{{ Form::label('done','Done?') }}
		{{ Form::checkbox('done',$task['value']); }}
		</div>
		{{ Form::submit('Save'); }}
	{{ Form::close() }}
	<br>
    <p><a href="/list">No, go back to my task list.</a></p>

@stop