@extends('layouts.base')

@section('body')

    <h2>{{$restaurant->name}}</h2>
    <div class="col-sm-3 col-md-3">
        <b>Name </b><br>
        <b>Addr </b><br>
        <b>DAY OPEN </b><br>
        <b>OPEN </b><br>
        <b>CLOSE </b><br>
        <b>Area </b><br>
        <b>ที่นั่งทั้งหมด </b><br>
        <b>เบอร์โทรศัพท์ </b><br>
    </div>

    <div class="col-sm-9 col-md-9">
        {{ $restaurant->name }}<br>
        {{ $restaurant->addr }}<br>
        {{$restaurant->day}} <br>
        {{$restaurant->time_open}}<br>
        {{$restaurant->time_close}}<br>
        {{ $restaurant->area }}<br>
        {{ $restaurant->seat }}<br>
        {{$restaurant->tel}}<br><br>
    </div>


	<h4> {{"<a href=\"/book/$restaurant->id\">BOOK!</a>"}} </h4>
            
    <?php
        $pics = explode(",", $restaurant->name_pic);
        if ($pics[0]=="") 
            echo "<img src=\"/pics/pic\" height=100% width=100% >";
            
        else {
            foreach ($pics as $pic) {
                echo "<img src=\"/pics/".$pic."\" height=100% width=100% ><br><br>";
            }
        }
    ?>
    <br>

@stop