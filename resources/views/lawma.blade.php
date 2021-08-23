


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
{{--    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">--}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha512-Velp0ebMKjcd9RiCoaHhLXkR1sFoCCWXNp6w4zj1hfMifYB5441C+sKeBl/T/Ka6NjBiRfBBQRaQq65ekYz3UQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


</head>
<style>
    body {
        font-family: "Lato", sans-serif !important;
    }

    #hero h1 {
        margin: 0;
        font-size: 48px;
        font-weight: 700;
        line-height: 56px;
        color: #ffff;
        font-family: "Lato", sans-serif;
    }

    #hero h2 {
        color: #ffff;
        margin: 5px 0 30px 0;
        font-size: 24px;
        font-weight: 400;
        font-family: "Lato", sans-serif;
    }

    .nav-menu > ul > li > a:before {
        content: "";
        position: absolute;
        width: 100%;
        height: 2px;
        bottom: -5px;
        left: 0;
        background-color: #f4772e;
        visibility: hidden;
        width: 0px;
        transition: all 0.3s ease-in-out 0s;
    }

    .nav-menu .drop-down ul a:hover, .nav-menu .drop-down ul .active > a, .nav-menu .drop-down ul li:hover > a {
        color: #f4772e;
    }

    #hero {
        width: 100%;
        height: 125vh;
        background: url("../img/lama-cover-image.jpg") top left;
        background-size: cover;
        position: relative;
        margin-top: -100px;
    }

    #hero h1 span {
        color: #f4772e;
    }

    section {
        padding: 45px 0;
        overflow: hidden;
    }

    #featured-services p {
        line-height: 1.8rem;
        font-weight: 500;
        padding: 15px;
        font-size: 20px;
    }

    button.btn.btn-primary.btn-lg {
        background: #f4772e;
        border-color: #ffff;
    }

    .section-title h3 span {
        color: #f4772e;
        font-family: "Lato", sans-serif;
    }

    img.w-100.shadow-1-strong.rounded.mb-4.gpic.aos-init.aos-animate:hover {
        filter: brightness(80%);
    }

    /*img.w-100.shadow-1-strong.rounded.mb-4.gpic {*/
    /*    border: 3px solid #f4772e;*/
    /*}*/

    #footer .footer-top .footer-links ul a:hover {
        text-decoration: none;
        color: #f4772e;
    }

    .back-to-top i {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        width: 40px;
        height: 40px;
        border-radius: 4px;
        background: #f4772e;
        color: #fff;
        transition: all 0.4s;
    }

    #preloader:before {
        content: "";
        position: fixed;
        top: calc(50% - 30px);
        left: calc(50% - 30px);
        border: 6px solid #f4772e;
        border-top-color: #e2eefd;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        -webkit-animation: animate-preloader 1s linear infinite;
        animation: animate-preloader 1s linear infinite;

    }

    .featured-services .title-lawma {
        font-weight: 800;
        margin-bottom: 15px;
        font-size: 30px;
        font-family: "Lato", sans-serif;
    }

    .featured-services p.lawma-para {
        line-height: 1.5rem !important;
        font-weight: 500 !important;
        padding: 0px !important;
        font-size: 15px !important;
    }

    .custom-green-bg,
    .btn-custom-green {
        background-color: #f4772e;
        border-color: #f4772e;
        color: #fff;
    }

    #custom-search-main-input {
        height: calc(2.3em + .75rem + 2px);
    }

    .text-on-image-con {
        position: relative;
    }

    .text-on-image-con .text-con {
        position: absolute;
        width: 100%;
        bottom: 0px;
        /*left: 1%;*/
        padding: 10px;
    }

    .text-on-image-con .text-con p,
    .text-on-image-con .text-con h4 {
        color: #fff;
    }

    .custom-btn{
        width:100%;
        font-size: 20px;
    }

    span.greentitle {
        color: #f4772e;
    }

    .text-on-image-con {
        box-shadow: rgb(0 0 0 / 35%) 0px 5px 15px;
    }

    button.btn.btn-lg.btn-custom-green.custom-btn {
        box-shadow: rgb(0 0 0 / 35%) 0px 5px 15px;
    }

    select {
        border: none;
        font-size: 2.4rem;
        font-weight: 700;
        font-family: "Roboto", sans-serif;
        margin-top: -4px;
        outline: none;
    }
</style>

<body>

<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-lg-flex align-items-center fixed-top" style="background: #f4772e">
    <div class="container d-flex">
        <div class="contact-info mr-auto">
            {{--            <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>--}}
            {{--            <i class="icofont-phone"></i> +1 5589 55488 55--}}
        </div>
        <div class="social-links">
            @if(auth()->check() && auth()->user()->user_type !== '1' || (!auth()->check()))
                <a href="{{url('/welcome')}}" class="text-black-50 font-weight-bold">Staff</a>
            @endif
            <a href="https://moodle.org/login/index.php" class="text-black-50 font-weight-bold">Alumni</a>
            <a href="https://moodle.org/login/index.php" class="text-black-50 font-weight-bold">Student</a>
                @if(auth()->check())

                    {{--<a href="{{ route('logout') }}" method="POST" class="text-black-50 font-weight-bold">Logout</a>--}}
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
                        <li><a href="{{url('/contact1')}}">Contact Us</a></li>
                    </ul>
                </li>
                <li class="drop-down"><a href="{{url('/lawma1')}}">Business & Partners</a>
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
{{--                        <li><a href="{{url('/Research1')}}">Research & Innovation</a></li>--}}
                        {{--                        <li><a href="#">About</a></li>--}}
                        {{--                        <li><a href="#">Continuing Professional</a></li>--}}
                        {{--                        <li><a href="#">Development</a></li>--}}
                    </ul>
                </li>
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container text-center" data-aos="zoom-out" data-aos-delay="100">
        <h1>Welcome to <span>LAWMA Academy</span>
        </h1>
        <h2>A Home of Waste Management Education</h2>
    </div>
</section><!-- End Hero -->

<main id="main">

    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-auto"></div>
            <div class="d-flex justify-content-center align-content-center text-center">
              <a href="https://www.lawmaacademy.com/" class="logo mr-auto"><img src={{ asset('img/lawmaimages/logo.png') }} alt="" style="width: 70%;"></a>
            </div>
                <div class="col-auto"></div>
            </div>

            <div class="row mt-4">
                <div class="">
                    <p class="text-black-100">
                    LAWMA Academy is an educational platform for literacy improvement and career development in waste management. We offer credible hands-on waste management tutelage and programs to all stakeholders in waste management businesses including organisations, professionals, facility managers, students and other public and private entities.
                    <br></br>
                    LAWMA Academy provides the citadel for learning, knowledge exchange, networking, and expertise development for design, adoption and implementation of sustainable waste management solutions.
                    <br></br>
                    LAWMA Academy is therefore the knowledge hub of waste management.
                    As the name implies, this training will cover special areas of interest in waste management as waste management processes are more advanced than just collection, transportation and disposal at landfills.
                    It comprises different areas like Resource Recovery & Waste Management, Smarter Solutions for Segregation & Logistics, Fleet Management, Waste Recycling, waste PSP models, Waste Financing, Waste Audits, Forensic Waste Analysis, Waste to wealth etc.
                    This training will improve participants skills in waste management, promote efficiency and afford participants the opportunity to translate what they have learnt to innovative business ideas that will make them financially independent, solve waste management problems and create employment which will help boost the economy.
                    This training will engage key stakeholders from environmental consultants, professionals who work in the waste management sector or on waste management infrastructural projects, project managers, administrators, coordinators and other professionals who work on community based projects.
                    Trainings will be designed for interested applicants in special area of interest in waste management on need assessment.

                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col text-center">
                    <a href="https://www.lawmaacademy.com/"><button type="button" class="btn btn-primary btn-lg"><i class="fa fa-arrow-circle-right mr-2"></i>Visit LAWMA Academy</button></a>
                </div>
            </div>

        </div>
    </section><!-- End Featured Services Section -->


    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-md-4 col-lg-3 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="flip-left" data-aos-delay="100">
                        <div class="icon"><img class="Card-lawimg" src={{ asset('img/portal/Training.jpg') }} alt="" style="margin-left: -15px;"></div>
                        <h3 class="title-lawma">Training & Workshop</h3>
                        <p class="lawma-para">Delivering a range of waste and resource management solutions</p>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="flip-left" data-aos-delay="200">
                        <div class="icon"><img class="Card-lawimg" src={{ asset('img/portal/Consultant.jpg') }} alt="" style="margin-left: -15px;"></div>
                        <h3 class="title-lawma">Consulting</h3>
                        <p class="lawma-para">Multi-disciplinary consultancy specializing in the areas of environment, waste management, planning, engineering and logistics</p>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="flip-left" data-aos-delay="300">
                        <div class="icon"><img class="Card-lawimg"  src={{ asset('img/portal/Career.jpg') }} alt="" style="margin-left: -15px;"></div>
                        <h3 class="title-lawma">Career Support</h3>
                        <p class="lawma-para">Planning a career! Once you got it your higher education qualification could open up plenty of career options</p>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="flip-left" data-aos-delay="300">
                        <div class="icon"><img class="Card-lawimg"  src={{ asset('img/portal/International.png') }} alt="" style="margin-left: -15px;"></div>
                        <h3 class="title-lawma">International Recognition</h3>
                        <p class="lawma-para">Become a Chartered Waste professional.  Our international qualifications offer learners great opportunities for career development</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="featured-services" class="featured-services">
        <div class="section-title pt-3">
            <h3>Our<span> Courses</span></h3>
        </div>

        <div class="row pt-5 mr-0 ml-0">
            @foreach($products as $product)
            <div class="col-md-6 col-lg-4 text-center" style="padding: 50px; padding-top:10px" data-aos="fade-down" data-aos-delay="300">
                <div class="text-on-image-con">
                    <img src="{{asset('img/Group 4453.png')}}" style="" class="img-fluid" alt="" srcset="">
                    <div class="text-con">
                        <h4>{{ $product->p_title }}<span class="greentitle"></span></h4>
                        {{-- <p>At SafeEnviro academy we offer the highest quality of academic  and professional experience in the Waste</p>--}}
                    </div>
                </div>
                <div class="btn-con mt-2" data-aos="flip-up">
                    <button class="btn btn-lg btn-custom-green custom-btn" data-toggle="modal" data-target="#course-{{ $product->id }}">View Course</button>
                    {{-- <a href="{{ url('book-now') }}"><button class="btn btn-lg btn-custom-blue custom-btn ml-1 float-right">Pay Here</button></a>--}}
                </div>

            </div>

                <div class="modal fade" id="course-{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999;">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalLabel">{{$product->p_title}}</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h4>Description</h4>
                                <p>
                                    {!! $product->p_description !!}
                                </p>
                                <div class="row col-lg-6 col-md-auto float-right">
                                    <h1 class="d-inline float-right px-1 ">Fee:</h1>
                                    {{--                                                <select id="forex-rate" name="rate" class="d-inline float-right total" >--}}
                                    {{--                                                    @foreach($rates as $rate)--}}
                                    {{--                                                        <option value="{{ $rate->id }}" id="base" name="{{$rate->code}}" class="cur"--}}
                                    {{--                                                                {{ \Illuminate\Support\Facades\Session::get('currency') === $rate->id ? 'selected' : '' }} }}>{{ $rate->symbol }}</option>--}}
                                    {{--                                                    @endforeach--}}
                                    {{--                                                </select>--}}
                                    <h1 class="float-right px-1" id="forex-amount">£ {{$product->p_amount}}</h1>
                                    <h1 class="float-right" id="forex-newamount"></h1>
                                </div>
                            </div>
                            <div class="modal-footer col-lg-12">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                @if(auth()->check() && auth()->user()->user_type !== '1' || (!auth()->check()))
                                    <a href="{{ url('/new-user') }}"><button type="button" class="btn btn-primary">Enroll Now</button></a>
                                @else
                                    <a href="{{ url('/enroll') }}"><button type="button" class="btn btn-primary">Enroll Now</button></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </section>


    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h3>Our<span> Gallery</span></h3>
            </div>

            <div class="row">
            <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <a href="{{ asset('img/lawmanewimages/g-1.jpeg') }}" class="lightbox" data-fancybox="'gallery1">
                    <img
                    src="{{ asset('img/lawmanewimages/g-1.jpeg') }}"
                    class="w-100 shadow-1-strong rounded mb-4 gpic"
                    alt=""
                    data-aos="zoom-out-down"
                />
                </a>

                <a href="{{ asset('img/lawmanewimages/g-2.jpeg') }}" class="lightbox" data-fancybox="'gallery1">
                <img
                    src="{{ asset('img/lawmanewimages/g-2.jpeg') }}"
                    class="w-100 shadow-1-strong rounded mb-4 gpic"
                    alt=""
                    data-aos="zoom-out-down"
                />
                </a>

                <a href="{{ asset('img/lawmanewimages/g-3.jpeg') }}" class="lightbox" data-fancybox="'gallery1">
                <img
                    src="{{ asset('img/lawmanewimages/g-3.jpeg') }}"
                    class="w-100 shadow-1-strong rounded mb-4 gpic"
                    alt=""
                    data-aos="zoom-out-down"
                />
                </a>

                <a href="{{ asset('img/lawmanewimages/g-14.jpeg') }}" class="lightbox" data-fancybox="'gallery1">
                    <img
                        src="{{ asset('img/lawmanewimages/g-14.jpeg') }}"
                        class="w-100 shadow-1-strong rounded mb-4 gpic"
                        alt=""
                        data-aos="zoom-out-down"
                    />
                </a>

                <a href="{{ asset('img/lawmanewimages/g-15.jpeg') }}" class="lightbox" data-fancybox="'gallery1">
                    <img
                        src="{{ asset('img/lawmanewimages/g-15.jpeg') }}"
                        class="w-100 shadow-1-strong rounded mb-4 gpic"
                        alt=""
                        data-aos="zoom-out-down"
                    />
                </a>

                <a href="{{ asset('img/lawmanewimages/g-21.jpeg') }}" class="lightbox" data-fancybox="'gallery1">
                    <img
                        src="{{ asset('img/lawmanewimages/g-21.jpeg') }}"
                        class="w-100 shadow-1-strong rounded mb-4 gpic"
                        alt=""
                        data-aos="zoom-out-down"
                    />
                </a>

                <a href="{{ asset('img/lawmanewimages/g-22.jpeg') }}" class="lightbox" data-fancybox="'gallery1">
                    <img
                        src="{{ asset('img/lawmanewimages/g-22.jpeg') }}"
                        class="w-100 shadow-1-strong rounded mb-4 gpic"
                        alt=""
                        data-aos="zoom-out-down"
                    />
                </a>
            </div>

            <div class="col-lg-3 mb-4 mb-lg-0" >
                <a href="{{ asset('img/lawmanewimages/g-4.jpeg') }}" class="lightbox" data-fancybox="'gallery1">
                <img
                    src="{{ asset('img/lawmanewimages/g-4.jpeg') }}"
                    class="w-100 shadow-1-strong rounded mb-4 gpic"
                    alt=""
                    data-aos="zoom-out-down"
                />
                </a>

                <a href="{{ asset('img/lawmanewimages/g-5.jpeg') }}" class="lightbox" data-fancybox="'gallery1">
                <img
                    src="{{ asset('img/lawmanewimages/g-5.jpeg') }}"
                    class="w-100 shadow-1-strong rounded mb-4 gpic"
                    alt=""
                    data-aos="zoom-out-down"
                />
                </a>

                <a href="{{ asset('img/lawmanewimages/g-6.jpeg') }}" class="lightbox" data-fancybox="'gallery1">
                <img
                    src="{{ asset('img/lawmanewimages/g-6.jpeg') }}"
                    class="w-100 shadow-1-strong rounded mb-4 gpic"
                    alt=""
                    data-aos="zoom-out-down"
                />
                </a>

                <a href="{{ asset('img/lawmanewimages/g-16.jpeg') }}" class="lightbox" data-fancybox="'gallery1">
                    <img
                        src="{{ asset('img/lawmanewimages/g-16.jpeg') }}"
                        class="w-100 shadow-1-strong rounded mb-4 gpic"
                        alt=""
                        data-aos="zoom-out-down"
                    />
                </a>

                <a href="{{ asset('img/lawmanewimages/g-17.jpeg') }}" class="lightbox" data-fancybox="'gallery1">
                    <img
                        src="{{ asset('img/lawmanewimages/g-17.jpeg') }}"
                        class="w-100 shadow-1-strong rounded mb-4 gpic"
                        alt=""
                        data-aos="zoom-out-down"
                    />
                </a>

                <a href="{{ asset('img/lawmanewimages/g-20.jpeg') }}" class="lightbox" data-fancybox="'gallery1">
                    <img
                        src="{{ asset('img/lawmanewimages/g-20.jpeg') }}"
                        class="w-100 shadow-1-strong rounded mb-4 gpic"
                        alt=""
                        data-aos="zoom-out-down"
                    />
                </a>
            </div>

            <div class="col-lg-3 mb-4 mb-lg-0">
                <a href="{{ asset('img/lawmanewimages/g-7.jpeg') }}" class="lightbox" data-fancybox="'gallery1">
                <img
                    src="{{ asset('img/lawmanewimages/g-7.jpeg') }}"
                    class="w-100 shadow-1-strong rounded mb-4 gpic"
                    alt=""
                    data-aos="zoom-out-down"
                />
                </a>

                <a href="{{ asset('img/lawmanewimages/g-8.jpeg') }}" class="lightbox" data-fancybox="'gallery1">
                <img
                    src="{{ asset('img/lawmanewimages/g-8.jpeg') }}"
                    class="w-100 shadow-1-strong rounded mb-4 gpic"
                    alt=""
                    data-aos="zoom-out-down"
                />
                </a>

                <a href="{{ asset('img/lawmanewimages/g-9.jpeg') }}" class="lightbox" data-fancybox="'gallery1">
                <img
                    src="{{ asset('img/lawmanewimages/g-9.jpeg') }}"
                    class="w-100 shadow-1-strong rounded mb-4 gpic"
                    alt=""
                    data-aos="zoom-out-down"
                />
                </a>

                <a href="{{ asset('img/lawmanewimages/g-10.jpeg') }}" class="lightbox" data-fancybox="'gallery1">
                <img
                    src="{{ asset('img/lawmanewimages/g-10.jpeg') }}"
                    class="w-100 shadow-1-strong rounded mb-4 gpic"
                    alt=""
                    data-aos="zoom-out-down"
                />
                </a>

                <a href="{{ asset('img/lawmanewimages/g-23.jpeg') }}" class="lightbox" data-fancybox="'gallery1">
                    <img
                        src="{{ asset('img/lawmanewimages/g-23.jpeg') }}"
                        class="w-100 shadow-1-strong rounded mb-4 gpic"
                        alt=""
                        data-aos="zoom-out-down"
                    />
                </a>

                <a href="{{ asset('img/lawmanewimages/g-24.jpeg') }}" class="lightbox" data-fancybox="'gallery1">
                    <img
                        src="{{ asset('img/lawmanewimages/g-24.jpeg') }}"
                        class="w-100 shadow-1-strong rounded mb-4 gpic"
                        alt=""
                        data-aos="zoom-out-down"
                    />
                </a>
            </div>

            <div class="col-lg-3 mb-4 mb-lg-0" >
                <a href="{{ asset('img/lawmanewimages/g-11.jpeg') }}" class="lightbox" data-fancybox="'gallery1">
                <img
                    src="{{ asset('img/lawmanewimages/g-11.jpeg') }}"
                    class="w-100 shadow-1-strong rounded mb-4 gpic"
                    alt=""
                    data-aos="zoom-out-down"
                />
                </a>

                <a href="{{ asset('img/lawmanewimages/g-12.jpeg') }}" class="lightbox" data-fancybox="'gallery1">
                <img
                    src="{{ asset('img/lawmanewimages/g-12.jpeg') }}"
                    class="w-100 shadow-1-strong rounded mb-4 gpic"
                    alt=""
                    data-aos="zoom-out-down"
                />
                </a>

                <a href="{{ asset('img/lawmanewimages/g-13.jpeg') }}" class="lightbox" data-fancybox="'gallery1">
                <img
                    src="{{ asset('img/lawmanewimages/g-13.jpeg') }}"
                    class="w-100 shadow-1-strong rounded mb-4 gpic"
                    alt=""
                    data-aos="zoom-out-down"
                />
                </a>

                <a href="{{ asset('img/lawmanewimages/g-18.jpeg') }}" class="lightbox" data-fancybox="'gallery1">
                    <img
                        src="{{ asset('img/lawmanewimages/g-18.jpeg') }}"
                        class="w-100 shadow-1-strong rounded mb-4 gpic"
                        alt=""
                        data-aos="zoom-out-down"
                    />
                </a>

                <a href="{{ asset('img/lawmanewimages/g-19.jpeg') }}" class="lightbox" data-fancybox="'gallery1">
                    <img
                        src="{{ asset('img/lawmanewimages/g-19.jpeg') }}"
                        class="w-100 shadow-1-strong rounded mb-4 gpic"
                        alt=""
                        data-aos="zoom-out-down"
                    />
                </a>

                <a href="{{ asset('img/lawmanewimages/g-25.jpeg') }}" class="lightbox" data-fancybox="'gallery1">
                    <img
                        src="{{ asset('img/lawmanewimages/g-25.jpeg') }}"
                        class="w-100 shadow-1-strong rounded mb-4 gpic"
                        alt=""
                        data-aos="zoom-out-down"
                    />
                </a>

                <a href="{{ asset('img/lawmanewimages/g-26.jpeg') }}" class="lightbox" data-fancybox="'gallery1">
                    <img
                        src="{{ asset('img/lawmanewimages/g-26.jpeg') }}"
                        class="w-100 shadow-1-strong rounded mb-4 gpic"
                        alt=""
                        data-aos="zoom-out-down"
                    />
                </a>

            </div>
        </div>
        </div>
    </section><!-- End About Section -->

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

<div class="modal fade" id="course1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Introduction to Waste Management </h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4>Topics</h4>
                <p><strong>
                        1a – Introduction to the Management of Waste and Resources<br>
                        1b – Practical Waste Management<br>
                        1c – Resource Management/Sustainable Approach<br>
                    </strong>
                </p>
            </div>
            <div class="modal-body">
                <h4>What this cover</h4>
                <p>
                    • Introduction to the waste industry<br>
                    • The circular economy and waste prevention<br>
                    • Collection of waste<br>
                    • Treatment of bio-degradable waste<br>
                    • Recycling<br>
                    • Understanding of resource and waste management systems, waste composition,
                    industry best practice and national waste strategies in your day-to day work.<br>
                    • How to contribute to your organisation’s compliance with waste legislation including
                    Duty of Care responsibilities and hazardous waste management<br>
                    • Options available for the prevention, recovery, reuse, treatment and disposal of waste
                    and resources throughout the whole management system<br>
                    • The role of the regulator and how effective communication can change behaviour<br>
                    • Circular Economy principles<br>
                    • Overview of the essential workings of an MRF, End of Life Vehicle Site, and Energy from
                    Waste site (depending on the sites visited)<br>
                    • Update your knowledge on key industry topics including the waste hierarchy, extended
                    producer responsibility, recycling collections, thermal treatment, landfills, and biological
                    treatment<br>
                    • Create your own Circular Economy action plan<br>
                    • Waste as a resource<br>
                    • The environmental impact of waste<br>
                    • The cost effectiveness of managing waste efficiently<br>
                    • Understanding and applying the waste hierarchy<br></br>
                    Who can participate?<br>
                    This course is for anyone new to the waste and resources sector, those currently dealing with
                    their organisation’s waste and resources, and anyone wishing to develop or change their
                    career. It is particularly relevant to those in the local authority and private sector and those
                    who need to understand International waste policy.

                </p>
                <div class="row col-lg-6 col-md-auto float-right">
                    <h1 class="d-inline float-right px-1 ">Fee:</h1>
                    <select id="forex-rate" name="rate" class="d-inline float-right focus-only">
                        <option value="0" id="base" selected>&#163</option>
                        <option value="1.41" name="USD">$</option>
                        <option value="584.35" name="NGN">&#8358</option>
                    </select>
                    <h1 class="float-right px-1" id="forex-amount">99</h1>
                    <h1 class="float-right" id="forex-newamount"></h1>
                </div>
            </div>
            <div class="modal-footer col-lg-12">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="{{ url('book-now') }}"><button type="button" class="btn btn-primary">Enroll Now</button></a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="course2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Hazardous Waste</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4>Topics</h4>
                <p><strong>
                        2a – Hazardous Waste Classifications<br>
                        2b – Impact of Hazardous Waste on our environment<br>
                        2c – Management of Hazardous Waste<br>
                    </strong>
                </p>
            </div>
            <div class="modal-body">
                <h4>What this cover</h4>
                <p>
                    • Introduction to Hazardous Waste<br>
                    • Types of Hazardous Waste & how to manage effectively<br>
                    • Specific regulations relating to the management of hazardous wastes<br>
                    • Operational activities for waste producers, carriers, and waste management sites<br>
                    identify the impact of hazardous waste regulations on operational activities for
                    producers, carriers, and waste sites<br>
                    • Using the various definitions and classifications of hazardous wastes<br>
                    • Understand the main hazards and risks associated with the management of industrial
                    hazardous wastes, including its production, treatment, and disposal<br>
                    • Understand the range of technical options available for the effective management of
                    industrial hazardous wastes<br>
                    • Main controls on the transport of hazardous waste<br>
                    • Understand the effect of the regulations on operational activities for waste producers,
                    carriers, and waste management site<br>
                    • Understanding and applying the waste hierarchy<br></br>
                    Who can participate?<br>
                    This course is for anyone new to the waste and resources sector, those currently dealing with their organization’s waste and resources, and anyone wishing to develop or change their career. It is particularly relevant to those in the local authority and private sector and those who need to understand International waste policy

                </p>
                <div class="row col-lg-6 col-md-auto float-right">
                    <h1 class="d-inline float-right px-1 ">Fee:</h1>
                    <select id="forex-rate-2" name="rate" class="d-inline float-right">
                        <option value="0" id="base-2" selected>&#163</option>
                        <option value="1.41" name="USD">$</option>
                        <option value="584.35" name="NGN">&#8358</option>
                    </select>
                    <h1 class="float-right px-1" id="forex-amount-2">175</h1>
                    <h1 class="float-right" id="forex-newamount-2"></h1>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="{{ url('book-now') }}"><button type="button" class="btn btn-primary">Enroll Now</button></a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="course3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Waste Legislation</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4>Topics</h4>
                <p><strong>
                        3a – Implications of Waste Legislation<br>
                        3b – Waste Legislations that will benefit Nigeria<br>
                        3c – Duty of Care<br>
                    </strong>
                </p>
            </div>
            <div class="modal-body">
                <h4>What this cover</h4>
                <p>
                    • Key issues in relation to waste definition<br>
                    • The practical implications of Duty of Care<br>
                    • Implications of environmental permitting<br>
                    • Waste controls including waste pre-treatment and waste acceptance criteria<br>
                    • Code of practice<br>
                    • Required documentation, including waste transfer notes and waste audits<br>
                    • Your role and that of others in directing how waste is managed and controlled<br></br>

                    Who can participate?<br>
                    This course is ideal for anyone involved in the production, transport, handling, treatment,
                    control or disposal of waste that needs to understand their duty of care responsibilities and
                    how to comply with waste legislation and the waste code of practice.
                </p>
                <div class="row col-lg-6 col-md-auto float-right">
                    <h1 class="d-inline float-right px-1 ">Fee:</h1>
                    <select id="forex-rate-3" name="rate" class="d-inline float-right">
                        <option value="0" id="base-3" selected>&#163</option>
                        <option value="1.41" name="USD">$</option>
                        <option value="584.35" name="NGN">&#8358</option>
                    </select>
                    <h1 class="float-right px-1" id="forex-amount-3">99</h1>
                    <h1 class="float-right" id="forex-newamount-3"></h1>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="{{ url('book-now') }}"><button type="button" class="btn btn-primary">Enroll Now</button></a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="course4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Compliance</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4>Topics</h4>
                <p><strong>
                        4a – Duty of Care, Waste Transfer Notes & Waste Audits<br>
                        4b – Environmental Permits/Exceptions<br>
                    </strong>
                </p>
            </div>
            <div class="modal-body">
                <h4>What this cover</h4>
                <p>
                    • Identify how key legislation relates to the requirements for waste environmental
                    permits<br>
                    • The differences between a standard rule and a bespoke permit and how to identify
                    which may apply to your activity<br>
                    • Identify when transfer, variation and surrender applications may also be required<br>
                    • Understand the relevant parts of the application forms and other information required
                    when submitting applications under the Environmental Permitting Regime<br>
                    • Identify appropriate guidance and templates to produce supporting documents as part
                    of applications<br></br>

                    Who can participate?<br>
                    This course is ideal for anyone involved in the production, transport, handling, treatment,
                    control, or disposal of waste that needs to understand their duty of care responsibilities and
                    how to comply with waste legislation and the waste code of practice.

                </p>
                <div class="row col-lg-6 col-md-auto float-right">
                    <h1 class="d-inline float-right px-1 ">Fee:</h1>
                    <select id="forex-rate-4" name="rate" class="d-inline float-right">
                        <option value="0" id="base-4" selected>&#163</option>
                        <option value="1.41" name="USD">$</option>
                        <option value="584.35" name="NGN">&#8358</option>
                    </select>
                    <h1 class="float-right px-1" id="forex-amount-4">20</h1>
                    <h1 class="float-right" id="forex-newamount-4"></h1>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="{{ url('book-now') }}"><button type="button" class="btn btn-primary">Enroll Now</button></a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="course5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Landfill Management </h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4>Topics</h4>
                <p><strong>
                        5a – Management of Landfill Gas & Groundwater<br>
                        5b – Leachate Management<br>
                        5c – Landfills: Closure, Aftercare & Economy<br>
                    </strong>
                </p>
            </div>
            <div class="modal-body">
                <h4>What this cover</h4>
                <p>
                    • Understand how and why landfill gas is produced, what effects it can have on the natural and built environment and best practice in managing the gas<br>
                    • Confidently, safely and cost-effectively manage and control those aspects of landfill gas<br>
                    that you are responsible for, including best practice design, installation, operations and
                    monitoring<br>
                    • Compare a full range of different landfill gas management and treatment systems and
                    infrastructure and understand their application and opportunities<br>
                    • How to safely sample, monitor and obtain data on landfill gas and groundwater<br>
                    • Understand monitoring requirements and procedures and choose appropriate
                    monitoring techniques<br>
                    • How to use and maintain monitoring equipment<br>
                    • Understand the data collected to make decisions and act<br>
                    • Explain the basic principles of leachate generation<br>
                    • Identify the key contaminants within leachate and the risks that they pose<br>
                    • Identify of the most adopted treatment processes and systems in the UK and overseas,
                    including methane stripping, chemical treatment, various biological processes, and
                    polishing processes<br>
                    • Be aware of the various options for procurement of leachate treatment plants and key
                    engineering constraints and construction issues to be considered<br>
                    • Identify landfill closure constraints including health, safety and legal issues<br>
                    • Hydrology and geotechnical issues within a closed landfill<br>
                    • Identify requirements for the closure plan and requirements for proof of stabilization<br>
                    • Identify key requirements for post-closure management of sites<br>
                    • Prioritize potential options for site development including understanding risks and
                    requirements for monitoring and the due diligence process<br>
                    • Evaluate opportunities for maximizing economic returns from a closed landfill<br></br>

                    Who can participate?<br>
                    This course is suitable for a wide range of people who have the responsibility for design,
                    installation, management and regulation of landfill gas control systems and anyone who
                    requires an in-depth and clear understanding of the technical and managerial issues. Past
                    attendees have included site and system managers, monitoring technicians, engineers,
                    treatment system operatives, site managers, specialist services providers, enforcement
                    officers and planners.
                </p>
                <div class="row col-lg-6 col-md-auto float-right">
                    <h1 class="d-inline float-right px-1 ">Fee:</h1>
                    <select id="forex-rate-5" name="rate" class="d-inline float-right">
                        <option value="0" id="base" selected>&#163</option>
                        <option value="1.41" name="USD">$</option>
                        <option value="584.35" name="NGN">&#8358</option>
                    </select>
                    <h1 class="float-right px-1" id="forex-amount-5">350</h1>
                    <h1 class="float-right" id="forex-newamount-5"></h1>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="{{ url('book-now') }}"><button type="button" class="btn btn-primary">Enroll Now</button></a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="course6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Specialist Course</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4>Topics</h4>
                <h5>
                    Specialist Course (Including Emerging Trends, Corporate Waste Management etc)<br>
                </h5>
                <p><strong>
                        6a – Smarter Solutions<br>
                        6b – Waste Crimes, Audits & Enforcing Environmental Legislation<br>
                        6c – Creating a New Revenue Stream<br>
                        6d – Safety at Waste Sites (Fire Safety etc)<br>
                    </strong>
                </p>
            </div>
            <div class="modal-body">
                <h4>What this cover</h4>
                <p>
                    • The cost effective & smarter approach of managing waste efficiently<br>
                    • Intelligence sharing and how to embed in processes<br>
                    • How to use apps/CRMs to improve on data collection and logistics<br>
                    • Introduction to new technology that could improve management of waste<br>
                    • How to plan and deliver an audit of your waste arising's<br>
                    • How to evaluate data from an internal waste audit and identify key findings<br>
                    • Identify areas for improvement relating to non-compliance and/or cost savings
                    control how premises and assets are managed, including environmental permits<br>
                    • How to recognise offences, take appropriate basic enforcement action such as warnings,
                    issue statutory notices and gather appropriate evidence to assist in an investigation for a
                    prosecution.<br>
                    • Understanding the rules governing an investigation for a prosecution and be able to
                    carry out simple interviews in their investigations.<br>
                    • How to develop some skills in running an investigation and preparing prosecution file<br>
                    • Guidance relevant to fire prevention for waste facilities<br>
                    • Key responsibilities regarding fire prevention for a responsible/competent person and
                    site managers<br>
                    • Causes and consequences of fires within waste and recycling facilities and how these can
                    be prevented<br>
                    • Know what to consider when creating the plan for your site<br>

                </p>

                <div class="row col-lg-6 col-md-auto float-right">
                    <h1 class="d-inline float-right px-1 ">Fee:</h1>
                    <select id="forex-rate-6" name="rate" class="d-inline float-right">
                        <option value="0" id="base-6" selected>&#163</option>
                        <option value="1.41" name="USD">$</option>
                        <option value="584.35" name="NGN">&#8358</option>
                    </select>
                    <h1 class="float-right px-1" id="forex-amount-6">400</h1>
                    <h1 class="float-right" id="forex-newamount-6"></h1>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="{{ url('book-now') }}"><button type="button" class="btn btn-primary">Enroll Now</button></a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="course7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Fire Safety Course</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body">
                <h4>Topics</h4>
                <h5>
                    Specialist Course (Including Emerging Trends, Corporate Waste Management etc)<br>
                </h5>
                <p><strong>
                        The Fire Safety Course is designed to raise awareness of fire hazards in the workplace and how to act
                        safely in the event of an emergency fire situation, including selecting and using the correct fire
                        extinguisher. The course is also designed to train staff in your fire safety procedures.
                    </strong>
                </p>
            </div>
            <div class="modal-body">
                <h4>What this cover</h4>
                <p>
                    • The cost effective & smarter approach of managing waste efficiently<br>
                    • Intelligence sharing and how to embed in processes<br>
                    • How to use apps/CRMs to improve on data collection and logistics<br>
                    • Introduction to new technology that could improve management of waste<br>
                    • How to plan and deliver an audit of your waste arising's<br>
                    • How to evaluate data from an internal waste audit and identify key findings<br>
                    • Identify areas for improvement relating to non-compliance and/or cost savings
                    control how premises and assets are managed, including environmental permits<br>
                    • How to recognise offences, take appropriate basic enforcement action such as warnings,
                    issue statutory notices and gather appropriate evidence to assist in an investigation for a
                    prosecution.<br>
                    • Understanding the rules governing an investigation for a prosecution and be able to
                    carry out simple interviews in their investigations.<br>
                    • How to develop some skills in running an investigation and preparing prosecution file<br>
                    • Guidance relevant to fire prevention for waste facilities<br>
                    • Key responsibilities regarding fire prevention for a responsible/competent person and
                    site managers<br>
                    • Causes and consequences of fires within waste and recycling facilities and how these can
                    be prevented<br>
                    • Know what to consider when creating the plan for your site<br>
                </p>
                <p>
                <h6>Who can choose this course? </h6>
                This course is ideal for anyone interested in understanding how fires start and continue, identify the
                dangers of fire, understand the effects of fire, know how to react in an emergency, understand when and
                how to tackle a small fire and understand how to identify and use the correct extinguisher.
                </p>

                <div class="row col-lg-6 col-md-auto float-right">
                    <h1 class="d-inline float-right px-1 ">Fee:</h1>
                    <select id="forex-rate-6" name="rate" class="d-inline float-right">
                        <option value="0" id="base-6" selected>&#163</option>
                        <option value="1.41" name="USD">$</option>
                        <option value="584.35" name="NGN">&#8358</option>
                    </select>
                    <h1 class="float-right px-1" id="forex-amount-6">200</h1>
                    <h1 class="float-right" id="forex-newamount-6"></h1>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="{{ url('book-now') }}"><button type="button" class="btn btn-primary">Enroll Now</button></a>
            </div>
        </div>
    </div>
</div>



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
<script src="{{ asset('vendor/aos/aos.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js" integrity="sha512-j7/1CJweOskkQiS5RD9W8zhEG9D9vpgByNGxPIqkO5KrXrwyDAroM9aQ9w8J7oRqwxGyz429hPVk/zR6IOMtSA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Template Main JS File -->
<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
