@extends('_master')

@section('title')
	Confirm Deletion
@stop

@section('head')
@stop

@section('content')

    <h1>Delete task called {{ $task->task_name }}?</h1>
   {{ Form::open(array('url' => '/delete'.$task)) }}
        {{ Form::hidden('_method', 'DELETE') }}
    	{{ Form::submit('Yes', array('class' => 'btn')) }}
    {{ Form::close() }}
    <br>
    <p><a href="/list">No, go back to my task list.</a></p>

@stop