@extends('layouts.base')

@section('body')

<h2>Search Result {{$str}} </h2>
<table class="table table-hover">
    <thead>
       <tr>
          <th>Name</th>
          <th>Address</th>
          <th>Tel</th>
      </tr>
  </thead>

  <tbody>


        @foreach ($restaurants as $restaurant) 
            <?php $link = "/index.php/restaurant/".$restaurant->id; ?>
            {{ "<tr>" }}
            {{ "<td><a href=\"".$link."\">".$restaurant->name."</a></td>" }}
            {{ "<td>".$restaurant->addr."</td>" }}
            {{ "<td>".$restaurant->tel."</td>" }}
            {{ "</tr>" }}
        @endforeach

    </tbody>
</table>

@stop