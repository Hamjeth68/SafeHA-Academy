<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SafeEnviro</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/appFrontend.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link href="{{ asset('img/AcLogo.png') }}" rel="icon">
    <link href="{{ asset('img/AcLogo.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: BizLand - v1.2.1
    * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
        <div class="contact-info mr-auto">
{{--            <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>--}}
{{--            <i class="icofont-phone"></i> +1 5589 55488 55--}}
        </div>
        <div class="social-links">
{{--            <select class="currency-selector">--}}
{{--                <option data-symbol="$" data-placeholder="0.00" selected>USD</option>--}}
{{--                <option data-symbol="€" data-placeholder="0.00">EUR</option>--}}
{{--                <option data-symbol="$" data-placeholder="0.00">NGN</option>--}}
{{--            </select>--}}
            @if(auth()->check() && auth()->user()->user_type !== '1' || (!auth()->check()))
                <a href="{{url('/welcome')}}" class="text-black-50 font-weight-bold">Staff</a>
            @endif
            @if(auth()->check() && auth()->user()->user_type !== '0')
                <a href="{{url('/stdEdit/'.auth()->user()->id)}}" class="text-black-50 font-weight-bold">Profile</a>
            @endif
                <a href="https://moodle.org/login/index.php" class="text-black-50 font-weight-bold">Alumni</a>
                <a href="https://moodle.org/login/index.php" class="text-black-50 font-weight-bold">Student</a>

                @if(auth()->check())

{{--                <a href="{{ route('logout') }}" method="POST" class="text-black-50 font-weight-bold">Logout--}}
                <form method="POST" action="{{ route('logout') }}" class="d-inline-block">

                    @csrf
                    <a href="{{ route('logout') }}"
                       class="text-black-50 font-weight-bold"
                       onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>

            @else
                <a href="{{url('/stdlogin')}}" class="text-black-50 font-weight-bold">Login
                    @endif
            <a><input class="searchtype px-2" type="search" placeholder="Search" aria-label="Search"></a>
                <a href="" class="text-black-50 font-weight-bold px-2"><i class="icofont-ui-search"></i></a>
        </div>
    </div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

{{--        <h1 class="logo mr-auto"><a href="index.html">BizLand<span>.</span></a></h1>--}}
        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="{{ url('/') }}" class="logo mr-auto"><img src={{ asset('img/acedemy.png') }} alt=""></a>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="drop-down"><a href="">Learn With Us</a>
                    <ul>
                        <li><a href="{{url('/why1')}}">Why SafeEnviro Academy</a></li>
                        <li><a href="{{url('/home-two')}}">Courses & Fees </a></li>
                        <li><a href="{{url('/personal-development')}}">Continuing Professional Development </a></li>
                        <!--<li><a href="{{url('/inspiring-student')}}">Inspiring Students </a></li>-->
{{--                        <li><a href="{{url('/web')}}">Webinars & Upcoming Events </a></li>--}}
{{--                        <li><a href="{{url('/contact1')}}">Contact Us</a></li>--}}
                    </ul>
                </li>
                <li><a href="{{url('/lawma1')}}">Lawma Academy</a></li>
                <li class="drop-down"><a href="">About</a>
                    <ul>
{{--                        <li><a href="{{url('/news1')}}">News</a></li>--}}
                        <li><a href="{{url('/commitment1')}}">Our Commitment to the Environment</a></li>
{{--                        <li><a href="#">Academy at a Glance</a></li>--}}
{{--                        <li><a href="#">Professional Services</a></li>--}}
{{--                        <li><a href="#">Social Responsibility</a></li>--}}
{{--                        <li><a href="#">Sustainability</a></li>--}}
{{--                        <li><a href="#">Corporate Identity</a></li>--}}
{{--                        <li><a href="{{url('/support1')}}">Support the Academy</a></li>--}}
                        {{-- <li><a href="{{url('/contact1')}}">Contact Us</a></li> --}}
                    </ul>
                </li>
                <li class="drop-down"><a href="#">Business & Partners</a>
                    <ul>
{{--                        <li><a href="{{url('/business1')}}">Business Services</a></li>--}}
                        <li><a href="{{url('/partnership1')}}">Partnership & Collaboration</a></li>
{{--                        <li><a href="{{url('/Research1')}}">Research & Innovation</a></li>--}}
{{--                        <li><a href="#">About</a></li>--}}
{{--                        <li><a href="#">Continuing Professional</a></li>--}}
{{--                        <li><a href="#">Development</a></li>--}}
                    </ul>
                </li>
                <li class="drop-down"><a href="#">Accounts</a>
                    <ul>
{{--                        <li><a href="{{url('/business1')}}">Business Services</a></li>--}}
                        <li><a href="{{url('/stdregister')}}">Create Student</a></li>
                        <li><a href="{{url('/register')}}">Create Admin</a></li>
{{--                        <li><a href="{{url('/Research1')}}">Research & Innovation</a></li>--}}
                        {{--                        <li><a href="#">About</a></li>--}}
                        {{--                        <li><a href="#">Continuing Professional</a></li>--}}
                        {{--                        <li><a href="#">Development</a></li>--}}
                    </ul>
                </li>
               {{--  <li class="drop-down"><a href="">Support Us</a>
                    <ul>
                        <li><a href="{{url('/donate1')}}">Donate Now</a></li>
                        <!--<li><a href="{{url('/Volunteer1')}}">Volunteer</a></li>-->
{{--                        <li><a href="#">Transforming Lives</a></li>--}}
{{--                        <li><a href="#">Finding Solutions</a></li>--}}
{{--                        <li><a href="#">Inspiring Students</a></li>--}}
{{--                        <li><a href="#">Get Involved</a></li>
                    </ul>--}}
{{--                </li>--}}
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container text-center" data-aos="zoom-out" data-aos-delay="100">
        <h1>Your Future <span>Remastered</span>
        </h1>
{{--        <h2>Join Our Postgraduate Webinars</h2>--}}
        <div class="d-flex justify-content-center mt-3">
            @if(auth()->check() && auth()->user()->user_type !== '1' || (!auth()->check()))
            <a href="{{ url('/new-user') }}" class="btn-get-started">Enroll Now</a>
{{--            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>--}}
            @else
            <a href="{{ url('/enroll') }}" class="btn-get-started">Enroll Now</a>
            @endif
        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-md-4 col-lg-4 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100" style="width: 16rem">
                        <div class="icon"><img class="Card-img" src={{ asset('img/Path-3.png') }} alt=""></div>
                        <h4 class="title"><a href="{{ url('home-two') }}">Our Courses</a></h4>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><img class="Card-img" src={{ asset('img/Group-6.png') }} alt=""></div>
                        <h4 class="title"><a href="">Order a Prospectus</a></h4>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><img class="Card-img"  src={{ asset('img/business-and-trade.png') }} alt=""></div>
                        <h4 class="title"><a href="">Campus Tour</a></h4>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Featured Services Section -->

{{--    <!-- ======= About Section ======= -->--}}
{{--    <section id="about" class="about section-bg">--}}
{{--        <div class="container" data-aos="fade-up">--}}

{{--            <div class="section-title">--}}
{{--                <h3>Our<span> Gallery</span></h3>--}}
{{--            </div>--}}

{{--            <div class="row">--}}
{{--            <div class="col-lg-3 col-md-12 mb-4 mb-lg-0" data-aos="zoom-out" data-aos-delay="100">--}}
{{--                <img--}}
{{--                    src="{{ asset('img/NoPath-4.png') }}"--}}
{{--                    class="w-100 shadow-2-strong rounded mb-4"--}}
{{--                    alt=""--}}
{{--                    style="border: 2px solid #fff;"--}}
{{--                />--}}

{{--                <img--}}
{{--                    src="{{ asset('img/NoPath-10.png') }}"--}}
{{--                    class="w-100 shadow-1-strong rounded mb-4"--}}
{{--                    alt=""--}}
{{--                    style="border: 2px solid #fff;"--}}
{{--                />--}}
{{--            </div>--}}

{{--            <div class="col-lg-3 mb-4 mb-lg-0" data-aos="zoom-out" data-aos-delay="100">--}}
{{--                <img--}}
{{--                    src="{{ asset('img/NoPath-6.png') }}"--}}
{{--                    class="w-100 shadow-1-strong rounded mb-4"--}}
{{--                    alt=""--}}
{{--                    style="border: 2px solid #fff;"--}}
{{--                />--}}

{{--                <img--}}
{{--                    src="{{ asset('img/NoPath-7.png') }}"--}}
{{--                    class="w-100 shadow-1-strong rounded mb-4"--}}
{{--                    alt=""--}}
{{--                    style="border: 2px solid #fff;"--}}
{{--                />--}}
{{--            </div>--}}

{{--            <div class="col-lg-3 mb-4 mb-lg-0" data-aos="zoom-out" data-aos-delay="100">--}}
{{--                <img--}}
{{--                    src="{{ asset('img/NoPath-8.png') }}"--}}
{{--                    class="w-100 shadow-1-strong rounded mb-4"--}}
{{--                    alt=""--}}
{{--                    style="border: 2px solid #fff;"--}}
{{--                />--}}

{{--                <img--}}
{{--                    src="{{ asset('img/NoPath-12.png') }}"--}}
{{--                    class="w-100 shadow-1-strong rounded mb-4"--}}
{{--                    alt=""--}}
{{--                    style="border: 2px solid #fff;"--}}
{{--                />--}}
{{--            </div>--}}

{{--            <div class="col-lg-3 mb-4 mb-lg-0" data-aos="zoom-out" data-aos-delay="100">--}}
{{--                <img--}}
{{--                    src="{{ asset('img/NoPath-5.png') }}"--}}
{{--                    class="w-100 shadow-1-strong rounded mb-4"--}}
{{--                    alt=""--}}
{{--                    style="border: 2px solid #fff;"--}}
{{--                />--}}

{{--                <img--}}
{{--                    src="{{ asset('img/NoPath-11.png') }}"--}}
{{--                    class="w-100 shadow-1-strong rounded mb-4"--}}
{{--                    alt=""--}}
{{--                    style="border: 2px solid #fff;"--}}
{{--                />--}}

{{--            </div>--}}
{{--        </div>--}}
{{--        </div>--}}
{{--    </section><!-- End About Section -->--}}

    <!-- ======= Skills Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="section-title mb-5">
                <h3>Academy<span> Ranking</span></h3>
            </div>

            <div class="row">
{{--                <div class="col-lg-0 col-md-0"></div>--}}
                <div class="col-md-4 col-lg-2 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0 rankbox">
                    <div class="icon-box ranktext" data-aos="fade-up" data-aos-delay="100">
                        <p class="card-text"><strong>Ranked 2nd</strong> in the UK for teaching in the Young University Rankings 2020</p>
                    </div>
                </div>

                <div class="col-md-4 col-lg-2 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0 rankbox">
                    <div class="icon-box ranktext" data-aos="fade-up" data-aos-delay="200" >
                        <p class="card-text">The only UK University in QS World University Rankings <strong>Top 50 Under 50</strong> 2021</p>
                    </div>
                </div>

                <div class="col-md-4 col-lg-2 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0 rankbox">
                    <div class="icon-box ranktext" data-aos="fade-up" data-aos-delay="300">
                        <p class="card-text">A climb of <strong>8 places</strong> in The Times / Sunday Times Good University Guide 2021</p>
                    </div>
                </div>

                <div class="col-md-4 col-lg-2 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0 rankbox">
                    <div class="icon-box ranktext" data-aos="fade-up" data-aos-delay="300">
                        <p class="card-text"><strong>"Amongst the world's top universities"</strong> in 13 subject areas in the QS World University Rankings by Subject 2021</p>
                    </div>
                </div>

                <div class="col-md-4 col-lg-2 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0 rankbox">
                    <div class="icon-box ranktext" data-aos="fade-up" data-aos-delay="300">
                        <p class="card-text"><strong>Ranked 1st</strong> in the UK for teaching in the Young University Rankings 2022</p>
                    </div>
                </div>
{{--                <div class="col-lg-0 col-md-0"></div>--}}
            </div>
        </div>
    </section><!-- End Skills Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="section-title mb-5">
                <h3>Our 2025<span> Vision</span></h3>
            </div>

            <div class="row mb-5">
                <div class="col-md-4 col-lg-3 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0">
                    <div class="icon-box rounded-circle visiontext" data-aos="fade-up" data-aos-delay="100">
                        <img class="Card-img mb-4" src={{ asset('img/presentation.png') }} alt="">
                        <p class="card-text visionbox"><strong>Education & Enterprise</strong></p>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0">
                    <div class="icon-box rounded-circle visiontext " data-aos="fade-up" data-aos-delay="200" >
                        <img class="Card-img mb-4" src={{ asset('img/light-bulb.png') }} alt="">
                        <p class="card-text visionbox"><strong>Research and Innovation</strong></p>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0">
                    <div class="icon-box rounded-circle visiontext" data-aos="fade-up" data-aos-delay="300">
                        <img class="Card-img mb-4" src={{ asset('img/users-group.png') }} alt="">
                        <p class="card-text visionbox"><strong>People and Cluture</strong></p>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0">
                    <div class="icon-box rounded-circle visiontext" data-aos="fade-up" data-aos-delay="300">
                        <img class="Card-img mb-4" src={{ asset('img/hand-shake.png') }} alt="">
                        <p class="card-text visionbox"><strong>Partnerships and Place</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Counts Section -->
</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="row col-12 mb-4">
                    <a href="{{ url('/') }}" class="logo ml-2"><img src={{ asset('img/acedemy.png') }} alt=""></a>
                </div>
                <div class="col-lg-5 col-md-6 footer-contact">
                    <p>At SafeEnviro Academy we offer the highest quality of academic and professional experience in the Waste, Resource & Environmental Industry whilst working closely with some of the leading professional membership organizations in the sector.
                        By studying with us, you will be part of a community driven by a desire to create a safer environment for the future.
                    </p>
                </div>

{{--                <div class="col-lg-1 col-md-6 footer-links link">--}}
{{--                    <h4>Links</h4>--}}
{{--                    <ul>--}}
{{--                        <li></i> <a href="#">Policy</a></li>--}}
{{--                        <li></i> <a href="#">Privacy</a></li>--}}
{{--                        <li></i> <a href="#">Cookies</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}

                <div class="col-lg-3 col-md-6 footer-links address">
                    <h4>Academy Address</h4>
                    <p>
                        69/66 Hatton Garden, <br>
                        Fifth Floor Suites 23, <br>
                        London EC1N 8LE
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Social Media</h4>
                    <div class="social-links mt-3">
                        <a href="#" class=""><i class="icofont-linkedin"></i></a>
                        <a href="#" class=""><i class="icofont-twitter"></i></a>
                        <a href="#" class=""><i class="icofont-youtube"></i></a>
                        <a href="#" class=""><i class="icofont-facebook"></i></a>
                        <a href="#" class=""><i class="icofont-instagram"></i></a>
                        <a href="#" class=""><i class="icofont-whatsapp"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container py-4">
        <div class="col-lg-12 col-md-auto col-sm-6 copyright text-center">
            &copy; Copyright <strong><span>Adage Digital</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            {{--            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>--}}
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('vendor/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('vendor/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('vendor/venobox/venobox.min.js') }}"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>--}}
<script src="{{ asset('vendor/aos/aos.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
