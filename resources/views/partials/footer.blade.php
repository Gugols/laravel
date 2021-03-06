        <!-- Footer -->
        <footer id="footer" class="footer-light">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- Footer widget area 1 -->
                            <div class="widget  widget-contact-us" style="background-image: url('/images/world-map-dark.png'); background-position: 50% 20px; background-repeat: no-repeat">
                                <h4>About Maecenas</h4>
                                <ul class="list-icon">
                                    <li>
                                        <i class="fa fa-map-marker"></i> Avotu iela 24, Madona, LV-4801</li>
                                    <li>
                                        <i class="fa fa-phone"></i> (+371) 276-21-242 </li>
                                    <li>
                                        <i class="fa fa-envelope"></i>
                                        <a href="mailto:info@sigmalab.lv">info@sigmalab.lv</a>
                                    </li>
                                </ul>
                                <!-- Social icons -->
                                <div class="social-icons social-icons-border float-left m-t-20">
                                    <ul>
                                        <li class="social-facebook">
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="social-youtube">
                                            <a href="#">
                                                <i class="fa fa-youtube"></i>
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

                        </div>
                        <div class="col-md-3">
                            <!-- Footer widget area 3 -->
                            <div class="widget">
                                <h4>Latest From Our Blog</h4>
                                @include('pages.posts.posts-small-snippet-list')
                            </div>
                            <!-- end: Footer widget area 3 -->
                        </div>
                        <div class="col-md-3">
                            <!-- Footer widget area 4 -->

                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-content">
                <div class="container">
                    <div class="copyright-text text-center">&copy; 2018 Maecenas - Student portal
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


        <script id="__bs_script__">//<![CDATA[
            document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.24.4'><\/script>".replace("HOST", location.hostname));
        //]]></script>

</body>

</html>