<!DOCTYPE html>
<html>
<head>
	
	<title>	 
		@yield ('title', 'P4')
	</title>

	<meta charset='utf-8'>
	<link rel='stylesheet' href='/css/style.css' type='text/css'>

	@yield('head')

</head>
<body>
	@if(Session::get('flash_message'))
		<div class='flash-message'>{{ Session::get('flash_message') }}</div>
	@endif

		<nav>
		<ul>
			@if(Auth::check())
			<li><a href='/logout'>Log out</a></li>
			<li><a href='/list'>Your Task List</a></li>
			<li><a href='/done'>Completed Tasks</a></li>
			<li><a href='/not_done'>Pending Tasks</a></li>
			<li><a href='/create'>Add a Task</a></li>

			@else
			<li><a href='/signup'>Sign up</a> or <a href='/login'>Log in</a></li>
			@endif
			</ul>
		</nav>

	@yield('content')
</body>
</html>
