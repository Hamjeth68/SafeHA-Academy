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
        /*left: 1%;*/
        padding: 10px;
    }

    .text-on-image-con .text-con p,
    .text-on-image-con .text-con h4 {
        color: #fff;
    }

    .custom-btn {
        width: 100%;
        font-size: 20px;
    }

    span.greentitle {
        color: #90e434;
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




<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container text-center" data-aos="zoom-out" data-aos-delay="100">
        <h1 class="text-uppercase mb-2">Courses</h1>
        <h2 class="text-white">The course you choose will be at the heart </br> of your university experience</h2>
        <div class="d-flex justify-content-center">
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="custom-search-main-input" placeholder="Find your course" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append" data-aos="flip-up">
                        <button class="btn btn-outline-secondary custom-green-bg pl-5 pr-5" type="button">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Hero -->

<main id="main">
    <section>
        <div class="section-title pt-3">
            <h3>Our<span> Courses</span></h3>
        </div>

        <div class="row pt-5 mr-0 ml-0">
            @foreach($products as $product)
            <div class="col-md-6 col-lg-4 text-center" style="padding: 50px; padding-top:10px" data-aos="fade-down" data-aos-delay="300">
                <div class="text-on-image-con">
                    <img src="{{asset('img/Group 4453.png')}}" style="" class="img-fluid" alt="" srcset="">
                    <div class="text-con">
                        <h4>{{ $product->p_title }}<span class="greentitle">{{ $product->p_title }}</span></h4>
                        {{-- <p>At SafeEnviro academy we offer the highest quality of academic  and professional experience in the Waste</p>--}}
                    </div>
                </div>
                <div class="btn-con mt-2" data-aos="flip-up">
                    <button class="btn btn-lg btn-custom-green custom-btn" data-toggle="modal" data-target="#course-{{ $product->id }}">View Course</button>
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
    <!-- modal -->
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

</main><!-- End #main -->

@endsection

<script>
    //first
    document.addEventListener('DOMContentLoaded', function() {

        document.getElementById("forex-newamount").style.display = 'none';
        document.getElementById("forex-amount").addEventListener("h1", calculator);
        document.getElementById("forex-rate").addEventListener("change", ChangeCurrency);

        function calculator() {
            let basecurrency = document.getElementById("base").value;
            let amount = document.getElementById("forex-amount").innerHTML;
            let rate = document.getElementById("forex-rate").value;

            if (rate == "select") {
                document.getElementById("forex-ugx").setAttribute("placeholder", "please select currency");
            } else {

                if (basecurrency === rate) {
                    document.getElementById("forex-newamount").style.display = 'none';
                    document.getElementById("forex-amount").style.display = 'inline';
                } else {
                    let compute = amount * rate;
                    document.getElementById("forex-amount").style.display = 'none';
                    document.getElementById("forex-newamount").style.display = 'inline';
                    document.getElementById("forex-newamount").innerHTML = compute.toFixed(2);
                }
            }
        }

        function ChangeCurrency() {
            let basecurrency = document.getElementById("base").value;
            let rate = document.getElementById("forex-rate").value;
            let amount = document.getElementById("forex-amount").innerHTML;

            if (basecurrency === rate) {

                document.getElementById("forex-newamount").style.display = 'none';
                document.getElementById("forex-amount").style.display = 'inline';

            } else {

                let compute = rate * amount;
                document.getElementById("forex-newamount").style.display = 'inline';
                document.getElementById("forex-newamount").innerHTML = compute.toFixed(2);
                document.getElementById("forex-amount").style.display = 'none';

            }

        }

        let menu = document.querySelectorAll('select');
        M.FormSelect.init(menu, {});


    });
</script>

<script>
    //second
    document.addEventListener('DOMContentLoaded', function() {

        document.getElementById("forex-newamount-2").style.display = 'inline';
        document.getElementById("forex-amount-2").addEventListener("h1", calculator_2);
        document.getElementById("forex-rate-2").addEventListener("change", ChangeCurrency_2);

        function calculator_2() {
            let basecurrency = document.getElementById("base-2").value;
            let amount = document.getElementById("forex-amount-2").innerHTML;
            let rate = document.getElementById("forex-rate-2").value;

            if (rate == "select") {
                document.getElementById("forex-ugx-2").setAttribute("placeholder", "please select currency");
            } else {

                if (basecurrency === rate) {
                    document.getElementById("forex-newamount-2").style.display = 'none';
                    document.getElementById("forex-amount-2").style.display = 'inline';
                } else {
                    let compute = amount * rate;
                    document.getElementById("forex-amount-2").style.display = 'none';
                    document.getElementById("forex-newamount-2").style.display = 'inline';
                    document.getElementById("forex-newamount-2").innerHTML = compute.toFixed(2);
                }
            }
        }

        function ChangeCurrency_2() {
            let basecurrency = document.getElementById("base-2").value;
            let rate = document.getElementById("forex-rate-2").value;
            let amount = document.getElementById("forex-amount-2").innerHTML;

            if (basecurrency === rate) {

                document.getElementById("forex-newamount-2").style.display = 'none';
                document.getElementById("forex-amount-2").style.display = 'inline';

            } else {

                let compute = rate * amount;
                document.getElementById("forex-newamount-2").style.display = 'inline';
                document.getElementById("forex-newamount-2").innerHTML = compute.toFixed(2);
                document.getElementById("forex-amount-2").style.display = 'none';

            }

        }

        let menu = document.querySelectorAll('select');
        M.FormSelect.init(menu, {});

    });
</script>

<script>
    //third
    document.addEventListener('DOMContentLoaded', function() {

        document.getElementById("forex-newamount-3").style.display = 'inline';
        document.getElementById("forex-amount-3").addEventListener("h1", calculator_3);
        document.getElementById("forex-rate-3").addEventListener("change", ChangeCurrency_3);

        function calculator_3() {
            let basecurrency = document.getElementById("base-3").value;
            let amount = document.getElementById("forex-amount-3").innerHTML;
            let rate = document.getElementById("forex-rate-3").value;

            if (rate == "select") {
                document.getElementById("forex-ugx-3").setAttribute("placeholder", "please select currency");
            } else {

                if (basecurrency === rate) {
                    document.getElementById("forex-newamount-3").style.display = 'none';
                    document.getElementById("forex-amount-3").style.display = 'inline';
                } else {
                    let compute = amount * rate;
                    document.getElementById("forex-amount-3").style.display = 'none';
                    document.getElementById("forex-newamount-3").style.display = 'inline';
                    document.getElementById("forex-newamount-3").innerHTML = compute.toFixed(2);
                }
            }
        }

        function ChangeCurrency_3() {
            let basecurrency = document.getElementById("base-3").value;
            let rate = document.getElementById("forex-rate-3").value;
            let amount = document.getElementById("forex-amount-3").innerHTML;

            if (basecurrency === rate) {

                document.getElementById("forex-newamount-3").style.display = 'none';
                document.getElementById("forex-amount-3").style.display = 'inline';

            } else {

                let compute = rate * amount;
                document.getElementById("forex-newamount-3").style.display = 'inline';
                document.getElementById("forex-newamount-3").innerHTML = compute.toFixed(2);
                document.getElementById("forex-amount-3").style.display = 'none';

            }

        }

        let menu = document.querySelectorAll('select');
        M.FormSelect.init(menu, {});

    });
</script>

<script>
    //fourth
    document.addEventListener('DOMContentLoaded', function() {

        document.getElementById("forex-newamount-4").style.display = 'inline';
        document.getElementById("forex-amount-4").addEventListener("h1", calculator_4);
        document.getElementById("forex-rate-4").addEventListener("change", ChangeCurrency_4);

        function calculator_4() {
            let basecurrency = document.getElementById("base-4").value;
            let amount = document.getElementById("forex-amount-4").innerHTML;
            let rate = document.getElementById("forex-rate-4").value;

            if (rate == "select") {
                document.getElementById("forex-ugx-4").setAttribute("placeholder", "please select currency");
            } else {

                if (basecurrency === rate) {
                    document.getElementById("forex-newamount-4").style.display = 'none';
                    document.getElementById("forex-amount-4").style.display = 'inline';
                } else {
                    let compute = amount * rate;
                    document.getElementById("forex-amount-4").style.display = 'none';
                    document.getElementById("forex-newamount-4").style.display = 'inline';
                    document.getElementById("forex-newamount-4").innerHTML = compute.toFixed(2);
                }
            }
        }

        function ChangeCurrency_4() {
            let basecurrency = document.getElementById("base-4").value;
            let rate = document.getElementById("forex-rate-4").value;
            let amount = document.getElementById("forex-amount-4").innerHTML;

            if (basecurrency === rate) {

                document.getElementById("forex-newamount-4").style.display = 'none';
                document.getElementById("forex-amount-4").style.display = 'inline';

            } else {

                let compute = rate * amount;
                document.getElementById("forex-newamount-4").style.display = 'inline';
                document.getElementById("forex-newamount-4").innerHTML = compute.toFixed(2);
                document.getElementById("forex-amount-4").style.display = 'none';

            }

        }

        let menu = document.querySelectorAll('select');
        M.FormSelect.init(menu, {});

    });
</script>

<script>
    //fifth
    document.addEventListener('DOMContentLoaded', function() {

        document.getElementById("forex-newamount-5").style.display = 'inline';
        document.getElementById("forex-amount-5").addEventListener("h1", calculator_5);
        document.getElementById("forex-rate-5").addEventListener("change", ChangeCurrency_5);

        function calculator_5() {
            let basecurrency = document.getElementById("base-5").value;
            let amount = document.getElementById("forex-amount-5").innerHTML;
            let rate = document.getElementById("forex-rate-5").value;

            if (rate == "select") {
                document.getElementById("forex-ugx-5").setAttribute("placeholder", "please select currency");
            } else {

                if (basecurrency === rate) {
                    document.getElementById("forex-newamount-5").style.display = 'none';
                    document.getElementById("forex-amount-5").style.display = 'inline';
                } else {
                    let compute = amount * rate;
                    document.getElementById("forex-amount-5").style.display = 'none';
                    document.getElementById("forex-newamount-5").style.display = 'inline';
                    document.getElementById("forex-newamount-5").innerHTML = compute.toFixed(2);
                }
            }
        }

        function ChangeCurrency_5() {
            let basecurrency = document.getElementById("base-5").value;
            let rate = document.getElementById("forex-rate-5").value;
            let amount = document.getElementById("forex-amount-5").innerHTML;

            if (basecurrency === rate) {

                document.getElementById("forex-newamount-5").style.display = 'none';
                document.getElementById("forex-amount-5").style.display = 'inline';

            } else {

                let compute = rate * amount;
                document.getElementById("forex-newamount-5").style.display = 'inline';
                document.getElementById("forex-newamount-5").innerHTML = compute.toFixed(2);
                document.getElementById("forex-amount-5").style.display = 'none';

            }

        }

        let menu = document.querySelectorAll('select');
        M.FormSelect.init(menu, {});

    });
</script>

<script>
    //sixth
    document.addEventListener('DOMContentLoaded', function() {

        document.getElementById("forex-newamount-6").style.display = 'inline';
        document.getElementById("forex-amount-6").addEventListener("h1", calculator_6);
        document.getElementById("forex-rate-6").addEventListener("change", ChangeCurrency_6);

        function calculator_6() {
            let basecurrency = document.getElementById("base-6").value;
            let amount = document.getElementById("forex-amount-6").innerHTML;
            let rate = document.getElementById("forex-rate-6").value;

            if (rate == "select") {
                document.getElementById("forex-ugx-4").setAttribute("placeholder", "please select currency");
            } else {

                if (basecurrency === rate) {
                    document.getElementById("forex-newamount-6").style.display = 'none';
                    document.getElementById("forex-amount-6").style.display = 'inline';
                } else {
                    let compute = amount * rate;
                    document.getElementById("forex-amount-6").style.display = 'none';
                    document.getElementById("forex-newamount-6").style.display = 'inline';
                    document.getElementById("forex-newamount-6").innerHTML = compute.toFixed(2);
                }
            }
        }

        function ChangeCurrency_6() {
            let basecurrency = document.getElementById("base-6").value;
            let rate = document.getElementById("forex-rate-6").value;
            let amount = document.getElementById("forex-amount-6").innerHTML;

            if (basecurrency === rate) {

                document.getElementById("forex-newamount-6").style.display = 'none';
                document.getElementById("forex-amount-6").style.display = 'inline';

            } else {

                let compute = rate * amount;
                document.getElementById("forex-newamount-6").style.display = 'inline';
                document.getElementById("forex-newamount-6").innerHTML = compute.toFixed(2);
                document.getElementById("forex-amount-6").style.display = 'none';

            }

        }

        let menu = document.querySelectorAll('select');
        M.FormSelect.init(menu, {});

    });
</script>
