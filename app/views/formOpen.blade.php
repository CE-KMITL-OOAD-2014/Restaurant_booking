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



        {{ Form::open(array('url' => 'openRes_action')) }}

            <p>Restaurant Name :</p>

            <p>{{ Form::text('name') }}</p>

            <p>Address :</p>

            <p>{{ Form::text('address') }}</p>

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
            {{ Form::label('Sat', 'saturday') }}<br>


            <!--    เวลาเปิดปิด
                    มุม
            -->
            <p>Tel number :</p>

            <p>{{ Form::text('tel') }}</p>

            <p>{{ Form::submit('Submit') }}</p>

        {{ Form::close() }}

    </body>
</html>
