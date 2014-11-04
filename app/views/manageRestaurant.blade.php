<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Manage My Restaurant</title>
    </head>

    <body>

        <h2> Manage My Restaurant : </h2>

        @if ($errors->any())

            <ul style="color:red;">

                {{ implode('', $errors->all('<li>:message</li>')) }}

            </ul>

        @endif

        @if (Session::has('message'))

            <p>{{ Session::get('message') }}</p>

        @endif

        <p> Your ID : {{$id = Auth::id();}} </p>

        <?php
            echo "<h3> Restaurant id:".$restaurant->id." name: ".$restaurant->name."</h3>";
            echo "EDIT<br>";
            echo "<a href=\"http://localhost/ResBook/public/index.php/delete/$restaurant->id\">DELETE</a><br>";
        ?>

        <br>

        Upload picture : 
        {{ "<form action=\"http://localhost/ResBook/public/index.php/uploadpic/$restaurant->id\"" }}
            method="POST"
            enctype="multipart/form-data">
            <input type="file" name="pic" />
            <input type="submit">
        </form><br>

        Pic : <br>
        <?php
            $pics = explode(",", $restaurant->name_pic);
            if ($pics[0]=="") {
                echo "<img src=\"/ResBook/public/pics/pic\">";
            }
            else {
                foreach ($pics as $pic) {
                    echo "<img src=\"/ResBook/public/pics/".$pic."\">";
                }
            }
        ?>
    </body>
</html>
