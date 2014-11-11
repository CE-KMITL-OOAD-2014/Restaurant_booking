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
                          <input type="text" class="form-control" placeholder="seach name restaurant..." name="str" id="str" width=100%>
                          <button type="submit" class="button button-mini">
                          <i class="font-icon-search"></i>
                          </button>
                    </span>
                    
                </form></li>
                <!-- <li class="current"><a href="#home-slider">Home</a></li> -->

                <li><a href="register" class="external">Register</a></li>
                <li><a href="login" class="external">Login</a></li>
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
                    <li class="type-work">Restaurant Listings</li>

                    <!-- collape list in Listing -->
                    <div class="accordion" id="leftMenu">

                        <div class="accordion-group">
                            <div class="">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#">
                                  <i class="icon-home"></i> Featured Restaurants 
                                </a>
                          </div>
                        </div>

                        <!--panel cuisine-->
                        <div class="accordion-group">
                          <div class="">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseTwo">
                                <i class="icon-th"></i> Cuisine
                            </a>
                          </div>
                          <!--list in cuisine -->
                          <div id="collapseTwo" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                            <!-- Filter -->
                            <nav id="options" class="work-nav">
                                <ul id="filters" class="option-set" data-option-key="filter">
                                    <li><a href="#filter" data-option-value="*" class="selected">All</a></li> <!-- for all -->
                                    <li><a href="#filter" data-option-value=".photography">Location</a></li> <!-- photography=location -->
                                    <li><a href="#filter" data-option-value=".video">Video</a></li>
                                </ul>
                            </nav>
                            <!-- End Filter -->
                            </div>
                          </div>
                          <!-- End list in cuisine-->
                        </div>
                        <!--End panel cuisine -->

                        <!-- panel Lacation -->
                        <div class="accordion-group">
                            <div class="">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseThree">
                                    <i class="icon-th-list"></i> Lacation
                                </a>
                            </div>
                            <div id="collapseThree" class="accordion-body collapse" style="height: 0px; ">
                                <div class="accordion-inner">
                                    <!-- Filter -->
                                    <nav id="options" class="work-nav">
                                        <ul id="filters" class="option-set" data-option-key="filter">
                                            <li><a href="#filter" data-option-value="*" class="selected">All</a></li> <!-- for all -->
                                            <li><a href="#filter" data-option-value=".photography">Location</a></li> <!-- photography=location -->
                                            <li><a href="#filter" data-option-value=".video">Video</a></li>
                                        </ul>
                                    </nav>
                                    <!-- End Filter -->              
                                </div>
                            </div>
                        </div>
                        <!--End Lacation-->

                    <div class="accordion-group">
                        <div class="">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseFour">
                                <i class="icon-list-alt"></i> Forms
                            </a>
                        </div>
                        <div id="collapseFour" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <li>This is one</li>
                                    <li>This is two</li>
                                    <li>This is Three</li>
                                </ul>                 
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseFive">
                                <i class="icon-cog"></i> Plugins
                            </a>
                        </div>
                        <div id="collapseFive" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <li>This is one</li>
                                    <li>This is two</li>
                                    <li>This is Three</li>
                                </ul>                 
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseSix">
                                <i class="icon-file"></i> Templates
                            </a>
                        </div>
                        <div id="collapseSix" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <li>This is one</li>
                                    <li>This is two</li>
                                    <li>This is Three</li>
                                </ul>                 
                            </div>
                        </div>
                    </div>
                </div>
           </nav>
        </div>

<!-- =======================================end nav========================================= -->
            
            <div class="col-sm-9 col-md-9">
                <div class="row">
                    
                    <h2> Booking restaurant {{ $data["name"] }} : </h2>
                    <br>

                    @if ($errors->any())

                        <ul style="color:red;">

                            {{ implode('', $errors->all('<li>:message</li>')) }}

                        </ul>

                    @endif

                    @if (Session::has('message'))

                        <p style="color:green;">{{ Session::get('message') }}</p>

                    @endif


                    <form action="{{ url('booking_action') }}" method="POST">

                        <input type="hidden" name="id_res" value={{ $data["id"] }} >
                        <input type="hidden" name="id_user" value={{ Auth::id(); }} >

                        <div class="col-sm-3 col-md-3">
                            <b> Date </b><br><br>
                            <b> Party Size </b><br><br>
                            <b> Time </b><br><br>
                            <b> Area </b><br><br>
                        </div>

                        <div class="col-sm-9 col-md-9">
                            <!-- select date -->
                            <select name="date" id="date">
                                <?php
                                    $days = explode(",", $data["day"] );
                                    foreach ($days as $day) {
                                        echo "<option value=\"".$day."\">".date("l d/m",strtotime($day))."</option>";
                                    }
                                ?>
                            </select> <br><br>

                            <!-- party size -->
                            <select name="amout" id="amout">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select> <br><br>

                            <!-- select time -->
                            <select name="time" id="time">
                                <?php
                                    $times = explode(",", $data["avail"] );
                                    foreach ($times as $time) {
                                        echo "<option value=\"".$time."\">".$time."</option>";
                                    }
                                ?>
                            </select> <br><br>

                            <!-- select area -->
                            <select name="area" id="area">
                                <?php
                                    $areas = explode(",", $data["area"] );
                                    foreach ($areas as $area) {
                                        echo "<option value=\"".$area."\">".$area."</option>";
                                    }
                                ?>
                            </select> <br><br>
                        </div>

                        <p>{{ Form::submit('Submit') }}</p>

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