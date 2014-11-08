<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
    </head>

    <body>

        <h2> Register Restaurant {{ $restaurant->id }} : </h2>

        @if ($errors->any())

            <ul style="color:red;">

                {{ implode('', $errors->all('<li>:message</li>')) }}

            </ul>

        @endif

        @if (Session::has('message'))

            <p>{{ Session::get('message') }}</p>

        @endif

        <p> Your ID : {{$id = Auth::id();}} </p>

        <?php $link = "editRes_action/".$restaurant->id ?>
        <form action="{{ url($link) }}" method="POST">

            <p>Restaurant Name :</p>

            <p>{{ Form::text('name',$restaurant->name) }}</p>

            <p>Address :</p>

            <textarea name="addr" id="addr" rows="10" cols="30" > {{$restaurant->addr}} </textarea>

            <p>Date Open :</p>
            
            {{ Form::checkbox('day[]', 'Sunday', false) }}
            {{ Form::label('sun', 'Sunday') }} <br>

            {{ Form::checkbox('day[]', 'Monday', false) }}
            {{ Form::label('mon', 'Monday') }}<br>

            {{ Form::checkbox('day[]', 'Tuesday', false) }}
            {{ Form::label('tue', 'Tuesday') }}<br>

            {{ Form::checkbox('day[]', 'Wednesday', false) }}
            {{ Form::label('wed', 'Wednesday') }}<br>

            {{ Form::checkbox('day[]', 'Thursday', false) }}
            {{ Form::label('thu', 'Thursday') }}<br>

            {{ Form::checkbox('day[]', 'Friday', false) }}
            {{ Form::label('fri', 'Friday') }}<br>

            {{ Form::checkbox('day[]', 'Saturday', false) }}
            {{ Form::label('sat', 'Saturday') }}<br><br>



            
            <p>Select a time OPEN :  

                <select name="time_open" id="time_open">
                    <?php
                        foreach ($results as $result ) {
                            if ($result == $restaurant->time_open) {
                                echo "<option value=\"".$result."\" selected>".$result."</option>";
                            }
                            else
                                echo "<option value=\"".$result."\">".$result."</option>";
                        }
                    ?>
                </select> </p>

            <p>Select a time CLOSE :  
                <select name="time_close" id="time_close">
                    <?php
                        foreach ($results as $result ) {
                            if ($result == $restaurant->time_close) {
                                echo "<option value=\"".$result."\" selected>".$result."</option>";
                            }
                            else
                                echo "<option value=\"".$result."\">".$result."</option>";
                        }
                    ?>
                </select> </p>

            
            <p>Area in your restaurant :</p>

                <select multiple name="areaList[]" id="areaList" size="8" style="width: 200px;">

                </select>

            <p><input name="area" type="text" id="area"> <button type="button" onclick="addArea()">Add</button> </p>
            <p>Click the button to add area in your Restaurant to list.</p>
            <p><b>Note :</b> ถ้าในร้านมีแค่มุมเดียว ใส่ "มุมทั่วไป"</p>



            <p>จำนวนที่นั่งในแต่ละมุม :</p>
        
                <select multiple name="seatList[]" id="seatList" size="8" style="width: 100px;">
                </select>

            <p><input name="seat" type="text" id="seat"> <button type="button" onclick="addSeat()">Add</button> </p>
            <p><b>Note :</b> ใส่ให้ครบทุก area</p>



            <script>
                function addArea() {
                    var x = document.getElementById("areaList");
                    var option = document.createElement("option");
                    option.text = document.getElementById("area").value;
                    x.add(option);
                    document.getElementById("area").value = "";

                    //if (!hasOptions(x)) { return; }
                    for (var i=0; i<x.options.length; i++) {
                        x.options[i].selected = true;
                    }
                }

            </script>

            <script>
                function addSeat() {
                    var x = document.getElementById("seatList");
                    var option = document.createElement("option");
                    option.text = document.getElementById("seat").value;
                    x.add(option);
                    document.getElementById("seat").value = "";

                    //if (!hasOptions(x)) { return; }
                    for (var i=0; i<x.options.length; i++) {
                        x.options[i].selected = true;
                    }
                }

            </script>



            <p>Tel number :</p>

            <p>{{ Form::text('tel',$restaurant->tel) }}</p>

            <p>Delete Picture coming soon!!!</p>


            <p>{{ Form::submit('Submit') }}</p>

        </form>

    </body>
</html>
