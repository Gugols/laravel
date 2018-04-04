@extends('layouts.main-layout')

@section('content')

        <!-- SECTION FULLSCREEN -->
        <section id="page-title" data-parallax-image="images/parallax/5.jpg"><div class="parallax-container" data-velocity="-.090" style="background: url({{ asset('images/app/knowledge.jpg') }})"></div>
            <div class="container xs-text-center sm-text-center text-light">
                    <div class="row">
                    <div class="col-md-5 p-b-60">
                            <h1 class="text-uppercase text-medium" data-animation="fadeInDown" data-animation-delay="100">{{ $user->name }}</h1>
                            <div class="team-members team-members-circle" style="max-height: 200px; max-width: 200px;">
                                    <div class="team-member">
                                      <div class="team-image">
                                        <img src="{{ route('home') }}/uploads/avatars/{{ $user->avatar }}">
                                      </div>
                                    </div>
                                  </div>
                            <p class="lead" data-animation="fadeInDown" data-animation-delay="300">
                                @switch($user->profile_type) @case(1) Student
                                <i class="fa fa-book"></i>
                                @break @case(2) Company / Organization
                                <i class="fa fa-building"></i>
                                @break @case(3) University
                                <i class="fa fa-graduation-cap"></i>
                                @break @default
                                <Unknown @endswitch </p>
                    <a href="#services" class="btn btn-light btn-outline btn-rounded">Make a donation</a>
                    </div>
                    <div class="col-md-7">
                    <div class="col-md-6">

                    </div>
                    </div>
                    </div>
                    </div>
            </section>
        <!-- end: SECTION FULLSCREEN -->

        @if(UserController::ownerOrHasPermission($user->id, 'edit users'))
        <section class="p-t-0 p-b-0">
        <div class="page-menu menu-outline">
                <div class="container">
                <div class="menu-title">Profile <span>Options</span></div>
                <nav>
                <ul>
                <li><a href="{{ route('user.edit', $user->id) }}"> <i class="fa fa-user"></i>  Profile information</a> </li>
                <li><a href="#"> <i class="fa fa-lock"></i>  Security Settings</a></li>
                </ul>
                </nav>
                <div id="menu-responsive-icon">
                <i class="fa fa-reorder"></i>
                </div>
                </div>
                </div>
            </section>
        @endif
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
@endsection