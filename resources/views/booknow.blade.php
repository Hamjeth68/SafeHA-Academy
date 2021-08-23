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

    .card.mb-3.col-lg-12.col-md-6 {
        box-shadow: 0 10px 20px 0 rgb(0 0 0 / 5%);
        border-radius: .375rem;
    }

    select {
        border: none;
        font-size: 2.4rem;
        font-weight: 700;
        font-family: "Roboto", sans-serif;
        margin-top: -4px;
    }

    select#forex-rate.total {
        border: 1px solid;
        font-size: 2rem;
        border-radius: 9px;
        margin-right: 12px;
        padding: 3px;
        outline: none;
    }
</style>

<section id="pagehead" class="about">
    <div class="container" data-aos="">

        <div class="section-title">
            <h3>Select<span> Courses</span></h3>
        </div>

        <div class="row p-3">
            <div class="card mb-3 col-lg-12 col-md-6">
                <div class="card-body pt-4 text-center">
                    <h3 class="mb-3">The Total Amount of Courses</h3>
                    <div id="summary-view"></div>
                    <a href="">
                        <button type="button" class="btn btn-primary btn-block btn-md col-lg-3 col-md-4 float-right" id="checkout">
                            Checkout
                        </button></a>
                    <select id="forex-rate" name="rate" class="d-inline float-right total" onchange="symbolChange(this)">
                        <option value="0" id="base" name="GBP" class="cur" selected>&#163</option>
                        <option value="1.41" name="USD" id="USD">$</option>
                        <option value="584.35" name="NGN" id="NGN">&#8358</option>
                    </select>
                </div>
                <div id="ajaxResponse">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table id="coursesTable" class="table table-bordred table-striped">
                        <thead>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Title</th>
                            <th>Start Time</th>
                            <th>Fees</th>
                            <th>Status</th>
                            <th>Add</th>
                            <th>Remove</th>
                            <th>View Course</th>
                        </thead>
                        <tbody></tbody>
                    </table>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->


{{-- selectedCourses the com course  --}}
<script>
    let currency = '£';
    let selectedCourses = [{
        id: 1,
        startDate: "10 Jun 2021",
        endDate: "11 Jun 2021",
        startTime: "08.00 Am",
        title: "Introduction to Waste Management",
        fees: 99,
        status: "Available",
    }, ];
    const courses = [{
            id: 1,
            startDate: "10 Jun 2021",
            endDate: "11 Jun 2021",
            startTime: "08.00 Am",
            title: "Introduction to Waste Management",
            fees: 99,
            status: "Available",
        },
        {
            id: 2,
            startDate: "10 Jun 2021",
            endDate: "11 Jun 2021",
            startTime: "08.00 Am",
            title: "Hazardous Waste",
            fees: 175,
            status: "Available",
        },
        {
            id: 3,
            startDate: "10 Jun 2021",
            endDate: "11 Jun 2021",
            startTime: "08.00 Am",
            title: "Waste Legislation",
            fees: 99,
            status: "Available",
        },
        // {
        //     id: 4,
        //     startDate: "10 Jun 2021",
        //     endDate: "11 Jun 2021",
        //     startTime: "08.00 Am",
        //     title: "Compliance",
        //     fees: 20,
        //     status: "Available",
        // },
        {
            id: 5,
            startDate: "10 Jun 2021",
            endDate: "11 Jun 2021",
            startTime: "08.00 Am",
            title: "Landfill Management",
            fees: 350,
            status: "Available",
        },
        {
            id: 6,
            startDate: "10 Jun 2021",
            endDate: "11 Jun 2021",
            startTime: "08.00 Am",
            title: "Specialist Course",
            fees: 400,
            status: "Available",
        },

        {
            id: 7,
            startDate: "10 Jun 2021",
            endDate: "11 Jun 2021",
            startTime: "08.00 Am",
            title: "Fire Safety",
            fees: 200,
            status: "Available",
        },
    ];

    $(document).ready(function() {
        buildProductList();
        buildPurchasedList();
    });

    function buildPurchasedList() {
        let coursesElements = `
        <ul class="list-group list-group-flush" id="summary-view-li">
        <li
          class="
            list-group-item
            d-flex
            justify-content-between
            align-items-center
            border-0
            px-0
            pb-0
          "
        >
          Selected courses amount (*Introduction to Waste Management compulsory, It already included)
          <span></span>
        </li>
        `;

        selectedCourses.forEach((course) => {
            coursesElements += getPurchasedProduct(course);
        });

        coursesElements += `
        <li
          class="
            list-group-item
            d-flex
            justify-content-between
            align-items-center
            border-0
            px-0
            mb-3"
           id="totalCourse"
        >
          <div>
            <strong>The total amount</strong>
          </div>
          <span id="totalAmount"><strong><p id="total-price-holder"><span class="mr-1" ">${currency}</span><span>${getConvertedFees(calculateTotalAmount())}</p></strong></span>
        </li>
        </ul>
        `;

        $("#summary-view-li").remove();

        $("#summary-view").append(coursesElements);
    }

    function getPurchasedProduct(course) {
        return `
        <li
          class="
            list-group-item
            d-flex
            justify-content-between
            align-items-center
            border-0
            px-0
            pb-0
          "
          id="selectedCourse"
        >
          ${course.title}
          <span id="selectedAmount"><span class="mr-1">${currency}</span>${getConvertedFees(course.fees)}</span>
        </li>
        `;
    }
    const getConvertedFees = (fees) => {
        const currencyMapper = {
            '$': 1.41,
            '£': 1,
            '₦': 584.35,
        };
        const amount = fees * currencyMapper[currency];
        return amount.toFixed(2);

    };

    function buildProductList() {
        let coursesElements = "";

        courses.forEach((course) => {
            coursesElements += getProduct(course);
        });

        $("#coursesTable").find("tbody").append(coursesElements);
    }

    const onItemAdd = (courseId) => {
        const isCourseExist = selectedCourses.find(
            (course) => course.id === courseId
        );

        if (!isCourseExist) {
            const course = courses.find((course) => course.id === courseId);
            selectedCourses.push(course);
            buildPurchasedList();
            calculateTotalAmount();
        }
    };

    const onItemRemove = (courseId) => {
        if (courseId !== 1) {
            selectedCourses = selectedCourses.filter(
                (course) => course.id !== courseId
            );

            buildPurchasedList();
            calculateTotalAmount();
        }
    };

    function calculateTotalAmount() {
        var totalAmount = selectedCourses.reduce(function(
                accumulator,
                currentItem
            ) {
                return accumulator + currentItem.fees;
            },
            0);

        return totalAmount;
    }

    function getAddButton(isDisable, course) {
        if (isDisable) {
            return `
          <button class="btn btn-primary btn-xs" disabled data-title="Add" id="add-btn" value="${course.id}" onclick="onItemAdd(${course.id})">
            <span class="fas fa-plus"></span>
          </button>`;
        } else {
            return `
          <button class="btn btn-primary btn-xs" data-title="Add" id="add-btn" value="${course.id}" onclick="onItemAdd(${course.id})">
            <span class="fas fa-plus"></span>
          </button>`;
        }
    }

    function getRemoveButton(isDisable, course) {
        if (isDisable) {
            return `
          <button
                class="btn btn-danger btn-xs"
                data-title="Delete"
                disabled
                value="${course.id}" onclick="onItemRemove(${course.id})"
              >
                <span class="fas fa fa-trash"></span>
              </button>`;
        } else {
            return `
          <button
                class="btn btn-danger btn-xs"
                data-title="Delete"
                value="${course.id}" onclick="onItemRemove(${course.id})"
              >
                <span class="fas fa fa-trash"></span>
              </button>`;
        }
    }

    function getProduct(course) {
        if (!course) return;

        return `
        <tr>
          <td>${course.startDate}</td>
          <td>${course.endDate}</td>
          <td>${course.title}</td>
          <td>${course.startTime}</td>
          <td>£ ${course.fees}</td>
          <td>${course.status}</td>
          <td>
            <p data-placement="top" data-toggle="tooltip" title="Add">
              ${getAddButton(course.id === 1, course)}
            </p>
          </td>
          <td>
            <p
              data-placement="top"
              data-toggle="tooltip"
              title="Delete"
            >
              ${getRemoveButton(course.id === 1, course)}
            </p>
          </td>
          <td>
            <p
              data-placement="top"
              data-toggle="tooltip"
              title="View"
            >
              <button
                class="btn btn-success btn-xs"
                data-title="view"
                data-toggle="modal"
                data-target="#course-${course.id}"
              >
                <span class="far fa-eye"></span>
              </button>
            </p>
          </td>
        </tr>
        `;
    }

    function symbolChange(obj) {
        var val = $('#forex-rate option:selected').text();
        currency = val;
        buildPurchasedList();
    }

        $('#checkout').on('click', function (e) {
            e.preventDefault();
            var selectedCourse = document.querySelectorAll("li#selectedCourse");
            var totalAmount = $('#totalAmount').text();
            var values = [];
            for( var n = 0; n < selectedCourse.length; n++)
                values.push( selectedCourse[n].textContent);

            var fd = new FormData();
            fd.append('values', values,);
            fd.append('totalAmount', totalAmount,);

            $.ajax({
                headers: {
                    'X-CSRF-Token': $('input[name="_token"]').val()
                },
                type: 'post',
                processData: false,
                contentType: false,
                url: '{{ url('/checkoutdata')}} ',
                data: fd,

                success: function (response) {
                    window.location.href = "{{url('/new-user')}}";
                    $('#ajaxResponse').append(response);
                    console.log(values, totalAmount);
                },
                error: function (xhr, status, errorThrown) {
                    alert(JSON.parse(xhr.responseText).category[0]);
                }
            });
        });
</script>

<div class="modal fade" id="course-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999;">
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
                    <select id="forex-rate-1" name="rate" class="d-inline float-right">
                        <option value="0" id="base-1" selected>&#163</option>
                        <option value="1.41" name="USD">$</option>
                        <option value="584.35" name="NGN">&#8358</option>
                    </select>
                    <h1 class="float-right px-1" id="forex-amount-1">99</h1>
                    <h1 class="float-right" id="forex-newamount-1"></h1>
                </div>
            </div>
            <div class="modal-footer col-lg-12">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="{{ url('book-now') }}"><button type="button" class="btn btn-primary">Enroll Now</button></a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="course-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999;">
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

<div class="modal fade" id="course-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999;">
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

<div class="modal fade" id="course-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999;">
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

<div class="modal fade" id="course-5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999;">
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

<div class="modal fade" id="course-6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999;">
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

<div class="modal fade" id="course-7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999;">
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

</body>
@endsection


<script>
    //first
    document.addEventListener('DOMContentLoaded', function() {

        document.getElementById("forex-newamount-1").style.display = 'none';
        document.getElementById("forex-amount-1").addEventListener("h1", calculator);
        document.getElementById("forex-rate-1").addEventListener("change", ChangeCurrency);

        function calculator() {
            let basecurrency = document.getElementById("base-1").value;
            let amount = document.getElementById("forex-amount-1").innerHTML;
            let rate = document.getElementById("forex-rate-1").value;

            if (rate == "select") {
                document.getElementById("forex-ugx").setAttribute("placeholder", "please select currency");
            } else {

                if (basecurrency === rate) {
                    document.getElementById("forex-newamount-1").style.display = 'none';
                    document.getElementById("forex-amount-1").style.display = 'inline';
                } else {
                    let compute = amount * rate;
                    document.getElementById("forex-amount-1").style.display = 'none';
                    document.getElementById("forex-newamount-1").style.display = 'inline';
                    document.getElementById("forex-newamount-1").innerHTML = compute.toFixed(2);
                }
            }
        }

        function ChangeCurrency() {
            let basecurrency = document.getElementById("base-1").value;
            let rate = document.getElementById("forex-rate-1").value;
            let amount = document.getElementById("forex-amount-1").innerHTML;

            if (basecurrency === rate) {

                document.getElementById("forex-newamount-1").style.display = 'none';
                document.getElementById("forex-amount-1").style.display = 'inline';

            } else {

                let compute = rate * amount;
                document.getElementById("forex-newamount-1").style.display = 'inline';
                document.getElementById("forex-newamount-1").innerHTML = compute.toFixed(2);
                document.getElementById("forex-amount-1").style.display = 'none';

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
                document.getElementById("forex-ugx-6").setAttribute("placeholder", "please select currency");
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
