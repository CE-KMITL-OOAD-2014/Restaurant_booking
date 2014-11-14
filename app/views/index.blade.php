@extends('layouts.baseIndex')

@section('homeslider')

    <!-- Homepage Slider -->
    <div id="home-slider">  
        <div class="overlay"></div>

            <div class="slider-text">
                <div id="slidecaption">
                
                </div>
            </div>   
    
            <div class="control-nav">
                <a id="prevslide" class="load-item"><i class="font-icon-arrow-simple-left"></i></a>
                <a id="nextslide" class="load-item"><i class="font-icon-arrow-simple-right"></i></a>
                <ul id="slide-list"></ul>
        
                <a id="nextsection" href="#work"><i class="font-icon-arrow-simple-down"></i></a>
            </div>
    </div>
    <!-- End Homepage Slider -->
@stop


@section('body')

@if ($pics[0]!="")
    <section id="projects">
        <ul id="thumbs">                        
			
			
            	<!-- show thumbs of random picture of restaurants -->				
            	@for ($i=0 ; $i<count($pics) ; $i++) 
                	{{"<li class=\"item-thumbs span3 design\">
                    	<a class=\"hover-wrap fancybox\" data-fancybox-group=\"gallery\" title=\"".$restaurants[$i]->name."\" href=\"/restaurant/".$restaurants[$i]->id."\">
                    	<span class=\"overlay-img\"></span>
                    	<span class=\"overlay-img-thumb font-icon-plus\"></span>
                    	</a>
                                                                                                    
                    	<img src=\"".$pics[$i]."\" alt=\"".$restaurants[$i]->addr." <br> ".$restaurants[$i]->tel."\">
                    	</li>"}}
            	@endfor
        </ul>
    </section>
@else
    <h2 style="color:green">No restaurant.</h2>
@endif

@stop
