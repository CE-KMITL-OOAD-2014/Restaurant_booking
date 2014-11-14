@extends('layouts.base')

@section('body')

    <div class="row">

        <h2> Register Restaurant </h2>
        <br>

        @if ($errors->any())

            <ul style="color:red;">

                {{ implode('', $errors->all('<li>:message</li>')) }}

            </ul>

        @endif

        @if (Session::has('message'))

            <p style="color:green;">{{ Session::get('message') }}</p>

        @endif


        <form class="form-horizontal" action="/regisres_action" method="POST">
            <fieldset>

                <div class="form-group">

                    <label class="control-label" for="name">Name</label>
                    <div class="controls">
                        <input type="text" id="name" name="name" placeholder="" class="input-xlarge form-control" style="width: 40%;">
                    </div>
                </div>

                <div class="form-group">

                    <label class="control-label" for="addr">Address</label>
                    <div class="controls">
                        <input type="textarea" id="addr" name="addr" placeholder="" class="input-xlarge form-control">
                    </div>
                </div>


                <div class="form-group">

                    <label class="control-label" for="day">Available days</label>
                    <div class="controls">
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
                    </div>
                </div>

                <div class="form-group">

                    <label class="control-label" for="time_open">OPEN</label>
                    <div class="controls">
                        <select name="time_open" id="time_open">

                            @foreach ($results as $result ) 
                                {{ "<option value=\"".$result."\">".$result."</option>" }}
                            @endforeach
                        </select> <br>
                    </div>
                </div>


                <div class="form-group">

                    <label class="control-label" for="time_close">CLOSE</label>
                    <div class="controls">
                        <select name="time_close" id="time_close">
            
                            @foreach ($results as $result ) 
                                {{ "<option value=\"".$result."\">".$result."</option>" }}
                            @endforeach
                        </select> <br>
                    </div>
                </div>

                <div class="form-group">

                    <label class="control-label" for="areaList">Add area in your restaurant</label>
                    <div class="controls">
                        <select multiple name="areaList[]" id="areaList" size="8" style="width: 30%;"></select>
                        <p><input name="area" type="text" id="area" class="input-xlarge form-control" style="width: 30%;"> <button type="button" onclick="addArea()">Add</button> </p>
                        <p>Click the button to add area in your Restaurant to list.</p>
                        <p><b>Note :</b> ถ้าในร้านมีแค่มุมเดียว ใส่ "มุมทั่วไป"</p>

                        <p><b>จำนวนที่นั่งในแต่ละมุม :</b></p>
                        <select multiple name="seatList[]" id="seatList" size="8" style="width: 30%;"></select>
                        <p><input name="seat" type="text" id="seat" class="input-xlarge form-control" style="width: 30%;"> <button type="button" onclick="addSeat()">Add</button> </p>
                        <p><b>Note :</b> ใส่ให้ครบทุก area</p>


                        <script>
                            function addArea() {
                                var x = document.getElementById("areaList");
                                var option = document.createElement("option");
                                option.text = document.getElementById("area").value;
                                x.add(option);
                                document.getElementById("area").value = "";

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

                                for (var i=0; i<x.options.length; i++) {
                                    x.options[i].selected = true;
                                }
                            }
                        </script>
                    </div>
                </div>

                <div class="form-group">

                    <label class="control-label" for="tel">Tel Number</label>
                    <div class="controls">
                        <input type="text" id="tel" name="tel" placeholder="" class="input-xlarge form-control" style="width: 40%;">
                    </div>
                </div>


                <div class="form-group">

                    <div class="controls">
                        <button class="button button-small">Submit</button>
                    </div>
                </div>
            </fieldset>

        </form>

    </div>
    
@stop
