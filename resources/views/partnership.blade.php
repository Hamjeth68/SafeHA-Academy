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
            <h3>Busines,Partnership & <span> Collaboration </span></h3>
        </div>

        <div class="row mt-4">
            <div class="">
                <p class="text-black-100">
                    If you are a business or organisation of any size within the private, public or third sectors, based locally, nationally or internationally and would like to access academic expertise and specialist knowledge to drive your business idea or project forward, a Partnership with SafeEnviro could help you achieve the results you need.
                    </p>

                <p class="text-black-100"><B>Our business in a nutshell</B>
                </p>

                <p class="text-black-100">
                    Our mission is to make a sustainable future possible. To some, waste may seem like an ordinary part of everyday life, but we know it has extraordinary potential. We see all waste as a resource and use our facilities and processes to transform it into valuable commodities for every sector, industry and community.
                </p>


                <p class="text-black-100">
                    Work with us through Research Partnerships, Knowledge Transfer Schemes and Research Studentships.
                </p>


                <p class="text-black-100">
                    At the Safeenviro Academy, we bring together real-word industry challenges and academic curiosity through bespoke collaboration.
                </p>


                <p class="text-black-100">
                    Collaboration helps provide opportunities for students, research and business development that no one institution can provide alone.
                </p>

            </div>
        </div>


    </div>

</section>


 <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services" style="margin-top: -125px">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-md-4 col-lg-4 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <img src="{{ asset('img/part1 (1).png') }}" class="img-fluid" alt="">
                    </div>
                </div>

                 <div class="col-md-4 col-lg-4 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <img src="{{ asset('img/part1 (2).png') }}" class="img-fluid" alt="">
                    </div>
                </div>

                 <div class="col-md-4 col-lg-4 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <img src="{{ asset('img/part1 (3).png') }}" class="img-fluid" alt="">
                    </div>
                </div>

                 <div class="col-md-4 col-lg-4 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <img src="{{ asset('img/part1 (4).png') }}" class="img-fluid" alt="">
                    </div>
                </div>

                 <div class="col-md-4 col-lg-4 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <img src="{{ asset('img/part1 (5).png') }}" class="img-fluid" alt="">
                    </div>
                </div>

                 <div class="col-md-4 col-lg-4 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <img src="{{ asset('img/part1 (6).png') }}" class="img-fluid" alt="">
                    </div>
                </div>



            </div>

            <div class="row">
                <div class="col-md-6 col-lg-6 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <img src="{{ asset('img/part1 (7).png') }}" class="img-fluid" alt="">
                    </div>
                </div>

                 <div class="col-md-6 col-lg-6 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <img src="{{ asset('img/part1 (8).png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Featured Services Section -->




@endsection
