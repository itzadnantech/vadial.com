<!DOCTYPE html>
<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    @include('template.head')
    <script src="{{ url('/assets/js/paypal.js') }}"></script>
    <style>
        .plan_selected, .optional_selected {
            Background: #dddee7;
        }
    </style>
</head>

<body>
@include('template.header', ['tab' => 'register'])

<!-- MultiStep Form -->
<div class="container">

    <div class="modal fade" id="payment">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Payment Option</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div id="paypal-button"></div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-2 col-md-3 "></div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <h2 class="text-center margin-top-100">Sign Up for  <b>VADial</b></h2>
            <p class="text-center">Fill all form field to go to next step</p>
            <div class="row">
                <div class="col-lg-12 col-md-12 mx-0">
                        <div class="alert alert-danger">
                            <ul id="validation_errors">

                            </ul>
                        </div>
                    <form action="{{ url('/register') }}" id="register_form" method="post">
                        @csrf
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="account"><strong>Account</strong></li>
                            <li id="personal"><strong>Personal</strong></li>
                            <li id="payment"><strong>Plans</strong></li>
                            <li id="payment"><strong>Optional Add</strong></li>
                            <li id="confirm"><strong>Results</strong></li>
                        </ul> <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card">
                                <h2 class="fs-title">Account Information</h2>
                                <input class="width" type="email" id="email" name="email" minlength="8" maxlength="32" placeholder="Email Id" required/>
                                <input class="width" type="password" id="password" name="password" minlength="6" maxlength="24" placeholder="Password" required/>
                                <input class="width" type="password" id="re_password" name="re_password" minlength="6" maxlength="24" placeholder="Retype Password" required/>
                            </div>
                            <input type="button" name="next" class="next action-button" id="first" value="Next Step" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <h2 class="fs-title">Personal Information</h2>
                                <input class="width" type="text" id="user_name" name="user_name" minlength="8" maxlength="32" placeholder="User Name" required/>
                                <input class="width" type="text" id="first_name" name="first_name" minlength="8" maxlength="32" placeholder="First Name" required/>
                                <input class="width" type="text" id="last_name" name="last_name" minlength="8" maxlength="32" placeholder="Last Name" required/>
                                <input class="width" type="text" id="address" name="address" minlength="10" maxlength="100" placeholder="Address" />
                                <input class="width" type="text" id="company" name="company" minlength="8" maxlength="32" placeholder="Company" />
                                <input class="width" type="number" id="phone_number" name="phone_number" minlength="6" maxlength="24" placeholder="Phone No." required/>
                            </div>
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            <input type="button" name="next" class="next action-button" id="second" value="Next Step" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <h2 class="fs-title">Plans</h2>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <div class="ChoiceCard_TitleNotice__2qk9d total_plan">Total : $0</div>
                                    </div>
                                </div>
                                <div class="row radio-group" id="plan_radio_group">
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="form-check">
                                            <button type="button" value="$69.99" class="ChoiceCard_Card__2D190 ChoiceCard_Active__1AK8Q plan_bt @if(isset($plan) && $plan=='single') plan_selected @endif" style="width: 190px">
                                                <div class="ChoiceCard_Title__2vPNY margin-top-30">Single lines
                                                    <div class="ChoiceCard_TitleNotice__2qk9d single" >($69.99)</div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                                        <div class="form-check">
                                            <button type="button" value="$119.99" class="ChoiceCard_Card__2D190  ChoiceCard_Active__1AK8Q plan_bt @if(isset($plan) && $plan=='triple') plan_selected @endif" style="width: 190px">
                                                <div class="ChoiceCard_Title__2vPNY  margin-top-30">Triple lines<div class="ChoiceCard_TitleNotice__2qk9d triple">($119.99)</div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                                        <div class="form-check">
                                            <button type="button" value="$149.99" class="ChoiceCard_Card__2D190  ChoiceCard_Active__1AK8Q plan_bt @if(isset($plan) && $plan=='ten') plan_selected @endif" style="width: 190px">
                                                <div class="ChoiceCard_Title__2vPNY  margin-top-30">Ten lines<div class="ChoiceCard_TitleNotice__2qk9d ten">($149.99)</div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            <input type="button" class="next action-button" id="third" value="Next Step" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <h2 class="fs-title">Optional Add</h2>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <div class="ChoiceCard_TitleNotice__2qk9d total total_optional">Total : $0</div>
                                    </div>
                                </div>
                                <br><br>
                                <div class="form-check">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                            <div class="form-check">
                                                <button data-amount="10" type="button" value="$10" class="ChoiceCard_Card__2D190 ChoiceCard_Active__1AK8Q optional_bt" style="width: 190px">
                                                    <img src="{{ url('/assets/images/support.png') }}" class="ChoiceCard_SingleUserIcon__2Uyxl" alt="">
                                                    <div class="ChoiceCard_Title__2vPNY">Local Number or Toll Free Number
                                                        <div class="ChoiceCard_TitleNotice__2qk9d">($10)</div>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                                            <div class="form-check">
                                                <button data-amount="10" type="button" value="$10" class="ChoiceCard_Card__2D190  ChoiceCard_Active__1AK8Q optional_bt" style="width: 190px">

                                                    <img src="{{ url('/assets/images/headset%20(2).png') }}" class="ChoiceCard_SingleUserIcon__2Uyxl" alt="">

                                                    <div class="ChoiceCard_Title__2vPNY">Manager/ Agent <br> Account
                                                        <div class="ChoiceCard_TitleNotice__2qk9d ">($10)</div>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                                            <div class="form-check">
                                                <button data-amount="50" type="button" value="$50" class="ChoiceCard_Card__2D190  ChoiceCard_Active__1AK8Q optional_bt" style="width: 190px">
                                                    <img src="{{ url('/assets/images/email.png') }}" class="ChoiceCard_SingleUserIcon__2Uyxl" alt="">
                                                    <div class="ChoiceCard_Title__2vPNY"> Call Recording <br> Feature
                                                        <div class="ChoiceCard_TitleNotice__2qk9d">($50)</div>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            <input type="button" class="next action-button" id="forth" value="Next Step" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <h2 class="fs-title">Results</h2> <br><br>
                                <div class="row justify-content-center">
                                    <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                </div> <br><br>
                                <div class="form-group form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="agree_term" id="agree_term"><span style="color: darkgray;"> I agree to the Terms of Service & Privacy Policy.</span>
                                    </label>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                        <h5 class="all_total">Total : </h5>
                                    </div>
                                </div>
                            </div>
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            <input type="submit" class="next action-button" value="Sign Up" id="sign_up"/>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('template.footer')
</body>

</html>
