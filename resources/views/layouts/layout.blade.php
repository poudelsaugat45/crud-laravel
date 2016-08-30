<!DOCTYPE html>
<html>
<head>
    <title> @yield('title')</title>
</head>

<p>
	@yield ('p')
	<a href="/crud/create">Create</a>
	<a href="/crud">View all</a>
	<a href="#">Logout</a>
</p>

<body>
    @yield('body')
</body>

</html>