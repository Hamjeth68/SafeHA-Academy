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
{{--                <option data-symbol="€" data-placeholder="0.00">GBP</option>--}}
{{--                <option data-symbol="$" data-placeholder="0.00">NGN</option>--}}
{{--            </select>--}}
            @if(auth()->check() && auth()->user()->user_type !== '1' || (!auth()->check()))
                <a href="{{url('/welcome')}}" class="text-black-50 font-weight-bold">Staff</a>
            @endif
            @if(auth()->check() && auth()->user()->user_type !== '0')
                <a href="{{url('/stdEdit/'. auth()->user()->id)}}" class="text-black-50 font-weight-bold">Profile</a>
            @endif
            <a href="https://moodle.org/login/index.php" class="text-black-50 font-weight-bold">Alumni</a>
            <a href="https://moodle.org/login/index.php" class="text-black-50 font-weight-bold">Student</a>
            @if(auth()->check())
{{--            <a href="{{ route('logout') }}" method="POST" class="text-black-50 font-weight-bold">Logout--}}
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
            {{--            <a href="#" class="twitter"><i class="icofont-twitter"></i></a>--}}
            {{--            <a href="#" class="facebook"><i class="icofont-facebook"></i></a>--}}
            {{--            <a href="#" class="instagram"><i class="icofont-instagram"></i></a>--}}
            {{--            <a href="#" class="skype"><i class="icofont-skype"></i></a>--}}
            {{--            <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>--}}
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
                @if(!auth()->check())
                <li class="drop-down"><a href="#">Accounts</a>
                    <ul>
{{--                        <li><a href="{{url('/business1')}}">Business Services</a></li>--}}
                        <li><a href="{{url('/stdregister')}}">Create Student</a></li>
{{--                        <li><a href="{{url('/register')}}">Create Admin</a></li>--}}
{{--                        <li><a href="{{url('/Research1')}}">Research & Innovation</a></li>--}}
                        {{--                        <li><a href="#">About</a></li>--}}
                        {{--                        <li><a href="#">Continuing Professional</a></li>--}}
                        {{--                        <li><a href="#">Development</a></li>--}}
                    </ul>
                </li>
                @endif
                {{-- <li class="drop-down"><a href="">Support Us</a>
                    <ul>
                        <li><a href="{{url('/donate1')}}">Donate Now</a></li>
                        <!--<li><a href="{{url('/Volunteer1')}}">Volunteer</a></li>-->
                        {{--                        <li><a href="#">Transforming Lives</a></li>--}}
                        {{--                        <li><a href="#">Finding Solutions</a></li>--}}
                        {{--                        <li><a href="#">Inspiring Students</a></li>--}}
                        {{--                        <li><a href="#">Get Involved</a></li>
                    </ul>
                </li> --}}
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->
