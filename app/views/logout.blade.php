<html>
<head>
	<title></title>
</head>
<body>
	<p> Login SUCCESS! </p>
	<!-- LOGOUT BUTTON -->
	<p> ID : {{$id = Auth::id();}} </p>
	<a href="{{ URL::to('logout_action') }}">Logout</a>
</body>
</html>