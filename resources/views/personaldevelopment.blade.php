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
                <h3>Continuing Professional<span> Development</span></h3>
            </div>

            <div class="row mt-4 px-3">
                <div class="">
                    <p class="text-black-100">
                        This Academy will offer many diverse professional development courses in the process of developing professional skills and knowledge through interactive, participation-based or independent learning. It enables learners to proactively develop their professional capabilities through certified learning or self-guided learning methods.
                    </p>
                    
                    <p class="text-black-100">
                        Finding opportunities for every employee to reach their full potential is the most important way we can maximize workforce engagement and retention.
                    </p>
                    
                    <p class="text-black-100">
                        Waste Management offers expansive learning and development solutions to meet the development needs of our people, as well as proactively recognizing good work and supporting opportunities for growth and improvement. Our talent management program is designed to reach employees at all levels. Hiring, selecting and developing future leaders, as well as evaluating employees in alignment with our values, is standard across the enterprise.
                    </p>
                    
                    <p class="text-black-100">
                        As a result, our numerous programs are equally varied. Training types fall into a few broad categories:
                    </p>
                    
                     <p class="text-black-100">
                         
•	Compliance training—Required of all employees, such as training on Waste Management’s Code of Conduct and Cybersecurity.

                    </p>
                    
                     <p class="text-black-100">
                         
•	Professional development and leadership training—Often customized and conducted voluntarily as part of an individual’s development plan.

                    </p>
                    
                     <p class="text-black-100">
                         
•	Tailored training for specific jobs—Including collection and fleet operations, post-collection operations and sales. 

                    </p>
                    
                     <p class="text-black-100">
                         
•	Safety training—Conducted upon hire and on an ongoing basis, geared toward employees in critical positions such as drivers, fleet technicians, heavy equipment operators and sorters.

                    </p>
                    
                     <p class="text-black-100">
                         
•	Environmental excellence and compliance training—Required of employees in specific roles.

                    </p>
                    
                    <p class="text-black-100">
                        In addition to training, we manage performance through regular check-in conversations, coaching and feedback, goal-setting and annual performance reviews. Annual evaluations set accountability expectations for employees with the understanding that progress is monitored throughout the year. Talent reviews and succession planning are designed to recognize and reward high-performing and hard-working employees.
                    </p>
                </div>
            </div>
            
             <div class="col-md-12 col-lg-12 d-flex align-items-stretch justify-content-center text-center mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <img src="{{ asset('img/1024-pixels-wide-by-768.png') }}" class="img-fluid" alt="">
                    </div>
                </div>

{{--            <div class="container contact-form">--}}
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
{{--            </div>--}}
        </div>

    </section>

@endsection
