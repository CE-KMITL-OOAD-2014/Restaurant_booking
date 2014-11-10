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
    <div class="sticky-nav">
      <a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>

      <div id="logo">
        <a id="goUp" href="index.html" title="Brushed | Responsive One Page Template">Brushed Template</a>
      </div>

      <nav id="menu">
        <ul id="menu-nav">
          <li><form class="form-inline " role="search">
            <span class="form-group">
              <input type="text" class="form-control" placeholder="Search">
              <button type="submit" class="button button-mini ">
                <i class="font-icon-search"></i>
              </button>
            </span>

          </form></li>
          <!-- <li class="current"><a href="#home-slider">Home</a></li> -->
          <li><a href="#work">Restaurants</a></li>
          <li><a href="#Login">Login-Register</a></li>
                <!-- <li><a href="#about">About Us</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="shortcodes.html" class="external">Shortcodes</a></li> -->
              </ul>
            </nav>

          </div>
        </header>
        <!-- End Header -->

        <!--Edit section-->
        <div id="editProfile" class="page">
          <div class="container">
            <h1>Edit Profile</h1>
            <hr>
            <div class="row">
              <!-- left column -->
              <div class="col-md-3">
                <div class="text-center">
                  <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                  <h6>Upload a different photo...</h6>

                  <input type="file" class="form-control">
                </div>
              </div>

              <!-- edit form column -->
              <div class="col-md-9 personal-info">
                <h3>Personal info</h3>

                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label class="col-lg-3 control-label">First name:</label>
                    <div class="col-lg-8">
                      <input class="form-control" type="text" value="#">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-3 control-label">Last name:</label>
                    <div class="col-lg-8">
                      <input class="form-control" type="text" value="#">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-3 control-label">Phone number:</label>
                    <div class="col-lg-8">
                      <input class="form-control" type="text" value="">
                    </div>
                  </div>

                  <div class="form-group ">
                    <label class="col-lg-3 control-label">Email:</label>
                    <div class="col-lg-8">
                      <input class="form-control" id="disabledInput" type="text" placeholder="{{user->email}}" disabled>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Username:</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" value="janeuser">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Password:</label>
                    <div class="col-md-8">
                      <input class="form-control" type="password" value="11111122333">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Confirm password:</label>
                    <div class="col-md-8">
                      <input class="form-control" type="password" value="11111122333">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                      <input type="button" class="btn btn-primary" value="Save Changes">
                      <span></span>
                      <input type="reset" class="btn btn-default" value="Cancel">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <hr>
        </div>
        <!--End edit section-->

        <!-- Footer -->
        <footer>
          <p class="credits">&copy;2013 Brushed. <a href="http://themes.alessioatzeni.com/html/brushed/" title="Brushed | Responsive One Page Template">Brushed Template</a> by <a href="http://www.alessioatzeni.com/" title="Alessio Atzeni | Web Designer &amp; Front-end Developer">Alessio Atzeni</a></p>
        </footer>
        <!-- End Footer -->

        <!-- Js -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
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
      </body>