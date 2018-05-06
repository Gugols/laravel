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
                    <h2>Compangies & Organizations</h2>
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
            <div class="icon"><i class="fa fa-3x fa-code"></i></div>
            <div class="counter"> <span data-speed="3000" data-refresh-interval="50" data-to="12416" data-from="600" data-seperator="true">12416</span> </div>
            <div class="seperator seperator-small"></div>
            <p>LINES OF CODE</p>
            </div>
            </div>
            
            <div class="col-md-3">
            <div class="text-center">
            <div class="icon"><i class="fa fa-3x fa-coffee"></i></div>
            <div class="counter"> <span data-speed="4500" data-refresh-interval="23" data-to="365" data-from="100" data-seperator="true">365</span> </div>
            <div class="seperator seperator-small"></div>
            <p>CUPS OF COFFEE</p>
            </div>
            </div>
            <div class="col-md-3">
            <div class="text-center">
            <div class="icon"><i class="fa fa-3x fa-rocket"></i></div>
            <div class="counter"> <span data-speed="3000" data-refresh-interval="12" data-to="114" data-from="50" data-seperator="true">114</span> </div>
            <div class="seperator seperator-small"></div>
            <p>FINISHED PROJECTS</p>
            </div>
            </div>
            <div class="col-md-3">
            <div class="text-center">
            <div class="icon"><i class="fa fa-3x fa-smile-o"></i></div>
            <div class="counter"> <span data-speed="4550" data-refresh-interval="50" data-to="14825" data-from="48" data-seperator="true">14825</span> </div>
            <div class="seperator seperator-small"></div>
            <p>SATISFIED CLIENTS</p>
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
        
        <!-- Team -->
        <section id="section6" class="background-grey p-t-100 p-b-100">
            <div class="container">
                <div class="heading section-title">
                        <h2>Meet our Team</h2>
                        <p>Nulla varius consequat magna, id molestie ipsum volutpat quis. Suspendisse consectetur fringilla luctus. Fusce id mi diam, non ornare.</p>
                    </div>
               <div class="row team-members team-members-circle m-b-40">
                    <div class="col-md-3">
                        <div class="team-member">
                            <div class="team-image">
                                <img src="images/team/12.jpg">
                            </div>
                            <div class="team-desc">
                                <h3>Alea Smith</h3>
                                <span>Software Developer</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
                                <div class="align-center">
                                    <a class="btn btn-xs btn-slide btn-light" href="#">
                                        <i class="fa fa-facebook"></i>
                                        <span>Facebook</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                        <i class="fa fa-twitter"></i>
                                        <span>Twitter</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                        <i class="fa fa-instagram"></i>
                                        <span>Instagram</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                        <i class="fa fa-envelope"></i>
                                        <span>Mail</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="team-member">
                            <div class="team-image">
                                <img src="images/team/12.jpg">
                            </div>
                            <div class="team-desc">
                                <h3>Ariol Doe</h3>
                                <span>Software Developer</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
                                <div class="align-center">
                                    <a class="btn btn-xs btn-slide btn-light" href="#">
                                        <i class="fa fa-facebook"></i>
                                        <span>Facebook</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                        <i class="fa fa-twitter"></i>
                                        <span>Twitter</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                        <i class="fa fa-instagram"></i>
                                        <span>Instagram</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                        <i class="fa fa-envelope"></i>
                                        <span>Mail</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="team-member">
                            <div class="team-image">
                                <img src="images/team/12.jpg">
                            </div>
                            <div class="team-desc">
                                <h3>Emma Ross</h3>
                                <span>Software Developer</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
                                <div class="align-center">
                                    <a class="btn btn-xs btn-slide btn-light" href="#">
                                        <i class="fa fa-facebook"></i>
                                        <span>Facebook</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                        <i class="fa fa-twitter"></i>
                                        <span>Twitter</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                        <i class="fa fa-instagram"></i>
                                        <span>Instagram</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                        <i class="fa fa-envelope"></i>
                                        <span>Mail</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="team-member">
                            <div class="team-image">
                                <img src="images/team/12.jpg">
                            </div>
                            <div class="team-desc">
                                <h3>Victor Loda</h3>
                                <span>Software Developer</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
                                <div class="align-center">
                                    <a class="btn btn-xs btn-slide btn-light" href="#">
                                        <i class="fa fa-facebook"></i>
                                        <span>Facebook</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                        <i class="fa fa-twitter"></i>
                                        <span>Twitter</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                        <i class="fa fa-instagram"></i>
                                        <span>Instagram</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                        <i class="fa fa-envelope"></i>
                                        <span>Mail</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        <!-- end: Team -->
        
        <!-- Know more -->
        <section id="section6">
                <div class="heading section-title">
                        <h2>Student Spotlight</h2>
                        <p>Our top talent.</p>
                    </div>
        </section>
        <!-- end: Know more -->

        <!-- Subscribe form -->
        <section class="background-colored text-center p-t-80  p-b-30">
            <div class="container">
                <div class="widget clearfix widget-newsletter">
                    <form class="widget-subscribe-form form-inline" action="include/subscribe-form.php" role="form" method="post">
                        <h3 class="text-light">Subscribe to our Newsletter</h3>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                            <input type="email" aria-required="true" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                            <span class="input-group-btn">
											<button type="submit" id="widget-subscribe-submit-button" class="btn btn-light">Subscribe</button>
										</span>
                        </div>
                        <small class="text-light">Stay informed on our latest news!</small>
                    </form>

                </div>
            </div>
        </section>
        <!-- end: Subscribe form -->

@endsection