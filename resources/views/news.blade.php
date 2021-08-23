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

    .custom-btn {
        width: 48%;
        font-size: 14px;
    }
</style>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container text-center" data-aos="zoom-out" data-aos-delay="100">
        <h2 class="text-uppercase mb-2">Courses
        </h2>
        <p class="text-white">The course you choose will be at the heart </br> of your university expirence</p>
        <div class="d-flex justify-content-center">
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="custom-search-main-input" placeholder="Find your course" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary custom-green-bg pl-5 pr-5" type="button">Search</button>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Hero -->

<h2> News blade.php Page</h2>
<!-- End #main -->



@endsection