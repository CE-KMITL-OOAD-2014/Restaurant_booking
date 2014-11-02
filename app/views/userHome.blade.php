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

        {{"<a href=\"http://localhost/ResBook/public/index.php/show/$user->id\">SHOW BOOKED</a>"}}
        <br>
         {{"<a href=\"http://localhost/ResBook/public/index.php/showRes/$user->id\">SHOW MY RESTAURANTS</a>"}}
        <br>
        {{"<a href=\"http://localhost/ResBook/public/index.php/logout_action\">LOG OUT</a>"}}

    </body>
</html>
