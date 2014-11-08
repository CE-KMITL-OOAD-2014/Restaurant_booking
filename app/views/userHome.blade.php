<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Hello {{ $user->id }}</title>
    </head>

    <body>

        @if (Session::has('message'))

            <p style="color:green;">{{ Session::get('message') }}</p>

        @endif

        <p> Name : {{ $user->name }} </p>
        <p> Last name : {{ $user->lastname }} </p>
        <p> E-mail : {{ $user->email }} </p>
        <p> Tel : {{ $user->tel }} </p>

        {{"<a href=\"http://localhost/ResBook/public/index.php/edit/$user->id\">EDIT PROFILE</a>"}}
        <br>
        {{"<a href=\"http://localhost/ResBook/public/index.php/show/$user->id\">SHOW BOOKED</a>"}}
        <br>
         {{"<a href=\"http://localhost/ResBook/public/index.php/showRes/$user->id\">SHOW MY RESTAURANTS</a>"}}
        <br>
        {{"<a href=\"http://localhost/ResBook/public/index.php/logout_action\">LOG OUT</a>"}}
        <br>

        




    </body>
</html>
