<!-- app/views/login.blade.php -->

<!doctype html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	{{ Form::open(array('url' => 'login')) }}
		<h1>Login</h1>

		@if (Session::has('message'))

            <p style="color:red;">{{ Session::get('message') }}</p>

        @endif

        @if ($errors->any())

            <ul style="color:red;">

                {{ implode('', $errors->all('<li>:message</li>')) }}

            </ul>

        @endif

		<p>
			{{ Form::label('email', 'Email Address') }}
			{{ Form::text('email', Input::old('email'), array('placeholder' => 'fill your email')) }}
		</p>

		<p>
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password') }}
		</p>

		<p>{{ Form::submit('Submit!') }}</p>
	{{ Form::close() }}

</body>
</html>