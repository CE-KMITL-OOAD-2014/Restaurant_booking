@extends('layouts.base')

@section('body')
    <h2> Booked Lists </h2>
    <table class="table table-hover">
  		<thead>
  			<tr>
  				<th>Restaurant</th>
  				<th>Date</th>
  				<th>Time</th>
  			</tr>
  		</thead>

  		<tbody>

  			<?php  $i=0; ?>
  			@if ($currentBookeds[0]!="") 
                @foreach ($currentBookeds as $currentBooked) 
                    <?php $link = "/index.php/showBook/".$currentBooked->id; ?>
                    {{ "<tr>" }}
                    {{ "<td><a href=\"".$link."\">".$restaurantsName[$i]."</a></td>" }}
                    {{ "<td>".$currentBooked->date."</td>" }}
                    {{ "<td>".$currentBooked->time."</td>" }}
                    {{ "</tr>" }}
                    <?php $i++; ?>
                @endforeach

            @else
                {{ "<tr><td>No Booked!</td></tr>" }}
            @endif
            
  			
  		</tbody>
	</table>
    
@stop