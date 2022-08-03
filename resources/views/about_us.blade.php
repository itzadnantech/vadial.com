<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('template.head')
</head>

<body>
@include('template.header', ['tab' => 'guest'])
<div id="carouselExampleIndicators" class="carousel slide width-100" data-ride="carousel">
    <div class="carousel-inner" role="listbox">

        <!----------slide1------->
        <div class="carousel-item active blog-slide2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 "></div>
                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 ">
                        <p class="blog-slider-parah sm-head-size">About Us</p>

                    </div>
                </div>
            </div>
        </div>
        <!----end--------->

    </div>
</div>
<div class="container margin-top-100">
    <div class="row">
        <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12">
            <h2 class="dark-color-blue"><b>About Us</b></h2>
            <p class="colo-gray"><b>VADial</b> is the fastest growing Automatic dialer and Leads Management Software for Small, Medium and Enterprise Business.</p>
            <p class="colo-gray">With experience and certified team of developers. The product has gained recognition for helping business owners to increase number of sales by having this Inbound and Automatic Outbound Calls Software.</p>
            <p class="colo-gray">Please put it on about us. if customer click the about us it should routed another page and has that information i sent</p>
        </div>
    </div>
</div>

@include('template.our_client')
@include('template.footer')
</body>
</html>
