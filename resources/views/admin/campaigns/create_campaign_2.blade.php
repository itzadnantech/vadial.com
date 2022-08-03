<html>

<head>
    @include('admin.template.head')
</head>

<body>
@include('admin.template.header', ['tab' => 'campaigns'])
<div class="content">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            <ul class="navbar-nav side-bar">
                <li class="nav-item">
                    <a class="nav-link" href="campaigns.html">
                        <h6  class="cool-link color-purple" >Compaigns<i class="fa fa-phone mange fa-font-size"></i> </h6></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="redail%20Templete.html">
                        <h6 class="cool-link color-black">Redial Templates <i class="fa  fa-lightbulb-o mange fa-font-size"></i></h6></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="recycle%20campaign.html">
                        <h6 class="cool-link color-black">Recycle Compaigns <i class="fa fa-recycle mange fa-font-size"></i></h6></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="recycle%20phone.html">
                        <h6 class="cool-link color-black">Recycle Phone List <i class="fa fa-recycle mange fa-font-size"></i></h6></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="upload%20setting.html">
                        <h6 class="cool-link color-black">Upload Setting <i class="fa fa-gear mange fa-font-size"></i></h6></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <h6 class="cool-link color-black">DNC <i class="fa fa-angle-right margin-left-135"></i><i class="fa fa-ban mange fa-font-size"></i></h6></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="agent%20state.html">
                        <h6 class="cool-link color-black">Agent Statuses <i class="fa fa-user-circle mange fa-font-size"></i></h6></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="agent%20script.html">
                        <h6 class="cool-link color-black">Agent Script <i class="fa fa-copy mange fa-font-size"></i></h6></a>
                </li>
            </ul>
        </div>

        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12  margin-top-30">
            <h6 class="color-blue">Step 02</h6>
            <h6 class="color-blue">Choosing Your File Source and Destination</h6>
            <p>In this step, you will choose the source of your leads and where they will go. Choose the list or group from the available options, if you are creating a new list or group, simply select the 'x' button and name it, than choose it.</p>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                    <div class="row">
                        <div class="col-sm-12">

                            <div class="card border-card">
                                <h5>Calling Lists </h5>
                                <div class=" scroll">
                                    <input type="text" placeholder="Search.." class="width-100">
                                    <p class="margin-top-10 parah"><a href="#" class="color-black">Brian</a> <a href="#" id="hide16"><img src="{{ url('assets/images/manage.svg') }}" class="mange">
                                        </a></p><div class="div-hide16" style="display: none;"><a href="#" id="hide16">
                                        </a><div class="card"><a href="#" id="hide">
                                            </a>
                                            <a href="#"> <i class="fa fa-edit color-grey"> Edit</i></a>
                                            <a href="#"> <i class="fa fa-close color-red"> <span class="color-black"> Delete</span></i></a>
                                        </div>
                                    </div>

                                    <p></p>
                                    <p class="margin-top-minus margin-top-10 parah"><a href="#" class="color-black">Dan Knowles</a> <a href="#" id="hide17"><img src="{{ url('assets/images/manage.svg') }}" class="mange">
                                        </a></p><div class="div-hide17" style="display: none;"><a href="#" id="hide17">
                                        </a><div class="card "><a href="#" id="hide17">
                                            </a>
                                            <a href="#"> <i class="fa fa-edit color-grey"> Edit</i></a>
                                            <a href="#"> <i class="fa fa-close color-red"> <span class="color-black"> Delete</span></i></a>
                                        </div>
                                    </div>

                                    <p></p>
                                    <p class="margin-top-minus margin-top-10 parah"><a href="#" class="color-black">Isaac & Adam</a> <a href="#" id="hide18"><img src="{{ url('assets/images/manage.svg') }}" class="mange">
                                        </a></p><div class="div-hide18" style="display: none;"><a href="#" id="hide18">
                                        </a><div class="card"><a href="#" id="hide18">
                                            </a>
                                            <a href="#"> <i class="fa fa-edit color-grey"> Edit</i></a>
                                            <a href="#"> <i class="fa fa-close color-red"> <span class="color-black"> Delete</span></i></a>
                                        </div>
                                    </div>

                                    <p></p>
                                    <p class="margin-top-minus margin-top-10 parah"><a href="#" class="color-black">MarcAnthony</a> <a href="#" id="hide19"><img src="{{ url('assets/images/manage.svg') }}" class="mange">
                                        </a></p><div class="div-hide19" style="display: none;"><a href="#" id="hide19">
                                        </a><div class="card"><a href="#" id="hide19">
                                            </a>
                                            <a href="#"> <i class="fa fa-edit color-grey"> Edit</i></a>
                                            <a href="#"> <i class="fa fa-close color-red"> <span class="color-black"> Delete</span></i></a>
                                        </div>
                                    </div>

                                    <p></p>
                                    <p class="margin-top-minus margin-top-10 parah"><a href="#" class="color-black"> +-+Be</a> <a href="#" id="hide20"><img src="{{ url('assets/images/manage.svg') }}" class="mange">
                                        </a></p><div class="div-hide20" style="display: none;"><a href="#" id="hide20">
                                        </a><div class="card"><a href="#" id="hide20">
                                            </a>
                                            <a href="#"> <i class="fa fa-edit color-grey"> Edit</i></a>
                                            <a href="#"> <i class="fa fa-close color-red"> <span class="color-black"> Delete</span></i></a>
                                        </div>
                                    </div>

                                    <p></p>
                                    <p class="margin-top-minus margin-top-10 parah"><a href="#" class="color-black"> +-+Cha</a> <a href="#" id="hide21"><img src="{{ url('assets/images/manage.svg') }}" class="mange">
                                        </a></p><div class="div-hide21"><a href="#" id="hide21">
                                        </a><div class="card"><a href="#" id="hide21">
                                            </a>
                                            <a href="#"> <i class="fa fa-edit color-grey"> Edit</i></a>
                                            <a href="#"> <i class="fa fa-close color-red"> <span class="color-black"> Delete</span></i></a>
                                        </div>
                                    </div>

                                    <p></p>
                                    <p class="margin-top-minus margin-top-10 parah"><a href="#" class="color-black">...</a> <a href="#" id="hide22"><img src="{{ url('assets/images/manage.svg') }}" class="mange">
                                        </a></p><div class="div-hide22"><a href="#" id="hide22">
                                        </a><div class="card"><a href="#" id="hide22">
                                            </a>
                                            <a href="#"> <i class="fa fa-edit color-grey"> Edit</i></a>
                                            <a href="#"> <i class="fa fa-close color-red"> <span class="color-black"> Delete</span></i></a>
                                        </div>
                                    </div>

                                    <p></p>
                                    <p class="margin-top-minus margin-top-10 parah"><a href="#" class="color-black">..lakeitha</a> <a href="#" id="hide23"><img src="{{ url('assets/images/manage.svg') }}" class="mange">
                                        </a></p><div class="div-hide23"><a href="#" id="hide23">
                                        </a><div class="card"><a href="#" id="hide23">
                                            </a>
                                            <a href="#"> <i class="fa fa-edit color-grey"> Edit</i></a>
                                            <a href="#"> <i class="fa fa-close color-red"> <span class="color-black"> Delete</span></i></a>
                                        </div>
                                    </div>

                                    <p></p>
                                    <p class="margin-top-minus margin-top-10 parah"><a href="#" class="color-black">0</a> <a href="#" id="hide24"><img src="{{ url('assets/images/manage.svg') }}" class="mange">
                                        </a></p><div class="div-hide24"><a href="#" id="hide24">
                                        </a><div class="card"><a href="#" id="hide24">
                                            </a>
                                            <a href="#"> <i class="fa fa-edit color-grey"> Edit</i></a>
                                            <a href="#"> <i class="fa fa-close color-red"> <span class="color-black"> Delete</span></i></a>
                                        </div>
                                    </div>
                                    <p></p>

                                    <p class="margin-top-minus margin-top-10 parah"><a href="#" class="color-black">01/ Brian H Cobb</a> <a href="#" id="hide25"><img src="{{ url('assets/images/manage.svg') }}" class="mange">
                                        </a></p><div class="div-hide25"><a href="#" id="hide25">
                                        </a><div class="card"><a href="#" id="hide25">
                                            </a>
                                            <a href="#"> <i class="fa fa-edit color-grey"> Edit</i></a>
                                            <a href="#"> <i class="fa fa-close color-red"> <span class="color-black"> Delete</span></i></a>
                                        </div>
                                    </div>
                                    <p></p>
                                    <p class="margin-top-minus margin-top-10 parah"><a href="#" class="color-black">01/ Brian H Dekalb</a> <a href="#" id="hide26"><img src="{{ url('assets/images/manage.svg') }}" class="mange">
                                        </a></p><div class="div-hide26"><a href="#" id="hide26">
                                        </a><div class="card"><a href="#" id="hide26">
                                            </a>
                                            <a href="#"> <i class="fa fa-edit color-grey"> Edit</i></a>
                                            <a href="#"> <i class="fa fa-close color-red"> <span class="color-black"> Delete</span></i></a>
                                        </div>
                                    </div>
                                    <p></p>
                                    <p class="margin-top-minus margin-top-10 parah"><a href="#" class="color-black">01/ Brian H Fulton</a> <a href="#" id="hide27"><img src="{{ url('assets/images/manage.svg') }}" class="mange">
                                        </a></p><div class="div-hide27"><a href="#" id="hide27">
                                        </a><div class="card"><a href="#" id="hide27">
                                            </a>
                                            <a href="#"> <i class="fa fa-edit color-grey"> Edit</i></a>
                                            <a href="#"> <i class="fa fa-close color-red"> <span class="color-black"> Delete</span></i></a>
                                        </div>
                                    </div>

                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                    <div class="row">
                        <div class="col-sm-12">

                            <div class="card border-card">
                                <h5>Groups</h5>
                                <div class=" scroll">
                                    <input type="text" placeholder="Search.." class="width-100">
                                    <p class="margin-top-10 parah"><a href="#" class="color-black">04/06 San-Bay City, MI</a> <a href="#" id="hide"><img src="{{ url('assets/images/manage.svg') }}" class="mange">
                                        </a></p><div class="div-hide1" style="display: none;"><a href="#" id="hide">
                                        </a><div class="card"><a href="#" id="hide">
                                            </a>
                                            <a href="#"> <i class="fa fa-edit color-grey"> Edit</i></a>
                                            <a href="#"> <i class="fa fa-close color-red"> <span class="color-black"> Delete</span></i></a>
                                        </div>
                                    </div>
                                    <p></p>
                                    <p class="margin-top-minus margin-top-10 parah"><a href="#" class="color-black">Appointment Set</a> <a href="#" id="hide2"><img src="{{ url('assets/images/manage.svg') }}" class="mange">
                                        </a></p><div class="div-hide2" style="display: none;"><a href="#" id="hide2">
                                        </a><div class="card "><a href="#" id="hide2">
                                            </a>
                                            <a href="#"> <i class="fa fa-edit color-grey"> Edit</i></a>
                                            <a href="#"> <i class="fa fa-close color-red"> <span class="color-black"> Delete</span></i></a>
                                        </div>
                                    </div>
                                    <p></p>
                                    <p class="margin-top-minus margin-top-10 parah"><a href="#" class="color-black">Dead Lead</a> <a href="#" id="hide3"><img src="{{ url('assets/images/manage.svg') }}" class="mange">
                                        </a></p><div class="div-hide3" style="display: none;"><a href="#" id="hide3">
                                        </a><div class="card"><a href="#" id="hide3">
                                            </a>
                                            <a href="#"> <i class="fa fa-edit color-grey"> Edit</i></a>
                                            <a href="#"> <i class="fa fa-close color-red"> <span class="color-black"> Delete</span></i></a>
                                        </div>
                                    </div>
                                    <p></p>
                                    <p class="margin-top-minus margin-top-10 parah"><a href="#" class="color-black">Future Follow Up</a> <a href="#" id="hide4"><img src="{{ url('assets/images/manage.svg') }}" class="mange">
                                        </a></p><div class="div-hide4" style="display: none;"><a href="#" id="hide4">
                                        </a><div class="card"><a href="#" id="hide4">
                                            </a>
                                            <a href="#"> <i class="fa fa-edit color-grey"> Edit</i></a>
                                            <a href="#"> <i class="fa fa-close color-red"> <span class="color-black"> Delete</span></i></a>
                                        </div>
                                    </div>
                                    <p></p>
                                    <p class="margin-top-minus margin-top-10 parah"><a href="#" class="color-black"> Harris County hannah</a> <a href="#" id="hide5"><img src="{{ url('assets/images/manage.svg') }}" class="mange">
                                        </a></p><div class="div-hide5" style="display: none;"><a href="#" id="hide5">
                                        </a><div class="card"><a href="#" id="hide5">
                                            </a>
                                            <a href="#"> <i class="fa fa-edit color-grey"> Edit</i></a>
                                            <a href="#"> <i class="fa fa-close color-red"> <span class="color-black"> Delete</span></i></a>
                                        </div>
                                    </div>
                                    <p></p>
                                    <p class="margin-top-minus margin-top-10 parah"><a href="#" class="color-black">Hot Lead</a> <a href="#" id="hide6"><img src="{{ url('assets/images/manage.svg') }}" class="mange">
                                        </a></p><div class="div-hide6"><a href="#" id="hide6">
                                        </a><div class="card"><a href="#" id="hide6">
                                            </a>
                                            <a href="#"> <i class="fa fa-edit color-grey"> Edit</i></a>
                                            <a href="#"> <i class="fa fa-close color-red"> <span class="color-black"> Delete</span></i></a>
                                        </div>
                                    </div>
                                    <p></p>
                                    <p class="margin-top-minus margin-top-10 parah"><a href="#" class="color-black">Not Yet Interesteds</a> <a href="#" id="hide7"><img src="{{ url('assets/images/manage.svg') }}" class="mange">
                                        </a></p><div class="div-hide7"><a href="#" id="hide7">
                                        </a><div class="card"><a href="#" id="hide7">
                                            </a>
                                            <a href="#"> <i class="fa fa-edit color-grey"> Edit</i></a>
                                            <a href="#"> <i class="fa fa-close color-red"> <span class="color-black"> Delete</span></i></a>
                                        </div>
                                    </div>
                                    <p></p>
                                    <p class="margin-top-minus margin-top-10 parah"><a href="#" class="color-black">Trash</a> <a href="#" id="hide8"><img src="{{ url('assets/images/manage.svg') }}" class="mange">
                                        </a></p><div class="div-hide8"><a href="#" id="hide8">
                                        </a><div class="card"><a href="#" id="hide8">
                                            </a>
                                            <a href="#"> <i class="fa fa-edit color-grey"> Edit</i></a>
                                            <a href="#"> <i class="fa fa-close color-red"> <span class="color-black"> Delete</span></i></a>
                                        </div>
                                    </div>
                                    <p></p>
                                    <p class="margin-top-minus margin-top-10 parah"><a href="#" class="color-black">Warm Lead</a> <a href="#" id="hide9"><img src="{{ url('assets/images/manage.svg') }}" class="mange">
                                        </a></p><div class="div-hide9"><a href="#" id="hide9">
                                        </a><div class="card"><a href="#" id="hide9">
                                            </a>
                                            <a href="#"> <i class="fa fa-edit color-grey"> Edit</i></a>
                                            <a href="#"> <i class="fa fa-close color-red"> <span class="color-black"> Delete</span></i></a>
                                        </div>
                                    </div>
                                    <p></p>
                                    <p class="margin-top-minus margin-top-10 parah"><a href="#" class="color-black">brad oct26</a> <a href="#" id="hide10"><img src="{{ url('assets/images/manage.svg') }}" class="mange">
                                        </a></p><div class="div-hide10"><a href="#" id="hide10">
                                        </a><div class="card"><a href="#" id="hide10">
                                            </a>
                                            <a href="#"> <i class="fa fa-edit color-grey"> Edit</i></a>
                                            <a href="#"> <i class="fa fa-close color-red"> <span class="color-black"> Delete</span></i></a>
                                        </div>
                                    </div>
                                    <p></p>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                    <div class="row">
                        <div class="col-sm-12">

                            <div class="card border-card">
                                <h5>Source</h5>
                                <div class=" scroll">
                                    <input type="text" placeholder="Search.." class="width-100">
                                    <p class="margin-top-10 parah"><a href="#" class="color-black">VADial FRBO</a> <a href="#" id="hide11"><img src="{{ url('assets/images/manage.svg') }}" class="mange">
                                        </a></p><div class="div-hide11" style="display: none;"><a href="#" id="hide11">
                                        </a><div class="card"><a href="#" id="hide11">
                                            </a>
                                            <a href="#"> <i class="fa fa-edit color-grey"> Edit</i></a>
                                            <a href="#"> <i class="fa fa-close color-red"> <span class="color-black"> Delete</span></i></a>
                                        </div>
                                    </div>

                                    <p></p>
                                    <p class="margin-top-minus margin-top-10 parah"><a href="#" class="color-black">VADial FSBO</a> <a href="#" id="hide12"><img src="{{ url('assets/images/manage.svg') }}" class="mange">
                                        </a></p><div class="div-hide12" style="display: none;"><a href="#" id="hide12">
                                        </a><div class="card "><a href="#" id="hide12">
                                            </a>
                                            <a href="#"> <i class="fa fa-edit color-grey"> Edit</i></a>
                                            <a href="#"> <i class="fa fa-close color-red"> <span class="color-black"> Delete</span></i></a>
                                        </div>
                                    </div>

                                    <p></p>
                                    <p class="margin-top-minus margin-top-10 parah"><a href="#" class="color-black">VADial Leadstore</a> <a href="#" id="hide13"><img src="{{ url('assets/images/manage.svg') }}" class="mange">
                                        </a></p><div class="div-hide13" style="display: none;"><a href="#" id="hide13">
                                        </a><div class="card"><a href="#" id="hide13">
                                            </a>
                                            <a href="#"> <i class="fa fa-edit color-grey"> Edit</i></a>
                                            <a href="#"> <i class="fa fa-close color-red"> <span class="color-black"> Delete</span></i></a>
                                        </div>
                                    </div>

                                    <p></p>
                                    <p class="margin-top-minus margin-top-10 parah"><a href="#" class="color-black">Skip Tracer</a> <a href="#" id="hide14"><img src="{{ url('assets/images/manage.svg') }}" class="mange">
                                        </a></p><div class="div-hide14" style="display: none;"><a href="#" id="hide14">
                                        </a><div class="card"><a href="#" id="hide14">
                                            </a>
                                            <a href="#"> <i class="fa fa-edit color-grey"> Edit</i></a>
                                            <a href="#"> <i class="fa fa-close color-red"> <span class="color-black"> Delete</span></i></a>
                                        </div>
                                    </div>

                                    <p></p>
                                    <p class="margin-top-minus margin-top-10 parah"><a href="#" class="color-black">roderick Oregon CB</a> <a href="#" id="hide15"><img src="{{ url('assets/images/manage.svg') }}" class="mange">
                                        </a></p><div class="div-hide15" style="display: none;"><a href="#" id="hide15">
                                        </a><div class="card"><a href="#" id="hide15">
                                            </a>
                                            <a href="#"> <i class="fa fa-edit color-grey"> Edit</i></a>
                                            <a href="#"> <i class="fa fa-close color-red"> <span class="color-black"> Delete</span></i></a>
                                        </div>
                                    </div>

                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <h3>Manager Option</h3>
            <p>You can assign all of the contacts in this import to a specific agent within your account. Assigning a manager allows User access level to see these contacts in specific groups within the My Data section. This is especially helpful when importing hot leads or other contacts specific to an agent.</p>
            <label for="manager">Manager </label>

            <form method="post" action="{{ url('/admin/campaigns/campaigns/create_campaign_3') }}">
                @csrf
                <select name="manager" id="manager">
                    @if (isset($users))
                        @foreach ($users as $user)
                            <option value="{{ $user->user_name }}">{{ $user->user_name }}</option>
                        @endforeach
                    @endif
                </select><br>
                <button type="submit" class="btn  btn-success margin-top-10 bg-dark-blue sm-100" >Next</button>
            </form>
        </div>

    </div>
</div>

<script>
    $(document).ready(function() {
        $("#hide").click(function() {
            $(".div-hide1").toggle();
        });
    });
    $(document).ready(function() {
        $("#hide2").click(function() {
            $(".div-hide2").toggle();
        });
    });
    $(document).ready(function() {
        $("#hide3").click(function() {
            $(".div-hide3").toggle();
        });
    });
    $(document).ready(function() {
        $("#hide4").click(function() {
            $(".div-hide4").toggle();
        });
    });
    $(document).ready(function() {
        $("#hide5").click(function() {
            $(".div-hide5").toggle();
        });
    });
    $(document).ready(function() {
        $("#hide6").click(function() {
            $(".div-hide6").toggle();
        });
    });
    $(document).ready(function() {
        $("#hide7").click(function() {
            $(".div-hide7").toggle();
        });
    });
    $(document).ready(function() {
        $("#hide8").click(function() {
            $(".div-hide8").toggle();
        });
    });
    $(document).ready(function() {
        $("#hide9").click(function() {
            $(".div-hide9").toggle();
        });
    });
    $(document).ready(function() {
        $("#hide10").click(function() {
            $(".div-hide10").toggle();
        });
    });
    $(document).ready(function() {
        $("#hide11").click(function() {
            $(".div-hide11").toggle();
        });
    });
    $(document).ready(function() {
        $("#hide12").click(function() {
            $(".div-hide12").toggle();
        });
    });

    $(document).ready(function() {
        $("#hide13").click(function() {
            $(".div-hide13").toggle();
        });
    });
    $(document).ready(function() {
        $("#hide14").click(function() {
            $(".div-hide14").toggle();
        });
    });
    $(document).ready(function() {
        $("#hide15").click(function() {
            $(".div-hide15").toggle();
        });
    });
    $(document).ready(function() {
        $("#hide16").click(function() {
            $(".div-hide16").toggle();
        });
    });
    $(document).ready(function() {
        $("#hide17").click(function() {
            $(".div-hide17").toggle();
        });
    });

    $(document).ready(function() {
        $("#hide18").click(function() {
            $(".div-hide18").toggle();
        });
    });
    $(document).ready(function() {
        $("#hide19").click(function() {
            $(".div-hide19").toggle();
        });
    });
    $(document).ready(function() {
        $("#hide20").click(function() {
            $(".div-hide20").toggle();
        });
    });
    $(document).ready(function() {
        $("#hide21").click(function() {
            $(".div-hide21").toggle();
        });
    });
    $(document).ready(function() {
        $("#hide22").click(function() {
            $(".div-hide22").toggle();
        });
    });
    $(document).ready(function() {
        $("#hide23").click(function() {
            $(".div-hide23").toggle();
        });
    });
    $(document).ready(function() {
        $("#hide24").click(function() {
            $(".div-hide24").toggle();
        });
    });
    $(document).ready(function() {
        $("#hide25").click(function() {
            $(".div-hide25").toggle();
        });
    });
    $(document).ready(function() {
        $("#hide26").click(function() {
            $(".div-hide26").toggle();
        });
    });
    $(document).ready(function() {
        $("#hide27").click(function() {
            $(".div-hide27").toggle();
        });
    });

</script>
</body>
</html>
