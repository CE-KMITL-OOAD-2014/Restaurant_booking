<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> Book Detail ID {{$book->id}} </title>
    </head>

    <body>

        <h2> Book Detail ID {{$book->id}} : </h2>

        @if ($errors->any())

            <ul style="color:red;">

                {{ implode('', $errors->all('<li>:message</li>')) }}

            </ul>

        @endif

        @if (Session::has('message'))

            <p>{{ Session::get('message') }}</p>

        @endif

        <p> ID : {{$book->id}}</p>
        <p> Restaurant name : {{$res_name}} </p>
        <p> จองโดย : {{$username}} </p>
        <p> Date : {{$book->date}} </p>
        <p> จำนวนที่นั่งที่จอง : {{$book->amout}} </p>
        <p> Area : {{$book->area}} </p>
        <p> จองเมื่อ : {{$book->created_at}} </p>
        <p> แก้ไขครั้งสุดท้าย : {{$book->updated_at}} </p>


        {{"<a href=\"http://localhost/ResBook/public/index.php/editBook/$book->id\">EDIT</a>"}}


    </body>
</html>
