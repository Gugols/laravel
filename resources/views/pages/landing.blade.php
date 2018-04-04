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
                            <a href="https://www.youtube.com/watch?v=8gg3BD6hzBA" data-lightbox="iframe" class="play-button"><i class="fa fa-play"></i></a>
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
            <div class="container">
                <div class="row">
                    <div class="col-md-10 center text-center">
                        <h4 class="m-b-10">Know More</h4>
                        <h2>About Our Company</h2>
                        <p class="lead m-b-60">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor Aenean sollicitudin, adipisicing elit sed lorem quis bibendum auctor.
                        </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h4 class="m-b-20">We are making progress</h4>

                        <div class="progress-bar-container title-up small color">
                            <div class="progress-bar" data-percent="100" data-delay="0" data-type="%">
                                <div class="progress-title">HTML5</div>
                            </div>
                        </div>

                        <div class="progress-bar-container title-up small color">
                            <div class="progress-bar" data-percent="94" data-delay="100" data-type="%">
                                <div class="progress-title">CSS3</div>
                            </div>
                        </div>

                        <div class="progress-bar-container title-up small color">
                            <div class="progress-bar" data-percent="89" data-delay="200" data-type="%">
                                <div class="progress-title">JQUERY</div>
                            </div>
                        </div>

                        <div class="progress-bar-container title-up small color">
                            <div class="progress-bar" data-percent="78" data-delay="300" data-type="%">
                                <div class="progress-title">MYSQL</div>
                            </div>
                        </div>

                        <div class="progress-bar-container title-up small color">
                            <div class="progress-bar" data-percent="75" data-delay="400" data-type="%">
                                <div class="progress-title">PHP</div>
                            </div>
                        </div>
                        <p class="lead">Nulla varius consequat magna, id molestie ipsum volutpat quis. Suspendisse consectetur fringilla luctus.</p>
                    </div>
                    <div class="col-md-4">
                        <h4 class="m-b-20">Best services around</h4>
                        <div class="accordion fancy radius clean">
                            <div class="ac-item ac-active">
                                <h5 class="ac-title"><i class="fa fa-rocket"></i>Suscipit laboriosam</h5>
                                <div class="ac-content ac-active">We’re POLO, a creative agency located in the heart of New York city. Suspendisse consectetur fringilla luctus.
                                    <br />
                                    <br /> Fusce id mi diam, Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora</div>
                            </div>
                            <div class="ac-item">
                                <h5 class="ac-title"><i class="fa fa-heart"></i>Aliquam voluptatem</h5>
                                <div class="ac-content">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam
                                    <br />
                                    <br /> Fusce id mi diam, Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora</div>
                            </div>
                            <div class="ac-item">
                                <h5 class="ac-title"><i class="fa fa-shopping-cart"></i>Labore et dolore</h5>
                                <div class="ac-content">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                                    <br />
                                    <br /> Fusce id mi diam, Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4 class="m-b-20">Latest from Blog</h4>
                        <div class="post-thumbnail-list">
                            <div class="post-thumbnail-entry">
                                <img src="homepages/corporate-v7/images/blog/5.jpg" alt="">
                                <div class="post-thumbnail-content">
                                    <a href="#">Suspendisse consectetur fringilla</a>
                                    <span class="post-date"><i class="fa fa-clock-o"></i> 6m ago</span>
                                    <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                </div>
                            </div>
                            <div class="post-thumbnail-entry">
                                <img src="homepages/corporate-v7/images/blog/6.jpg" alt="">
                                <div class="post-thumbnail-content">
                                    <a href="#">Consectetur adipiscing elit</a>
                                    <span class="post-date"><i class="fa fa-clock-o"></i> 24h ago</span>
                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                </div>
                            </div>
                            <div class="post-thumbnail-entry">
                                <img src="homepages/corporate-v7/images/blog/7.jpg" alt="">
                                <div class="post-thumbnail-content">
                                    <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                                    <span class="post-date"><i class="fa fa-clock-o"></i> 11h ago</span>
                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                </div>
                            </div>
                            <div class="post-thumbnail-entry">
                                <img src="homepages/corporate-v7/images/blog/8.jpg" alt="">
                                <div class="post-thumbnail-content">
                                    <a href="#">Fringilla Lorem ipsum dolor sit amet</a>
                                    <span class="post-date"><i class="fa fa-clock-o"></i> 11h ago</span>
                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- end: Know more -->


        <!-- Contact -->
        <section id="section7" class="p-t-150 p-b-200" style="background-image:url(homepages/branding/images/background-4.png); background-position:71% 22%;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="m-b-10">Get in Touch with Us</h2>
                                <p class="lead">Our Headquarters are in Australia, USA, Europe, Asia, Africa </p>
                            </div>
                            <div class="col-md-6 m-b-30">
                                <address>
								<strong>Headquarters:</strong><br>
								795 Folsom Ave, Suite 600<br>
								San Francisco, CA 94107<br>
							</address>
                                <abbr><strong>Phone:</strong></abbr> (+1) 1234 56789
                                <br>
                                <abbr><strong>Fax:</strong></abbr> (+1) 12 3456 78910
                                <br>
                                <abbr><strong>Email:</strong></abbr> info@inspiro-media.com
                            </div>
                            <div class="col-md-6 m-b-30">
                                <address>
								<strong>Headquarters:</strong><br>
								795 Folsom Ave, Suite 600<br>
								San Francisco, CA 94107<br>
							</address>
                                <abbr><strong>Phone:</strong></abbr> (+1) 1234 56789
                                <br>
                                <abbr><strong>Fax:</strong></abbr> (+1) 12 3456 78910
                                <br>
                                <abbr><strong>Email:</strong></abbr> info@inspiro-media.com
                            </div>
                            <div class="col-md-12">
                                <h4>We are social</h4>
                                <div class="social-icons social-icons-light social-icons-colored-hover">
                                    <ul>
                                        <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                                        <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                        <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        <li class="social-instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li class="social-pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li class="social-gplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="social-dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li class="social-skype"><a href="#"><i class="fa fa-skype"></i></a></li>
                                        <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li class="social-behance"><a href="#"><i class="fa fa-behance"></i></a></li>
                                        <li class="social-flickr"><a href="#"><i class="fa fa-flickr"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-md-offset-1">
                        <form class="widget-contact-form" action="include/contact-form.php" role="form" method="post">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="name">Name</label>
                                    <input type="text" aria-required="true" name="widget-contact-form-name" class="form-control required name" placeholder="Enter your Name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="email">Email</label>
                                    <input type="email" aria-required="true" name="widget-contact-form-email" class="form-control required email" placeholder="Enter your Email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label class="upper" for="phone">Phone</label>
                                    <input type="text" class="form-control required" name="widget-contact-form-phone" placeholder="Enter phone" aria-required="true">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Services</label>
                                    <select name="widget-contact-form-services">
                                        <option value="">Select service</option>
                                        <option value="Wordpress">Wordpress</option>
                                        <option value="PHP / MySQL">PHP / MySQL</option>
                                        <option value="HTML5 / CSS3">HTML5 / CSS3</option>
                                        <option value="Graphic Design">Graphic Design</option>
                                    </select>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea type="text" name="widget-contact-form-message" rows="9" class="form-control required" placeholder="Enter your Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-light" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>
        <!-- end: Contact -->

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