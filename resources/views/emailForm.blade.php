@extends('layouts.safee')
@section('content')




    <style>
        @media (max-width: 375px) {
            .item-card {
                transition: 0.5s;
                cursor: pointer;
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }


        }

    </style>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Register') }}</div>

                        <div class="card-body">
                            <form action="{{ url('emailForm') }}" class="contact100-form validate-form" method="post">
                                @csrf

                                <div class="form-group row">
                                    <label for="name"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus required>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="profession_occupation"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Profession / Occupation') }}</label>

                                    <div class="col-md-6">
                                        <input id="profession_occupation" type="text"
                                            class="form-control @error('profession_occupation') is-invalid @enderror"
                                            name="profession_occupation" value="{{ old('profession_occupation') }}"
                                            required autocomplete="profession_occupation" required>

                                        @error('profession_occupation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus required>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="address"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="address" type="text"
                                            class="form-control @error('address') is-invalid @enderror" name="address"
                                            value="{{ old('address') }}" required autocomplete="address" required>

                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="phone_number"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                                    <div class="col-md-6">
                                        <input id="phone_number" type="number"
                                            class="form-control @error('phone_number') is-invalid @enderror"
                                            name="phone_number" value="{{ old('phone_number') }}" required
                                            autocomplete="phone_number" required>

                                        @error('phone_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="address"
                                        class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>

                                    <div class="col-md-6">
                                        <input id="state" type="text"
                                            class="form-control @error('state') is-invalid @enderror" name="state"
                                            value="{{ old('state') }}" required autocomplete="state" required>

                                        @error('state')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $state }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- <div class="form-group row">
                                <label for="subject" class="col-md-4 col-form-label text-md-right">{{ __('Subject') }}</label>

                                <div class="col-md-6">
                                    <input id="subject" type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" value="{{ old('subject') }}" required autocomplete="subject" autofocus>

                                    @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $subject }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div> --}}

                                <div class="form-group row">
                                    <label for="date"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                                    <div class="col-md-6">
                                        <input id="datepicker" width="270" name="dob" />
                                        <script>
                                            $('#datepicker').datepicker({
                                                uiLibrary: 'bootstrap'
                                            });
                                        </script>

                                        <script>
                                            $(document).ready(function() {
                                                var date_input = $('input[name="date"]'); //our date input has the name "date"
                                                var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
                                                var options = {
                                                    format: 'mm/dd/yyyy',
                                                    container: container,
                                                    todayHighlight: true,
                                                    autoclose: true,
                                                };
                                                date_input.datepicker(options);
                                            })
                                        </script>

                                        @error('date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <p class="lead">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Proceed to pay') }}
                                                </button>
                                        </p>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <p class="lead">
                                                <a class="btn btn-primary btn-sm" href="{{ url('/') }}"
                                                    role="button">Cancel</a>
                                            </p>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
