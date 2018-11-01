<!DOCTYPE html>
<html lang="en">
<head>
    <title>Uzbekistan</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Travello template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="{{ url("/uploads/images/dasturxon4.jpg")}} "/>
    <meta property="og:url" content="{{url("/uploads/images/dasturxon4.jpg")}}"/>
    <meta name="twitter:image" content="{{url("/uploads/images/dasturxon4.jpg")}}"/>
    <meta name="twitter:url" content="{{url("/uploads/images/dasturxon4.jpg")}}"/>
    <link rel="stylesheet" type="text/css" href="/styles/bootstrap4/bootstrap.min.css">
    <link href="/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="/styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="/styles/news.css">
    <link rel="stylesheet" type="text/css" href="/styles/news_responsive.css">
    <link rel="stylesheet" href="/js/cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/styles/magnific-popup.css">
    <link rel="stylesheet" href="/styles/main.css">
    <link rel="stylesheet" href="/styles/nice-select.css">
    <link rel="stylesheet" href="/styles/animate.min.css">
    <link rel="stylesheet" href="/styles/linearicons.css">
    <link rel="stylesheet" href="/styles/font-awesome.min.css">

</head>
<body>

<div class="super_container">

    <!-- Header -->

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="header_content_inner d-flex flex-row align-items-end justify-content-start">
                            <div class="logo"><a href="index.html">Uzbekistan</a></div>
                            <nav class="main_nav">
                                <ul class="d-flex flex-row align-items-start justify-content-start">
                                    <li @yield('nav.main') class="active"><a href="/">Home</a></li>
                                    <li @yield('nav.monuments') ><a href="/monuments">Monuments</a></li>
                                    <li @yield('nav.services') ><a href="/services">Hotels</a></li>
                                    <li @yield('nav.dishes')><a href="/dishes">National dishes</a></li>
                                    <li @yield('nav.news')><a href="/news">News</a></li>

                                </ul>
                            </nav>


                            <!-- Hamburger -->

                            <div class="hamburger ml-auto">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_social d-flex flex-row align-items-center justify-content-start">
            <ul class="d-flex flex-row align-items-start justify-content-start">
                <li><a href="https://t.me/Behzodjohn"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
                <li><a href="https://www.facebook.com/Behzodjan"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </header>

    <!-- Menu -->

    <div class="menu">
        <div class="menu_header d-flex flex-row align-items-center justify-content-start">
            <div class="menu_logo"><a href="index.html">Travello</a></div>
            <div class="menu_close_container ml-auto"><div class="menu_close"><div></div><div></div></div></div>
        </div>
        <div class="menu_content">
            <ul>
                <li @yield('nav.main') ><a href="/">Home</a></li>
                <li @yield('nav.monuments')><a href="/monuments">Monuments</a></li>
                <li @yield('nav.services')><a href="/services">Hotels</a></li>
                <li @yield('nav.dishes')><a href="/dishes">National dishes</a></li>
                <li @yield('nav.news')><a href="/news">News</a></li>

            </ul>
        </div>
        <div class="menu_social">

            <ul class="d-flex flex-row align-items-start justify-content-start">
                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>

    <!-- Home -->

{{--<div class="home">--}}
@yield('content')
{{--</div>--}}


    <!-- Footer -->

    <footer class="footer" style="position: relative">

        <div class="parallax_background parallax-window"  data-parallax="scroll" data-image-src="{{asset('/uploads/images/footer.jpg')}}" data-speed="0.8" style="position:absolute"></div>
        <div style="width: 100%; height: 100%; background-color: rgba(0,0,0,.6); position: absolute; top: 0" ></div>
        <div class="container">
            <h3 class="newsletter_title_container text-center">Special for: <a href="http://vci.venkon.uz">vci.venkon.uz</a></h3>
            <div class="row">
                <div class="col">
                    <div class="newsletter">
                        <div class="newsletter_title_container text-center">

                        </div>
                        <div class="newsletter_form_container">

                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer_contact_row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="row">

                        <!-- Footer Contact Item -->
                        <div class="col-xl-4 footer_contact_col">

                            <div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
                                <div class="footer_contact_icon"><img src="/images/sign.svg" alt=""></div>
                                <div class="footer_contact_title">give us a call</div>
                                <div class="footer_contact_list">
                                    <ul>
                                        <li>Office Landline: +998919586636</li>
                                        <li>Mobile: +998935675077</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Contact Item -->
                        <div class="col-xl-4 footer_contact_col">
                            <div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
                                <div class="footer_contact_icon"><img src="/images/trekking.svg" alt=""></div>
                                <div class="footer_contact_title">come & drop by</div>
                                <div class="footer_contact_list">
                                    <ul style="max-width:190px">
                                        <li>Amir Temur Street, Tashkent</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Contact Item -->
                        <div class="col-xl-4 footer_contact_col">

                            <div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
                                <div class="footer_contact_icon"><img src="/images/around.svg" alt=""></div>
                                <div class="footer_contact_title">send us da message</div>
                                <div class="footer_contact_list d-flex align-items-center">

                                    <a href="https://t.me/Behzodjohn"><i class="fa fa-paper-plane-o" style="font-size:32px;"></i></a>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                        <a href="https://www.facebook.com/Behzodjan"><i class="fa fa-facebook-square" style="font-size:32px;"></i></a>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </footer>
</div>

<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/styles/bootstrap4/popper.js"></script>
<script src="/styles/bootstrap4/bootstrap.min.js"></script>
<script src="/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="/plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="/plugins/easing/easing.js"></script>
<script src="/plugins/parallax-js-master/parallax.min.js"></script>
<script src="/js/custom.js"></script>
<script src="/js/destinations.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="/js/vendor/bootstrap.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="/js/easing.min.js"></script>
<script src="/js/hoverIntent.js"></script>
<script src="/js/superfish.min.js"></script>
<script src="/js/jquery.ajaxchimp.min.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>

<script src="/js/jquery.sticky.js"></script>
<script src="/js/jquery.nice-select.min.js"></script>
<script src="/js/parallax.min.js"></script>
<script src="/js/waypoints.min.js"></script>
<script src="/js/jquery.counterup.min.js"></script>

<script src="/js/main.js"></script>
</body>
</html>