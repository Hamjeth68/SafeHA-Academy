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

            <div class="section-title">
                <h3>Inspiring<span> Students</span></h3>
            </div>

            <div class="row mt-4 px-3">
                <div class="">
                    <p class="text-black-100">
                        Inspiring students is primarily a matter of motivation. When inspired, the students are motivated to engage with the subject and to learn.</p>
                </div>
            </div>


        </div>

    </section>

@endsection
