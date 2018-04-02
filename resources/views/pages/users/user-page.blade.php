<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Davis Are" />
    <meta name="description" content="A social network where students get the support to fullfill their ultimate potential">
    <!-- Document title -->
    <title>Maecenas | Student social network</title>
    <!-- Stylesheets & Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800|Merriweather:300"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/plugins.css') }}" defer rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" defer rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" defer rel="stylesheet"> </head>
</head>

<body class="no-page-loader">
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Topbar -->
        <div id="topbar" class="topbar-transparent topbar-fullwidth dark visible-md visible-lg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="top-menu">
                            <li>
                                <a href="#">Phone: +371 27102912</a>
                            </li>
                            <li>
                                <a href="#">Email: info@maecenas.test</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 hidden-xs">
                        <div class="social-icons social-icons-colored-hover">
                            <ul>
                                <li class="social-facebook">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="social-twitter">
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="social-google">
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="social-pinterest">
                                    <a href="#">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                </li>
                                <li class="social-vimeo">
                                    <a href="#">
                                        <i class="fa fa-vimeo-square"></i>
                                    </a>
                                </li>
                                <li class="social-linkedin">
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li class="social-dribbble">
                                    <a href="#">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
                                <li class="social-youtube">
                                    <a href="#">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </li>
                                <li class="social-rss">
                                    <a href="#">
                                        <i class="fa fa-rss"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: Topbar -->

        <!-- Header -->
        <header id="header" class="header-fullwidth header-transparent dark">
            <div id="header-wrap">
                <div class="container">
                    <!--Logo-->
                    <div id="logo">
                        <a href="index.html" class="logo" data-dark-logo="/images/logo-dark.png">
                            <img src="/images/logo.png" alt="Polo Logo">
                        </a>
                    </div>
                    <!--End: Logo-->

                    <!--Top Search Form-->
                    <div id="top-search">
                        <form action="search-results-page.html" method="get">
                            <input type="text" name="q" class="form-control" value="" placeholder="Start typing & press  &quot;Enter&quot;">
                        </form>
                    </div>
                    <!--end: Top Search Form-->

                    <!--Header Extras-->
                    <div class="header-extras">
                        <ul>
                            <li>
                                <!--top search-->
                                <a id="top-search-trigger" href="#" class="toggle-item">
                                    <i class="fa fa-search"></i>
                                    <i class="fa fa-close"></i>
                                </a>
                                <!--end: top search-->
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-user"></i>
                                </a>
                            </li>
                            <li class="hidden-xs">
                                <!--shopping cart-->
                                <div id="shopping-cart">
                                    <a href="shop-cart.html">
                                        <span class="shopping-cart-items">8</span>

                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </div>
                                <!--end: shopping cart-->
                            </li>
                        </ul>
                    </div>
                    <!--end: Header Extras-->
                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger">
                        <button class="lines-button x">
                            <span class="lines"></span>
                        </button>
                    </div>
                    <!--end: Navigation Resposnive Trigger-->

                    <!--Navigation-->
                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">About Us</a>
                                    </li>
                                    <li>
                                        <a href="#">Articles</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--END: NAVIGATION-->
                </div>
            </div>
        </header>
        <!-- end: Header -->

        <!-- SECTION FULLSCREEN -->
        <section class="parallax text-light halfscreen" data-parallax-image="{{ asset('images/app/knowledge.jpg') }}">
            <div class="container">
                <div class="container-fullscreen">

                    <div class="text-middle text-center text-right">
                        <h1 class="text-uppercase text-medium" data-animation="fadeInDown" data-animation-delay="100">{{ $user->name }}</h1>
                        <p class="lead" data-animation="fadeInDown" data-animation-delay="300">
                            @switch($user->profile_type) @case(1) Student
                            <i class="fa fa-book"></i>
                            @break @case(2) Company / Organization
                            <i class="fa fa-building"></i>
                            @break @case(3) University
                            <i class="fa fa-graduation-cap"></i>
                            @break @default
                            <Unknown @endswitch </p>
                    </div>

                </div>
            </div>
        </section>
        <!-- end: SECTION FULLSCREEN -->

        <section class="p-b-10">
            <div class="container">

                <div class="hr-title hr-long center">
                    <abbr>In short...</abbr>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <blockquote>
                            <p>{{ $user->short_description }}</p>
                        </blockquote>
                    </div>
                </div>
        </section>

        <section class="p-t-0">
            <div class="container">
                <h2>About Me</h2>
                <p>{{ $user->description }}</p>
            </div>
        </section>


        <section id="section-blog" class="content background-grey">
            <div class="container">
                <div class="col-md-10 center text-center m-b-60">
                    <h2>Blog</h2>
                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id
                        elit. Proin gravida nibh vel velit auctor Aenean sollicitudin, adipisicing elit sed lorem quis bibendum
                        auctor.
                    </p>
                </div>
                <div id="blog" class="grid-layout post-3-columns m-b-30 grid-loaded" data-item="post-item" style="margin: 0px -20px -20px 0px; position: relative; height: 554.656px;">

                    <div class="post-item border" style="padding: 0px 20px 20px 0px; position: absolute; left: 0px; top: 0px;">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="http://maecenas.test/homepages/corporate/images/2.jpg">
                                </a>
                                <span class="post-meta-category">
                                    <a href="">Lifestyle</a>
                                </span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date">
                                    <i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments">
                                    <a href="">
                                        <i class="fa fa-comments-o"></i>33 Comments</a>
                                </span>
                                <h2>
                                    <a href="#">Lighthouse, standard post with a single image
                                    </a>
                                </h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor
                                    porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                <a href="#" class="item-link">Read More
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="post-item border" style="padding: 0px 20px 20px 0px; position: absolute; left: 319px; top: 0px;">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="http://maecenas.test/homepages/corporate/images/1.jpg">
                                </a>
                                <span class="post-meta-category">
                                    <a href="">Science</a>
                                </span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date">
                                    <i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments">
                                    <a href="">
                                        <i class="fa fa-comments-o"></i>33 Comments</a>
                                </span>
                                <h2>
                                    <a href="#">Lighthouse, standard post with a single image
                                    </a>
                                </h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor
                                    porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                <a href="#" class="item-link">Read More
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="post-item border" style="padding: 0px 20px 20px 0px; position: absolute; left: 639px; top: 0px;">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="http://maecenas.test/homepages/corporate/images/1.jpg">
                                </a>
                                <span class="post-meta-category">
                                    <a href="">Science</a>
                                </span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date">
                                    <i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments">
                                    <a href="">
                                        <i class="fa fa-comments-o"></i>33 Comments</a>
                                </span>
                                <h2>
                                    <a href="#">Lighthouse, standard post with a single image
                                    </a>
                                </h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor
                                    porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                <a href="#" class="item-link">Read More
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <hr class="space">
        <hr class="space">

        <div class="call-to-action cta-center">
            <div class="col-md-10">
                <h3>Ready to buy POLO Template?</h3>
                <p>This is a simple hero unit, a simple call-to-action-style component for calling extra attention to featured
                    content.</p>
            </div>
            <div class="col-md-2">
                <a class="btn">Buy now!</a>
            </div>
        </div>
        <hr class="space">
        <!-- Footer -->
        <footer id="footer" class="footer-light">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- Footer widget area 1 -->
                            <div class="widget  widget-contact-us" style="background-image: url('/images/world-map-dark.png'); background-position: 50% 20px; background-repeat: no-repeat">
                                <h4>About POLO</h4>
                                <ul class="list-icon">
                                    <li>
                                        <i class="fa fa-map-marker"></i> 795 Folsom Ave, Suite 600
                                        <br> San Francisco, CA 94107</li>
                                    <li>
                                        <i class="fa fa-phone"></i> (123) 456-7890 </li>
                                    <li>
                                        <i class="fa fa-envelope"></i>
                                        <a href="mailto:first.last@example.com">first.last@example.com</a>
                                    </li>
                                    <li>
                                        <br>
                                        <i class="fa fa-clock-o"></i>Monday - Friday:
                                        <strong>08:00 - 22:00</strong>
                                        <br> Saturday, Sunday:
                                        <strong>Closed</strong>
                                    </li>
                                </ul>
                                <!-- Social icons -->
                                <div class="social-icons social-icons-border float-left m-t-20">
                                    <ul>
                                        <li class="social-rss">
                                            <a href="#">
                                                <i class="fa fa-rss"></i>
                                            </a>
                                        </li>
                                        <li class="social-facebook">
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="social-twitter">
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="social-vimeo">
                                            <a href="#">
                                                <i class="fa fa-vimeo"></i>
                                            </a>
                                        </li>
                                        <li class="social-youtube">
                                            <a href="#">
                                                <i class="fa fa-youtube"></i>
                                            </a>
                                        </li>
                                        <li class="social-pinterest">
                                            <a href="#">
                                                <i class="fa fa-pinterest"></i>
                                            </a>
                                        </li>
                                        <li class="social-gplus">
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end: Social icons -->
                            </div>
                            <!-- end: Footer widget area 1 -->
                        </div>
                        <div class="col-md-2">
                            <!-- Footer widget area 2 -->
                            <div class="widget">
                                <h4>Quick LInks</h4>
                                <ul class="list-icon list-icon-arrow">
                                    <li>
                                        <a href="#">About</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                    <li>
                                        <a href="#">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">Blog</a>
                                    </li>
                                    <li>
                                        <a href="#">Portfolio</a>
                                    </li>
                                    <li>
                                        <a href="#">Shortcodes</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end: Footer widget area 2 -->
                        </div>
                        <div class="col-md-3">
                            <!-- Footer widget area 3 -->
                            <div class="widget">
                                <h4>Latest From Our Blog</h4>
                                <div class="post-thumbnail-list">
                                    <div class="post-thumbnail-entry">
                                        <div class="post-thumbnail-content">
                                            <a href="#">Suspendisse consectetur fringilla luctus</a>
                                            <span class="post-date">
                                                <i class="fa fa-clock-o"></i> 6m ago</span>
                                            <span class="post-category">
                                                <i class="fa fa-tag"></i> Technology</span>
                                        </div>
                                    </div>
                                    <div class="post-thumbnail-entry">
                                        <div class="post-thumbnail-content">
                                            <a href="#">Consectetur adipiscing elit</a>
                                            <span class="post-date">
                                                <i class="fa fa-clock-o"></i> 24h ago</span>
                                            <span class="post-category">
                                                <i class="fa fa-tag"></i> Lifestyle</span>
                                        </div>
                                    </div>
                                    <div class="post-thumbnail-entry">
                                        <div class="post-thumbnail-content">
                                            <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                                            <span class="post-date">
                                                <i class="fa fa-clock-o"></i> 11h ago</span>
                                            <span class="post-category">
                                                <i class="fa fa-tag"></i> Lifestyle</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Footer widget area 3 -->
                        </div>
                        <div class="col-md-3">
                            <!-- Footer widget area 4 -->
                            <div class="widget widget-tweeter" data-username="ardianmusliu" data-limit="2">
                                <h4>Recent Tweets</h4>
                            </div>
                            <!-- end: Footer widget area 4 -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-content">
                <div class="container">
                    <div class="copyright-text text-center">&copy; 2017 POLO - Responsive Multi-Purpose HTML5 Template. All Rights Reserved.
                        <a href="http://www.inspiro-media.com"
                            target="_blank">INSPIRO</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end: Footer -->

        </div>
        <!-- end: Wrapper -->

        <!-- Go to top button -->
        <a id="goToTop">
            <i class="fa fa-angle-up top-icon"></i>
            <i class="fa fa-angle-up"></i>
        </a>
        <!--Plugins-->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/plugins.js') }}" defer></script>

        <!--Template functions-->
        <script src="{{ asset('js/functions.js') }}" defer></script>


</body>

</html>