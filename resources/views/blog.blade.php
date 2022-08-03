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
        <div class="carousel-item active blog-slide1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 "></div>
                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 ">
                        <p class="blog-slider-parah sm-head-size">Blogs</p>

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
            <img  src="{{ url('/assets/images/blog--pic-1.png') }}" class="width">
            <div class="card blog-card">
                <div>
                    <a  href="{{ url('/blog_1') }}" class="color-black"><span class="margin-left-5"><b> What is cold canvassing?</b></span></a>

                </div>
                <hr>
            </div>
        </div>
    </div>
    <div class="row margin-top-30">

        <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12 ">
            <img  src="{{ url('/assets/images/blog--pic-2.png') }}" class="width">
            <div class="card blog-card">
                <div>
                    <a  href="{{ url('/blog_2') }}" class="color-black"><span class="margin-left-5"><b> Predictive Dialer</b></span></a>

                </div>
                <hr>
            </div>
        </div>
    </div>
    <div class="row margin-top-30">

        <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12 ">
            <img  src="{{ url('/assets/images/blog--pic-3.png') }}" class="width">
            <div class="card blog-card">
                <div>
                    <a  href="{{ url('/blog_3') }}" class="color-black"><span class="margin-left-5"><b>Why Is There A Risk?</b></span></a>

                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
@include('template.footer')
</body>
</html>
