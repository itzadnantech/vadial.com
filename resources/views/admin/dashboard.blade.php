<html>

<head>
    <link rel="stylesheet" href="{{ url('/assets/css/twilio.css') }}">
    @include('admin.template.head')
</head>

<body>
@include('admin.template.header', ['tab' => 'dashboard'])
<div class="content">
    <div class="row margin-top-30">
        <div class="col-lg-9 col-md-9 col-sm-4 col-xs-4">
            <h3>DAILY STATS</h3>
            <div class="row ">
                <div class="col-4 text-center margin-top-10">
                    <p>Total Calls</p>
                    <div class="oval"></div>
                </div>
                <div class="col-4  text-center margin-top-10">
                    <p>Remaining Leads</p>
                    <div class="oval"></div>
                </div>
                <div class="col-4  text-center margin-top-10">
                    <p>Remaining Redials</p>
                    <div class="oval"></div>
                </div>
            </div>
            <p class="margin-top-30">CAMPAIGNS</p>
            <div class="table-responsive">
                <table class="table table-striped margin-top-30">
                    <thead class="thead-light text-center">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Leads</th>
                        <th scope="col">Redials</th>
                        <th scope="col">Start</th>
                        <th scope="col">End</th>

                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @if (isset($campaigns))
                        @foreach ($campaigns as $campaign)
                            <tr>
                                <th>{{ $campaign->campaign_id }}</th>
                                <td>{{ $campaign->dials }}</td>
                                <td>{{ $campaign->live }}</td>
                                <td>{{ $campaign->vm }}</td>
                                <td>{{ $campaign->others }}</td>
                                <td>{{ $campaign->agents_connect }}</td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
            <!----<p class="text-center">No Campaigns, Currently Running</p>
                      <hr>-->


        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div id="log" hidden></div>

            <input id="your-input-id" type="text" placeholder="Enter a Phone Number" value="" />
            <button class="btn btn-success">Call</button>
            <ul class="nav nav-tabs margin-top-30">
                <li class="nav-item">
                    <a class="nav-link dialpad active" href="#">Dialpad</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link history" href="#">History</a>
                </li>
            </ul>
            <div class="row border-left dialpad_d">
                <div class="col-4  div-padding-left div-padding-right">
                    <button class="btn btn-light width-100 font-size-12 height-60px number-button" value="1">1</button>
                </div>
                <div class="col-4 div-padding-left div-padding-right">
                    <button class="btn btn-light width-100 font-size-12 height-60px number-button" value="2">2</button>
                </div>
                <div class="col-4 div-padding-left div-padding-right">
                    <button class="btn btn-light width-100 font-size-12 height-60px number-button" value="3">3</button>
                </div>
                <div class="col-4 div-padding-left div-padding-right">
                    <button class="btn btn-light width-100 font-size-12 height-60px number-button" value="4">4</button>
                </div>
                <div class="col-4 div-padding-left div-padding-right">
                    <button class="btn btn-light width-100 font-size-12 height-60px number-button" value="5">5</button>
                </div>
                <div class="col-4 div-padding-left div-padding-right">
                    <button class="btn btn-light width-100 font-size-12 height-60px number-button" value="6">6</button>
                </div>
                <div class="col-4 div-padding-left div-padding-right">
                    <button class="btn btn-light width-100 font-size-12 height-60px number-button" value="7">7</button>
                </div>
                <div class="col-4 div-padding-left div-padding-right">
                    <button class="btn btn-light width-100 font-size-12 height-60px number-button" value="8">8</button>
                </div>
                <div class="col-4 div-padding-left div-padding-right">
                    <button class="btn btn-light width-100 font-size-12 height-60px number-button" value="9">9</button>
                </div>
                <div class="col-4 div-padding-left div-padding-right">
                    <button class="btn btn-light width-100 font-size-12 height-60px number-button" value="*">*</button>
                </div> <div class="col-4 div-padding-left div-padding-right">
                    <button class="btn btn-light width-100 font-size-12 height-60px number-button" value="0">0</button>
                </div>
                <div class="col-4 div-padding-left div-padding-right">
                    <button class="btn btn-light width-100 font-size-12 height-60px number-button" value="#">#</button>
                </div> <div class="col-6 div-padding-left div-padding-right">
                    <button class="btn btn-light width-100 height-60px" onclick="clearFields()" value="Clear">Clear</button>
                </div>
                <div class="col-6 div-padding-left div-padding-right">
                    <button class="btn btn-light width-100 height-60px" onclick="delete_num ()"><i class="fa fa-window-close-o"></i></button>
                </div>
            </div>




            <div class="history_d">
                <table class="table table-striped margin-top-30 table-hide">
                    <thead class="thead-light text-center">
                    <tr>
                        <th scope="col">Sr.</th>
                        <th scope="col">Yesterday</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    <tr>
                        <th>1</th>
                        <th>999-459-999</th>
                    </tr>
                    <tr>
                        <th>2</th>
                        <th>999-869-999</th>
                    </tr>
                    <tr>
                        <th>3</th>
                        <th>999-8879-999</th>
                    </tr>
                    <tr>
                        <th>4</th>
                        <th>000-999-999</th>
                    </tr>

                    </tbody>
                </table>
                <table class="table table-striped margin-top-30 table-hide">
                    <thead class="thead-light text-center">
                    <tr>
                        <th scope="col">Sr.</th>
                        <th scope="col">Today</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    <tr>
                        <th>1</th>
                        <th>999-999-888</th>
                    </tr>
                    <tr>
                        <th>2</th>
                        <th>999-999-9765</th>
                    </tr>
                    <tr>
                        <th>3</th>
                        <th>999-999-356</th>
                    </tr>
                    <tr>
                        <th>4</th>
                        <th>999-9654-999</th>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(".history_d").hide();
    });
    $(document).ready(function() {
        $(".history").click(function() {
            $(".history_d").show();
            $(".dialpad_d").hide();
        });
    });
    $(document).ready(function() {
        $(".dialpad").click(function() {
            $(".history_d").hide();
            $(".dialpad_d").show();
        });
    });
    $('.nav li').click(function () {
        $('.nav li a.active').removeClass('active');
        $(this).find("a").addClass('active');
    });

    var input = document.querySelector("#your-input-id")
    var buttons = document.querySelectorAll("button.number-button")


    for (i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener("click", function(event) {
            input.value = input.value + event.currentTarget.value
        })
    }
    function clearFields() {
        document.getElementById("your-input-id").value=""
    }
    function delete_num ()
    {
        var field = document.getElementById('your-input-id');
        field.value = field.value.slice(0, -1);
        phone_number.pop();
        return false;
    }
</script>
</body>
</html>
