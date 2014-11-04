<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Edit Book ID {{$book->id}}</title>
    </head>

    <body>

        <h2> Edit Book ID {{$book->id}} : </h2>

        @if ($errors->any())

            <ul style="color:red;">

                {{ implode('', $errors->all('<li>:message</li>')) }}

            </ul>

        @endif

        @if (Session::has('message'))

            <p>{{ Session::get('message') }}</p>

        @endif

        <p> Your ID : {{$id = Auth::id();}} </p>

        <?php $link = "editBook_action/".$book->id ?>
        <form action="{{ url($link) }}" method="POST">

        <input type="hidden" name="id_res" value={{ $data["id"] }} >
        <input type="hidden" name="id_user" value={{ $book->id_user }} >

            <p> Date:  
                <select name="date" id="date">
                    <?php
                        $days = explode(",", $data["day"] );
                        foreach ($days as $day) {
                            if ($book->date == $day) {
                                echo "<option value=\"".$day."\" selected>".date("l d/m",strtotime($day))."</option>";
                            }
                            echo "<option value=\"".$day."\">".date("l d/m",strtotime($day))."</option>";
                        }
                    ?>
                </select>
             </p>



            <p> Party Size: 
            <select name="amout" id="amout">
                <?php
                    for ($i=1; $i <11 ; $i++) { 
                        if ($i == $book->amout) {
                            echo "<option value=\"".$i." \" selected>".$i."</option>";
                        }
                        else
                            echo "<option value=\"".$i."\">".$i."</option>";
                    }
                ?>
            </select> </p>

            <p> Time : 
                <!-- TIME [button] -->
                <select name="time" id="time">
                    <?php
                        $times = explode(",", $data["avail"] );
                        foreach ($times as $time) {
                            if ($book->time == $time) {
                                echo "<option value=\"".$time."\"  selected>".$time."</option>";
                            }
                            else
                                echo "<option value=\"".$time."\">".$time."</option>";
                        }
                    ?>
                </select>
            </p>

            <p> Area :
                <!-- AREA [dropdown] -->
                <select name="area" id="area">
                    <?php
                        $areas = explode(",", $data["area"] );
                        foreach ($areas as $area) {
                            if ($book->area == $area) {
                                echo "<option value=\"".$area."\" selected>".$area."</option>";
                            }
                            else
                                echo "<option value=\"".$area."\">".$area."</option>";
                        }
                    ?>
                </select> 
            </p>

            <p>{{ Form::submit('Submit') }}</p>

        </form>

    </body>
</html>
