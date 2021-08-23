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
            <h3>Why SafeEnviro<span> Academy</span></h3>
        </div>

        <div class="row mt-4 px-3">
            <div class="">
                <p class="text-black-100">
                    At SafeEnviro Academy we offer the highest quality of academic and professional experience in the Waste, Resource & Environmental Industry whilst working closely with some of the leading professional membership organizations in the sector.
                    By studying with us, you will be part of a community driven by a desire to create a safer environment for the future.
                </p>
                
                  <p class="text-black-100">
                      Professional and interdisciplinary, our program is designed for future leaders in environment and sustainability fields. Graduates possess wide knowledge of environmental issues and comprehensive literacy in sustainability topics, along with deep skills in their areas of specialisation, which can include, for example, climate change, development, biophysical science, energy efficiency and modelling, and education and social change.
                </p>
                
                  <p class="text-black-100">
                      Sustainable resource and waste management is about using material resources efficiently to reduce the amount of waste produced and, where waste is generated, dealing with it in a way that actively contributes to the economic, social and environmental goals of sustainable development.
                </p>
                
                  <p class="text-black-100">
                      Students and staff are large consumers of goods and services in relation to their study, teaching and research.  Each course has a consequence resulting from the combined impact of the manufacture, transport, use and disposal of that product.
                </p>
            </div>
        </div>


    </div>

</section>

 <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services" style="margin-top: -125px">
        <div class="container" data-aos="fade-up">

            <div class="row mb-5">
                
                <div class="col-md-4 col-lg-4 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <img src="{{ asset('img/Artboard-1.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                
                 <div class="col-md-4 col-lg-4 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <img src="{{ asset('img/Artboard 14.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                
                 <div class="col-md-4 col-lg-4 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <img src="{{ asset('img/Artboard 15.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
                
            <div class= "row mb-5">
                
                 <div class="col-md-4 col-lg-4 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <img src="{{ asset('img/WhatsApp Image 2021-06-08 at 19.34.03.jpeg') }}" class="img-fluid" alt="">
                    </div>
                </div>
                
                 <div class="col-md-4 col-lg-4 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <img src="{{ asset('img/Artboard 17.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                
                 <div class="col-md-4 col-lg-4 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <img src="{{ asset('img/Artboard 18.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            
            <div class= "row">
                
                 <div class="col-md-6 col-lg-6 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <img src="{{ asset('img/Artboard 19.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                
                 <div class="col-md-6 col-lg-6 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <img src="{{ asset('img/Artboard 20.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Featured Services Section -->

    @endsection
