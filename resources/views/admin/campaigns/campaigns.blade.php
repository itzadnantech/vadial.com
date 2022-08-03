<html>

<head>
    @include('admin.template.head')
</head>

<body>
@include('admin.template.header', ['tab' => 'campaigns'])
<div class="content">
    <div class="row">
        @include('admin.campaigns.template.header', ['menu' => 'campaigns'])
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12  margin-top-30">
            <h6>PREDICTIVE/POWER/PREVIEW CAMPAIGNS</h6>
            <div class="bg-gray">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  margin-top-10">
                        <input type="date" class="form-control" id="InvoiceDate" placeholder="15/02/2021" name="uname" required="">
                        <label class="form-check-label margin-top-10 margin-left-24">
                            <input type="checkbox" class="form-check-input" value=""> Show Active Only</label>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  margin-top-10">
                        <button class="btn  btn-success margin-top-20 bg-dark-blue mange sm-100"  data-toggle="modal" data-target="#myModal">Create Campaigns</button><br><br>

                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Welcome to the Import Wizard</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <p>In the following steps, we will walk you through importing your lead files. We've included a how-to video for you to reference before you begin.</p>
                                        <h6 class="color-blue">Step 01:</h6>
                                        <h6 class="color-blue">Locate and Upload Your File</h6>
                                        <p>Please note, VADial accepts the following formats only: .xls .xlsx .csv</p>
                                        <input type="file" id="campaigns_document" name="campaigns_document" accept=".csv, .xls, .xlsx">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" id="next_1">Next</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <button class="btn  btn-success margin-top-20 bg-dark-blue mange margin-left-10 margin-top-10 sm-100">Search</button>
                        <input type="text" placeholder="Search.." class="margin-top-10 mange sm-100" style="padding: 6px;">

                    </div>
                </div>

            </div>
            <div class="table-responsive">
                <table class="table table-striped margin-top-30">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Campaign</th>
                        <th scope="col">Dials</th>
                        <th scope="col">Live</th>
                        <th scope="col">VM</th>
                        <th scope="col" >Others</th>
                        <th scope="col" >AgentsConnect</th>
                        <th scope="col">Abandon</th>
                        <th scope="col">AgentsIn</th>
                        <th scope="col">Leads</th>
                        <th scope="col">Redials</th>
                        <th scope="col" >Status</th>
                        <th scope="col">Channels</th>
                        <th scope="col">Minutes</th>
                        <th scope="col" >Options</th>
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
                                <td>{{ $campaign->abandon }}</td>
                                <td>{{ $campaign->agent_sIn }}</td>
                                <td>{{ $campaign->leads }}</td>
                                <td>{{ $campaign->redials }}</td>
                                <td>{{ $campaign->status }}</td>
                                <td>{{ $campaign->channels }}</td>
                                <td>{{ $campaign->minutes }}</td>
                                <th class="display-flex"><i class="fa  fa-pause-circle fa-font-size margin-top-5"></i> <form action="/action_page.php" class="margin-left-10">
                                        <select name="cars" id="cars" class="form-control-radius">
                                            <option value="volvo">Select Option</option>
                                        </select>
                                    </form>
                                </th>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
            {{ $campaigns->onEachSide(3)->links('pagination::bootstrap-4') }}
{{--            <button class="btn btn-outline-primary margin-top-10" style="padding: 10px;"><i class="fa fa-angle-left"></i></button>--}}
{{--            <button class="btn btn-primary margin-top-10">01</button>--}}
{{--            <button class="btn btn-outline-primary margin-top-10" style="padding: 10px;"><i class="fa fa-angle-right"></i></button>--}}
        </div>

    </div>
</div>

<script>
    $('#next_1').click(function(e){
        data = new FormData();
        data.append('campaigns_document', $('#campaigns_document')[0].files[0]);

        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: root_url + "/admin/campaigns/campaigns/create_campaign_1",
            type: "POST",
            data: data,
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            success: function(data)
            {
                console.log(data);
                if (data === 'ParseError') {
                    swal("Upload! Failed", "Unable to Read Document", "warning");
                }
                else if (data === 'InvalidDocument') {
                    swal("Upload! Failed", "Please Upload Valid (csv, xls, xlsx) File", "warning");
                }
                else if (data === 'InvalidFile') {
                    swal("Upload! Failed", "Invalid Uploaded File", "warning");
                }
                else if (data === 'InvalidInput') {
                    swal("Upload! Failed", "Please Upload File", "warning");
                }
                else {
                    window.location.href = root_url + '/admin/campaigns/campaigns/create_campaign_2';
                }
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log(XMLHttpRequest, textStatus, errorThrown);
                swal("Error",textStatus + XMLHttpRequest + errorThrown, "error");
            }
        });
    });
</script>

</body>
</html>
