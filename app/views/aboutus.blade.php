@extends('layouts.base')

@section('body')

    <div class="row">

        @if ($errors->any())
            <h4><ul style="color:red;">
                {{ implode('', $errors->all('<li>:message</li>')) }}
            </ul></h4>
        @endif

        @if (Session::has('message'))
            <h4 style="color:green;">{{ Session::get('message') }}</h4>
        @endif

        <center><h1>About Us</h1></center>
        <br>
        <table>

            <!-- Tuck Info -->
            <tr>
                <td class="col-sm-12 col-md-6">
                    <img src="/img/tuck.JPG" width="60%" >
                </td>
                <td class="col-sm-12 col-md-6">
                    <h2>  <== &nbsp;&nbsp;&nbsp; Tuck</h2>
                    <p>Rinlapat Loetthanakulpong</p>
                    <p>Computer Engineeing</p>
                    <p>King Mongkut's Institute of Technology Ladkrabang</p>
                </td>
            </tr>

            <!-- View Info -->
            <tr>
                <td class="col-sm-12 col-md-6">
                    <h2>View &nbsp;&nbsp;&nbsp; ==> </h2>
                    <p>Wachiraya Tantiwatthanarom</p>
                    <p>Computer Engineeing</p>
                    <p>King Mongkut's Institute of Technology Ladkrabang</p>
                </td>
                <td class="col-sm-12 col-md-6">
                    <img src="/img/view.jpg" width="60%">
                </td>
            </tr>
        </table>
    </div>

@stop