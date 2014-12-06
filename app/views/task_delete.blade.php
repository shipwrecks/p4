@extends('_master')

@section('title')
	Confirm Deletion
@stop

@section('head')
@stop

@section('content')         

    <h1>Delete task called {{ $task->task_name }}?</h1>
{{ Form::open(array('action' => array('TaskController@postDelete', $task->id))) }}
{{ Form::submit('Yes', array('class' => 'btn')) }}
{{ Form::close() }}
<p><a href="/list">No, go back to my task list.</a></p>@stop
