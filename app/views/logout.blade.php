<html>
<head>
	<title></title>
</head>
<body>
	<p> Login SUCCESS! </p>

	@if (Session::has('message'))

            <p style="color:blue;">{{ Session::get('message') }}</p>

        @endif

	<!-- LOGOUT BUTTON -->
	<p> ID : {{$id = Auth::id();}} </p>
	<a href="{{ URL::to('logout_action') }}">Logout</a>
</body>
</html>