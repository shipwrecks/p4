@extends('_master')

@section('title')
	Edit
@stop

@section('head')
@stop

@section('content')
<h1>Edit Your Task</h1>

{{ Form::open(array('url' => '/task/edit')) }}
	{{ Form::hidden('id',$task['id']); }}
	<div class='form-group'>
	{{ Form::label('task_name','task_name') }}
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
	{{ Form::label('done','Purchase Link URL') }}
	{{ Form::checkbox('done',$task['value']); }}
	</div>
	{{ Form::submit('Save'); }}
{{ Form::close() }}
@stop