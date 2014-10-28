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


            <p> Date:  <input type="date" name="date"> </p>
            <p> Party Size: 
            <select>
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
                <option value="max">Larger</option>
            </select> </p>

            <p> Time : 
                <!-- TIME [button] -->
                <select>
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
                <select>
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
