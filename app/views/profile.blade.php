@extends('layouts.base')

@section('body')

<h2>Profile User {{$user->name}} </h2>

<div class="col-sm-3 col-md-3">
    <b>Name </b><br>
    <b>Lastname </b><br>
    <b>E-mail </b><br>
    <b>Tel </b><br>
    <b>เป็นสมาชิกเมื่อ </b><br>
</div>

<div class="col-sm-9 col-md-9">
    {{ $user->name }}<br>
    {{ $user->lastname }}<br>
    {{ $user->email }} <br>
    {{ $user->tel }}<br>
    {{ $user->created_at }}<br><br>
</div>
@stop