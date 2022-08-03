<!DOCTYPE html>
<html>

<head>
    @include('template.head')
</head>

<body>
@include('template.header', ['tab' => 'guest'])
<div id="carouselExampleIndicators" class="carousel slide width-100" data-ride="carousel">
    <div class="carousel-inner" role="listbox">

        <!----------slide1------->
        <div class="carousel-item active slide1">
            <div class="container">
                <div class="row someId">
                    <div class="col-lg-7 col-md-4 col-sm-12 col-xs-12">
                        <h1 class="slider-parah sm-head-size">Fastest Automatic Calling <span class="color-blue">Software </span> for Wholesalers and Realtors</h1>
                    </div>
                </div>
            </div>
        </div>
        <!----end--------->

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="card card1">
                <div class="card-animation">
                    <h3 class="card-title">Cold Calling</h3>
                    <div class="row">
                        <div class="col-lg-7 col-md-6 col-sm-6 col-xs-6 ">
                            <img src="{{ url('/assets/images/support.png') }}" class="hidden center-img margin-top-60">
                            <img src="{{ url('/assets/images/call-center.png') }}" class="hide center-img margin-top-60">
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-6 col-xs-6 margin-top-30">
                            <img src="{{ url('/assets/images/one.png') }}" class="center-img margin-top-60">
                        </div>
                    </div>
                </div>
                <a href="#" class="plus-circle">
                    <li class="fa fa-plus"></li>
                </a>

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="card card1">
                <div class="card-animation">
                    <h3 class="card-title">Incoming calls</h3>
                    <div class="row">
                        <div class="col-lg-7 col-md-6 col-sm-6 col-xs-6">
                            <img src="{{ url('/assets/images/headset%20(2).png') }}" class="hidden center-img margin-top-60">
                            <img src="{{ url('/assets/images/headset%20(3).png') }}" class="hide center-img margin-top-60">
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-6 col-xs-6 margin-top-30">
                            <img src="{{ url('/assets/images/two.png') }}" class="center-img margin-top-60">
                        </div>
                    </div>

                </div>
                <a href="#" class="plus-circle">
                    <li class="fa fa-plus"></li>
                </a>
            </div>

        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="card card1">
                <div class="card-animation">
                    <h3 class="card-title">Pick a Local or Toll free number</h3>
                    <div class="row">
                        <div class="col-lg-7 col-md-6 col-sm-6 col-xs-6">
                            <img src="{{ url('/assets/images/email.png') }}" class="hidden center-img">
                            <img src="{{ url('/assets/images/email%20(1).png') }}" class="hide center-img ">
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-6 col-xs-6 margin-top-30">
                            <img src="{{ url('/assets/images/three.png') }}" class="center-img">
                        </div>
                    </div>

                </div>
                <a href="#" class="plus-circle">
                    <li class="fa fa-plus"></li>
                </a>
            </div>

        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="card card1">
                <div class="card-animation">
                    <h3 class="card-title">Schedule</h3>
                    <div class="row">
                        <div class="col-lg-7 col-md-6 col-sm-6 col-xs-6">
                            <img src="{{ url('/assets/images/support.png') }}" class="hidden center-img margin-top-60">
                            <img src="{{ url('/assets/images/call-center.png') }}" class="hide center-img margin-top-60">
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-6 col-xs-6 margin-top-30">
                            <img src="{{ url('/assets/images/four.png') }}" class="center-img margin-top-60">
                        </div>
                    </div>

                </div>
                <a href="#" class="plus-circle">
                    <li class="fa fa-plus"></li>
                </a>
            </div>

        </div>
    </div>
</div>

<div class="row margin-top-100 bg-light-gray" id="aboutus">
    <div class="container">
        <section class="our-blog p-0 m-0 bg-silver width">
            <div class="container work-process  pb-5 pt-5">
                <div class="title mb-5 text-center">
                    <h2 class="text-center dark-color-blue"><b>What is Automatic Dialer?</b></h2>
                </div>
                <!-- ============ step 1 =========== -->
                <div class="row">
                    <div class="col-md-5">
                        <div class="process-box process-left" data-aos="fade-right" data-aos-duration="1000">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="process-step">
                                        <p class="m-0 p-0">Step</p>
                                        <h2 class="m-0 p-0">01</h2>
                                    </div>
                                </div>
                                <div class="col-md-7">

                                    <p><small>The system starts by dialing one entry for each free operator. Based on statistics, it predicts how many entries should be dialed per operator to maximize their workload.</small></p>
                                </div>
                            </div>
                            <div class="process-line-l"></div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="process-point-right"></div>
                    </div>
                </div>
                <!-- ============ step 2 =========== -->
                <div class="row">

                    <div class="col-md-5">
                        <div class="process-point-left"></div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="process-box process-right" data-aos="fade-left" data-aos-duration="1000">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="process-step">
                                        <p class="m-0 p-0">Step</p>
                                        <h2 class="m-0 p-0">02</h2>
                                    </div>
                                </div>
                                <div class="col-md-7">

                                    <p><small>The dialer recognizes answering machines, filters them out, and connects agents with live calls.</small></p>
                                </div>
                            </div>
                            <div class="process-line-r"></div>
                        </div>
                    </div>

                </div>
                <!-- ============ step 3 =========== -->
                <div class="row">
                    <div class="col-md-5">
                        <div class="process-box process-left" data-aos="fade-right" data-aos-duration="1000">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="process-step">
                                        <p class="m-0 p-0">Step</p>
                                        <h2 class="m-0 p-0">03</h2>
                                    </div>
                                </div>
                                <div class="col-md-7">

                                    <p><small>Using the algorithm and collected statistics on previous calls, the dialer predicts the approximate time when each agent should be finishing a call and dials the next number.</small></p>
                                </div>
                            </div>
                            <div class="process-line-l"></div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="process-point-right "></div>
                        <div class="process-point-right process-last"></div>
                    </div>
                </div>
                <!-- ============ step 4 =========== -->
                <div class="row">
                    <div class="col-md-5">

                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="process-box process-right" data-aos="fade-left" data-aos-duration="1000">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="process-step">
                                        <p class="m-0 p-0">Step</p>
                                        <h2 class="m-0 p-0">04</h2>
                                    </div>
                                </div>
                                <div class="col-md-7">

                                    <p><small>Based on the collected statistics and percentage of lost calls, it calculates the required dialing speed.</small></p>
                                </div>

                            </div>
                            <div class="process-line-r"></div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <script>
            AOS.init();
        </script>
    </div>
</div>
@include('template.services')
@include('template.our_client')
@include('template.pricing')
@include('template.footer')
</body>

</html>
