@extends('layouts.base')

@section('body')

    <h3> Manage "{{$restaurant->name}}" : </h3>

    @if ($errors->any())

        <ul style="color:red;">
            {{ implode('', $errors->all('<li>:message</li>')) }}
        </ul>

    @endif

    @if (Session::has('message'))

        <p style="color:green;">{{ Session::get('message') }}</p>

    @endif

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

    <div class="col-sm-6 col-md-6">
        {{ $restaurant->name }}<br>
        {{ $restaurant->addr }}<br>
        {{$restaurant->day}} <br>
        {{$restaurant->time_open}}<br>
        {{$restaurant->time_close}}<br>
        {{ $restaurant->area }}<br>
        {{ $restaurant->seat }}<br>
        {{$restaurant->tel}}<br><br>
    </div>

    <div class="col-sm-3 col-md-3">
        {{"<a href=\"/index.php/editRes/$restaurant->id\">EDIT</a><br>"}}
        {{"<a href=\"/index.php/delete/$restaurant->id\">DELETE This restaurant</a><br>"}}
        <br><br><br><br><br><br><br>
    </div>

    <br>

    Upload picture : 

    {{ "<form action=\"/index.php/uploadpic/$restaurant->id\"" }}
        method="POST"
        enctype="multipart/form-data">
        <input type="file" name="pic" >
        <input type="submit" >          
    </form><br>
    
    <br><br>
    
    <h4>Booked List :</h4>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Customer</th>
                <th>Date</th>
                <th>Time</th>
                <th>Area</th>
                <th>Amout</th>
                <th>Details</th>
            </tr>
        </thead>

        <tbody>

            <?php $i=0; ?>
            @if ($currentBookeds[0]!="") 
                @foreach ($currentBookeds as $currentBooked) 
                    <?php $details = "/index.php/showBook/".$currentBooked->id;
                    $link = "/index.php/profile/".$currentBooked->id_user; ?>
                    {{ "<tr>" }}
                    {{ "<td><a href=\"".$link."\">".$customersName[$i]."</a></td>" }}
                    {{ "<td>".$currentBooked->date."</td>" }}
                    {{ "<td>".$currentBooked->time."</td>" }}
                    {{ "<td>".$currentBooked->area."</td>" }}
                    {{ "<td>".$currentBooked->amout."</td>" }}
                    {{ "<td><a href=\"$details\">Details</a></td>" }}
                    {{ "</tr>" }}
                    <?php $i++; ?>
                @endforeach

            @else
                {{ "<tr><td>No Booked!</td></tr>" }}
            @endif

        </tbody>
    </table>
    <br><br>


    <?php $pics = explode(",", $restaurant->name_pic); ?> 
    @if ($pics[0]=="") 
        {{ "<img src=\"/pics/pic\" height=100% width=100% ><br><br>" }}
        
    @else 
        @foreach ($pics as $pic) 
            {{ "<img src=\"/pics/".$pic."\" height=100% width=100% ><br><br>" }}
        @endforeach
    @endif

    <br>
        
@stop