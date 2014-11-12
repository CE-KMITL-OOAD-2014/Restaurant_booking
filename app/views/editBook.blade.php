@extends('layouts.base')

@section('body')

    <div class="row">

        <h2> Edit Book ID {{$book->id}} : </h2>
        <br>

        @if ($errors->any())
            <ul style="color:red;">
                {{ implode('', $errors->all('<li>:message</li>')) }}
            </ul>
        @endif

        @if (Session::has('message'))
            <p style="color:green;">{{ Session::get('message') }}</p>
        @endif


        <?php $link = "editBook_action/".$book->id ?>
        <form action="{{ url($link) }}" method="POST">
            <input type="hidden" name="id_res" value={{ $data["id"] }} >
            <input type="hidden" name="id_user" value={{ $book->id_user }} >
            
            <div class="col-sm-3 col-md-3">
                <b> Date </b><br><br>
                <b> Party Size </b><br><br>
                <b> Time </b><br><br>
                <b> Area </b><br><br>
            </div>

            <div class="col-sm-9 col-md-9">
                <!-- date -->
                <select name="date" id="date">
                    
                    <?php $days = explode(",", $data["day"] ); ?>
                    @foreach ($days as $day) 
                        @if ($book->date == $day) 
                            <!-- set default from old info -->
                            {{ "<option value=\"".$day."\" selected>".date("l d/m",strtotime($day))."</option>" }}
                        
                        @else
                            {{ "<option value=\"".$day."\">".date("l d/m",strtotime($day))."</option>" }}
                        @endif
                    @endforeach

                </select> <br><br>

                <!-- party size -->
                <select name="amout" id="amout">
                    
                    @for ($i=1; $i <11 ; $i++) 
                        @if ($i == $book->amout) 
                            {{ "<option value=\"".$i." \" selected>".$i."</option>" }}
                        
                        @else
                            {{ "<option value=\"".$i."\">".$i."</option>" }}
                        @endif
                    @endfor
                    
                </select> <br><br>

                <!-- time -->
                <select name="time" id="time">
                    <?php  $times = explode(",", $data["avail"] ); ?>
                    @foreach ($times as $time) 
                        @if ($book->time == $time) 
                            {{ "<option value=\"".$time."\"  selected>".$time."</option>" }}
                        
                        @else
                            {{ "<option value=\"".$time."\">".$time."</option>" }}
                        @endif
                    @endforeach
                    
                </select> <br><br>

                <!-- area -->
                <select name="area" id="area">
                    <?php $areas = explode(",", $data["area"] ); ?>
                    @foreach ($areas as $area) 
                        @if ($book->area == $area) 
                            {{ "<option value=\"".$area."\" selected>".$area."</option>" }}
                         @else
                            {{ "<option value=\"".$area."\">".$area."</option>" }}
                        @endif
                    @endforeach
                    
                    
                </select> <br><br>
            </div>

            <p>{{ Form::submit('Submit') }}</p>

        </form>

    </div>

@stop