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
<link href=" /_include/css/bootstrap.min.css" rel="stylesheet">

<!-- Main Style -->
<link href=" /_include/css/main.css" rel="stylesheet">

<!-- Supersized -->
<link href=" /_include/css/supersized.css" rel="stylesheet">
<link href=" /_include/css/supersized.shutter.css" rel="stylesheet">

<!-- FancyBox -->
<link href=" /_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">

<!-- Font Icons -->
<link href=" /_include/css/fonts.css" rel="stylesheet">

<!-- Shortcodes -->
<link href=" /_include/css/shortcodes.css" rel="stylesheet">

<!-- Responsive -->
<link href=" /_include/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href=" /_include/css/responsive.css" rel="stylesheet">

<!-- Supersized -->
<link href=" /_include/css/supersized.css" rel="stylesheet">
<link href=" /_include/css/supersized.shutter.css" rel="stylesheet">

<!-- Google Font -->
<link href="http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900" rel="stylesheet" type="text/css">

<!-- Fav Icon -->
<link rel="shortcut icon" href="#">

<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="#">
<link rel="apple-touch-icon" sizes="72x72" href="#">
<link rel="apple-touch-icon" sizes="144x144" href="#">

<!-- Modernizr -->
<script src=" /_include/js/modernizr.js"></script>

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
            <a id="goUp" href="http://localhost " title="Eat with me">Brushed Template</a>
        </div>
        
        <nav id="menu">
            <ul id="menu-nav">
                <li><form class="form-inline " action="http://localhost/index.php/search" method="POST">
                    <span class="form-group">
                          <input type="text" class="form-control" placeholder="seach from name of restaurant..." name="str" id="str" style="width: 400px;">
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
                    <?php $id=Auth::id(); ?>
                        <div class="accordion-group">
                            <div class="">
                                {{"<a data-parent=\"#leftMenu\" class=\"external\" href=\"/index.php/show/$id\">
                                  <i class=\"icon-home\"></i> Booked lists 
                                </a>"}}
                          </div>
                        </div>

                        <div class="accordion-group">
                            <div class="">
                                {{"<a data-parent=\"#leftMenu\" class=\"external\" href=\"/index.php/showRes/$id\">
                                  <i class=\"icon-home\"></i> My Restaurants
                                </a>"}}
                          </div>
                        </div>

                        <div class="accordion-group">
                            <div class="">
                                {{"<a data-parent=\"#leftMenu\" class=\"external\" href=\"/index.php/edit/$id\">
                                  <i class=\"icon-home\"></i> Edit Profile 
                                </a>"}}
                          </div>
                        </div>
                </div>
                <!--end Collapes-->
           </nav>
        </div>
            
            <div class="col-sm-9 col-md-9">
                <h3> Manage "{{$restaurant->name}}" : </h3>

        @if ($errors->any())

            <ul style="color:red;">

                {{ implode('', $errors->all('<li>:message</li>')) }}

            </ul>

        @endif

        @if (Session::has('message'))

            <p style="color:red;">{{ Session::get('message') }}</p>

        @endif

        <div class="col-sm-3 col-md-3">
            <b>Name </b><br>
            <b>Addr </b><br>
            <b>DAY OPEN </b><br>
            <b>OPEN </b><br>
            <b>CLOSE </b><br>
            <b>Area </b><br>
            <b>ที่นั่งทั้งหมด </b><br>
            <b>เบอร์โทรศัพท์ </b><br>
        </div>

        <div class="col-sm-6 col-md-6">
            {{ $restaurant->name }}<br>
            {{ $restaurant->addr }}<br>
            {{$restaurant->day}} <br>
            {{$restaurant->time_open}}<br>
            {{$restaurant->time_close}}<br>
            {{ $restaurant->area }}<br>
            {{ $restaurant->seat }}<br>
            {{$restaurant->tel}}<br><br>
        </div>

        <div class="col-sm-3 col-md-3">

            {{"<a href=\"http://localhost/index.php/editRes/$restaurant->id\">EDIT</a><br>"}}
            {{"<a href=\"http://localhost/index.php/delete/$restaurant->id\">DELETE This restaurant</a><br>"}}
            <br><br><br><br><br><br><br>
        </div>
        

        <br>

        Upload picture : 
        
        {{ "<form action=\"http://localhost/index.php/uploadpic/$restaurant->id\"" }}
            method="POST"
            enctype="multipart/form-data">
            <input type="file" name="pic" >
            <input type="submit" >          
        </form><br>
        
        <h4>Booked List :</h4>
        <table class="table table-hover">
        <thead>
            <tr>
                <th>Customer</th>
                <th>Date</th>
                <th>Time</th>
                <th>Area</th>
                <th>Amout</th>
            </tr>
        </thead>
        <tbody>

            <?php
                if ($currentBookeds[0]!="") {
                    foreach ($currentBookeds as $currentBooked) {
                        $link = "http://localhost/index.php/showBook/".$currentBooked->id;
                        echo "<tr>";
                        echo "<td><a href=\"".$link."\">".$currentBooked->id."</a></td>";
                        echo "<td>".$currentBooked->date."</td>";
                        echo "<td>".$currentBooked->time."</td>";
                        echo "<td>".$currentBooked->area."</td>";
                        echo "<td>".$currentBooked->amout."</td>";
                        echo "</tr>";
                    }
                }
                else
                    echo "<tr><td>No Booked!</td></tr>";
                            
            ?>
        </tbody>
        </table>

        <?php
            foreach ($currentBookeds as $currentBooked) {
                echo $currentBooked;
            }
        ?>
        Pic : <br>
        <?php
            $pics = explode(",", $restaurant->name_pic);
            if ($pics[0]=="") {
                echo "<img src=\"/pics/pic\" height=100% width=100% >";
            }
            else {
                foreach ($pics as $pic) {
                    echo "<img src=\"/pics/".$pic."\" height=100% width=100% >";
                }
            }
        ?>
        <br>
        
            </div>
        </div>
        
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
<script src=" /_include/js/jquery-1.11.1.min.js"></script> <!-- jQuery Core -->
<script src=" /_include/js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src=" /_include/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
<script src=" /_include/js/waypoints.js"></script> <!-- WayPoints -->
<script src=" /_include/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
<script src=" /_include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
<script src=" /_include/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
<script src=" /_include/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
<script src=" /_include/js/jquery.tweet.js"></script> <!-- Tweet -->
<script src=" /_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<script src=" /_include/js/main.js"></script> <!-- Default JS -->
<!-- End Js -->


</div></body></html>