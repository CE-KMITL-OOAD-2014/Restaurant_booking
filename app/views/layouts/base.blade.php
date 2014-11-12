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
<link href="/css/bootstrap.min.css" rel="stylesheet">

<!-- Main Style -->
<link href="/css/main.css" rel="stylesheet">

<!-- Supersized -->
<link href="/css/supersized.css" rel="stylesheet">
<link href="/css/supersized.shutter.css" rel="stylesheet">

<!-- FancyBox -->
<link href="/css/fancybox/jquery.fancybox.css" rel="stylesheet">

<!-- Font Icons -->
<link href="/css/fonts.css" rel="stylesheet">

<!-- Shortcodes -->
<link href="/css/shortcodes.css" rel="stylesheet">

<!-- Responsive -->
<link href="/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="/css/responsive.css" rel="stylesheet">

<!-- Supersized -->
<link href="/css/supersized.css" rel="stylesheet">
<link href="/css/supersized.shutter.css" rel="stylesheet">

<!-- Google Font -->
<link href="http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900" rel="stylesheet" type="text/css">

<!-- Fav Icon -->
<link rel="shortcut icon" href="#">

<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="#">
<link rel="apple-touch-icon" sizes="72x72" href="#">
<link rel="apple-touch-icon" sizes="144x144" href="#">

<!-- Modernizr -->
<script src=" js/modernizr.js"></script>

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

<!-- Header -->
<header>
    <div class="sticky-nav" >
    	<a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
        
        <div id="logo">
        	<a id="goUp" href="/" title="Eat with me">EatWME</a>
        </div>
        
        <nav id="menu">
        	<ul id="menu-nav">
                <li><form class="form-inline " action="/index.php/search" method="POST">
                    <span class="form-group">
                          <input type="text" class="form-control" placeholder="seach from name of restaurant..." name="str" id="str" width=100%>
                          <button type="submit" class="button button-mini">
                          <i class="font-icon-search"></i>
                          </button>
                    </span>
                    
                </form></li>
                
                
                    @if (Auth::id()!="") 
                        {{ "<li><a href=\"/index.php/logout_action\" class=\"external\">Logout</a></li>
                        <li><a href=\"/aboutus\" class=\"external\">About Us</a></li>" }}
                    
                    @else 
                        {{ "<li><a href=\"index.php/register\" class=\"external\">Register</a></li>
                        <li><a href=\"index.php/login\" class=\"external\">Login</a></li>
                        <li><a href=\"/aboutus\" class=\"external\">About Us</a></li>" }}
                    @endif
                

                
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
                    @if (Auth::id()!="")
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
                                <a data-parent=\"#leftMenu\" href=\"/aboutus\" class=\"external\">
                                  <i class=\"icon-home\"></i> About Us
                                </a>
                          </div>"}}
                    @else
                        {{"<!-- panel Lacation -->
                        <div class=\"accordion-group\">
                            <div class=\"\">
                                <a data-parent=\"#leftMenu\" class=\"external\" href=\"/index.php/regisres \">
                                  <i class=\"icon-home\"></i> Open Restaurant! 
                                </a>
                          </div>
                        </div>

                        <div class=\"accordion-group\">
                            <div class=\"\">
                                <a data-parent=\"#leftMenu\" class=\"external\" href=\"/index.php/showall \">
                                  <i class=\"icon-home\"></i> All Restaurant
                                </a>
                          </div>
                        </div>

                        <div class=\"accordion-group\">
                            <div class=\"\">
                                <a data-parent=\"#leftMenu\" href=\"/aboutus\" class=\"external\">
                                  <i class=\"icon-home\"></i> About Us
                                </a>
                          </div>
                        </div>"}}

                    @endif

                </div>
                <!--end Collapes-->
           </nav>
        </div>

<!-- ==================================end nav============================================ -->

            <div class="col-sm-9 col-md-9">
            	<div class="row">

                    @if ($errors->any())

                        <h4><ul style="color:red;">

                            {{ implode('', $errors->all('<li>:message</li>')) }}

                        </ul></h4>

                    @endif

                    @if (Session::has('message'))

                        <h4 style="color:green;">{{ Session::get('message') }}</h4>

                    @endif

                	<section id="projects">
                    	<ul id="thumbs">                        
							
                            <?php
                                for ($i=0 ; $i<count($pics) ; $i++) {
                                    echo    "<li class=\"item-thumbs span3 design\">
                                                                            
                                                <a class=\"hover-wrap fancybox\" data-fancybox-group=\"gallery\" title=\"".$restaurants[$i]->name."\" href=\"/restaurant/".$restaurants[$i]->id."\">
                                                    <span class=\"overlay-img\"></span>
                                                    <span class=\"overlay-img-thumb font-icon-plus\"></span>
                                                </a>
                                                                    
                                                <img src=\"".$pics[$i]."\" alt=\"".$restaurants[$i]->addr." <br> ".$restaurants[$i]->tel."\">
                                            </li>";
                                }
                            ?>
                        	
                        </ul>
                    </section>
                    
            	</div>
            </div>
        </div>
        <!-- End Portfolio Projects -->
    </div>
</div>
<!-- End Our Work Section -->



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