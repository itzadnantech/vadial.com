<html>

<head>
    @include('admin.template.head')
</head>
<body>
@include('admin.template.header', ['tab' => 'account'])
<div class="content">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 margin-top-30">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/setting') }}">
                        <h6  class="cool-link" >DIALER</h6></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/setting_email') }}">
                        <h6 class="cool-link">EMAIL</h6></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/setting_letter') }}">
                        <h6 class="cool-link">LETTER</h6></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/setting_action_plan') }}">
                        <h6 class="cool-link">ACTION PLAN</h6></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/setting_vadial_voice') }}">
                        <h6 class="cool-link">VADial VOICE</h6></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/setting_script_form') }}">
                        <h6 class="cool-link">SCRIPTS/FORMS</h6></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <h6 class="cool-link">DATA MANAGEMENT/DNC</h6></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <h6 class="cool-link">APPEARANCE</h6></a>
                </li>
            </ul>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12  margin-top-30">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="{{ url('/admin/setting') }}">Caller ID</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="{{ url('/admin/setting_callback_voicemail_messages') }}">Callback & Voicemail Messages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/setting_power_dialer') }}">Power Dialer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/setting_social_post') }}">Vadial Social post</a>
                </li>
            </ul>

            <h6 class="margin-top-30"><b>CALLER IDS</b></h6>
            <hr>
            <p>Caller ID’s are mandatory using VADial. The caller ID is the phone number displayed while making your outbound calls. Here is where you will add all of your caller ID’s to the system. You choose which one of your caller ID’s to display before each calling session.</p>

            <table class="table margin-top-30">
                <thead class="thead-light">
                <tr>
                    <th scope="col">ID#</th>
                    <th scope="col">NUMBER</th>
                    <th scope="col">NAME</th>
                    <th scope="col">TYPE</th>
                    <th scope="col">AVAILABLE TO</th>
                    <th scope="col">EDIT</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">01</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12  margin-top-30">
                    <p class="color-grey ">Showing 0 to 0 of 0 entries</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12  margin-top-30">
                    <button class="btn  btn-success margin-top-20 bg-dark-blue">Previous</button>
                    <button class="btn  btn-success margin-top-20 bg-dark-blue">Next</button>
                </div>
            </div>


            <button type="button" class="btn btn-outline-primary  margin-top-10" data-toggle="modal" data-target="#myModal">
                Add Caller ID
            </button>

            <!-- The Modal -->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">CALLER ID</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="/action_page.php">
                                <div class="form-group">
                                    <label for="email">Caller phone:</label>
                                    <input type="email" class="form-control" placeholder="Enter email" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Name:</label>
                                    <input type="password" class="form-control" placeholder="Enter password" id="pwd">
                                </div>
                                <input type="button" value="Add Extension" id="b_add_extension" style="margin-top:15px;">
                            </form>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-padding" data-dismiss="modal">Close</button>
                            <button type="button" class="btn  btn-success btn-padding" data-dismiss="modal">Verify</button>
                        </div>

                    </div>
                </div>
            </div>

            <a href="#" data-toggle="tooltip" title="The Caller ID is what pulses out while you dial with VADial You must choose a Caller ID to begin a calling session. All caller ID's must be valid call back numbers, therefore, to add a caller ID to your VADial, you must verify it by following these steps:
                          1. Press the 'Add Caller ID' button
                          2. Enter the number you wish to use as Caller ID and be prepared to answer it
                          3. Press the verify button
                          4. When your phone rings, answer it and press 1 to verify
                          5. You are done! You will see the new caller ID in your list"><i class="g_info_bubble fa fa-question-circle" ></i></a>
            <script>
                $(document).ready(function(){
                    $('[data-toggle="tooltip"]').tooltip();
                });
            </script>


        </div>
    </div>
</div>
</body>
</html>
