
<footer id="fh5co-footer" role="contentinfo" style="background-image: url({{asset('assets')}}/images/img_bg_4.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row row-pb-md">
            <div class="col-md-3 fh5co-widget">
                <h3>About Education</h3>
                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
                <h3>Shared Notes Categories</h3>
                <ul class="fh5co-footer-links">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('about')}}">About Us</a></li>
                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                </ul>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
                <h3>Social Medias</h3>
                <ul class="fh5co-footer-links">
                    <li><a href="{{url($setting->facebook)}}"
                           onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                            Facebook
                        </a>

                    </li>
                    <li><a href="{{url($setting->twitter)}}"
                           onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                            Twitter
                        </a>
                    </li>
                    <li><a href="{{url($setting->instagram)}}"
                           onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                            İnstagram
                        </a>
                    </li>
                    <li><a href="#">Youtube</a></li>
                </ul>
            </div>
            <!--
            <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
                <h3>Engage us</h3>
                <ul class="fh5co-footer-links">
                    <li><a href="#">Marketing</a></li>
                    <li><a href="#">Visual Assistant</a></li>
                    <li><a href="#">System Analysis</a></li>
                    <li><a href="#">Advertise</a></li>
                </ul>
            </div>
            -->


            <!--
            <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
                <h3>Legal</h3>
                <ul class="fh5co-footer-links">
                    <li><a href="#">Find Designers</a></li>
                    <li><a href="#">Find Developers</a></li>
                    <li><a href="#">Teams</a></li>
                    <li><a href="#">Advertise</a></li>
                    <li><a href="#">API</a></li>
                </ul>
            </div>
            -->
        </div>

        <div class="row copyright">
            <div class="col-md-12 text-center">
                <p>
                    <small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
                    <small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo {{asset('assets')}}/images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> &amp; <a href="https://www.pexels.com/" target="_blank">Pexels</a></small>
                </p>
            </div>
        </div>

    </div>
</footer>
</div>

<div class="gototop js-top">
    <a href="#" class="{{asset('assets')}}/js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="{{asset('assets')}}/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="{{asset('assets')}}/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="{{asset('assets')}}/js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="{{asset('assets')}}/js/jquery.stellar.min.js"></script>
<!-- Carousel -->
<script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
<!-- Flexslider -->
<script src="{{asset('assets')}}/js/jquery.flexslider-min.js"></script>
<!-- countTo -->
<script src="{{asset('assets')}}/js/jquery.countTo.js"></script>
<!-- Magnific Popup -->
<script src="{{asset('assets')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('assets')}}/js/magnific-popup-options.js"></script>
<!-- Count Down -->
<script src="{{asset('assets')}}/js/simplyCountdown.js"></script>
<!-- Main -->
<script src="{{asset('assets')}}/js/main.js"></script>
<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
</script>
