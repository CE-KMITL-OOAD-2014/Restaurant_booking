<!doctype html>
<html lang="en-US">

    <head>

        <!-- Meta Tags -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title>Restaurant Booking | easy way to book a table </title>   

        <meta name="description" content="Insert Your Site Description"> 

        <!-- Mobile Specifics -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="HandheldFriendly" content="true">
        <meta name="MobileOptimized" content="320">   

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
                    <a id="goUp" href="/" title="Eat with me">EatWMW</a>
                </div>

                <nav id="menu">
                    <ul id="menu-nav">
                        <li>
                            <form class="form-inline " action="/search" method="POST">
                                <span class="form-group">
                                    <input type="text" class="form-control" placeholder="seach..." name="str" id="str" width=100%">
                                    <button type="submit" class="button button-mini">
                                        <i class="font-icon-search"></i>
                                    </button>
                                </span>

                            </form>
                        </li>

                        @if (Auth::id()!="") 
                            {{ "<li><a href=\"/logout_action\" class=\"external\">Logout</a></li>
                                <li><a href=\"/aboutus\" class=\"external\">About Us</a></li>" }}

                        @else 
                            {{ "<li><a href=\"/register\" class=\"external\">Register</a></li>
                                <li><a href=\"/login\" class=\"external\">Login</a></li>
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
                                                    <a data-parent=\"#leftMenu\" class=\"external\" href=\"/show/$id \">
                                                        <i class=\"icon-home\"></i> Booked lists 
                                                    </a>
                                                </div>
                                            </div>

                                            <div class=\"accordion-group\">
                                                <div class=\"\">
                                                    <a data-parent=\"#leftMenu\" class=\"external\" href=\"/showRes/$id\">
                                                        <i class=\"icon-home\"></i> My Restaurants
                                                    </a>
                                                </div>
                                            </div>

                                            <div class=\"accordion-group\">
                                                <div class=\"\">
                                                    <a data-parent=\"#leftMenu\" class=\"external\" href=\"/regisres \">
                                                        <i class=\"icon-home\"></i> Open Restaurant! 
                                                    </a>
                                                </div>
                                            </div>

                                            <div class=\"accordion-group\">
                                                <div class=\"\">
                                                    <a data-parent=\"#leftMenu\" class=\"external\" href=\"/edit/$id\">
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
                                            {{"<div class=\"accordion-group\">
                                                    <div class=\"\">
                                                        <a data-parent=\"#leftMenu\" class=\"external\" href=\"/regisres \">
                                                            <i class=\"icon-home\"></i> Open Restaurant! 
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class=\"accordion-group\">
                                                    <div class=\"\">
                                                        <a data-parent=\"#leftMenu\" class=\"external\" href=\"/showall \">
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
                            </nav>
                        </div>

<!-- ===================================end nav========================================== -->

                        <div class="col-sm-9 col-md-9">

                            @yield('body')

                        </div>
                    </div>
                    <!-- Content -->
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

        </div>
    </body>
</html>