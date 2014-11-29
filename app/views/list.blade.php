@extends('_master')

@section('title')
Welcome to Your Task List
@stop

@section('head')
@stop

@section('content')
	<h1>Welcome to Your Task Library</h1>
	@if ($tasks->isEmpty())
	<p>There are currently no tasks to view.</p>

	@else
		@foreach ($tasks as $task)
			<p><strong>{{ $task['task_name'] }}</strong>, 
				{{ $task['notes'] }}, 
				due on {{ $task['due_date'] }}, 
				done? {{ $task['done'] ? 'yes' : 'no' }}
				<br>
				<a href="{{ action('TaskController@getEdit', $task->id) }}">Edit</a>
				or <a href="{{ action('TaskController@getDelete', $task->id) }}">Delete</a> 
			</p>
		@endforeach
	@endif
@stop