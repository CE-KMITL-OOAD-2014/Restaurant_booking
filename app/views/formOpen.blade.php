<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
    </head>

    <body>

        <h2> Register Restaurant : </h2>

        @if ($errors->any())

            <ul style="color:red;">

                {{ implode('', $errors->all('<li>:message</li>')) }}

            </ul>

        @endif

        @if (Session::has('message'))

            <p>{{ Session::get('message') }}</p>

        @endif

        <p> Your ID : {{$id = Auth::id();}} </p>

        <form action="{{ url('openRes_action') }}" method="POST">

            <p>Restaurant Name :</p>

            <p>{{ Form::text('name') }}</p>

            <p>Address :</p>

            <textarea rows="10" cols="30"></textarea>

            <p>Date Open :</p>
            
            {{ Form::checkbox('sun', '1', false) }}
            {{ Form::label('sun', 'Sunday') }} <br>

            {{ Form::checkbox('mon', '2', false) }}
            {{ Form::label('mon', 'Monday') }}<br>

            {{ Form::checkbox('tue', '3', false) }}
            {{ Form::label('tue', 'Tuesday') }}<br>

            {{ Form::checkbox('wed', '4', false) }}
            {{ Form::label('wed', 'Wednesday') }}<br>

            {{ Form::checkbox('thu', '5', false) }}
            {{ Form::label('thu', 'Thurseday') }}<br>

            {{ Form::checkbox('fri', '6', false) }}
            {{ Form::label('fri', 'Friday') }}<br>

            {{ Form::checkbox('Sat', '7', false) }}
            {{ Form::label('sat', 'Saturday') }}<br><br>



            <p>Select a time OPEN :  &nbsp;&nbsp;&nbsp;&nbsp;  <input type="time" name="open_time"> </p>
            <p>Select a time CLOSE :  &nbsp;&nbsp;&nbsp;  <input type="time" name="close_time"> </p>
            <br>

            
            <p>Area in your restaurant :</p>

            <!-- <textarea rows="10" cols="30"></textarea>
 -->

                <!-- {{ Form::select('size[]', array('L' => 'Large', 'M' => 'Medium', 'S' => 'Small'), array('S', 'M'), array('multiple')); }} -->
                <select multiple name="areaList[]" id="areaList" size="8" style="width: 200px;">
                    <!-- <option selected>Apple</option>
                    <option selected>Pear</option>
                    <option selected>Banana</option>
                    <option selected>Orange</option> -->
                </select>

            <p><input name="area" type="text" id="area"> <button type="button" onclick="addArea()">Add</button> <button type="button" onclick="myFunction()">Remove selected item</button></p>
            <p>Click the button to add area in your Restaurant to list.</p>
            <p><b>Note :</b> ถ้าในร้านมีแค่มุมเดียว ใส่ "มุมทั่วไป"</p>

            

            <script>
                function myFunction() {
                    var x = document.getElementById("areaList");
                    x.remove(x.selectedIndex);
                }
            </script>

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



            <p>Tel number :</p>

            <p>{{ Form::text('tel') }}</p>

            <p>{{ Form::submit('Submit') }}</p>

        </form>

    </body>
</html>
