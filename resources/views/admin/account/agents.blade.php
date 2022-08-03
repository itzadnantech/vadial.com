<html>

<head>
    @include('admin.template.head')
</head>

<body>
@include('admin.template.header', ['tab' => 'account'])
<div class="content">
    <div class="row">
        @include('admin.account.template.header', ['menu' => 'agents'])
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 margin-top-30">
            <h6>AGENTS ACCOUNTS <i class="fa fa-angle-right"></i> VIEW AND MANAGE YOUR ACCOUNT</h6>
            <button class="btn btn-primary margin-top-10" data-toggle="modal" data-target="#myModal">Add Account <i class="fa fa-user-plus"></i></button>

            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>

                        </div>
                        <div class="modal-body">
                            <div class="form-card-div margin-top-30">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <h2 class="account-inform">Account Information</h2>
                                    </div>
                                </div>
                                <form method="post" action="{{ url('/admin/account/add_account') }}" id="add_account_form">
                                    @csrf
                                    <input type="hidden" name="account_type" value="agent">
                                    <div class="form-group">
                                        <label for="user_name">USERNAME*</label>
                                        <input type="text" class="form-control" id="user_name" name="user_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">PASSWORD*</label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="re_password">PASSWORD CONFIRM*</label>
                                        <input type="password" class="form-control" id="re_password" name="re_password" required>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="first_name">FIRST NAME</label>
                                            <input type="text" class="form-control"  id="first_name" name="first_name" required>
                                        </div>
                                        <div class="col">
                                            <label for="last_name">LAST NAME</label>
                                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                                        </div>
                                    </div><br>
                                    <div class="form-group">
                                        <label for="email"><b>EMAIL ADDRESS*</b></label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    {{--                                    <label for="language">LANGUAGES*</label><br>--}}
                                    {{--                                    <select name="language" id="language" class="width-100 padding-6">--}}
                                    {{--                                        <option value="en">ENGLISH</option>--}}
                                    {{--                                    </select><br>--}}
                                    <button class="btn btn-primary margin-top-10" type="submit">Add</button>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-striped margin-top-30">
                    <thead class="thead-light text-center">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">User</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Last Login</th>
                        <th scope="col">Date Created</th>
                        <th scope="col">Controls</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @if (isset($users))
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->user_id }}</td>
                                <td>{{ $user->user_name }}</td>
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->last_login }}</td>
                                <td>{{ $user->date_created }}</td>
                                <td class="show_users">
                                    <button class="btn  btn-primary bg-dark-blue" onclick="view_agent('{{ url('/admin/account/get_account/' . $user->user_id) }}')"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-primary"><i class="fa fa-trash" onclick="remove_user('{{ url('/admin/account/delete_account/' . $user->user_id) }}')"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                    <div class="modal" id="agent_model">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h2 class="heading1">Account</h2>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <h3 class="heading2">Contact information</h3>
                                    <div class="row margin-bottom-30">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <div class="circle">
                                                <label for="account_image_file">
                                                    <img src="" id="account_image" class="circle-img"><i class="fa fa-camera fa-2x camera color-white" ></i>
                                                </label>
                                                <input type="hidden" value="" name="user_id" id="user_id" class="user_id">
                                                <input type="file" id="account_image_file" name="image" accept="image/x-png,image/gif,image/jpeg" style="display: none" />
                                            </div>

                                        </div>
                                        <form method="post" action="{{ url('/admin/account/change_account_email') }}" id="change_email_form">
                                            @csrf
                                            <input type="hidden" value="" name="user_id" id="user_id" class="user_id">
                                            <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
                                                <h3 id="full_name"></h3>
                                                <span class="display-flex margin-top-30">
                                                <i class="fa fa-envelope-o envelop"></i>
                                                <span class="margin-left-10">
                                                    <input type="email" class="margin-top-10 input-feild1 " placeholder="Email Address" name="email" id="account_email" value="" disabled>
                                                </span>
                                            </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-7 col-xs-7 margin-top-55">
                                                <button type="button" id="edit_email" class="btn btn-primary">Edit</button>
                                                <button type="submit" id="save_email" class="btn btn-success">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                    <h3 class="heading2">Account information</h3>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">
                                            <form class="form-inline" action="/action_page.php">
                                                <label for="email" class="font-size-14 color-dark-grey" value="Email sender name:"><b>Email sender name:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="email" class=" input-feild1" placeholder="Enter email"><br><br>
                                                <label for="email" class="font-size-14 color-dark-grey margin-top-10"><b>Time Zone:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <select name="cars" class="input-feild2 margin-top-10">
                                                    <option value="volvo">Eastern Standard Time</option>
                                                    <option value="saab">Central Standard Time</option>
                                                    <option value="opel">Arozona Time Zone</option>
                                                    <option value="audi">Mountain Standard Time</option>
                                                    <option value="saab">Pacific Standard Time</option>
                                                    <option value="opel">Alaska Time Zone</option>
                                                    <option value="audi">Hawaii Standard Time</option>
                                                </select>
                                                <a aria-current="page" class="btn save-btn" href="#">Save</a>
                                            </form>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <p class="font-size-14 color-dark-grey"><b>PIN:</b></p>
                                            <p class="font-size-14 color-dark-grey"><b>Posting PIN:</b></p>
                                            <p class="font-size-14 color-dark-grey"><b>Access Level:</b></p>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-5">
                                            <p>936202</p>
                                            <p>3077077705</p>
                                            <p>Super User</p>
                                        </div>
                                    </div>
                                    <h3 class="heading2">Password</h3>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <form method="post" action="{{ url('/admin/account/change_account_password') }}" id="change_password_form">
                                                @csrf
                                                <input type="hidden" value="" name="user_id" id="user_id" class="user_id">
                                                <label for="new_password" class="font-size-14 color-dark-grey"><b>New password:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="password" id="new_password" name="new_password" class=" input-feild3" placeholder="" required><br><br>
                                                <label for="re_password" class="font-size-14 color-dark-grey"><b>Confirm password:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="password" id="re_password" name="re_password" class=" input-feild1" placeholder="" required><br>
                                                <button type="submit" aria-current="page" class="btn save-btn">Save</button>
                                            </form>
                                        </div>

                                    </div>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    {{--                                    <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>--}}
                                    <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                                </div>

                            </div>
                        </div>
                    </div>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#account_image").on("error", function(){
            $(this).attr('src', root_url + '/assets/images/logo.png');
        });

        $("#save_email").prop('disabled', true);
        $("#account_email").prop('disabled', true);
        $("#edit_email").click(function(){
            $("#save_email").prop('disabled', false);
            $("#account_email").prop('disabled', false);
        });
    });

    function view_agent(index_url){
        $.ajax({
            url: index_url,
            context: document.body
        }).done(function(data) {
            console.log(data);
            $(".user_id").val(data['user_id']);

            $("#account_image").attr("src", root_url + "/assets/uploads/" + data['image']);
            $("#full_name").html(data['first_name'] + ' ' + data['last_name']);
            $("#account_email").val(data['email']);
            $("#agent_model").modal('show');
        });

    }
</script>
</body>

</html>
