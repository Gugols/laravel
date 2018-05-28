@extends('layouts.main-layout')

@section('content')

        <!-- Inspiro Slider -->
        <div id="slider" class="inspiro-slider slider-fullscreen arrows-large arrows-creative dots-creative" data-height-xs="360">

            <!-- Slide 1 -->
            <div class="slide background-overlay-gradient-colored kenburns" style="background-image:url('https://thejordanvalley.files.wordpress.com/2014/08/snowy_mountains_and_fog_filled_valley-wallpaper-1920x1080.jpg');">
                <div class="container">
                    <div class="slide-captions text-center">
                        <!-- Captions -->
                        <h1 data-caption-animation="zoom-out">Maecenas</h1>
                        <p class="lead">Where students get the support to fullfill their ultimate potential</p>
                        <div data-caption-animation="zoom-out">
                            <a href="https://www.youtube.com/watch?v=a_EW-IRKnHk" data-lightbox="iframe" class="play-button"><i class="fa fa-play"></i></a>
                        </div>
                        <!-- end: Captions -->
                    </div>
                </div>
            </div>
            <!-- end: Slide 1 -->
        </div>
        <!--end: Inspiro Slider -->
       <!-- Our Work -->

        <!-- end: Our Work -->

        <!-- Our numbers -->
        @include('flash::message')
        <section id="section2" class="image-block no-padding">
            <div class="container-fluid">
            <div class="row">
            <div class="col-md-6" style="height:609px;background:url(homepages/corporate/images/2.jpg) 50% 50% / cover no-repeat;">
            </div>
            <div class="col-md-6">
            <div class="heading heading text-left">
            <h2>Students</h2>
            <span class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. Suspendisse consectetur fringilla luctus. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.
            </span>
            </div>
            <a href="#" class="btn btn-outline btn-dark"><span>Learn More</span></a>
            </div>
            </div>
            </div>
            </section>

        <section id="section3" class="image-block no-padding">
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="heading heading text-left">
                    <h2>Companies & Organizations</h2>
                    <span class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. Suspendisse consectetur fringilla luctus. Fusce id mi diam, non ornare orci.
                    </span>
                    </div>
                    <a href="#" class="btn btn-outline btn-dark"><span>Learn More</span></a>
                    </div>
            <div class="col-md-6" style="height:609px;background:url(homepages/corporate/images/1.jpg) 50% 50% / cover no-repeat;">
            </div>
            </div>
            </div>
            </section>
        <!-- end: Our numbers -->

        <!-- Services -->
        <section id="section4" class="image-block no-padding">
            <div class="container-fluid">
            <div class="row">
            <div class="col-md-6" style="height:609px;background:url(homepages/corporate/images/3.jpg) 50% 50% / cover no-repeat;">
            </div>
            <div class="col-md-6">
            <div class="heading heading text-left">
            <h2>Universities</h2>
            <span class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. Suspendisse consectetur fringilla luctus. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.
            </span>
            </div>
            <a href="#" class="btn btn-outline btn-dark"><span>Learn More</span></a>
            </div>
            </div>
            </div>
            </section>
        <!-- end: Services -->

        <section id="section5" class="text-light p-t-150 p-b-150 background-overlay" data-parallax-image="images/parallax/12.jpg"><div class="parallax-container scrolly-invisible" data-velocity="-.090" style="background: url(&quot;https://c1.staticflickr.com/8/7372/15815712043_429778e7f0_b.jpg&quot;) -209.706px;"></div>
            <div class="container">
            <div class="row">
            <div class="col-md-3">
            <div class="text-center">
            <div class="icon"><i class="fa fa-3x fa-user"></i></div>
            <div class="counter"> <span data-speed="3000" data-refresh-interval="50" data-to="{{ $all_users_count }}" data-from="1" data-seperator="true">{{ $all_users_count }}</span> </div>
            <div class="seperator seperator-small"></div>
            <p>USERS JOINED</p>
            </div>
            </div>
            
            <div class="col-md-3">
            <div class="text-center">
            <div class="icon"><i class="fa fa-3x fa-newspaper-o"></i></div>
            <div class="counter"> <span data-speed="4500" data-refresh-interval="23" data-to="{{ $all_posts_count }}" data-from="1" data-seperator="true">{{ $all_posts_count }}</span> </div>
            <div class="seperator seperator-small"></div>
            <p>POSTS CREATED</p>
            </div>
            </div>
            <div class="col-md-3">
            <div class="text-center">
            <div class="icon"><i class="fa fa-3x fa-rocket"></i></div>
            <div class="counter"> <span data-speed="3000" data-refresh-interval="12" data-to="114" data-from="50" data-seperator="true">114</span> </div>
            <div class="seperator seperator-small"></div>
            <p>DAYS SINCE LAUNCH</p>
            </div>
            </div>
            <div class="col-md-3">
            <div class="text-center">
            <div class="icon"><i class="fa fa-3x fa-smile-o"></i></div>
            <div class="counter"> <span data-speed="4550" data-refresh-interval="50" data-to="2343" data-from="48" data-seperator="true">14825</span> </div>
            <div class="seperator seperator-small"></div>
            <p>EUR DONATED</p>
            </div>
            </div>
            </div>
            </div>
            </section>

         <!-- Latest Posts -->
            <section id="section6" class="background-grey p-t-80 p-b-0">
                    <div class="heading section-title">
                            <h2>Recent Posts</h2>
                            <p>The most recent posts made by our contributors.</p>
                    </div>
                    <div id="blog" class="grid-layout post-3-columns m-b-30 grid-loaded" data-item="post-item">
                            @foreach ($posts as $post)
                                @include('partials.posts-user-thumbnail-shadow', array('post'=>$post
                            ))
                            @endforeach
                        </div>
            </section>
        
        <!-- Students -->
        <section id="section6" class="background-grey p-t-0 p-b-0">
            <div class="container">
                <div class="heading section-title">
                        <h2>Recent Students</h2>
                    </div>
               <div class="row team-members team-members-circle m-b-40 p-b-0">
                    @include('pages.users.users-students-small-snippet-list');
                </div>
            </div>
        </section>
        <!-- end: Students -->

        <!-- Schools -->
        <section id="section6" class="background-grey p-t-0 p-b-0">
            <div class="container">
                <div class="heading section-title">
                        <h2>Recent Schools</h2>
                    </div>
               <div class="row team-members team-members-circle m-b-40 p-b-0">
                    @include('pages.users.users-schools-small-snippet-list');
                </div>
            </div>
        </section>
        <!-- end: Schools -->

        <!-- Companies -->
        <section id="section6" class="background-grey p-t-0 p-b-0">
            <div class="container">
                <div class="heading section-title">
                        <h2>Recent Companies</h2>
                    </div>
               <div class="row team-members team-members-circle m-b-40 p-b-0">
                    @include('pages.users.users-companies-small-snippet-list');
                </div>
            </div>
        </section>
        <!-- end: Companies -->
        
        <!-- Know more -->
        <section id="section6">
                <div class="heading section-title">
                        <h2>Student Spotlight</h2>
                        <p>Our top talent.</p>
                    </div>
        </section>
        <!-- end: Know more -->



@endsection