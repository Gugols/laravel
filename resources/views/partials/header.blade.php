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
    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800|Merriweather:300"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/plugins.css') }}" defer rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" defer rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" defer rel="stylesheet">
    <meta name="csrf-token" content="<?= csrf_token() ?>" />
    <meta name="csrf-param" content="_token" />
</head>


<body class="no-page-loader">
    <!-- Wrapper -->
    <div id="wrapper">


        <!-- Header -->
        <header id="header" class="header-transparent dark">
            <div id="header-wrap">
                <div class="container">
                    <!--Logo-->
                    <div id="logo">
                    <a href="{{ route('home') }}" class="logo" data-dark-logo="/images/logo-dark.png">
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
                            <li style="display: none;">
                                <!--top search-->
                                <a id="top-search-trigger" href="#" class="toggle-item">
                                    <i class="fa fa-search"></i>
                                    <i class="fa fa-close"></i>
                                </a>
                                <!--end: top search-->
                            </li>
                    
                                @guest <li><a href="{{ route('login') }}"><i class="fa fa-sign-in"></i></a></li> @endguest
                          
                                @auth
                                <li>
                                        <div class="topbar-dropdown">
                                        <a class="title"><i class="fa fa-user"></i></a>
                                        <div class="dropdown-list">
                                        <a class="list-entry" href="{{ route('user.index') }}">My profile</a>
                                        <a class="list-entry" href="{{ route('user.edit', Auth::id())}}">Settings</a>
                                        </div>
                                        </div>
                                </li>
                                @endauth
                            @auth
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
                            <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                    <i class="fa fa-times"></i>
                                 </a>

                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     @csrf
                                 </form>
                            </li>
                            @endauth
                            @guest
                            <li class="visible-md visible-lg">
                                <a href="{{ route('register') }}" class="btn btn-rounded btn-light">Get Started</a>
                                </li>
                            @endauth
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
                    <div id="mainMenu" class="light">
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