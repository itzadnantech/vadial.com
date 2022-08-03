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

        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12  margin-top-30">
            <h6 class="color-blue">Step 04</h6>
            <h6 class="color-blue"> Finish Import</h6>
            <p>You will be importing this data into <b></b> list with <b></b> source name and manager <b>@if (isset($manager)){{ $manager }}@endif</b>.
                We will import the following fields from your text file to these VADial fields:</p>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h6>Your Fields:</h6>
                    @if (isset($your_fields))
                        @foreach ($your_fields as $your_field)
                            <p>{{ $your_field }}</p>
                        @endforeach
                    @endif
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h6>VADial Fields:</h6>
                    @if (isset($vadial_fields))
                        @foreach ($vadial_fields as $vadial_field)
                            <p><i class="fa fa-angle-double-right"></i>
                                @if (strtolower($vadial_field) == 'first_name') First or Full Name @endif
                                @if (strtolower($vadial_field) == 'last_name') Last Name @endif
                                @if (strtolower($vadial_field) == 'property_address') Property Address @endif
                                @if (strtolower($vadial_field) == 'property_city') Property City @endif
                                @if (strtolower($vadial_field) == 'property_state') Property State @endif
                                @if (strtolower($vadial_field) == 'property_zip_code') Property Zip Code @endif
                                @if (strtolower($vadial_field) == 'mailing_address') Mailing Address @endif
                                @if (strtolower($vadial_field) == 'mailing_city') Mailing City @endif
                                @if (strtolower($vadial_field) == 'mailing_state') Mailing State @endif
                                @if (strtolower($vadial_field) == 'mailing_zip_code') Mailing Zip Code @endif
                                @if (strtolower($vadial_field) == 'phone_number') Phone @endif
                                @if (strtolower($vadial_field) == 'mobile_number') Mobile Phone @endif
                                @if (strtolower($vadial_field) == 'email') Email @endif
                                @if (strtolower($vadial_field) == 'notes') Notes @endif
                                @if (strtolower($vadial_field) == 'date_of_birth') Birthday @endif
                                @if (strtolower($vadial_field) == 'co-owner_date_of_birth') Co-Owner Birthday @endif
                                @if (strtolower($vadial_field) == 'co-owner') Co-Owner @endif
                            </p>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <button class="btn  btn-danger margin-top-20 sm-100 width-100" onclick="window.history.back()">Remap data</button>
                </div>
                <div class="col-7">
                    <p>If you notice a field mapped incorrectly or missing click remap data to make your adjustments</p>
                </div>
            </div>

        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12  margin-top-30">
            <h6 class="color-blue">Import Stats</h6>
            <h6>To be imported: 3</h6>
            <button type="button" class="btn  btn-danger margin-top-20 sm-100" onclick="finish_create_campaign()">Finish Import</button>
            <p class="margin-top-10">VADial will scrub duplicates on your spreadsheet with records already existing within your account.<br>
                <b>Remap data:</b> Clicking this will return you to the previous screen</p>
        </div>
    </div>
</div>

<script>
    function finish_create_campaign(){
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: "{{ url('/admin/campaigns/campaigns/create_campaign_action') }}",
            contentType: "application/json",
            type: "POST",
            data: JSON.stringify(@json(array_merge(array('manager'=>$manager),$fields))),
            success: function(data)
            {
                if (data === 'CampaignAdded')
                    swal("Created! Successful", "Campaign Added", "success", {
                        buttons: false,
                        timer: 1000,
                    }).then(function() {
                        window.location.replace(root_url + '/admin/campaigns/campaigns');
                    });
                else if (data === 'ParseError')
                    swal("Create! Failed", "Unable to Read Document", "warning");
                else if (data === 'InvalidDocument')
                    swal("Create! Failed", "Invalid Document Type", "warning");
                else if (data === 'CampaignFailed')
                    swal("Create! Failed", "Cannot Create Campaign", "warning");
                else
                    swal("Create! Failed", data, "error");
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log(XMLHttpRequest, textStatus, errorThrown);
                swal("Error",textStatus + XMLHttpRequest + errorThrown, "error");
            }
        });
    }
</script>

</body>
</html>
