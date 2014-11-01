<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Booking</title>
    </head>

    <body>

        <h2> Booking restaurant {{ $data["name"] }} : </h2>

        @if ($errors->any())

            <ul style="color:red;">

                {{ implode('', $errors->all('<li>:message</li>')) }}

            </ul>

        @endif

        @if (Session::has('message'))

            <p>{{ Session::get('message') }}</p>

        @endif

        <p> Your ID : {{$id = Auth::id();}} </p>

        <form action="{{ url('booking_action') }}" method="POST">

        <input type="hidden" name="id_res" value={{ $data["id"] }} >
        <input type="hidden" name="id_user" value={{ $id }} >

            <p> Date:  <!-- <input type="date" name="date"> -->
                <select name="date" id="date">
                    <?php
                        $days = explode(",", $data["day"] );
                        foreach ($days as $day) {
                            echo "<option value=\"".$day."\">".$day."</option>";
                        }
                    ?>
                </select>
             </p>



            <p> Party Size: 
            <select name="amout" id="amout">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select> </p>

            <p> Time : 
                <!-- TIME [button] -->
                <select name="time" id="time">
                    <?php
                        $times = explode(",", $data["avail"] );
                        foreach ($times as $time) {
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
                            echo "<option value=\"".$area."\">".$area."</option>";
                        }
                    ?>
                </select> 
            </p>

            <p>{{ Form::submit('Submit') }}</p>

        </form>

    </body>
</html>
