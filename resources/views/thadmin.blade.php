@extends('layouts.safee')

@section('content')

    <style>
        .custom-green-bg,
        .btn-custom-green {
            background-color: #90e434;
            border-color: #90e434;
            color: #fff;
        }

        .btn-custom-blue {
            background-color: #204371;
            border-color: #204371;
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
            left: 1%;
        }

        .text-on-image-con .text-con p,
        .text-on-image-con .text-con h4 {
            color: #fff;
        }
        .custom-btn{
            width:48%;
            font-size: 14px;
        }
    </style>

    <section id="pagehead" class="about">
        <div class="container" data-aos="">
            <div class="row mt-4">
                <div class="col-md-1"></div>
                <div class="col-md-8 jumbotron text-center">
                    <h1 class="display-3">Welcome Admin!</h1>
                    <p class="lead">Please login to your dashboard.</p>
                    <hr>
                    <p class="lead">
                        <a class="btn btn-primary btn-sm" href="{{ url('/login') }}" role="button">Continue to homepage</a>
                    </p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>


    </section>

@endsection
