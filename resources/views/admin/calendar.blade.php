<html>

<head>
    @include('admin.template.head')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>
@include('admin.template.header', ['tab' => 'calendar'])
<div class="content">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 margin-top-30">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="all" id="all" value="all" checked>
                <label class="form-check-label" for="all">
                    All
                </label>
            </div>
            <div class="form-check margin-left-10">
                <input class="form-check-input" type="checkbox" name="appointments" id="appointments" value="appointments" checked>
                <label class="form-check-label" for="appointments">
                    Appointments
                </label>
            </div>
            <div class="form-check margin-left-10">
                <input class="form-check-input" type="checkbox" name="tasks" id="tasks" value="tasks" checked>
                <label class="form-check-label" for="tasks">
                    Tasks
                </label>
            </div>
            <div class="form-check margin-left-10">
                <input class="form-check-input" type="checkbox" name="follow_up_calls" id="follow_up_calls" value="follow_up_calls" checked>
                <label class="form-check-label" for="follow_up_calls">
                    Follow-up Calls
                </label>
            </div>
            <div class="form-check margin-left-10">
                <input class="form-check-input" type="checkbox" name="letter_and_lable" id="letter_and_lable" value="letter_and_lable" checked>
                <label class="form-check-label" for="letter_and_lable">
                    Letter & Lable
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="completed_activities" id="completed_activities" value="completed_activities">
                <label class="form-check-label" for="completed_activities">
                    Completed Activities
                </label>
            </div>


            <div id="datepicker" class="margin-top-30"></div>

            <script>
                $( "#datepicker" ).datepicker();
            </script>

        </div>

        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 margin-top-30">
            <div class="CalendarView_title__1ElcL">Calendar</div>

            <button class="btn  btn-success margin-top-10  sm-100" data-toggle="modal" data-target="#myModal"><i class="fa fa-volume-control-phone"></i> Dial Follow-Up Calls</button>
            <button type="button" class="btn  btn-success margin-top-10 bg-dark-blue sm-100" data-toggle="modal" data-target="#basicExampleModal"><i class="fa fa-print"></i> Print Letters $ Labels
            </button>

            <button class="btn  btn-success margin-top-10 bg-dark-blue mange sm-100 " data-toggle="modal" data-target="#myModal"><i class="fa fa-calendar"></i></button>
            <button class="btn  btn-success margin-top-10 bg-dark-blue mange sm-100 margin-right-10" data-toggle="modal" data-target="#myModal"><i class="fa fa-align-justify"></i> </button>

            <div class="row margin-top-30">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sm-margin-top-70 margin-top-10">

                    <select class="form-control sm-with-auto margin-top-10" id="sel1" name="sellist1">
                        @if (isset($agents))
                            @foreach ($agents as $agent)
                                <option value="{{ $agent->user_name }}">{{ $agent->user_name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 margin-top-10">
                    <input type="date" class="form-control sm-with-auto margin-top-10" id="InvoiceDate" placeholder="15/02/2021" name="uname" required="">
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 margin-top-10">
                    <button class="btn  btn-success  bg-dark-blue margin-top-10 " data-toggle="modal" data-target="#myModal">Today </button>
                    <button class="btn  btn-success  bg-dark-blue  margin-top-10 " data-toggle="modal" data-target="#myModal">Past </button>
                    <button class="btn  btn-success  bg-dark-blue  margin-top-10" data-toggle="modal" data-target="#myModal">Future </button>
                </div>
            </div>

            <input type="text" id="search" name="search" placeholder="Search.." class="margin-top-10 sm-100" style="padding: 6px;">

            <div class="table-responsive">
                <table class="table table-striped margin-top-30">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Activity</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Assigned To</th>
                        <th scope="col">Priority</th>
                        <th scope="col">Action Plan</th>
                        <th scope="col">Edit</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @if (isset($calendars))
                        @foreach ($calendars as $calendar)
                            <tr>
                                <td>{{ $calendar->activity }}</td>
                                <td>{{ $calendar->contact }}</td>
                                <td>{{ $calendar->date }}</td>
                                <td>{{ $calendar->time }}</td>
                                <td>{{ $calendar->title }}</td>
                                <td>{{ $calendar->description }}</td>
                                <td>{{ $calendar->assigned_to }}</td>
                                <td>{{ $calendar->priority }}</td>
                                <td>{{ $calendar->action_plan }}</td>
                                {{--                                <th class="display-flex"><i class="fa  fa-pause-circle fa-font-size margin-top-5"></i> <form action="/action_page.php" class="margin-left-10">--}}
                                {{--                                        <select name="cars" id="cars" class="form-control-radius">--}}
                                {{--                                            <option value="volvo">Select Option</option>--}}
                                {{--                                        </select>--}}
                                {{--                                    </form>--}}
                                {{--                                </th>--}}
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 display-flex">
                    <p class="margin-top-10">Display</p>
                    <form>
                        <select id="per_page" name="per_page" class="margin-left-10 margin-top-10">
                            <option value="1" class="margin-top-10" @if($calendars->perPage() == 1) selected @endif>1</option>
                            <option value="2" class="margin-top-10" @if($calendars->perPage() == 2) selected @endif>2</option>
                            <option value="3" class="margin-top-10" @if($calendars->perPage() == 3) selected @endif>3</option>
                            <option value="4" class="margin-top-10" @if($calendars->perPage() == 4) selected @endif>4</option>
                            <option value="5" class="margin-top-10" @if($calendars->perPage() == 5) selected @endif>5</option>
                            <option value="6" class="margin-top-10" @if($calendars->perPage() == 6) selected @endif>6</option>
                            <option value="7" class="margin-top-10" @if($calendars->perPage() == 7) selected @endif>7</option>
                            <option value="8" class="margin-top-10" @if($calendars->perPage() == 8) selected @endif>8</option>
                            <option value="9" class="margin-top-10" @if($calendars->perPage() == 9) selected @endif>9</option>
                            <option value="10" class="margin-top-10" @if($calendars->perPage() == 10) selected @endif>10</option>
                        </select>
                    </form>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 display-flex">
                    <p class="margin-top-10">Page </p>
                    <input type="number" id="page_number" class="number-input" min="1" max="{{ $calendars->lastPage() }}" placeholder="1" value="{{ $calendars->currentPage() }}">

                    <p class="margin-top-10"> of {{ $calendars->lastPage() }}</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <p class="mange">showing {{ ($calendars->perPage() * ($calendars->currentPage()-1))+1 }} to {{ ($calendars->perPage() * ($calendars->currentPage()-1))+$calendars->count() }} of {{ $calendars->total() }} entries</p>

                </div>
            </div>
            {{ $calendars->onEachSide(3)->links('pagination::bootstrap-4') }}
            {{--            <button class="btn btn-outline-primary margin-top-10" style="padding: 10px;"><i class="fa fa-angle-left"></i></button>--}}
            {{--            <button class="btn btn-primary margin-top-10">1</button>--}}
            {{--            <button class="btn btn-outline-primary margin-top-10" style="padding: 10px;"><i class="fa fa-angle-right"></i></button>--}}


            <div class="footer">
                <button type="button" class="btn btn-lg  margin-left-10 footer-btn" disabled> <i class="fa fa-print"></i> Print</button>
                <button type="button" class="btn btn-lg margin-left-10 footer-btn" disabled><i class="fa fa-building"></i> Assign</button>
                <button type="button" class="btn btn-lg y margin-left-10 footer-btn" disabled><i class="fa fa-check-circle-o"></i> Complete</button>
                <button type="button" class="btn btn-lg  margin-left-10 footer-btn" disabled><i class="fa fa-chevron-circle-down"></i> Reschedule</button>
                <button type="button" class="btn btn-lg  margin-left-10 footer-btn" disabled><i class="fa fa-print"></i> Export</button>
            </div>

        </div></div>
</div>


<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Print Letters & Labels
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Print your scheduled action plan letter and mailing label steps by choosing the correct option below. When selected, the Mojo system will print the letter and mailing label steps in your activities view.
                <div class="form-check margin-top-10">
                    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios3" value="option3">
                    <label class="form-check-label" for="exampleRadios3">
                        Complete Activities after print
                    </label>
                </div>
                <h5 class="margin-top-10">SCHEDULED LABELS</h5>
                <hr>
                <div class="PrintLettersPopup_printerWarning__3JdFK">Attention! Specifically for Avery 5160 labels</div>
                <div class="PrintLettersPopup_printContainer__2RRXn"><div>Labels to print: 0 </div><a role="button" class="IconButton_iconButton__3nqcI IconButton_darkblue__1ALyi  IconButton_iconButtonWithText__33Q20" tabindex="0" style="width: 130px; height: 32px;"></a></div>
                <div class="form-check margin-top-10">
                    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios3" value="option3">
                    <label class="form-check-label" for="exampleRadios3">
                        Complete Activities after print
                    </label>
                </div>
                <div class="form-check margin-top-10">
                    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios3" value="option3">
                    <label class="form-check-label" for="exampleRadios3">
                        Complete Activities after print
                    </label>
                </div>
                <div class="form-check margin-top-10">
                    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios3" value="option3">
                    <label class="form-check-label" for="exampleRadios3">
                        Complete Activities after print
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>

    </div>
</div><div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
           aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('#all').change(function() {
        if(this.checked) {
            $('#appointments').prop('checked', true);
            $('#tasks').prop('checked', true);
            $('#follow_up_calls').prop('checked', true);
            $('#letter_and_lable').prop('checked', true);
        }
        else {
            $('#appointments').prop('checked', false);
            $('#tasks').prop('checked', false);
            $('#follow_up_calls').prop('checked', false);
            $('#letter_and_lable').prop('checked', false);
        }
    });

    $('#appointments').change(function() {
        if(this.checked && $('#tasks').is(':checked') && $('#follow_up_calls').is(':checked') && $('#letter_and_lable').is(':checked')) {
            $('#all').prop('checked', true);
        }
        else {
            $('#all').prop('checked', false);
        }
    });

    $('#tasks').change(function() {
        if(this.checked && $('#appointments').is(':checked') && $('#follow_up_calls').is(':checked') && $('#letter_and_lable').is(':checked')) {
            $('#all').prop('checked', true);
        }
        else {
            $('#all').prop('checked', false);
        }
    });

    $('#follow_up_calls').change(function() {
        if(this.checked && $('#appointments').is(':checked') && $('#tasks').is(':checked') && $('#letter_and_lable').is(':checked')) {
            $('#all').prop('checked', true);
        }
        else {
            $('#all').prop('checked', false);
        }
    });

    $('#letter_and_lable').change(function() {
        if(this.checked && $('#appointments').is(':checked') && $('#tasks').is(':checked') && $('#follow_up_calls').is(':checked')) {
            $('#all').prop('checked', true);
        }
        else {
            $('#all').prop('checked', false);
        }
    });

    $(".page-link").click(function() {
        location.href = root_url + "/admin/calendar" + updateUrlParameter(window.location.search, 'page', $(this).attr('href').split('=')[1]);
        return false;
    });

    $("#search").on('keyup', function (e) {
        if (e.key === 'Enter' || e.keyCode === 13) {
            location.href = root_url + "/admin/calendar" + updateUrlParameter(window.location.search, 'search', $(this).val());
        }
    });

    $('#page_number').change(function() {
        if ($(this).val() > {{ $calendars->lastPage() }})
            location.href = root_url + "/admin/calendar" + updateUrlParameter(window.location.search, 'page', {{ $calendars->lastPage() }});
        else if ($(this).val() < 1)
            location.href = root_url + "/admin/calendar" + updateUrlParameter(window.location.search, 'page', 1);
        else
            location.href = root_url + "/admin/calendar" + updateUrlParameter(window.location.search, 'page', $(this).val());
    });

    $('#per_page').change(function() {
        location.href = root_url + "/admin/calendar" + updateUrlParameter(window.location.search, 'per_page', $(this).find(":selected").val());
    });

    function updateUrlParameter(uri, key, value) {
        // remove the hash part before operating on the uri
        var i = uri.indexOf('#');
        var hash = i === -1 ? ''  : uri.substr(i);
        uri = i === -1 ? uri : uri.substr(0, i);

        var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
        var separator = uri.indexOf('?') !== -1 ? "&" : "?";
        if (uri.match(re)) {
            uri = uri.replace(re, '$1' + key + "=" + value + '$2');
        } else {
            uri = uri + separator + key + "=" + value;
        }
        return uri + hash;  // finally append the hash as well
    }
</script>

</body>
</html>
