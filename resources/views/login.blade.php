<!DOCTYPE html>
<html>

<head>
    @include('template.head')
</head>

<body>
@include('template.header', ['tab' => 'login'])
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3 "></div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h2 class="text-center margin-top-100">Log in to your <b>VADial</b> account</h2>
            <form method="post" action="{{ url('/login') }}" id="login_form" class="was-validated margin-top-30">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" minlength="8" maxlength="32" placeholder="Email Address" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" minlength="6" maxlength="24" placeholder="Enter password" required>
                </div>
{{--                <div class="form-group">--}}
{{--                    <div id="recaptcha" class="g-recaptcha" data-sitekey="6LcoLcgaAAAAAM7raL0TscIFLEYpex7RvGWD8cQ4"></div>--}}
{{--                </div>--}}
                <button type="submit" class="btn btn-primary float-right">Login</button>
            </form>
        </div>
        <div class="col-lg-3 col-md-3 "></div>
    </div>
</div>
@include('template.footer')
</body>
</html>
