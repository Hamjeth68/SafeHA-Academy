<div class="row p-3">
    <div class="card mb-3 col-lg-12 col-md-6">
        <div class="card-body pt-4 text-center">
            <h3 class="mb-3">The Total Amount of Courses</h3>
            <div id="summary-view">
                <ul class="list-group list-group-flush" id="summary-view-li">
                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                        Selected courses amount (*Introduction to Waste Management compulsory, It already included)
                        <span></span>
                    </li>
                    @foreach($selectedProducts as $selectedProduct)
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                            {{ $selectedProduct['items']['p_title'] }}
                            <span>£ {{ $selectedProduct['price'] }}</span>
                        </li>
                    @endforeach
                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                        <div>
                            <strong>The total amount of courses</strong>
                        </div>
                        <span><strong>£ {{$totalPrice}}</strong></span>
                    </li>
                </ul>
            </div>
            <div class="mt-2">
                <a href="{{ url('new-user') }}">
                    <button type="button" class="btn btn-primary btn-block btn-md col-lg-3 col-md-4 float-right">
                        Checkout
                    </button></a>
                <select id="forex-rate" name="rate" class="d-inline float-right total" onchange="symbolChange(this)">
                    <option value="0" id="base" name="GBP" class="cur" selected>&#163</option>
                    <option value="1.41" name="USD" id="USD">$</option>
                    <option value="584.35" name="NGN" id="NGN">&#8358</option>
                </select>
            </div>
        </div>
    </div>
</div>
