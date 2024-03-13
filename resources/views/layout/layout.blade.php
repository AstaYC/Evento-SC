<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EventCon</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/slicknav.css')}}">

    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-3">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.html">home</a></li>
                                            <li><a href="performer.html">Performer</a></li>
                                            
                                            <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="about.html">about</a></li>
                                                    <li><a href="Program.html">Program</a></li>
                                                    <li><a href="Venue.html">Venue</a></li>
                                                    <li><a href="elements.html">elements</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">blog</a></li>
                                                    <li><a href="single-blog.html">single-blog</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="text-danger" href="/logout">LOGOUT</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="buy_tkt">
                                    <div class="book_btn d-none d-lg-block">
                                        <a href="/event">Your Events</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-12">
                        <div class="slider_text text-center">
                            <div class="shape_1 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                <img src="img/shape/shape_1.svg" alt="">
                            </div>
                            <div class="shape_2 wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s">
                                <img src="img/shape/shape_2.svg" alt="">
                            </div>
                            <span class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">WELCOME TO</span>
                            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">EVENTO</h3>
                            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">MR {{session('user_nom')}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('content')



</div>
<!-- map_area_end  -->

<!-- brand_area_start  -->
<div class="brand_area black_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center mb-80">
                    <h4 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Logos</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="brand_wrap">
                    <div class="brand_active owl-carousel">
                        <div class="single_brand text-center">
                            <img src="img/brand/1.png" alt="">
                        </div>
                        <div class="single_brand text-center">
                            <img src="img/brand/2.png" alt="">
                        </div>
                        <div class="single_brand text-center">
                            <img src="img/brand/3.png" alt="">
                        </div>
                        <div class="single_brand text-center">
                            <img src="img/brand/4.png" alt="">
                        </div>
                        <div class="single_brand text-center">
                            <img src="img/brand/5.png" alt="">
                        </div>
                        <div class="single_brand text-center">
                            <img src="img/brand/1.png" alt="">
                        </div>
                        <div class="single_brand text-center">
                            <img src="img/brand/2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand_area_end  -->
<!-- footer_start  -->
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="footer_widget">
                        <div class="address_details text-center">
                            <h4 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">Evento</h4>
                            <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">For</h3>
                            <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Soutenance Croisé YouCode</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer_end  -->

<!-- JS here -->
<script src="{{asset('asset/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<script src="{{asset('asset/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('asset/js/popper.min.js')}}"></script>
<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
<script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('asset/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('asset/js/ajax-form.js')}}"></script>
<script src="{{asset('asset/js/waypoints.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('asset/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('asset/js/scrollIt.js')}}"></script>
<script src="{{asset('asset/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('asset/js/wow.min.js')}}"></script>
<script src="{{asset('asset/js/gijgo.min.js')}}"></script>
<script src="{{asset('asset/js/nice-select.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('asset/js/tilt.jquery.js')}}"></script>
<script src="{{asset('asset/js/plugins.js')}}"></script>

<!--contact js-->

<script src="{{asset('asset/js/contact.js')}}"></script>
<script src="{{asset('asset/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.form.js')}}"></script>
<script src="{{asset('asset/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('asset/js/mail-script.js')}}"></script>


<script src="{{asset('asset/js/main.js')}}"></script>

</body>
</html>
