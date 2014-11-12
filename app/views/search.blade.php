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

    <?php
        if ($str=="ALL") {
            foreach ($restaurants as $restaurant) {

                $link = "/index.php/restaurant/".$restaurant->id;
                echo "<tr>";
                echo "<td><a href=\"".$link."\">".$restaurant->name."</a></td>";
                echo "<td>".$restaurant->addr."</td>";
                echo "<td>".$restaurant->tel."</td>";
                echo "</tr>";
            }
        }

        foreach ($restaurants as $restaurant) {
            if (strrchr($restaurant->name, $str)) {
                $link = "/index.php/restaurant/".$restaurant->id;
                echo "<tr>";
                echo "<td><a href=\"".$link."\">".$restaurant->name."</a></td>";
                echo "<td>".$restaurant->addr."</td>";
                echo "<td>".$restaurant->tel."</td>";
                echo "</tr>";
            }
        }
    ?>
    </tbody>
</table>

@stop