@extends('layouts.base')

@section('body')

<div class="row">

    <h1>Create Account</h1>

    @if (Session::has('message'))

        <p style="color:green;">{{ Session::get('message') }}</p>

    @endif

    @if ($errors->any())

        <ul style="color:red;">

            {{ implode('', $errors->all('<li>:message</li>')) }}

        </ul>

    @endif

    <form class="form-horizontal" action="/index.php/register_action" method="POST">
        <fieldset>

            <div class="form-group">

                <label class="control-label" for="name">Name</label>
                <div class="controls">
                    <input type="text" id="name" name="name" placeholder="" class="input-xlarge form-control">
                </div>
            </div>

            <div class="form-group">

                <label class="control-label" for="lastname">Lastname</label>
                <div class="controls">
                    <input type="text" id="lastname" name="lastname" placeholder="" class="input-xlarge form-control">
                </div>
            </div>

            <div class="form-group">

                <label class="control-label" for="password">Password</label>
                <div class="controls">
                    <input type="password" id="password" name="password" placeholder="" class="input-xlarge form-control">
                </div>
            </div>

            <div class="form-group">

                <label class="control-label" for="cpassword">Confirm Password</label>
                <div class="controls">
                    <input type="password" id="cpassword" name="cpassword" placeholder="" class="input-xlarge form-control">
                </div>
            </div>

            <div class="form-group">

                <label class="control-label" for="email">E-mail</label>
                <div class="controls">
                    <input type="text" id="email" name="email" placeholder="" class="input-xlarge form-control">
                </div>
            </div>

            <div class="form-group">

                <label class="control-label" for="tel">Tel Number</label>
                <div class="controls">
                    <input type="text" id="tel" name="tel" placeholder="" class="input-xlarge form-control">
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