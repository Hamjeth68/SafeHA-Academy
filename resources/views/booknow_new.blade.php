@extends('layouts.appFrontend')

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
            margin-top: -20px;
            padding-right: 50px;
        }

        /*select#forex-rate.total {*/
        /*    border: 1px solid;*/
        /*    font-size: 2rem;*/
        /*    border-radius: 9px;*/
        /*    margin-right: 12px;*/
        /*    outline: none;*/
        /*}*/
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
                        <div id="summary-view">
                            <ul class="list-group list-group-flush" id="summary-view-li">
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    Selected courses amount (*Introduction to Waste Management compulsory, It need to be included)
                                    <span></span>
                                </li>
                                @if($selectedProducts != null)
                                @foreach($selectedProducts as $selectedProduct)
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    {{ $selectedProduct['items']['p_title'] }}
                                    <span>{{ $current_currency->symbol }} {{ $selectedProduct['price'] }}</span>
                                </li>
                                @endforeach
                                @endif
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>The total amount</strong>
                                    </div>
                                    @if($totalPrice != null)
                                    <span><strong>{{ $current_currency->symbol }} {{$totalPrice}}</strong></span>
                                    @endif
                                </li>
                            </ul>
                        </div>
                        <div class="mt-2">
                        <a href="{{ url('checkout') }}">
                            <button type="button" class="btn btn-primary btn-block btn-md col-lg-3 col-md-4 float-right">
                                Checkout
                            </button></a>

                            <a href="{{ url('/clearCart') }}" class="btn btn-secondary btn-md float-right mr-2">
                                Clear Cart
                            </a>

                        <select id="forex-rate" name="rate" class="d-inline float-right total mr-2">
                            @foreach($rates as $rate)
                                <option value="{{ $rate->id }}" id="base" name="{{$rate->code}}" class="cur"
                                    {{ \Illuminate\Support\Facades\Session::get('currency') === $rate->id ? 'selected' : '' }} }}>{{ $rate->symbol }}</option>
                            @endforeach
                        </select>
                        </div>
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
                            <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>8-08-2021</td>
                                <td>9-08-2021</td>
                                <td>{{$product->p_title}}</td>
                                <td>Start Time</td>
                                <td>£ {{$product->p_amount}}</td>
                                <td>available</td>
                                <td>@if(in_array($product->id, $checkPurchase))
                                        <span class="badge badge-success">Purchased</span>
                                    @elseif($selectedProducts == null && $checkPurchase == null)
                                        <button class="btn btn-primary btn-xs" data-title="Add" data-toggle="modal"
                                                data-target="#firstCourse" value="">
                                            <span class="fas fa-plus"></span>
                                        </button>
                                    @else
                                    <a href="{{url('/addtocart/'. $product->id)}}" >
                                    <button class="btn btn-primary btn-xs" data-title="Add" id="add-btn" value="" onclick="">
                                        <span class="fas fa-plus"></span>
                                    </button></a>
                                    @endif
                                </td>
                                <td>
                                    @if(in_array($product->id, $checkPurchase))
                                    <a href="{{url('/removeProduct/'. $product->id)}}">
                                        <button
                                            class="btn btn-danger btn-xs disabled"
                                            data-title="Delete"
                                            value="" onclick="">
                                            <span class="fas fa fa-trash"></span>
                                        </button>
                                    </a>
                                    @else
                                    <a href="{{url('/removeProduct/'. $product->id)}}">
                                        <button
                                        class="btn btn-danger btn-xs"
                                        data-title="Delete"
                                        value="" onclick="">
                                        <span class="fas fa fa-trash"></span>
                                    </button>
                                    </a>
                                    @endif
                                </td>
                                <td>
                                    <button
                                        class="btn btn-success btn-xs"
                                        data-title="view"
                                        data-toggle="modal"
                                        data-target="#course-{{$product->id}}">
                                        <span class="far fa-eye"></span>
                                    </button>
                                </td>
                            </tr>
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
{{--                                            <a href="{{ url('book-now') }}"><button type="button" class="btn btn-primary">Enroll Now</button></a>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="firstCourse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999;">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLabel">Important!!</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h3>Disclaimer</h3>
                                            <h5>The Introduction to Waste Management course is compulsory, without this you cant able to proceed the payment</h5>
                                            {{var_dump($product->id)}}
                                        </div>
                                        <div class="modal-footer col-lg-12">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <a href="{{url('/addtocart/'. $product->id)}}"><button type="button" class="btn btn-primary">Add Course</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            </tbody>
                        </table>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    </body>
    <script>
        function updateQueryStringParameter(uri, key, value) {
            var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
            var separator = uri.indexOf('?') !== -1 ? "&" : "?";
            if (uri.match(re)) {
                return uri.replace(re, '$1' + key + "=" + value + '$2');
            }
            else {
                return uri + separator + key + "=" + value;
            }
        }

        $('#forex-rate').on('change', function()
        {
            window.location.href = updateQueryStringParameter(window.location.href, 'currency', this.value);
        });
    </script>
@endsection

{{--<script>--}}
{{--    document.addEventListener('DOMContentLoaded', function() {--}}

{{--        document.getElementById("forex-newamount").style.display = 'none';--}}
{{--        document.getElementById("forex-amount").addEventListener("h1", calculator);--}}
{{--        document.getElementById("forex-rate").addEventListener("change", ChangeCurrency);--}}

{{--        function calculator() {--}}
{{--            let basecurrency = document.getElementById("base").value;--}}
{{--            let amount = document.getElementById("forex-amount").innerHTML;--}}
{{--            let rate = document.getElementById("forex-rate").value;--}}

{{--            if (rate == "select") {--}}
{{--                document.getElementById("forex-ugx").setAttribute("placeholder", "please select currency");--}}
{{--            } else {--}}

{{--                if (basecurrency === rate) {--}}
{{--                    document.getElementById("forex-newamount").style.display = 'none';--}}
{{--                    document.getElementById("forex-amount").style.display = 'inline';--}}
{{--                } else {--}}
{{--                    let compute = amount * rate;--}}
{{--                    document.getElementById("forex-amount").style.display = 'none';--}}
{{--                    document.getElementById("forex-newamount").style.display = 'inline';--}}
{{--                    document.getElementById("forex-newamount").innerHTML = compute.toFixed(2);--}}
{{--                }--}}
{{--            }--}}
{{--        }--}}

{{--        function ChangeCurrency() {--}}
{{--            let basecurrency = document.getElementById("base").value;--}}
{{--            let rate = document.getElementById("forex-rate").value;--}}
{{--            let amount = document.getElementById("forex-amount").innerHTML;--}}

{{--            if (basecurrency === rate) {--}}

{{--                document.getElementById("forex-newamount").style.display = 'none';--}}
{{--                document.getElementById("forex-amount").style.display = 'inline';--}}

{{--            } else {--}}

{{--                let compute = rate * amount;--}}
{{--                document.getElementById("forex-newamount").style.display = 'inline';--}}
{{--                document.getElementById("forex-newamount").innerHTML = compute.toFixed(2);--}}
{{--                document.getElementById("forex-amount").style.display = 'none';--}}

{{--            }--}}

{{--        }--}}

{{--        let menu = document.querySelectorAll('select');--}}
{{--        M.FormSelect.init(menu, {});--}}


{{--    });--}}
{{--</script>--}}



