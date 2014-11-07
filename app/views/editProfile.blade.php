<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Edit Profile</title>
    </head>

    <body>
        <h2> Edit Profile : </h2>

        @if ($errors->any())

            <ul style="color:red;">

                {{ implode('', $errors->all('<li>:message</li>')) }}

            </ul>

        @endif

        @if (Session::has('message'))

            <p>{{ Session::get('message') }}</p>

        @endif

        {{ Form::open(array('url' => 'edit_action')) }}

            <p>Name :</p>

            <p>{{ Form::text('name',$user->name) }}</p>

            <p>Last Name :</p>

            <p>{{ Form::text('lastname',$user->lastname) }}</p>

            <p>Password :</p>

            <p>{{ Form::password('password') }}</p>

            <p>Confirm Password :</p>

            <p>{{ Form::password('cpassword') }}</p>

            <p>Email :</p>

            <p>{{ Form::text('email',$user->email) }}</p>

            <p>Tel number :</p>

            <p>{{ Form::text('tel',$user->tel) }}</p>

            <p>{{ Form::submit('Submit') }}</p>

        {{ Form::close() }}

    </body>
</html>
