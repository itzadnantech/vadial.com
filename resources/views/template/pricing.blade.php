<div class="container sm-margin-top-65" id="PRICING">
    <h2 class="margin-top-100 dark-color-blue text-center"><b>Our Pricing Plans</b></h2>
    <p class="color-gray text-center">The VAdial Prospecting System is Supported by a Dedicated and Professional Support Team.</p>
    <div class="row margin-top-40">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 margin-top-30 sm-margin-left">
            <div class="card card-blue">
                <p>SINGLE LINE DIALER</p>
                <h1><b>$69.99</b></h1>
            </div>
            <div class="card card-parah">
                <ul>
                    <li class="color-gray">Upto 600 Calls Per day </li>
                    <li class="color-gray">Dial through the internet worldwide or your phone</li>
                    <li class="color-gray">Use your number as caller ID or use a virtual number</li>
                    <li class="color-gray"> Recycle your contacted campaigns</li>
                </ul>
                @if(session()->has('plan'))
                        <button type="submit" name="pre_plan" value="single" class="btn  btn-success margin-top-20 bg-dark-blue" @if (session()->get('plan') >= 69.99) disabled @endif >Upgrade</button>
                @else
                    <form class="card" method="post" action="{{ url('/register') }}">
                        @csrf
                        <button type="submit" name="pre_plan" value="single" class="btn  btn-success margin-top-20 bg-dark-blue">Sign Up</button>
                    </form>
                @endif
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 margin-top-30 sm-margin-left">
            <div class="card card-blue">
                <p>TRIPLE LINES</p>
                <h1><b>$119.99</b></h1>
            </div>
            <div class="card card-parah">
                <ul>
                    <li class="color-gray">Upto 1500 Calls Per day </li>
                    <li class="color-gray">Dial through the internet worldwide or your phone</li>
                    <li class="color-gray">Use your number as caller ID or use a virtual number </li>
                    <li class="color-gray">Recycle your contacted campaigns</li>
                </ul>
                @if(session()->has('plan'))
                    <button type="submit" name="pre_plan" value="single" class="btn  btn-success margin-top-20 bg-dark-blue" @if (session()->get('plan') >= 119.99) disabled @endif >Upgrade</button>
                @else
                    <form class="card" method="post" action="{{ url('/register') }}">
                        @csrf
                        <button type="submit" name="pre_plan" value="single" class="btn  btn-success margin-top-20 bg-dark-blue">Sign Up</button>
                    </form>
                @endif
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 margin-top-30 sm-margin-left">
            <div class="card card-blue">
                <p>TEN LINES</p>
                <h1><b>$149.99</b></h1>
            </div>
            <div class="card card-parah">
                <ul>
                    <li class="color-gray">Upto 5000 Calls Per day </li>
                    <li class="color-gray">Dial through the internet worldwide or your phone</li>
                    <li class="color-gray">Use your number as caller ID or use a virtual number </li>
                    <li class="color-gray">Recycle your contacted campaigns</li>
                </ul>
                @if(session()->has('plan'))
                    <button type="submit" name="pre_plan" value="single" class="btn  btn-success margin-top-20 bg-dark-blue" @if (session()->get('plan') >= 149.99) disabled @endif >Upgrade</button>
                @else
                    <form class="card" method="post" action="{{ url('/register') }}">
                        @csrf
                        <button type="submit" name="pre_plan" value="single" class="btn  btn-success margin-top-20 bg-dark-blue">Sign Up</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>
