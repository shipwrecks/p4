@extends('layout')

@section('content')

    <h1>Delete {{ $task->task_name }}?</h1>
    {{ Form::submit('Yes', array('class' => 'btn')) }}
    <br>
    <p><a href="/list">No, go back to my task list.</a></p>

@stop