@extends('layouts.base')

@section('body')
    <h2>Booked Details</h2>
                
    <div class="col-sm-3 col-md-3">
        <b>Book ID </b><br>
        <b>Restaurant </b><br>
        <b>Customer </b><br>
        <b>Date </b><br>
        <b>Time </b><br>
        <b>Area </b><br>
        <b>Amout </b><br>
        <b>จองเมื่อ </b><br>
        <b>แก้ไขครั้งสุดท้าย </b><br>
    </div>

    <div class="col-sm-6 col-md-6">
        {{ $book->id }}<br>
        {{ "<a href=\"/restaurant/$book->id_res\">$res_name</a>" }}<br>
        {{ $username }}<br>
        {{ $book->date }} <br>
        {{ $book->time }}<br>
        {{ $book->area }}<br>
        {{ $book->amout }}<br>
        {{ $book->created_at }}<br>
        {{ $book->updated_at }}<br><br>
    </div>

    <div class="col-sm-3 col-md-3">

        {{"<a href=\"/editBook/$book->id\">EDIT</a>"}} <br>
        {{"<a href=\"/cancel/$book->id\">CANCEL This Book</a><br>"}}
        <br><br><br><br><br><br><br>
    </div>

@stop