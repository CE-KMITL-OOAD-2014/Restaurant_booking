<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<head>

	<!-- Meta Tags -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>Restaurant Booking | easy way to book a table </title>   

	<meta name="description" content="Insert Your Site Description" /> 

	<!-- Mobile Specifics -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="HandheldFriendly" content="true"/>
	<meta name="MobileOptimized" content="320"/>   

	<!-- Mobile Internet Explorer ClearType Technology -->
	<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

	<!-- Bootstrap -->
	<link href="_include/css/bootstrap.min.css" rel="stylesheet">

	<!-- Main Style -->
	<link href="_include/css/main.css" rel="stylesheet">

	<!-- Supersized -->
	<link href="_include/css/supersized.css" rel="stylesheet">
	<link href="_include/css/supersized.shutter.css" rel="stylesheet">

	<!-- FancyBox -->
	<link href="_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">

	<!-- Font Icons -->
	<link href="_include/css/fonts.css" rel="stylesheet">

	<!-- Shortcodes -->
	<link href="_include/css/shortcodes.css" rel="stylesheet">

	<!-- Responsive -->
	<link href="_include/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="_include/css/responsive.css" rel="stylesheet">

	<!-- Supersized -->
	<link href="_include/css/supersized.css" rel="stylesheet">
	<link href="_include/css/supersized.shutter.css" rel="stylesheet">

	<!-- Google Font -->
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

	<!-- Fav Icon -->
	<link rel="shortcut icon" href="#">

	<link rel="apple-touch-icon" href="#">
	<link rel="apple-touch-icon" sizes="114x114" href="#">
	<link rel="apple-touch-icon" sizes="72x72" href="#">
	<link rel="apple-touch-icon" sizes="144x144" href="#">

	<!-- Modernizr -->
	<script src="_include/js/modernizr.js"></script>

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

	<style type="text/css">
	    li {
	        list-style-type:none;
	    }
	</style>

</head>
<body>
	
	<!-- Header -->
	<header>
		<div class="sticky-nav stack">
			<a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>

			<div id="logo" >
				<a id="goUp" href="#" title="Brushed | Responsive One Page Template">Brushed Template</a>
			</div>

			<nav id="menu">
				<ul id="menu-nav">
					<li><form class="form-inline " role="search">
						<span class="form-group">
							<input type="text" class="form-control" placeholder="Search">
							<button type="submit" class="button button-mini">
								<i class="font-icon-search"></i>
							</button>
						</span>

					</form></li>
					<!-- <li class="current"><a href="#home-slider">Home</a></li> -->
					<li ><a href="#work">Restaurants</a></li>
					<li><a href="#Login">Login-Register</a></li>
	                <!-- <li><a href="#about">About Us</a></li>
	                <li><a href="#contact">Contact</a></li>
	                <li><a href="shortcodes.html" class="external">Shortcodes</a></li> -->
	            </ul>
	        </nav>

	        
	    </div>
	</header>
	<!-- End Header -->

	<!-- Profile Section -->
	<div id="userProfile" class="page"> <!--page and page-alternate convert bg-->
		<div class="container">

			<!--left side profile-->
			<div class="leftSide">
				<!-- Info -->
				<div class="col-xs-12 col-md-3">
					<!--user profile IMG-->
					<div class="userProfileIMG" id="userProfileIMG">
						<img src="#">
					</div>

					<!--user profile text-->
					<div class="profileTXT">

						<!--block quote name and description-->
						<div class="textINFO">
						<h3 class="spec">{{User Name}}</h3>
						<blockquote>
							<li>{{owner->name}}</li>
							<li>{{owner->phone  No.}}</li>
						</blockquote>
						</div>
						<!--End block quote-->

						<!--profile menu-->
						<ul class="nav nav-pills nav-stacked" id="menu">							
							<li id="Booking" class="active"><a href="#bookList">Booking lists</a></li>
							<li id="Fav"><a href="#">Favorite</a></li>
							<li id="Res"><a href="#">My restaurant</a></li>
							<li><a href="setting_User.html">Setting</a></li>
						</ul>
					</div>
					<!--end profile text-->
				</div>
			</div>	
			<!--End Left profile-->

			<!--Right side profile-->
			<div class="rightSde">
				<div class="col-xs-12 col-md-9 ">

					<!--Booking Tab-->
					<div class="tabbable" id="BkTab">
						<ul class="nav nav-tabs" id="bookList">
							<li class="active"><a href="#tab1" data-toggle="tab">Upcomming Booking</a></li>
							<li><a href="#tab2" data-toggle="tab">Past Booking</a></li>
						</ul>
					
						<div class="tab-content" id="tabContent">
							<div class="tab-pane active in" id="tab1"> listing abt reservation<br>.<br>.<br>.</div>
							<div class="tab-pane fade" id="tab2"> passing reservation</div>
						</div>
				    </div>
				    <!--End Booking Tab-->

				    <!-- Favorite -->
				    <div hidden class="favTable" id="FavTab"  >
				    	<table class="table table-hover" >
						  						  
						</table>
				    </div>
				    <!-- End Fav-->

				    <!--Restaurant tab-->
				    
				    <div hidden id="ResTab" class="body">
				    	<h2 class="title">My Restaurants</h2>
				    	<div class="col-md-7">		
				    		<ul class="list-group ">
				    			<li  class="list-group-item "><a href="#"> Cras justo odio </a> </li>
				    		</ul>			    
				    	</div>

				    	<div class="col-md-3">
				    		<a class="button button-small" href="#"> Reserved lists <span class="badge">#</span> </a> 
				    	</div>			    
				    	<div class="col-md-1">
				    		<a class="button button-small" href="#">Edit</a>
				    	</div>
				    </div>
				    <!--End Restaurant tab-->


				</div>
			</div>
			<!--end Right side-->
				
			
  		<hr>
  		</div>

	</div>
	<!-- End profile Section-->

<!-- Footer -->
<footer>
	<p class="credits">&copy;2013 Brushed. <a href="http://themes.alessioatzeni.com/html/brushed/" title="Brushed | Responsive One Page Template">Brushed Template</a> by <a href="http://www.alessioatzeni.com/" title="Alessio Atzeni | Web Designer &amp; Front-end Developer">Alessio Atzeni</a></p>
</footer>
<!-- End Footer -->

<!-- Js -->
<script src="_include/js/jquery-1.11.1.min.js"></script> <!-- jQuery Core -->
<script src="_include/js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="_include/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
<script src="_include/js/waypoints.js"></script> <!-- WayPoints -->
<script src="_include/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
<script src="_include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
<script src="_include/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
<script src="_include/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
<script src="_include/js/jquery.tweet.js"></script> <!-- Tweet -->
<script src="_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<script src="_include/js/main.js"></script> <!-- Default JS -->
<!-- End Js -->

</body></html>