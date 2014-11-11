<!doctype html>
<html lang="en-US"><!--<![endif]--><head>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Restaurant Booking | easy way to book a table </title>   

<meta name="description" content="Insert Your Site Description"> 

<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true">
<meta name="MobileOptimized" content="320">   

<!-- Mobile Internet Explorer ClearType Technology -->
<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

<!-- Bootstrap -->
<link href="/_include/css/bootstrap.min.css" rel="stylesheet">

<!-- Main Style -->
<link href="/_include/css/main.css" rel="stylesheet">

<!-- Supersized -->
<link href="/_include/css/supersized.css" rel="stylesheet">
<link href="/_include/css/supersized.shutter.css" rel="stylesheet">

<!-- FancyBox -->
<link href="/_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">

<!-- Font Icons -->
<link href="/_include/css/fonts.css" rel="stylesheet">

<!-- Shortcodes -->
<link href="/_include/css/shortcodes.css" rel="stylesheet">

<!-- Responsive -->
<link href="/_include/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="/_include/css/responsive.css" rel="stylesheet">

<!-- Supersized -->
<link href="/_include/css/supersized.css" rel="stylesheet">
<link href="/_include/css/supersized.shutter.css" rel="stylesheet">

<!-- Google Font -->
<link href="http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900" rel="stylesheet" type="text/css">

<!-- Fav Icon -->
<link rel="shortcut icon" href="#">

<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="#">
<link rel="apple-touch-icon" sizes="72x72" href="#">
<link rel="apple-touch-icon" sizes="144x144" href="#">

<!-- Modernizr -->
<script src="/_include/js/modernizr.js"></script>

<!-- Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'Insert Your Code']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- End Analytics -->

<!-- get dot li out-->
<style type="text/css">
    li {
        list-style-type:none; 
    }
</style>

</head>


<body>

<!-- This section is for Splash Screen -->
<div class="ole">
<section id="jSplash">
    <div id="circle"></div>
</section>
</div>
<!-- End of Splash Screen -->



<!-- Header -->
<header>
    <div class="sticky-nav">
        <a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
        
        <div id="logo">
            <a id="goUp" href="/" title="Eat with me">EatWME</a>
        </div>
        
        <nav id="menu">
            <ul id="menu-nav">
                <li><form class="form-inline " action="/index.php/search" method="POST">
                    <span class="form-group">
                          <input type="text" class="form-control" placeholder="seach name restaurant..." name="str" id="str" width=20%>
                          <button type="submit" class="button button-mini">
                          <i class="font-icon-search"></i>
                          </button>
                    </span>
                    
                </form></li>
                <li><a href="/index.php/logout_action" class="external">Logout</a></li>
                <li><a href="#about">About Us</a></li>
            </ul>
        </nav>
        
    </div>
</header>
<!-- End Header -->

<!-- Our Work Section -->
<div id="work" class="page">
    <div class="container">
        <!-- Title Page -->
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="title-page">
                    <h2 class="title">Eat With ME</h2>
                    <h3 class="title-description">easy way to book a table !</h3>
                </div>
            </div>
        </div>
        <!-- End Title Page -->
        
        <!-- Portfolio Projects -->
        <div class="row">
            <div class="col-sm-3 col-md-3">
                <nav id="options" class="work-nav">
                    <li class="type-work">Menu</li>

                    <!-- collape list in Listing -->
                    <div class="accordion" id="leftMenu">
                        <?php $id=Auth::id();?>
                        {{"<div class=\"accordion-group\">
                                <div class=\"\">
                                    <a data-parent=\"#leftMenu\" class=\"external\" href=\"/profile/$id\">
                                        <i class=\"icon-home\"></i> My Profile 
                                    </a>
                                </div>
                            </div>

                            <div class=\"accordion-group\">
                            <div class=\"\">
                                <a data-parent=\"#leftMenu\" class=\"external\" href=\"/index.php/show/$id \">
                                  <i class=\"icon-home\"></i> Booked lists 
                                </a>
                          </div>
                        </div>

                        <div class=\"accordion-group\">
                            <div class=\"\">
                                <a data-parent=\"#leftMenu\" class=\"external\" href=\"/index.php/showRes/$id\">
                                  <i class=\"icon-home\"></i> My Restaurants
                                </a>
                          </div>
                        </div>

                        <div class=\"accordion-group\">
                        <div class=\"\">
                            <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#leftMenu\" href=\"#collapseFour\">
                                <i class=\"icon-list-alt\"></i> My Restaurants (new)
                            </a>
                        </div>
                        <div id=\"collapseFour\" class=\"accordion-body collapse\" style=\"height: 0px; \">
                            <div class=\"accordion-inner\">
                                <ul>
                                    <li>This is one</li>
                                    <li>This is two</li>
                                    <li>This is Three</li>
                                </ul>                 
                            </div>
                        </div>
                    </div>

                    <div class=\"accordion-group\">
                            <div class=\"\">
                                <a data-parent=\"#leftMenu\" class=\"external\" href=\"/index.php/regisres \">
                                  <i class=\"icon-home\"></i> Open Restaurant! 
                                </a>
                          </div>
                        </div>

                        <div class=\"accordion-group\">
                                <div class=\"\">
                                    <a data-parent=\"#leftMenu\" class=\"external\" href=\"/index.php/edit/$id\">
                                        <i class=\"icon-home\"></i> Edit Profile 
                                    </a>
                                </div>
                            </div>

                        <div class=\"accordion-group\">
                            <div class=\"\">
                                <a data-parent=\"#leftMenu\" class=\"external\" href=\"# \">
                                  <i class=\"icon-home\"></i> About Us
                                </a>
                          </div>"}}

                </div>
           </nav>
        </div>

<!-- =======================================end nav========================================= -->
            
            <div class="col-sm-9 col-md-9">
                <div class="row">
                    
                    <h2> Edit Restaurant </h2>
                    <br>

                    @if ($errors->any())

                        <ul style="color:red;">

                            {{ implode('', $errors->all('<li>:message</li>')) }}

                        </ul>

                    @endif

                    @if (Session::has('message'))

                        <p style="color:green;">{{ Session::get('message') }}</p>

                    @endif


                    {{"<form class=\"form-horizontal\" action=\"/editRes_action/$restaurant->id\" method=\"POST\">"}}
                        <fieldset>
                             
                          <div class="form-group">
                            
                            <label class="control-label" for="name">Name</label>
                            <div class="controls">
                              {{"<input type=\"text\" id=\"name\" name=\"name\" value=\"$restaurant->name\" class=\"input-xlarge form-control\" style=\"width: 40%;\">"}}
                            </div>
                          </div>
     
                          <div class="form-group">
                            
                            <label class="control-label" for="addr">Address</label>
                            <div class="controls">
                              {{"<input type=\"textarea\" id=\"addr\" name=\"addr\" value=\"$restaurant->addr\" class=\"input-xlarge form-control\">"}}
                            </div>
                          </div>


                          <div class="form-group">
                            
                            <label class="control-label" for="day">Available days</label>
                            <div class="controls">
                                {{ Form::checkbox('day[]', 'Sunday', false) }}
                                {{ Form::label('sun', 'Sunday') }} <br>

                                {{ Form::checkbox('day[]', 'Monday', false) }}
                                {{ Form::label('mon', 'Monday') }}<br>

                                {{ Form::checkbox('day[]', 'Tuesday', false) }}
                                {{ Form::label('tue', 'Tuesday') }}<br>

                                {{ Form::checkbox('day[]', 'Wednesday', false) }}
                                {{ Form::label('wed', 'Wednesday') }}<br>

                                {{ Form::checkbox('day[]', 'Thursday', false) }}
                                {{ Form::label('thu', 'Thursday') }}<br>

                                {{ Form::checkbox('day[]', 'Friday', false) }}
                                {{ Form::label('fri', 'Friday') }}<br>

                                {{ Form::checkbox('day[]', 'Saturday', false) }}
                                {{ Form::label('sat', 'Saturday') }}<br><br>
                            </div>
                          </div>

                          <div class="form-group">
                            
                            <label class="control-label" for="time_open">OPEN</label>
                            <div class="controls">
                                <select name="time_open" id="time_open">
                                    <?php
                                        foreach ($results as $result ) {
                                            if ($result == $restaurant->time_open) {
                                                echo "<option value=\"".$result."\" selected>".$result."</option>";
                                            }
                                            else
                                                echo "<option value=\"".$result."\">".$result."</option>";
                                        }
                                    ?>
                                </select> <br>
                            </div>
                          </div>

                          <div class="form-group">
                            
                            <label class="control-label" for="time_close">CLOSE</label>
                            <div class="controls">
                                <select name="time_close" id="time_close">
                                    <?php
                                        foreach ($results as $result ) {
                                            if ($result == $restaurant->time_close) {
                                                echo "<option value=\"".$result."\" selected>".$result."</option>";
                                            }
                                            else
                                                echo "<option value=\"".$result."\">".$result."</option>";
                                        }
                                    ?>
                                </select> <br>
                            </div>
                          </div>

                          <div class="form-group">
                            
                            <label class="control-label" for="areaList">Add area in your restaurant</label>
                            <div class="controls">
                                <select multiple name="areaList[]" id="areaList" size="8" style="width: 30%;"></select>

                                <p><input name="area" type="text" id="area" class="input-xlarge form-control" style="width: 30%;"> <button type="button" onclick="addArea()">Add</button> </p>
                                <p>Click the button to add area in your Restaurant to list.</p>
                                <p><b>Note :</b> ถ้าในร้านมีแค่มุมเดียว ใส่ "มุมทั่วไป"</p>



                                <p>จำนวนที่นั่งในแต่ละมุม :</p>
        
                                <select multiple name="seatList[]" id="seatList" size="8" style="width: 30%;"></select>

                                <p><input name="seat" type="text" id="seat" class="input-xlarge form-control" style="width: 30%;"> <button type="button" onclick="addSeat()">Add</button> </p>
                                <p><b>Note :</b> ใส่ให้ครบทุก area</p>



                                <script>
                                    function addArea() {
                                        var x = document.getElementById("areaList");
                                        var option = document.createElement("option");
                                        option.text = document.getElementById("area").value;
                                        x.add(option);
                                        document.getElementById("area").value = "";

                                        for (var i=0; i<x.options.length; i++) {
                                            x.options[i].selected = true;
                                        }
                                    }

                                </script>

                                <script>
                                    function addSeat() {
                                        var x = document.getElementById("seatList");
                                        var option = document.createElement("option");
                                        option.text = document.getElementById("seat").value;
                                        x.add(option);
                                        document.getElementById("seat").value = "";

                                        for (var i=0; i<x.options.length; i++) {
                                            x.options[i].selected = true;
                                        }
                                    }

                                </script>
                            </div>
                          </div>

                          <div class="form-group">
                            
                            <label class="control-label" for="tel">Tel Number</label>
                            <div class="controls">
                              {{"<input type=\"text\" id=\"tel\" name=\"tel\" value=\"$restaurant->tel\" class=\"input-xlarge form-control\" style=\"width: 40%;\">"}}
                            </div>
                          </div>
     
     
                          <div class="form-group">
                            <!-- Button -->
                            <div class="controls">
                              <button class="button button-small">Submit</button>
                            </div>
                          </div>
                        </fieldset>
                      </form>
                    
                </div>
            </div>
        </div>
        
    </div>
</div>




<!-- Footer -->
<footer>
    <p class="credits">credit: ©2013 Brushed. <a href="http://themes.alessioatzeni.com/html/brushed/" title="Brushed | Responsive One Page Template">Brushed Template</a> by <a href="http://www.alessioatzeni.com/" title="Alessio Atzeni | Web Designer &amp; Front-end Developer">Alessio Atzeni</a></p>
</footer>
<!-- End Footer -->

<!-- Back To Top -->
<a id="back-to-top" href="#">
    <i class="font-icon-arrow-simple-up"></i>
</a>
<!-- End Back to Top -->


<!-- Js -->
<script src="/_include/js/jquery-1.11.1.min.js"></script> <!-- jQuery Core -->
<script src="/_include/js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="/_include/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
<script src="/_include/js/waypoints.js"></script> <!-- WayPoints -->
<script src="/_include/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
<script src="/_include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
<script src="/_include/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
<script src="/_include/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
<script src="/_include/js/jquery.tweet.js"></script> <!-- Tweet -->
<script src="/_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<script src="/_include/js/main.js"></script> <!-- Default JS -->
<!-- End Js -->


</div></body></html>