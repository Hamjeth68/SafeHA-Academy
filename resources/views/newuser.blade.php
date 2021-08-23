@extends('layouts.safee')

@section('content')

    <style>
        img.newuserimg {
            height: 200px;
            width: 100%;
            border-radius: 20px;
        }


        .item {
            padding-left: 5px;
            padding-right: 5px;
        }

        .item-card {
            transition: 0.5s;
            cursor: pointer;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            border-radius: 20px;
        }

        .card-text:hover {
            /* background: #106eea; */
            color: #1d2124;
        }

        .custom-green-bg,
        .btn-custom-green {
            background-color: #90e434;
            border-color: #90e434;
            color: #fff;
            border-radius: 20px;

        }

        .item-card-title {
            font-size: 15px;
            transition: 1s;
            cursor: pointer;
        }

        .item-card-title i {
            font-size: 15px;
            transition: 1s;
            cursor: pointer;
            color: #ffa710
        }

        .card-title i:hover {
            transform: scale(1.25) rotate(100deg);
            color: #18d4ca;

        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.3);
        }

        .card-text {
            height: 80px;
            color: #90e434;
        }

        .custom-green-bg,
        .btn-custom-green {
            background-color: #90e434;
            border-color: #90e434;
            color: #fff;
        }

        .card::before,
        .card::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            transform: scale3d(0, 0, 1);
            transition: transform .3s ease-out 0s;
            background: rgba(255, 255, 255, 0.1);
            content: '';
            pointer-events: none;
        }

        .card::before {
            transform-origin: left top;
        }

        .card::after {
            transform-origin: right bottom;
        }

        .card:hover::before,
        .card:hover::after,
        .card:focus::before,
        .card:focus::after {
            transform: scale3d(1, 1, 1);
        }

        @media (max-width: 375px) {
            img {
                height: 50px;
                width: 25%;
            }

            .item {
                padding-left: 5px;
                padding-right: 5px;
            }

            .item-card {
                transition: 0.5s;
                cursor: pointer;
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }

            .custom-green-bg,
            .btn-custom-green {
                background-color: #90e434;
                border-color: #90e434;
                color: #fff;

            }

            .item-card-title {
                font-size: 12px;
                transition: 1s;
                cursor: pointer;
            }

            .item-card-title i {
                font-size: 12px;
                transition: 1s;
                cursor: pointer;
                color: #ffa710
            }

            .card-title i:hover {
                transform: scale(1.25) rotate(100deg);
                color: #18d4ca;

            }

            .card:hover {
                transform: scale(1.05);
                box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.3);
            }

            .card-text {
                height: 20px;
                color: #90e434;
            }

            .custom-green-bg,
            .btn-custom-green {
                background-color: #90e434;
                border-color: #90e434;
                color: #fff;
            }

            .card::before,
            .card::after {
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                transform: scale3d(0, 0, 1);
                transition: transform .3s ease-out 0s;
                background: rgba(255, 255, 255, 0.1);
                content: '';
                pointer-events: none;
            }

            .card::before {
                transform-origin: left top;
            }

            .card::after {
                transform-origin: right bottom;
            }

            .card:hover::before,
            .card:hover::after,
            .card:focus::before,
            .card:focus::after {
                transform: scale3d(1, 1, 1);
            }
        }

    </style>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container mt-2">
            <!--   <div class="card card-block mb-2">
        <h4 class="card-title">Card 1</h4>
        <p class="card-text">Welcom to bootstrap card styles</p>
        <a href="#" class="btn btn-primary">Submit</a>
      </div>   -->
            <div class="row">
                <!-- <div class="col-md-3 col-sm-6 item">
                    <div class="card item-card card-block">
                        <h4 class="card-title text-right"><i class="material-icons">settings</i></h4>
                        <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="Photo of sunset">
                        <h5 class="item-card-title mt-3 mb-3">Sierra Web Development • Owner</h5>
                        <p class="card-text">This is a company that builds websites, web apps and e-commerce solutions.</p>
                    </div>
                </div> -->
                <div class="col-md-3 "></div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="card item-card card-block">
                        <img src="https://static.pexels.com/photos/7357/startup-photos.jpg" alt="Photo of sunset"
                            class="newuserimg">
                        <h5 class="card-title text-center mt-4">Sign Up</h5>
                        <p class="card-text">Register and get details</p>
                        <a href="{{ url('emailForm') }}" class="btn btn-outline-secondary custom-green-bg pl-5 pr-5">Sign
                            Up</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="card item-card card-block">
                        <img src="https://static.pexels.com/photos/262550/pexels-photo-262550.jpeg" alt="Photo of sunset"
                            class="newuserimg">
                        <h5 class="card-title text-center mt-4">Welcome</h5>
                        <p class="card-text">Explore the Safeenviro Acadamy</p>
                        <a href="{{ url('/stdregister') }}"
                            class="btn btn-outline-secondary custom-green-bg pl-5 pr-5">Register</a>
                    </div>
                </div>
                <div class="col-md-3 "></div>
                <!-- <div class="col-md-3 col-sm-6 item">
                    <div class="card item-card card-block">
                        <h4 class="item-card-title text-right"><i class="material-icons">settings</i></h4>
                        <img src="https://static.pexels.com/photos/326424/pexels-photo-326424.jpeg" alt="Photo of sunset">
                        <h5 class="card-title  mt-3 mb-3">ProVyuh</h5>
                        <p class="card-text">This is a company that builds websites, web apps and e-commerce solutions.</p>
                    </div>
                </div> -->
            </div>

        </div>

    </section><!-- End Hero -->


    <!-- End #main -->



@endsection
