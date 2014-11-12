@extends('layouts.base')

@section('body')

    <div class="row">

        <h1>Login</h1>

        @if (Session::has('message'))

            <p style="color:green;">{{ Session::get('message') }}</p>

        @endif

        @if ($errors->any())

            <ul style="color:red;">

                {{ implode('', $errors->all('<li>:message</li>')) }}

            </ul>

        @endif

        <form class="form-horizontal" action="/login" method="POST">
            <fieldset>

                <div class="form-group">
                    <!-- Username -->
                    <label class="control-label" for="username">E-mail</label>
                    <div class="controls">
                        <input type="text" id="email" name="email" placeholder="e-mail address" class="input-xlarge form-control">
                    </div>
                </div>

                <div class="form-group">
                    <!-- Password-->
                    <label class="control-label" for="password">Password</label>
                    <div class="controls">
                        <input type="password" id="password" name="password" placeholder="password" class="input-xlarge form-control">
                    </div>
                </div>


                <div class="form-group">
                    <!-- Button -->
                    <div class="controls">
                        <button class="button button-small">Login</button>
                    </div>
                </div>
            </fieldset>
        </form>               

    </div>

@stop