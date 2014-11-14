@extends('layouts.base')

@section('body')

    <div class="row">
                    
        <h2> Booking restaurant {{ $data["name"] }} : </h2>
        <br>

        @if ($errors->any())
            <ul style="color:red;">
                {{ implode('', $errors->all('<li>:message</li>')) }}
            </ul>
        @endif

        @if (Session::has('message'))
            <p style="color:green;">{{ Session::get('message') }}</p>
        @endif


        <form action="{{ url('booking_action') }}" method="POST">

            <input type="hidden" name="id_res" value={{ $data["id"] }} >
            <input type="hidden" name="id_user" value={{ Auth::id(); }} >

            <div class="col-sm-3 col-md-3">
                <b> Date </b><br><br>
                <b> Party Size </b><br><br>
                <b> Time </b><br><br>
                <b> Area </b><br><br>
            </div>

            <div class="col-sm-9 col-md-9">
                <!-- select date -->
                <select name="date" id="date"> 
                    <?php  $days = explode(",", $data["day"] ); ?>
                    @foreach ($days as $day) 
                        {{ "<option value=\"".$day."\">".date("l d/m",strtotime($day))."</option>" }}
                    @endforeach
                    
                </select> <br><br>

                <!-- party size -->
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
                </select> <br><br>

                <!-- select time -->
                <select name="time" id="time">
                    <?php    $times = explode(",", $data["avail"] ); ?>
                    @foreach ($times as $time) 
                        {{ "<option value=\"".$time."\">".$time."</option>" }}
                    @endforeach
                    
                </select> <br><br>

                <!-- select area -->
                <select name="area" id="area">
                    <?php   $areas = explode(",", $data["area"] ); ?>
                    @foreach ($areas as $area) 
                        {{ "<option value=\"".$area."\">".$area."</option>" }}
                    @endforeach
                    
                </select> <br><br>
            </div>

            <p>{{ Form::submit('Submit') }}</p>

        </form>
                    
    </div>
@stop