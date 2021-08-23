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

        .contact-form{
            background: #fff;
            margin-top: 10%;
            margin-bottom: 5%;
            width: 70%;
        }
        .contact-form .form-control{
            border-radius:1rem;
        }
        .contact-image{
            text-align: center;
        }
        .contact-image img{
            border-radius: 6rem;
            width: 11%;
            margin-top: -3%;
            transform: rotate(29deg);
        }
        .contact-form form{
            padding: 14%;
        }
        .contact-form form .row{
            margin-bottom: -7%;
        }
        .contact-form h3{
            margin-bottom: 8%;
            margin-top: -10%;
            text-align: center;
            color: #0062cc;
        }
        .contact-form .btnContact {
            width: 50%;
            border: none;
            border-radius: 1rem;
            padding: 1.5%;
            background: #dc3545;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
        }
        .btnContactSubmit
        {
            width: 50%;
            border-radius: 1rem;
            padding: 1.5%;
            color: #fff;
            background-color: #90e434;
            border: none;
            cursor: pointer;
        }
    </style>

    <section id="pagehead" class="about">
        <div class="container" data-aos="">

            <div class="section-title">
                <h3>Contact<span> Us</span></h3>
            </div>

            <form method="post" class="card mt-3 px-3" style="padding: 20px;">
                <h3>Drop Us a Message</h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContactSubmit" value="Send Message" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
            </form>


        </div>

    </section>

@endsection
